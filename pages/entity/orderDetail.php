<?php
class orderDetail{
    public $id_order_detail;
    public $id_product;
    public $description
    public $price;
    public $quantity;
    public $total_price;
    function add($id_order_detail) {
        include "./././connection.php";
            $sql="INSERT INTO `tbl_order_detail`(`id_order_detail`, `id_product`, `description`, `price`, `quantity`, `total_price`) VALUES (:id_order_detail, :id_product, :description, :price, :quantity, :total_price)";
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
                header('location:orderDetail.php',true,301);
            }
            else 
            {
                $error="Thêm thất bại. Hãy thử lại";
                header('location:orderDetail.php',true,301);
            }
        }
}
?>