<?php  
/*  //  { }  [ ]  @  #  */
//DA AGGIUNGERE DATA REGISTRAZIONE, PULSANTE PER ELIMINARE UTENTE, 
$userMng = new User();
$results = $userMng->getAll();
?>


<div class="containerUserList">
<h1>Users-list:</h1>
<?php foreach($results as $result) : ?>
<div class="userList flex">


<div><?php echo $result->id ?></div> <div><?php echo $result->email ?></div> 

<div class="userTypeId"><?php if($result->user_type_id == 1) {
    echo 'USER';
} else {
    echo '<strong>ADMIN</strong>';
}


?></div>

</div>
<?php endforeach; ?>
</div>

<style>
/*  //  { }  [ ]  @  #  */
.containerUserList {max-width: 2000px;margin-left: auto;margin-right: auto;}
.containerUserList h1 {margin-left: 50px;margin-bottom: 30px;margin-top: 40px;} 
.userList {margin-left: 50px;margin-bottom: 50px;    background-color: chartreuse;border-radius: 10px;padding: 3px 0px 3px 13px;opacity: 0.8;} 
.containerUserList div {margin-right: 40px;}
.userTypeId {margin-left: auto;}
</style>