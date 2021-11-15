<?php
class publishingCompany
{
    public $id_publishing_company;
    public $name;
    public $description;
    public $phone;
    public $address;
    public $email;
    function add($publishingCompany)
    {
        include "../../connection.php";
        $sql = "INSERT INTO `tbl_publishing_company`(`id_publishing_company`, `name`, `description`, `phone`, `address`, `email`) VALUES (:id_publishing_company, :name, :description, :phone, :address, :email)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_publishing_company', $publishingCompany->id_publishing_company, PDO::PARAM_STR);
        $query->bindParam(':name', $publishingCompany->name, PDO::PARAM_STR);
        $query->bindParam(':description', $publishingCompany->description, PDO::PARAM_STR);
        $query->bindParam(':phone', $publishingCompany->phone, PDO::PARAM_STR);
        $query->bindParam(':address', $publishingCompany->address, PDO::PARAM_STR);
        $query->bindParam(':email', $publishingCompany->email, PDO::PARAM_STR);
        $query->execute();
        header('location:../admin/publishingCompany.php', true, 301);
    }
    function delete($id_publishing_company)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `tbl_publishing_company` WHERE  id_publishing_company =:id_publishing_company  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_publishing_company', $id_publishing_company);
        $query->execute();
    }
    function update($publishingCompany)
    {
        include "../../connection.php";
        $sql = "UPDATE `tbl_publishing_company` SET `name`=:name,`description`=:description,`phone`=:phone,`address`=:address,`email`=:email WHERE `id_publishing_company`=:id_publishing_company";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_publishing_company', $publishingCompany->id_publishing_company, PDO::PARAM_STR);
        $query->bindParam(':name', $publishingCompany->name, PDO::PARAM_STR);
        $query->bindParam(':description', $publishingCompany->description, PDO::PARAM_STR);
        $query->bindParam(':phone', $publishingCompany->phone, PDO::PARAM_STR);
        $query->bindParam(':address', $publishingCompany->address, PDO::PARAM_STR);
        $query->bindParam(':email', $publishingCompany->email, PDO::PARAM_STR);
        $query->execute();
        header('location:../admin/publishingCompany.php', true, 301);
    }
    function getapublishingCompany($id_publishing_company)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT * FROM `tbl_publishing_company` WHERE id_publishing_company =:id_publishing_company";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_publishing_company', $id_publishing_company);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
        return null;
    }
    function getallpublishingCompany()
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_publishing_company`, `name`, `description`, `phone`, `address`, `email` FROM `tbl_publishing_company` ";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
}
?>