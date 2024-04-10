<?php
//Видео №12. Классы
//Задание:
//1. перечислить любимые 4-5 хобби(создать классы);
//2. создать объекты классов;
//3. вывести результаты выполенения созданных методов.
class Person{
    public $hobby = 'reading ';
}
class Person1{
    public $hobby = 'swimming ';
}
class Person2{
    public $hobby = 'run ';
}
class Person3{
    public $hobby = 'chess ';
}

$person = new Person();
$person1 = new Person1();
$person2 = new Person2();
$person3 = new Person3();
echo $person->hobby;
echo $person1->hobby;
echo $person2->hobby;
echo $person3->hobby . "\n";

//Видео №13 Геттеры и Сеттеры
//Задание:
//1. Описать 4-5 животных (создать классы);
//2. Придумать имя и засетить его;
//3. Вывексти на экран.
class Persn{
    public $pet = 'cat';
    public $namePet = '.';
    public $agePet = 3;
    public function setNamePet($namePet)
    {
        $this->namePet = $namePet;
    }
}
class Persn1{
    public $pet = 'dog';
    public $namePet = '.';
    public $agePet = 5;
    public function setNamePet($namePet)
    {
        $this->namePet = $namePet;
    }
}
class Persn2{
    public $pet = 'horse';
    public $namePet = '.';
    public $agePet = 8;
    public function setNamePet($namePet)
    {
        $this->namePet = $namePet;
    }
}
class Persn3{
    public $pet = 'cow';
    public $namePet = '.';
    public $agePet = 7;
    public function setNamePet($namePet)
    {
        $this->namePet = $namePet;
    }
}
$person = new Persn();
$person1 = new Persn1();
$person2 = new Persn2();
$person3 = new Persn3();
$person->setNamePet('Myrzik ');
$person1->setNamePet('Barsik ');
$person2->setNamePet('Byran ');
$person3->setNamePet('Mynya ');
echo $person->namePet;
echo $person1->namePet;
echo $person2->namePet;
echo $person3->namePet . "\n";

//Видео№14 Конструктор в классах
//Задание:
//Создать 5 точек ресторанов быстрого питания
//каждому ресторану описать 5 видов блюд для меню
class Restoran{
    public $soup;
    public $salad;
    public $hotDish;
    public $bakery;
    public $dessert;
    public function __construct($soup, $salad, $hotDish, $bakery, $dessert) {
        $this->soup = $soup;
        $this->salad = $salad;
        $this->hotDish = $hotDish;
        $this->bakery = $bakery;
        $this->dessert = $dessert;
    }
}
$restoran = new Restoran('Lagman ', 'tsezar ', 'lapsha ', 'pirozhki ', 'bliny ');
echo $restoran->soup;
echo $restoran->salad;
echo $restoran->hotDish;
echo $restoran->bakery;
echo $restoran->dessert . "\n";
class Restoran1{
    public $soup;
    public $salad;
    public $hotDish;
    public $bakery;
    public $dessert;
    public function __construct($soup, $salad, $hotDish, $bakery, $dessert) {
        $this->soup = $soup;
        $this->salad = $salad;
        $this->hotDish = $hotDish;
        $this->bakery = $bakery;
        $this->dessert = $dessert;
    }
}
$restoran = new Restoran1('borsh ', 'olive ', 'kartoshka ', 'kyrnik ', 'medovik ');
echo $restoran->soup;
echo $restoran->salad;
echo $restoran->hotDish;
echo $restoran->bakery;
echo $restoran->dessert . "\n";
class Restoran2{
    public $soup;
    public $salad;
    public $hotDish;
    public $bakery;
    public $dessert;
    public function __construct($soup, $salad, $hotDish, $bakery, $dessert) {
        $this->soup = $soup;
        $this->salad = $salad;
        $this->hotDish = $hotDish;
        $this->bakery = $bakery;
        $this->dessert = $dessert;
    }
}
$restoran = new Restoran2('rasolnik ', 'seledka pod shyboy ', 'plov ', 'samsa ', 'napaleon ');
echo $restoran->soup;
echo $restoran->salad;
echo $restoran->hotDish;
echo $restoran->bakery;
echo $restoran->dessert . "\n";
class Restoran3{
    public $soup;
    public $salad;
    public $hotDish;
    public $bakery;
    public $dessert;
    public function __construct($soup, $salad, $hotDish, $bakery, $dessert) {
        $this->soup = $soup;
        $this->salad = $salad;
        $this->hotDish = $hotDish;
        $this->bakery = $bakery;
        $this->dessert = $dessert;
    }
}
$restoran = new Restoran3('goroxovy ', 'lazat ', 'pyure ', 'sosiska v teste ', 'pon4ik ');
echo $restoran->soup;
echo $restoran->salad;
echo $restoran->hotDish;
echo $restoran->bakery;
echo $restoran->dessert . "\n";
class Restoran4{
    public $soup;
    public $salad;
    public $hotDish;
    public $bakery;
    public $dessert;
    public function __construct($soup, $salad, $hotDish, $bakery, $dessert) {
        $this->soup = $soup;
        $this->salad = $salad;
        $this->hotDish = $hotDish;
        $this->bakery = $bakery;
        $this->dessert = $dessert;
    }
}
$restoran = new Restoran4('ramen ', 'fynchoza ', 'kimchxi ', 'dango ', 'mochi ');
echo $restoran->soup;
echo $restoran->salad;
echo $restoran->hotDish;
echo $restoran->bakery;
echo $restoran->dessert . "\n";

//Видео №15 Наследование
//задание
//создать человека (класс)
//придумать 10 разновидностей профессий и отнаследоваться от человека
class Children {
    public $name = 'Oleg ';
    public $age = 20;
    public $hobby = 'chess';

}
class Doctor extends Children {
    public function work()
    {
        echo 'Doctor is working';
    }
}
class Oficcer extends Children {
    public function work()
    {
        echo 'Oficcer is working';
    }
}
class Dentist extends Children {
    public function work()
    {
        echo 'Dentist is working';
    }
}
class Lawyer extends Children {
    public function work()
    {
        echo 'Lawyer is working';
    }
}
class Prosecutor extends Children {
    public function work()
    {
        echo 'Prosecutor is working';
    }
}
class Deputy extends Children {
    public function work()
    {
        echo 'Deputy is working';
    }
}
class Driver extends Children {
    public function work()
    {
        echo 'Driver is working';
    }
}
class Teacher extends Children {
    public function work()
    {
        echo 'Teacher is working';
    }
}
class Astronaut extends Children {
    public function work()
    {
        echo 'Astronaut is working';
    }
}
class Firefighter extends Children {
    public function work()
    {
        echo 'Firefighter is working';
    }
}

$doctor = new Doctor();
echo $doctor->name;
$oficcer = new Oficcer();
echo $oficcer->name;
$dentist = new Dentist();
echo $dentist->name;
$lawyer = new Lawyer();
echo $lawyer->name;
$prosecutor = new Prosecutor();
echo $prosecutor->name;
$deputy = new Deputy();
echo $deputy->name;
$driver = new Driver();
echo $driver->name;
$teacher = new Teacher();
echo $teacher->name;
$astronaut = new Astronaut();
echo $astronaut->name;
$firefighter = new Firefighter();
echo $firefighter->name ."\n";

//16. PHP. Наследование с конструктором
//ЗАДАНИЕ:
//1. создать классы 6-8 растений
//2. придумать "старший\общий класс", туда записать все общие свойства
//3. создать объекты растений и вывести свойства
class Plants {
    public $name;
    public $height;
    public $color;
    public function __construct($name, $height, $color)
    {
        $this->name=$name;
        $this->height=$height;
        $this->color=$color;
    }
}
class Roza extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
class Piony extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
class Odyvanchik extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
class Romashka extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
class Liliya extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
class Gvozdika extends Plants{
    public function flowers() {
        echo 'this is flowers';
    }
}
$plants1 = new Roza('roza ', 20 . " ", 'red ');
echo $plants1->name;
$plants2 = new Piony('piony ', 15 . " ", 'blue ');
echo $plants2->height;
$plants3 = new Odyvanchik('odyvanchik ', 16 . " ", 'white ');
echo $plants3->color;
$plants4 = new Romashka('romashka ', 13 . " ", 'yellow ');
echo $plants4->name;
$plants5 = new Liliya('liliya ', 17 . " ", 'violet ');
echo $plants5->height;
$plants6 = new Gvozdika('gvozdika ', 18 . " ", 'blue ');
echo $plants6->color . "\n";

//17. PHP. Конструктор в классах наследниках
//ЗАДАНИЕ:
//1. создать еще одну должность
//2. добавить свойство "зарплата"
//3. "определить его в конструкторе"
class Pirson {
    public $name;
    public $age;
    public $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

}
class Developer extends Pirson {
    public $salary;
    public function __construct ($name, $age, $job, $salary) {
        parent::__construct ($name, $age, $job);
        $this->salary = $salary;
    }
    public function work()
    {
        echo 'developer is working';
    }
}
class Director extends Pirson {
    public $salary;
    public function __construct ($name, $age, $job, $salary) {
        parent::__construct ($name, $age, $job);
        $this->salary = $salary;
    }
    public function work()
    {
        echo 'Director is working';
    }
}
class Manager extends Pirson {
    public $salary;
    public function __construct ($name, $age, $job, $salary) {
        parent::__construct ($name, $age, $job);
        $this->salary = $salary;
    }
    public function work()
    {
        echo 'Manager is working';
    }
}
$pirson = new Developer('Bob', 20,'developer', 42000 . " ");
echo $pirson->salary;
$pirson1 = new Director('Joni', 23,'director', 56000  . " ");
echo $pirson1->salary;
$pirson2 = new Manager('Steve', 25,'manager', 40000  . "\n");
echo $pirson2->salary;

//18. PHP. Абстрактные классы
//ЗАДАНИЕ:
//1. создать абстрактный класс "Здание" со свойствами: кол-во этажей, жилое здание или нет, улица, на которой находится (можно придумать + свои свойства)
//2. создать от абстрактного класса классы-наследники (5-6 классов)
//3. вывести свойства объектов
abstract class Building {
    public $numberOfFloors;
    public $residentialBuilding;
    public $street;
    public function __construct($numberOfFloors, $residentialBuilding, $street)
    {
        $this->numberOfFloors = $numberOfFloors;
        $this->residentialBuilding = $residentialBuilding;
        $this->street = $street;
    }
}
class Dacha extends Building {
    public $height;
    public function __construct($numberOfFloors, $residentialBuilding, $street, $height)
    {
        parent::__construct($numberOfFloors, $residentialBuilding, $street);
        $this->height = $height;
    }
}

class Kvartira extends Building{
    public $height;
    public function __construct($numberOfFloors, $residentialBuilding, $street, $height)
    {
        parent::__construct($numberOfFloors, $residentialBuilding, $street);
        $this->height = $height;
    }
}
class Dom extends Building{
    public $height;
    public function __construct($numberOfFloors, $residentialBuilding, $street, $height)
    {
        parent::__construct($numberOfFloors, $residentialBuilding, $street);
        $this->height = $height;
    }
}
class Office extends Building{
    public $height;
    public function __construct($numberOfFloors, $residentialBuilding, $street, $height)
    {
        parent::__construct($numberOfFloors, $residentialBuilding, $street);
        $this->height = $height;
    }
}
class TorgovyCentr extends Building{
    public $height;
    public function __construct($numberOfFloors, $residentialBuilding, $street, $height)
    {
        parent::__construct($numberOfFloors, $residentialBuilding, $street);
        $this->height = $height;
    }
}
$building = new Dacha(2 . " ", true, 'Moskovskaya ', 8 . " ");
echo $building->street;
$building1 = new Kvartira(9 . " ", false, 'Boevaya ', 20 . " ");
echo $building1->height;
$building2 = new Dom(1 . " ", true, 'Gagarina ', 4 . " ");
echo $building2->residentialBuilding;
$building3 = new Office(6 . " ", true, 'Smolina ', 14 . " ");
echo $building3->numberOfFloors;
$building4 = new TorgovyCentr(4 . " ", true, 'Klyuchevskaya ', 12 . " ");
echo $building4->street . "\n";

//19. PHP. Статические методы и свойства в классах
//ЗАДАНИЕ:
//1. создать класс "Калькулятор"
//2. создать 10 статических методов вычесления
//3. вызвать статические методы
class Calculator{
    public static function sum($a, $b) {
        echo $a+$b . " ";
    }
    public static function sum1($a, $b) {
        echo $a+$b . " ";
    }
    public static function sum2($a, $b) {
        echo $a+$b . "\n";
    }

    public static function raz($a, $b)
    {
        echo $a-$b . " ";
    }
    public static function raz1($a, $b)
    {
        echo $a-$b . " ";
    }
    public static function raz2($a, $b)
    {
        echo $a-$b . "\n";
    }
    public static function prz($a, $b)
    {
        echo $a*$b . " ";
    }
    public static function prz1($a, $b)
    {
        echo $a*$b . "\n";
    }
    public static function div($a, $b)
    {
        echo $a/$b . " ";
    }
    public static function div1($a, $b)
    {
        echo $a/$b . "\n";
    }
}
Calculator::sum (4,5);
Calculator::sum1 (44,52);
Calculator::sum2 (72,23);
Calculator::raz (12,5);
Calculator::raz1 (97,52);
Calculator::raz2 (42,23);
Calculator::prz (5,5);
Calculator::prz1 (12,5);
Calculator::div (12,6);
Calculator::div1 (195,5);

//20. PHP. Интерфейсы
//ЗАДАНИЕ:
//1. создать интерфейс для самолетов со списком методов
//2. создать классы-самолеты, реализующие интерфейс
//3. вывести на экран, что делает каждый самолет
interface Airplane
{
    public function landing();
    public function disembarkation();
    public function gasStation();
    public function flight();
}
class S7 implements Airplane
{
    public function landing()
    {
        echo 'Авиакомпания "S7" осщуествляет посадку людей' . "\n";
    }
    public function disembarkation()
    {

    }
    public function gasStation()
    {

    }
    public function flight()
    {
        echo 'Авиакомпания "S7" осщуествляет вылет из пункта' . "\n";
    }
}

class Pobeda implements Airplane
{
    public function landing()
    {

    }
    public function disembarkation()
    {
        echo 'Авиакомпания "Pobeda" осщуествляет высадку людей' . "\n";
    }
    public function gasStation()
    {

    }
    public function flight()
    {

    }
}
class Azimuth implements Airplane
{
    public function landing()
    {

    }
    public function disembarkation()
    {

    }
    public function gasStation()
    {
        echo 'Авиакомпания "Azimuth" заправляется' . "\n";
    }
    public function flight()
    {

    }
}
class Aurora implements Airplane
{
    public function landing()
    {

    }
    public function disembarkation()
    {

    }
    public function gasStation()
    {

    }
    public function flight()
    {
        echo 'Авиакомпания "Aurora" в полете' . "\n";
    }
}

$person = new S7();
echo $person->landing();
$person = new Pobeda();
echo $person->disembarkation();
$person = new Azimuth();
echo $person->gasStation();
$person = new Aurora();
echo $person->flight();

//21. PHP. Уровни (модификаторы) доступа: private, protected, public
//ЗАДАНИЕ:
//1. своими словами привести примеры, когда нам следует использовать private, protected, public

//Как говорилось в видео бэкендеры работают в команде и поэтому для удобства и применяют разные
//модификаторы. Например я создал класс и в нем сделал некоторое свойство, и нужно чтобы это свойство не выводилось.
//Чтобы это свойство не выводилось  я использую private чтобы потом другой программист мне не звонил, не спрашивал, не искал
//и т.д., а если я хочу чтобы это свойство выводилось в наследниках то использую protected.