<?php
include '../entity/product.php';
include '../common/common.php';
include '../common/upload.php';
session_start();
// $category = "";
// $productname = "";
// $productpublishing = "";
// $price = "";
// $sellingprice = "";
// $productDescription="";
// $productDescriptionDetail="";

// $category = $_POST['category'];
// $productname = $_POST['productname'];
// $productpublishing = $_POST['productpublishing'];
// $price = $_POST['price'];
// $sellingprice = $_POST['sellingprice'];
// $productDescription=$_POST['productDescription'];
// $productDescriptionDetail=$_POST['editor1'];

// $cate = new Product();
// $cate->id_product = getNewId("product");
// $cate->id_publishing_company = $productpublishing;
// $cate->name = $productname;
// $cate->description = $productDescription;
// $cate->price = $price;
// $cate->sell = $sellingprice ;
// $cate->id_category =$category;
// $cate->date_publishing = "2012-02-05";
// $cate->description_detail = $productDescriptionDetail;

$target_dir = "../layout/image/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


//$cate->add($cate);

?>