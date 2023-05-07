<?php
require_once( 'database_conn.php' ); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/983007b906.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <?php require_once('Loader.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        <?php require_once('Side_bar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once('Topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List of customers</h1>
                    <p class="mb-4">A list of customers for Tech Haven is a record of people who have purchased products or services from the shop. It helps with customer retention, targeted marketing, and customer service.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of customers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>First name</th>
                                            <th>Middle name</th>
                                            <th>Last name</th>
                                            <th>Contact number</th>
                                            <th>District</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>First name</th>
                                            <th>Middle name</th>
                                            <th>Last name</th>
                                            <th>Contact number</th>
                                            <th>District</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                    
                                    //$sql_query="SELECT * FROM customer";
                                    $sql_query = "SELECT customer.id AS customer_id, title, first_name, middle_name, last_name, contact_no, district.id AS district_id, district.district AS district_name 
                                    FROM customer 
                                    JOIN district ON customer.district = district.id";
                      
                      

                                    $sql_query_result=$database_connection->query($sql_query);

                                    if ($sql_query_result->num_rows>0) {
                                        
                                        while ($data_row=$sql_query_result->fetch_assoc()) {
                                            ?>
                                        <tr>
                                            <td><?php echo $data_row['title']; ?></td>
                                            <td><?php echo $data_row['first_name']; ?></td>
                                            <td><?php echo $data_row['middle_name']; ?></td>
                                            <td><?php echo $data_row['last_name']; ?></td>
                                            <td><?php echo $data_row['contact_no']; ?></td>
                                            <td><?php echo $data_row['district_id']." ".$data_row['district_name']; ?>
                                            </td>
                                            <td>

                                                <a
                                                    href="Customer_Update_UI.php?customer_id=<?php echo $data_row['customer_id'];?>"><button
                                                        type="button" class="btn btn-success" data-toggle="button"
                                                        aria-pressed="false" autocomplete="off">
                                                        Edit
                                                    </button></a>


                                                <a
                                                    href="Customer_Delete.php?customer_id=<?php echo $data_row['customer_id'];?>"><button
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" class="btn btn-danger"
                                                        aria-pressed="false" autocomplete="off">
                                                        Delete
                                                    </button></a>


                                            </td>


                                        </tr>
                                        <?php
                                        }
                                    }else {
                                        header( 'location:Customers_list.php?msg=Can`t find data' );
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
            <?php require_once('Footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/spinner.js"></script>


</body>

</html>