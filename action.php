<?php


$custName = $_REQUEST['custName'];
$custPhone = $_REQUEST['custPhone'];
$custMail = $_REQUEST['custMail'];
$amount = $_REQUEST['amount'];

echo "This is me.";

echo " $custName $custPhone $custMail $amount ";


// Database Connection
$user_name = "geneuser";
$password = "SiliconValley191!(!";
$database = "geneweb";
$server = "139.59.54.139";


// Create connection
$conn = new mysqli($server, $user_name, $password, $database);

#Error Reporting
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
} 


$receipt = date('y/m/d/his');
$amt = $amount * 100; // Converting to Paisa as Razorpay accepts only in that format.
$currency = "INR";

// Creating Link

$ch = curl_init();
$fields = array();
$fields["receipt"] = $receipt;
$fields["amount"] = $amt;
$fields["currency"] = $currency;
$fields["description"] = "Payment for GenE". $cnotes."  ". $paymentType;
$fields["type"] = "link";

$fields["customer"] = array(
                            "name" => $$custName,
                            "email" => $$custMail,
                            "contact" => $custPhone
                          );

$apikey = "rzp_test_1gLQWWuSoQCkIi";
$keysec = "gd67WURkR7MMtMh6rYZ7hSM4";


curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/invoices/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$apikey:$keysec");
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/json';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);

// $data = json_decode(var_dump($result));
$data = json_decode($result, true);

extract($data);

echo "$result";


$payLink = $short_url;
$iid = $id;
echo "paylink: $payLink ID: $iid";

// echo "$payLink";

curl_close($ch);

// $query = "INSERT INTO `payment_links` (
//           `cname`, `cmail`, `cphone`, `cnotes`, `camount`, `paymentType`, `receipt`, `creator`, `payLink`) VALUES 
//           ('$cname', '$cmail', '$cphone', '$cnotes', '$camount', '$paymentType', '$receipt' , '$user', '$payLink');";

// $result = $conn->query($query);

// // printf("$query");
// mysqli_close($conn);

header('location: '.$payLink);




// define( 'DB_NAME', 'geneweb' );
/** MySQL database username */
// define( 'DB_USER', 'geneuser' );
/** MySQL database password */
// define( 'DB_PASSWORD', 'SiliconValley191!(!' );
// 139.59.54.139


?>


