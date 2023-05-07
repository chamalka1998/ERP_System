<?php

require_once( 'database_conn.php' );

$item_code = $_POST[ 'item_code' ];
$item_name = $_POST[ 'item_name' ];
$item_category = $_POST[ 'item_category' ];
$item_sub_category = $_POST[ 'item_sub_category' ];
$quantity = $_POST[ 'quantity' ];
$unit_price = $_POST[ 'unit_price' ];

if ( empty( trim( $item_code ) ) || empty( trim( $item_name ) ) || empty( trim( $item_category ) ) || empty( trim( $item_sub_category ) ) || empty( trim( $quantity ) ) || empty( trim( $unit_price ) ) ) {

    header( 'location:Customer.php?msg=Data Not Added' );

} else {

    $sql_query = "INSERT INTO item (item_code,item_name,item_category,item_subcategory,quantity,unit_price) VALUES('$item_code','$item_name','$item_category','$item_sub_category','$quantity','$unit_price')";

    if ( $database_connection->query( $sql_query ) === TRUE ) {

        header( 'location:Item_List.php?msg=Data Added' );

    } else {

        header( 'location:Item.php?msg=Data Not Added' );

    }

}

?>