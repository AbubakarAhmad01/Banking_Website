<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Transaction history</title>

    <link href="css/style.css" rel="stylesheet">
	<link href="css/sb-style.css" rel="stylesheet">

<style>

.leftmenu{
	width: 20%;
	margin-top:40px;
	line-height: 100px;
	float: left;
	
}
</style>	   

</head>

<body id="page-top">
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
                                            <th>S.No.</th>
                                            <th>Sender</th>
                                            <th>Receiver</th>
                                            <th>Amount</th>
                                            <th>Date & Time</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
									 <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
									
                                        <tr>
                                            <td><?php echo $rows['sno']; ?></td>
											<td><?php echo $rows['sender']; ?></td>
											<td><?php echo $rows['receiver']; ?></td>
											<td><?php echo $rows['balance']; ?></td>
											<td><?php echo $rows['datetime']; ?></td>
                                            
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