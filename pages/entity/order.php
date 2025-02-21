<?php
class order{
    public $id_order;
    public $id_user;
    public $id_address;
    public $amount;
    public $status;
    public $status_payment;
    public $date_added;
    function add($order) {
        include "../../connection.php";
            $sql="INSERT INTO `tbl_order`(`id_order`, `id_user`, `id_address`, `amount`,status,status_payment, `date_added`) VALUES (:id_order, :id_user, :id_address, :amount, :status,:status_payment, :date_added)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order',$order->id_order,PDO::PARAM_STR);
            $query->bindParam(':id_user',$order->id_user,PDO::PARAM_STR);
            $query->bindParam(':id_address',$order->id_address,PDO::PARAM_STR);
            $query->bindParam(':amount',$order->amount,PDO::PARAM_STR);
            $query->bindParam(':status',$order->status,PDO::PARAM_STR);
            $query->bindParam(':status_payment',$order->status_payment,PDO::PARAM_STR);
            $query->bindParam(':date_added',$order->date_added,PDO::PARAM_STR);
            $query->execute();
        }
        function delete($id_order) {
            include "../../connection.php";
            $sql = "DELETE FROM `tbl_order` WHERE  id_order =id_order  ";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order', $id_order);
            $query->execute();
        }
        function update($order) {
            include "../../connection.php";
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
        function updateStatus($order) {
            include "../../connection.php";
            $sql="UPDATE `tbl_order` SET `status`=:status,`status_payment`=:status_payment WHERE `id_order`=:id_order";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_order',$order->id_order,PDO::PARAM_STR);
            $query->bindParam(':status',$order->status,PDO::PARAM_STR);
            $query->bindParam(':status_payment',$order->status_payment,PDO::PARAM_STR);
            $query->execute();
        } 
        function getallordre() {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, `id_user`, `id_address`, `amount`, `status`, `date_added` FROM `tbl_order` ";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
        function getallorderuser($id_user) {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, `status_payment`, a.name, a.phone,a.diachi, `amount`, `status`, `date_added` FROM `tbl_order`o INNER JOIN tbl_address_shipping a on a.id_address=o.`id_address` WHERE a.id_user=:id_user";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_user',$id_user,PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
        function getallordertoday() {
            include "../../connection.php";
            $now = getdate(); 
            $ngaydathang = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"]; 
            $sql = "SELECT DISTINCT `id_order`, u.name, `id_address`, `amount`, `status`,status_payment, `date_added` FROM `tbl_order` o INNER JOIN tbl_user u ON o.id_user = u.id_user WHERE status = 'Đã Đặt'  ORDER BY date_added Desc";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
        function getalldeliveredorder() {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, u.name, `id_address`, `amount`, `status`,status_payment, `date_added` FROM `tbl_order` o INNER JOIN tbl_user u ON o.id_user = u.id_user WHERE status = 'Đã nhận hàng' and  status_payment ='Đã thanh toán'";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
        function getadorder($id_order) {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, u.name, `id_address`, `amount`, `status`,status_payment, `date_added` FROM `tbl_order` o INNER JOIN tbl_user u ON o.id_user = u.id_user WHERE id_order = '".$id_order."'";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
            return null;
        }
        function getallbeingdeliveredorder() {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, u.name, `id_address`, `amount`, `status`,status_payment, `date_added` FROM `tbl_order` o INNER JOIN tbl_user u ON o.id_user = u.id_user WHERE status = 'Đang giao hàng'";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
        function getallpenddingdorder() {
            include "../../connection.php";
            $sql = "SELECT DISTINCT `id_order`, u.name, `id_address`, `amount`, `status`,status_payment, `date_added` FROM `tbl_order` o INNER JOIN tbl_user u ON o.id_user = u.id_user WHERE status = 'Đơn hàng tạm ngưng'";
            $query = $dbh->prepare($sql);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }  
        function getallorderwithorder($id_order) {
            include "../../connection.php";
            $sql = "SELECT DISTINCT * FROM `tbl_order` WHERE id_order =:id_order";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_order', $id_order);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }

}

?>