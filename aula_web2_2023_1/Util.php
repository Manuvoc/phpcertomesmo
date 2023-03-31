<?php

class Util{
    static function logar($param){
        session_start();

        $_SESSION['login'] = $param['login'];
        $_SESSION['senha'] = $param['senha'];
        header("Location: main.php");


        if($_SESSION['login'] =="admin" && $_SESSION['senha'] == "123"){
            header("Location: view/main.php");
        } else {
            header("Location: view/login.php?msg=erro");
        }
    }
    static function verificar(){
        session_start();
        if($_SESSION['login'] == null){
            session_destroy();
            $_SESSION['login'] = null;
            header("Location: login.php");
        }
    }
}