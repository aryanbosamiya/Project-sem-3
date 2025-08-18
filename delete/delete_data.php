<?php

if(isset($_POST['dbtn']))
{
    include("dbconnect.php");
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contactno'];
    $ddate=$_POST['ddate'];
    $rdate=$_POST['rdate'];
    $product=$_POST['product'];
    $des=$_POST['des'];

    $delete="DELETE FROM bookingdetail WHERE `Name` = '$name' OR `Address` = '$address' AND `Contact No.` = '$contact' OR `Delivery date` = '$ddate' OR `Return Date` = '$rdate' AND `Product no.` = '$product' AND `Destination` = '$des'";

    if(mysqli_query($connect,$delete))
    {
        print('<h1 style="color: red; text-align: center;">PRINCESS FASHION</h1>');
        print("Dear  ," . $name . "Your booking was canceled");
    }
    else{
        print("not deleted");
    }
}
else{
    print("not clicked on delete button");
}

?>
