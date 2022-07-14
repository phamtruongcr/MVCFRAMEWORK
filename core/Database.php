<?php

abstract class Database{
    abstract public function create();
    abstract public function update($id);
    abstract public function delete();
    abstract public function insert($data);
    abstract public function get();
    abstract public function getSingle($id);
}

?>