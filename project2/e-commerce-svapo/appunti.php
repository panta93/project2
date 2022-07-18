homepage.php :
<form action="<?php echo ROOT_URL ?>shop/?page=products-list" method="POST">
    <input type="search" name="searchBar">
</form>

products-list.php : 
<?php 
if (isset($_POST['searchBar'])) {
    $productSearched = htmlspecialchars(trim($_POST['searchBar']));

    $prodMng = new Product();
    $results = $prodMng->searchBar($productSearched);
}
?>
products-list.php (HTML) :
<?php foreach($results as $result) : ?>
    html... 
<?php endforeach; ?>


DB.php :
<?php
public function search_select($tableName, $productSearched) {
    $query = "SELECT * FROM $tableName WHERE name LIKE '%$productSearched%'";
    $result = mysqli_query($this->conn, $result);
    $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    return $resultArray;
}

DBManager.php :
public function searchBar($productSearched) {
    $results = $this->db->search_select($this->tableName, (string) $productSearched);
    $obj = array();
    foreach($results as $resultArray) {
        array_push($obj, (object) $resultArray);
    }
    return $obj;
}



?>


%welz% --> sql language, search all results with have this word in the table.

<!-- /*  //  { }  [ ]  @  #  */ -->

<!--SEARCH UNIVERSAL FOR COLUMNS-->

<?php
//DB.php :

 function selectForColumn($tableName, $colName, $keyword) {
    $query = "SELECT * FROM $tableName WHERE $colName = '%$keyword%'";
    $result = mysqli_query($this->conn, $query);
    $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    return $resultArray;
}

//DBManager.php :

function searchColumn($colName, $keyword) {
    $results = $this->db->selectForColumn($this->tableName, (string) $colName, (string) $keyword);
    $obj = array();
    foreach($results as $resultArray) {
        array_push($obj, (object) $resultArray);
    }
    return $obj;
}



//CONFERMA ORDINE:USER

//HTML:
?>

<form action="" method="post">
    <button type="submit" name="order_confirm">Procedi all'acquisto</button>
</form>


<?php
/*  //  { }  [ ]  @  #  */
//PHP:
if(isset($_POST['order_confirm'])) {
    $cartMng = new Cart();
    $cartId = $cartMng->getCartId();
    $this->db->execute("UPDATE cart_items SET status = 2 WHERE cart_id = $cartId");
    echo '<script>location.href="'.ROOT_URL.'shop/?page=payment";</script>';
}
//FUNZIONE CHE MODIFICA I RECORDS SU DATABASE DA DASHBOARD  
function update_one($tableName, $columns = array() ,$id) {
    $strCol = "";
    foreach($columns as $colName => $colValue) {
     $strCol .= " " . $colName . "= '$colValue' ,"; 
    }
    
     $query = "UPDATE $tableName SET $strCol WHERE id = $id";
     $result = mysqli_query($this->conn, $query);
     if($result) {
         $numRowsUpdated = mysqli_affected_rows($this->conn);
     } else {
         return -1;
     }
     return $numRowsUpdated;
 }

[   'id' => $id,
    'name' => $name,
    'description' => $description,
    'price' => $price,
    'brand' => $brand,
    'category' => $category,
];

/*  //  { }  [ ]  @  #  */

?>

