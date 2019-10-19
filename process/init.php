<?php
session_start();

function login($email, $senha) {
    $_SESSION['autenticado'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $pwd;
}
 function logout() {
     session_destroy();
 }
 function is_logged() {
     return isset($_SESSION['email']);
 }
 function userEmail() {
     if (is_logged()) {
         return $_SESSION['email'];
     }
     return false;
 }
 function redirect($url = '/') {
     header("location: $url");
     exit();
 }
?>