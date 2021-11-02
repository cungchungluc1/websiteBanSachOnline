<?php  ?>
<?php
class User{
    public $id_user;
    public $id_role;
    public $name;
    public $sex;
    public $email;
    public $phone;
    public $birthday;
    public $username;
    public $password;

    function login($username, $password) {
        include "./././connection.php";
        $sql = "SELECT * from tbl_user where username =:An and password =:Bo order by username and password ";
        $query = $dbh->prepare($sql);
        $query-> bindValue(':An', $username);
        $query-> bindValue(':Bo', $password);
		$query->execute();
        if($query->rowCount() > 0) 
        return $query->fetchAll(PDO::FETCH_OBJ);
        return null;
    }
    function add($user) {
		include "./././connection.php";
			$sql="INSERT INTO `tbl_user`(`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`) VALUES (:id_user, :id_role, :name, :sex, :email, :phone, :birthday, :username, :password)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':id_user',$user->id_user,PDO::PARAM_STR);
			$query->bindParam(':id_role',$user->id_role,PDO::PARAM_STR);
			$query->bindParam(':name',$user->name,PDO::PARAM_STR);
            $query->bindParam(':sex',$user->sex,PDO::PARAM_STR);
            $query->bindParam(':email',$user->email,PDO::PARAM_STR);
            $query->bindParam(':phone',$user->phone,PDO::PARAM_STR);
            $query->bindParam(':birthday',$user->birthday,PDO::PARAM_STR);
            $query->bindParam(':username',$user->username,PDO::PARAM_STR);
            $query->bindParam(':password',$user->password,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
			if($lastInsertId)
			{
				$msg="Tạo thành công";
				header('location:a.php',true,301);
			}
			else 
			{
				$error="Thêm thất bại. Hãy thử lại";
				header('location:a.php',true,301);
			}
		
	} 
    function delete($id) {
        include "./././connection.php";
        $sql = "DELETE FROM `tbl_user` WHERE  id_user =:id  ";
        $query = $dbh->prepare($sql);
        $query-> bindValue(':id', $id);
		$query->execute();
    }
    
			function update($user) {
		include "./././connection.php";
		$sql="UPDATE `tbl_user` SET `id_role`=:id_role,`name`=:name,`sex`=:sex,`email`=:email,`phone`=:phone,`birthday`=:birthday,`username`=:username,`password`=:password WHERE `id_user`=:id_user";
			$query = $dbh->prepare($sql);
			$query->bindParam(':id_user',$user->id_user,PDO::PARAM_STR);
			$query->bindParam(':id_role',$user->id_role,PDO::PARAM_STR);
			$query->bindParam(':name',$user->name,PDO::PARAM_STR);
            $query->bindParam(':sex',$user->sex,PDO::PARAM_STR);
            $query->bindParam(':email',$user->email,PDO::PARAM_STR);
            $query->bindParam(':phone',$user->phone,PDO::PARAM_STR);
            $query->bindParam(':birthday',$user->birthday,PDO::PARAM_STR);
            $query->bindParam(':username',$user->username,PDO::PARAM_STR);
            $query->bindParam(':password',$user->password,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
			if($lastInsertId)
			{
				$msg="Tạo thành công";
				header('location:b.php',true,301);
			}
			else 
			{
				$error="Thêm thất bại. Hãy thử lại";
				header('location:b.php',true,301);
			}
	} 

}

?>
