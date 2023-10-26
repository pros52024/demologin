<?php
    $name=$_POST['username'];
    $regno=$_POST['regno'];
    $password=$_POST['password'];


    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO Students (name,regno,password) VALUES ('$name','$regno', '$password')";
	if (mysqli_query($conn, $sql)) {
    	 echo "New record created successfully";
	}
	 else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
    $conn->close();
?>
