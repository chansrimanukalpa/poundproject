New tickets to proceeds..
<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pound";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

//fetch data from database
$sql = "SELECT * FROM ticket where cdate= CURDATE()";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//display data in HTML form
?>

<!DOCTYPE html>
<html>
<head>
<title>Current Tickets</title>
<style>
/* CSS style for the form */
body {
font-family: Arial, sans-serif;
background-color: #f1f1f1;
}
h2 {
text-align: center;
margin-top: 50px;
}
table {
margin: auto;
border-collapse: collapse;
width: 80%;
border: 2px solid #ddd;
background-color: white;
}
th, td {
text-align: left;
padding: 12px;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
</style>
</head>
<body>
<h2>New Tickets</h2>
<table>
<thead>
<tr>
<th>CUSTOMER NIC</th>	
<th>TIKET NUMBER</th>
<th>BRANCH CODE</th>
<th>Branch Name</th>
<th>PAYMENT</th>
<th>ARTICAL TYPE</th>
<th>ARTICAL AMOUNT</th>
<th>WEIGHT</th>
<th>CURRENT DATE</th>
<th>KARATAGE</th>


</tr>
</thead>
<tbody>
<?php foreach ($data as $row) {?>
<tr>
<td><?php echo $row['Cnic'] ?></td>
<td><?php echo $row['ticketnum'] ?></td>
<td><?php echo $row['branchcode'] ?></td>
<td><?php echo $row['branchNam'] ?></td>
<td><?php echo $row['payment'] ?></td>
<td><?php echo $row['articaltype'] ?></td>
<td><?php echo $row['articalamount'] ?></td>
<td><?php echo $row['weight'] ?></td>
<td><?php echo $row['cdate'] ?></td>
<td><?php echo $row['karatage'] ?></td>


</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>

<?php
//close connection
mysqli_close($conn);
?>