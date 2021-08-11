<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    
</head>
<body>
    <br><br><br><br><br><br><br>
    <div class="heading">
        <center><span>Admin Login Only</span></center>
        
    </div>
    <br>
    <br>
    <br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" id="na">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id="vi">
					</div>
					
					<div class="form-group">
						<h2>
						 <input type="button" value="LogIn" class="btn float-right login_btn" onclick="f()">
					 </div>
					 
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	
        function f()
        {
			var a=document.getElementById("na").value;
        var b=document.getElementById("vi").value;
            if(a=='vaish' && b=='vaish')
            {

				   location.replace("update.php");
				  
			 
		
		}
		else{
			alert('LOGIN FAILED');
		}
        }
</script>
</body>
</html>