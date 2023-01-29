<?php 
session_start()
 ?>
<?php
$price = $_POST['price'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$id = date('y' . 'm' . 'd' . 'H' . 'i' . 'S');

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://sandbox.cashfree.com/pg/orders",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"customer_details\":{\"customer_id\":\"$id\",\"customer_email\":\"$email\",\"customer_phone\":\"$phone\"},\"order_amount\":$price,\"order_currency\":\"INR\",\"order_note\":\"order\"}",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json",
    "x-api-version: 2022-09-01",
    "x-client-id: 302465f196783161c00cc3733c564203",
     "x-client-secret: TEST327557c0c46c203a785a5925a6b1f2e17a137747"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(array("error" => 1));
  echo "cURL Error #:" . $err;
  die();

} else {
  $result = json_decode($response, true);
  header('Content-Type: application/json; charset=utf-8');
 echo  $_SESSION['session'] = $result["payment_session_id"];
 header('Location: checkout.php');
  
}
?>




