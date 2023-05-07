
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

    <title>Customer Details</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">Customer Details</h1>

                    </div>

                    <!-- Body goes here -->



                    <!-- Form Start -->
                    <form action="Customer_Insert.php" method="POST">
                        <!-- Title start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="title">Title</label>

                                <select id="title" name="title" class="form-control">

                                    <option selected value="">Choose...</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Dr">Dr</option>

                                </select>
                            </div>
                            <!-- Title End -->

                            <!-- first_name Start -->

                            <div class="form-group col-md-6">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="First name">
                            </div>
                        </div>
                        <!-- first_name End -->

                        <!-- last_name Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="middle_name">Middle name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name"
                                    placeholder="Middle name">
                            </div>
                            <!-- last_name End -->

                            <!-- contact_number Start -->
                            <div class="form-group col-md-6">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Last name">
                            </div>
                        </div>
                        <!-- contact_number End -->

                        <!-- District Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div>
                                    <label for="district">District</label>
                                    <select id="district" name="district" class="form-control">

                                        <option selected value="">Choose...</option>
                                        <?php

                                        $sql_query="SELECT * FROM district";
                                        $sql_query_result=$database_connection->query($sql_query);

                                        if ($sql_query_result->num_rows>0) {
    
                                           while ($data_row=$sql_query_result->fetch_assoc()) {
                                         ?>

                                        <option value="<?php echo $data_row['id']; ?>">
                                            <?php echo $data_row['id']." ".$data_row['district']; ?></option>
                                        <?php
                                            }
                                        }else {
    
                                        }

                                        ?>

                                    </select>
                                </div>
                                <!-- District End -->
                            </div>
                            <!-- contact_number Start -->
                            <div class="form-group col-md-6">
                                <label for="contact_number">Contact number</label>
                                <input type="number" class="form-control" id="contact_number" name="contact_number"
                                    placeholder="Contact number">
                            </div>
                        </div>
                        <!-- contact_number End -->

                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <!-- Submit button start -->
                                <div class="form-row">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Confirm & Proceed</button>
                                    </div>
                                </div>
                                <!-- Submit button End -->
                            </div>
                        </div>
                    </form>
                    <!-- Form End -->

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

</body>

</html>