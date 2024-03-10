<?php

class user
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    function get_user_info($userID){
        $query="SELECT id_user,nom_user,prenom_user,adresse_user,id_fab FROM user WHERE id_user='{$userID}'" ;

        $result=$this->db->con->query($query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        return empty($row) ? false : $row;

    }

}
