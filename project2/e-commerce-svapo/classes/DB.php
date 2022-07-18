<?php
class DB {
    public $pdo;

    //Bylittletod
    public $stringColValue;
    
    public function __construct()
    {
        
        //METODO PDO:
        try {
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connessione Riuscita";
          } catch(PDOException $e) {
            echo "Connessione Fallita: " . $e->getMessage();
          }
    }

    public function query($sql) {
        $q = $this->pdo->query($sql);
        if(!$q) {
            echo 'Errore';
        } 
        $data = $q->fetchAll();
        return $data;
        $this->pdo = null;
    } 
   
    public function execute($sql) {
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
    } 



public function universalSelect($tableName, $colName, $keyword) {
    $query = "SELECT * FROM $tableName WHERE $colName LIKE '%$keyword%'";
    $result = $this->query($query); 
    return $result;
    }

public function select_all($tableName) {      
    $query = "SELECT * FROM . $tableName";     
    $result = $this->query($query);       
    return $result;
}

public function select_one($tableName, $id) {
    $query = "SELECT * FROM $tableName WHERE id = $id";
    $result = $this->query($query);
    return $result;
}

public function delete_one($tableName, $id) {
    $query = "DELETE FROM $tableName WHERE id = $id";     
    $result = $this->pdo->query($query);
    $numRowsDeleted = $result->rowCount();
    return $numRowsDeleted;
    
}



public function mod($tableName, $columns = array(), $newValues, $id) {

    $arrayKV = array_combine($columns,$newValues);
    foreach($arrayKV as $colName => $colValues) {
        if(!$colValues) {continue;}
        $this->stringColValue .= " $colName". " = '$colValues' ,";   
    }  
    $this->stringColValue = substr($this->stringColValue, 0, -1);

    $query = "UPDATE $tableName SET $this->stringColValue WHERE id = $id"; 
    $result = $this->pdo->query($query);
    $numRowsUpdated = $result->rowCount();
    return $numRowsUpdated;
}

public function insert_one($tabella, $columns, $values) {
    $colonne = array_shift($columns); //elimina 1*elemento array, campo'id'
        
    $dataValues = array();//crea array vuoto
    foreach($values as $value) {//cicla i valori da inserire nella tabella
            $dataValues[] .= "'" . $value . "', "; //formattazione SQL, dentro array
            }
            $dataValues = implode('', $dataValues);//trasforma in stringa l'array formattato SQL
            $dataValues = substr($dataValues, 0, -2);//elimina l'ultimo spazio e virgola
        
    $query = "INSERT INTO $tabella (" . implode(", ", $columns) . ") VALUES (" . $dataValues . ");";    
    
    $this->pdo->query($query); 
    $lastId = $this->pdo->lastInsertId();
     
    return $lastId;
}

 /*  //  { }  [ ]  @  #  */ 
}

class DBManager extends DB {
    protected $db;
    protected $tableName;
    protected $columns;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAll() {
        $result = $this->db->select_all($this->tableName);
        $obj = array();
        foreach($result as $resultArray) {
            array_push($obj, (object) $resultArray);
        }
        return $obj;
    }

    public function universalSearch($colName, $keyword) {
        $result = $this->db->universalSelect($this->tableName, (string) $colName, (string) $keyword);
        $obj = array();
        foreach($result as $resultArray) {
            array_push($obj, (object) $resultArray);
        }
        return $obj;
    }

    public function mod_element($newValues, $id) {
        $numRowsUpdated = $this->db->mod($this->tableName, $this->columns, (array) $newValues, (int) $id);
        return (int) $numRowsUpdated;
    }

    public function get($id) {
        $result = $this->db->select_one($this->tableName, (int) $id);
        return (object) $result;
    }

    public function delete($id) {
        $numRowsDeleted = $this->db->delete_one($this->tableName, (int) $id);
        return (int) $numRowsDeleted;
    }

    public function create($values) {
        $lastId = $this->db->insert_one($this->tableName, $this->columns, (array) $values); 
        return $lastId; 
    }
 /*  //  { }  [ ]  @  #  */ 
}
