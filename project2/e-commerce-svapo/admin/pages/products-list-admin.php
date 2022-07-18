<?php 
//!!!pagina prodotti + venduti da inserire in questa stessa pagina attraverso una form di filtraggio 
//!!!trovare metodo per non slittare in flex-column gli altri div nell'evento hover 
$prodMng = new Product();
$results = $prodMng->getAll();

//studiare modo per effettuare un foreach
if ($_POST) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
}

//DA STUD AJAX PER REFRESH DEI DATO FORNITI DAL DB
if(isset($_POST['modRecords'])) {
    $newValues = array($id, $name, $description, $price, $img, $brand, $category);
    $prodMng->mod_element($newValues, $id);
}

if(isset($_POST['deleteRecords'])) {
    $numRowsDeleted = $prodMng->delete($id);
}


if(isset($_POST['insertRecords'])){
    $values = array($name, $description, $price, $img, $brand, $category);
    $lastId = $prodMng->create($values);
    //return $lastId; bug non compariva l'ultimo id caricato
}   //da risolvere con ajax, l'inserimento di valori doppi al refresh
/*  //  { }  [ ]  @  #  */ 
?>
<h1><?php echo $numRowsDeleted; ?></h1>
<!--SCHEDA MODIFICA-->
<div class="containerProductsList">

    <h1>products-list-admin</h1><?php foreach($results as $result) : ?>  
    <div class="productsList flex">
            <div class="prova3 flex">
                    <div class="colxsmProductsList prodList"><?php echo $result->id ?></div>              
                    <div class="colsmProductsList prodList"><button type="submit" class="buttonMod">Modifica</button><br><button type="submit" class="buttonMod">Elimina</button></div>                                                                                                                                                     
                    <div><img src="<?php echo ROOT_URL . $result->img ?>" style="width:50px; height:50px; border-radius: 10px"></div> 
                    <div class="colsmProductsList prodList"><?php echo $result->brand ?></div>
                    <div class="colmdProductsList prodList"><?php echo $result->name ?></div>                    
                    <div class="colmdProductsList adminProdDescription prodList"><?php echo $result->description?></div>                    
                    <div class="colxsmProductsList prodList"><?php echo $result->price ?> $</div>   
                    <div class="colsmProductsList categoryProductsList prodList" <?php if ($result->category == 'e-cig') {
                                                            echo "style='color:chartreuse;background-color:black;height:27px'";
                                                        } elseif ($result->category == 'e-liquid') {
                                                            echo "style='color:aqua;background-color:black;height:27px'";
                                                        } elseif ($result->category == 'battery') {
                                                            echo "style='color:red;background-color:black;height:27px'";
                                                        } ?>><?php echo $result->category ?></div>
             </div>

        <div class="formModProd flex">
            <form method="post" class="bo"><input type="hidden" name="id" value="<?php echo $result->id ?>"><button type="submit" class="buttonModd" name="modRecords">Modifica</button>
            <form method="post" class="bo"><input type="hidden" name="id" value="<?php echo $result->id ?>"><button type="submit" class="buttonModd" name="deleteRecords">Elimina</button>
            
                <input placeholder="Percorso file..." class="inputImg" type="text" name="img"><br>
                <input placeholder="Brand..." class="inputBrand" type="text" name="brand"><br>
                <input placeholder="Nome..." class="inputName" type="text" name="name"><br>
                <div class="inputDescription"><textarea placeholder="Inserisci la descrizione..." rows="4" cols="50" name="description"></textarea></div><br>
                <input placeholder="Prezzo..." class="inputPrice" type="text" name="price"><br>
                <input placeholder="Categoria..." class="inputCategory" type="text" name="category">
            </form>
        </div>
     
    </div>                                  <?php endforeach; ?>


<style>
.containerProductsList {max-width: 2000px;margin-left: auto;margin-right: auto;margin-bottom: 150px;overflow: auto;}                     
.containerProductsList h1 {margin-left: 50px;margin-bottom: 30px;margin-top: 40px;} 
.colxsmProductsList {width: 5%;}.colsmProductsList {width: 15%;} .colmdProductsList {width: 25%;}        

.deleteRowList {margin-left: auto;font-weight: bold;font-size: 20px;margin-right: 10px;opacity: 0.8;}
.categoryProductsList {height: 27px;background-color: white;border-radius: 10px;text-align: center;margin-right: 10px;height: 27px;font-weight: bold;font-size: 22px;}.buttonMod{padding: 3px 10px 3px 10px;font-size: 18px;border-radius: 10px;box-shadow: 1px 1px;}
.productsList {height: 80px;justify-content: space-between;flex-direction: column;overflow: hidden;box-shadow: 1px 5px 10px black;padding: 20px 0px 0px 10px;margin-left: 50px;margin-top: 50px;background-color: chartreuse;border-radius: 10px;padding: 16px 0px 3px 13px;opacity: 0.8;} 
.prova3 {display: flex;margin-bottom: 50px;} 

.formModProd {display: none; width: 50%;margin-right: 20px;} 
.formModProd input {width: 100%;height: 40px;border-radius: 10px;} 

.prl {height: 850px;flex-direction: row;} .pr {flex-direction: column;justify-content: space-between;} .fmp {display: block;}

input.inputCategory {position: relative;bottom: -323px;}   
input.inputPrice {position: relative;bottom: -269px;} 
.inputDescription {position: relative;bottom: -249px;height: 161px;border-radius: 10px;border: 2px solid black;} 
input.inputName {position: relative;bottom: -199px;}  
input.inputBrand {position: relative;bottom: -154px;} 
input.inputImg {position: relative;bottom: -97px;}
.inputDescription textarea {width: -webkit-fill-available;height: -webkit-fill-available;border-radius: 10px;}

.bo {margin-bottom: 50px;}
.buttonModd {font-weight: bold;;margin-top: 50px;padding: 6px 20px 6px 20px;font-size: 18px;border-radius: 10px;box-shadow: 1px 1px;}
.none {opacity: 0;} .l {width: 20%;}
</style>

<!--SCHEDA INSERISCI-->
<div class="productsList flex schedaAggiungiProd">

    <div class="prova3 flex">          
        <div class="colsmProductsList prodList"><button type="submit" class="buttonMod">Aggiungi Prodotto</button></div>            
    </div>

        <div class="formModProd flex">  
            <form method="post" class="bo">
                <button type="submit" class="buttonModd" name="insertRecords" required>Carica prodotto</button>
                <input placeholder="Percorso file..." class="inputImg" type="text" name="img" required><br>
                <input placeholder="Brand..." class="inputBrand" type="text" name="brand" required><br>
                <input placeholder="Nome..." class="inputName" type="text" name="name" required><br>
                <div class="inputDescription"><textarea placeholder="Inserisci la descrizione..." rows="4" cols="50" name="description" required></textarea></div><br>
                <input placeholder="Prezzo..." class="inputPrice" type="text" name="price" required><br>
                <input placeholder="Categoria..." class="inputCategory" type="text" name="category" required>
            </form>
        </div>
</div>

<script>
$(".productsList").hover(function() { // mouseover
    $(this).toggleClass("prl");
    $(".prova3").toggleClass("pr");
    $(".formModProd").toggleClass("fmp");
    $(".buttonMod").toggleClass("none");
});
</script>