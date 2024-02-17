<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .checkout-box {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 400px;
  }
  h1 {
    color: #0070ba;
    font-size: 24px;
    margin-bottom: 20px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    font-size: 16px;
    color: #333;
    display: block;
    margin-bottom: 5px;
  }
  input[type="text"], input[type="number"], input[type="tel"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    background-color: #0070ba;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 12px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 100%;
  }
  input[type="submit"]:hover {
    background-color: #005689;
  }
</style>
</head>
<body>

<div class="checkout-box">
  <h1>Checkout</h1>
  <form action="process_payment.php" method="post">
    <div class="form-group">
      <label for="card_number">Card Number</label>
      <input type="text" id="card_number" name="card_number" placeholder="Enter card number" required>
    </div>
    <div class="form-group">
      <label for="expiry_date">Expiry Date</label>
      <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required>
    </div>
    <div class="form-group">
      <label for="cvv">CVV</label>
      <input type="number" id="cvv" name="cvv" placeholder="Enter CVV" required>
    </div>
    <div class="form-group">
      <label for="cardholder_name">Cardholder Name</label>
      <input type="text" id="cardholder_name" name="cardholder_name" placeholder="Enter cardholder name" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter address" required>
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" id="city" name="city" placeholder="Enter city" required>
    </div>
    <div class="form-group">
      <label for="state">State</label>
      <input type="text" id="state" name="state" placeholder="Enter state" required>
    </div>
    <div class="form-group">
      <label for="zip_code">ZIP Code</label>
      <input type="text" id="zip_code" name="zip_code" placeholder="Enter ZIP code" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
    </div>
    <input type="submit" name="submit_payment" value="Pay Now">
  </form>
</div>

</body>
</html>



