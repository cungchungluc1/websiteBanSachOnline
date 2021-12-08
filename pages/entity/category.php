<?php
class category
{
    public $id_category;
    public $name;
    public $description;
    public $id_parten_category;
    function add($category)
    {
        include "../../connection.php";
        $sql = "INSERT INTO `tbl_category`(`id_category`, `name`, `description`, `id_parten_category`) VALUES (:id_category, :name, :description, :id_parten_category)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_category', $category->id_category, PDO::PARAM_STR);
        $query->bindParam(':name', $category->name, PDO::PARAM_STR);
        $query->bindParam(':description', $category->description, PDO::PARAM_STR);
        $query->bindParam(':id_parten_category', $category->id_parten_category, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        header('location:../admin/category.php', true, 301);
    }
    function delete($category)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `tbl_category` WHERE  id_category =:id_category  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_category', $category->id_category);
        $query->execute();
        header('location:../admin/category.php', true, 301);
    }
    function update($category)
    {
        include "../../connection.php";
        $sql = "UPDATE `tbl_category` SET `name`=:name,`description`=:description,`id_parten_category`=:id_parten_category WHERE `id_category`=:id_category";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_category', $category->id_category, PDO::PARAM_STR);
        $query->bindParam(':name', $category->name, PDO::PARAM_STR);
        $query->bindParam(':description', $category->description, PDO::PARAM_STR);
        $query->bindParam(':id_parten_category', $category->id_parten_category, PDO::PARAM_STR);
        $query->execute();
        header('location:../admin/category.php', true, 301);
    }
    function getacategory($id_category)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT DISTINCT * FROM `tbl_category` WHERE id_category =:id_category";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_category', $id_category);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
        return null;
    }
    function getallcategory()
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_category` ";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getparentcategory()
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_category` where id_parten_category = null or id_parten_category ='' ";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getsubcategory($id_parten_category)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_category` where id_parten_category =:id_parten_category ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_parten_category', $id_parten_category, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function showallcategory()
    {
        
            include "../../connection.php";
        $sql = "SELECT DISTINCT c1.`id_category`, c1.`name`, c1.`description`, c2.name as `id_parten_category` FROM `tbl_category` c1 LEFT JOIN `tbl_category` c2 on c1.id_parten_category = c2.id_category";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}
?>