<?php

if($userLogged) {
    echo '<script>location.href="'.ROOT_URL.'public";</script>';
    exit;
}

if(isset($_POST['register'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $userMng = new User();
    $userMng->register($email, $password);
}
/*  //  { }  [ ]  @  #  */
?>

<div class="containerRegistrazione">

<form action="" method="POST" name="" class="registrazione">
<h1>Registrazione:</h1>
     <span><input type="email" name="email" id=""></span> <span>E-mail</span> <br>
     <span><input type="password" name="password" id=""></span> <span>Password</span> <br>
    <!-- <span><input type="password"></span> <span>Ripeti la password</span> <br> -->
    <button type="submit" name="register">Registrati</button>
    <h3>Hai già un account? Effettua il <a href="<?php echo ROOT_URL ?>auth/?page=login">Login</a></h3>
</form>
</div>

<style>
/*  //  { }  [ ]  @  #  */
.containerRegistrazione {max-width: 2000px;margin-left: auto;margin-right: auto;}
.registrazione {margin: 40px 0px 40px 40px}
.registrazione input {width: 300px; height: 40px; border-radius: 5px;margin-top: 15px;}
.registrazione button {padding: 5px 20px 5px 20px;font-size: 20px;border-radius: 5px;margin-top: 18px;}
.containerRegistrazione h3 {margin-top: 25px;margin-bottom: 30px;}
</style>

