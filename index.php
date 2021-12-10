<?php  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <h2>Docker Project - Hicham Zaidi</h2>
<table id="tab">
  <tr id="row1">
      <th>Picture</th>
      <th>University Name</th>    
      <th>Domain</th>

  </tr>
  <?php
include 'dbConn.php';
 // Using database connection file here

$records = mysqli_query($db,"select * from university"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
<tr>
                <td><img src="<?php echo $data['picture']; ?>" width="100" height="100"></td>
                <td><?php echo $data['nome'] ?></td>
                <td><?php echo $data['domaine'] ?></td>
                
</tr>
  <?php } ?>
</table>

<div>
<form action="insert.php" method="POST" style="margin :auto;margin-top:20px" enctype="multipart/form-data" >
<table>
  <tr>
    <td>
  <label style="font-weight: bold;" for="fname">Picture :</label><br>
  <input name="picture" type="file"  ><br><br>
</td>
<td>
  <label style="font-weight: bold;" for="lname">University Name :</label><br>
  <input style="width:60%;height:40px;" name="name" placeholder="Name" type="text" " ><br><br>
</td>
<td>
  <label style="font-weight: bold;" for="lname">Domain :</label><br>
  <input style="width:60%;height:40px;" name="domain" placeholder="Domain" type="text" ><br><br>
</td>
</tr>
</table>
<button 
style="width: 20%;padding: 10px 16px;margin-left: 10%;font-weight: bold;" 
name="add" type="submit" value="submit" >ADD ROW
</button>
</form>
</div>

</body>
</html>


