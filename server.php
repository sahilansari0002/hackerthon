<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the assignment content from the textarea
    $assignmentContent = isset($_POST["assignment_content"]) ? $_POST["assignment_content"] : "";

    // Validate or sanitize the input as needed

    // Insert the assignment content into the database
    $servername = "your_database_server";
    $username = "your_database_username";
    $password = "your_database_password";
    $dbname = "your_database_name";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO assignments (content) VALUES (?)");
    $stmt->bind_param("s", $assignmentContent);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
