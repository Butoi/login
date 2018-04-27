<?php
 

     $servername= "localhost";
     $username = "root";
     $password = "";
     $database = "db";

                          $conn = new mysqli($servername,$username,$password,$database);

               if($conn->connect_error)
                                          {
	                                         die("Connection failled : "  .$conn->connect_error);
                                          }



  if(isset($_GET['uName'])){
	if(!empty($_GET['Email'])){
		$uName=trim($_GET['uName']);
		$Email=trim($_GET['Email']);
        $uName=mysqli_real_escape_string($conn,$uName);
		$Email=mysqli_real_escape_string($conn,$Email);
		$query="SELECT * FROM log WHERE uName LIKE '%{$uName}%' OR Email LIKE '%{$Email}%'";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result) > 0){
		while($row=mysqli_fetch_array($result)){
			?>
			<div id="result">
			<a href="removeContact.php?id=<?php echo $row['id'];?>"><img src="http://1.bp.blogspot.com/-G9PaXpfB-sw/UeDh8NZNetI/AAAAAAAAGOQ/0Em5WMQWld0/s1600/remove-blogger.jpg"  height="150px" width="200"/></a>
			<p><b>UserName:</b><?php echo $row['uName'];?></p>
			 <p><b>Email:</b><?php echo $row['Email'];?></p>
			<p><b>Password:</b><?php echo $row['pass'];?></p>
			</div>
			<?php
		}
		echo "Number of results" .mysqli_num_rows($result);
		}else{
			echo "<script type='text/javascript'>alert('No result!');</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('Criteria empty!');</script>";
	}
}




?>