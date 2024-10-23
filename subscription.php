<?php
// Initialize variables
$message = '';
$error = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $plan = $_POST['plan'] ?? '';

    // Simple validation
    if (empty($name) || empty($email) || empty($plan)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Here you would typically save the subscription to a database
        // For this example, we'll just display a success message
        $message = "Thank you, " . htmlspecialchars($name) . "! Your subscription to the " . htmlspecialchars($plan) . " plan has been received.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Subscription - Afrobeat Dance Studio</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Ensure this path is correct -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <header>
            <h1 class="logo-text">Afrobeat Dance Studio</h1>
        </header>
        
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="subscription.php">Subscribe</a></li>
            </ul>
        </nav>

        <main>
            <h2>Subscribe to Our Dance Classes</h2>
            
            <?php if ($error): ?>
                <p class="error-message" style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <?php if ($message): ?>
                <p class="success-message" style="color: green;"><?php echo $message; ?></p>
            <?php else: ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="plan">Subscription Plan:</label>
                    <select id="plan" name="plan" required>
                        <option value="">Select a plan</option>
                        <option value="Basic">Basic - $50/month</option>
                        <option value="Standard">Standard - $75/month</option>
                        <option value="Premium">Premium - $100/month</option>
                    </select>

                    <input type="submit" value="Subscribe">
                </form>
            <?php endif; ?>
        </main>

        <footer>
            <p>&copy; Copyright 2024. All Rights Reserved</p>
            <p><a href="mailto:ocranrapheal@gmail.com">ocranrapheal@gmail.com</a></p>
            <p>Designed by: Rapheal Ocran</p> 
        </footer>
    </div>
</body>
</html>


