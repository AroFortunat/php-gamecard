<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Account Deleted</title>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center">
            <!-- Success Icon -->
            <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                <svg class="h-10 w-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <!-- Message -->
            <h1 class="text-2xl font-bold text-gray-900 mb-4">
                Account Successfully Deleted
            </h1>
            <p class="text-gray-600 mb-8">
                We're sorry to see you go. Your account and all associated data have been permanently deleted from our system.
            </p>

            <!-- Feedback Section -->
            <div class="bg-gray-50 rounded-lg p-4 mb-8">
                <p class="text-sm text-gray-500 mb-2">
                    Help us improve our service by letting us know why you left:
                </p>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">
                    Take a quick survey →
                </a>
            </div>

            <!-- Actions -->
            <div class="space-y-4">
                <a href="/public/index.php" class="block w-full bg-blue-600 text-white rounded-lg px-4 py-3 font-medium hover:bg-blue-700 transition-colors duration-200">
                    Return to Homepage
                </a>
                <a href="/signup.php" class="block w-full bg-white border border-gray-300 text-gray-700 rounded-lg px-4 py-3 font-medium hover:bg-gray-50 transition-colors duration-200">
                    Create New Account
                </a>
            </div>

            <!-- Footer -->
            <p class="mt-6 text-sm text-gray-500">
                Need help? <a href="/contact" class="text-blue-600 hover:text-blue-800">Contact Support</a>
            </p>
        </div>
    </div>

    <!-- Auto redirect script -->
    <script>
        // Redirect to homepage after 10 seconds
        setTimeout(() => {
            window.location.href = '/index.php';
        }, 10000);
    </script>
</body>
</html>
