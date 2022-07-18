<?php  



if(isset($_POST['login'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $userMng = new User();
    $userMng->login($email, $password);
}


if($userLogged) {
    echo '<script>location.href="'.ROOT_URL.'public";</script>'; 
}
/*  //  { }  [ ]  @  #  @  */
?>


<div class="containerLogin">
    <form action="" method="POST">
        <h1>Login:</h1>
        <input type="email" name="email" id=""> <span>E-mail</span> <br>
        <input type="password" name="password" id=""> <span>Password</span> <br>
        <button type="submit" name="login">Accedi</button>
    </form>
</div>

<style>
/*  //  { }  [ ]  @  #  @  */
.containerLogin {max-width: 2000px;margin-left: auto;margin-right: auto;}
.containerLogin input {width: 300px; height: 30px;border-radius: 5px;margin-top: 15px;}
.containerLogin button {padding: 5px 15px 5px 15px;font-size: 20px;margin-top: 20px;}
.containerLogin form {margin: 40px 0px 40px 40px;}

</style>