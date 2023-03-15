<!DOCTYPE html>
<html>
<title >customer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body class="w3-light-grey">
<div id="customer">

</br>
<div class="w3-container w3-blue w3-border w3-round-xxlarge">
<h2 id="customer">Registration  Details</h2>
</div>
<div class="w3-panel w3-border w3-round-xxlarge w3-hover-border-green ">
<form class="w3-container" action="rcon.php" method="post" autocomplete="off">
<table>
<tr>
<td>Customer Name
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="name" id="name" required>
</td>
</tr>

<tr>
<td>Customer NIC 
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="nic" id="nic" required>
</td>
</tr>

<tr>
<td>User Name
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="uname" id="uname" required>
</td>
</tr>

<tr>
<td>Email
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="email" name="email" id="email" required>
</td>
</tr>

<tr>
<td>Password
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="Password" name="password" id="password" required>
</td>
</tr>

<tr>
<td>Comfirm Password
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="Password" name="cpassword" id="cpassword" required>
</td>
</tr>



<tr>
<td>Address</td>
<td><textarea class="w3-input w3-border w3-round-large w3-hover-border-blue" rows="5" cols="30" name="addre" id="addre" required>
</textarea>
</td>
</tr>

<tr>
<td>Mobile Number
</td>
<td><input class="w3-input w3-border w3-round-xxlarge w3-hover-border-blue" type="text" name="pnumber" id="pnumber" required>
</td>
</tr>




<tr><td></td>
<td><input class="w3-button w3-green w3-border w3-round-large" type ="submit"value ="Sign Up" name="signup" id="signup" href ="log.php"> 

</td>

</tr>
</table>
<script type="text/javascript">
    var missingFieldCounter = 0; // we count the number of field missing
jQuery('#signup').on('click',function(){
    $(':input[required]').each(function() // for each input that contains "required" attribute
    {
        if($(this).val() == "") // if the required input is not filled
        {
            missingFieldCounter+=1; 
            $(this).after("<b>You have to fill all the fields</b>"); // we print a message after the input
        }
    });

    if(missingFieldCounter == 0) // if the counter has never been incremented (every field is filled)
    {
        jQuery('form').submit();
    }
});

</script>




</div>
</br>
<div  class="w3-container w3-dark-grey w3-border w3-round-xxlarge w3-center "id="footer" >
Copyright &copy; Pawnning System <br>
 <a href="home">Siyapath finance.com</a>
</div>
</div>

</body>
</html>