<?php

class order
{
    public $db = null;
    public function __construct(DBController  $db)
    {
        if(!isset($db->con))return null;
        $this->db = $db;
    }
    public function InsertInOrder($params = null, $table="commande"){
        if ($this->db->con!=null){
            if ($params!=null) {

                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                return $this->db->con->query($query_string);
            }
        }
    }
    public function addToOrder($userid,$itemid,$fabid){

        $params=array(
            "id_user"=>$userid,
            "id_produit"=>$itemid,
            "id_fab"=>$fabid
        );

        $result=$this->InsertInOrder($params);
        if($result){
            header("Location:".$_SERVER['PHP_SELF']);}


    }

}