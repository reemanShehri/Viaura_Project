<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/ResetPassword.css') }}">

</head>

<body>
    <main>
            <div id="step2" style="display: none;">
                <h1> Enter Your Code </h1>
                <p id="emailMessage">We sent a code to <span id="userEmail"></span></p>

                <form action="" method="post">
                    <input class="mx-auto" type="text" id="code" name="code" maxlength="6" placeholder="Enter 6 digits code">
                    <button type="submit" onclick="verifyCode()">Continue </button>
                </form>

            </div>

            <div id="step3" style="display: none;">
                <h1>Set New Password</h1>
                <p>Must be at least 8 characters</p>
                <form action="" method="post">
                    <input class="mx-auto" type="password" id="newPassword" name="newPassword" placeholder="Enter new password">
                    <input class="mx-auto" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
                    <button onclick="resetPassword()">Set New Password</button>
                </form>
            </div>
        </div>
    </main>


    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/ResetPaswword.js') }}"></script>
</body>

</html>
