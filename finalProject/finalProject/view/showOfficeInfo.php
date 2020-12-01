 <?php 
		include('findinfobyId.php');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";
		$name ="";

		$userId = $name = $email = $gender = $address = $joiningDate = $phone = $bloodGroup = $dob = "";


		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT userId,name, email, gender, address, joiningDate,phone, bloodGroup,dob FROM officeinfo";
		$result = $conn->query($sql);
		
		
			 echo "<table border= 1 align=center>";
			 echo "<tr>";
			 echo "<th width= 200px>User Id</th>";
			 echo "<th width= 200px>Name</th>";
			 echo "<th width= 200px>Email</th>";
			 echo "<th width= 200px>Gender</th>";
			 echo "<th width= 200px>Address</th>";
			 echo "<th width= 200px>Joining Date</th>";
			 echo "<th width= 200px>Phone</th>";
			 echo "<th width= 200px>bloodGroup</th>";
			 echo "<th width= 200px>Date Of Birth</th>";
			 echo "</tr>";
			 echo "</table>";
		if ($result->num_rows > 0) {
		
		  while($row = $result->fetch_assoc()) {
			  
			  
			//echo "User Id-- " . $row["userId"]. "Name-- " . $row["name"]. " -- Email: " . $row["email"]. "Gender-- " . $row["gender"]. "Address-- " . $row["address"]. "Joining Date--" . $row["joiningDate"]. "--Phone " . $row["phone"]. "--BloodGroup " . $row["bloodGroup"]. "--Date of Birth " . $row["dob"]."<br>";
			$userId = $row["userId"];
			$name =$row["name"];
			$email =$row["email"];
			$gender =$row["gender"];
			$address =$row["address"];
			$joiningDate =$row["joiningDate"];
			$phone =$row["phone"];
			$bloodGroup =$row["bloodGroup"];
			$dob =$row["dob"];
	
		
			 echo "<table border=1 cellspacing=0 align= center>";
			 echo "<tr>";
			 echo "<td width =200px align= center>".$userId."</td>";
			 echo "<td td width =200px align= center>".$name."</td>";
			 echo "<td td width =200px align= center>".$email."</td>";
			 echo "<td td width =200px align= center>".$gender."</td>";
			 echo "<td td width =200px align= center>".$address."</td>";
			 echo "<td td width =200px align= center>".$joiningDate."</td>";
			 echo "<td td width =200px align= center>".$phone."</td>";
			 echo "<td td width =200px align= center>".$bloodGroup."</td>";
			 echo "<td td width =200px align= center>".$dob."</td>";
			 echo "</tr>";
			 echo "</table>";
			
			
			
		  }
		} 
		else {
		  echo "0 results";
		}
		$conn->close();
		echo "<br> <br> <br>";
        include('iud.php');

?>
   
