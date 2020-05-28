<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User_table</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css"
  
  
</head>
<body>
<table>  
    <thead>
	
      <tr>
        <th>name</th>
        <th>phone_number</th>
		<th>location</th>
		<th>age</th>
        <th>Email</th>
		<th colspan="2">Action</th>    
      </tr>
    </thead>
    <tbody>
	<?php while ($row = mysqli_fetch_array($results)) {?>
		
	
      <tr>
        <td>john</td>
        <td>0755678903</td>
        <td>nairobi</td>
		<td>45</td>
		<td>john@gmail.com</td>
  
       <td>
		<a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td> 
      </tr>
	  <?php}?>
      <tr>
        <td>jane</td>
        <td>0755678903</td>
        <td>nakuru</td>
		<td>45</td>
		<td>jane@gmail.com</td>
		<td>
		<a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td> 
      </tr>
      <tr>
        <td>cynthia</td>
        <td>0768452378</td>
        <td>karen</td>
		<td>20</td>
		<td>cynthia@gmail.com</td>
		<td>
		<a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td> 
      </tr>
    </tbody>
  </table>
   <form method="post" action="server.php">
   <div class="input-group">
   <label>Name</label>
   <input type="text" name="name">
   </div>
   <div class="input-group">
   <label>phone number</label>
   <input type="text" name="phone number">
   </div>
   <div class="input-group">
   <label>location</label>
   <input type="text" name="location">
   </div>
   <div class="input-group">
   <label>age</label>
   <input type="text" name="age">
   </div>
   <div class="input-group">
   <label>Email</label>
   <input type="text" name="email">
   </div>
   <div class="input-group">
   <button type="submit" name="save" class ="btn">save</button>
   </div>
   </form>
 
<tr>
<th>Jobs </th>
<th>  and Their Description </th>
<th colspan="2">Action</th>
</tr></br>

<tr>
  <td>IT Job</td>
  <td>- software programming</td>
   <td>
  <a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td>
  </tr><br/>
  <td>Engineering</td>
  <td>- roadway engineering</td>
   <td>
  <a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td><br>
		 <td>medine</td>
  <td>- phamacist</td>
   <td>
  <a href="#">Edit</a>
		</td>
		<td>
		<a href="#">delete</a>
		</td><br>
</tr>


</body>
</html>

      
       