<?php

class Cart extends DBManager {

    private $clientId;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'carts';
        $this->columns = array ('id', 'client_id');
 
        $this->_initializeSession();
    }

    //bylittletodevelopments:   /*  //  { }  [ ]  @  #  */ 
    /*private function welkese($result, $index, $column) {
        if(count($result) > 0) {
            $var = $result[$index]["'".$column."'"];
    }}*/

   public function getCartId() {
        $cartId = 0;
        $result = $this->db->query("SELECT * FROM carts WHERE client_id = '$this->clientId'");
        if(count($result) > 0) {
            $cartId = $result[0]['id'];
        } else {
            $cartId = $this->create([
            'client_id' => $this->clientId
            ]);
        }
        return $cartId;
    }


    public function _initializeSession() {
        if(isset($_SESSION['client_id'])) {
            $this->clientId = $_SESSION['client_id'];
        } else {
            $randomStr = $this->_randomId();
            $_SESSION['client_id'] = $randomStr;
            $this->clientId = $randomStr;
        }
    }

    public function _randomId() {
        return substr(md5(mt_rand()), 0, 20);
    }

    public function addToCart($cartId, $productId) {
        $quantity = 0;
        $result = $this->db->query("SELECT quantity FROM cart_items WHERE cart_id = $cartId AND product_id = $productId");
        if(count($result) > 0) {
            $quantity = $result[0]['quantity'];
        }
        $quantity++;
        if(count($result) > 0) {
            $this->db->execute("UPDATE cart_items SET quantity = $quantity WHERE cart_id = $cartId AND product_id = $productId");
        } else {
            $cartItemMng = new CartItem();
            $newCartItem = $cartItemMng->create([
                'cart_id' => $cartId,
                'product_id' => $productId,
                'quantity' => $quantity,
                'status' => 1
            ]);
        }
    }

    public function confirmOrder($cartId) {
            $this->db->execute("UPDATE cart_items SET status = 2 WHERE cart_id = $cartId");
            echo '<script>location.href="'.ROOT_URL.'shop/?page=payment";</script>;'; 
    }

        public function removeFromCart($cartId, $productId) {
            $quantity = 0;
            $result = $this->db->query("SELECT id, quantity FROM cart_items WHERE cart_id = $cartId AND product_id = $productId");
            $idProduct = $result[0]['id'];
            if(count($result) > 0) {
                $quantity = $result[0]['quantity'];
            }
            $quantity--;
            if(($quantity) > 0) {
                $this->db->execute("UPDATE cart_items SET quantity = $quantity WHERE cart_id = $cartId AND product_id = $productId");
                } else {
                    $cartItemMng = new CartItem();
                    $cartItemMng->delete($idProduct);
                }    
            }

   

/* { }  [ ] */


public function getCartItems($cartId) {
    return $this->db->query("
    SELECT
    products.id as id,
    products.name as name,
    products.description as description,
    products.price as single_price,
    products.brand as brand,
    products.img as img,
    products.price * cart_items.quantity as total_price,
    cart_items.quantity as quantity
    FROM products
    INNER JOIN cart_items
    ON cart_items.product_id = products.id
    WHERE cart_items.cart_id = $cartId;

    ");
}


public function getCartTotal($cartId) {
    $result = $this->db->query("
    SELECT 
    SUM(cart_items.quantity) as num_products,
    SUM(cart_items.quantity * products.price) as total
    FROM cart_items
    INNER JOIN products
    ON cart_items.product_id = products.id
    WHERE cart_items.cart_id = $cartId;
    ");
    return $result[0];
}


}

   class CartItem extends DBManager {

        public function __construct()
        {
            parent::__construct();
            $this->tableName = ('cart_items');
            $this->columns = array ('id', 'cart_id', 'product_id', 'quantity', 'status');
        }
   }



/*  //  { }  [ ]  @  #  */ 



