<?php

namespace Step\Core;

interface jsonInterface {

    public function get();

    public function del(int $id);

    public function edit(int $id, array $array);

    public function add(array $array);

}




?>