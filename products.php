

<?php
$db="id8182920_proiect";

$con=mysqli_connect("localhost", "id8182920_root", "parola123", "id8182920_proiect");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$brand=$_GET['telefoane'];
$model=$_GET['model'];
$telefon=$_GET['telefon'];
session_start();
$_SESSION['model'] = $model;
$_SESSION['telefon'] = $telefon;
$brand=ucfirst($brand);
$brand_ID=null;
$phone_ID=null;
$model_ID=null;
//if(($brand=='Samsung' && $model=='Galaxy' && $telefon=='S9') || ($brand=='Samsung' && $model=='galaxy' && $telefon=='S9'))
//{
//    $brand_ID=1;
//    $phone_ID=1;
//    $model_ID=1;
//}
//else if(($brand=='Apple' && $model=='Iphone' && $telefon=='X') || ($brand=='Apple' && $model=='iphone' && $telefon=='X'))
//{
//    $brand_ID=2;
//    $phone_ID=2;
//    $model_ID=2;
//}
//else if(($brand=='Oneplus' && $model=='Oneplus' && $telefon=='6') || ($brand=='Oneplus' && $model=='oneplus' && $telefon=='6'))
//{
//    $brand_ID=3;
//    $phone_ID=3;
//    $model_ID=3;
//}
//echo $brand.'<br>';
//echo $model.'<br>';
//echo $telefon.'<br>';
$result0 = mysqli_query($con,"SELECT * FROM telefoane WHERE telefon='$telefon'");
$row0 = mysqli_fetch_array($result0);
$result00 = mysqli_query($con,"SELECT * FROM model WHERE nume_model='$model'");
$row00 = mysqli_fetch_array($result00);
$result000 = mysqli_query($con,"SELECT * FROM brand WHERE nume_brand='$brand'");
$row000 = mysqli_fetch_array($result000);
////echo '0 '.$row0[0];
////echo '00 '.$row00[0];
////echo '000 '.$row000[0];
if(mysqli_num_rows($result0) > 0 && mysqli_num_rows($result00) > 0  && mysqli_num_rows($result000) > 0 ){
    $brand_ID=$row000[0];
    $phone_ID=$row0[0];
    $model_ID=$row00[0];
}

$result3 = mysqli_query($con,"SELECT * FROM telefoane WHERE phone_ID='$phone_ID' and brand_ID='$brand_ID' and model_ID='$model_ID'");

if(mysqli_num_rows($result3) > 0) {
    include 'stock.php';
}
else {
    include 'nostock.php';
}

?>

