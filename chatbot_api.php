<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_message = $_POST['message']; // User's input message
    
    // Fetch all distinct chatkeys from the database
    $keywords = [];
    $sql = "SELECT DISTINCT chatkey FROM chatbot";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $keywords[] = $row["chatkey"];
        }
    }

    $response = "Sorry, I couldn't find an answer to that."; // Default response

    // Loop through each keyword and check if it exists in the user's message
    foreach ($keywords as $keyword) {
        if (stripos($user_message, $keyword) !== false) { // Case-insensitive search
            // Query to get the first matching chatanswer for the keyword
            $sql = "SELECT chatanswer FROM chatbot WHERE chatkey = '$keyword' LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $response = $row["chatanswer"];
                    break 1; // Exit the loop once the first match is found
                }
            }
        }
    }

    echo json_encode(array("answer" => $response));
}

$conn->close();
?>
