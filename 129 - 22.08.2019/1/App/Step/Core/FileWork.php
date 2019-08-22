<?php

namespace Step\Core;

abstract class FileWork implements JsonInterface
{
    protected $file_name;

    function __construct($file_name)
    {

        $this->file_name = $file_name;

    }

    public function del(int $id)
    {
        /**
         * @var array $new_array
         * 
         */

        $new_array = $this->get();
        unset($new_array[$id]);
        $this->write_file($new_array);

    }

    public function edit(int $id, array $array)
    {
        // echo gettype($id);
        $new_array = $this->get();
        $new_array[$id] = $array;
        $this->write_file($new_array);

    }

    public function add(array $data_array)
    {

        $new_array = $this->get();
        $new_array[] = $data_array;
        $this->write_file($new_array);

    }

    abstract function get();

    abstract function write_file(array $data_array);
    


}

?>