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
        <form action="{{ route('profile.edit') }}" method="POST" class="row g-5 needs-validation" enctype="multipart/form-data">
            @csrf

            @method('PATCH')
            <!-- User Name -->
            <div class="col-md-5 username" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <label for="name" class="form-label ms-3 f-18">User name</label>
                <input type="text" class="form-control" id="username" name="name" value="{{ old('name') }}">
            </div>

            <!-- Job Title -->
            <div class="col-md-5 jobtitle" data-aos="fade-right" data-aos-duration="700" data-aos-delay="400">
                <label for="jobtitle" class="form-label ms-3 f-18">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="{{ old('jobtitle') }}">
            </div>

            <!-- Bio -->
            <div class="col-md-8 bio" data-aos="fade-right" data-aos-duration="700" data-aos-delay="500">
                <label for="bio" class="form-label ms-3 f-18">Bio</label>
                <textarea class="form-control" id="bio" name="biography" rows="5">{{ old('bio') }}</textarea>
            </div>

            <!-- Email -->
            <div class="col-md-8 email" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600">
                <label for="email" class="form-label ms-3 f-18">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <!-- Contact Number -->
            <div class="col-md-8 phone" data-aos="fade-right" data-aos-duration="700" data-aos-delay="700">
                <label for="phone" class="form-label ms-3 f-18">Contact Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            </div>

            <!-- Address -->
            <div class="col-md-8 address" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                <label for="address" class="form-label ms-3 f-18">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            </div>

            <!-- Links -->
            <div class="col-md-8 links" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <label for="link" class="form-label ms-3 f-18">Links</label>
                <button type="button" class="btn m-2 transition-all" onclick="addLinkFields()">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div id="link-fields">
                    <div class="link-group mb-3">
                        <input type="text" class="form-control mb-2" name="linkedin" placeholder="URL">
                        <input type="text" class="form-control" name="link-title[]" placeholder="Title">
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="col-lg-7 skills" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <label for="skills" class="form-label ms-3 f-18">Skills</label>
                <div id="skills" class="d-flex flex-wrap gap-2 mb-3"></div>
                <div class="input-group p-1 d-block">
                    <input type="text" class="form-control d-inline-block" id="skillInput" name="skill" placeholder="Add new skill...">
                    <button type="button" class="btn add d-inline-block" onclick="addSkill()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Experience -->
            <div class="col-lg-7 experience" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <label for="experienceInput" class="form-label ms-3 f-18">Experience</label>
                <div id="experiencesList" class="d-flex flex-wrap gap-2 mb-3"></div>
                <div class="input-group p-1 d-block">
                    <input type="text" class="form-control d-inline-block" id="experienceInput" name="experience" placeholder="Add your experience...">
                    <button type="button" class="btn add d-inline-block" onclick="addExperience()">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>

            <!-- Portfolio Section -->
            <div class="portfolio">
                <!-- Image Upload -->
                <div class="col-md-8" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                    <label for="portfolio" class="form-label ms-3 f-18">Portfolio</label>
                    <div id="upload-area" class="upload-box">
                        <p>Click or drag project cover Image here to upload<br><span>or paste (CTRL+V)</span></p>
                        <input type="file" name="image" id="fileInput" accept="image/*" hidden>
                        <img id="previewImage" src="" alt="" style="display: none;" />
                    </div>
                    <button type="button" class="btn remove-image my-3 transition-all" id="removeImageBtn">Remove</button>
                </div>

                <!-- Project Title -->
                <div class="col-md-8 my-3" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                    <label for="project-title" class="form-label ms-3">Project Title</label>
                    <input type="text" class="form-control" id="project-title" name="project-title" placeholder="Enter the title of your project ...">
                </div>

                <!-- Used Skills -->
                <div class="col-md-8 my-3" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                    <label for="used-skills" class="form-label ms-3">Used Skills</label>
                    <textarea class="form-control" id="used-skills" name="used-skills" placeholder="Enter the skills you used in the project ..."></textarea>
                </div>

                <!-- Project Link -->
                <div class="col-md-8 my-3" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                    <label for="project-link" class="form-label ms-3">Review Link</label>
                    <input type="url" class="form-control" id="project-link" name="project-link" placeholder="URL">
                </div>
            </div>

            <!-- Buttons -->
            <div class="col-lg-12 g-5 d-flex justify-content-end" data-aos="fade-right" data-aos-duration="700" data-aos-delay="300">
                <button class="btn discard py-2 px-3 me-3 transition-all" type="button" onclick="discardChanges()">Discard</button>
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
