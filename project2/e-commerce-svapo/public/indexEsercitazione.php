<?php
/*  //  { }  [ ]  @  #  */ 
require_once '../init/inc.php';


class welz extends DB {
   public function insert_one($tabella, $columns, $values) {
    $colonne = array_shift($columns);
    $colonne = implode(", ", $columns);
    
    $dataValues = array();
    foreach($values as $value) {
        $dataValues[] .= "'" . $value . "', "; 
    }
    $dataValues = implode('', $dataValues);
    $dataValues = substr($dataValues, 0, -2);
    
    $query = "INSERT INTO $tabella (" . $colonne . ") VALUES (" . $dataValues . ");";
    
    
    mysqli_query($this->conn, $query);
    }}  
            
         
           
        
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);      
        //forse graffe da applicare ai campi colonna nelle parentesi della query

$tabella = 'products';
$columns = array('id', 'name', 'description', 'price', 'img', 'brand', 'category');
$values = array('pad', 'pad', '1', 'pad', 'pad', 'e-cig');

$colonne = array_shift($columns);
$colonne = implode(", ", $columns);

$dataValues = array();
foreach($values as $value) {
    $dataValues[] .= "'" . $value . "', "; 
}
$dataValues = implode('', $dataValues);
$dataValues = substr($dataValues, 0, -2);

$query = "INSERT INTO $tabella (" . $colonne . ") VALUES (" . $dataValues . ");";


mysqli_query($conn, $query);

echo $colonne;
echo '<br><br>';
echo $dataValues;
echo '<br><br>';
echo $query;


//$welzMng = new welz();
//$newIdProduct = $welzMng->insert_one($tabella, $columns, $values);  

//echo $newIdProduct;