<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hr_system";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		echo "Not Connection";
	}
	//check database
	if(!mysqli_select_db($conn,$dbname))
	{
		echo "Database not selected";
	}
	//assign form values into variables
	$employee_name = $_POST['employeeName'];
	$employee_id = $_POST['employeeId'];
	$employee_email = $_POST['employeeEmail'];
	$employee_gender = $_POST['employeeGender'];
	$employee_age = $_POST['employeeAge'];
	
	
	//insert sql query
	$sql = "insert into emp (emp_id, emp_name, age, empEmail, gender) values ('$employee_id', '$employee_name', '$employee_email', '$employee_age', '$employee_gender');";
	
	if(!mysqli_query($conn, $sql))
	{
		echo "Error: " . mysqli_error($conn);
	}
	else
	{
		echo "Data inserted";
	}
	header("refresh: 2; url: index.html;");
?>