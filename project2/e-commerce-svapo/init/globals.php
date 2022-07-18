<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, 'utf8');

$userLogged = null;

if(isset($_SESSION['user'])) {
    $userLogged = $_SESSION['user'];
}
