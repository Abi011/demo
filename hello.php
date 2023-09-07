<?php
    //syntax

echo "hello world!!!";
echo "<br>";
echo"<br>";
 
    //Variables

 $txt="mat";
 $xy=8.5;
 $xz=9.5;   
echo $txt;
echo"<br>";
echo $xy;
echo"<br>";
echo $xz;
echo "<br>";
echo"<br>";

    // echo/print
 
 $text1="php";
 $aa=15;
 $ab=11;
 echo"Learning" .   $text1."<br>";
 
 print "php practice";
 echo"<br>";
 echo"<br>";

    //strings

 echo strlen("hello world!!!");
 echo"<br>";
 echo"<br>";
 
 echo str_word_count("Hypertext preprocessor");
 echo "<br>";
 
 echo strrev("w3schl learning site");
 echo "<br>";
 echo"<br>";

 echo str_replace("var","reference", "string var");
 echo"<br>";
 echo"<br>";

     //math
 
 echo(min(10,40,90,85,-230));
 echo"<br>";
 echo(max(20,65,82,98,-240));
echo"<br>"; 
echo(abs(-4.8));
echo"<br>";
echo(sqrt(256));
echo"<br>";
echo(rand(60,100));
echo"<br>";
echo"<br>";

define("departments", 
    ["maths","physics","CS","IT"]);
echo departments[3];
echo"<br>";
echo"<br>";

      //operators

 $a=12;
 $b=23;
 echo$a*$b;     
 echo"<br>";
 echo"<br>";
 $x=40;
 $x +=80;
 echo $x;
 echo"<br>";
 echo"<br>";
 $c=15;
 echo --$c;
 echo"<br>";
 echo"<br>";

echo (4<5)&&(4>4);

       //statement 
 
$a=10;
if($a%2==0)
{
echo "It is an even number.";
}
echo "<br>";

$b=11;
if($a%2==0)
{
    echo "It is an odd number";
}
else
{
    echo "It is an even number";
}
echo "<br>";

$marks=70;
if($marks>90)
{
 echo "excellent";
}
elseif($marks>80)
{
echo "A";
}
elseif($marks>70)  
{
  echo"B"; 
}
elseif($marks>60)
{
 echo"C";   
}
else{

echo"fail";
}
echo "<br>";
echo "<br>";

$x=15;
$y=8;
$operator="*";
switch($operator)
{
case "+":
    echo $x+$y;
    break;
case "-":
    echo $x-$y;
    break;
case "*":
    echo $x*$y;
    break;
default:
echo"the operation not supported";
}
echo "<br>";
echo "<br>";

      //loops

 $n=1;
 while($n<=8)
 {
   echo $n;
   $n++;
}     
echo "<br>";

$x=2;
do{
 echo"the number is: $x <br>";
 $x++;
}
while ($x<=5);
echo "<br>";


for ($x = 3; $x <= 5; $x++) {
    echo "The value is: $x <br>";
}
echo "<br>";

for ($x = 0; $x < 8; $x++) {
    if ($x == 3) {
      break;
    }
    echo "output is: $x <br>";
}
echo "<br>";




$arr=array(22,44,66);
foreach($arr as $num)
{
    echo $num."";
    }
echo "<br>";
echo "<br>";
echo "<br>";

      //functions
      
function ColorName($c_name)
{
 echo "$c_name color.<br>";
}
ColorName("red");
ColorName("blue");
ColorName("pink");
echo "<br>";
echo "<br>";

        //superglobals

        $x = 5;
        $y = 25;
         
        function multiplication() {
          $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
        }
         
        multiplication();
        echo $z;     
        echo "<br>";

  echo $_SERVER['SCRIPT_NAME'];
  echo $_SERVER['REQUEST_TIME'];     
  echo "<br>";

          //form handling
 


 echo"<br>";
 echo "Today is " . date("Y/m/d") . "<br>";
 echo "Today is " . date("l");
 echo "<br>";

 echo date("Y");
 echo "<br>";
 echo "<br>";

echo "The time is". date("h;i;sa");
echo "<br>";
echo "<br>";

        //creating date and time

 $d= mktime(5,30,15,07,10,2023);
 echo "Created date is "   .  date("y-m-d h:i:sa",$d);
 echo "<br>";
 echo "<br>";

 $d=strtotime("5:48pm April 03 2023");
 echo "Created date is "  . date("y-m-d h:i:sa", $d);


      //INCLUDE


 include 'form.php';     
echo "<br>";


 
 ?>