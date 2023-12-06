<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['myName'];
    $email = $_POST['myEmail'];
    $country = $_POST['myCountry'];
    $date = $_POST['myDate'];
    $favoriteSong = $_POST['myFavsong'];
    $impact = $_POST['myImpact'];

    // Do something with the data (e.g., save to a database)
    // For demonstration purposes, let's just display the received data
    echo "<h2>Submitted Information:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Country: $country</p>";
    echo "<p>Date: $date</p>";
    echo "<p>Favorite Song: $favoriteSong</p>";
    echo "<p>Impact: $impact</p>";
} else {
    // If the form wasn't submitted properly, redirect to an error page or handle it accordingly
    echo "Form submission error!";
}
?>
