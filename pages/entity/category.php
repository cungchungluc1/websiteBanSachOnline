<?php
class category{
    public $id_category;
    public $name;
    public $description;
    public $id_parten_category;
    function add($category) {
        include "./././connection.php";
            $sql="INSERT INTO `tbl_category`(`id_category`, `name`, `description`, `id_parten_category`) VALUES (:id_category, :name, :description, :id_parten_category)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_category',$category->id_category,PDO::PARAM_STR);
            $query->bindParam(':name',$category->name,PDO::PARAM_STR);
            $query->bindParam(':description',$category->description,PDO::PARAM_STR);
            $query->bindParam(':id_parten_category',$category->id_parten_category,PDO::PARAM_STR);
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
        function delete($id_category) {
            include "./././connection.php";
            $sql = "DELETE FROM `tbl_category` WHERE  id_category =:id_category  ";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_category', $id_category);
            $query->execute();
        }
        function update($category) {
            include "./././connection.php";
            $sql="UPDATE `tbl_category` SET `name`=:name,`description`=:description,`id_parten_category`=:id_parten_category WHERE `id_category`=:id_category";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id_category',$category->id_category,PDO::PARAM_STR);
            $query->bindParam(':name',$category->name,PDO::PARAM_STR);
            $query->bindParam(':description',$category->description,PDO::PARAM_STR);
            $query->bindParam(':id_parten_category',$category->id_parten_category,PDO::PARAM_STR);
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
        function getacategory($id_category) {
            include "./././connection.php";
            $sql = "SELECT * FROM `tbl_category` WHERE id_category =:id_category";
            $query = $dbh->prepare($sql);
            $query-> bindValue(':id_category', $id_category);
            $query->execute();
            if($query->rowCount() > 0) 
            return $query->fetchAll(PDO::FETCH_OBJ);
            return null;
        }
}
?>