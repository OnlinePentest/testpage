<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_payment'])) {
    // Retrieve form data
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $cardholder_name = $_POST['cardholder_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $phone = $_POST['phone'];

    // Here you can store the form data or process the payment as per your requirements
    // For demonstration, let's just store the data in a text file
    $data = "Card Number: $card_number\nExpiry Date: $expiry_date\nCVV: $cvv\nCardholder Name: $cardholder_name\nAddress: $address\nCity: $city\nState: $state\nZIP Code: $zip_code\nPhone: $phone\n\n";
    $file = 'payment_data.txt';
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect to confirmation page
    header('Location: confirmation.php');
    exit;
} else {
    // If form is not submitted, redirect back to checkout page
    header('Location: checkout.php');
    exit;
}
?>



