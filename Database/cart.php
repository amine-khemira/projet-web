<?php

class cart
{
    public $db = null;
    public function __construct(DBController  $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }
    public function InsertIntoCart($params = null, $table="panier"){
        if ($this->db->con!=null){
            if ($params!=null) {

                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                return $this->db->con->query($query_string);
            }
        }
    }
    public function addToCart($userid,$itemid,$fabid){

            $params=array(
                "id_user"=>$userid,
                "id_produit"=>$itemid,
                "id_fab"=>$fabid
            );

            $result=$this->InsertIntoCart($params);
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);}


    }

    public function getSum($arr){
        if(isset($arr)){
            $sum=0;
                foreach($arr as $item){
                    $sum+=floatval($item[0]);
                }
                return sprintf('%2f',$sum);
        }
    }

    public function deleteCart($item_id=null,$table='panier'){
        if($item_id!=null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE  id_produit={$item_id} AND id_user={$_SESSION['userID']}");
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getCartid($cartArray=null,$key="id_produit"){
        if($cartArray!=null){
            $cart_id=array_map(function($value)use($key){
                return $value[$key];

            },$cartArray);
            return $cart_id;
        }

    }
}