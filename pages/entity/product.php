<?php
class Product
{
    public $id_product;
    public $name;
    public $description;
    public $price;
    public $sell;
    public $id_category;
    public $description_detail;
    public $date_publishing;
    public $id_publishing_company;
    public $quantity;
    function add($product){
        
        include "../../connection.php";
        $sql = "INSERT INTO `product`(`id_product`, `id_publishing_company`, `name`, `description`, `price`, `sell`, `id_category`, `date_publishing`, `description_detail`, quantity) VALUES (:id_product, :id_publishing_company, :name, :description, :price, :sell, :id_category, :date_publishing, :description_detail,:quantity)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_product', $product->id_product, PDO::PARAM_STR);
        $query->bindParam(':name', $product->name, PDO::PARAM_STR);
        $query->bindParam(':description', $product->description, PDO::PARAM_STR);
        $query->bindParam(':price', $product->price, PDO::PARAM_INT);
        $query->bindParam(':sell', $product->sell, PDO::PARAM_INT);
        $query->bindParam(':id_category', $product->id_category, PDO::PARAM_STR);
        $query->bindParam(':description_detail', $product->description_detail, PDO::PARAM_STR);
        $query->bindParam(':date_publishing', $product->date_publishing, PDO::PARAM_STR);
        $query->bindParam(':id_publishing_company', $product->id_publishing_company, PDO::PARAM_STR);
        $query->bindParam(':quantity', $product->quantity, PDO::PARAM_INT);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        header('location:../admin/manageproduct.php', true, 301);
    }
    function delete($id)
    {
        include "../../connection.php";
        $sql = "DELETE FROM `product` WHERE  id_product =:id  ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
    }
    function getaproduct($id_product)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT p.id_product, p.name, p.price, p.sell, p.description, p.description_detail, p.date_publishing,p.id_publishing_company, p.id_category,p.quantity, i.url, i.alt, i.status FROM product p LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use WHERE id_product =:idproduct ORDER BY i.status DESC";
        $query = $dbh->prepare($sql);
        $query->bindValue(':idproduct', $id_product);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ)[0];
        return null;
    }
    function getallproduct()
    {
        
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_product`, `id_publishing_company`, p.name, `description`, `price`, `sell`, `id_category`, `date_publishing`, `description_detail`,p.quantity FROM product p LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use";
        $query = $dbh->prepare($sql);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getallproductwithcategory($id_category)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_product`, `id_publishing_company`, p.name, `description`, `price`, `sell`, `id_category`, `date_publishing`, `description_detail`,p.quantity, i.url, i.alt FROM product p LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use WHERE id_category =:idcategory";
        $query = $dbh->prepare($sql);
        $query->bindValue(':idcategory', $id_category);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getallproductwithParentCategory($id_category)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_product`, `id_publishing_company`, p.name, p.`description`, `price`, `sell`, c.`id_category`, `date_publishing`, `description_detail`,p.quantity, i.url, i.alt FROM product p inner join (SELECT `id_category`, `name`, `description`, `id_parten_category` FROM `tbl_category` WHERE `id_category` =:id_category UNION SELECT `id_category`, `name`, `description`, `id_parten_category` FROM `tbl_category` WHERE `id_parten_category` =:id_parten_category) as c on p.id_category = c.id_category LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use";
        $query = $dbh->prepare($sql);
        $query->bindValue(':id_category', $id_category);
        $query->bindValue(':id_parten_category', $id_category);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getSearchListProductHtml($search)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_product`, p.`id_publishing_company`, p.name, p.`description`, `price`, `sell`, c.`id_category`, `date_publishing`, `description_detail`,p.quantity, i.url, i.alt FROM product p LEFT JOIN `tbl_category` c on p.id_category = c.id_category LEFT JOIN tbl_publishing_company pc on pc.id_publishing_company = p.id_publishing_company  LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use WHERE p.name  like :search1  or c.name like :search2  or pc.name  like :search3 ";
        $query = $dbh->prepare($sql);
        $query->bindValue(':search1', "%".$search."%");
        $query->bindValue(':search2', "%".$search."%");
        $query->bindValue(':search3', "%".$search."%");
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function getallproductwithpublishingcompany($id_publishing_company)
    {
        include "../../connection.php";
        $sql = "SELECT DISTINCT `id_product`, p.`id_publishing_company`, p.name, p.`description`, `price`, `sell`, c.`id_category`, `date_publishing`, `description_detail`,p.quantity, i.url, i.alt FROM product p LEFT JOIN `tbl_category` c on p.id_category = c.id_category LEFT JOIN tbl_publishing_company pc on pc.id_publishing_company = p.id_publishing_company  LEFT JOIN (SELECT * FROM image i1 Where i1.status = 1) as i ON p.id_product = i.id_use WHERE p.id_publishing_company =:idpublishingcompany";
        $query = $dbh->prepare($sql);
        $query->bindValue(':idpublishingcompany', $id_publishing_company);
        $query->execute();
        if ($query->rowCount() > 0)
            return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function update($product)
    {
        include "../../connection.php";
        $sql = "UPDATE `product` SET `id_publishing_company`=:id_publishing_company,`name`=:name,`description`=:description,`price`=:price,`sell`=:sell,`id_category`=:id_category,`date_publishing`=:date_publishing,`description_detail`=:description_detail, quantity=:quantity WHERE `id_product`=:id_product";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id_product', $product->id_product, PDO::PARAM_STR);
        $query->bindParam(':name', $product->name, PDO::PARAM_STR);
        $query->bindParam(':description', $product->description, PDO::PARAM_STR);
        $query->bindParam(':price', $product->price, PDO::PARAM_STR);
        $query->bindParam(':sell', $product->sell, PDO::PARAM_STR);
        $query->bindParam(':id_category', $product->id_category, PDO::PARAM_STR);
        $query->bindParam(':description_detail', $product->description_detail, PDO::PARAM_STR);
        $query->bindParam(':date_publishing', $product->date_publishing, PDO::PARAM_STR);
        $query->bindParam(':id_publishing_company', $product->id_publishing_company, PDO::PARAM_STR);
        $query->bindParam(':quantity', $product->quantity, PDO::PARAM_INT); 
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        header('location:../admin/manageproduct.php', true, 301);
    }
}