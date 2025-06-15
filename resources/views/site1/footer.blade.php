<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/footer.css') }}">

</head>

<body>
    <footer>
        <div id="contact" class="container ptb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12col-12 mx-auto">
              <div class="single-footer">
                <h2 class="mb-40">Viaura</h2>
                <p class="mb-40">Viaura connects learning with real-world opportunities
                  One platform for skills, growth, and freelance success</p>
                <a href="" class="btn btn-outline-success" data-aos="fade-up" data-aos-delay="200">Explore More <i
                    class="fa-solid fa-angle-right "></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 links mt-sm-4 ">
              <div class="single-footer w-50 mx-auto">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="{{ route('viaura.viaura') }}"><i class="fa-solid fa-angle-right "></i> Home</a></li>
                  <li><a href="{{ route('viaura.viaura') }}"><i class="fa-solid fa-angle-right "></i> About viaura</a></li>
                  <li><a href="{{ route('viaura.education') }}"><i class="fa-solid fa-angle-right "></i> Educational Programs</a></li>
                  <li><a href="{{ route('viaura.Login-Signup') }}"><i class="fa-solid fa-angle-right "></i> Job Categories </a></li>
                  <li><a href="{{ route('viaura.Login-Signup') }}"><i class="fa-solid fa-angle-right "></i> Explore Opportunities </a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 socials">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
        <div class="copy-right-area text-center ">
          <p>Viaura &copy; 2025 All rights reserved.</p>
        </div>
      </footer>


    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/footer.js') }}"></script>
</body>

</html>
