<?php 
    class Format{
        public function title(){
            $path = $_SERVER["SCRIPT_FILENAME"];
            $title = basename($path, '.php');
            if($title == 'index'){
                $title = 'home';
            }
            return $title = ucfirst($title);
        }
    }