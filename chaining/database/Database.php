<?php

require_once "DbInt.php";

class Database implements DbInt
{
    public $con ;
    public $query_res;
    public $query;
    public $insertedData;
    //'insert into users (id , name) values (1 , ahmed)'

    public function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', '', 'group-51-test-web');
    }
    public function select($table, $cols)
    {
        $this->query = "select $cols from $table ";
        return $this ;
    }
    public function selectWhere($col, $op, $valu)
    {
        $this->query .= "where $col $op '$valu'";
        return $this;
    }
    public function whereAnd($col, $op, $valu)
    {
        $this->query .= " and $col $op '$valu'";
        return $this;
    }
    public function allData()
    {
        $this->query_res = mysqli_query($this->con, $this->query);
        $data = [];
        while($d = mysqli_fetch_assoc($this->query_res)) {
            $data[] = $d;
        }
        return $data ;
    }
    public function dataToInsert($name, $email, $password)
    {
        $this->insertedData = [
          'name' => "$name",
          'email' => "$email",
          'password' => "$password",
        ];
        return $this;
    }
    public function insert($table, $insertedData)
    {

        $cols = '';
        $valus = '';
        foreach($insertedData as $col => $val) {
            $cols .= "$col ,";
            $valus .=  " '" . $val . "' ," ;
        }
        // name , email , password ,

        $cols = rtrim($cols, ',');
        $valus = rtrim($valus, ',');
        $this->query = "insert into $table ($cols) values ($valus)";
        var_dump($this->query);
        return $this;
    }
    public function excut()
    {
        $this->query_res = mysqli_query($this->con, $this->query);

    }
    public function edit()
    {

    }
    public function delete()
    {

    }
}
