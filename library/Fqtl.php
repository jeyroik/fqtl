<?php

class Fqtl
{
    protected $_instance = null;

    protected $_methods = [];
    protected $_data    = [];
    
    protected function __construct(){}
    
    public static function e()
    {
        return self::$_instance ? self::$_instance : self::$_instance = new self();
    }
    
    public function __call($method, $args)
    {
        if(!isset($this->_methods[$method]))
        {
            if(is_file(ROOT . $method . '.php'))
            {
                $this->_methods[$method] = include ROOT . $method . '.php';
                return $this->_methods[$method]($args);
            }
        }
        
        return null;
    }
}
