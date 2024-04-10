<?php

namespace App;

class CDeveloper extends Developer
{
    public string $name = "Olga";
    public  int $age = 21;
    public  string $post = "TeamLead";
    public function Assessment_Task():int
    {
        return rand(1, 10);
    }
}