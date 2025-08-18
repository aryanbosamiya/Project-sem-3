<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="booking";

$connect=mysqli_connect($hostname,$username,$password,$dbname);
if($connect){
    print("connected");
}
else{
    print("not connected");
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contactno'];
    $ddate=$_POST['ddate'];
    $rdate=$_POST['rdate'];
    $prno=$_POST['product'];
    $des=$_POST['destination'];
   
   $insert = "INSERT INTO bookingdetail(`Name`, `Address`, `Contact No.`, `Delivery date`, `Return Date`, `Product no.`, `Destination`) 
        VALUES ('$name', '$address', '$contact', '$ddate', '$rdate', '$prno', '$des')";


            $res=mysqli_query($connect,$insert);
            if($res)
            {
               print('<h1 style="color: red; text-align: center;">Thank you for visiting PRINCESS FASHION</h1>');
                print("your product no. is: " . $prno . "<br><br>");
                print("Delivery date: " . $ddate . "<br><br>");
                print("Return date: " . $rdate . "<br><br>");
                print("destination: " . $des . "<br><br>");

            }
            else { print("not inserted: " . mysqli_error($connect)); }


}

else{
    print("you not clicked on submit");
}