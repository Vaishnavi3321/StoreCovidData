<?php

include "db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            background-image:url("im1.jpg");
        }
        table,th
        {
            border:2px solid black;
            padding:10px;
        }
    </style>
</head>
<body>
    <br>
    <div class="container" >
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="background-color:springgreen;">
                <div class="card-header">
                    <h3 style="text-align: center;">UPDATE FORM</h3>
                    
                </div>
                <br>
               
                            <div class="card-body">
                                <form  action="" method="POST">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Country" name="cname" required>
                                        
                                    </div>
                                    
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-blind" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Affected" name="affected" required>
                                        
                                   </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-female" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Women" name="women" required>
                                        
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-male" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Men" name="men" required>
                                        
                                    </div>
                                    
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-child" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="cured" name="cured" required>
                                        
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-bed"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Deceased" name="victims" required>
                                        
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                         <input type="submit" value="Update data" name="update" class="btn float-right login_btn"></a>
                                         <a href="index.php" style="width:150px;font-size:15px;height:30px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-radius:5px;text-decoration:none;">Back</a>
                                     </div>
                                    
                                     
                                     
                                </form>
                            </div>
                        </div>
                    </div>
                     
                        
     
</form>
<br>
    <center>
    <table style="border:2px solid white;background:white;padding:10px;text-align:center;color:purple;">
    <thead>
        <tr>

        <!--<th>#</th>-->
        <th>Country name</th>
        <th>Affected</th>
        <th>Women</th>
        <th>Men</th>
        <th>Cured</th>
        <th>Victims</th>

        </tr>
    </thead>

    <tbody>
    <?php
    $res=mysqli_query($conn,"select * from viewform");
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>";  echo $row["cname"];  echo "</td>";
        echo "<td>";  echo $row["women"];  echo "</td>";
        echo "<td>";  echo $row["men"];  echo "</td>";
        echo "<td>";  echo $row["affected"];  echo "</td>";
        echo "<td>";  echo $row["cured"];  echo "</td>";
        echo "<td>";  echo $row["victims"];  echo "</td>";

        echo "</tr>";
            
         
            
    }
    ?>



    </tbody>

    </table>
    </center>
    </body>


    
<?php
    if(isset($_POST["update"]))
    {
        mysqli_query($conn,"update  viewform set  affected='$_POST[affected]',women='$_POST[women]',men='$_POST[men]',cured='$_POST[cured]',victims='$_POST[victims]' where cname='$_POST[cname]' ");
    }



?>




</html>