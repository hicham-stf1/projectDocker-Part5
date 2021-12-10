<?php
include 'dbConn.php';

      if(isset($_POST['add'])){

        $file = $_FILES["picture"];
        $_file_name = $file["name"];
        $_file_temp_loc = $_FILES["picture"]["tmp_name"];
        $_file_store ="images/".$_file_name;
        move_uploaded_file($_file_temp_loc,$_file_store);

        $picture =$_file_store;
        $name = $_POST['name'];
        $domain = $_POST['domain'];

       header("Location: index.php"); 
      $query = "insert into university (nome,domaine,picture) values ('$name',' $domain','$picture');";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
               mysqli_close($db); // Close connection
              }
?>

