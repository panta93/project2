<?php
$cartItemsMng = new CartItem();
$results = $cartItemsMng->getAll(); 

$prodMng = new Product();
$nameProduct = $prodMng->get($result->product_id);
?>

<div class="containerOrdersList">
<h1>Order-list</h1>  
<?php foreach($results as $result) : ?>
<div class="ordersList flex" <?php if($result->cart_id % 2 == 0) {
                                   echo 'style="background-color: blueviolet;color: white;"';}                 
                              ?>>



<?php 
$prodMng = new Product();
$nameProduct = $prodMng->get($result->product_id);
?>

    <div class="colsm"><?php echo $result->id ?></div>
    <div class="colsm"><?php echo $result->cart_id ?></div>
    <div class="colmd"><?php echo $nameProduct->name ?></div>
    <div class="quantity colsm"><?php echo $result->quantity ?></div>


    <div class="status colsm"><?php if($result->status == 1) {
                                        echo '<strong>IN SOSPESO</strong>'; } else {
                                        echo '<strong style="color:gold;text-shadow: 2px 1px black;">PRONTO</strong>';
                                        }  ?></div>



    <div class="deleteRowList">x</div>

</div>
<?php endforeach; ?>
</div>

<style>
/*  //  { }  [ ]  @  #  */ 
.containerOrdersList {max-width: 2000px;margin-left: auto;margin-right: auto;margin-bottom: 150px;}
.containerOrdersList h1 {margin-left: 50px;margin-bottom: 30px;margin-top: 40px;} 
.ordersList {margin-left: 50px;margin-bottom: 50px;background-color: chartreuse;border-radius: 10px;padding: 3px 0px 3px 13px;opacity: 0.8;justify-content: space-between;} 
.colsm {width: 15%;} .colmd {width: 40%;}
.deleteRowList {margin-left: auto;font-weight: bold;font-size: 20px;margin-right: 10px;opacity: 0.8;}
</style>