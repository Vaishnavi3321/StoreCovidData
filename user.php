
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Filters in php</title>
    <style>
        table,tr,th
        {
            border:2px solid black;
            padding:10px;
        }
    </style>
</head>
<body>
<br>
    <br><br><br><br><br><br><br><br><br><br><br>
    
<div class="container">
  <div class="row">
 
    
  <center>
    <form action="user.php" method="POST">
        <label style="color:White;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-weight: 1000;font-size:30px;">Country name  :  
        <select style="font-size:20px;width:250px;border-radius:10px;font-family:'Courier New', Courier, monospace; background-color:lawngreen;" name="cname">
        <option value="">Select Country</option>
        <option value="america">America</option>
        <option value="india">India</option>
        <option value="italy">Italy</option>
        <option value="brazil">Brazil</option>
        <option value="russia">Russia</option>
        <option value="peru">Peru</option>
        <option value="chile">Chile</option>
        <option value="uk">UK</option>
        <option value="iran">Iran</option>
        <option value="mexico">Mexico</option>
        
        </select>
        </label>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" value="View Details" name="submit" style="width:150px;font-size:15px;height:30px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius:5px;background:red;">

        <a href="index.php" style="width:150px;font-size:15px;height:30px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius:5px;background:red;text-decoration:none;">Back</a>
            

    <br><br><br>
    </form>
    </center>
</div>
<div class="row">
<center>
<table style="border:2px solid white;background:white;padding:10px;" >
<thead>
<tr>
  <th>ID</th>
  <th>Country Name</th>
  <th>Affected</th>
  <th>Women</th>
  <th>Men</th>
  <th>Cured</th>
  <th>Deceased</th>
<tr>
<thead>

<tbody>
<?php
include("db.php");
if(isset($_POST['submit']))
{
    $cname=$_POST['cname'];
   
if( $cname !="" )
{
    $query=" SELECT * FROM viewform WHERE cname='$cname'";
    
    $data=mysqli_query($conn,$query) or die('error');

    if(mysqli_num_rows($data)>0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            $id=$row['id'];
            $cname=$row['cname'];
            $affected=$row['affected'];
            $women=$row['women'];
            $men=$row['men'];
            $cured=$row['cured'];
            $victims=$row['victims'];

            ?>
            <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $cname;?></td>
            <td><?php echo $affected;?></td>
            <td><?php echo $women;?></td>
            <td><?php echo $men;?></td>
            <td><?php echo $cured;?></td>
            <td><?php echo $victims;?></td>
            
            </tr>
            <?php
        }
       
    }
    else
    {
     ?>
     <tr>
        <td>Records Not found</td>
     </tr>   
     <?php
    }

}

}

?>

</tbody>

</table>
</center>
</div>
</div>
</body>
</html>