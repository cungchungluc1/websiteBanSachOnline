<?php
class cart
{
    public $user_id;
    public $product_id;
    public $quantity;
    public $date_update;

    function upsert($tbl_cart){
        $data = $this->getaproductcart($tbl_cart);
        if($data!=null){
            $data->quantity +=$tbl_cart->quantity;
            $this->update($data);
        }else{
            $this->add($tbl_cart);
        }
        echo '<script> alert("Bạn đã thêm sản phẩm vào giỏ hàng!!!");
                window.location.replace("../customer/cart.php");
                </script>';
    }
    function add($tbl_cart)
    {
        include "../../connection.php";
        $sql = "INSERT INTO `tbl_cart`(`user_id`, `product_id`, `quantity`, `date_update`) VALUES (:user_id, :product_id, :quantity, :date_update)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':user_id', $tbl_cart->user_id, PDO::PARAM_STR);
        $query->bindParam(':product_id', $tbl_cart->product_id, PDO::PARAM_STR);
        $query->bindParam(':quantity', $tbl_cart->quantity, PDO::PARAM_STR);
        $query->bindParam(':date_update', $tbl_cart->date_update, PDO::PARAM_STR);
        $query->execute();
    }
    function delete($user_id,$product_id)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `tbl_cart` WHERE `user_id`=:user_id and product_id =:product_id";
        $query = $dbh->prepare($sql);
        $query->bindValue(':user_id', $user_id);
        $query->bindValue(':product_id', $product_id);
        $query->execute();
        header("location:../customer/cart.php");
    }
    function deleteAll($user_id)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `tbl_cart` WHERE `user_id`=:user_id ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':user_id', $user_id);
        $query->execute();
        // header("location:../customer/cart.php");
    }
    function update($tbl_cart)
    {
        include "../../connection.php";
        $sql = "UPDATE `tbl_cart` SET `quantity`=:quantity,`date_update`=:date_update WHERE `user_id`=:user_id AND product_id =:product_id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':user_id', $tbl_cart->user_id, PDO::PARAM_STR);
        $query->bindParam(':product_id', $tbl_cart->product_id, PDO::PARAM_STR);
        $query->bindParam(':quantity', $tbl_cart->quantity, PDO::PARAM_STR);
        $query->bindParam(':date_update', $tbl_cart->date_update, PDO::PARAM_STR);
        $query->execute();
    }
    function getallcart($id_user)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_cart` WHERE user_id =:user_id";
        $query = $dbh->prepare($sql);
        $query->bindValue(':user_id', $id_user);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getaproductcart($tbl_cart)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_cart` WHERE user_id =:user_id AND product_id =:product_id";
        $query = $dbh->prepare($sql);
        $query->bindValue(':user_id', $tbl_cart->user_id);
        $query->bindValue(':product_id', $tbl_cart->product_id);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
        return null;
    }


}

?>