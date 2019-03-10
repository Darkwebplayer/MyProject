<?php

class Template{
    //path to template
    protected $template;
    //varibale passed in
    protected $vars=array();
        
    //class constructor
    public function __construct($template){
        $this->template=$template;
    }
    //get template variables
    public function __get($key)
    {
        return $this->vars($key);
    }
    //Set template varibales
    public function __set($key,$value)
    {
        $this->vars[$key]=$value;
    }
    //convert object to string
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}