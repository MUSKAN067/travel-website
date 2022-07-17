<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, username, password, phone, address, location, guests, arrivals, leaving) values('$name','$email','$username','$password','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }else{
      echo 'OOPS something went wrong please try again LATER !';
   }

?>

<!-- INSERT INTO `book_form` (``name`, `email`, `username`, `password`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('3', 'ghv', 'mhjh@gmail.com', 'musu', '11111', '6206722170', 'fjhj gl jkkhh vnn', 'rtyuui', '4', '2022-07-14', '2022-08-03'); -->