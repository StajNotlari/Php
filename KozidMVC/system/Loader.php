<?php
namespace rifatMVC;

class Loader 
{
    public static function model($model_name)
    {
        require 'models/'.$model_name.'.php';
        $model_name = 'rifatMVC\\'.$model_name;
        return new $model_name();
    }
    
    public static function view($file_name, $data = NULL)
    {
        require 'views/'.$file_name.'.php';
    }
}
