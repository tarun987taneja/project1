<nav class = "navigation">
    <a href ="third.php">Main File </a>|
    <a href ="first786.html">Display Page</a>|
    <a href ="insert.php">Insert</a>
</nav>


<?php

require_once "786.php";
echo "<br>";
echo "<h1>Collective DATA</h1>";

$sql = "SELECT * FROM MyGuests";
	$result = $conn->query($sql);
?>

<table border = 1;
 border-spacing: 5px;
    border-color: black;>

<tr bgcolor="#00FF00">
<th>name</th>
<th>gender</th>
<th>email</th>
<th>birth</th>
<th>address</th>
<th>city</th>
<th>province</th>
<th>postalCode</th>
<th>website</th>
<th>annualPay</th>
<th>To Update</th>
<th>To Delete</th>
<th>Generate Payslip</th>
</tr>

<?php
	if ($result->num_rows > 0) {
    	// output data of each row
   	 while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<tr>";
        echo "<td>";
        	echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row['gender'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        echo "<td>";
        echo $row['birth'];
        echo "</td>";
        echo "<td>";
        echo $row['address'];
        echo "</td>";
        echo "<td>";
        echo $row['city'];
        echo "</td>";
        echo "<td>";
        echo $row['province'];
        echo "</td>";
        echo "<td>";
        echo $row['postalCode'];
        echo "</td>";
        echo "<td>";
        echo $row['website'];
        echo "</td>";
        echo "<td>";
        echo $row['annualPay'];
        echo "</td>";
        echo "<td>";
        echo "<input type='button' name ='Update' value ='Update' onclick=update()>";
        echo "</td>";
        echo "<td>";
        echo "<input type ='button' name = 'Delete' value ='Delete' onclick=delete()> ";
        echo "</td>";
        echo "<td>";
        echo "<input type ='button' name = 'payslip' value ='payslip' onclick=payslip()> ";
        echo "</td>";
        echo "</tr>";
        
    }
	} else {
   	 echo "0 results";
	}
	 
	
	
		
	//$stmt->close();
	$conn->close();
?>
</table>
