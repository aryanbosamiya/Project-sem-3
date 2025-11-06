
<?php


if(isset($_POST['sbtn'])){

    include("db_connection.php");

    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM signupdetail WHERE email= '$email' AND password= '$password'";
    $res=mysqli_query($conn,$query);

    if($res)
    {
    
         print('<h1 style="color: red; text-align: center;">✅signin completed✅</h1>');
         print('<p style="color: black; text-align: center;">E-mail :' . $email . '<br><br>');
         print('<p style="color: black; text-align: center;">Password :' . $password . '<br><br>');
         print('<p style="color: blue; text-align: center;"><a href="home.html">click here to go on home page</a>');
    }
    else { print("not inserted: "); }
}
else{
    print('<h1 style="color: red; text-align: center;">you not yet click on signin button</h1>');
}

?>