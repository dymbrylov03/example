<?php

namespace App;

abstract class Developer
{
    public string $name;
    public  int $age;
    public  string $post;

    public function displayInfo():void
    {
        print_r( "Name: $this->name; Age: $this->age; Post: $this->post; \n");
    }
    public abstract  function Assessment_Task();
}