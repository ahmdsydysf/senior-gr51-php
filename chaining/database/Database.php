<?php

require_once "DbInt.php";

class Database implements DbInt
{
    public $con ;
    public $query_res;
    public $query;

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
    public function insert()
    {

    }
    public function edit()
    {

    }
    public function delete()
    {

    }
}
