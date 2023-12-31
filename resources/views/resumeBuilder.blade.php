<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    @vite(['resources/css/cv_style.css'])
    <title>Resume Builder</title>
</head>
<body>
<nav class = "navbar bg-dark">
<div class="container">
<div class = "navbar-content">
<div class = "brand-and-toggler">
<a href = "" class = "navbar-brand">
    <img src="{{asset('cv_logo.png')}}" alt = "" class = "navbar-brand-icon">
        <span class="navbar-brand-text text-white">Career Catalyst</span>
</a>

</div>
</div>
</div>
</nav>

<section id = "about-sc" class = "">
<div class = "container">
<div class = "about-cnt">
<form action="" class="cv-form" id = "cv-form">
<div class = "cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>about section</h3>
    </div>
    <div class = "cv-form-row cv-form-row-about">
        <div class = "cols-3">
            <div class = "form-elem">
                <label for = "" class = "form-label">First Name</label>
                <input name = "firstname" type = "text" class = "form-control firstname" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Middle Name <span class = "opt-text">(optional)</span></label>
                <input name = "middlename" type = "text" class = "form-control middlename" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Last Name</label>
                <input name = "lastname" type = "text" class = "form-control lastname" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
        </div>

        <div class="cols-3">
            <div class = "form-elem">
                <label for = "" class = "form-label">Your Image</label>
                <input name = "image" type = "file" class = "form-control image" id = "" accept = "image/*" onchange="previewImage()">
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Designation</label>
                <input name = "designation" type = "text" class = "form-control designation" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Address</label>
                <input name = "address" type = "text" class = "form-control address" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
        </div>

        <div class = "cols-3">
            <div class = "form-elem">
                <label for = "" class = "form-label">Email</label>
                <input name = "email" type = "text" class = "form-control email" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Phone No:</label>
                <input name = "phoneno" type = "text" class = "form-control phoneno" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
            <div class = "form-elem">
                <label for = "" class = "form-label">Summary</label>
                <input name = "summary" type = "text" class = "form-control summary" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                <span class="form-text"></span>
            </div>
        </div>
    </div>
</div>

<div class="cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>achievements</h3>
    </div>

    <div class = "row-separator repeater">
        <div class = "repeater" data-repeater-list = "group-a">
            <div data-repeater-item>
                <div class = "cv-form-row cv-form-row-achievement">
                    <div class = "cols-2">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Title</label>
                            <input name = "achieve_title" type = "text" class = "form-control achieve_title" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Description</label>
                            <input name = "achieve_description" type = "text" class = "form-control achieve_description" id = "" onkeyup="generateCV()" placeholder="Enter Here">
                            <span class="form-text"></span>
                        </div>
                    </div>
                    <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                </div>
            </div>
        </div>
        <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
    </div>
</div>

<div class="cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>experience</h3>
    </div>

    <div class = "row-separator repeater">
        <div class = "repeater" data-repeater-list = "group-b">
            <div data-repeater-item>
                <div class = "cv-form-row cv-form-row-experience">
                    <div class = "cols-3">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Title</label>
                            <input name = "exp_title" type = "text" class = "form-control exp_title" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Company / Organization</label>
                            <input name = "exp_organization" type = "text" class = "form-control exp_organization" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Location</label>
                            <input name = "exp_location" type = "text" class = "form-control exp_location" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                    </div>

                    <div class = "cols-3">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Start Date</label>
                            <input name = "exp_start_date" type = "date" class = "form-control exp_start_date" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">End Date</label>
                            <input name = "exp_end_date" type = "date" class = "form-control exp_end_date" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Description</label>
                            <input name = "exp_description" type = "text" class = "form-control exp_description" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                    </div>

                    <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                </div>
            </div>
        </div>
        <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
    </div>
</div>

<div class="cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>education</h3>
    </div>

    <div class = "row-separator repeater">
        <div class = "repeater" data-repeater-list = "group-c">
            <div data-repeater-item>
                <div class = "cv-form-row cv-form-row-experience">
                    <div class = "cols-3">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">School</label>
                            <input name = "edu_school" type = "text" class = "form-control edu_school" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Degree</label>
                            <input name = "edu_degree" type = "text" class = "form-control edu_degree" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">City</label>
                            <input name = "edu_city" type = "text" class = "form-control edu_city" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                    </div>

                    <div class = "cols-3">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Start Date</label>
                            <input name = "edu_start_date" type = "date" class = "form-control edu_start_date" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">End Date</label>
                            <input name = "edu_graduation_date" type = "date" class = "form-control edu_graduation_date" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Description</label>
                            <input name = "edu_description" type = "text" class = "form-control edu_description" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                    </div>

                    <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                </div>
            </div>
        </div>
        <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
    </div>
</div>

<div class="cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>projects</h3>
    </div>

    <div class = "row-separator repeater">
        <div class = "repeater" data-repeater-list = "group-d">
            <div data-repeater-item>
                <div class = "cv-form-row cv-form-row-experience">
                    <div class = "cols-3">
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Project Name</label>
                            <input name = "proj_title" type = "text" class = "form-control proj_title" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Project link</label>
                            <input name = "proj_link" type = "text" class = "form-control proj_link" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                        <div class = "form-elem">
                            <label for = "" class = "form-label">Description</label>
                            <input name = "proj_description" type = "text" class = "form-control proj_description" id = "" onkeyup="generateCV()">
                            <span class="form-text"></span>
                        </div>
                    </div>
                    <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                </div>
            </div>
        </div>
        <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn">+</button>
    </div>
</div>

<div class="cv-form-blk">
    <div class = "cv-form-row-title">
        <h3>skills</h3>
    </div>

    <div class = "row-separator repeater">
        <div class = "repeater" data-repeater-list = "group-e">
            <div data-repeater-item>
                <div class = "cv-form-row cv-form-row-skills">
                    <div class = "form-elem">
                        <label for = "" class = "form-label">Skill</label>
                        <input name = "skill" type = "text" class = "form-control skill" id = "" onkeyup="generateCV()">
                        <span class="form-text"></span>
                    </div>
                    
                    <button data-repeater-delete type = "button" class = "repeater-remove-btn">-</button>
                </div>
            </div>
        </div>
        <button type = "button" data-repeater-create value = "Add" class = "repeater-add-btn text-center" >+</button>
    </div>
    
</div>
</form>
</div>
</div>
</section>

<section id = "preview-sc" class = "print_area">
<div class = "container">
<div class = "preview-cnt">
<div class = "preview-cnt-l bg-green text-white">
<div class = "preview-blk">
    <div class = "preview-image">
        <img src = "" alt = "" id = "image_dsp"> 
    </div>
    <div class = "preview-item preview-item-name">
        <span class = "preview-item-val fw-6" id = "fullname_dsp"></span>
    </div>
    <div class = "preview-item">
        <span class = "preview-item-val text-uppercase fw-6 ls-1" id = "designation_dsp"></span>
    </div>
</div>

<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>about</h3>
    </div>
    <div class = "preview-blk-list">
        <div class = "preview-item">
            <span class = "preview-item-val" id = "phoneno_dsp"></span>
        </div>
        <div class = "preview-item">
            <span class = "preview-item-val" id = "email_dsp"></span>
        </div>
        <div class = "preview-item">
            <span class = "preview-item-val" id = "address_dsp"></span>
        </div>
        <div class = "preview-item">
            <span class = "preview-item-val" id = "summary_dsp"></span>
        </div>
    </div>
</div>

<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>skills</h3>
    </div>
    <div class = "skills-items preview-blk-list" id = "skills_dsp">
        <!-- skills list here -->
    </div>
</div>
</div>

<div class = "preview-cnt-r bg-white">
<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>Achievements</h3>
    </div>
    <div class = "achievements-items preview-blk-list" id = "achievements_dsp"></div>
</div>

<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>educations</h3>
    </div>
    <div class = "educations-items preview-blk-list" id = "educations_dsp"></div>
</div>

<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>experiences</h3>
    </div>
    <div class = "experiences-items preview-blk-list" id = "experiences_dsp"></div>
</div>


<div class = "preview-blk">
    <div class = "preview-blk-title">
        <h3>projects</h3>
    </div>
    
    <div class = "projects-items preview-blk-list" id = "projects_dsp"></div>
    
</div>

</div>
</div>

</div>
</section>

<section class = "print-btn-sc text-center">
<div class = "container">
<button type = "button" class = "print-btn btn btn-primary" onclick="printCV()">Print CV</button>
</div>
</section>




<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<!-- jquery repeater cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js" integrity="sha512-bZAXvpVfp1+9AUHQzekEZaXclsgSlAeEnMJ6LfFAvjqYUVZfcuVXeQoN5LhD7Uw0Jy4NCY9q3kbdEXbwhZUmUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- custom js -->
<script>
    // form repeater
$(document).ready(function(){
    $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {
            'text-input': ''
        },
        show:function(){
            $(this).slideDown();
        },
        hide: function(deleteElement){
            $(this).slideUp(deleteElement);
            setTimeout(() => {
                generateCV();
            }, 500);
        },
        isFirstItemUndeletable: true
    })
})
</script>
<!-- app js -->
<script>
    // regex for validation

const strRegex =  /^[a-zA-Z\s]*$/; // containing only letters
const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
/* supports following number formats - (123) 456-7890, (123)456-7890, 123-456-7890, 123.456.7890, 1234567890, +31636363634, 075-63546725 */
const digitRegex = /^\d+$/;

const mainForm = document.getElementById('cv-form');
const validType = {
    TEXT: 'text',
    TEXT_EMP: 'text_emp',
    EMAIL: 'email',
    DIGIT: 'digit',
    PHONENO: 'phoneno',
    ANY: 'any',
}

// user inputs elements
let firstnameElem = mainForm.firstname,
    middlenameElem = mainForm.middlename,
    lastnameElem = mainForm.lastname,
    imageElem = mainForm.image,
    designationElem = mainForm.designation,
    addressElem = mainForm.address,
    emailElem = mainForm.email,
    phonenoElem = mainForm.phoneno,
    summaryElem = mainForm.summary;

// display elements
let nameDsp = document.getElementById('fullname_dsp'),
    imageDsp = document.getElementById('image_dsp'),
    phonenoDsp = document.getElementById('phoneno_dsp'),
    emailDsp = document.getElementById('email_dsp'),
    addressDsp = document.getElementById('address_dsp'),
    designationDsp = document.getElementById('designation_dsp'),
    summaryDsp = document.getElementById('summary_dsp'),
    projectsDsp = document.getElementById('projects_dsp'),
    achievementsDsp = document.getElementById('achievements_dsp'),
    skillsDsp = document.getElementById('skills_dsp'),
    educationsDsp = document.getElementById('educations_dsp'),
    experiencesDsp = document.getElementById('experiences_dsp');

// first value is for the attributes and second one passes the nodelists
const fetchValues = (attrs, ...nodeLists) => {
    let elemsAttrsCount = nodeLists.length;
    let elemsDataCount = nodeLists[0].length;
    let tempDataArr = [];

    // first loop deals with the no of repeaters value
    for(let i = 0; i < elemsDataCount; i++){
        let dataObj = {}; // creating an empty object to fill the data
        // second loop fetches the data for each repeaters value or attributes 
        for(let j = 0; j < elemsAttrsCount; j++){
            // setting the key name for the object and fill it with data
            dataObj[`${attrs[j]}`] = nodeLists[j][i].value;
        }
        tempDataArr.push(dataObj);
    }

    return tempDataArr;
}

const getUserInputs = () => {

    // achivements 
    let achievementsTitleElem = document.querySelectorAll('.achieve_title'),
    achievementsDescriptionElem = document.querySelectorAll('.achieve_description');

    // experiences
    let expTitleElem = document.querySelectorAll('.exp_title'),
    expOrganizationElem = document.querySelectorAll('.exp_organization'),
    expLocationElem = document.querySelectorAll('.exp_location'),
    expStartDateElem = document.querySelectorAll('.exp_start_date'),
    expEndDateElem = document.querySelectorAll('.exp_end_date'),
    expDescriptionElem = document.querySelectorAll('.exp_description');

    // education
    let eduSchoolElem = document.querySelectorAll('.edu_school'),
    eduDegreeElem = document.querySelectorAll('.edu_degree'),
    eduCityElem = document.querySelectorAll('.edu_city'),
    eduStartDateElem = document.querySelectorAll('.edu_start_date'),
    eduGraduationDateElem = document.querySelectorAll('.edu_graduation_date'),
    eduDescriptionElem = document.querySelectorAll('.edu_description');

    let projTitleElem = document.querySelectorAll('.proj_title'),
    projLinkElem = document.querySelectorAll('.proj_link'),
    projDescriptionElem = document.querySelectorAll('.proj_description');

    let skillElem = document.querySelectorAll('.skill');

    // event listeners for form validation
    firstnameElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.TEXT, 'First Name'));
    middlenameElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.TEXT_EMP, 'Middle Name'));
    lastnameElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.TEXT, 'Last Name'));
    phonenoElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.PHONENO, 'Phone Number'));
    emailElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.EMAIL, 'Email'));
    addressElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Address'));
    designationElem.addEventListener('keyup', (e) => validateFormData(e.target, validType.TEXT, 'Designation'));

    achievementsTitleElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Title')));
    achievementsDescriptionElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Description')));
    expTitleElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Title')));
    expOrganizationElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Organization')));
    expLocationElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, "Location")));
    expStartDateElem.forEach(item => item.addEventListener('blur', (e) => validateFormData(e.target, validType.ANY, 'End Date')));
    expEndDateElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'End Date')));
    expDescriptionElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Description')));
    eduSchoolElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'School')));
    eduDegreeElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Degree')));
    eduCityElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'City')));
    eduStartDateElem.forEach(item => item.addEventListener('blur', (e) => validateFormData(e.target, validType.ANY, 'Start Date')));
    eduGraduationDateElem.forEach(item => item.addEventListener('blur', (e) => validateFormData(e.target, validType.ANY, 'Graduation Date')));
    eduDescriptionElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Description')));
    projTitleElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Title')));
    projLinkElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Link')));
    projDescriptionElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'Description')));
    skillElem.forEach(item => item.addEventListener('keyup', (e) => validateFormData(e.target, validType.ANY, 'skill')));

    return {
        firstname: firstnameElem.value,
        middlename: middlenameElem.value,
        lastname: lastnameElem.value,
        designation: designationElem.value,
        address: addressElem.value,
        email: emailElem.value,
        phoneno: phonenoElem.value,
        summary: summaryElem.value,
        achievements: fetchValues(['achieve_title', 'achieve_description'], achievementsTitleElem, achievementsDescriptionElem),
        experiences: fetchValues(['exp_title', 'exp_organization', 'exp_location', 'exp_start_date', 'exp_end_date', 'exp_description'], expTitleElem, expOrganizationElem, expLocationElem, expStartDateElem, expEndDateElem, expDescriptionElem),
        educations: fetchValues(['edu_school', 'edu_degree', 'edu_city', 'edu_start_date', 'edu_graduation_date', 'edu_description'], eduSchoolElem, eduDegreeElem, eduCityElem, eduStartDateElem, eduGraduationDateElem, eduDescriptionElem),
        projects: fetchValues(['proj_title', 'proj_link', 'proj_description'], projTitleElem, projLinkElem, projDescriptionElem),
        skills: fetchValues(['skill'], skillElem)
    }
};

function validateFormData(elem, elemType, elemName){
    // checking for text string and non empty string
    if(elemType == validType.TEXT){
        if(!strRegex.test(elem.value) || elem.value.trim().length == 0) addErrMsg(elem, elemName);
        else removeErrMsg(elem);
    }

    // checking for only text string
    if(elemType == validType.TEXT_EMP){
        if(!strRegex.test(elem.value)) addErrMsg(elem, elemName);
        else removeErrMsg(elem);
    }

    // checking for email
    if(elemType == validType.EMAIL){
        if(!emailRegex.test(elem.value) || elem.value.trim().length == 0) addErrMsg(elem, elemName);
        else removeErrMsg(elem);
    }

   

    // checking for only empty
    if(elemType == validType.ANY){
        if(elem.value.trim().length == 0) addErrMsg(elem, elemName);
        else removeErrMsg(elem);
    }
}

// adding the invalid text
function addErrMsg(formElem, formElemName){
    formElem.nextElementSibling.innerHTML = `${formElemName} is invalid`;
}

// removing the invalid text 
function removeErrMsg(formElem){
    formElem.nextElementSibling.innerHTML = "";
}

// show the list data
const showListData = (listData, listContainer) => {
    listContainer.innerHTML = "";
    listData.forEach(listItem => {
        let itemElem = document.createElement('div');
        itemElem.classList.add('preview-item');
        
        for(const key in listItem){
            let subItemElem = document.createElement('span');
            subItemElem.classList.add('preview-item-val');
            subItemElem.innerHTML = `${listItem[key]}`;
            itemElem.appendChild(subItemElem);
        }

        listContainer.appendChild(itemElem);
    })
}

const displayCV = (userData) => {
    nameDsp.innerHTML = userData.firstname + " " + userData.middlename + " " + userData.lastname;
    phonenoDsp.innerHTML = userData.phoneno;
    emailDsp.innerHTML = userData.email;
    addressDsp.innerHTML = userData.address;
    designationDsp.innerHTML = userData.designation;
    summaryDsp.innerHTML = userData.summary;
    showListData(userData.projects, projectsDsp);
    showListData(userData.achievements, achievementsDsp);
    showListData(userData.skills, skillsDsp);
    showListData(userData.educations, educationsDsp);
    showListData(userData.experiences, experiencesDsp);
}

// generate CV
const generateCV = () => {
    let userData = getUserInputs();
    displayCV(userData);
    console.log(userData);
}

function previewImage(){
    let oFReader = new FileReader();
    oFReader.readAsDataURL(imageElem.files[0]);
    oFReader.onload = function(ofEvent){
        imageDsp.src = ofEvent.target.result;
    }
}

// print CV
function printCV(){
    window.print();
}
</script>
</body>
</html>