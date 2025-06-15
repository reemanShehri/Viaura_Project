/***Animation***/
AOS.init({
    offset: 120,
    duration: 800,
    easing: 'ease',
    delay: 0,
    once: false,
    mirror: true,
});

/*****Links*******/
function addLinkFields() {
    const container = document.getElementById("link-fields");

    const group = document.createElement("div");
    group.classList.add("link-group", "mb-3");

    group.innerHTML = `
      <input type="text" class="form-control mb-2" name="url[]" placeholder="URL">
      <input type="text" class="form-control" name="link-title[]" placeholder="Title">
    `;

    container.appendChild(group);
}
/********* Skills part*************/
const skillsList = document.getElementById('skillsList');
const skillInput = document.getElementById('skillInput');

// get data from localStorage for skills
let skills = JSON.parse(localStorage.getItem('skills')) || [];

// render skills
function renderSkills() {
    skillsList.innerHTML = '';
    skills.forEach((skill, index) => {
        const tag = document.createElement('div');
        tag.className = 'skill-tag p-2';
        tag.innerHTML = `${skill}<span onclick="removeSkill(${index})" class="ms-2" style="cursor: pointer;">&times;</span>`;
        skillsList.appendChild(tag);
    });
}

// add skill function
function addSkill() {
    const newSkill = skillInput.value.trim();
    if (newSkill && !skills.includes(newSkill)) {
        skills.push(newSkill);
        skillInput.value = '';
        renderSkills();
        saveSkillsToLocalStorage();
    }
}

// remove skill function
function removeSkill(index) {
    skills.splice(index, 1);
    renderSkills();
    saveSkillsToLocalStorage();
}

// save skills to localStorage
function saveSkillsToLocalStorage() {
    localStorage.setItem('skills', JSON.stringify(skills));
}

// render skills when page reloads
renderSkills();

// add skill when enter is pressed
skillInput.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        addSkill();
    }
});

/*************Experience part**********************/

const experiencesList = document.getElementById('experiencesList');
const experienceInput = document.getElementById('experienceInput');

// get data from localStorage for experiences
let experiences = JSON.parse(localStorage.getItem('experiences')) || [];

// render experiences
function renderExperiences() {
    experiencesList.innerHTML = '';
    experiences.forEach((experience, index) => {
        const tag = document.createElement('div');
        tag.className = 'experience-tag p-2';
        tag.innerHTML = `${experience}<span onclick="removeExperience(${index})" class="ms-2" style="cursor: pointer;">&times;</span>`;
        experiencesList.appendChild(tag);
    });
}

// add experience function
function addExperience() {
    const newExperience = experienceInput.value.trim();
    if (newExperience && !experiences.includes(newExperience)) {
        experiences.push(newExperience);
        experienceInput.value = '';
        renderExperiences();
        saveExperiencesToLocalStorage();
    }
}

// remove experience function
function removeExperience(index) {
    experiences.splice(index, 1);
    renderExperiences();
    saveExperiencesToLocalStorage();
}

// save experiences to localStorage
function saveExperiencesToLocalStorage() {
    localStorage.setItem('experiences', JSON.stringify(experiences));
}

// render experiences when page reloads
renderExperiences();

// add experience when enter is pressed
experienceInput.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        addExperience();
    }
});


/*******Portfolio*******/
const uploadBox = document.getElementById("upload-area");
const fileInput = document.getElementById("fileInput");
const previewImage = document.getElementById("previewImage");

// Click opens file dialog
uploadBox.addEventListener("click", () => fileInput.click());

// Handle file input change
fileInput.addEventListener("change", (e) => handleFile(e.target.files[0]));

// Drag and Drop
uploadBox.addEventListener("dragover", (e) => {
    e.preventDefault();
    uploadBox.style.borderColor = "#000";
});

uploadBox.addEventListener("dragleave", () => {
    uploadBox.style.borderColor = "#aaa";
});

uploadBox.addEventListener("drop", (e) => {
    e.preventDefault();
    uploadBox.style.borderColor = "#aaa";
    if (e.dataTransfer.files.length > 0) {
        handleFile(e.dataTransfer.files[0]);
    }
});

// Paste from clipboard
window.addEventListener("paste", (e) => {
    const items = e.clipboardData.items;
    for (let item of items) {
        if (item.type.indexOf("image") !== -1) {
            const file = item.getAsFile();
            handleFile(file);
        }
    }
});

// Handle image preview
function handleFile(file) {
    const reader = new FileReader();
    reader.onload = function (e) {
        previewImage.src = e.target.result;
        previewImage.style.display = "block";
    };
    reader.readAsDataURL(file);
}

//remove Image button
const removeImageBtn = document.getElementById("removeImageBtn");
const uploadText = document.getElementById("upload-text");


// عند الضغط على زر الحذف
removeImageBtn.addEventListener("click", function () {
    previewImage.src = "";
    previewImage.style.display = "none";
    uploadText.style.display = "block";
    this.style.display = "none";
});



// save changes & discard buttons 
function saveChanges() {
    document.getElementById('formId').submit(); // submit data 
    window.location.href = 'profile.html';
// go back to profile page
}


function discardChanges() {
    document.getElementById('formId').reset(); // reset data
    window.location.href = 'profile.html';
// go back to profile page
}
