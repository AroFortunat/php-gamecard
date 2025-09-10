<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Account Settings</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Account Settings</h1>
            <p class="text-gray-600">Manage your account information and preferences</p>
        </div>
        <form action="../services/account/account.services.php" method="POST">

            <!-- Settings Sections -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Profile Section -->
                <div class="md:col-span-2 bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">Profile Information</h2>
                    <!-- Avatar Upload -->
                    <div class="mb-6">
                        <div class="flex items-center">
                            <div class="w-20 h-20 rounded-full bg-gray-300 overflow-hidden mr-4">
                                <img src="https://via.placeholder.com/150" alt="Profile picture"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <button type="button"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Change
                                    Photo</button>
                                <p class="text-sm text-gray-500 mt-1">JPG, GIF or PNG. Max size 2MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First
                                Name</label>
                            <input type="text" id="firstName" name="firstName"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="lastName" name="lastName"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Bio -->
                    <div class="mb-6">
                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                        <textarea id="bio" name="bio" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                </div>

                <!-- Security Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">Security</h2>

                    <!-- Change Password -->
                    <div class="space-y-4">
                        <div>
                            <label for="currentPassword" class="block text-sm font-medium text-gray-700 mb-1">Current
                                Password</label>
                            <input type="password" id="currentPassword" name="currentPassword"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="newPassword" class="block text-sm font-medium text-gray-700 mb-1">New
                                Password</label>
                            <input type="password" id="newPassword" name="newPassword"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                                New
                                Password</label>
                            <input type="password" id="confirmPassword" name="confirmPassword"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Two Factor Authentication -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Two-Factor Authentication</h3>
                        <div class="flex items-center justify-between py-4 border-t border-gray-200">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Enable 2FA</p>
                                <p class="text-sm text-gray-500">Add an extra layer of security to your account</p>
                            </div>
                            <button type="button"
                                class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <span
                                    class="translate-x-0 inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Save Changes Button -->
            <div class="mt-6 flex justify-end gap-4">
                <button name='save-changes' type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Save Changes
                </button>
                <button name='delete-account' type="submit"
                    class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Delete Account
                </button>
            </div>
        </form>
    </div>
</body>

</html>