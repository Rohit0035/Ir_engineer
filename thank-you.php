<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f7fa;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .thankyou-card {
      background: #fff;
      border-radius: 12px;
      padding: 40px 30px;
      text-align: center;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .thankyou-icon {
      width: 70px;
      height: 70px;
      background: #f7941d;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 34px;
      color: #fff;
    }
    .thankyou-title {
      font-size: 26px;
      font-weight: 700;
      color: #f7941d;
      margin-bottom: 10px;
    }
    .thankyou-text {
      font-size: 16px;
      color: #555;
      margin-bottom: 25px;
    }
    .thankyou-btn {
      background: #f7941d;
      width:100%;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 6px;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      transition: background 0.3s ease;
    }
    .thankyou-btn:hover {
      background: #529c23;
      color: #fff;
    }
  </style>
</head>
<body>

  <div class="thankyou-card">
    <div class="thankyou-icon">
      &#10003;
    </div>
    <h2 class="thankyou-title">Thank You!</h2>
    <p class="thankyou-text">Your submission has been received successfully.<br>We’ll get back to you shortly.</p>
    <a href="index.php" class="thankyou-btn">Go to Home</a>
  </div>

</body>
</html>
