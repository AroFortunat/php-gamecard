<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
</head>

<body>
    <div class="py-4">
        <h1 class="text-2xl font-bold text-center">Create an Account</h1>
    </div>
    <?php
    if (isset($_GET["error"])) {
        switch ($_GET["error"]) {
            case 'invalidusername&email':
                echo '    <p class="text-center text-red-500">Pseudo et Email invalid</p>';
                break;
            case 'invalidemail':
                echo '    <p class="text-center text-red-500">Email invalid</p>';
                break;
            case 'invalidusername':
                echo '    <p class="text-center text-red-500">Pseudo invalid</p>';
                break;
            case 'pwddontmatch':
                echo '    <p class="text-center text-red-500">Les mots de passe ne correspondent pas</p>';
                break;
            case 'usernametaken':
                echo '    <p class="text-center text-red-500">Pseudo déjà pris</p>';
                break;
            default:
                echo null;
                break;
        }
    }
    ?>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form action="../services/signup.services.php" method="post">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-3 block text-base font-medium text-[#07074D]">
                        Username
                    </label>
                    <input type="text" name="username" id="username" placeholder="Create your username"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Create your password"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="ConfirmPassword" class="mb-3 block text-base font-medium text-[#07074D]">
                        Confirm Password
                    </label>
                    <input type="password" name="confirmPassword" id="ConfirmPassword"
                        placeholder="Confirm your password"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div>
                    <button type="submit" name="signup-submit"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Signup
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>