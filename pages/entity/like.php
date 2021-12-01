<?php
class like
{
    public $id_user;
    public $id_product;

    function upsert($tbl_cart){
        $data = $this->getalike($tbl_cart);
        if($data!=null){
            $this->delete($tbl_cart->id_user,$tbl_cart->id_product);
        }else{
            $this->add($tbl_cart);
        }
    }
    function add($tbl_cart)
    {
        include "../../connection.php";
        $sql = "INSERT INTO `tbl_like`(`id_user`, `id_product`) VALUES (:id_user, :id_product)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_user', $tbl_cart->id_user, PDO::PARAM_STR);
        $query->bindParam(':id_product', $tbl_cart->id_product, PDO::PARAM_STR);
        $query->execute();
        header("location:../customer/cart.php");
    }
    function delete($id_user,$id_product)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `tbl_like` WHERE `id_user`=:id_user and id_product =:id_product";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_user', $id_user);
        $query->bindValue(':id_product', $id_product);
        $query->execute();
    }
    function getallcart($id_user)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_like` WHERE `id_user`=:id_user";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_user', $id_user);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getalike($tbl_cart)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_like` WHERE `id_user`=:id_user and id_product =:id_product";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_user', $tbl_cart->id_user);
        $query->bindValue(':id_product', $tbl_cart->id_product);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
        return null;
    }


}

?>