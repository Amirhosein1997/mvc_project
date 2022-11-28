<?php


namespace application\model;
use PDO;
use Exception;

class User extends Model
{

    public function all($where,$value)
    {
        $query = "SELECT * FROM users_tbl WHERE $where=?";
        return $this->query($query,[$value])->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($table,$where,$value)
    {
        $query = "SELECT * FROM $table WHERE $where=?";
        return $this->query($query,[$value])->fetch(PDO::FETCH_OBJ);
    }

	    public function find_user($phone,$mellicode)
    {
        $query = "SELECT * FROM users_tbl WHERE phone=? and mellicode='$mellicode'";
        return $this->query($query,[$phone])->fetch(PDO::FETCH_OBJ);
    }

    public function find_organizer($id)
    {
        $query = "SELECT * FROM users_tbl WHERE id=?";
        return $this->query($query,[$id])->fetch(PDO::FETCH_OBJ);
    }

    public function insert($values)
    {
        $query = "INSERT INTO users_tbl (name,family,phone,password,email,mellicode) VALUE (?,?,?,?,?,?)";
        $this->execute($query,array_values($values));
    }

    public function insert_code($values)
    {
        $query = "INSERT INTO get_code_tbl (phone,code) VALUE (?,?)";
        $this->execute($query, array_values($values));
    }

    public function update($values,$id)
    {
        $query = "UPDATE users_tbl SET username=? , password=? WHERE id=?";
        $this->execute($query,array_merge(array_values($values),[$id]));
    }

    public function update_info_user($values)
    {
        $query = "UPDATE users_tbl SET mellicode=? , birthday=? , degree=? ,field=? ,biography=?, email=? ,img=? ,cv=? ,role=? WHERE phone=?";
        $this->execute($query,array_merge(array_values($values),['organizer'],[$_SESSION['login_user']]));
    }

    public function update_click($values,$value)
    {
        $query = "UPDATE message_tbl SET click=? , WHERE blog=?";
        $this->execute($query,array_merge(array_values($values),[$value]));
    }

    public function update_info_participant($id,$values){
        $query = '';
        switch (strlen($values['password'])){
            case 0 :
                $values = array_merge(array_slice($values,0,3),array_slice($values,4,5));
                $query = "UPDATE users_tbl SET name=? , family=? , phone=? , email=? WHERE id=?";
				$this->execute($query,array_merge(array_values($values),[$id]));
                break;
            case !0 :
                $values = array_merge(array_slice($values,0,3),[md5($values['password'])],array_slice($values,4,5));
                $query = "UPDATE users_tbl SET name=? , family=? , phone=? , password=? , email=? WHERE id=?";
				$this->execute($query,array_merge(array_values($values),[$id]));
				break;
        }
    }

    public function update_status($values,$id)
    {
        $query = "UPDATE users_tbl SET status=? WHERE id=?";
        $this->execute($query,array_merge(array_values($values),[$id]));
    }

	    public function update_user_manual_assign($values, $id)
    {
        $query = "UPDATE users_tbl SET manual_assign=? WHERE id=?";
        $this->execute($query, array_merge(array_values($values), [$id]));
    }

	public function update_phone_and_status($values, $orginal_phone)
	{
        $query = "UPDATE users_tbl SET phone=? , auth=? WHERE phone=?";
        $this->execute($query, array_merge(array_values($values), [$orginal_phone]));		
	}

   public function delete($table,$where,$value)
    {
        $query = "DELETE FROM $table WHERE $where=?";
        $this->execute($query,$value);
    }
    public function delete_code($phone)
    {
        $query = "DELETE FROM get_code_tbl WHERE phone=?";
        $this->execute($query,[$phone]);
    }

	public function update_password($phone,$password){
		$query = "UPDATE users_tbl SET password=? WHERE phone=?";
		$value = array($password);
        $this->execute($query,array_merge(array_values($value),[$phone]));
	}
	
	public function update_mellicode($phone,$mellicode){
		$query = "UPDATE users_tbl SET mellicode=? WHERE phone=?";
		$value = array($mellicode);
        $this->execute($query,array_merge(array_values($value),[$phone]));
	}
}