<?php
// echo "Hello World!!!!";


// $name = "stephen";
// $age = 20;



// echo "$name is $age years old";

// define('NAME', 'stephen');
// define('AGE', 20);

// echo NAME .  'is'  .  AGE;

// $fruits = array("orange", "apple", "pear");

// echo $fruits[1];

// $age = 27;
// $time = date('H');

// if ($time < 13) {
//     echo "Good morning";
// } else {
//     echo "Good evening";
// };

// $favColor = "";

// switch ($favColor) {
//     case "red":
//         echo 'your favorite color is red';
//         break;
//     case "blue":
//         echo 'your favorite color is blue';
//         break;
//     default:
//         echo 'Your faourite color is white';
// }

// loops

// for($x = 0; $x <= 10; $x++) {
//     echo $x;
// }

// $x = 1;

// while($x <=16) {
//     echo 'Number' .$x . '<br>';
//     $x ++;
// }

// $posts = ["first post", "second posts", "third posts"];

// foreach($posts as $post) {
//     echo $post;
// }

// Function

// function registeredUser ($email)  {
//     return "$email registerd";
// };

// echo registeredUser('stephen'); 

// $person = [
//     'first_name' => "Gift",
//     'last_name' => "Ojo",
//     'email' => 'ojogift@gmail.com',
// ];

// foreach($person as $key => $value) {
//     echo "$key - $value<br>";
// }

// Array functions

$fruits = ["apple", "banana", "orange"];

// get length
// echo count($fruits);

// search array
// var_dump (in_array("oranges", $fruits));

// add to array
// array_push($fruits, "grape");

// array_pop($fruits);
// unset($fruits[1]);

// print_r($fruits);

// superglobals  

// var_dump($_SERVER);

if (isset($_POST["submit"])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>