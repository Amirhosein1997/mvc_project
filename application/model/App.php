<?php


namespace application\model;
use PDO;
use Exception;

class App extends Model
{
    public function all($table)
    {
        $query = "SELECT * FROM $table";
        return $this->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($table,$where,$value)
    {
        $query = "SELECT * FROM $table WHERE $where=?";
        return $this->query($query, [$value])->fetch(PDO::FETCH_OBJ);
    }

    public function insert($values)
    {
        $query = "INSERT INTO users_tbl (username,password) VALUE (?,?)";
        $this->execute($query,array_values($values));
    }

    public function update($values,$id)
    {
        $query = "UPDATE users_tbl SET username=? , password=? WHERE id=?";
        $this->execute($query,array_merge(array_values($values),[$id]));
    }

    public function delete($id)
    {
        $query = "DELETE FROM users_tbl WHERE id=?";
        $this->execute($query,$id);
    }

    public function category_tbl()
    {
        $query = "SELECT * FROM category_tbl ORDER BY `importance` ASC";
        return $this->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function sub_menus($id)
    {
        $query = "SELECT * FROM category_tbl WHERE parent=? ORDER BY `importance` ASC";
        return $this->query($query, [$id])->fetchAll(PDO::FETCH_OBJ);
    }

    public function blog_tbl()
    {
        $query = "SELECT * FROM blog_tbl";
        return $this->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function all_record()
    {
        $query = "SELECT * FROM webinars_tbl";
        return $this->query($query)->fetchAll(PDO::FETCH_OBJ);
    }

    public function id_blog($id)
    {
        $query = "SELECT * FROM blog_tbl WHERE id=?";
        return $this->query($query, [$id])->fetch(PDO::FETCH_OBJ);
    }

    public function insert_message($values)
    {
        $query = "INSERT INTO message_tbl (text,phone,date,blog,parent) VALUE (?,?,?,?,?)";
        $this->execute($query,array_values($values));
    }

    public function message_tbl($value)
    {
        $query = "SELECT * FROM message_tbl WHERE parent=?";
        return $this->query($query, [$value])->fetchAll(PDO::FETCH_OBJ);
    }

    public function message_tbl1($value)
    {
        $query = "SELECT * FROM message_tbl WHERE blog=?";
        return $this->query($query, [$value])->fetchAll(PDO::FETCH_OBJ);
    }

    public function users_tbl($phone)
    {
        $query = "SELECT * FROM users_tbl WHERE phone=?";
        return $this->query($query, [$phone])->fetch(PDO::FETCH_OBJ);
    }

    public function select_comment($id)
    {
        $query = "SELECT * FROM message_tbl WHERE blog=?";
        return $this->query($query, [$id])->fetchAll(PDO::FETCH_OBJ);
    }

    public function answer_message($id)
    {
        $query = "SELECT * FROM message_tbl WHERE parent=?";
        return $this->query($query, [$id])->fetchAll(PDO::FETCH_OBJ);
    }

    public function update_user($list)
    {
        $query="update users_tbl set birthday=? ,edu_lvl=?,field=?,bio=?,email=?,pic=?,resume=?,upgraded='1' where phone=? ";
        $this->execute($query,array_values($list));
    }
}