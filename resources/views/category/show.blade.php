<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} | Viaura</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/education.css') }}">
    <style>
        .category-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                      url('{{ asset("Front/images/educational-program.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 120px 0 80px;
            color: white;
            margin-bottom: 50px;
        }

        .course-card {
            transition: all 0.3s ease;
            height: 100%;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
        }

        .breadcrumb-item a {
            color: rgba(255,255,255,0.8);
        }

        .breadcrumb-item.active {
            color: white;
        }
    </style>
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
                            <a class="nav-link active" href="{{ route('dashboard') }}">Courses</a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800" class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800" class="nav-item">
                            <a class="nav-link" href="{{ route('job') }}">Jobs</a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800" class="nav-item d-flex align-items-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link p-0 m-0" style="border: none; background: none;">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>

                    <div class="searchBox" data-aos="fade-left" data-aos-delay="700" data-aos-duration="800">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text"  id="courseSearch" placeholder="Search courses" />
                    </div>

                    {{-- <div class="user-account">
                        <img class="w-30" src="{{ asset('Front/images/person.jpeg') }}" alt="user" data-aos="fade-left" data-aos-delay="900"
                            data-aos-duration="800">
                        <a href="{{ route('profile.show') }}" data-aos="fade-left" data-aos-delay="1100" data-aos-duration="800">
                            {{ Auth::user()->name }}
                        </a>
                    </div> --}}


                     <div class="user-account">
     <img class="w-30"
     src="{{ Auth::user()->profile_photo_path ? asset('profile_images/' . basename(Auth::user()->profile_photo_path)) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&color=7F9CF5&background=EBF4FF' }}"
     alt="user"
     data-aos="fade-left"
     data-aos-delay="1000"
     data-aos-duration="800">
        <a href="{{ route('profile.show') }}" data-aos="fade-left" data-aos-delay="1100" data-aos-duration="800">
            {{ Auth::user()->name }}
        </a>
    </div>
</div>
       
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="category-hero text-center">
            <div class="container">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('viaura.viaura') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Courses</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                    </ol>
                </nav>
                <h1 class="display-4 mb-3" data-aos="fade-up">{{ $category->name }}</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">{{ $category->description }}</p>
            </div>
        </section>

        <!-- Courses Section -->
        <section class="courses-section pb-100">
            <div class="container">
                <div class="section-header mb-5" data-aos="fade-up">
                    <h2 class="section-title">Available Courses</h2>
                    <p class="section-subtitle">Explore all courses in this category</p>
                </div>

                <div class="row">
                    @foreach($category->courses as $course)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card course-card h-100"  >
                            <img src="{{ asset('Front/images/educational-program.jpg') }}" class="card-img-top" alt="{{ $course->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                                <div class="course-meta d-flex justify-content-between align-items-center mt-3">
                                    <span class="badge bg-primary">{{ $course->level }}</span>
                                    <span class="text-muted">{{ $course->duration }} hours</span>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <a href="{{ $course->video_url }}" target="_blank" class="btn btn-primary w-100">
                                    <i class="fas fa-play-circle me-2"></i> Start Course
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <button class="back-top">
            <i class="fa-solid fa-angles-up"></i>
        </button>
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
                  <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-angle-right "></i> Educational Programs</a></li>
                  <li><a href="{{ route('job') }}"><i class="fa-solid fa-angle-right "></i> Job Categories </a></li>
                  <li><a href="{{ route('job') }}"><i class="fa-solid fa-angle-right "></i> Explore Opportunities </a></li>
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
    <script>
        AOS.init();
    </script>


<script>
    document.getElementById('courseSearch').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        const courses = document.querySelectorAll('.course-card');

        courses.forEach(course => {
            const title = course.querySelector('.card-title').textContent.toLowerCase();
            if (title.includes(searchValue)) {
                course.closest('.col-lg-4').style.display = 'block';
            } else {
                course.closest('.col-lg-4').style.display = 'none';
            }
        });
    });
</script>

</body>

</html>
