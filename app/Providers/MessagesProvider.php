<?php

namespace App\Providers;

use Illuminate\Support\Collection;

class MessagesProvider
{
    
    protected $collection;

    public function __construct($collection = null) {
        if( is_null($collection)) {
            $this->collection = new Collection([]);
        }
    }
    
    public function debug($message, array $context = [])
    {
        $data = app('arrays')->interpolate($message, $context);
        logger()->debug($message, $context);
        $this->add([
            'type'=>'debug',
            'message'=>$data,
        ]);
        return true;
    }
    
    public function info($message, array $context = [])
    {
        $data = app('arrays')->interpolate($message, $context);
        logger()->info($message, $context);
        $this->add([
            'type'=>'info',
            'message'=>$data,
        ]);
    }
    
    public function errorCode($code, array $context = [])
    {
        $message = $this->getMessageCode($code, $context);
        logger()->error($code, $context);
        $this->add([
            'message'=>$message ? $message : $context,
            'code'=>$code
        ]);
        return false;
    }
    
    public function infoCode($code, array $context = [])
    {
        $message = $this->getMessageCode($code, $context);
        logger()->info($code, $context);
        $this->add([
            'type'=>'info',
            'message'=>$message,
            'code'=>$code
        ]);
        return true;
    }
    
    public function getMessageCode($code, $data = [])
    {
        static $errors = null;        
        if (!$errors) {
            $errors = config('errors');
        }        
        $message = isset($errors[$code]) ? $errors[$code] : null;        
        if (!empty($data) && !is_null($message)) {
            $message = app('arrays')->interpolate($message, $data);
        }        
        return $message;
    }
    
    public function error($message, array $context = [])
    {
        $data = app('arrays')->interpolate($message, $context);
        logger()->error($message, $context);
        $this->add([
            'message'=>$data,
        ]);
        return false;
    }

    public function add($input)
    {
        $message = app('arrays')->mergeDefault($input, [
            'type'=>'error',
            'message'=>'',
            'code'=>''
        ]);
        $this->addMessage($message);        
    }
    
    public function get()
    {
        if( config('app.env') === 'local') {
            return $this->collection->all();
        }
        return $this->getErrors();
    }
    
    public function getErrors()
    {
        return $this->collection->where('type', 'error')->map(function($record) {
            return collect($record)->only('code', 'message')->toArray();
        })->values()->toArray();
    }
    
    public function getInfo()
    { 
        return $this->collection->where('type', 'info')->map(function($record) {
            return collect($record)->only('code', 'message')->toArray();
        })->values();
    }
    
    public function getDebug()
    {
        return $this->collection->where('type', 'debug')->map(function($record) {
            return collect($record)->only('message')->toArray();
        })->values();
    }
    
    public function getAllTypes()
    {
        return [
            'errors'=>$this->getErrors(),
            'info'=>$this->getInfo(),
            'debug'=>$this->getDebug(),
        ];
    }
    
    private function addMessage($message)
    {        
        $this->collection->push($message);
        return $message;
    }
    
}
