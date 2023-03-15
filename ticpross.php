<?php

if(isset($_POST['submit'])){

$conn=mysqli_connect('localhost','root','','pound');
$Cnic= $_POST['cnic'];
$ticketn= $_POST['ticket'];
$BranchC= $_POST['BranchC'];
$BranchN= $_POST['BranchN'];
$Branchcity= $_POST['branchcity'];
$payment= $_POST['Payment'];
$articleT= $_POST['Article'];
$articleA= $_POST['Amount'];
$weight= $_POST['Weight'];
$creationDate= $_POST['Cdate'];
$karatage= $_POST['karatage'];

$sql ="INSERT INTO ticket VALUES('$Cnic','$ticketn','$BranchC','$BranchN','$payment','$articleT','$articleA','$weight','$creationDate','$karatage')";
$query =mysqli_query($conn,$sql);
if($query){
  $sql2="INSERT INTO bank(branchC,branchNam,branchcity)VALUES('$BranchC','$BranchN','$Branchcity')";
  $result=mysqli_query($conn,$sql2);
  echo 'values inserted!! ';
}else{
  echo'There was an error in inserting values!!';
}

}






//(Cnic,ticketnum,branchcode,branchNam,Branchcity,payment,articaltype,articalamount,weigh//t,cdate,karatage)


?>
