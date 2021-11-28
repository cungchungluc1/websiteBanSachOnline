<?php
class orderDetail{
    public $id_order_detail;
    public $id_product;
    public $description;
    public $price;
    public $quantity;
    public $total_price;
    function add($orderDetail) {
        include "../../connection.php";
            $sql="INSERT INTO `tbl_order_detail`(`id_order_detail`, `id_product`, `description`, `price`, `quantity`, `total_price`) VALUES (:id_order_detail, :id_product, :description, :price, :quantity, :total_price)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order_detail',$orderDetail->id_order_detail,PDO::PARAM_STR);
            $query->bindParam(':id_product',$orderDetail->id_product,PDO::PARAM_STR);
            $query->bindParam(':description',$orderDetail->description,PDO::PARAM_STR);
            $query->bindParam(':price',$orderDetail->price,PDO::PARAM_STR);
            $query->bindParam(':quantity',$orderDetail->quantity,PDO::PARAM_STR);
            $query->bindParam(':total_price',$orderDetail->total_price,PDO::PARAM_STR);
            $query->execute();
        }
        function delete($id_order_detail) {
            include "../../connection.php";
            $sql = "DELETE FROM `tbl_order_detail` WHERE  id_order_detail =:id_order_detail  ";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order_detail', $id_order_detail);
            $query->execute();
        }
        function update($orderDetail) {
            include "../../connection.php";
            $sql="UPDATE `tbl_order_detail` SET `id_product`=:id_product,`description`=:description,`price`=:price,`quantity`=:quantity,`total_price`=:total_price WHERE `id_order_detail`=:id_order_detail";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order_detail',$orderDetail->id_order_detail,PDO::PARAM_STR);
            $query->bindParam(':id_product',$orderDetail->id_product,PDO::PARAM_STR);
            $query->bindParam(':description',$orderDetail->description,PDO::PARAM_STR);
            $query->bindParam(':price',$orderDetail->price,PDO::PARAM_STR);
            $query->bindParam(':quantity',$orderDetail->quantity,PDO::PARAM_STR);
            $query->bindParam(':total_price',$orderDetail->total_price,PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if($lastInsertId)
                {
                    $msg="Tạo thành công";
                    header('location:ok.php',true,301);
                }
                else 
                {
                    $error="Thêm thất bại. Hãy thử lại";
                    header('location:err.php',true,301);
                }
        } 
        function getallorderwithorderDetail($id_order_detail) {
            include "../../connection.php";
            $sql = "SELECT DISTINCT * FROM `tbl_order_detail` WHERE id_order_detail =:id_order_detail";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order_detail', $id_order_detail);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
}