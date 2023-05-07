<?php

require_once( 'database_conn.php' );

$title = $_POST[ 'title' ];
$first_name = $_POST[ 'first_name' ];
$middle_name = $_POST[ 'middle_name' ];
$last_name = $_POST[ 'last_name' ];
$contact_number = $_POST[ 'contact_number' ];
$district = $_POST[ 'district' ];
$customer_id=$_POST['customer_id'];



if ( empty(trim($title)) || empty(trim($first_name)) || empty(trim($middle_name)) || empty(trim($last_name)) || empty(trim($contact_number)) || empty(trim($district)) ) {

    header( 'location:Customer.php?msg=Data Not Updated' );

} else {

    $sql_query = "UPDATE customer SET title='$title', first_name='$first_name' , middle_name='$middle_name' , last_name='$last_name' , contact_no='$contact_number',district='$district' WHERE id='$customer_id'";

    if ( $database_connection->query( $sql_query ) === TRUE ) {
    
        header( 'location:Customer_List.php?msg=Data updated' );
    } else {
        header( 'location:Customer_Update_UI.php?msg=Data Not updated' );
    }

}



?>