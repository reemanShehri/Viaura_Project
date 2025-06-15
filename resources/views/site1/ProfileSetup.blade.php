<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Setup</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/ProfileSetup.css') }}">

</head>

<body>
    <main>
        <section class="setup">
            <div class="container position-relative">
                <div class="step active " id="step1">
                  <div class="content position-relative ">
                      <div class="row  ">
                        <div class="col-lg-6">
                            <form action="" method="post" class="d-flex flex-column ">
                                <label class="form-label f-18 fw-bold mb-3 ms-3" for="full-name">Full Name</label>
                                <input class="mb-4" type="text" id="full-name" name="full-name"
                                    placeholder="Enter your full name" required>
                                <label class="form-label f-18 fw-bold mb-3 ms-3" for="job-title">Job Title</label>
                                <input class="mb-4" type="text" id="job-title" name="job-title"
                                    placeholder="Enter your Job Title" required>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bold f-40">
                                This is your <span>spotlight!</span> Add your name and what you’re great at
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="button" class="px-4 py-2 transition-all swap next">Next <i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                  </div>
                </div>
                <div class="step " id="step2">
                   <div class="content position-relative">
                     <div class="row ">
                        <div class="col-lg-6">
                            <h2 class="fw-bold f-40 ms-5">
                                <span>Who are you</span> beyond the job title? Give us a glimpse!
                            </h2>
                        </div>
                        <div class="col-lg-6">
                            <form action="" method="post" class="d-flex flex-column ">
                                <label class="form-label f-20 fw-bold  mb-3 ms-3" for="bio">Biography</label>
                                <textarea name="bio" id="bio" rows="7" cols="60"
                                    placeholder="Tell us a bit about yourself..."></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="button" class="px-4 py-2 transition-all me-4 swap skip">Skip </i></button>
                        <button type="button" class="px-4 py-2 transition-all swap next">Next <i
                            class="fa-solid fa-angle-right"></i></button>
                    </div>
                   </div>
                </div>
                <div class="step  " id="step3">
                   <div class="content position-relative">
                     <div class="row ">
                        <div class="col-lg-6">
                            <form action="" method="post">
                                <div class="mb-4">
                                    <label for="skillInput" class="form-label fw-bold ms-3 f-18">Add Your Skills</label>
                                    <div id="skillsList" class="d-flex flex-wrap gap-2 mb-3">
                                        <!-- Skills will appear here -->
                                    </div>
                                    <div class="input-group p-1 d-block">
                                        <input type="text" id="skillInput" placeholder="Add new skill..." name="skill">
                                        <button type="button" class="btn add" onclick="addSkill()"><i
                                                class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bold f-40">
                                Show off your <span>strengths!</span> Add the skills that make you stand out
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="button" class="px-4 py-2 transition-all swap next">Next <i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                   </div>
                </div>
                <div class="step  " id="step4">
                   <div class="content position-relative">
                     <div class="row ">
                        <div class="col-lg-6">
                            <form id="profileImageForm">
                                <img id="previewImage" src="{{ asset('Front/images/default.png') }}" alt="Profile Preview"
                                    class="img-thumbnail mb-5">
                                <label for="profileImage" class="form-label f-18 fw-bold mb-3 ms-3 d-block">Upload your
                                    photo</label>
                                <input type="file" id="profileImage" accept="image/*"
                                    class="d-flex flex-wrap gap-2 mb-3" name="Profile-Image">
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bold f-40 ms-5">
                                Make it <span>personal</span>. Add a photo so we know who’s shining!
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="submit" class="px-4 py-2 transition-all me-4 swap done ">Skip </i></button>
                        <button type="submit" class="px-4 py-2 transition-all swap done">Done <i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                   </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/ProfileSetup.js') }}"></script>
</body>

</html>
