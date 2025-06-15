
/*****Step3******/
const skillsList = document.getElementById('skillsList');
const skillInput = document.getElementById('skillInput');

// get data from localstorage
let skills = JSON.parse(localStorage.getItem('skills')) || [];

// show the skills on the screen
function renderSkills() {
  skillsList.innerHTML = '';
  skills.forEach((skill, index) => {
    const tag = document.createElement('div');
    tag.className = 'skill-tag';
    tag.innerHTML = `${skill}<span onclick="removeSkill(${index})">&times;</span>`;
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

//delete skill function
function removeSkill(index) {
  skills.splice(index, 1);
  renderSkills();
  saveSkillsToLocalStorage();
}

// save in localstorage function
function saveSkillsToLocalStorage() {
  localStorage.setItem('skills', JSON.stringify(skills));
}

// when page reloaded , render skills from localStorage
renderSkills();

// add skill when enter is pressed
skillInput.addEventListener('keydown', function (event) {
  if (event.key === 'Enter') {
    event.preventDefault();
    addSkill();
  }
});



/******Step4*******/
const profileInput = document.getElementById('profileImage');
const preview = document.getElementById('previewImage');

profileInput.addEventListener('change', function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      preview.src = reader.result;
    };
    reader.readAsDataURL(file);
  }
});


/*********Swap Effect*********/
const steps = document.querySelectorAll(".step");
const buttons = document.querySelectorAll("button.swap");

let currentStep = 0;

buttons.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    if (btn.classList.contains("done")) {
      //submit and open profile.html
      window.location.href = "profile.html";
      return;
    }



    const currentStepElement = steps[currentStep];
    const inputs = currentStepElement.querySelectorAll("input, textarea");

    // if the button is next then check if all inputs are filled
    if (btn.classList.contains("next")) {
      let isValid = true;
      inputs.forEach((input) => {
        if (input.id !== "skillInput" && input.type !== "file" && input.value.trim() === "") {
          isValid = false;
          input.classList.add("border", "border-danger");
        } else {
          input.classList.remove("border", "border-danger");
        }
      });

      if (!isValid) return; // don't proceed if any field is invalid
    }

    // skip will swap anyway
    steps[currentStep].classList.remove("active");
    steps[currentStep].style.right = "150%";

    currentStep++;
    steps[currentStep].classList.add("active");
    steps[currentStep].style.right = "0";
  });
});
