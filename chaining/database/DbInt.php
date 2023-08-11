<?php


interface DbInt
{
    public function select($table, $cols);
    public function insert($table, $insertedData);
    public function edit();
    public function delete();
}
