<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $country_region = $_POST['country_region'];
    $email = $_POST['email'];
    $mobile_or_whatsapp_skype = $_POST['mobile'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_us (name, country_region, email, mobile_or_whatsapp_skype, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $country_region, $email, $mobile_or_whatsapp_skype, $message);

    if ($stmt->execute()) {
        mail("info@borderlesscar.com", "New Contact Us Submission", "Name: $name\nCountry/Region: $country_region\nEmail: $email\nMobile/Whatsapp/Skype: $mobile_or_whatsapp_skype\nMessage: $message");
        echo "Cảm ơn bạn đã liên hệ với chúng tôi!";
    } else {
        echo "Đã xảy ra lỗi. Vui lòng thử lại.";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

<h1>Contact Us</h1>
<p>
    <strong>Phone / Whatsapp / Wechat:</strong> +8619037179250<br>
    <strong>Send Email:</strong> info@borderlesscar.com<br>
    <strong>Tel:</strong> +86-19037179250<br>
    <strong>Address:</strong> No. 1291, Hanghai East Road, Economic and Technical Development Zone, Zhengzhou, He'nan Province, China
</p>

<h2>Get In Touch</h2>
<p>Complete control over products allows us to ensure our customers receive the best quality prices and service.</p>

<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="country_region">Country/Region:</label><br>
    <input type="text" id="country_region" name="country_region" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="mobile">Mobile or Whatsapp/Skype:</label><br>
    <input type="text" id="mobile" name="mobile" required><br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<h2>You May Also Want to See</h2>
<ul>
    <li><a href="all_vehicles.php">All Vehicles</a></li>
    <li><a href="used_car.php">Used Car</a></li>
    <li><a href="trucks.php">Trucks</a></li>
    <li><a href="about_us.php">About Us</a></li>
</ul>

</body>
</html>

