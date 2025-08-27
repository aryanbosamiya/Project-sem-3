<?php
if(isset($_POST['btn']))
{
    include("db_connection.php");
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $mono=$_POST['mono'];
    $bdate=$_POST['bdate'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    print("Firstname:$firstname");
    print("middlename:$middlename");
    print("lastname:$lastname");
    print("Mo.No.:$mono");
    print("Birth Date:$bdate");
    print("Email:$email");
    print("Password:$password");
    $query = "INSERT INTO signupdetail (firstname, middlename, lastname, `Mo.No.`, Birthdate, Email, password)
              VALUES ('$firstname', '$middlename', '$lastname', '$mono', '$bdate', '$email', '$password')";
    

    $res=mysqli_query($conn,$query);
    if($res)
    {
        print("your signup data inserted.");
    }
    else{
        print("not innserted");
    }
}
else{
    print("you have not clicked on submit");
}
