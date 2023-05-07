<?php

require_once( 'database_conn.php' );

$item_code = $_POST[ 'item_code' ];
$item_name = $_POST[ 'item_name' ];
$item_category = $_POST[ 'item_category' ];
$item_sub_category = $_POST[ 'item_sub_category' ];
$quantity = $_POST[ 'quantity' ];
$unit_price = $_POST[ 'unit_price' ];
$item_id=$_POST["item_id"];



if ( empty( trim( $item_code ) ) || empty( trim( $item_name ) ) || empty( trim( $item_category ) ) || empty( trim( $item_sub_category ) ) || empty( trim( $quantity ) ) || empty( trim( $unit_price ) ) ) {

    header( 'location:Item_Update_UI.php?msg=Please enter all fields' );

} else {

    $sql_query = "UPDATE item SET item_code='$item_code', item_name='$item_name' , item_category='$item_category' , item_subcategory='$item_sub_category' , quantity='$quantity',unit_price='$unit_price' WHERE id='$item_id'";

    if ( $database_connection->query( $sql_query ) === TRUE ) {
    
        header( 'location:Item_List.php?msg=Data updated' );
    } else {
        header( 'location:Item_Update_UI.php?msg=Data Not updated' );
    }


}

?>