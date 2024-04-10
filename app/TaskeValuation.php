<?php

namespace App;

class TaskeValuation //Оценка задач
{
    static public function Assessment_Developer(string $language) // Оценка от разработчика
    {
        switch ($language) {
            case "php":
                $php = new PhpDeveloper('Alina', 26, 'Junior');
                return $php->Assessment_Task();
                break;
            case "python":
                $python = new PythonDeveloper();
                return $python->Assessment_Task();
                break;
            case "java":
                $java = new JavaDeveloper('Bob', 24, 'middle');
                return $java->Assessment_Task();
                break;
            case "C":
                $CDeveloper = new CDeveloper();
                return $CDeveloper->Assessment_Task();
                break;
        }

    }

    public static function Result_Evaluation($language)//Итоговая оценка
    {
        $Assessment_Developer = new ProjectManager();
        return $Assessment_Developer->Assessment_Developer($language);
    }
}