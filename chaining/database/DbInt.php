<?php


interface DbInt
{
    public function select($table, $cols);
    public function insert();
    public function edit();
    public function delete();
}
