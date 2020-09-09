<?php


$con = mysqli_connect("sql308.epizy.com","epiz_26569798","yx4wyVdfj3KmSz","epiz_26569798_register");
//$con = mysqli_connect("localhost","root","","register");

$response = array();

if($con){



$sql = "select * from products";

$result = mysqli_query($con,$sql);

if($result) {

    header("Content-Type: JSON");

$i=0;



while($row = mysqli_fetch_assoc($result)){



    $response[$i]['product_no'] = $row ['product_no'];

    $response[$i]['product_name'] = $row ['product_name'];

    $response[$i]['sell_price'] = $row ['sell_price'];

    $response[$i]['quantity'] = $row ['quantity'];

    $response[$i]['unit'] = $row ['unit'];

    $response[$i]['min_stocks'] = $row ['min_stocks'];

    $response[$i]['images'] = $row ['images'];

    $i++;



    echo "<tr class='js-add' 

    data-barcode=".$row['product_no']." 

    data-product=".$row['product_name']." 

    data-price=".$row['sell_price']." 

    data-unt=".$row['unit'].">



    <td>".$row['product_no']."</td><td>".$row['product_name']."</td>";

                             echo "<td>₱".$row['sell_price']."</td>";

                                echo "<td>".$row['unit']."</td>";

                                echo "<td>".$row['quantity']."</td>";



}

echo json_encode($response,JSON_PRETTY_PRINT);





}





}



else{

    echo "databse connection failed";

}



?>