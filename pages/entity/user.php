<?php  ?>
<?php
class User
{
	public $id_user;
	public $id_role;
	public $name;
	public $sex;
	public $email;
	public $phone;
	public $birthday;
	public $username;
	public $password;
	public $codeSession;

function getRole($role){
	include "../../connection.php";
		$sql = "SELECT DISTINCT id_role FROM `tbl_role` where name =:name";
		$query = $dbh->prepare($sql);
		$query->bindValue(':name', $role);
		$query->execute();
		if ($query->rowCount() > 0)
			return $query->fetchAll(PDO::FETCH_OBJ)[0]->id_role;
		return null;
}


	function login($username, $password)
	{
		include "../../connection.php";
		$sql = "SELECT DISTINCT `id_user`, r.name as id_role, u.name, `sex`, `email`, `phone`, `birthday`, `username`, `password`, codeSession FROM tbl_user u INNER JOIN tbl_role r ON r.id_role = u.id_role where ( username =:username or  `email` =:email  or `phone`=:phone ) and password =:password order by username and password ";
		$query = $dbh->prepare($sql);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $username);
		$query->bindValue(':phone', $phone);
		$query->bindValue(':password', $password);
		$query->execute();
		if ($query->rowCount() > 0)
			return $query->fetchAll(PDO::FETCH_OBJ)[0];
		return null;
	}
	function checklogin($codeSession)
	{
		include "../../connection.php";
		$sql = "SELECT DISTINCT `id_user`, r.name as id_role, u.name, `sex`, `email`, `phone`, `birthday`, `username`, `password`, codeSession FROM tbl_user u INNER JOIN tbl_role r ON r.id_role = u.id_role where codeSession =:codeSession";
		$query = $dbh->prepare($sql);
		$query->bindValue(':codeSession', $codeSession);
		$query->execute();
		if ($query->rowCount() > 0)
		return $query->fetchAll(PDO::FETCH_OBJ)[0];
		return null;
	}
	function add($user)
	{
		include "../../connection.php";
		$sql = "INSERT INTO `tbl_user`(`id_user`, `id_role`, `name`, `sex`, `email`, `phone`, `birthday`, `username`, `password`) VALUES (:id_user, :id_role, :name, :sex, :email, :phone, :birthday, :username, :password)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':id_user', $user->id_user, PDO::PARAM_STR);
		$query->bindParam(':id_role', $user->id_role, PDO::PARAM_STR);
		$query->bindParam(':name', $user->name, PDO::PARAM_STR);
		$query->bindParam(':sex', $user->sex, PDO::PARAM_STR);
		$query->bindParam(':email', $user->email, PDO::PARAM_STR);
		$query->bindParam(':phone', $user->phone, PDO::PARAM_STR);
		$query->bindParam(':birthday', $user->birthday, PDO::PARAM_STR);
		$query->bindParam(':username', $user->username, PDO::PARAM_STR);
		$query->bindParam(':password', $user->password, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		header("location:../layout/page/login.php");
	}
	function delete($id)
	{
		include "./././connection.php";
		$sql = "DELETE FROM `tbl_user` WHERE  id_user =:id  ";
		$query = $dbh->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();
	}

	function update($user)
	{
		include "./././connection.php";
		$sql = "UPDATE `tbl_user` SET `id_role`=:id_role,`name`=:name,`sex`=:sex,`email`=:email,`phone`=:phone,`birthday`=:birthday,`username`=:username,`password`=:password WHERE `id_user`=:id_user";
		$query = $dbh->prepare($sql);
		$query->bindParam(':id_user', $user->id_user, PDO::PARAM_STR);
		$query->bindParam(':id_role', $user->id_role, PDO::PARAM_STR);
		$query->bindParam(':name', $user->name, PDO::PARAM_STR);
		$query->bindParam(':sex', $user->sex, PDO::PARAM_STR);
		$query->bindParam(':email', $user->email, PDO::PARAM_STR);
		$query->bindParam(':phone', $user->phone, PDO::PARAM_STR);
		$query->bindParam(':birthday', $user->birthday, PDO::PARAM_STR);
		$query->bindParam(':username', $user->username, PDO::PARAM_STR);
		$query->bindParam(':password', $user->password, PDO::PARAM_STR);
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
	function updateCode($user)
	{
		include "../../connection.php";
		$sql = "UPDATE `tbl_user` SET `codeSession`=:codeSession WHERE `id_user`=:id_user";
		$query = $dbh->prepare($sql);
		$query->bindParam(':id_user', $user->id_user, PDO::PARAM_STR);
		$query->bindParam(':codeSession', $user->codeSession, PDO::PARAM_STR);
		$query->execute();
	}
}

?>