<?php
include("../src/conection.php");
if (isset($_POST['insert_chariyah'])) {
    //$id = $_POST['ID'];
    $fname = $_POST['name'];
    $phone = $_POST['phone'];
    $type=$_POST['Type'];
    $date=$_POST['DonateDate'];
    $amount=$_POST['Amount'];
    $description=$_POST['Description'];
    // $userid=$_POST['UserID'];
   // $userid=$_POST['UserID'];
    //$status=$_POST['Status'];
  
   

    $insert_chariyah = mysqli_query($conection,"INSERT INTO `chariyah`(`Name`, `Phone`, `Type`, `DonateDate`, `Amount`, `Description`) VALUES ('$fname',' $phone',' $type','$date',' $amount','$description')");
   
    if($insert_chariyah){
        echo" <script>alert('insert successfully')</script>";
      echo "<script>window.location.href='../Chariyah.php'</script>";


} else {
   
          //   echo" <script>alert(' Already exists this username!')</script>";
          //  echo "<script>window.location.href='../Users.php'</script>";
        //    echo $path;
        //    echo("<br>");
        //    echo $Name;
        //    echo("<br>");
        //    echo $Phone;
        //    echo("<br>");
        //    echo $Address;
        //    echo("<br>");
        //    echo $Gender;
        //    echo("<br>");
        //    echo $dep_name;
        //    echo("<br>");
        //    echo $sch;
        }
}
    

?>