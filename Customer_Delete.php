<?php
require_once( 'database_conn.php' );



$customer_id = $_GET[ 'customer_id' ];

$sql_query = "DELETE FROM customer WHERE id='$customer_id';";

if ( $database_connection->query( $sql_query ) === TRUE ) {

    header( 'location:Customer_List.php?msg=Data Deleted' );
} else {
    header( 'location:Customer_List.php?msg=Data Not Deleted' );
}


?>