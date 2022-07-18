<?php
/*  //  { }  [ ]  @  #  */ 
//AGGIUNGI AL CARRELLO
if(isset($_POST['add_to_cart'])) {
    $productId = $_POST['id'];
    
    $cartMng = new Cart();
    $cartId = $cartMng->getCartId();
    $cartMng->addToCart($cartId, $productId);
} 

//FILTRO CATEGORIE !!!da stud cybersecurity sui metodi GET&POST
$_SESSION['prova'] = $_GET['wordSearched']; 

if ($_GET['wordSearched']) {
    $prodMng = new Product();
    $results = $prodMng->universalSearch('name', $_SESSION['prova']);
   } 


//FILTRO CATEGORIE !!!da stud cybersecurity sui metodi GET&POST
    if(isset($_GET['category'])) {

        $prodMng = new Product();
        $category = $_GET['category'];
        $results = $prodMng->universalSearch('category', $category);
    } 

   

/*  //  { }  [ ]  @  #  */ 
?>

<h1><?php echo $word; ?></h1>

<h1><?php echo $_SESSION['prova']; ?></h1>
<div class="listProductsSuperior"><h1>Sigarette elettroniche complete</h1> <hr> <br>
<h3>Scegli tra le migliori sigarette elettroniche in commercio.</h3>

<p><strong>Acquista il dispositivo giusto per te!</strong>ul nostro shop trovi solo le migliori marche dello svapo: VEEV, Justfog, Joyetech, Eleaf, Innokin, Smok e tanti altri.</p>
<p>Inoltre una vasta scelta di liquidi pronti, pod precaricate, mix&vape e liquidi fai da te.</p><br>

<br><br>Articoli 1-32 di 9999
</div>

<h1><?php 
echo $category;
?></h1>


<div class="flex containerListProducts">
<?php foreach($results as $result) : ?>
   
    <div class="containerProduct">
        <div><img src="<?php echo ROOT_URL . $result->img?>" alt=""></div>
        <h3><?php echo $result->name ?></h3>
        <p><?php echo $result->description ?></a></p>
        <br>
        <h2><?php echo $result->price ?>$</h2>

<form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $result->id ?>">
        <button type="submit" name="add_to_cart">Aggiungi al Carrello</button><br>
        <button><a href="<?php echo ROOT_URL ?>shop/?page=view-products&id=<?php echo $result->id ?>">Visualizza</a></button>
        <p style="color: goldenrod;"><i class="fa-brands fa-gratipay"></i> Vale fino a <strong>210 punti</strong></p>
</form>

    </div>

<?php endforeach; ?>
</div>

<style>
/*  //  { }  [ ]  @  # 
box-shadow: 0px 3px 10px 0px #888888; */
.listProductsSuperior {margin: 10px;}
.containerListProducts {flex-wrap: wrap;} 
.containerProduct {width: 20%;text-align: center;margin: 10px;padding: 10px;} 
.containerProduct:hover {box-shadow: 0px 3px 10px 0px #888888;} .containerProduct img {max-width: 150px;} 
.containerProduct button {padding: 5px;border-radius: 8px;margin: 5px;}   
</style>

