<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIAURA</title>
  <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
  <link rel="stylesheet" href="{{ asset('Front/CSS/Viaura.css') }}">

</head>

<body>
    {{-- message contact --}}
@if(session('success'))
    <div
        id="success-alert"
        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transition-opacity duration-1000 ease-in-out"
        style="opacity: 1;"
    >
        <strong class="font-bold">نجاح! </strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>

    <script>
        setTimeout(() => {
            const el = document.getElementById('success-alert');
            if (el) {
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 1000); // Remove after fade-out
            }
        }, 3000);
    </script>
@endif


  <!-- Splash Screen -->
 {{-- <div class="splash">
    <img src="{{ asset('Front/images/light-viaura-logo.svg') }}" alt="Logo">
  </div> --}}

  <header>
    <nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <a class="navbar-brand" data-aos="fade-right" data-aos-delay="600" href="#"><img
            src="{{ asset('Front/images/Dark-viaura-logo.svg') }}" class="w-36" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav main">
            <li class="nav-item" data-aos="fade-down" data-aos-delay="100">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item" data-aos="fade-down" data-aos-delay="200">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item" data-aos="fade-down" data-aos-delay="300">
              <a class="nav-link" href="#education">Education</a>
            </li>
            <li class="nav-item" data-aos="fade-down" data-aos-delay="400">
              <a class="nav-link" href="#jobs">Jobs</a>
            </li>
            <li class="nav-item" data-aos="fade-down" data-aos-delay="500">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item" data-aos="fade-left" data-aos-delay="200"> <a href="{{ route('login') }}" class="btn btn-outline-success">
                LOGIN
              </a>
            </li>
            <li class="nav-item" data-aos="fade-left" data-aos-delay="400">
              <a href="{{ route('register') }}" class="btn btn-success me-3">
                SIGNUP
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


      <main>
    <button class="back-top">
      <i class="fa-solid fa-angles-up"></i>
    </button>
    <!--Home-->
    <section class="home pt-200">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-12 text-center">
            <h1 class="mb-20" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">Because Every Dream <br>
              <div class="span">Deserves a Chance</div>
            </h1>
            <p class="w-50 mx-auto mb-40" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
                Empowering Ambitions, One Skill at a Time
Unlock your full potential with expert-led courses and career-driven insights tailored to help you thrive in today’s competitive job market.
          </div>
          <div class=" row search" data-aos="fade-up" data-aos-delay="700" data-aos-duration="500">
            <div class="col-lg-8 col-12 search-panel mx-auto ">
              <div class=" col-10">
                <form action="" method="post">
                  <input type="text" name="search" placeholder="What are you looking for today?">
                </form>
              </div>
              <div class="col-lg-1  ms-2">
                <a href=""> <i class="fa-solid fa-magnifying-glass"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--About-->
    <section id="about" class="about  ptb-50">
      <div class="about-content ptb-100 mx-auto" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
        <div class="container mx-auto">
          <div class="row">
            <div class="col-lg-12">
              <span data-aos="fade-down" data-aos-delay="300" data-aos-duration="500">About</span>
              <h2 class="mb-20 fw-700" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Viaura </h2>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">
               </p>
            </div>
          </div>
          <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
              <h3 class="mb-40 fw-700">Education</h3>
              <p class="mb-40">

                Accelerate Your Tech Journey with Expert Coding Courses
Our education platform offers hands-on programming tutorials, real-world projects, and career-focused guidance to help you
 master today’s most in-demand development skills — from web and mobile apps to data science and beyond.</p>
              <a href="{{ route('viaura.education') }}" class="btn btn-success mb-sm-4">Explore More <i
                  class="fa-solid fa-angle-right "></i> </a>
            </div>
            <div class="col-lg-6 image mt-3 " data-aos="fade-left" data-aos-delay="400" data-aos-duration="500">
              <img class="mx-sm-auto ms-lg-5" src="{{ asset('Front/images/Education.svg') }}" alt="education">
            </div>
          </div>
          <div class="row align-items-center mt-lg-5">
            <div class="col-lg-6 image1 mb-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
              <img class="mx-sm-auto" src="{{ asset('Front/images/jobs.svg') }}" alt="jobs">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="500">
              <h3 class="mb-40 mt-sm-4 fw-700">Jobs</h3>
              <p class="mb-40">

                Explore the World of Freelancing and Find Your Path
We guide you through top freelancing platforms and break down each field — from design and development to writing and marketing —
so you know exactly what it takes to succeed.</p>
              <a href="" class="btn btn-success">Explore More <i class="fa-solid fa-angle-right "></i> </a>
            </div>

          </div>
        </div>
      </div>

    </section>

    <!--Education-->
    <section id="education" class="education ptb-100 ">
      <div class="container">
        <div class="row text-center ">
          <div class="col-lg-12 title " data-aos="fade-up" data-aos-delay="300">
            <h2 class="mb-3"> <span>Educational</span> Programs</h2>
            <p class="mb-5 mx-auto"></p>
          </div>
          <div class="col-md-4 mb-4 pb-2 " data-aos="fade-up" data-aos-delay="100">
            <div class="education-card card">
              <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
              <div class="card-body text-center ">
                <h5 class="pt-3">Frontend Program</h5>
                <p>A brief description of the first project and its key features.</p>
                <a href="{{ route('register') }}" class="btn btn-success">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="education-card card">
              <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
              <div class="card-body text-center">
                <h5 class="pt-3">backend Program</h5>
                <p>A brief description of the first project and its key features.</p>
                <a href="{{ route('login') }}" class="btn btn-success">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 pb-2" data-aos="fade-up" data-aos-delay="300">
            <div class="education-card card">
              <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
              <div class="card-body text-center">
                <h5 class="pt-3">Artificial Intelligence</h5>
                <p>A brief description of the first project and its key features.</p>
                <a href="{{ route('login') }}" class="btn btn-success">Get Started</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row explore-more align-items-center justify-content-evenly my-5">
          <div class="col-lg-6 mb-3" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('Front/images/educationExplore.svg') }}" alt="" class="w-100">
          </div>
          <div class="col-lg-5">
            <h3 class="mb-40 mt-sm-5" data-aos="fade-left" data-aos-delay="100">
</h3>
            <a href="{{ route('viaura.education') }}" class="btn btn-outline-success" data-aos="fade-up" data-aos-delay="200">Explore
              More <i class="fa-solid fa-angle-right "></i></a>
          </div>
        </div>
      </div>
    </section>

    <!--Jobs-->
    <section id="jobs" class="jobs  ptb-100 ">
      <div class="container">
        <div class="row  text-center">
          <div class="col-lg-12 title" data-aos="fade-up" data-aos-delay="300">
            <h2 class="mb-3"> <span>Job</span> Opportunity</h2>
            <p class="mb-5"></p>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-laptop-code"></i>
                Web Development
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ route('register') }}">
                <i class="fa-solid fa-palette"></i>
                Design
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="300">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-gears"></i>
                AI & Machine Learning
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="400">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-rectangle-ad"></i>
                Marketing
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="500">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                Editing
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="content transition-all" data-aos="fade-up" data-aos-delay="600">
              <a href="{{ route('login') }}">
                <i class="fa-solid fa-language"></i>
                Translation
              </a>
            </div>
          </div>
        </div>
        <div class="row explore-more align-items-center justify-content-evenly my-5">
          <div class="col-lg-5">
            <h3 class="mb-40 mt-sm-5" data-aos="fade-right" data-aos-delay="100">Contact Us
              adipisicing elit.</h3>
            <a href="" class="btn btn-outline-success" data-aos="fade-up" data-aos-delay="200">Explore More <i
                class="fa-solid fa-angle-right "></i></a>
          </div>
          <div class="col-lg-6 mt-3" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('Front/images/jobExplore.svg') }}" alt="" class="w-100">
          </div>
        </div>
      </div>
    </section>

    <!--Contact-->
    <section class=" contact ptb-50" id="contact">
      <div class="content mx-auto ptb-50">
              <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 title text-center">
            <h2 class="mb-3" data-aos="fade-down" data-aos-delay="100">Get in <span>touch</span></h2>
            <p data-aos="fade-up" data-aos-delay="100"></p>
          </div>
          <!-- Contact Form Column -->
          <div class="col-lg-6 mb-4 mb-lg-0">

            @if ($errors->any())
                @if ($errors->any()==0)
                    <div class="alert alert-danger">
                        <ul>
                            <li>
                                {{'Data sent successfully'}}
                            </li>
                        </ul>

                    </div>
                @else
                    <div class="alert alert-danger">
                        <ul>
                            <li>
                                {{'Error sending data'}}
                            </li>
                        </ul>
                    </div>
                @endif

            @endif
<form action="mailto:r409456712@gmail.com.com" method="POST" enctype="text/plain">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label ms-3" data-aos="fade-right" data-aos-delay="200">Full Name</label>
                <input type="text" class="form-control py-2 ps-3 @error('name') is-invalid @enderror" id="name" name="name"  placeholder="Enter your name here" aria-describedby="nameError"  data-aos="fade-left" data-aos-delay="200"  value="{{ old('name') }}"/>
                @error('name')
                     <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="email" class="form-label ms-3" data-aos="fade-right" data-aos-delay="200">Email Address</label>
                <input type="email" class="form-control py-2 ps-3 @error('email') is-invalid @enderror" id="email" name="email"  placeholder="Enter your email address here" aria-describedby="emailError"  data-aos="fade-left" data-aos-delay="200" value="{{ old('email') }}"/>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label ms-3" data-aos="fade-right" data-aos-delay="200">Phone</label>
                <input type="tel" class="form-control py-2 ps-3 @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter your phone number here" data-aos="fade-left" data-aos-delay="200"
                value="{{ old('phone') }}"/>
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <div class="mb-3">
                <label for="message" class="form-label ms-3" data-aos="fade-right" data-aos-delay="200">Message</label>
                <textarea class="form-control py-2 ps-3 @error('message') is-invalid @enderror" id="message"    name="message" rows="4"
                  placeholder="write what you wanna say here" aria-describedby="messageError" data-aos="fade-left" data-aos-delay="200">{{ old('message') }}</textarea>
                   @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <button type="submit" class="btn-outline-success ms-3 px-4 py-2 fw-600 transition-all">Send</button>
            </form>
          </div>



          <!-- SVG Placeholder Column -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="contactSVG">
              <img src="{{ asset('Front/images/contact.svg') }}" alt="" class="w-90 mx-auto">
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>

  <!--Footer-->
  <!-- Footer will only load correctly when running on a local server (e.g., Live Server or deployed site) -->
  <footer id="{{ route('viaura.footer') }}"></footer>

  <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="{{ asset('Front/JS/Viaura.js') }}"></script>
</body>

</html>
