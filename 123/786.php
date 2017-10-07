<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed cannot built: " . $conn->connect_error);
    echo "Connected successfully" . "<br>";
} 

// Create database
$sql = "CREATE DATABASE c0705314";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


//Use Db
$sql = "USE c0705314";
if ($conn->query($sql) === TRUE) {
    echo "Database changed successfully"."<br>";
} else {
    echo "Error created in creating the database: " . $conn->error . "<br>";
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
employeeId INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50) NOT NULL,
gender VARCHAR(20) NOT NULL,
email VARCHAR(50),
birth DATE,
address VARCHAR(100),
city VARCHAR(50),
province VARCHAR(50),
postalCode VARCHAR(50),
website VARCHAR(50),
reg_date TIMESTAMP,
annualPay INT(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests was created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$stmt = $conn->prepare("INSERT INTO MyGuests (name,gender,email,birth,address,city,province,postalCode,website,annualPay) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssi",$name,$gender,$email,$birth,$address,$city,$province,$postalCode,$website,$annualPay);

// set parameters and execute
$employeeId = "121";
$name = "Rahul";
$gender="Male";
$email = "rahul123@gmail.com";
$birth="1993-05-13";
$address="Sydney,Australia";
$city="Mosque Crescent";
$province="Sydney";
$postalCode="R6E7W8";
$website="http://rockstar.com";
$annualPay="5000";

$stmt->execute();

$employeeId = "131";
$name = "Param";
$gender="Female";
$email = "param123@gmail.com";
$birth="1995-10-05";
$address="Brampton";
$city="Toronto";
$province="Ontario";
$postalCode="M9V4J1";
$website="http://param.com";
$annualPay="10000";

$stmt->execute();

$employeeId = "141";
$name = "Brijesh";
$gender="Male";
$email = "brijesh964@gmail.com";
$birth="1990-05-21";
$address="Ectobicoke";
$city="Toronto";
$province="Ontario";
$postalCode="B2T2Y2";
$website="http://brijesh-gujrat.com";
$annualPay="15000";

$stmt->execute();

$employeeId = "151";
$name = "Nirav";
$gender="Male";
$email = "nirav77@gmail.com";
$birth="1985-01-25";
$address="India";
$city="Ahemdabad";
$province="GUJRAT";
$postalCode="136128";
$website="nirav_binola@gmail.com";
$annualPay="20000";

$stmt->execute();

$employeeId = "161";
$name = "Ram Kumar";
$gender="Male";
$email = "ram123@gmail.com";
$birth="1980-06-20";
$address="HARYANA";
$city="Pehowa";
$province="Kurukshetra";
$postalCode="136111";
$website="ram@gmail.com";
$annualPay="25000";

$stmt->execute();

$employeeId = "171";
$name = "Harman";
$gender="Male";
$email = "harman_rao@gmail.com";
$birth="1975-10-15";
$address="Delhi";
$city="lawrence";
$province="Finch";
$postalCode="445522";
$website="h1@123gmail.com";
$annualPay="30000";

$stmt->execute();

$employeeId = "181";
$name = "Neeraj";
$gender="Male";
$email = "neeraj66@gmail.com";
$birth="1989-09-11";
$address="Pehowa";
$city="Kurukshetra";
$province="Haryana";
$postalCode="136555";
$website="http://neeraj.com";
$annualPay="35000";

$stmt->execute();

$employeeId = "191";
$name = "Jaspreet";
$gender="Female";
$email = "jas123@gmail.com";
$birth="1990-10-15";
$address="Scarbrough";
$city="Toronto";
$province="Ontario";
$postalCode="M5S4S7";
$website="http://jas.com";
$annualPay="40000";

$stmt->execute();

$employeeId = "201";
$name = "Rupali";
$gender="Female";
$email = "rups786@gmail.com";
$birth="1993-11-13";
$address="Haryana";
$city="Pehowa";
$province="Kurukshetra";
$postalCode="784512";
$website="http://rups.com";
$reg_date="";
$annualPay="45000";

$stmt->execute();

$employeeId = "211";
$name = "Anil";
$gender="Male";
$email = "anil786@gmail.com";
$birth="1993-06-10";
$address="35,lawrence road";
$city="nand colony";
$province="Delhi";
$postalCode="125652";
$website="http://anil.com";
$reg_date="";
$annualPay="50000";

$stmt->execute();

echo " record inserted successfully";

echo "<br>";

?>