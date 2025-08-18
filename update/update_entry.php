<?php




if(isset($_POST['btn']))
{   

    include("dbconnect.php");

$name=$_POST['name'];
$contact=$_POST['contactno'];
$r_Pro_no=$_POST['rpn'];
$u_Pro_no=$_POST['upn'];


$update="UPDATE bookingdetail SET `Product no.` = '$u_Pro_no' WHERE `Name`='$name' OR `Contact No.` = '$contact' AND `Product no.` = '$r_Pro_no'";

$res=mysqli_query($connect,$update);
if($res)
{
    print('<h1 style="color: red; text-align: center;">PRINCESS FASHION</h1>');
    print("Your recent product no.:" . $r_Pro_no ."<br><br>");
    print("your updated product no.:". $u_Pro_no ."<br><br>");
}
else{
    print("not updated");
}
}
else{
    print("plese first click on update button");
}
?>