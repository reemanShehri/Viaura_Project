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

        <div class="profile-header mb-40" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
            <div class="user-img">
                <img class="w-15" src="{{ asset('Front/images/person.jpeg') }}" alt="user">
                <button class="edit-btn transition-all"><i class="fa-solid fa-pen f-12"></i></button>
            </div>
            <div class="user-title" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500">
                <h3 class=" user-name fw-bold m-0">Ayden Harris</h3>
                <p class="job title fw-600">Full Stack Developer</p>

            </div>

        </div>
        <!--popup image-edit-->
        <section class="popup ">
            <div class="container h-100 d-flex justify-content-center align-items-center ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="edit-profilePic d-flex justify-content-center align-items-center flex-column p-5 ">
                            <button class="close border-0 "><i class="fa-solid fa-xmark f-24"></i></button>

                                <img src="{{ asset('Front/images/person.jpeg') }}" alt="current image" class="w-50 mb-5">

                               {{-- <input type="file" name="image" <button class="btn btn-success w-50 mb-2">Upload New Photo</button>> --}}
                               <button class="btn btn-success w-50 mb-2">Upload New Photo</button>
                                <button class="btn btn-outline-success w-50 mb-2">Take a Photo</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pio-contact-->
        <section class="Pio-contact pt-100 pb-50" id="aboutme">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8 ps-0 pe-4">
                        <h4 class="fw-bold mb-20" data-aos="fade-right" data-aos-duration="300" data-aos-delay="200">
                            Driven by Code, Focused on User</h4>
                        <p class="fw-bold p-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">

                            hi all
                        </p>
                    </div>
                    <div class="col-lg-4 position-relative" data-aos="fade-left" data-aos-duration="800"
                        data-aos-delay="300">
                        <div class="contact">
                            <h5 class="blur-title">Contact</h5>
                            <ul>
                                <li class="mb-2"><i class="fa-solid fa-phone"></i> : +123 45678910</li>
                                <li class="mb-2"><a href="mailto: ayden.d.harris@gmail.com"><i
                                            class="fa-solid fa-paper-plane"></i> : ayden.d.harris@gmail.com</a></li>
                                <li class="mb-2"><i class="fa-solid fa-location-dot"></i> : Maple Ave, Toronto, ON,
                                    Canada</li>
                                <li class="mb-2"><a href="https://www.linkedin.com/in/asmaa-sulaiman-8b2374294/"
                                        target="_blank"><i class="fa-brands fa-linkedin"></i> Linkedin : aydenharris</a>
                                </li>
                                <li class="mb-2"><a href="https://www.freelancer.com/u/AsmaaSulaiman21"
                                        target="_blank"><i class="fas fa-user-tie"></i> Freelancer : Ayden.d.Harris</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Skills-experience-->
        <section class="Skills-experience ptb-100" id="skills">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 position-relative p-0" data-aos="fade-right" data-aos-duration="800"
                        data-aos-delay="300">
                        <div class="Skills">
                            <h5 class="blur-title">
                                Skills
                            </h5>
                            <ul>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">Full
                                    Website Development</li>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="550">API
                                    Development and Integration</li>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="600">Web
                                    Page Design</li>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="650">
                                    E-commerce Solutions</li>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700">
                                    Database Design and Management</li>
                                <li class="mb-2" data-aos="fade-down" data-aos-duration="800" data-aos-delay="750">
                                    Custom Web Applications</li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-7 p-0">
                        <div class="experience">
                            <h4 class="mb-20 ps-32 fw-bold" data-aos="fade-right" data-aos-duration="800"
                                data-aos-delay="200">EXPERIENCE</h4>
                            <ul data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                                <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500"
                                    data-aos-delay="300">Bachelor's Degree in Computer Science
                                    University of Toronto | 2018 – 2022</li>
                                <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500"
                                    data-aos-delay="400">Full Stack Developer
                                    Tech Solutions Inc. | May 2021 – May 2022</li>
                                <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500"
                                    data-aos-delay="500">Junior Web Developer
                                    Innovative Web Solutions | June 2020 – April 2021</li>
                                <li class="mb-2 fw-bold" data-aos="fade-down" data-aos-duration="500"
                                    data-aos-delay="600">Frontend Developer Intern
                                    Creative Tech Studio | July 2019 – December 2019
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--portfolio-->

        <section class="portfolio ptb-100" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                        <h2 class="pb-4">PORTFOLIO</h2>
                    </div>
                    <div class="col-lg-4 my-2">
                        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="crad-img mb-3">
                                <img src="{{ asset('Front/images/portfolio1.png') }}" alt="" class="w-100">
                            </div>
                            <div class="card-content p-4">
                                <h5 class="mb-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                    Full-Stack Web Application – Frontend & Backend Development</h5>
                                <p class="py-3 m-0" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                    Frontend: HTML5 • CSS3 • JavaScript • React • Bootstrap/TailwindCSS
                                    <br> Backend: Node.js • Express
                                    <br> Database: MongoDB • JWT
                                </p>
                                <a href="#" class="btn w-100 mt-2 align-center btn-success ">Check it out</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2">
                        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="crad-img mb-3">
                                <img src="{{ asset('Front/images/portfolio2.png') }}" alt="" class="w-100">
                            </div>
                            <div class="card-content p-4">
                                <h5 class="mb-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                    Full-Stack Web Application – Frontend & Backend Development</h5>
                                <p class="py-3 m-0" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                    Frontend: HTML5 • CSS3 • JavaScript • React • Bootstrap/TailwindCSS
                                    <br> Backend: Node.js • Express
                                    <br> Database: MongoDB • JWT
                                </p>
                                <a href="#" class="btn w-100 mt-2 align-center btn-success ">Check it out</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2">
                        <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="crad-img mb-3">
                                <img src="{{ asset('Front/images/portfolio3.png') }}" alt="" class="w-100">
                            </div>
                            <div class="card-content p-4">
                                <h5 class="mb-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                    Full-Stack Web Application – Frontend & Backend Development</h5>
                                <p class="py-3 m-0" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                                    Frontend: HTML5 • CSS3 • JavaScript • React • Bootstrap/TailwindCSS
                                    <br> Backend: Node.js • Express
                                    <br>Database: MongoDB • JWT
                                </p>
                                <a href="#" class="btn w-100 mt-2 align-center btn-success ">Check it out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>

    </main>
    <footer id="{{ route('viaura.footer') }}"></footer>
    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/profile.js') }}"></script>
</body>

</html>
