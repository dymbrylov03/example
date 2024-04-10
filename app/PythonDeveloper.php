<?php

namespace App;

class PythonDeveloper extends Developer
{
    public string $name = "Max";
    public  int $age = 32;
    public  string $post = "Senior";
    public function Assessment_Task():int
    {
        return rand(1, 10);
    }
}