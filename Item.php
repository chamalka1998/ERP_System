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

    <title>Item Details</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Item Details</h1>

                    </div>

                    <!-- Body goes here -->

                    <!-- Form Start -->
                    <form action="Item_Insert.php" method="POST">
                        <!-- Item code start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="item_code">Item code</label>
                                <input type="text" class="form-control" id="item_code" name="item_code"
                                    placeholder="Item code">
                            </div>
                            <!-- Item code End -->

                            <!-- Item name Start -->
                            <div class="form-group col-md-6">
                                <label for="item_name">Item name </label>
                                <input type="text" class="form-control" id="item_name" name="item_name"
                                    placeholder="Item name ">
                            </div>
                        </div>
                        <!-- Item name  End -->

                        <!-- Item category Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="item_category">Item category</label>

                                <select id="item_category" name="item_category" class="form-control">

                                    <option selected value="">Choose...</option>

                                    <?php
                                    
                                    $sql_query="SELECT * FROM item_category";
                                    $sql_query_result=$database_connection->query($sql_query);

                                    if ($sql_query_result->num_rows>0) {
                                        
                                        while ($data_row=$sql_query_result->fetch_assoc()) {
                                            ?>

                                    <option value="<?php echo $data_row['id']; ?>">
                                        <?php echo $data_row['id']." ".$data_row['category']; ?></option>
                                    <?php
                                        }
                                    }else {
                                        
                                    }
                                    
                                    ?>
                                </select>

                            </div>
                            <!-- Item category End -->

                            <!-- Item sub category Start -->

                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="item_sub_category">Item sub category</label>

                                <select id="item_sub_category" name="item_sub_category" class="form-control">

                                    <option selected value="">Choose...</option>
                                    <?php
                                    
                                    $sql_query="SELECT * FROM item_subcategory";
                                    $sql_query_result=$database_connection->query($sql_query);

                                    if ($sql_query_result->num_rows>0) {
                                        
                                        while ($data_row=$sql_query_result->fetch_assoc()) {
                                            ?>

                                    <option value="<?php echo $data_row['id']; ?>">
                                        <?php echo $data_row['id']." ".$data_row['sub_category']; ?></option>
                                    <?php
                                        }
                                    }else {
                                        
                                    }
                                    
                                    ?>

                                </select>
                            </div>
                        </div>
                        <!-- Item sub category End -->

                        <!-- Quantity Start -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity"
                                    placeholder="Quantity">
                            </div>
                            <!-- Quantity End -->

                            <!--  Unit price Start -->
                            <div class="form-group col-md-6">
                                <label for="unit_price">Unit price</label>
                                <input type="text" class="form-control" id="unit_price" name="unit_price"
                                    placeholder="Unit price">
                            </div>
                        </div>
                        <!--  Unit price End -->

                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <!-- Submit button start -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Confirm & Proceed</button>
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