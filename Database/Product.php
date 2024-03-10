<?php

class Product
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db=$db;
    }

    public function getData($table='produit'){
        $result=$this->db->con->query("SELECT * FROM {$table}");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getFab(){
        $result=$this->db->con->query("SELECT * FROM produit INNER JOIN fabriquant ON produit.id_fab = fabriquant.id_fab;");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getProduct($item_id=null,$table='produit'){
        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM produit INNER JOIN fabriquant ON produit.id_fab = fabriquant.id_fab WHERE id_produit={$item_id}");
        }
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getProduct2($item_id=null,$table='produit'){
        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM {$table} WHERE id_produit={$item_id}; ");
        }
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getDatapan($table='commande'){
        $result=$this->db->con->query("SELECT id_produit,id_fab,id_user FROM {$table} WHERE id_user={$_SESSION['userID']} ");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getData2($table='produit'){
        $result=$this->db->con->query("SELECT * FROM {$table} WHERE id_user={$_SESSION['userID']}");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getProduct3($item_id=null,$table='produit'){
        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM {$table} WHERE id_fab={$item_id}; ");
        }
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getData3($table='produit',$id_f=null){
        $result=$this->db->con->query("SELECT * FROM {$table} WHERE id_fab={$id_f}");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }
    public function getData4($table='produit',$id_u=null){
        $result=$this->db->con->query("SELECT adresse_user FROM {$table} WHERE id_user={$id_u}");
        $resultArray =array();
        while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }




}