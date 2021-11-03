<?php
class address
{
    public $id_address;
    public $id_user;
    public $diachi;
    public $phuong;
    public $quan;
    public $tinh;
    public $is_defaul;

    function add($address)
    {
        include "./././connection.php";
        $sql = "INSERT INTO `tbl_address_shipping`(`id_address`, `id_user`, `diachi`, `phuong`, `quan`, `tinh`, `is_defaul`) VALUES (:id_address, :id_user, :diachi, :phuong, :quan, :tinh, :is_defaul)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_address', $address->id_address, PDO::PARAM_STR);
        $query->bindParam(':id_user', $address->id_user, PDO::PARAM_STR);
        $query->bindParam(':diachi', $address->diachi, PDO::PARAM_STR);
        $query->bindParam(':phuong', $address->phuong, PDO::PARAM_STR);
        $query->bindParam(':quan', $address->quan, PDO::PARAM_STR);
        $query->bindParam(':tinh', $address->tinh, PDO::PARAM_STR);
        $query->bindParam(':is_defaul', $address->is_defaul, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Tạo thành công";
            header('location:ok.php', true, 301);
        } else {
            $error = "Thêm thất bại. Hãy thử lại";
            header('location:err.php', true, 301);
        }
    }
    function delete($id_address)
    {
        include "./././connection.php";
        $sql = "DELETE FROM `tbl_address_shipping` WHERE 0  id_address=:id  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id_address);
        $query->execute();
    }
    function update($address)
    {
        include "./././connection.php";
        $sql = "UPDATE `tbl_address_shipping` SET `id_user`=:id_user,`diachi`=:diachi,`phuong`=:phuong,`quan`=:quan,`tinh`=:tinh,`is_defaul`=:is_defaul WHERE `id_address`=:id_address";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_addressr', $address->id_address, PDO::PARAM_STR);
        $query->bindParam(':id_user', $address->id_user, PDO::PARAM_STR);
        $query->bindParam(':diachi', $address->diachi, PDO::PARAM_STR);
        $query->bindParam(':phuong', $address->phuong, PDO::PARAM_STR);
        $query->bindParam(':quan', $address->quan, PDO::PARAM_STR);
        $query->bindParam(':tinh', $address->tinh, PDO::PARAM_STR);
        $query->bindParam(':is_defaul', $address->is_defaul, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Tạo thành công";
            header('location:ok.php', true, 301);
        } else {
            $error = "Thêm thất bại. Hãy thử lại";
            header('location:err.php', true, 301);
        }
    }
    function getaddress($id_user)
    {
        include "./././connection.php";
        $sql = "SELECT * FROM `tbl_address_shipping` WHERE id_user =:id_user";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_user', $id_user);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getaaddress($id_address)
    {
        include "./././connection.php";
        $sql = "SELECT * FROM `tbl_address_shipping` WHERE id_address =:id_address";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_address', $id_address);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}