<?php
// Видео №2. Типы данных в PHP.
//Задание:
//1. загуглить какие еще типы данных в PHP сущетсвуют.
//2. привести свои примеры на каждый тип данных.
// Решение:
// в php есть еще такие типы данных как:
// array (массивы $fruits = ['apple', 'orange', 'grape'];)
// callable (функции function is_leap_year($year) { )
// object (объекты)
// mixed (любой тип данных)
// resource (ресурсы)

// Видео № 3. Переменные в PHP.
// Задание:
// самостоятельно создать минимум 3 персонажа по пирмеру в видео.
$name = 'Tsytsygma';
$age = '52';
$hobby = 'reading';
$isMarried = true;
$pet = 'cat';
$petName = 'Myrzik';
echo $name . "\n";
echo $age . "\n";
echo $hobby . "\n";
echo $isMarried . "\n";
echo $pet . "\n";
echo $petName . "\n";

$name = 'Bato-Mynko';
$age = '55';
$hobby = 'Hunting and fishing.';
$isMarried = true;
$pet = 'dog';
$petName = 'Barda';
echo $name . "\n";
echo $age . "\n";
echo $hobby . "\n";
echo $isMarried . "\n";
echo $pet . "\n";
echo $petName . "\n";

$name = 'Erdem';
$age = '30';
$hobby = 'chess';
$isMarried = false;
$pet = 'dog';
$petName = 'Myxtar';
echo $name . "\n";
echo $age . "\n";
echo $hobby . "\n";
echo $isMarried . "\n";
echo $pet . "\n";
echo $petName . "\n";

//Видео №4 Массивы
// Задание:
// Создать новые 3-4 массива с вашими персонажами.
$person = [
    'name' => 'Tsytsygma',
    'age' => '52',
    'hobby' => 'reading',
    'is_married' => true,
    'pet' => 'cat' ,
    'pet_name' => 'Myrzik'
];
print_r($person);

$person2 = [
    'name' => 'Bato-Mynko',
    'age' => '55',
    'hobby' => 'chess',
    'is_married' => true,
    'pet' => 'dog' ,
    'pet_name' => 'Barda'
];
print_r($person2);

$person3 = [
    'name' => 'Erdem',
    'age' => '30',
    'hobby' => 'Hunting and fishing.',
    'is_married' => false,
    'pet' => 'dog' ,
    'pet_name' => 'Myxtar'
];
print_r($person3);

//Видео №5 Цикличный оператор в php
//Задание:
//Вывести в формате ключ-значение всех созданных вами ранее персонажей
$person = [
    'name' => 'Tsytsygma',
    'age' => '52',
    'hobby' => 'reading',
    'is_married' => true,
    'pet' => 'cat' ,
    'pet_name' => 'Myrzik'
];
foreach ($person as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

$person2 = [
    'name' => 'Bato-Mynko',
    'age' => '55',
    'hobby' => 'chess',
    'is_married' => true,
    'pet' => 'dog' ,
    'pet_name' => 'Barda'
];
foreach ($person2 as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

$person3 = [
    'name' => 'Erdem',
    'age' => '30',
    'hobby' => 'Hunting and fishing.',
    'is_married' => false,
    'pet' => 'dog' ,
    'pet_name' => 'Myxtar'
];
foreach ($person3 as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

//Видео №6 Многомерные массивы в php
//Задание:
//1. Создать массив из минимум 5 персонажей
//2. вывести их любимое животное\имена
$persons = [
    [
        'name' => 'Tsytsygma',
        'age' => '52',
        'hobby' => 'reading',
        'is_married' => true,
        'pet' => 'cat' ,
        'pet_name' => 'Myrzik'
    ],
    [
        'name' => 'Bato-Mynko',
        'age' => '55',
        'hobby' => 'chess',
        'is_married' => true,
        'pet' => 'dog' ,
        'pet_name' => 'Barda'
    ],
    [
        'name' => 'Erdem',
        'age' => '30',
        'hobby' => 'Hunting and fishing.',
        'is_married' => false,
        'pet' => 'dog' ,
        'pet_name' => 'Myxtar'
    ],
    [
        'name' => 'Dima',
        'age' => '24',
        'hobby' => 'swimming',
        'is_married' => false,
        'pet' => 'cow' ,
        'pet_name' => 'manya'
    ],
    [
        'name' => 'Oleg',
        'age' => '20',
        'hobby' => 'boxing',
        'is_married' => true,
        'pet' => 'horse' ,
        'pet_name' => 'ryzhik'
    ]
];
foreach ($persons as $person) {
    echo print_r($person['pet']);
    echo print_r($person['pet_name']) . "\n";
}

//Видео №7 Условный оператор в php
//Задание:
//вывести имена женатых людей
$persons = [
    [
        'name' => 'Tsytsygma',
        'age' => '52',
        'hobby' => 'reading',
        'is_married' => true,
        'pet' => 'cat' ,
        'pet_name' => 'Myrzik'
    ],
    [
        'name' => 'Bato-Mynko',
        'age' => '55',
        'hobby' => 'chess',
        'is_married' => true,
        'pet' => 'dog' ,
        'pet_name' => 'Barda'
    ],
    [
        'name' => 'Erdem',
        'age' => '30',
        'hobby' => 'Hunting and fishing.',
        'is_married' => false,
        'pet' => 'dog' ,
        'pet_name' => 'Myxtar'
    ],
    [
        'name' => 'Dima',
        'age' => '24',
        'hobby' => 'swimming',
        'is_married' => false,
        'pet' => 'cow' ,
        'pet_name' => 'manya'
    ],
    [
        'name' => 'Oleg',
        'age' => '20',
        'hobby' => 'boxing',
        'is_married' => true,
        'pet' => 'horse' ,
        'pet_name' => 'ryzhik'
    ]
];
foreach ($persons as $person) {
    if ($person['is_married']) {
        echo print_r($person['name']) . "\n";
    }
}

//Видео №8 Операторы сравнения в php
//Задание:
//Сделать не менее 20 сравнений.
$name = 'Petya';
$age = '23';
$name2 = 'Semen';
$age2 = '21';
if ($age2 > $age ) {
    echo ('Семён старше чем Петя');
} else {
    echo ('Петя старше чем Сёмен'  ) . "\n";
}
$name1 = 'Slava';
$age1 = '20';
$fromIs1 = 'Russia';
if ($name1 == 'Slava' && $age1 >= 20 && $age1 === 20) {
    echo 'Yes1';
} else {
    echo 'No1' . "\n";
}
$name2 = 'Slava';
$age2 = 20;
$fromIs2 = 'Russia';
if ($name2 == 'Slava' && $age2 >= 20 && $age2 === 20) {
    echo 'Yes2' . "\n";
} else {
    echo 'No2' . "\n";
}
$name3 = 'Slava';
$age3 = '20';
$fromIs3 = 'Russia';
if ($name3 == 'Slava' && $age3 >= 20 || $age3 === 20) {
    echo 'Yes3' . "\n";
} else {
    echo 'No3' . "\n";
}
$name4 = 'Slava';
$age4 = '20';
$fromIs4 = 'Russia';
if ($name4 == 'Slava' && $fromIs4 =='America') {
    echo 'Yes4' . "\n";
} else {
    echo 'No4' . "\n";
}
$name5 = 'Slava';
$age5 = '20';
$fromIs5 = 'Russia';
if ($name5 == 'Slava' && $fromIs5 =='Russia') {
    echo 'Yes5' . "\n";
} else {
    echo 'No5' . "\n";
}
$name6 = 'Slava';
$age6 = '20';
$fromIs6 = 'Russia';
if ($name6 == 'Slava' || $fromIs6 =='America') {
    echo 'Yes6' . "\n";
} else {
    echo 'No6' . "\n";
}
$name7 = 'Slava';
$age7 = '20';
$fromIs7 = 'Russia';
if ($name7 == 'Slava' && $age7 >20) {
    echo 'Yes7' . "\n";
} else {
    echo 'No7' . "\n";
}
$name8 = 'Slava';
$age8 = '20';
$fromIs8 = 'Russia';
if ($name8 == 'Slava' || $age8 >20 && $age8===20) {
    echo 'Yes8' . "\n";
} else {
    echo 'No8' . "\n";
}
$name9 = 'Slava';
$age9 = '20';
$fromIs9 = 'Russia';
if ($name9 == 'Slava' && $age9 <20) {
    echo 'Yes9' . "\n";
} else {
    echo 'No9' . "\n";
}
$name10 = 'Slava';
$age10 = '20';
$fromIs10 = 'Russia';
if ($name10 == 'Slava' && $age10 <=20) {
    echo 'Yes10' . "\n";
} else {
    echo 'No10' . "\n";
}
$name11 = 'Slava';
$age11 = '20';
$fromIs11 = 'Russia';
if ($name11 == 'Slavik' || $age11 <20) {
    echo 'Yes11' . "\n";
} else {
    echo 'No11' . "\n";
}
$name12 = 'Slava';
$age12 = '20';
$fromIs12 = 'Russia';
if ($name12 == 'Slavik' || $age12 <=20) {
    echo 'Yes12' . "\n";
} else {
    echo 'No12' . "\n";
}
$name13 = 'Slava';
$age13 = '20';
$fromIs13 = 'Russia';
if ($name13 == 'Slavik' && $fromIs13 =='Russia') {
    echo 'Yes13' . "\n";
} else {
    echo 'No13' . "\n";
}
$name14 = 'Slava';
$age14 = '20';
$fromIs14 = 'Russia';
if ($name14 == 'Slavik' || $fromIs14 =='Russia') {
    echo 'Yes14' . "\n";
} else {
    echo 'No14' . "\n";
}
$name15 = 'Slava';
$age15 = '20';
$fromIs15 = 'Russia';
if ($name15 == 'Slava' && $fromIs15 =='Russia') {
    echo 'Yes15' . "\n";
} else {
    echo 'No15' . "\n";
}
$name16 = 'Slava';
$age16 = '20';
$fromIs16 = 'Russia';
if ($name16 == 'Slava' && $fromIs16 =='Russia' && $age16 >= 20 ||$age16===20 ) {
    echo 'Yes16' . "\n";
} else {
    echo 'No16' . "\n";
}
$name17 = 'Slava';
$age17 = '20';
$fromIs17 = 'Russia';
if ($name17 == 'Slava' && $fromIs17 =='Russia' && $age17 <= 20 && $age17 ===20) {
    echo 'Yes17' . "\n";
} else {
    echo 'No17' . "\n";
}
$name18 = 'Slava';
$age18 = '20';
$fromIs18 = 'Russia';
if ($name18 == 'Slavik' || $fromIs18 =='Russia' && $age18 >20 && $age18 ===20) {
    echo 'Yes18' . "\n";
} else {
    echo 'No18' . "\n";
}
$name19 = 'Slava';
$age19 = '20';
$fromIs19 = 'Russia';
if ($name19 == 'Slavik' || $fromIs19 =='Russia' && $age19 >20 || $age19 ===20) {
    echo 'Yes19' . "\n";
} else {
    echo 'No19' . "\n";
}
$name20 = 'Slava';
$age20 = '20';
$fromIs20 = 'Russia';
if ($name20 == 'Slavik' && $fromIs20 =='Russia' || $age20 >=20 || $age20 ===20) {
    echo 'Yes20' . "\n";
} else {
    echo 'No20' . "\n";
}

//Видео №9 Функции в php
//Задание:
//создать 3 функции: вычитание, умножение, деление
function ymn() {
    $ymn = 5 * 3;
    echo $ymn . "\n";
}
ymn();
function raz() {
    $raz = 73 - 20;
    echo $raz . "\n";
}
raz();
function del() {
    $del = 50/5;
    echo $del . "\n";
}
del();

//Видео №10 Аргументы в функции в PHP
//Задание
//1. Придумать 8 математических функций с аргументами
//2. вызвать эти функции с аргументами и получить результат
function sum($a, $b) {
    $sum = $a + $b;
    echo $sum . "\n";
}
sum(5, 6);
function sum1($a, $b) {
    $sum = $a + $b;
    echo $sum . "\n";
}
sum1(43, 89);

function rz($c, $d) {
    $rz = $c - $d;
    echo $rz . "\n";
}
rz(50, 18 );
function rz1($c, $d) {
    $rz = $c - $d;
    echo $rz . "\n";
}
rz1(164, 98 );

function pon($a, $b) {
    $pon = $a * $b;
    echo $pon . "\n";
}
pon( 15, 17);
function pon1($a, $b) {
    $pon = $a * $b;
    echo $pon . "\n";
}
pon1(20, 11);
function div($a, $b) {
    $div = $a / $b;
    echo $div . "\n";
}
div(125, 15);
function div1($a, $b) {
    $div = $a / $b;
    echo $div . "\n";
}
div1(14835, 5);

//Видео № 11 Возвращаемые функции в PHP
//Задание:
//1.все ранее созданные  математические функции сделать возвращаемыми
//2. с помощью Echo  вывести все результаты выполнения этих функций
function getSum($a, $b) {
    $sum = $a + $b;
    return $sum;
}
echo getSum(5, 6);
function getSum1($a, $b) {
    $sum = $a + $b;
    return $sum;
}
echo getSum1(43, 89);

function getRz($c, $d) {
    $rz = $c - $d;
    return $rz;
}
echo getRz(50, 18 );
function getRz1($c, $d) {
    $rz = $c - $d;
    return $rz;
}
echo getRz1(164, 98 );

function getPon($a, $b) {
    $pon = $a * $b;
    return $pon;
}
echo getPon( 15, 17);
function getPon1($a, $b) {
    $pon = $a * $b;
    return $pon;
}
echo getPon1(20, 11);
function getDiv($a, $b) {
    $div = $a / $b;
    return $div;
}
echo getDiv(125, 15);
function getDiv1($a, $b) {
    $div = $a / $b;
    return $div;
}
echo getDiv1(14835, 5);