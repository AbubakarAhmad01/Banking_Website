<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New user</title>

   
    <!-- Custom styles for this template-->
	 <link href="css/style.css" rel="stylesheet">
    <link href="css/sb-style.css" rel="stylesheet">
<style>
.bg-login-image{
background-image: url("img/user.jpg");}
.leftmenu{
	width: 20%;
	margin-top:40px;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}
</style>	

</head>

<body class="bg-gradient-primary">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create New User</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="name" name="name" placeholder="Name" required>
                                                
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Email" required>
                                        </div>
										<div class="form-group">
                                            <input type="number" class="form-control form-control-user"
                                                id="balance" name="balance" placeholder="Balance" required>
                                        </div>
                                        
                                        <input type="submit" value="CREATE" name="submit" class="btn btn-primary btn-user btn-block">
                                            
                                   
                                        </input>
                                        <hr>
                                       <input type="reset" value="RESET" name="reset" class="btn btn-secondary btn-user btn-block">
                                            
                                   
                                        </input>
                                    </form>
                                    <hr>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   

</body>

</html>