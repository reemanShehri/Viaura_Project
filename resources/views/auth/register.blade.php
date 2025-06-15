<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Register') }}</title>
    <link rel="icon" type="images/LOGO.svg" href="{{ asset('Front/images/LOGO.svg') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <style>



.login-signup {
            display: flex;
            position: relative;
            width: 900px;
            height: 550px;
            margin: 50px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .login, .signup {
            width: 50%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        /* أنماط أساسية */
        body {


            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* الحاوية الرئيسية */
        .auth-container {
            display: flex;
            width: 900px;
            height: 550px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        /* قسم النموذج */
        .auth-form {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* قسم الصفحة الجانبية */
        .auth-side {
            width: 50%;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }

        /* عناصر النموذج */
        .auth-form h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
        }

        .auth-form input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .auth-form button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        /* عناصر الصفحة الجانبية */
        .auth-side i {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .auth-side h1 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .auth-side p {
            margin-bottom: 30px;
        }

        .auth-side-btn {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .auth-side-btn:hover {
            background: white;
            color: #6e8efb;
        }

        /* رسائل الخطأ */
        .input-error {
            color: #ef4444;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        /* تذكرني وقبول الشروط */
        .form-check {
            display: flex;
            align-items: center;
            margin: 15px 0;
        }

        .form-check input {
            width: auto;
            margin-right: 10px;
            margin-bottom: 0;
        }

        /* روابط إضافية */
        .auth-link {
            text-align: center;
            margin-top: 20px;
        }

        .auth-link a {
            color: #6e8efb;
            text-decoration: none;
            font-weight: 500;
        }

        /* تأثيرات الحركة */
        [data-aos] {
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        /* تصميم متجاوب */
        @media (max-width: 768px) {
            .auth-container {
                flex-direction: column;
                height: auto;
                width: 95%;
            }

            .auth-form, .auth-side {
                width: 100%;
            }

            .auth-side {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- قسم التسجيل -->
        <div class="auth-form">
            <div class="content">
                <h1 data-aos="fade-down">{{ __('Register') }}</h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- الاسم -->
                    <input id="name" type="text" name="name" placeholder="{{ __('Name') }}"
                           value="{{ old('name') }}" required autofocus autocomplete="name"
                           data-aos="fade-right" data-aos-delay="100">
                    <x-input-error :messages="$errors->get('name')" class="input-error" />

                    <!-- البريد الإلكتروني -->
                    <input id="email" type="email" name="email" placeholder="{{ __('Email') }}"
                           value="{{ old('email') }}" required autocomplete="username"
                           data-aos="fade-right" data-aos-delay="200">
                    <x-input-error :messages="$errors->get('email')" class="input-error" />

                    <!-- كلمة المرور -->
                    <input id="password" type="password" name="password"
                           placeholder="{{ __('Password') }}" required autocomplete="new-password"
                           data-aos="fade-right" data-aos-delay="300">
                    <x-input-error :messages="$errors->get('password')" class="input-error" />

                    <!-- تأكيد كلمة المرور -->
                    <input id="password_confirmation" type="password"
                           name="password_confirmation" placeholder="{{ __('Confirm Password') }}"
                           required autocomplete="new-password"
                           data-aos="fade-right" data-aos-delay="400">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="input-error" />

                    <!-- قبول الشروط -->
                    <div class="form-check" data-aos="fade-up" data-aos-delay="500">
                        <input id="terms" type="checkbox" name="terms" required>
                        <label for="terms">{{ __('I accept terms and conditions') }}</label>
                    </div>

                    <button type="submit" data-aos="fade-up" data-aos-delay="600">{{ __('Register') }}</button>

                    <div class="auth-link" data-aos="fade-up" data-aos-delay="700">
                        <a href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- الصفحة الجانبية -->
        <div class="auth-side" data-aos="fade-left">
            <i class="fas fa-arrow-right-to-bracket"></i>
            <h1>{{ __('Welcome Back!') }}</h1>
            <p>{{ __('To keep connected with us please login with your personal info') }}</p>
            <a href="{{ route('login') }}" class="auth-side-btn">
                <i class="fa-solid fa-angle-left"></i> {{ __('Log In') }}
            </a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
