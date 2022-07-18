<small>Home / Sigarette elettroniche complete</small>

<div class="containerViewProduct flex">


<div class="viewLeftCenter">

<div class="flex">
    <div class="viewLeft">


<?php 
 /*  //  { }  [ ]  @  #  */ 

if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];

    $cartMng = new Cart();
    $cartId = $cartMng->getCartId();
    $cartMng->addToCart($cartId, $id);
}

$productId = htmlspecialchars(trim($_GET['id']));
$productMng = new Product();
$results = $productMng->get($productId);
?>

<?php foreach($results as $result) : ?>
        <img class="imgProductView" src="<?php echo ROOT_URL . $result['img']?>" alt="">

        <div class="containerMiniImg flex">
            <img src="<?php echo ROOT_URL ?>img/mini-kiwi1.jpg" alt="">
            <img src="<?php echo ROOT_URL ?>img/mini-kiwi2.jpg" alt="">
            <img src="<?php echo ROOT_URL ?>img/mini-kiwi3.jpg" alt="">
            <img src="<?php echo ROOT_URL ?>img/mini-kiwi4.jpg" alt="">
        </div>

        <img class="instagramOfferta" src="<?php echo ROOT_URL ?>img/widget-sconti-instagram-02.jpg" alt="">

    </div>


    <div class="viewCenter">
        <h1><?php echo $result->name ?></h1>
        di: <a href=""><?php echo $result['brand'] ?></a>
        <hr><br>
        <strong style="color: green;">DISPONIBILE</strong><br>
        <strong>SKU</strong> VP003476 <br>
        <i style="color: goldenrod;" class="fa-solid fa-star gold"></i> <i class="fa-solid fa-star gold"></i> <i class="fa-solid fa-star gold"></i> <i class="fa-solid fa-star gold"></i> <small style="color: blue;">8 RECENSIONI AGGIUNGI LA TUA</small><br>
        <small style="color: goldenrod;">Vale fino a <strong>207 punti</strong> BestFriends</small><br>
        <?php echo $result['description'] ?> <br>
        da <h2><?php echo $result['price'] ?>$</h2>
        <small>Vuoi risparmiare? Usa i punti BestFriends. Scopri come!</small><br><br>
<!--MENU OPZIONE PER SCEGLIERE COLORE-->
        <strong>Colore <strong style="color: red;">*</strong></strong>
        <form>
            <select name="colore" >
            <option value="" selected="selected">Scegli un'opzione...</option>
            <option value="">Oro Rosa</option>
            <option value="">Verde</option>
            <option value="">Nero</option>
            <option value="">Rosso</option>
            <option value="">Metallizzata</option>
            </select> 
        </form><br><br>
<!--MENU OPZIONE PER SCEGLIERE COLORE-->  

        <strong>Quantità:</strong><br>
        <span><button class="piu">+</button></span> <span><button class="meno">-</button></span> <span class="numProduct">1</span><br>
        
        <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
        <button class="add" name="add_to_cart">AGGIUNGI AL CARRELLO</button>
        </form>

<style>
    .add{margin-bottom: 10px;}
   
</style>


        <hr>
        <small>- Spedito in: 1-2 giorni</small><br>
        <small>- Prodotto con</small>  <strong>SPEDIZIONE GRATUITA</strong><br>
        <small>- Hai bisogno di aiuto? <a href="">Vai al centro assistenza</a> </small><br>
        <small>- Assistenza telefonica: 089485975 (Lun-Vend 9.00/12.30)</small><br>
        <small>- Informazioni su <a href="">diritto di recesso e di garanzia</a></small>
        <hr>
        <span> <i class="fa-solid fa-heart-circle-plus"></i> <strong>Wishlist</strong></span> <span><i class="fa-solid fa-copy"></i> <strong>Confronto</strong></span>
        <hr>
        <span><i class="fa-brands fa-android"></i></span><span><small>Vuoi assistenza su questo prodotto? Loggati e chiedilo <a href="">a Vapy!</a></small></span>

<?php endforeach; ?>        

    </div>
    </div>

    <h1>Dettagli: KIWI Starter Kit</h1>
    <p>Vi presentiamo il prodigioso KIWI Starter Kit, un dispositivo davvero utile per chiunque voglia passare alla sigaretta elettronica e smettere completamente di fumare.</p>
    <br>
    <p>Il pregevole kit si compone di una KIWI Pen, ovvero una sigaretta elettronica dalla forma tubolare, e di un pratico Power Bank per permetterti di gestire i tuoi momenti di svapo nella maniera più comoda possibile, avendo la possibilità di una carica della batteria sempre a piena efficienza.</p>
    <br>
    <p>La KIWI Pen ha un’estetica decisamente elegante e minimale e si attiva semplicemente aspirando, senza l'ausilio di alcun pulsante. Si compone di: un corpo batteria da 400mAh, con un wattaggio che arriva fino a 13W di potenza, una Pod magnetica intercambiabile con resistenza incorporata (non sostituibile) da 1.2ohm, con serbatoio da 1.8ml di capacità, un pratico tappo in silicone per poter accedere al vano refill, un drip tip in cotone che permette di simulare il tiro della sigaretta classica, emulando quindi il medesimo feeling, o in alternativa un drip-tip in plastica per un tiro un po’ più aperto.</p>
    <br>
    <p>La KIWI Pen può essere ricaricata anche con il classico cavetto tramite la pratica porta USB Type –C presente nella parte inferiore del corpo batteria. Inoltre si avvale anche di una speciale vibrazione che si attiva qualora vengano effettuati 20 tiri nell'arco di dicei minuti.</p>
    <br>
    <p>Il LED a forma di K presente sulla parte frontale, oltre a decorare il dispositivo, determina anche lo stato di carica della batteria a seconda del colore bianco (carico) o rosso (scarico).</p>
    <br>
    <p>Con un semplice gesto sarà possibile agganciare la KIWI Pen in maniera salda al Power Bank tramite dei pratici connettori magnetici, per garantirre un’autonomia maggiore della carica e una più accurata protezione dagli urti.</p>
    <br>
    <p>Il KIWI Power Bank ha una batteria integrata da 1600mAh e un elegante scocca in policarbonato. Grazie al pulsante “soft touch” collocato nella parte posteriore del Power Bank, con 5  semplici tocchi sarà possibile accendere o spegnere il dispositivo e con un tocco solo controllare lo stato di carica della batteria dello stesso tramite i tre LED luminosi: 1 LED 1-30%, 2 LED 30-60%, 3 LED 60-100%.</p>
    <br>
    <p>Scopri il mondo KIWI, scegli di passare allo svapo in maniera efficace e con semplicità!</p>
    <br>

    <strong>Caratteristiche del prodotto:</strong>
    POWER BANK <br>
    <p>Dimensioni: 110,76 x 21,5 x 38,9 <br>
    Capacità della batteria: 1650mAh <br>
    Corrente di carica: 1500 mA <br>
    Tensione di output: 5V/ Max Current 500mA 
</p>
 <strong>Contenuto della confezione:</strong>
 <p>1x KIWI Pen <br>
1x KIWI Power Bank <br>
1x Pod <br>
1x Drip tip in cotone <br>
1x Drip Tip in plastica <br>
1x Cavetto USB Type C <br>
1x Adattatore a muro <br>
1x Manuale di istruzioni <br>
1x Certificato di garanzia 

</p>
</div>


    <div class="viewRight flex">
        
        <div class="viewRightSuperior flex">
        <h6>Prodotti correlati:</h6>

        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/offerta4.jpg" alt="">
            <div><small>Kit Zlide <br> Innokin <br> da: <strong>69,90$</strong></small> </div>         
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/offerta3.jpg" alt="">
            <div><small>Atom Speed Revolution <br> LukaCreatyons <br> da: <strong>36,90$</strong></small> </div>          
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/offerta2.jpg" alt="">
            <div><small>Kit Piko Squeeze <br> Eleaf <br> da: <strong>26,90$</strong></small> </div>         
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/offerta1.jpg" alt="">
            <div><small>Atom Melo9 <br> Eleaf <br> da: <strong>36,90$</strong></small> </div>           
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/justfog.jpg" alt="">
            <div><small>E-cig Q19 <br> Justfog <br> da: <strong>16,90$</strong></small> </div>           
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/eleaf.jpg" alt="">
            <div><small>E-cig Eleaf987 <br> Eleaf <br> da: <strong>16,90$</strong></small> </div>          
        </div>
<hr>
        <div class="flex">
            <img src="<?php echo ROOT_URL ?>img/dolphin.jpg" alt="">
            <div><small>Box meccanica Dolphin <br> Welkese <br> da: <strong>150,90$</strong></small> </div>           
        </div>
<hr>
    </div>

    <div class="flex viewRightCenter">
        
        <div class="flex">
            <i class="fa-solid fa-phone"></i>
            <div><h5>HAI BISOGNO DI AIUTO?</h5>
                <a href="">Vai al centro assistenza <br> <h5>OPPURE CHIAMACI</h5> al <a href="">0043985375</a><br> Dal Lunedì al Venerdì dalle 9.00 alle 12.30</a></div>
            </div>
       

        <div class="flex">
        <i class="fa-solid fa-truck"></i>
        <div><h5>SPEDIZIONE</h5>A partire da 2,90$ <br>Gratuita da 49$ GLS <br><a href="">Info sulle spedizioni</a>
        <br><br> <h5>IN GIORNATA*</h5>
        <a href="">Se acquisti entro le 15.00</a> <br>*Dettagli</div>
        </div>

        <div class="flex">
        <i class="fa-brands fa-gratipay"></i>
        <div><h5>RISPARMIA</h5>
        Scopri la raccolta punti <br>
        <a href="">BestFriends</a></div>
        </div>

        <div class="flex">
        <i class="fa-solid fa-gift"></i>
        <div><h5>FAI UN REGALO</h5>
        <a href="">Gift Card da 10$ a 100$</a></div>
        </div>

    </div>

</div>
</div>
<style>
/* //  { }  [ ]  @  # */
.containerViewProduct {justify-content: space-between;max-width: 2000px;margin-left: auto;margin-right: auto;}
.viewLeft {width: 27%;} .viewCenter {width: 52%} .viewRight {width: 12%;margin-right: 5px;}

.viewRight {flex-direction: column;} 
.viewRightSuperior {flex-direction: column;height:400px;overflow-x: hidden;overflow-y: scroll;}
.viewRight img {width: 40px;height: 40px;margin-right: 3px;}
.viewRight h6 {background-color: blue;color: white;padding: 5px;border-radius: 2px;margin-bottom: 5px;}

.viewRightCenter i {color: brown;} .viewRightCenter h5 {color: blue;}  
.viewRightCenter {flex-direction: column;} 


</style>
<style>

/* //  { }  [ ]  @  #  img/widget-sconti-instagram-02.jpg */
.piu, .meno {padding:5px 10px 5px 10px;color: white;background-color: grey;}
.numProduct {padding: 5px 10px 5px 10px;border:1px solid black;}
.add {color:white;background-color: green;padding: 5px;margin-top: 5px;}
.viewCenter a {color: blue;}

.containerMiniImg img {border: 1px solid black; width: 70px;height: 70px;margin-right: 5px;}

.instagramOfferta {width: 70%;margin-top: 10px;}    

@media screen and (max-width: 780px) {
.containerViewProduct {flex-direction: column;}
.containerViewProduct {max-width: 2000px;margin-left: auto;margin-right: auto;width: 90%;}
.containerMiniImg {justify-content: center;}

.imgProductView {width: 100%;}
}

</style>