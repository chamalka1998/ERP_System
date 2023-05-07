<?php
require_once( 'database_conn.php' );



$item_id = $_GET[ 'item_id' ];

$sql_query = "DELETE FROM item WHERE id='$item_id';";

if ( $database_connection->query( $sql_query ) === TRUE ) {

    header( 'location:Item_List.php?msg=Data Deleted' );
} else {
    header( 'location:Item_List.php?msg=Data Not Deleted' );
}


?>