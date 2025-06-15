<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" /> --}}
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/edit-profile.css') }}">

</head>

<body>

    <aside class="sidebar-header d-inline-block" data-aos="fade-right" data-aos-duration="500">
        <nav>
            <ul>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200"><a href="#" class="active fw-700"><i class="fa-solid fa-pen me-2"></i> Edit Profile</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300"><a href="{{ route('profile.edit') }}" class="fw-700"><i class="fa-solid fa-user me-2"></i> Profile</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400"><a href="" class="fw-700"><i class="fa-solid fa-house me-2"></i> Home</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500"><a href="{{ route('login') }}" class="fw-700"><i
                            class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <section class="form pb-50">
            <div class="container w-70">
                {{-- <form id="formId" class="row g-5 needs-validation" > --}}
              <form action="{{ route('viaura.edit-profile') }}" method="post"
                         class="row g-5 needs-validation" enctype="multipart/form-data">
                         @csrf
                    <div class="col-md-5 username" data-aos="fade-right" data-aos-duration="700"    data-aos-delay="300">
                        <label for="Username" class="form-label  ms-3 f-18">User name</label>
                        <input type="text" class="form-control" id="username"  name="username" value="{{ old('Username') }}">
                    </div>
                    <div class="col-md-5 jobtitle" data-aos="fade-right" data-aos-duration="700" data-aos-delay="400">
                        <label for="jobtitle" class="form-label  ms-3 f-18">Job Title</label>
                        <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="{{ old('jobtitle') }}">
                    </div>
                    <div class="col-md-8 biography" data-aos="fade-right" data-aos-duration="700" data-aos-delay="500">
                        <label for="biography" class="form-label  ms-3 f-18">Bio</label>
                        <textarea class="form-control" id="biography" name="biography" rows="5" > value="{{ old('biography') }}"
                            {{-- Hi, I’m Aiden Harris, a Full Stack Developer with solid experience in building modern and responsive web applications. I work with technologies like React, Node.js, and MongoDB to create user-friendly frontends and powerful backends.

                            I enjoy solving problems with clean, efficient code and always aim to deliver high-quality results that help businesses grow. I pay close attention to performance, design, and user experience in every project I build.

                            Whether I'm working on an e-commerce site, a dashboard, or a custom web app, I’m always focused on building things that are fast, reliable, and easy to use.

                            " ayden.d.harris@gmail.com"

                            Maple Ave, Toronto, ON, Canada
                            --}}
                        </textarea>
                    </div>
                    <div class="col-md-8 email" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600">
                        <label for="email" class="form-label  ms-3 f-18">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email">
                    </div>
                    <div class="col-md-8 phone" data-aos="fade-right" data-aos-duration="700" data-aos-delay="700">
                        <label for="phone" class="form-label  ms-3 f-18">Contact Number</label>
                        <input type="tel" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
                    </div>
                    <div class="col-md-8 address" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                        <label for="address" class="form-label  ms-3 f-18">Address</label>
                        <input type="text" class="form-control" id="address" value="{{ old('address') }}" name="address">
                    </div>
                    <div class="col-md-8 links" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                        <label for="link" class="form-label  ms-3 f-18">Links</label> <button type="button"
                            class="btn m-2 transition-all" onclick="addLinkFields()"><i
                                class="fa-solid fa-plus"></i></button>
                            <div id="link-fields">
                                <div class="link-group mb-3">
                                    <input type="text" class="form-control mb-2" name="url[]" placeholder="URL">
                                    <input type="text" class="form-control" name="link-title[]" placeholder="Title">
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-7 skills" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                        <label for="skillInput" class="form-label  ms-3 f-18">Skills</label>
                        <div id="skillsList" class="d-flex flex-wrap gap-2 mb-3">
                            <!-- Skills will appear here -->
                        </div>
                        <div class="input-group p-1 d-block">
                            <input type="text" class="form-control d-inline-block" id="skillInput"
                                placeholder="Add new skill..." name="skill">
                            <button type="button" class="btn add d-inline-block" onclick="addSkill()">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-7 experience" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                        <label for="experienceInput" class="form-label ms-3 f-18">Experience</label>
                        <div id="experiencesList" class="d-flex flex-wrap gap-2 mb-3">
                            <!-- Experiences will appear here -->
                        </div>
                        <div class="input-group p-1 d-block">
                            <input type="text" class="form-control d-inline-block" id="experienceInput"
                                placeholder="Add your experience..." name="experience">
                            <button type="button" class="btn add d-inline-block" onclick="addExperience()">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="portfolio">
                        <div class="col-md-8"  data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                            <label for="portfolio" class="form-label  ms-3 f-18">Portfolio</label>
                            <div id="upload-area" class="upload-box">
                                <p>Click or drag project cover Image here to upload<br><span>or paste (CTRL+V)</span>
                                </p>
                                <input type="file" name="image" id="fileInput" accept="image/*" hidden>
                                <img id="previewImage" src="" alt="" style="display: none;" />
                            </div>
                            <button type="button" class="btn remove-image my-3 transition-all"
                                id="removeImageBtn">Remove</button>
                        </div>
                        <div class="col-md-8 my-3"  data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                            <label for="project-title" class="form-label  ms-3 ">Project Title</label>
                            <input type="email" class="form-control" id="project-title" name="project-title"
                                placeholder="Enter the title of your project ...">
                        </div>
                        <div class="col-md-8 my-3"  data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                            <label for="used-skills" class="form-label  ms-3 ">Used Skills</label>
                            <textarea class="form-control" id="used-skills" name="used-skills"
                                placeholder="Enter the skills you used in the project ..."></textarea>
                        </div>
                        <div class="col-md-8 my-3"  data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                            <label for="project-link" class="form-label  ms-3 ">Review Link</label>
                            <input type="url" class="form-control" id="project-link" name="project-link"
                                placeholder="URL">
                        </div>
                    </div>

                    <div class="col-lg-12 g-5 d-flex justify-content-end" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                        <button class="btn discard py-2 px-3 me-3 transition-all" type="button"
                            onclick="discardChanges()">Discard</button>
                        <button class="btn save transition-all" type="submit" onclick="saveChanges()">Save Changes</button>

                    </div>


                </form>
            </div>
        </section>
    </main>
    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> --}}
    <script src="{{ asset('Front/JS/edit-profile.js') }}"></script>
</body>

</html>
