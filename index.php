<?php

// class Test {
//     public function __construct(
//         public readonly int $i = 0,
//         public readonly array $ary = [],
//     ) {}
// }

// $test = new Test;
// // $test->i += 1;
// // $test->i++;
// ++$test->i;
// $test->ary[] = 1;
// $test->ary[0][] = 1;
// $ref =& $test->i;
// $test->i =& $ref;
// byRef($test->i);
// foreach ($test as &$prop);
?>

<!-- Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. -->

<?php
// class User {
//    public $name;
//     public function setName($name){
//         $this->name=$name;
//         echo "HI! Nice to meet you $name ";
//     }

// }
// $user =  new User();
// $user->setName("Kim")
?>

<!-- Write a PHP class that calculates the factorial of an integer. -->
<?php
// class Factorial{
    
//     public function calculateFactorial($num) {
        
//         if($num<=1)
//         {
//             return 1;
//         }else{
//             return $num*$this->calculateFactorial($num-1);
//         }
         
//     }
// }
// $calc = new Factorial();
// echo $calc->calculateFactorial(6);

?>

<!-- Write a PHP script to convert a string to Date and DateTime. -->
<?php
// $dt = DateTime::createFromFormat("m-d-y","12-25-34")->format("y-m-d");
// echo $dt;
?>

<!-- Inheritance Example -->
<?php 
// class Vehicle{
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function description(){
//         echo "The name of the car is: ".$this->name." and it's color is: ".$this->color;
//     }

// }
// class Car extends Vehicle{
//     public function identify(){
//         echo "This is a car";
//     }
// }

// $car = new Car("EK Wagon", "Black");
// $car->identify();
// $car->description();
?>

<?php
// $raw = '22. 11. 1968';
// $start = DateTime::createFromFormat('d. m. Y', $raw);

// echo 'Start date: ' . $start->format('Y-m-d') . PHP_EOL;
// create a copy of $start and add one month and 6 days
// $end = clone $start;
// $end->add(new DateInterval('P1M6D'));
// echo $end->format('m-d-y ');
// $diff = $end->diff($start);
// echo 'Difference: ' . $diff->format('%m month, %d days (total: %a days)') . PHP_EOL;
// Difference: 1 month, 6 days (total: 37 days)
?>
 <!-- explode -->
<?php
// $str = "I am in a hurry";
// $str2 ="We-need-to--get-off-this-train";
// $arr = explode(" ", $str);
// for($i =0;$i<count($arr);$i++)
// {
//     echo $arr[$i];
//     echo " ";
// }
?>

<!-- implode -->
<?php
// $arr = [2,3,4,5,6];
// $str = implode("-",$arr);
// echo $str;
// $arr2 = ["HI","!","You","Seem","Familiar"];
// echo(implode("",$arr2));
?>

<!-- Form handling using GET and POST -->

<!-- <form action = "action.php" method="post">
    <p>Your name is: <input type="text" name = "name"/> </p>
    <p>Your age is: <input type="text" name = "age"/> </p>
<p><input type="submit"/>Submit</p>
</form>

<form action = "action.php" method="get">
    <p>Your name is: <input type="text" name = "name"/> </p>
    <p>Your age is: <input type="text" name = "age"/> </p>
<p><input type="submit"/>Submit</p>
</form> -->

 <!-- JSON Encode/Decode -->

<?php 
    $pObj = array("Happy","Sad");
    echo json_encode($pObj);
    $pObj2 = array("Happiness"=>2, "Sadness"=>"1");
    echo json_encode($pObj2);
    $jObj = '{"key1":"value1","key2":2}';
    $dec1 = json_decode($jObj);
    echo $dec1->key1;
    $dec2 = json_decode($jObj,true);
    echo $dec2["key2"];
    ?>