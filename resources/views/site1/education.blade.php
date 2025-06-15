<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/education.css') }}">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
            <div class="container">
                <a class="navbar-brand" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" href="#"><img
                        src="{{ asset('Front/images/Dark-viaura-logo.svg') }}" class="w-36" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav main">
                        <li data-aos="fade-down" data-aos-delay="300" data-aos-duration="800" class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('viaura.viaura') }}">Home</a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="400" data-aos-duration="800" class="nav-item">
                            <a class="nav-link active" href="#courses">Courses</a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800" class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>

                    <div class="searchBox" data-aos="fade-left" data-aos-delay="700" data-aos-duration="800">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search courses" />
                    </div>

                    <div class="user-account">
                        <img class="w-30" src="{{ asset('Front/images/person.jpeg') }}" alt="user" data-aos="fade-left" data-aos-delay="900"
                            data-aos-duration="800">
                        <a href="{{ route('profile.edit') }}" data-aos="fade-left" data-aos-delay="1100" data-aos-duration="800">user
                            name</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <button class="back-top">
            <i class="fa-solid fa-angles-up"></i>
        </button>

        <section id="courses" class="courses pt-150-pb-100">
            <div class="container ">
                <div class="row">
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 1">
                            <div class="card-body text-center ">
                                <h5 class="pt-2">Front End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 2">
                            <div class="card-body text-center">
                                <h5 class="pt-2">back End Program</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="education-card card">
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="program 3">
                            <div class="card-body text-center">
                                <h5 class="pt-2">Artificial Intelligence</h5>
                                <p>Here is top 5 courses of Front End </p>
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 1</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 2</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 3</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> course 4 </a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right "></i> more</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div id="contact" class="container ptb-100">
          <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto">
              <div class="single-footer">
                <h2 class="mb-40">Viaura</h2>
                <p class="mb-40">Viaura connects learning with real-world opportunities
                  One platform for skills, growth, and freelance success</p>
                <a href="" class="btn btn-outline-success" data-aos="fade-up" data-aos-delay="200">Explore More <i
                    class="fa-solid fa-angle-right "></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6  links mt-sm-4 ">
              <div class="single-footer w-50 mx-auto">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="{{ route('viaura.viaura') }}"><i class="fa-solid fa-angle-right "></i> Home</a></li>
                  <li><a href="{{ route('viaura.viaura') }}"><i class="fa-solid fa-angle-right "></i> About viaura</a></li>
                  <li><a href="{{ route('viaura.education') }}"><i class="fa-solid fa-angle-right "></i> Educational Programs</a></li>
                  <li><a href="{{ route('login') }}"><i class="fa-solid fa-angle-right "></i> Job Categories </a></li>
                  <li><a href="{{ route('login') }}"><i class="fa-solid fa-angle-right "></i> Explore Opportunities </a></li>
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
    <script src="{{ asset('Front/JS/education.js') }}"></script>
</body>

</html>
