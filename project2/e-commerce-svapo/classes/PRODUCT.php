<?php

class Product extends DBManager {
    
    public function __construct()
    {
        parent::__construct();
        $this->tableName = ('products');
        $this->columns = array ('id', 'name', 'description', 'price', 'img', 'brand', 'category');
    }

} 
/*  //  { }  [ ]  @  #  */ 