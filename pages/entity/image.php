<?php
class image
{
    public $id;
    public $id_use;
    public $id_image;
    public $name;
    public $url;
    public $alt;
    public $status = 1;
    public $tbl_table;
    function add($image)
    {
        if($image->name!=""){
            include "../../connection.php";
            $sql = "INSERT INTO `image`(`id`, `id_use`, `id_image`, `name`, `url`, `alt`,status,tbl_table) VALUES (:id, :id_use, :id_image, :name, :url, :alt,:status,:tbl_table)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $image->id, PDO::PARAM_STR);
            $query->bindParam(':id_use', $image->id_use, PDO::PARAM_STR);
            $query->bindParam(':id_image', $image->id_image, PDO::PARAM_STR);
            $query->bindParam(':name', $image->name, PDO::PARAM_STR);
            $query->bindParam(':url', $image->url, PDO::PARAM_STR);
            $query->bindParam(':alt', $image->alt, PDO::PARAM_STR);
            $query->bindParam(':status', $image->status, PDO::PARAM_INT);
            $query->bindParam(':tbl_table', $image->tbl_table, PDO::PARAM_STR);
            $query->execute();
        }
        
        
    }
    function delete($id)
    {
        include "./././connection.php";
        $sql = "DELETE FROM `image` WHERE  id =:id  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
    }
    function update($image)
    {
        if($image->name!=""){
            include "./././connection.php";
            $sql = "UPDATE `image` SET `id_use`=:id_use,`id_image`=:id_image,`name`=:name,`url`=:url,`alt`=:alt WHERE `id`=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $image->id, PDO::PARAM_STR);
            $query->bindParam(':id_use', $image->id_use, PDO::PARAM_STR);
            $query->bindParam(':id_image', $image->id_image, PDO::PARAM_STR);
            $query->bindParam(':name', $image->name, PDO::PARAM_STR);
            $query->bindParam(':url', $image->url, PDO::PARAM_STR);
            $query->bindParam(':alt', $image->alt, PDO::PARAM_STR);
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
        
    }
    function chageimage($image)
    {
        if($image->name!=""){
            include "../../connection.php";
            $sql = "UPDATE `image` SET `status`= 0 WHERE `id_use`=:id_use";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_use', $image->id_use, PDO::PARAM_STR);
            $query->execute();
        }
        
        
    }
    function getaimage($id)
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT * FROM `image` WHERE id =:id";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getallimage()
    {
        include "./././connection.php";
        $sql = "SELECT DISTINCT * FROM `image`";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}
?>