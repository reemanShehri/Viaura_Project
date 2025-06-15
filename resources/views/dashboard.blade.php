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



    <style>
    .category-link {
        font-size: 24px;
        font-weight: bold;
        color: #5e3bee; /* بنفسجي غامق */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .category-link:hover {
        color: #000000; /* أسود عند المرور */
        text-decoration: underline;
    }

    .category-title {
        text-align: start;
        padding-bottom: 10px;
        border-bottom: 2px solid #5e3bee;
        margin-bottom: 20px;
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
                            <a class="nav-link active" href="#courses">Courses</a>
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

    </form>
</li>

                    </ul>

                    <div class="searchBox" data-aos="fade-left" data-aos-delay="700" data-aos-duration="800">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search courses" />
                    </div>

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
        </nav>
    </header>
    <main>
        <button class="back-top">
            <i class="fa-solid fa-angles-up"></i>
        </button>

     <section id="courses" class="courses pt-150-pb-100">
    <div class="container">
        @foreach ($categories as $category)
            <div class="category-section mb-5">

                <h2 class="category-title mb-3">
    <a href="{{ route('category.show', $category->id) }}" class="category-link">
        {{ $category->name }}
    </a>
</h2>

                <p>{{ $category->description }}</p>

                {{-- تقسيم الكورسات إلى صفوف فيها 3 كروت --}}
                @foreach ($category->courses->chunk(3) as $courseChunk)
                    <div class="row">
                        @foreach ($courseChunk as $course)
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="education-card card">
                                    <img src="{{ asset('Front/images/educational-program.jpg') }}" alt="{{ $course->title }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                        <p class="card-text">{{ $course->description }}</p>
                                        <a href="{{ $course->video_url }}" target="_blank" class="btn btn-primary">
                                            Watch Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endforeach
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
</body>

</html>
