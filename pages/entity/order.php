<?php
class order{
    public $id_order;
    public $id_user;
    public $id_address;
    public $amount;
    public $status;
    public $date_added;
    function add($order) {
        include "./././connection.php";
            $sql="INSERT INTO `tbl_order`(`id_order`, `id_user`, `id_address`, `amount`,'status', `date_added`) VALUES (:id_order, :id_user, :id_address, :amount, :status, :date_added)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order',$order->id_order,PDO::PARAM_STR);
            $query->bindParam(':id_user',$order->id_user,PDO::PARAM_STR);
            $query->bindParam(':id_address',$order->id_address,PDO::PARAM_STR);
            $query->bindParam(':amount',$order->amount,PDO::PARAM_STR);
            $query->bindParam(':status',$order->status,PDO::PARAM_STR);
            $query->bindParam(':date_added',$order->date_added,PDO::PARAM_STR);
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
        function delete($id_order) {
            include "./././connection.php";
            $sql = "DELETE FROM `tbl_order` WHERE  id_order =id_order  ";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order', $id_order);
            $query->execute();
        }
        function update($order) {
            include "./././connection.php";
            $sql="UPDATE `tbl_order` SET `id_user`=:id_user,`id_address`=:id_address,`amount`=:amount,`status`=:status,`date_added`=:date_added WHERE `id_order`=:id_order";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order',$order->id_order,PDO::PARAM_STR);
            $query->bindParam(':id_user',$order->id_user,PDO::PARAM_STR);
            $query->bindParam(':id_address',$order->id_address,PDO::PARAM_STR);
            $query->bindParam(':amount',$order->amount,PDO::PARAM_STR);
            $query->bindParam(':status',$order->status,PDO::PARAM_STR);
            $query->bindParam(':date_added',$order->date_added,PDO::PARAM_STR);
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
        function getallordre() {
            include "./././connection.php";
            $sql = "SELECT `id_order`, `id_user`, `id_address`, `amount`, `status`, `date_added` FROM `tbl_order` ";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }  
        function getallorderwithorder($id_order) {
            include "./././connection.php";
            $sql = "SELECT * FROM `tbl_order` WHERE id_order =:id_order";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order', $id_order);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }

}

?>