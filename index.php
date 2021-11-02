<?php include("pages/entity/user.php"); ?>
<?php include("pages/entity/product.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
    <?php
    //  $u = new User();
    //  $u->id_user ="009";
    //  $u->id_role ="a1";
    //  $u->name ="van";
    //  $u->sex ="nam";
    //  $u->email ="avb.email";
    //  $u->phone ="0911568974";
    //  $u->birthday ="1998-02-24";
    //  $u->username ="azz";
    //  $u->password ="gb";
    //  $results=$u->add($u);

    // $u->delete("009");

    // $u->id_user ="009";
    //  $u->id_role ="a343";
    //  $u->name ="tam";
    //  $u->sex ="nu";
    //  $u->email ="avf.email";
    //  $u->phone ="09115689785";
    //  $u->birthday ="1998-02-26";
    //  $u->username ="ahz";
    //  $u->password ="grt";
    // $u->update($u);
    
     $p = new Product();
    //  $p->id_product ="xc11";
    //  $p->name ="goicuon";
    //  $p->description="xc";
    //  $p->price =23000;
    //  $p->sell =2563;
    //  $p->id_category ="c12";
    //  $p->description_detail= "fgh";
    //  $p->add($p);

    $p->delete("xc11");
    


        
    ?>
    demo1
</body>
</html>