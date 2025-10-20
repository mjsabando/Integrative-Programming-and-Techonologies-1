document.addEventListener('DOMContentLoaded', () => {
    const authForm = document.getElementById('auth-form');
    const authSection = document.getElementById('auth-section');
    const authTitle = document.getElementById('auth-title');
    const authButton = document.getElementById('auth-button');
    const toggleButton = document.getElementById('toggle-button');
    const message = document.getElementById('message');
    const protectedContent = document.getElementById('protected-content');

    const feedbackForm = document.getElementById('feedback-form');
    const feedbackMessageStatus = document.getElementById('feedback-message-status');
    const signupFields = document.getElementById('signup-fields');


    const form = document.getElementById('auth-form');
    const messageElement = document.getElementById('message');
    const responseOutput = document.getElementById('response-output');
    const authButton = document.getElementById('auth-button')

    let isLoginMode = true;

    const isLoggedIn = sessionStorage.getItem('isLoggedIn') === 'true';


    toggleButton.addEventListener('click', () => {
        isLoginMode = !isLoginMode;
        authTitle.textContent = isLoginMode ? 'Log In' : 'Sign Up';
        authButton.textContent = isLoginMode ? 'Log In' : 'Sign Up';
        toggleButton.textContent = isLoginMode ? "Don't have an account? Sign Up" : "Already have an account? Log In";
        message.textContent = '';
        signupFields.classList.toggle('hidden', isLoginMode);

        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
    });

    authForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const action = isLoginMode ? 'login' : 'signup';

        let data = { action, username, password };

        if (!isLoginMode) {
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const contactNumber = document.getElementById('contactNumber').value;

            Object.assign(data, { firstName, lastName, email, contactNumber });
        }

        try {
            const response = await fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (response.ok && result.success) {
                message.textContent = result.message;
                message.style.color = 'green';

                if (action === 'login') {
                    sessionStorage.setItem('isLoggedIn', 'true');
                    sessionStorage.setItem('firstName', result.firstName);
                    greetingText.textContent = `Ahoy, ${result.firstName}! Welcome aboard. Let me introduce our Crew!`;
                    showProtectedContent();
                }
            } else {
                message.textContent = result.message;
                message.style.color = 'red';

                document.getElementById('password').value = '';
            }
        } catch (error) {
            message.textContent = 'An error occurred. Please try again.';
            message.style.color = 'red';
            console.error('Fetch error:', error);

            document.getElementById('password').value = '';
        }
    });


    logoutButton.addEventListener('click', () => {
        sessionStorage.clear();
        window.location.reload();
    });


    feedbackForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const feedbackMessage = document.getElementById('feedback-message').value;

        try {
            const response = await fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ action: 'feedback', message: feedbackMessage }),
            });

            const result = await response.json();

            if (response.ok && result.success) {
                feedbackMessageStatus.textContent = result.message;
                feedbackMessageStatus.style.color = 'green';
                document.getElementById('feedback-message').value = '';
            } else {
                feedbackMessageStatus.textContent = result.message;
                feedbackMessageStatus.style.color = 'red';
            }
        } catch (error) {
            feedbackMessageStatus.textContent = 'An error occurred. Please try again.';
            feedbackMessageStatus.style.color = 'red';
        }
    });


    function showProtectedContent() {
        authSection.style.display = 'none';
        protectedContent.style.display = 'block';
        logoutButton.style.display = 'block';
    }
});


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
