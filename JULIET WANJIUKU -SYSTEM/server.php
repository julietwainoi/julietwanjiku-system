 <?php
 //initial variables
 $name = "";
 $phone_number ="";
 $location = "";
 $age = "";
 $email ="";
 $id = 0;

// connection to database
$db = mysqli_connect('localhost','root', '', 'info');
//if save button is clicked
if(isset($_POST['save']))    {
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$location = $_POST['location'];
$age = $_POST['age'];
$email = $_POST ['email'];
	
$query = "INSERT INTO users(name,phone_number,location,age,email)VAlUES('$'name' 'phone_number', 'location', 'age', 'email')";
mysqli_query($db, $query);
header('location: inder.php'); //redirect to tables page aftter inserting
}
$results = mysqli_query($db, "SELECT * FROM user


?>
