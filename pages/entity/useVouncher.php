<?php
class useVouncher
{
    public $id;
    public $id_vouncher;
    public $id_user;
    public $date_user;
    function add($useVouncher)
    {
        include "./././connection.php";
        $sql = "INSERT INTO `tbl_use_vouncher`(`id`, `id_vouncher`, `id_user`, `date_user`) VALUES (:id, :id_vouncher, :id_user, :date_user)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $useVouncher->id, PDO::PARAM_STR);
        $query->bindParam(':id_vouncher', $useVouncher->id_vouncher, PDO::PARAM_STR);
        $query->bindParam(':id_user', $useVouncher->id_user, PDO::PARAM_STR);
        $query->bindParam(':date_user', $useVouncher->date_user, PDO::PARAM_STR);
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
    function delete($id)
    {
        include "./././connection.php";
        $sql = "DELETE FROM `tbl_use_vouncher` WHERE  id =:id  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
    }
    function update($useVouncher)
    {
        include "./././connection.php";
        $sql = "UPDATE `tbl_use_vouncher` SET `id_vouncher`=:id_vouncher,`id_user`=:id_user,`date_user`=:date_user WHERE `id`=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $useVouncher->id, PDO::PARAM_STR);
        $query->bindParam(':id_vouncher', $useVouncher->id_vouncher, PDO::PARAM_STR);
        $query->bindParam(':id_user', $useVouncher->id_user, PDO::PARAM_STR);
        $query->bindParam(':date_user', $useVouncher->date_user, PDO::PARAM_STR);
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
    function getauseVouncher($id)
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_use_vouncher` WHERE id =:id";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getalluseVouncher($id_user)
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_use_vouncher` WHERE id_user =:id_user";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_user', $id_user);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}