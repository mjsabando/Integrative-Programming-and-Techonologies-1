<?php
// Set the header to indicate the response is JSON
header("Content-Type: application/json");

// Read the raw JSON input from the request body
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

$response = [];

// Check if valid JSON data was received and essential keys exist
if (isset($data['username']) && !empty($data['username']) && isset($data['password'])) {

    // Sanitize input
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']); // Passwords should be handled securely, but we display the received value for this lab
    $role = htmlspecialchars($data['role'] ?? 'N/A');

    // Simulate a successful login and prepare the response object
    $response['status'] = 'success';
    $response['welcome'] = "Welcome, " . $username;

    // 1. FIX: Updated message to clearly indicate successful processing
    $response['message'] = "API received and processed data for user: " . $username;

    // 2. FIX: Added specific received values to the response object
    // This allows the client-side JavaScript to access and display the requested values.
    $response['received_username'] = $username;
    $response['received_password'] = $password;
    $response['received_role'] = $role; // Includes the optional role key

} else {
    // Handle cases where no valid data was received
    $response['status'] = 'error';
    $response['message'] = "Missing 'username' or 'password' in the incoming JSON payload.";
    $response['raw_input'] = $json_data;
}

// Output the final JSON response
echo json_encode($response, JSON_PRETTY_PRINT);

?>
