<?php
$cmItemMng = new CartItem();
$cm = new Cart();                    
$cartId = $cm->getCartId();


if(isset($_POST['incrementa'])) {
    $productId = htmlspecialchars(trim($_POST['id']));
    $cm->addToCart($cartId, $productId);
}

if(isset($_POST['decrementa'])) {
    $productId = htmlspecialchars(trim($_POST['id']));
    $cm->removeFromCart($cartId, $productId);
}


$results = $cm->getCartItems($cartId);
$totals = $cm->getCartTotal($cartId);


if(isset($_POST['confirm_order'])) { 
    $cm->confirmOrder($cartId);
}

/*  //  { }  [ ]  @  #  */ ?>

<?php if($results) : ?>

<h1>Prodotti nel carrello: <?php echo $totals['num_products']; ?></h1>

<?php foreach($results as $result) : ?>
<div class="flex carrello">

    <div class="flexCol" style="width: 30%;">
        <h3>Prodotto</h3> <hr>
        <img src="<?php echo ROOT_URL . $result['img']; ?>" alt="">
    </div>

    <div class="flexCol" style="width: 40%;">
        <h3><?php echo $result['name']; ?></h3><hr>
        <h4><?php echo $result['brand']; ?></h4>
        <strong>Colore:</strong> Midnight Green
    </div>

    <div class="flexCol" style="width: 15%;">
        <h3>Prezzo</h3><hr>
        <h4><?php echo $result['single_price']; ?>$</h4>
    </div>

    <div class="flexCol" style="width: 15%;">
        <h3>Subtotale</h3><hr>
        <h4><?php echo $result['total_price']; ?>$</h4>
    </div>

    <div class="flexCol" style="width: 10%;">
        <h3>Quantità</h3><hr>

        <form action="" method="post" name="">
        <div class="flex">   
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <button type="submit" name="decrementa">-</button>
            <div><?php echo $result['quantity']; ?></div>
            <button type="submit" name="incrementa">+</button>   
        </div>
        </form>

    </div>
</div>
<?php endforeach; ?> 


<h1>Totale : <?php echo $totals['total']; ?>$</h1>

<div class="opzioniCarrello">
<div class="prodModifica">
<hr>


<form action="" method="post">
<div class="flex bottoniCarrello">
    <button type="submit" name="confirm_order">Conferma ordine</button>
</div>
</form>


</div>

<?php else :  ?>
    <h1>Welekeseresè nessun prodotto nel carrello</h1>
<?php endif; ?>


<style>
    /*  //  { }  [ ]  @  #  */
.flexCol img {width: 100px;height: 100px;margin-top: -30px;} .flexCol {padding-top: 20px;} .flexCol hr {margin-bottom: 30px;} 
.bottoniCarrello button {margin-top: 20px; background-color: blue;color: white;padding: 5px 15px 5px 15px;font-size: 20px ;border-radius: 5px;margin-right: 10px;margin-bottom: 25px;} 
.prodModifica span {margin-right: 10px;} 
.carrello, .opzioniCarrello, h1 {width: 80%;margin-left: auto;margin-right: auto;} h1 {margin-top: 25px;}
/*.carrello {flex-direction: column;}*/
.flexCol button {padding: 3px 5px 3px 6px;margin-right: 5px;margin-left: 5px;border-radius: 5px;background-color: blue;color:white}     

</style>