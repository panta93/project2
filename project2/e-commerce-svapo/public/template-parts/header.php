<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<style>
/*  //  { }  [ ]  @  #  */
* {margin: 0;padding: 0;font-family: Verdana, Geneva, Tahoma, sans-serif;box-sizing: border-box;}
.flex {display: flex;}
.right {margin-left: auto;}
a {color: black;}
button {cursor: pointer;}
</style>

<body>
<!--*********************MINI-MENU**********************-->
<div class="panelDesktop flex">
    <p class="panelText">Welkesè Sigaretta elettronica</p>


<?php if($_SESSION['user']->user_type_id == 2) : ?>

<!--*********************ADMIN-MENU********************** !!!da modificarne lo style in mobile-->
<div class="containerMenuAdmin">
<div class="extra">&#9733;</div>
<div class="menuAdmin flex">
    <a href="<?php echo ROOT_URL ?>admin/?page=users-list">Lista Utenti</a>
    <a href="<?php echo ROOT_URL ?>admin/?page=orders-list">Lista Ordini</a>
    <a href="<?php echo ROOT_URL ?>admin/?page=products-list-admin">Lista Prodotti</a>
    <a href="<?php echo ROOT_URL ?>admin/?page=prodotti-più-venduti">Prodotti + venduti</a>
    <a href="<?php echo ROOT_URL ?>admin/?page=blog-article-admin">Blog Admin</a>
    <a href="<?php echo ROOT_URL ?>admin/?page=grafico-vendite">Grafico Profitti</a>
</div>
</div>
<?php endif; ?>

<style>
/*  //  { }  [ ]  @  #  */
.containerMenuAdmin {max-width: 500px;margin-left: auto;margin-right: auto;position: fixed;top:0;left: 405px;opacity: 1;z-index: 9999;}
.menuAdmin {display: none;opacity: 0.8;flex-direction: column;z-index: 10;position: absolute;top: 39px;background-color: black;border-radius: 7px;width: 208px;text-align: center;padding: 20px 0px 20px 0px;}
.menuAdmin a {color: white;text-decoration: none;padding: 5px 15px;margin-top: 10px;}   
.menuAdmin a:hover {font-weight: bold;color: gold; transition: 1s;}

.extra {position: relative;font-size: 36px;left: 86px;background-color: gold;border-radius: 50px;position: relative;font-size: 36px;left: 86px;background-color: gold;border-radius: 55px;padding: 0px 5px 0px 5px;}
.extra:hover + .menuAdmin {display: block; display: flex; flex-direction: column;}
.menuAdmin:hover {display: block;display: flex; flex-direction: column;}
</style>

<!--*********************ADMIN-MENU**********************-->



    
    <div class="menuPanelIcon right flexboxMobile">
          <div class="panelIconMobile"><a onclick="openMenu()"><i class="fa-solid fa-bars"></i></a></div>
          <div class="panelIconMobile"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></div>
         
          <div class="panelIcon"><a href="<?php echo ROOT_URL ?>auth/?page=logout"><span class="panelText">LOGOUT</span></a></div>
          <div class="panelIcon"><a href="<?php echo ROOT_URL ?>auth"><span class="panelText"><?php if(!$userLogged) { echo 'Accedi o Registrati';} else { echo $_SESSION['user']->email;} ?></span><i class="fa-solid fa-circle-user" style="margin-left: 8px;"></i></a></li></div>    
          <div class="panelIcon"><a href=""><i class="fa-solid fa-copy"></i></a></div>
          <div class="panelIcon"><a href="<?php echo ROOT_URL ?>shop/?page=cart"><i class="fa-solid fa-cart-shopping"></i></a></div>
    </div>
</div>
<style>
.panelDesktop {padding: 10px 5px 5px 5px;max-width: 2000px;margin-left: auto;margin-right: auto;}
.panelText {padding-left: 30px;font-size: large;}
.menuPanelIcon div {display: inline;margin-left: 20px;color:black;}
.panelIconMobile a {display: none;}    
.menuPanelIcon {margin-right: 25px;cursor: pointer;}
/*********************MINI-MENU**********************/
</style>


<!--*********MOD!!************LOGO-CONTAINER**********************-->
<nav class="flex welz">
    <div class="logoRight"><a href="<?php echo ROOT_URL ?>"> <img src="<?php echo ROOT_URL ?>img/wismec-logo.png"></a></div>
    
    <div class="logoLeft right ">
      <div class="text1"> <p>Scopri i vari Stores By Tod in the Welz:</p> </div>
            
        <div> <span class="stores cbd">       
            <img src="<?php echo ROOT_URL ?>img/everweed-logo.png" alt="">
                www.welkese.com</span>         
            <span class="stores eCig">
                <img src="<?php echo ROOT_URL ?>img/logo-electronic-cigarette.jpg" alt="">
                www.micyapad.com</span>
        </div>
            
       <div class="search">
         <form action="<?php echo ROOT_URL ?>shop/?page=products-list" method="get">
            <span> <input type="search" name="wordSearched"></span>
           <span> <button type="submit"><i class="fa fa-search"></i></button></span>
         </form>
        </div>
    </div></nav>

<style>
/*  //  { }  [ ]  @  #  */  
/*creare un'allineamento su tablet a colonna tra il logo e la searchbar */
nav {box-shadow: 1px 4px 20px;;border-radius: 10px;flex-wrap: wrap;background-image: linear-gradient(to bottom right, rgba(0,150,150,0.90), rgba(0,250,154,0.65), rgba(173,255,47,0.90));opacity: 0.78;max-width: 2000px;margin-left: auto;margin-right: auto;}
nav div {margin: auto;}

.logoRight img {width:100%;}

.stores {width: auto;padding: 15px;background-color: white;opacity: 0.63;border-radius: 25px;}
.stores img {width: 25px;height:25px;border-radius: 100%;}

.logoLeft div {margin-bottom: 15px;}
.logoLeft {text-align: right;}
.search {margin-top: 30px}
.search input {width: 391px;height: 30px;border-radius: 20px;opacity: 0.9;box-shadow: 1px 1px 7px}
.search button {margin-left: -32px;height: 30px;width: 30px;border-radius: 20px;opacity: 0.67;box-shadow: 1px 1px 7px}
.logoLeft p {margin-top: 10px;font-weight: bolder;color: darkolivegreen;}
.text1 {text-align: center;}
/*  //  { }  [ ]  @  #  */  
/**************MOD!!!*******CONTAINER_LOGO**********************/
</style>


<!--*********************MINI SLIDE**********************-->
<div class="slideContainer" id="javascriptTransform">
    <div class="slide"><a href=""><i class="fa-solid fa-truck"></i><span>Spedizioni entro 24h</span></a></div>
    <div class="slide"><a href=""><i class="fa-solid fa-people-line"></i>-50% alla Registrazione</a></div>
    <div class="slide color"><a href=""><i class="fa-brands fa-searchengin"></i>Clicca qui! Prova il <span style="color: blue;">TROV</span> <span style="color: yellow;">A</span> <span style="color: red;">R</span> <span style="color: green;">O</span> <span style="color: blueviolet;">M</span> <span>I</span></a></div>
</div>

<style>
.slideContainer {width: 100%;margin-top: 15px;max-width: 2000px;margin-left: auto;margin-right: auto;}
.slideContainer i {margin-right: 7px;}
.color span {margin: -2.5px;padding: -1px;}
.slide {width: 80%;margin: auto;text-align: center;}
</style>
<!--*********************MINI SLIDE**********************-->


<!--*********************MENU**********************-->
<div class="menu" id="openMobile">
<ul>
    <li class="homeIcon"><a href=""><i class="fa-solid fa-house"></i></a></li>

    <!--1* metodo RICERCA PER CATEGORYA  -->
    <li> 
   <a href="<?php echo ROOT_URL ?>shop/?category=e-cig">e-cig</a>
    </li>

    <!--2* metodo RICERCA PER CATEGORYA  -->
    <li> <form method="get" action="<?php echo ROOT_URL ?>shop"> 
    <button type="submit"><input type="hidden" name="category" value="e-cig">SIGARETTE ELETTRONICHE &#9733;</button>
    </form></li>
    
    <li><form method="get" action="<?php echo ROOT_URL ?>shop/?category=e-liquid">  
    <button type="submit"><input type="hidden" name="category" value="e-liquid">LIQUIDI &#9733;</button>
    </form></li>

    <form method="get" action="<?php echo ROOT_URL ?>shop/?page=products-list"><li>  
    <button type="submit"><input type="hidden" name="category" value="atom">ATOMIZZATORI &#9733;</button>
    </li></form>
    
    <form method="get" action="<?php echo ROOT_URL ?>shop/?page=products-list"><li>  
    <button type="submit"><input type="hidden" name="category" value="battery">BATTERIE &#9733;</button>
    </li></form>

    <form method="get" action="<?php echo ROOT_URL ?>shop/?page=products-list"><li>  
    <button type="submit"><input type="hidden" name="category" value="accessory">ACCESSORI &#9733;</button>
    </li></form>

    <li>  
    <button type="submit"><input type="hidden" name="category" value="SCONTI SETTIMANA">SCONTI &#9733;</button>
    </li>

    <li>  
    <button type="submit"><input type="hidden" name="category" value="welz">BLOG &#9733;</button>
    </li>

</ul>
</div>
<!--*********************MENU**********************-->
<style>
.menu {margin-top: 10px;padding: 5px 0px 5px 0px;;box-shadow: 1px -4px 20px;;border-radius: 3px;display: flex;flex-wrap: wrap;justify-content: space-around;background-image: linear-gradient(to top right, rgba(0,150,150,0.90), rgba(0,250,154,0.65), rgba(173,255,47,0.90));opacity: 0.78;}
.menu ul li {display: inline;color: black;font-weight: bold;opacity: 0.7;font-style: italic;}

.menu a {text-decoration: none;margin-left: 5px;}
.menu button:hover {background-color: black;color: gold;border-radius: 20px;padding: 20px;font-size: 20px;transition: 0.35s;}
.menu button  {background-image: none;padding: 2px;margin: 4px;border: none;border-radius: 10px;font-size: initial;background-color: greenyellow;font-weight: 800;}
ul {display: flex;}
/*  //  { }  [ ]  @  #  */
</style>

