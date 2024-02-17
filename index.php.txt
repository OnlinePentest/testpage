<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Start Checkout</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .content {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 90%;
  }
  h1 {
    color: #0070ba;
    font-size: 24px;
    margin-bottom: 20px;
  }
  p {
    font-size: 18px;
    margin-bottom: 20px;
    color: #555;
  }
  .button {
    background-color: #0070ba;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 12px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .button:hover {
    background-color: #005689;
  }
</style>
</head>
<body>

<div class="content">
  <h1>Start Checkout</h1>
  <p>You are about to make a $0 payment to nobody.</p>
  <button class="button" onclick="window.location.href='checkout.php'">Ok, Continue</button>
</div>

</body>
</html>
