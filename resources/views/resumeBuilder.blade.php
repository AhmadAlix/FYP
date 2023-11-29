<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    @vite(['resources/css/cv_style.css'])
    <title>Document</title>
</head>
<body>
<div class="container " id="cv-form">
    <h1 class="text-center ">Resume Generator</h1>
<p class="text-center secondHeading" >Career Catalyst</p>
<div class="row mt-5">
    <div class="col-md-6">
<h3 class="">Personal Information</h3>
<div class="form-group ">
    <label for="nameField">Your Name</label>
<input type="text" id="nameField" placeholder="Enter here" class="form-control">

</div>
<div class="form-group">
    <label for="contactField">Your Conatct</label>
<input type="text" id="contactField" placeholder="Enter here" class="form-control">
</div>

<div class="form-group mt-2">
    <label for="addressField">Your Address</label>
<textarea id="addressField" placeholder="Enter here" class="form-control"></textarea>
</div>
<div class="form-group mt-2">
    <label for=""> Select Your Photo</label>
   <input id="imgField" type="file" class="form-control"/> 
</div>
<label class="mt-3">Important Links</label>
<div class="form-group">
    <label for="linField">LinkdIn</label>
<input type="text" id="linField" placeholder="Enter here" class="form-control">
</div>
<div class="form-group ">
    <label for="gitField">GitHub</label>
<input type="text" id="gitField" placeholder="Enter here" class="form-control">
</div>
    </div>

        <div class="col-md-6">
    <h3>Profesional Information</h3>
    <div class="form-group">
        <label for="">Objective</label>
    <textarea id="objectiveField" placeholder="Enter here" class="form-control"></textarea>
    </div>
    <div class="form-group mt-2"id="we">
        <label for="">Work Experience</label>
    <textarea  placeholder="Enter here" class="form-control weField"></textarea>
    <div class="container text-center mt-2" id="weAddButton">
        <button onclick="addNewWEField()" class="btn btn-primary btn-sm"> Add</button>
        </div>    
</div>
   
    <div class="form-group mt-2" id="aq">
        <label for="">Academic Qualification </label>
    <textarea  placeholder="Enter here" class="form-control eqField"></textarea>
    <div class="container text-center mt-2" id="aqAddButton">
        <button onclick="addNewAQField()" class="btn btn-primary btn-sm"> Add</button>
        </div></div>
</div>
</div>   
<div class="container text-center mt-5">
    <button onclick="generateCV()" class="btn btn-primary btn-lg">Generate CV</button>
        </div> 
</div>    
<div class="container mt-5" id="cv-template">
    <div class="row">
        <div class="col-md-4 text-center py-5 background">
     <img src="profile-img.jpg" alt="" class="img-fluid myimg" id="imgTemplate"/>
     <div class="container">
        <p id="nameT1"></p>
        <p id="contactT"></p>
        <p id="addressT"></p>
        <hr/>
        <p id="linkd" href="#1"></p>
        <p id="git" href="#1"> </p>
     </div>       
        </div>
    <div class="col-md-8 py-3">
        <h1 id="nameT2" class="text-center" style="font-weight: 980">
        </h1>
     <div class="card nt-4 ">
        <div class="card-header background">
            <h3>Objective</h3>

        </div>
        <div class="card-body">
            <p id="ObjectiveT"></p>
        </div>
     </div> 
      <div class="card mt-4">
        <div class="card-header background">
            <h3>Work Experience</h3>
        </div>
        <div class="card-body">
        <ul id="weT">
        <li></li>
        <li></li>
        <li></li>
         </ul>
        </div>
      </div> 
      <div class="card mt-4">
        <div class="card-header background">
            <h3>Academic Qualification</h3>
        </div>
        <div class="card-body">
        <ul id="aqT">
        <li></li>
        <li></li>
        <li></li>
         </ul>
        </div>
      </div> 
     <div class="container mt-3 text-center">
        <button onclick="printCV()" class="btn background"> Print Cv</button>
     </div>
    </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="cv_script.js"></script>
</body>
</html>