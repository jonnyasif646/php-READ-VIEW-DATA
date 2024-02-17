<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php
$sid = $_GET['id'];
$conn= mysqli_connect('localhost', "root" , "" , "aptech");
$data="SELECT * FROM  students  WHERE  id= $sid " ;
$ans= mysqli_query($conn ,$data );
while($row =mysqli_fetch_assoc($ans)){








?>

<table class="table table-hover table-danger" style="border: 2px solid black;">
<tr>
<td> Id:<?php echo $row['id']   ?></td>
<td  rowspan="6"  style="border: 2px solid black;" ><img src="images/<?php echo $row['profile_picture']   ?>" alt="" style='width:100%;height:400px; object-fit:contain'></td>
<tr>
            <td> Name:  <?php echo $row['name']   ?></td>
           
            </tr>
            <tr>
            <td> Address :   <?php echo $row['address']   ?></td>
            </tr>
            <tr>
            <td> Class:  <?php echo $row['class']   ?></td>
            </tr>
            <tr>
            <td>Phone:  <?php echo $row['phone']   ?></td>
            </tr>
            <tr>
            <td> Gender:  <?php echo $row['gender']   ?></td>
            </tr>
  


 
</table>



<?php 

}?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>