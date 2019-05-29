<?php
class Session{
    
    public static function start(){
        if(empty($_SESSION)){
            session_start();
        }
    }
    public static function set($key,$value){
        $_SESSION[$key]=$value;
    }
    public static function get($key,$secondkey =false){
        if($secondkey == true){
            if(isset($_SESSION[$key][$secondkey]))
            return $_SESSION[$key][$secondkey];
        }else{
            if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        }
        return false;
    }
    public static function destroy(){
        session_unset();
        session_destroy();
    }


}
