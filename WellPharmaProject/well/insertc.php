
<?php
include "config.php";

// $eno=$_GET['eno'];
// $ename=$_GET['dename'];
// $Salary=$_GET['dsalary']; 
// $experience=$_GET['dexperience'];

//$query="insert into contact values('Arshi','9872343676','arshi@gmail.com','KINGS WAY NAGPUR')"; 
//$query="insert into contact values('Darshan','7042349053','darshan@gmail.com','Services all good')"; 
//$query="insert into contact values('Jared','183213676','jared@gmail.com','At labs')";
$query="insert into contact values('Misha','3546433276','mi@gmail.com','At site')"; 
//$query="insert into contact values('Name','Phone number','Email','Message')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo " Record inserted";
}
else{
    echo " Getting Error";
}
include "displayc.php"


?>