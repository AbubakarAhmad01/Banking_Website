<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Transfer money</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sb-style.css" rel="stylesheet">
<style>

.leftmenu{
	width: 20%;
	margin-top:40px;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}
</style>	
   

</head>

<body id="page-top">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>
    <!-- Page Wrapper -->
    <div id="wrapper">

       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  

                    <!-- DataTables  -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="text-align:center;">Transfer Money</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email-id</th>
                                            <th>Balance</th>
                                            <th>Operation</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
									<?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                                        <tr>
                                            <td><?php echo $rows['id'] ?></td>
                                            <td><?php echo $rows['name']?></td>
                                            <td><?php echo $rows['email']?></td>
                                            <td><?php echo $rows['balance']?></td>
                                            <td><a href="userdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-primary" >Transact</button></a></td>
                                        </tr>
                                       <?php
                    }
                ?> 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; RBI BANK 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   

    

   

</body>

</html>