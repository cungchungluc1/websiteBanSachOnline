<?php
class vouncher
{
    public $id_vouncher;
    public $name;
    public $description;
    public $code;
    public $sell;
    public $date_start;
    public $date_end;
    function add($vouncher)
    {
        include "./././connection.php";
        $sql = "INSERT INTO `tbl_vouncher`(`id_vouncher`, `name`, `description`, `code`, `sell`, `date_start`, `date_end`) VALUES (:id_vouncher, :name, :description, :code, :sell, :date_start, :date_end)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_vouncher', $vouncher->id_vouncher, PDO::PARAM_STR);
        $query->bindParam(':name', $vouncher->name, PDO::PARAM_STR);
        $query->bindParam(':description', $vouncher->description, PDO::PARAM_STR);
        $query->bindParam(':code', $vouncher->code, PDO::PARAM_STR);
        $query->bindParam(':sell', $vouncher->name, PDO::PARAM_STR);
        $query->bindParam(':date_start', $vouncher->date_start, PDO::PARAM_STR);
        $query->bindParam(':date_end', $vouncher->date_end, PDO::PARAM_STR);
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
    function delete($id_vouncher)
    {
        include "./././connection.php";
        $sql = "DELETE FROM `tbl_vouncher` WHERE id_vouncher =:id_vouncher  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_vouncher', $id_vouncher);
        $query->execute();
    }
    function update($vouncher)
    {
        include "./././connection.php";
        $sql = "UPDATE `tbl_vouncher` SET `name`=:name,`description`=:description,`code`=:code,`sell`=:sell,`date_start`=:date_start,`date_end`=:date_end WHERE `id_vouncher`=:id_vouncher";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_vouncher', $vouncher->id_vouncher, PDO::PARAM_STR);
        $query->bindParam(':name', $vouncher->name, PDO::PARAM_STR);
        $query->bindParam(':description', $vouncher->description, PDO::PARAM_STR);
        $query->bindParam(':code', $vouncher->code, PDO::PARAM_STR);
        $query->bindParam(':sell', $vouncher->name, PDO::PARAM_STR);
        $query->bindParam(':date_start', $vouncher->date_start, PDO::PARAM_STR);
        $query->bindParam(':date_end', $vouncher->date_end, PDO::PARAM_STR);
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
    function getallvouncher()
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT `id_vouncher`, `name`, `description`, `code`, `sell`, `date_start`, `date_end` FROM `tbl_vouncher` ";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getaVouncher($id_vouncher)
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_vouncher` WHERE id_vouncher =:id_vouncher";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_vouncher', $id_vouncher);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}