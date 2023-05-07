<?php

require_once( 'database_conn.php' );

$title = $_POST[ 'title' ];
$first_name = $_POST[ 'first_name' ];
$middle_name = $_POST[ 'middle_name' ];
$last_name = $_POST[ 'last_name' ];
$contact_number = $_POST[ 'contact_number' ];
$district = $_POST[ 'district' ];

if ( empty(trim($title)) || empty(trim($first_name)) || empty(trim($middle_name)) || empty(trim($last_name)) || empty(trim($contact_number)) || empty(trim($district)) ) {

    header( 'location:Customer.php?msg=Data Not Added' );

} else {

    $sql_query = "INSERT INTO customer (title,first_name,middle_name,last_name,contact_no,district) VALUES('$title','$first_name','$middle_name','$last_name','$contact_number','$district')";

    if ( $database_connection->query( $sql_query ) === TRUE ) {

        header( 'location:Customer_List.php?msg=Data Added' );

    } else {

        header( 'location:Customer_List.php?msg=Data Not Added' );

    }

}
?>
