<?php

namespace App;

class JavaDeveloper extends Developer
{
    function __construct($name, $age, $post)
    {
        $this->name = $name;
        $this->age = $age;
        $this->post = $post;
    }
    public function Assessment_Task():int
    {
        return rand(1, 10);
    }
}