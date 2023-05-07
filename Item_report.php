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
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="lib/css/dataTables.dateTime.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/983007b906.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <?php require_once('Loader.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once( 'Side_bar.php' );?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <?php require_once( 'Topbar.php' );?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Item report</h1>

                    </div>

                    <!-- Body goes here -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of items</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                               
                                <table id="dataTable" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Item category</th>
                                            <th>Item sub category</th>
                                            <th>Item quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                    
                                    $sql_query="SELECT id, item_code, item_category, item_subcategory, item_name, quantity, unit_price
                                    FROM item
                                    GROUP BY item_name;
                                    ";

                                    $sql_query_result=$database_connection->query($sql_query);                                

                                    if ($sql_query_result->num_rows>0) {
                                        
                                        while ($data_row=$sql_query_result->fetch_assoc()) {
                                            ?>

                                        <tr>
                                            <td><?php echo $data_row['item_name']; ?></td>
                                            <td><?php echo $data_row['item_category']; ?></td>
                                            <td><?php echo $data_row['item_subcategory']; ?></td>
                                            <td><?php echo $data_row['quantity']; ?></td>
                                        </tr>


                                        <?php
                                        }
                                    }else {
                                        header( 'location:Invoice_report.php.php?msg=Can`t find data' );
                                    }
                                    
                                    ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Item category</th>
                                            <th>Item sub category</th>
                                            <th>Item quantity</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>

                    </div>
                    <!-- /Body goes here -->



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php require_once( 'Footer.php' );?>

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/spinner.js"></script>

    <!-- jQuery -->
    <script src="lib/jquery-3.5.1.js"></script>

    <!-- DataTables JS -->
    <script src="lib/jquery.dataTables.min.js"></script>
    <script src="lib/moment.min.js"></script>
    <script src="lib/dataTables.dateTime.min.js"></script>
    <script src="lib/Table.js"></script>

</body>

</html>