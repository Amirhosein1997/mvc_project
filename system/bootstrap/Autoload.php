<?php
namespace system\bootstrap;

class Autoload
{

    public function myautoload()
    {

        spl_autoload_register(function ($classname){
            $classname=str_replace("\\","/",$classname);
            require_once $_SERVER['DOCUMENT_ROOT']."/berta/".$classname.".php";
            //echo $_SERVER['DOCUMENT_ROOT'];
            //  /mvc/application\controller/Post.php
        });
    }
}