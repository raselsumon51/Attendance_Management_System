<?php
include 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>
<body>
  
    
  <div class="slider-container">    
  <?php 
    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($con, $sql);
    if($result){
       while( $row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $img_name = $row['img_file_name'];
           echo '
           <div class="slide">';
    ?>
       
           <img src="<?php echo "upload/".$img_name ?>" alt="" />
           <?php
          echo '<h3>Name: '.$name.' </h3>
          <h4>Email: '.$id.' </h4>
          <h4>Email: '.$email.' </h4>
          <h4>Year: 3rd Year, 1st Semester</h4>
          <a href="display.php?id='.$id.'" class="btn btn-primary">Present</a>
          <a href="update.php?updateid='.$id.'" class="btn btn-primary">Update</a>
          <button> <a href="delete.php?deleteid='.$id.'" class="btn btn-primary">Delete</a></button>

  <!--        <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light" >Delete</a></button> -->

           </div>';
         
       }  
    }
    ?>
</div>
   
<script  src="script.js"></script>
</body>
</html>