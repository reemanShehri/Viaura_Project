<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Opportunities | YourSite</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/education.css') }}">
    <style>



    .job-card {
        min-width: 320px;
        max-width: 320px;
        flex: 0 0 auto;
    }



.simple-btn {
    background-color: white;
    border: 1px solid #ccc;
    color: #333;
    padding: 10px 15px;
    width: 100%;
    text-align: left;
    transition: background-color 0.3s, color 0.3s;
}

.simple-btn:hover {
    background-color:#6a0dad; /* Purple */
    color: #fff;
}




        :root {
            --primary-color: #6a0dad;
            --dark-color: #1a1a2e;
            --light-color: #f8f1ff;
        }

        .freelance-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                      url('{{ asset("Front/images/freelance-hero.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            color: white;
            margin-bottom: 50px;
        }

        .job-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            min-height: 500px;
        }

        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .platform-card {
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
            height: 100%;
        }

        .platform-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(106, 13, 173, 0.2);
        }

        .platform-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .category-badge {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(106, 13, 173, 0.9);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 500;
        }





        .bg-purple {
            background-color: var(--primary-color) !important;
        }

        .job-item {
            border-left: 3px solid var(--primary-color);
            transition: all 0.2s;
        }

        .job-item:hover {
            background: var(--light-color) !important;
        }

        .jobs-container {
            overflow-y: auto;
            max-height: 200px;
        }

        .jobs-container::-webkit-scrollbar {
            width: 5px;
        }

        .jobs-container::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        .tips-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s;
        }

        .tips-card:hover {
            transform: translateX(5px);
        }

        .freelance-section {
            background-color: var(--light-color);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" data-aos="fade-down" data-aos-delay="100" data-aos-duration="800">
            <div class="container">
                <a class="navbar-brand" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" href="#">
                    <img src="{{ asset('Front/images/Dark-viaura-logo.svg') }}" class="w-36" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav main align-items-center">
        <li data-aos="fade-down" data-aos-delay="300" data-aos-duration="800" class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Home</a>
        </li>
        <li data-aos="fade-down" data-aos-delay="400" data-aos-duration="800" class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Courses</a>
        </li>
        <li data-aos="fade-down" data-aos-delay="500" data-aos-duration="800" class="nav-item">
            <a class="nav-link active" href="{{ route('job') }}">Freelance Jobs</a>
        </li>
        <li data-aos="fade-down" data-aos-delay="700" data-aos-duration="800" class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li data-aos="fade-down" data-aos-delay="800" data-aos-duration="800" class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-flex align-items-center h-100">
                @csrf
                <button type="submit" class="nav-link btn btn-link p-0" style="border: none; background: none; height: 100%; display: flex; align-items: center;">
                    Logout
                </button>
            </form>
        </li>
    </ul>

    {{-- <div class="searchBox" data-aos="fade-left" data-aos-delay="900" data-aos-duration="800">
        <i class="fas fa-magnifying-glass"></i>
        <input type="text" placeholder="Search jobs..." />
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
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="freelance-hero text-center">
            <div class="container">
                <h1 class="display-4 mb-3" data-aos="fade-up">Freelance Opportunities</h1>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Find projects that match your skills and grow your career</p>
                <a href="#jobs" class="btn btn-lg px-4" style="background-color: #6a0dad; color: white; border: none;"
                   data-aos="fade-up" data-aos-delay="200">
                   Browse Jobs <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </section>

        <!-- Jobs Section -->
<section id="jobs" class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="display-5 mb-3" data-aos="fade-up">Available Freelance Jobs</h2>
                        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Browse through our curated list of freelance opportunities</p>
                    </div>
                </div>

    {{-- <div class="row">
                  @foreach($categories as $category)
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card job-card h-100">
                            <div class="position-relative" style="height: 150px; overflow: hidden;">
                                <img src="https://static.vecteezy.com/system/resources/previews/003/807/899/large_2x/programmer-computers-in-workplace-vector.jpg"
                                     class="w-100 h-100"
                                     style="object-fit: cover;"
                                     alt="{{ $category->name }}">
                                <span class="category-badge">{{ $category->name }}</span>
                            </div>

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $category->name }}</h5>

                                <div class="jobs-container flex-grow-1">
                                                                                    <span class="job-title">{{ $category->job_opportunities }}</span>

                                    @if($category->jobs->count() > 0)
                                        @foreach($category->jobs as $job)
                                        <div class="job-item p-2 mb-10 bg-light rounded">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="job-title">{{ $job->title }}</span>
                                                <span class="badge bg-purple">New</span>
                                            </div>
                                            @if($job->company)
                                            <div class="company text-muted small mt-50">
                                                <i class="fas fa-building"></i> {{ $job->company }}
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="no-jobs alert alert-warning text-center py-3 mb-3">
                                            <i class="fas fa-exclamation-circle"></i> No Jobs Found
                                        </div>
                                    @endif
                                </div>

                                <div class="total-jobs mt-5 pt-3 border-top text-center">
                                    <span class="badge bg-dark rounded-pill px-3 py-2">
                                        Total: {{ $category->jobs->count() }} jobs
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br>
                    @endforeach
                </div>
    </div> --}}


    <div class="position-relative">
    <!-- زر السهم اليسار -->
    <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y z-10"
            onclick="scrollCategories('left')">
        <i class="fas fa-chevron-left"></i>
    </button>

    <div id="categoriesSlider"
         class="d-flex overflow-auto gap-4 px-5"
         style="scroll-behavior: smooth;">
        @foreach($categories as $category)
            <div class="card job-card flex-shrink-0" style="width: 320px; height: 100%;" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="position-relative" style="height: 150px; overflow: hidden;">
                    <img src="https://static.vecteezy.com/system/resources/previews/003/807/899/large_2x/programmer-computers-in-workplace-vector.jpg"
                         class="w-100 h-100" style="object-fit: cover;" alt="{{ $category->name }}">
                    <span class="category-badge">{{ $category->name }}</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <div class="job-item bg-light p-2 rounded text-muted small">
                        {{ $category->job_opportunities }} jobs available
                    </div>






                    {{--  --}}

<style>
.simple-btn {
    background-color: white;
    border: 1px solid #ccc;
    color: #333;
    padding: 10px 15px;
    width: 100%;
    text-align: left;
    border-radius: 12px; /* حواف مدورة */
    margin-top: 20px;    /* مسافة من الأعلى */
    transition: background-color 0.3s, color 0.3s;
}

.simple-btn:hover {
    background-color: #800080; /* بنفسجي عند التحويم */
    color: #fff;
}
</style>

<!-- تأكد أن كل عنصر له ID فريد -->
<div class="job-category">
    <button class="simple-btn" type="button" data-bs-toggle="collapse" data-bs-target="#jobs-{{ $category->id }}" aria-expanded="false" aria-controls="jobs-{{ $category->id }}">
        Total: {{ $category->jobs->count() }} jobs
    </button>

    <div class="collapse mt-3" id="jobs-{{ $category->id }}">
        <div class="card card-body">
            <ul class="list-group list-group-flush">
                @foreach ($category->jobs as $job)
                    <li class="list-group-item">
                        <strong>{{ $job->title }}</strong><br>
                    </li>
                @endforeach
            </ul>

            <div class="total-jobs mt-3 pt-2 border-top text-center">
                <span class="badge bg-dark rounded-pill px-3 py-2">
                    Total: {{ $category->jobs->count() }} jobs
                </span>
            </div>
        </div>
    </div>
</div>



                    {{-- <div class="total-jobs mt-3 pt-2 border-top text-center">
                        <span class="badge bg-dark rounded-pill px-3 py-2">
                            Total: {{ $category->jobs->count() }} jobs
                        </span>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>

    <!-- زر السهم اليمين -->
    <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y z-10"
            onclick="scrollCategories('right')">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

        </section>


        <script>
    function scrollCategories(direction) {
        const container = document.getElementById('categoriesSlider');
        const scrollAmount = 320 * 3 + 48; // عرض 3 بطاقات + المسافات بينهم

        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
</script>


        <!-- Freelance Guide Section -->
        <section class="py-5 freelance-section">
            <div class="container">
     <div class="row mb-5" style="margin-top: 150px;">
    <div class="col-12 text-center">
        <h2 class="display-5 mb-10" data-aos="fade-up">Freelance Success Guide</h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">
            Essential tips to start and grow your freelance career
        </p>
    </div>
</div>




                <div class="row">
                    <div class="col-md-6 mb-4" data-aos="fade-up">
                        <div class="card h-100 tips-card">
                            <div class="card-body">
                                <h4><i class="fas fa-rocket text-purple me-2"></i> Getting Started</h4>
                                <ul class="mt-3">
                                    <li class="mb-2">Build a strong portfolio with sample projects</li>
                                    <li class="mb-2">Start with small jobs to build your reputation</li>
                                    <li class="mb-2">Set competitive but fair pricing</li>
                                    <li class="mb-2">Create profiles on multiple freelance platforms</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 tips-card">
                            <div class="card-body">
                                <h4><i class="fas fa-chart-line text-purple me-2"></i> Growing Your Business</h4>
                                <ul class="mt-3">
                                    <li class="mb-2">Specialize in a specific niche</li>
                                    <li class="mb-2">Ask satisfied clients for testimonials</li>
                                    <li class="mb-2">Increase your rates gradually</li>
                                    <li class="mb-2">Build long-term client relationships</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 tips-card">
                            <div class="card-body">
                                <h4><i class="fas fa-file-alt text-purple me-2"></i> Writing Proposals</h4>
                                <ul class="mt-3">
                                    <li class="mb-2">Personalize each proposal</li>
                                    <li class="mb-2">Highlight relevant experience</li>
                                    <li class="mb-2">Provide clear deliverables</li>
                                    <li class="mb-2">Include a call-to-action</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 tips-card">
                            <div class="card-body">
                                <h4><i class="fas fa-balance-scale text-purple me-2"></i> Managing Work</h4>
                                <ul class="mt-3">
                                    <li class="mb-2">Use time tracking tools</li>
                                    <li class="mb-2">Set clear deadlines</li>
                                    <li class="mb-2">Communicate regularly with clients</li>
                                    <li class="mb-2">Learn to say no to unrealistic requests</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    {{-- <a href="{{ route('freelance.tips') }}" class="btn btn-primary btn-lg px-4">
                        View All Freelance Tips <i class="fas fa-arrow-right ms-2"></i>
                    </a> --}}
                </div>
            </div>
        </section>

        <!-- Recommended Courses -->
        <section class="py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
<a href="{{ route('dashboard') }}" class="block no-underline hover:no-underline text-black">
    <h2 class="display-5 mb-3 text-black" data-aos="fade-up">
        Recommended Freelance Courses
    </h2>
</a>

                        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Boost your skills with these specially selected courses</p>
                    </div>
                </div>

                <div class="row">
                    @foreach($featuredCourses as $course)
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="card h-100">
                            <img src="{{ asset('Front/images/course-' . $loop->iteration . '.jpg') }}" class="card-img-top" alt="{{ $course->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-warning text-dark">{{ $course->level }}</span>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Freelance Platforms -->
        {{-- <section class="py-5 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="display-5 mb-3" data-aos="fade-up">Top Freelance Platforms</h2>
                        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Explore these platforms to find more opportunities</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up">
                        <a href="https://www.upwork.com" target="_blank" class="text-decoration-none">
                            <div class="platform-card bg-white">
                                <i class="fas fa-briefcase platform-icon text-success"></i>
                                <h5>Upwork</h5>
                                <p class="small text-muted">Global freelancing platform</p>
                                <span class="badge bg-success text-white">Popular</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <a href="https://www.fiverr.com" target="_blank" class="text-decoration-none">
                            <div class="platform-card bg-white">
                                <i class="fas fa-star platform-icon text-primary"></i>
                                <h5>Fiverr</h5>
                                <p class="small text-muted">Gig-based marketplace</p>
                                <span class="badge bg-primary text-white">Creative</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://www.freelancer.com" target="_blank" class="text-decoration-none">
                            <div class="platform-card bg-white">
                                <i class="fas fa-globe platform-icon text-info"></i>
                                <h5>Freelancer</h5>
                                <p class="small text-muted">Competitive bidding</p>
                                <span class="badge bg-info text-white">Global</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="https://www.toptal.com" target="_blank" class="text-decoration-none">
                            <div class="platform-card bg-white">
                                <i class="fas fa-award platform-icon text-warning"></i>
                                <h5>Toptal</h5>
                                <p class="small text-muted">Top 3% talent</p>
                                <span class="badge bg-warning text-dark">Elite</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}



        <!-- Freelance Platforms Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-5 mb-3" data-aos="fade-up">Top Freelance Platforms</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Explore these platforms to find more opportunities</p>
            </div>
        </div>

        <div class="row">
            <!-- Upwork -->
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up">
                <a href="https://www.upwork.com/freelance-jobs/frontend-development/" target="_blank" class="text-decoration-none">
                    <div class="platform-card bg-white">
                        <i class="fas fa-briefcase platform-icon text-success"></i>
                        <h5>Upwork</h5>
                        <p class="small text-muted">Frontend Development Jobs</p>
                        <div class="mt-2">
                            <span class="badge bg-success text-white">Popular</span>
                            <span class="badge bg-info text-white ms-1">Remote</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Fiverr -->
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="https://www.fiverr.com/categories/programming-tech/web-programming-services" target="_blank" class="text-decoration-none">
                    <div class="platform-card bg-white">
                        <i class="fas fa-star platform-icon text-primary"></i>
                        <h5>Fiverr</h5>
                        <p class="small text-muted">Web Programming Services</p>
                        <div class="mt-2">
                            <span class="badge bg-primary text-white">Gigs</span>
                            <span class="badge bg-warning text-dark ms-1">Creative</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Freelancer -->
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <a href="https://www.freelancer.com/jobs/front-end-development/" target="_blank" class="text-decoration-none">
                    <div class="platform-card bg-white">
                        <i class="fas fa-globe platform-icon text-info"></i>
                        <h5>Freelancer</h5>
                        <p class="small text-muted">Front-End Development</p>
                        <div class="mt-2">
                            <span class="badge bg-info text-white">Bidding</span>
                            <span class="badge bg-dark text-white ms-1">Global</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Toptal -->
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <a href="https://www.toptal.com/front-end" target="_blank" class="text-decoration-none">
                    <div class="platform-card bg-white">
                        <i class="fas fa-award platform-icon text-warning"></i>
                        <h5>Toptal</h5>
                        <p class="small text-muted">Top Frontend Developers</p>
                        <div class="mt-2">
                            <span class="badge bg-warning text-dark">Elite</span>
                            <span class="badge bg-purple text-white ms-1">Premium</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Additional Platforms -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="text-center">
                    <h5 class="mb-3">More Specialized Platforms</h5>
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <a href="https://www.guru.com/d/jobs/front-end-development/" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-laptop-code me-1"></i> Guru
                        </a>
                        <a href="https://www.peopleperhour.com/freelance-jobs/development-it/web-development" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-clock me-1"></i> PeoplePerHour
                        </a>
                        <a href="https://www.truelancer.com/freelance-jobs/front-end-development" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-code me-1"></i> Truelancer
                        </a>
                        <a href="https://www.workana.com/jobs?language=en&skills=front-end-development" target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-globe-americas me-1"></i> Workana
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <button class="back-top">
            <i class="fa-solid fa-angles-up"></i>
        </button>
    </main>

    <footer id="contact" >
        <div class="container ptb-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="single-footer">
                        <h2 class="mb-40">YourSite</h2>
                        <p class="mb-40">Connecting freelancers with quality opportunities and educational resources to grow their careers.</p>
                        <a href="#" class="btn btn-outline-success" data-aos="fade-up" data-aos-delay="200">
                            Learn More <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 links mt-sm-4">
                    <div class="single-footer w-50 mx-auto">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                            <li><a href="{{ route('job') }}"><i class="fa-solid fa-angle-right"></i> Freelance Jobs</a></li>
                            {{-- <li><a href="{{ route('freelance.tips') }}"><i class="fa-solid fa-angle-right"></i> Freelance Tips</a></li> --}}
                            <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-angle-right"></i> Courses</a></li>
                            <li><a href="#contact""><i class="fa-solid fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="copy-right-area text-center">
            <p>YourSite &copy; {{ date('Y') }} All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/education.js') }}"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Back to top button
        const backToTopButton = document.querySelector('.back-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>



</body>
</html>
