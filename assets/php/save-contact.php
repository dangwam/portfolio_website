<?php
// Access form data

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Combine data into a single string
$data = "Name: $name\nEmail: $email\nMessage:\n$message";

// Create the filename (ensure uniqueness for multiple submissions)
$filename = "./assets/output/contact_" . date("YmdHis") . ".txt";

// Save data to the file
if (file_put_contents($filename, $data)) {
  // Success message
  echo "Your message has been saved successfully!";
} else {
  // Error message
  echo "Error saving message. Please try again.";
}
?>
