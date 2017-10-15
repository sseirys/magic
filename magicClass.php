<?php
class MagicClass {
    // __construct(), destruct(), __call(), __callStatic(),
    // __set(), __get(), __isset(), __unset(),
    private $data = array();

    public function __construct()
    {
        echo "__construct()<br>".PHP_EOL;
        $this->greeting = "Hello";
        $this->name = "World";
        $this->init = "__construct() Done.";
        echo $this->init."<br>".PHP_EOL;
    }

    public function __toString()
    {
        //jeigu buvo atliktas __invoke(), bus grazinamas nustatytas kintamasis
        if (!isset($this->data['string']))
        {
            return "Class is being used as string. <br>".PHP_EOL;
        }
        else
        {
            return $this->data['string'];
        }
    }

    public function __invoke($input)
    {
        $this->data['string'] = $input."-after-invoke<br>".PHP_EOL;
    }

    public function __destruct()
    {
        echo "__destruct() Done. <br>".PHP_EOL;
    }

    public function __call($method, $arguments)
    {
        echo "Method ".$method." is called that doesn't exist.<br>".PHP_EOL;
    }

    public function __callStatic($method, $arguments)
    {
        echo "Static method ".$method." is called that doesn't exist.<br>".PHP_EOL;
    }

    public function __set($name, $value)
    {
        echo "Setting ".$name." to ".$value."<br>".PHP_EOL;
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting ".$name."<br>".PHP_EOL;
        return $this->data[$name];
    }

    public function __isset($name)
    {
        echo "checking if ".$name." is set.".PHP_EOL;
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Unsetting ".$name."<br>".PHP_EOL;
        unset($this->data[$name]);
    }

    public function greet()
    {
        echo $this->greeting." ".$this->name."!<br>".PHP_EOL;
    }
}


