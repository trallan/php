<?php 
include("hello.php");
include("student.php");


$user = "John";
$age = 30;
$member = True;
$members = ["John", "David", "Eric", "Greg"];

function greet($name){
    echo "Greetings $name!\n";
}

echo "Hello $user\n";
echo "Age: $age\n";

if ($member == True){
    echo "You are a member of php.\n";
} else {
    echo "You are not a member of php.\n";
}

echo "One active member is $members[2].\n";
echo "Removing member $members[3] from members.\n";

echo count($members) . "\n";

greet("David");

for ($i = 0; $i < count($members); $i=$i+1){
    echo $members[$i] . " ";
}

echo "\n";

foreach ($members as $member){
    echo $member . "\n";
}

hello();

$alex = new Student("Alex", "Jones");
$alex->say_name();


?>