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

	function login($username, $password)
	{
		
			include "../../connection.php";
		$sql = "SELECT `id_user`, r.name as id_role, u.name, `sex`, `email`, `phone`, `birthday`, `username`, `password` FROM tbl_user u INNER JOIN tbl_role r ON r.id_role = u.id_role where username =:An and password =:Bo order by username and password ";
		$query = $dbh->prepare($sql);
		$query->bindValue(':An', $username);
		$query->bindValue(':Bo', $password);
		$query->execute();
		if ($query->rowCount() > 0)
			return $query->fetchAll(PDO::FETCH_OBJ)[0]->id_role;
		return null;
	}
	function getId($username, $password)
	{
		include "../../connection.php";
		$sql = "SELECT `id_user` FROM tbl_user u INNER JOIN tbl_role r ON r.id_role = u.id_role where username =:An and r.name =:Bo ";
		$query = $dbh->prepare($sql);
		$query->bindValue(':An', $username);
		$query->bindValue(':Bo', $password);
		$query->execute();
		if ($query->rowCount() > 0)
		return $query->fetchAll(PDO::FETCH_OBJ)[0];
		return false;
	}
	function checklogin($username, $password)
	{
		
			include "../../connection.php";
		$sql = "SELECT `id_user`, r.name as id_role, u.name, `sex`, `email`, `phone`, `birthday`, `username`, `password` FROM tbl_user u INNER JOIN tbl_role r ON r.id_role = u.id_role where username =:An and r.name =:Bo ";
		$query = $dbh->prepare($sql);
		$query->bindValue(':An', $username);
		$query->bindValue(':Bo', $password);
		$query->execute();
		if ($query->rowCount() > 0)
			return true;
		return false;
	}
	function add($user)
	{
		include "./././connection.php";
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
		if ($lastInsertId) {
			$msg = "Tạo thành công";
			header('location:ok.php', true, 301);
		} else {
			$error = "Thêm thất bại. Hãy thử lại";
			header('location:err.php', true, 301);
		}
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