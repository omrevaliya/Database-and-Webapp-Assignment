<?php 
include('db_connection.php'); 
?>

<?php
// PHP logic to handle dynamic content
$pageTitle = "Cabins Homestay"; // Page title
$businessHours = "9:00 AM to 5:00 PM"; // Business hours
$supportPhone = "+44 80000 50000"; // Support phone number

// Database configuration
$serverName = "localhost"; // If using XAMPP locally
$database = "homestay_db"; // Replace with your database name
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password

// Initialize response message
$responseMessage = "";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $message = htmlspecialchars($_POST['message']);

    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert form data into the 'contact_us' table
        $stmt = $pdo->prepare("INSERT INTO contact_us (name, contact, message) VALUES (:name, :contact, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            $responseMessage = "Thank you, $name. We have received your message.";
        } else {
            $responseMessage = "Failed to save your message. Please try again.";
        }
    } catch (PDOException $e) {
        $responseMessage = "Database error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.png" rel="icon" />
    <title><?php echo $pageTitle; ?></title>
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <ul class='nav-bar'>
                <li class='logo'><a href='#'><img src='images/HotelLogo.png' alt="Ring Doorbell" title="Ring Doorbell" height="60px" width="60px" /></a></li>
                <input type='checkbox' id='check' />
                <span class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Information1.php">History</a></li>
                    <li><a href="Information2.php">Built</a></li>
                    <li><a href="References.php">References</a></li>
                    <li><a href="ContactUs.php">Contact</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </span>
                <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
            </ul>
        </nav>
    </header>

    <section class="pad75 showcase">
        <div class="container">
            <div class="row justify-content-center">
                <div class="w50 align-self-center">
                    <div class="w100">
                        <h1 class="text-center pad75">Contact Us</h1>
                        <?php if (!empty($responseMessage)) : ?>
                            <p class="success-message"><?php echo $responseMessage; ?></p>
                        <?php endif; ?>
                        <form id="contact-form" action="ContactUs.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="contact">Email/Phone:</label>
                                <input type="text" id="contact" name="contact" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section pad75">
        <div class="container">
            <h2 class="section-title">Visit Us</h2>
            <iframe
                width="100%"
                height="400"
                frameborder="0"
                style="border: 0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19438.068651056554!2d-1.9691721889091094!3d52.48350672254968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bd6b4ef8a467%3A0xf72942b1b197da3b!2sBirmingham%20City%20University!5e0!3m2!1sen!2suk!4v1703870604743!5m2!1sen!2suk"
                allowfullscreen
            ></iframe>
        </div>
    </section>

    <section class="faq-section pad75">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item text-white">
                    <h3 class="faq-question">Q: How can I contact customer support?</h3>
                    <p class="faq-answer">A: You can reach our customer support team by filling out the contact form on this page or by calling our helpline at <?php echo $supportPhone; ?>.</p>
                </div>

                <div class="faq-item text-white">
                    <h3 class="faq-question">Q: What are your business hours?</h3>
                    <p class="faq-answer">A: Our business hours are <?php echo $businessHours; ?>.</p>
                </div>

                <div class="faq-item text-white">
                    <h3 class="faq-question">Q: Do you have a physical store I can visit?</h3>
                    <p class="faq-answer">A: Yes, we have a physical store location mentioned above. You can also find our location on the map above.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row justify-content-between align-self-center">
                <div class="w25">
                    <a href="#"><img src="images/facebook.png" alt="Facebook" title="Facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="Twitter" title="Twitter"></a>
                    <a href="#"><img src="images/instagram.png" alt="Instagram" title="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
