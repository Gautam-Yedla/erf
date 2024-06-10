<?php
// Configuration
$db_host = 'localhost:3307';
$db_username = 'root';
$db_password = '';
$db_name = 'event-management';

// Create connection
$con =  new mysqli ($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $eventSelection = $_POST["eventSelection"];
    $comments = $_POST["comments"];

    // Validate input data
    if (empty($fullName) || empty($email) || empty($address) || empty($phoneNumber) || empty($eventSelection)) {
        $error = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        // Insert data into database
        $sql = "INSERT INTO registrations (full_name, email, address, phone_number, event_selection, comments) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssss", $fullName, $email, $address, $phoneNumber, $eventSelection, $comments);
        $stmt->execute();

        // Redirect to success page
        header("Location: success.php");
        exit;
    }
}

// Close connection
$conn->close();
?>

<!-- Display error message if any -->
<?php if (isset($error)) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>