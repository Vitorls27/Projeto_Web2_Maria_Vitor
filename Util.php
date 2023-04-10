<?php

class Util{
  static function logar($param){
    session_start();

    $_SESSION['login'] = $param['login'];
    $_SESSION['senha'] = $param['senha'];
    
    if($_SESSION['login'] =="maria" && $_SESSION['senha'] == "000"){
      header("Location:main.php");
    } else {
      header("Location:login.php?msg=erro");
      $_SESSION['login'] = null;
    }
  }
  static function verificar(){
    session_start();
    if (isset($_SESSION['login'])) {
      if($_SESSION['login'] == null){
        session_destroy();
        header("Location: login.php");
      }
    } else {
      session_destroy();
      header("Location: login.php");
    }
    
  }

  static function logoff(){
    session_start();
    session_destroy();
  }
}