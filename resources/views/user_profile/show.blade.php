<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/profile.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" data-aos="fade-right" data-aos-duration="500">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" data-aos="fade-down" data-aos-duration="400" data-aos-delay="200">
                            <a class="nav-link active fw-bold mx-3" aria-current="page" href="{{ route('viaura.viaura') }}">Home</a>
                        </li>
                        <li class="nav-item" data-aos="fade-down" data-aos-duration="400" data-aos-delay="300">
                            <a class="nav-link fw-bold mx-3" href="#aboutme">About Me</a>
                        </li>
                        <li class="nav-item" data-aos="fade-down" data-aos-duration="400" data-aos-delay="400">
                            <a class="nav-link fw-bold mx-3" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item" data-aos="fade-down" data-aos-duration="400" data-aos-delay="600">
                            <a class="nav-link fw-bold mx-3" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item" data-aos="fade-down" data-aos-duration="400" data-aos-delay="500">
                            <a class="nav-link fw-bold mx-3" href="{{ route('profile.edit') }}">Edit Profile</a>
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

        <!-- Profile Header Section -->
        <div class="profile-header mb-40" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
            <div class="user-img">
                <img class="w-15" src="{{ Auth::user()->profile_photo_path ? asset('profile_images/' . basename(Auth::user()->profile_photo_path)) : asset('Front/images/person.jpeg') }}" alt="user" id="profileImage">
                <button class="edit-btn transition-all" id="editProfileBtn"><i class="fa-solid fa-pen f-12"></i></button>
            </div>
            <div class="user-title" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500">
                <h3 class="user-name fw-bold m-0">{{ Auth::user()->name }}</h3>
                <p class="job title fw-600">{{ Auth::user()->job_title ?? 'Full Stack Developer' }}</p>
            </div>
        </div>

        <!-- Hidden Image Upload Form -->
        <form id="profileImageForm" enctype="multipart/form-data" style="display: none;">
            @csrf
            <input type="file" name="profile_image" id="profileImageInput" accept="image/*">
        </form>

        <!-- About Me Section -->
        <section class="Pio-contact pt-100 pb-50" id="aboutme">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 ps-0 pe-4">
                        <h4 class="fw-bold mb-20" data-aos="fade-right" data-aos-duration="300" data-aos-delay="200">
                            {{ Auth::user()->about_title ?? 'Driven by Code, Focused on User' }}</h4>
                        <p class="fw-bold p-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">
                            {{ Auth::user()->about_description ?? 'Hi, I\'m Aiden Harris, a Full Stack Developer with solid experience in building modern and responsive web applications. I work with technologies like React, Node.js, and MongoDB to create user-friendly frontends and powerful backends.' }}
                        </p>
                    </div>
                    <div class="col-lg-4 position-relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                        <div class="contact">
                            <h5 class="blur-title">Contact</h5>
                            <ul>
                                <li class="mb-2"><i class="fa-solid fa-phone"></i> : {{ Auth::user()->phone ?? '+123 45678910' }}</li>
                                <li class="mb-2"><a href="mailto:{{ Auth::user()->email ?? 'ayden.d.harris@gmail.com' }}"><i class="fa-solid fa-paper-plane"></i> : {{ Auth::user()->email ?? 'ayden.d.harris@gmail.com' }}</a></li>
                                <li class="mb-2"><i class="fa-solid fa-location-dot"></i> : {{ Auth::user()->address ?? 'Maple Ave, Toronto, ON, Canada' }}</li>
                                @if(Auth::user()->linkedin)
                                <li class="mb-2"><a href="{{ Auth::user()->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin"></i> Linkedin : {{ Auth::user()->name }}</a></li>
                                @endif
                                @if(Auth::user()->githup)
                                <li class="mb-2"><a href="{{ Auth::user()->githup }}" target="_blank"><i class="fas fa-user-tie"></i> Freelancer : {{ Auth::user()->freelancer_username ?? 'Ayden.d.Harris' }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills & Experience Section -->
        <section class="Skills-experience ptb-100" id="skills">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 position-relative p-0" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="Skills">
                            <h5 class="blur-title">Skills</h5>
                            <ul>
                                @if(Auth::user()->skills)
                                    @foreach(explode(',', Auth::user()->skills) as $skill)
                                        <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="{{ 500 + ($loop->index * 50) }}">{{ $skill }}</li>
                                    @endforeach
                                @else
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">Full Website Development</li>
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="550">API Development and Integration</li>
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="600">Web Page Design</li>
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="650">E-commerce Solutions</li>
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700">Database Design and Management</li>
                                    <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="750">Custom Web Applications</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 p-0">
                        <div class="experience">
                            <h4 class="mb-20 ps-32 fw-bold" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">EXPERIENCE</h4>
                            <ul data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                                @if(Auth::user()->experiences)
                                    @foreach(json_decode(Auth::user()->experiences, true) as $experience)
                                        <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="{{ 300 + ($loop->index * 100) }}">
                                            {{ $experience['title'] }}<br>
                                            {{ $experience['company'] }} | {{ $experience['period'] }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="300">
                                        Bachelor's Degree in Computer Science<br>
                                        University of Toronto | 2018 – 2022
                                    </li>
                                    <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="400">
                                        Full Stack Developer<br>
                                        Tech Solutions Inc. | May 2021 – May 2022
                                    </li>
                                    <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500">
                                        Junior Web Developer<br>
                                        Innovative Web Solutions | June 2020 – April 2021
                                    </li>
                                    <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500" data-aos-delay="600">
                                        Frontend Developer Intern<br>
                                        Creative Tech Studio | July 2019 – December 2019
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer id="{{ route('viaura.footer') }}"></footer>

    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/profile.js') }}"></script>

    <script>
        // Handle Profile Image Upload
        document.getElementById('editProfileBtn').addEventListener('click', function() {
            document.getElementById('profileImageInput').click();
        });

        document.getElementById('profileImageInput').addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                // Show preview
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('profileImage').src = event.target.result;
                };
                reader.readAsDataURL(e.target.files[0]);

                // Upload image automatically
                uploadProfileImage(e.target.files[0]);
            }
        });

        function uploadProfileImage(file) {
            const formData = new FormData();
            formData.append('profile_image', file);
            formData.append('_token', '{{ csrf_token() }}');

            fetch('{{ route("profile.image.upload") }}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    alert('Error saving image');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error uploading image');
            });
        }

        // Initialize AOS animation
        AOS.init();
    </script>
</body>
</html>
