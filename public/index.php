<?php

require_once('../vendor/autoload.php');

$Java = new \App\JavaDeveloper('Bob', 24, 'middle');
$Java->displayInfo();
echo "Оценка задачи Java " . $Java->Assessment_Task() . "\n";
$TaskeValuation = new \App\TaskeValuation();
//echo "Оценка от разработчика " . $valuation = $TaskeValuation->Assessment_Developer("java") . "\n";
echo "Итоговая оценка " . $TaskeValuation->Result_Evaluation("java") . "\n";

//echo "==========================\n";
//
//$php = new \App\PhpDeveloper('Alina', 26, 'Junior');
//$php->displayInfo();
//echo "Оценка задачи Php " . $randomNumber = $php->Assessment_Task() . "\n";
//echo "Оценка от разработчика " . $TaskeValuation->Assessment_Developer("php") . "\n";
//echo "Итоговая оценка " . $TaskeValuation->Result_Evaluation($valuation) . "\n";
//
//echo "==========================\n";
//
//$python = new \App\PythonDeveloper();
//$python->displayInfo();
//echo "Оценка задачи Python " . $python->Assessment_Task() . "\n";
//echo "Оценка от разработчика " . $TaskeValuation->Assessment_Developer("python") . "\n";
//echo "Итоговая оценка " . $TaskeValuation->Result_Evaluation($valuation) . "\n";
//
//
//echo "==========================\n";
//
//$CDeveloper = new \App\CDeveloper();
//$CDeveloper->displayInfo();
//echo "Оценка задачи C " . $CDeveloper->Assessment_Task() . "\n";
//echo "Оценка от разработчика " . $valuation = $TaskeValuation->Assessment_Developer("C") . "\n";
//echo "Итоговая оценка " . $TaskeValuation->Result_Evaluation($valuation) . "\n";
//echo "==========================\n";
//
//echo "Пример вызова метода и создание обьекта в одной строке: ".(new \App\CDeveloper())->Assessment_Task();

// return type
/*Типы возвращаемых данных в PHP относятся к типу данных, возвращаемых функцией в PHP.
# В строго типизированных языках, таких как JAVA, каждая функция должна иметь тип возвращаемого значения,
# но в PHP это необязательно, поскольку это язык программирования со свободной типизацией*/

// type hinting
/*Указание типа означает явное указание ожидаемого типа объявлений в вашем коде. Это позволяет вам применять определенные типы в вашем коде.
PHP позволяет вам указывать параметры функции, возвращаемые значения и свойства класса для написания более надежного кода*/



