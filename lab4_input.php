<?php

// Define a default response structure. This is used if the script is called as a POST endpoint.
$json_input_default = '{"username": "admin", "password": "1234", "role": "tester"}';

// --------------------------------------------------------
// SECTION A: PHP API ENDPOINT LOGIC (Runs ONLY on POST request)
// --------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Read the raw POST data from the request body using php://input
    $raw_json_data = file_get_contents('php://input');

    // Use default input if no real data is found (for simple testing or if fetch fails)
    if (empty($raw_json_data)) {
        $raw_json_data = $json_input_default;
    }

    // 2. Decode the JSON string into a PHP associative array.
    $data = json_decode($raw_json_data, true);

    // Default API response structure
    $response = [
        'success' => false,
        'message' => 'Invalid JSON input received by PHP.',
        'received_data' => null
    ];

    // 3. Check if decoding was successful and prepare response
    if ($data !== null && is_array($data)) {
        // Access received values
        $username = $data['username'] ?? 'N/A';
        $action = isset($data['action']) ? $data['action'] : 'Log In';

        $response['success'] = true;
        $response['message'] = "Successfully processed '$action' request.";
        $response['received_data'] = $data;

        // The core requirement: Displaying accessed values in the response
        $response['output'] = "Username: " . ($data['username'] ?? 'N/A') . "\n";
        $response['output'] .= "Password: " . ($data['password'] ?? 'N/A') . "\n";
        $response['output'] .= "Role: " . ($data['role'] ?? 'N/A') . "\n";

    } else {
        $response['raw_input'] = $raw_json_data;
    }

    // Output the JSON response and exit, preventing HTML rendering
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
}

// --------------------------------------------------------
// SECTION B: PHP/HTML CLIENT LOGIC (Renders the form)
// --------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="labstyle.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Handling JSON Input</title>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
  </head>
  <body class="scroll-smooth bg-gray-900 text-white min-h-screen">

    <div id="auth-section" class="container mx-auto py-12 px-4 md:px-8">
        <div class="bg-zinc-800 rounded-xl shadow-2xl p-8 flex flex-col items-center border border-amber-500/50">

            <h3 class="text-3xl font-extrabold text-amber-400 mb-6" id="auth-title">Log In</h3>


            <div class="w-full max-w-lg">
                <form id="auth-form" class="flex flex-col space-y-4">
                    <input type="text" id="username" name="username" placeholder="Username (e.g., admin)"  required class="p-3 rounded-md bg-zinc-700 text-white border border-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-400">
                    <input type="password" id="password" name="password" placeholder="Password (e.g., 1234)"  required class="p-3 rounded-md bg-zinc-700 text-white border border-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-400">
                    <input type="text" id="role" name="role" placeholder="Role (e.g., client/student/tester)"  class="p-3 rounded-md bg-zinc-700 text-white border border-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-400">


                    <div id="signup-fields" class="hidden flex flex-col space-y-4">
                        <!-- Other fields remain hidden for this demo focus -->
                    </div>

                    <button type="submit" id="auth-button" class="bg-amber-500 hover:bg-amber-600 text-black font-bold py-3 px-6 rounded-md transition-colors duration-200 shadow-md shadow-amber-500/50">Log In</button>

                    <p id="message" class="text-center text-sm font-semibold"></p>
                </form>
            </div>

            <div class="mt-8 w-full max-w-lg">
                <h4 class="text-xl font-bold text-teal-400 mb-4">PHP Server Response:</h4>
                <div id="response-output" class="bg-zinc-900 p-4 rounded-lg border border-zinc-700 min-h-[150px] overflow-x-auto text-sm font-mono text-green-300">
                    <p class="text-gray-500">Submit the form above to see the data PHP receives and processes.</p>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('auth-form');
            const messageElement = document.getElementById('message');
            const responseOutput = document.getElementById('response-output');
            const authButton = document.getElementById('auth-button');

            // Function to handle form submission
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                messageElement.textContent = 'Sending data...';
                messageElement.className = 'text-center text-sm font-semibold text-yellow-500';
                authButton.disabled = true;

                // 1. Gather form data into an object
                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => data[key] = value);
                data['action'] = document.getElementById('auth-title').textContent.includes('Log In') ? 'Log In' : 'Sign Up';

                try {
                    // 2. Use fetch to POST the JSON data to the current script (acting as an API endpoint)
                    const response = await fetch(window.location.href, {
                        method: 'POST',
                        headers: {
                            // Tell the server the content type is JSON
                            'Content-Type': 'application/json'
                        },
                        // 3. Convert the JavaScript object to a JSON string
                        body: JSON.stringify(data)
                    });

                    // Parse the JSON response from the PHP server
                    const result = await response.json();

                    if (result.success) {
                        messageElement.textContent = result.message;
                        messageElement.className = 'text-center text-sm font-semibold text-green-500';

                        // Display the core requirement output
                        responseOutput.innerHTML = `
                            <div class="text-teal-400 font-bold mb-2">PHP Access Output:</div>
                            <pre class="whitespace-pre-wrap">${result.output}</pre>
                            <hr class="border-zinc-700 my-3">
                            <div class="text-teal-400 font-bold mb-2">Full Received Data:</div>
                            <pre class="whitespace-pre-wrap">${JSON.stringify(result.received_data, null, 2)}</pre>
                        `;

                    } else {
                        messageElement.textContent = result.message || 'Server error processing request.';
                        messageElement.className = 'text-center text-sm font-semibold text-red-500';
                        responseOutput.innerHTML = `<p class="text-red-500">Error: ${result.message}</p><pre class="whitespace-pre-wrap">${JSON.stringify(result, null, 2)}</pre>`;
                    }

                } catch (error) {
                    messageElement.textContent = 'Network or parsing error.';
                    messageElement.className = 'text-center text-sm font-semibold text-red-500';
                    responseOutput.textContent = `Client Error: ${error.message}`;
                } finally {
                    authButton.disabled = false;
                }
            });

            // Dummy logic to prevent confusion with the toggle button
            document.getElementById('toggle-button').addEventListener('click', () => {
                messageElement.textContent = 'Functionality disabled for this JSON demo.';
                messageElement.className = 'text-center text-sm font-semibold text-yellow-500';
            });
        });
    </script>
  </body>
</html>
