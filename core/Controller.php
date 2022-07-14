<?php
    class Controller{

        public function __construct($database){
            $this->database = $database;
        }

        public function loadModel($modelName){
            $modelName .= 'Model';
            if( ! file_exists('models/'.$modelName.'.php')){
                return false;
            }

            require 'models/'.$modelName.'.php';

            $this->{$modelName} = new $modelName();
        }

        public function loadView($viewName, $data = []){
            if( ! file_exists('views/'.$viewName.'.php')){
                return false;
            }

            extract($data);

            require 'views/'.$viewName.'.php';
        }
    }
?>