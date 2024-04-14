<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>Welcome to PHP!</h1> -->

    <?php
    // echo "Hello World!";
    // echo "<h2 style='color: red'>PHP is fun!</h2>";

    // this is a single-line comment
    /** 
     * This is a multi-line comment block
     */
    // print "I'm about to learn PHP!";
    // print "<h2>PHP is easy!</h2>";

    // Variables
    // $name = "John";
    // $jobTitle = "Software Developer";
    // $age = -30.0;
    // $isHired = false;
    // $cars = array("Volvo", "BMW", "Toyota");
    // $address = null;
    // $csvFile = "john,doe,30,software developer";
    // $quote = "I'm a \"Software Developer\"";

    // echo "Hello $name" . "<br>";
    // echo $jobTitle . "<br>";
    // echo "Are you hired? " . $isHired . "<br>";

    // var_dump($cars);
    // echo "<br>";
    // echo $cars[1];

    // echo "<br>" . $address;

    // var_dump(explode(",", $csvFile));

    // echo "<br>" . $quote;

    // $grade = 50.5;
    // var_dump(is_float($grade));

    // var_dump(is_nan(acos(8)));

    // $grade1 = 10;
    // $grade2 = (float)"20";

    // echo $grade1 + $grade2;
    // echo "<br>";

    // var_dump((string)$grade1);
    // echo "<br>";
    // var_dump($grade1);
    // echo "<br>";

    // $name = "25 kph lorem ipsum";
    // $name = "lorem ipsum 25 kph";
    // var_dump((int)$name);

    // $amounts = [1, 2, 3, 4, -5];
    // var_dump(max($amounts));

    // echo "<br>";
    // echo round(0.59);

    // constants
    // define("BIRTHDATE", "1990-01-01");
    // const BIRTHPLACE = "Manila";

    // echo BIRTHDATE;
    // echo "<br>";
    // echo BIRTHPLACE;

    // echo "<br>";
    // echo __DIR__;

    // echo "<br>";
    // var_dump(5 <=> 10);

    // echo "<br>";

    // $cars1 = array("Volvo", "BMW", "Toyota");
    // $cars2 = array("Volvo", "BMW");
    // var_dump($cars1 == $cars2);

    // if statements
    // $age = 18;
    // if ($age >= 18) {
    //     // echo "You are an adult!";
    // }
    // echo "<br>" . "End of program" . "<br>";

    // $grade = 85;
    // create conditional statement
    /**
     * below 75 = failed
     * above or equal to 75 = passed
     */
    // if ($grade < 75) {
    //     echo "You failed!";
    // }

    // if ($grade >= 75) {
    //     echo "You passed!";
    // }

    // $grade = 75;
    /**
     * below 75 = failed
     * between 75 & 85 = needs improvement
     * 85 and above = passed
     * 90 and above = passed
     */
    // if ($grade < 75) {
    //     echo "You failed!";
    // } else if ($grade <= 85) {
    //     echo "You need improvement!";
    // } else if ($grade <= 90 && $grade <= 100) {
    //     echo "you passed!";
    // } else {
    //     echo "You are genius!";
    // }

    // switch statement
    // $fruits = "banana";
    // switch ($fruits) {
    //     case "apple" || "banana" || "orange":
    //         if(/*condition*/){
    //             //
    //         }
    //         break;
    //     default:
    //         echo "Delicious!";
    //         // break;
    // }

    // while loop
    // $i = 1;
    // while ($i < 6) {
    //     echo "The number is: $i <br>";
    //     $i++;
    // }

    // do while
    // $i = 1;
    // do {
    //     echo $i;
    //     $i++;
    // } while ($i < 6);

    // for loop
    // $i = 1;
    // for ($i = 1; $i <= 5; $i++) {
    //     echo "The number is: $i <br>";
    // }

    // foreach loop
    // $cars = array("Volvo", "Toyota", "BMW");
    // $cars = ["Volvo", "Toyota", "BMW"];
    // foreach ($cars as $car) {
    //     echo $car . "<br>";
    // }

    // $rows = 5;
    /*
    *
    **
    ***
    ****
    *****
     */
    // for ($i = 0; $i < $rows; $i++) {
    //     for ($a = 0; $a <= $i; $a++) {
    //         echo "*";
    //         // if(/*condition*/) {
    //         //     break;
    //         // } else {
    //         //     continue;
    //         // }
    //     }
    //     echo "<br>";
    // }

    // associative array
    // $users = [
    //     "name" => "John",
    //     "age" => 30,
    //     "job" => "Software Developer"
    // ];
    // // $user = array(
    // //     "name" => "John",
    // //     "age" => 30,
    // //     "job" => "Software Developer"
    // // );
    // echo $users["job"];

    // multidimentional array
    // $users = [
    //     [
    //         "name" => "John",
    //         "age" => 30,
    //         "job" => "Software Developer",
    //         "address" => [
    //             "street" => "123 Main St",
    //             "city" => "Manila",
    //             "zip" => "1000",
    //         ],
    //         "cars" => [
    //             "brands" => [
    //                 "Volvo" => [
    //                     "model" => "XC90",
    //                     "year" => 2020
    //                 ],
    //                 "BMW" => [
    //                     "model" => "XC90",
    //                     "year" => 2020
    //                 ],
    //                 "Toyota" => [
    //                     "model" => "XC90",
    //                     "year" => 2020
    //                 ],
    //             ]
    //         ]
    //     ]
    // ];

    // var_dump($users[0]["cars"]["brands"]["BMW"]["year"]);

    // $fruits = ["apple", "banana", "orange"];
    // array_push($fruits, "mango", "grapes");
    // // ["apple", "banana", "orange", ["mango", "grapes"]
    // unset($fruits[1]);
    // var_dump($fruits);

    // functions
    // function calculateGrade()
    // {
    //     // calculate all grades per quarter.
    // }

    // $grade = 0;
    // calculateGrade();
    // echo "Your grade is now generated";

    $age = 30;
    $birthDate = "2020-01-26";

    /**
     * Function to display user profile.
     * 
     * @param array $userDetails
     */
    function displayProfile($userDetails)
    {
        try {
            echo "Name: " . $userDetails["name"] . "<br>";
            echo "Email: " . $userDetails["email"] . "<br>";
            echo "Job Title: " . $userDetails["jobTitle"] . "<br>";
            echo "Company: " . $userDetails["company"] . "<br>";

            // $age = 30;
            $globalAge = $GLOBALS["age"];

            global $age, $birthDate;

            $localAge = $age;

            echo "My age is" . $localAge;
            echo "<br>";
            echo "My birthday is on $birthDate";

            // throw new Exception();
        } catch (Exception $error) {
            echo "error found";
        }
    }

    // $user = [
    //     "name" => "John",
    //     "email" => "johndoe@mail.test",
    //     "jobTitle" => "Software Developer",
    //     "company" => "Inventive Media"
    // ];

    // displayProfile($user);
    // echo "Your age is $age";

    // static scope
    function getSize()
    {
        static $size = 0;
        echo "Your shoe size is $size" . "<br>";
        $size++;
        return $size;
    }

    include "fruits.php";
    // $fruits = ["mango", "watermelon"];

    // $size = getSize();
    // $size = getSize();
    // echo $size;
    ?>
</body>

</html>