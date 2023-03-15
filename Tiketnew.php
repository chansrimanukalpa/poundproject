






<!DOCTYPE html>
<html>
<title>TICKET</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body class="w3-light-grey">
<div class="w3-container w3-border"  id="Tiket">
  <div class="w3-container w3-dark-grey w3-border w3-round-xxlarge w3-hover-border-grey"id ="a"><nav>
  <a class="w3-button w3-dark-grey w3-round-large " href="log.php">Home</a>
  
</nav></div>
</br>
<div class="w3-container w3-light-blue w3-border w3-round-xxlarge">
<h2 >Ticket</h2>
</div>
<div class="w3-panel w3-border w3-round-xxlarge w3-hover-border-green ">
<form class="w3-container" action="ticpross.php" method="POST">
<table>
<tr>
<td>Customer NIC
</td>
<td><select class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="cnic" id="cselec">
   <?php
  $conn=mysqli_connect('localhost','root','','pound');
  $sql3="SELECT * FROM reglog";
  $reslt=mysqli_query($conn,$sql3);
  while ($row=mysqli_fetch_array($reslt)) {
    
  ?>
   <option value="<?php echo $row['nic'];?>"><?php echo $row['nic']; ?></option>
<?php }?>
</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
<script > $('#cselec').chosen();</script>
</td>
</tr>
<tr>
<td>Ticket Number
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="ticket">
</td>
</tr>

<tr>
<td>Branch Code
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="BranchC">
</td>
</tr>

<tr>
<td>Branch Name
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="BranchN">
</td>
</tr>


<tr>
<td>Branch City
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="branchcity">
</td>
</tr>
<tr>
<td>Payment
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="Payment">
</td>
</tr>

<tr>
<td>Article Type
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="Article" >
</td>
</tr>

<tr>
<td>Article Amount
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="Amount" >
</td>
</tr>

<tr>
<td>Weight
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="Weight" >
</td>
</tr>

<tr>
<td>Creation Date
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="date" name="Cdate">
</td>
</tr>



<tr>
<td>Karatage
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="karatage">
</td>
</tr>

<tr><td></td>
<td><input class="w3-button w3-green w3-border w3-round-large" type ="submit"value ="Insert" name="submit"> 
<input class="w3-button w3-yellow w3-border w3-round-large" type ="submit"value ="Update">
<input class="w3-button w3-red w3-border w3-round-large" type ="submit"value ="Delete" name="Delete"></td>

</tr>
</table>


</div>
</br>
<div  class="w3-container w3-dark-grey w3-border w3-round-xxlarge w3-center "id="footer" >
Copyright &copy; Pawnning System <br>
 <a href="home">Siyapath finance.com</a>
</div>

</body>
</html>