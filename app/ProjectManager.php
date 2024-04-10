<?php

namespace App;

class ProjectManager implements Manager
{
    const time_costs = 7;
    public function AAssessment_Task_hours($hours): float|int
    {
        return  $hours * self::time_costs;
    }
}