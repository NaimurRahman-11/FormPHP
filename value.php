<?php
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['password'], $_POST['email'], $_POST['gender'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $Password = $_POST['password'];
    $Email = $_POST['email'];
    $Gender = $_POST['gender'];

    // echo "Name: ".$firstName." ".$lastName."<br>";
    // echo "Password: ".$Password."<br>";
    // echo "Email: ".$Email."<br>";
    // echo "Gender: ".$Gender;
    header('Location: https://stackoverflow.com/questions/33080573/fatal-error-cannot-use-isset-use-null-expression');
}

?>