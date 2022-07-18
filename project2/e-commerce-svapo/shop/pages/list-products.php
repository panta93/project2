<?php

if(! defined('ROOT_URL')){
    echo "<script>location.href='".ROOT_URL."';</script>";
    exit;
}

$mng = new Product();
$products = $mng->getAll();

?>
<?php if($products) : ?>
<?php foreach($products as $product) : ?>
  
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product->name ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->price ?></h6>
    <p class="card-text"><?php echo $product->description ?></p>
    <a href="#" class="card-link">VEDI</a>
    <a href="#" class="card-link">ACQUISTA</a>
  </div>
</div>

<?php endforeach; ?>
<?php else : ?>
   
<?php endif; ?>

