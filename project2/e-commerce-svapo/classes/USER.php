<?php

class User extends DBManager {

    public function __construct()
    {
        parent::__construct();
        $this->tableName = ('user');
        $this->columns = array ('id', 'email', 'password', 'user_type_id');
    }
//YBRID FUNKCTION BY littletod93
public function register($email, $password) {
    $msg = '';
    global $userLogged;
    $result = $this->db->query("SELECT * FROM user WHERE email = '$email'");//!!!nel linguaggio SQL se le variabili conterranno stringhe bisogna inserire gli apice
    if(count($result) > 0) {
        $msg = 'E-mail già registrata';
    } else {
        $this->create([
            'email' => $email,
            'password' => md5($password),
            'user_type_id' => 1
        ]);
        $msg = 'Account registrato correttamente';
    }
    echo $msg;

}

public function login($email, $password) {
    $msg = '';
    $result = $this->db->query("SELECT * FROM user WHERE email = '$email' AND password = md5('$password')");
    if(count($result) > 0) {
        $msg = 'Login effettuato con successo';
        $user = (object) $result[0];
        $this->setUser($user);
    } else {
        $msg = "L'email o la password non sono corretti";
    }
    echo $msg;
}

public function setUser($user) {
    $userAuth = (object) [
        'email' => $user->email,
        'password' => $user->password,
        'user_type_id' => $user->user_type_id
    ];
    $_SESSION['user'] = $userAuth;
}


}
/*  //  { }  [ ]  @  #  @  */

/*
     <form action="" method="POST">
        <h1>Login:</h1>
        <input type="email" name="email" id=""> <span>E-mail</span> <br>
        <input type="password" name="password" id=""> <span>Password</span> <br>
        <button type="submit">Accedi</button>

    $userLogged = null;

    if(isset($_SESSION['user'])) {
        $userLogged = $_SESSION['user'];
}
*/
