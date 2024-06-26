{{-- @extends('user.layouts.app')
@section('meta_title',' Registeration')
@section('content')

@include('user.includes.nav') --}}
<html ng-app="application">
<head>
    <base href="/representative/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta name="description" content="">
    <meta name="author" content="">

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/datepicker@0.6.5/dist/datepicker.min.js"></script>

<link rel="stylesheet" href="/path/to/styles.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">  
 <div class="wrapper d-flex">
    <div class="sidebar">
        <div class="user-info">
            @if(Auth::check())
                <span>Welcome, {{ Auth::user()->name }}</span>
            @endif
        </div>
        <ul>
            <a href="/dash">
                <li><i class="fas fa-home"></i>Journal panel</li>
            </a>
            <a href="/">
                <li><i class="fas fa-users"></i>Go to home</li>
            </a>
          
            <a href="/data">
                <li><i class="fas fa-users"></i>Add My Journal</li>
            </a>
            <a href="/callforpaper">
                <li><i class="fas fa-users"></i>Call For Paper</li>
            </a>
        </ul>
    </div>
</div>

  

<style>
    
    
.body{
	background: #eee;
}
.wrapper{
	position: relative;
} 
 .user-info {
            padding: 20px;
            /*background-color: #336699;*/
            color: white;
            text-align: center;
            font-size: 14px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
             font-family: 'Poppins', sans-serif;
            
        }

      
        .user-info span {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

       
        .user-info span.name {
            font-size: 24px;
        }


        .user-info .welcome-icon {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .sidebar{
	position: fixed;
	width: 200px;
	height: 100%;
	background:#1E90FF;
	left: 0; 

}
.sidebar li {
        list-style: none;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px;
        background-color: #f9f9f9;
    }
    .btn.btn-info {
        color: black;
        background-color: white;
    }
    .sidebar li a {
        text-decoration: none;
        color: #333;
    }

    .sidebar li a:hover {
        background-color: #336699;
        color: white;
    }
    .form-container {
    width: auto;
    max-width: 800px;
    margin-left: 140px; /* Set margin to desired fixed value */
    margin-right: 140px; /* Set margin to desired fixed value */
    padding: 20px;
    background-color: #FFEFD5;
    border-radius: 15px;
    height: auto;
}

 
            .form-label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  text-align: center;
            }
           
        
        

.custom-input {  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
    
      } 
      
      .text-input{  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
 
    
      }
      .chosen-select {
        width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
  }
  .background-image {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
}

.my-form {
    position: relative;
    z-index: 1;
    
}
 
            body {
                margin: 0;
    padding: 0;
   
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
                background-color:#fd5f00!important;
                margin-left: 200px;
            }
            .col-sm-2.control-label.ng-binding {
    font-weight: bold;
  }
  .printedVersion {
    display: flex;
    align-items: center;
  }
  
  .radio-group-label {
    margin-right: 10px; 
  }
  .text-input{
    height: 200px;
  }
  h2{
    text-align: center;
}
.radio-container {
  display: inline-block;

 
  align-items: center;
 
}


h6{
    margin-left: 320px;
}


.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul a {
    text-decoration: none;
    color: black;
}

.sidebar ul a:hover {
    text-decoration: none;
   background-color: rgb(239, 83, 83);
}

.sidebar ul li:hover {
    border-bottom: none;
}








input[type="file"] {
  display: block;
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="radio"],
 {
  display: inline-block;
  vertical-align: middle;
}



        .upload-sign {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 700px;
  height: 150px;
  border: 4px beige;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 80px;
}


.upload-sign svg {
  width: 350px;
  height: 48px;
  fill: #888;
  margin-right: 10px;
}


.upload-sign span {
  font-size: 16px;
  color:red;
}

.upload-sign:hover {
  border-color: #999;
}

.upload-sign:hover svg,
.upload-sign:hover span {
  color: #999;
}
.radio-container input[type="radio"],
.radio-container label {
  display: inline-block;
  vertical-align: middle;
}

.radio-container label {
  margin-right: 10px;
}

.custom-input-wrapper {
  position: relative;
}

.custom-input {
  padding-right: 15px;
}
.button{
    text-align: right;
}
.h6,{
    text-align: center;
}
.container-home {
    display: flex;
    align-items: center;
    background-color: midnightblue;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    width:auto;
   
    margin-left: 0px;
    border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
   border-bottom-left-radius: 15px;
   align-items: center;
   
    justify-content: flex-start;

}




.logout-container {
    position: absolute;
     right: 10px;
}


.links-home {
    flex: 0 0 auto; 
}


.links-home a {
    color: white;
    margin-top: 20px;
    
}
.logo-home {
    margin-left:5px;
}
.upload-label {
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-image: url("path_to_zigzag_background_image"); */
        background-size: cover;
        width: 100px;
        height: 100px;
    }
 

.home-button:hover,
.logout-button:hover {
    background-color:;
}
.hamburger-menu {
            display: none;
        }

        .hamburger-icon {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center; 
  width: 40px;
  height: 40px;
  cursor: pointer;
  margin: 15px;
  position: relative; 
}

.line {
  width: 100%;
  height: 4px; 
  background-color:white;
  border-radius: 2px;
  transition: all 0.3s ease; 
}
       
        .hamburger-icon:before,
        .hamburger-icon:after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #000;
        }

        .hamburger-icon.active:before {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger-icon.active:after {
            transform: translateY(-8px) rotate(-45deg);
        }

        .menu-items {
            display: none;
        }

        .hamburger-menu.active .menu-items {
            display: block;
        }

        .menu-items {
            list-style: none;
            margin: 0;
            padding: 20px;
            background-color: #1E90FF;
            z-index: 9998;
        }

        .menu-items li {
            margin: 10px 0;
        }

        .menu-items li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        .menu-items li a:hover {
            background-color: #336699;
            border-radius: 5px;
        }

        .close-button {
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            width: 30px;
            height: 30px;
            background-color: #1E90FF;
            position: absolute;
            top: 15px;
            right: 15px;
            border-radius: 50%;
            margin-left:35px;
        }

        .close-button i {
            color: white;
            font-size: 20px;
        }
 @media (max-width: 768px) {

  

            .hamburger-menu {
                display: block;
                margin-left:-170px;
            }

            .sidebar {
                display: none;
            }

            .mobile-menu-toggle {
                position: fixed;
                top: 1px;
                left: 1px;
                z-index: 9999;
            }

            .menu-items {
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                width: 30%;
                background-color: #1E90FF;
                padding: 20px;
                z-index: 9998;
                display: none;
            }

            .menu-items.active {
                display: block;
            }

            .menu-items li {
                margin: 10px 0;
            }

            .menu-items li a {
                color: #fff; 
                text-decoration: none;
                font-size: 18px;
                display: block;
                padding: 5px;
            }

            .menu-items li a:hover {
                background-color: #336699;
                border-radius: 5px;
            }

          

            .container-home {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
             margin-left:-200px;
             width:auto;
            }

            .logo-home img {
                /*width: 90px;*/
                margin-left: -240px;
                margin-top: 35px;
            }

            .links-home {
                margin-top: -30px;
              
            }

            .links-home a {
                margin-top: 0;
            }

            .hamburger-menu.active .hamburger-icon {
                display: none;
            }

            .hamburger-menu.active .close-button {
                display: flex;
            }
     .form-container {
        width:auto; 
         height:auto;
          padding:10px;
margin-right:0px;
       margin-left:-190px;
      
    }

   
    .col-lg-6 {
        width:auto;  
    }
  .image-sign {
      margin-left:-300px;
    width:auto;
    height: auto;
  }
  .cover{
      margin-left:155px;
      font-size:24px;
  }
   
 }

  

            </style>
           
          
    </head>

   
   
    

<body>
    
   
    <div class="container-home">
        <div class="logo-home">
            <img src="{{asset('user/img/101.jpg')}}" alt="Logo" class="logo"width="150px">
        </div>
        <div class="logout-container">
            <a href="/logout" class="btn btn-info">Logout</a>
        </div>
        
       
        
    </div>
    </div><div class="mobile-menu-toggle">
            <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
        </div>
        <div class="hamburger-menu">
            <div class="hamburger-icon">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
             
            <ul class="menu-items">
                 <div class="close-button">
                <i class="fas fa-times"></i>
            </div>
                <li><a href="/dash"><i class="fas fa-home"></i>Journal panel</a></li>
                <li><a href="/"><i class="fas fa-users"></i>Go to home</a></li>
                <li><a href="/contactus"><i class="fas fa-users"></i>Contact</a></li>
                <li><a href="/data"><i class="fas fa-users"></i>Add My Journal</a></li>
                <li><a href="/callforpaper"><i class="fas fa-users"></i>Call For Paper</a></li>
            </ul>
           
        </div>
    



    <div class="background-image"></div>
<div class="form-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
             </div>
        </div>
    </div>
    <form action="{{ route('user.data.store') }}" method="post" id="registrationForms" enctype="multipart/form-data">
        @csrf
    <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Journal title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="titleor" required>

            </div>
        </div>
                   <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">English title</label>
                        <div class="col-sm-10">
                        <input type="text" class="custom-input"name="titleEn" required></div></div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" >Full title</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="titlefu" required ></div>
                        </div>
                   
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Short title</label>
                        <div class="col-sm-10">
                        <input type="text" class="custom-input"name="titlesh" required ></div></div>
                     <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Alternative title</label>
                                <div class="col-sm-10">
                                <input type="text" class="custom-input" name="titleal" required></div></div>
                               
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Journal description</label>
                        <div class="col-sm-10">
                        <input type="textarea" class="text-input" name="description" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="journal.description" maxlength="4096" required></textarea></div>
                        </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">English description</label>
                        <div class="col-sm-10">
                        <input type="textarea " class="text-input" name="descriptionEn" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-model="journal.descriptionEn" maxlength="4096" required></textarea></div>
                    
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Journal type</label>
                            <div class="col-sm-10">
                                <select name="characterJournal" id="characterJournal" class="chosen-select form-control" onchange="toggleInputVisibility()" required>
                                    <option value="" disabled selected>Select option</option>
                                    <option value="scientific">scientific</option>
                                    <option value="popularscience">popular science</option>
                                    <option value="other">other</option> 
                                </select>
                                <input type="text" id="otherJournalType" class="form-control mt-2" placeholder="Your journal type" style="display: none;">
                            </div>
                        </div>
                        
                       
                        
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Main scientific profile</label>
                            <div class="col-sm-10">
                                <select name="mainprofile" id="mainprofile" class="chosen-select form-control" onchange="toggleInputVisibility(this)" required>
                                    <option value="" disabled selected>Select option</option>
                        <option value="agriBioSciences">Agricultural and Biological Sciences (all)</option>
                        <option value="artsHumanities">Arts and Humanities (all)</option>
                        <option value="biochemGeneticsMolecularBio">Biochemistry, Genetics and Molecular Biology (all)</option>
                        <option value="businessManagementAccounting">Business, Management and Accounting (all)</option>
                        <option value="chemicalEngineering">Chemical Engineering (all)</option>
                        <option value="chemistry">Chemistry (all)</option>
                        <option value="computerScience">Computer Science (all)</option>
                        <option value="decisionSciences">Decision Sciences (all)</option>
                        <option value="dentistry">Dentistry (all)</option>
                        <option value="earthPlanetarySciences">Earth and Planetary Sciences (all)</option>
                        <option value="economicsFinance">Economics, Econometrics and Finance (all)</option>
                        <option value="energy">Energy (all)</option>
                        <option value="engineering">Engineering (all)</option>
                        <option value="environmentalScience">Environmental Science (all)</option>
                        <option value="healthProfessions">Health Professions (all)</option>
                        <option value="immunoMicrobio">Immunology and Microbiology (all)</option>
                        <option value="materialsScience">Materials Science (all)</option>
                        <option value="mathematics">Mathematics (all)</option>
                        <option value="medicine">Medicine (all)</option>
                        <option value="multidisciplinary">Multidisciplinary</option>
                        <option value="neuroscience">Neuroscience (all)</option>
                        <option value="nursing">Nursing (all)</option>
                        <option value="pharmToxicologyPharmaceutics">Pharmacology, Toxicology and Pharmaceutics (all)</option>
                        <option value="physicsAstronomy">Physics and Astronomy (all)</option>
                        <option value="psychology">Psychology (all)</option>
                        <option value="socialSciences">Social Sciences (all)</option>
                        <option value="veterinary">Veterinary (all)</option>
                        <option value="other">Other</option> 

                    </select>
                    <input type="text" id="MainProfile" name="mainprofile" class="form-control mt-2" placeholder="Enter custom field" style="display: none;" >
                   
                </div>
            </div>
                   <div>
                    <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Scientific profile</label>
    <div class="col-sm-10">
        <select name="scienceprofile" id="scienceprofile" class="chosen-select form-control" onchange="toggleInputVisibility(this)" required>
        
    
            <option value="" disabled selected>Select option</option>
                        <option value="agriBioSciences">Agricultural and Biological Sciences (all)</option>
                        <option value="artsHumanities">Arts and Humanities (all)</option>
                        <option value="biochemGeneticsMolecularBio">Biochemistry, Genetics and Molecular Biology (all)</option>
                        <option value="businessManagementAccounting">Business, Management and Accounting (all)</option>
                        <option value="chemicalEngineering">Chemical Engineering (all)</option>
                        <option value="chemistry">Chemistry (all)</option>
                        <option value="computerScience">Computer Science (all)</option>
                        <option value="decisionSciences">Decision Sciences (all)</option>
                        <option value="dentistry">Dentistry (all)</option>
                        <option value="earthPlanetarySciences">Earth and Planetary Sciences (all)</option>
                        <option value="economicsFinance">Economics, Econometrics and Finance (all)</option>
                        <option value="energy">Energy (all)</option>
                        <option value="engineering">Engineering (all)</option>
                        <option value="environmentalScience">Environmental Science (all)</option>
                        <option value="healthProfessions">Health Professions (all)</option>
                        <option value="immunoMicrobio">Immunology and Microbiology (all)</option>
                        <option value="materialsScience">Materials Science (all)</option>
                        <option value="mathematics">Mathematics (all)</option>
                        <option value="medicine">Medicine (all)</option>
                        <option value="multidisciplinary">Multidisciplinary</option>
                        <option value="neuroscience">Neuroscience (all)</option>
                        <option value="nursing">Nursing (all)</option>
                        <option value="pharmToxicologyPharmaceutics">Pharmacology, Toxicology and Pharmaceutics (all)</option>
                        <option value="physicsAstronomy">Physics and Astronomy (all)</option>
                        <option value="psychology">Psychology (all)</option>
                        <option value="socialSciences">Social Sciences (all)</option>
                        <option value="veterinary">Veterinary (all)</option>
                        <option value="other">Other</option>
                      </select>
                      <input type="text" id="otherScienceProfile" name="scienceprofile" class="form-control mt-2" placeholder="Enter custom field" style="display: none;" >
                    </div>
                    </div> 
                    </div>
                    
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Web of Science (main)</label>
                        <div class="col-sm-10">
                            <select name="webofscience" id="webofscience" class="chosen-select form-control" onchange="toggleInputVisibility(this)" required>
        
    
                                <option value="" disabled selected>Select option</option>
            <option value="Acoustics">Acoustics</option>
            <option value="Aerospace Engineering &amp; Technology">Aerospace Engineering &amp; Technology</option>
            <option value="Agricultural Economics &amp; Policy">Agricultural Economics &amp; Policy</option>
            <option value="Agricultural Engineering">Agricultural Engineering</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Agriculture, Dairy &amp; Animal Science">Agriculture, Dairy &amp; Animal Science</option>
            <option value="Agriculture, Multidisciplinary">Agriculture, Multidisciplinary</option>
            <option value="Agriculture, Soil Science">Agriculture, Soil Science</option>
            <option value="Agronomy">Agronomy</option>
            <option value="Allergy">Allergy</option>
            <option value="Anatomy &amp; Morphology">Anatomy &amp; Morphology</option>
            <option value="Andrology">Andrology</option>
            <option value="Anesthesiology">Anesthesiology</option>
            <option value="Anthropology">Anthropology</option>
            <option value="Applied Linguistics">Applied Linguistics</option>
            <option value="Archaeology">Archaeology</option>
            <option value="Architecture">Architecture</option>
            <option value="Area Studies">Area Studies</option>
            <option value="Art">Art</option>
            <option value="Asian Studies">Asian Studies</option>
            <option value="Astronomy &amp; Astrophysics">Astronomy &amp; Astrophysics</option>
            <option value="Audiology &amp; Speech-Language Pathology">Audiology &amp; Speech-Language Pathology</option>
            <option value="Automation &amp; Control Systems">Automation &amp; Control Systems</option>
            <option value="Behavioral Sciences">Behavioral Sciences</option>
            <option value="Biochemical Research Methods">Biochemical Research Methods</option>
            <option value="Biochemistry &amp; Molecular Biology">Biochemistry &amp; Molecular Biology</option>
            <option value="Biodiversity Conservation">Biodiversity Conservation</option>
            <option value="Biology">Biology</option>
            <option value="Biology, Miscellaneous">Biology, Miscellaneous</option>
            <option value="Biophysics">Biophysics</option>
            <option value="Biotechnology &amp; Applied Microbiology">Biotechnology &amp; Applied Microbiology</option>
            <option value="Business">Business</option>
            <option value="Business, Finance">Business, Finance</option>
            <option value="Cardiac &amp; Cardiovascular Systems">Cardiac &amp; Cardiovascular Systems</option>
            <option value="Cell &amp; Tissue Engineering">Cell &amp; Tissue Engineering</option>
            <option value="Cell Biology">Cell Biology</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Chemistry, Analytical">Chemistry, Analytical</option>
            <option value="Chemistry, Applied">Chemistry, Applied</option>
            <option value="Chemistry, Inorganic &amp; Nuclear">Chemistry, Inorganic &amp; Nuclear</option>
             <option value="Chemistry, Physical">Chemistry, Physical</option>
                <option value="Classics">Classics</option>
                <option value="Clinical Neurology">Clinical Neurology</option>
                <option value="Communication">Communication</option>
                <option value="Computer Science, Artificial Intelligence">Computer Science, Artificial Intelligence</option>
                <option value="Computer Science, Cybernetics">Computer Science, Cybernetics</option>
                <option value="Computer Science, Hardware & Architecture">Computer Science, Hardware & Architecture</option>
                <option value="Computer Science, Information Systems">Computer Science, Information Systems</option>
                <option value="Computer Science, Interdisciplinary Applications">Computer Science, Interdisciplinary Applications</option>
                <option value="Computer Science, Software Engineering">Computer Science, Software Engineering</option>
                <option value="Computer Science, Software, Graphics, Programming">Computer Science, Software, Graphics, Programming</option>
                <option value="Computer Science, Theory & Methods">Computer Science, Theory & Methods</option>
                <option value="Construction & Building Technology">Construction & Building Technology</option>
                <option value="Criminology & Penology">Criminology & Penology</option>
                <option value="Critical Care Medicine">Critical Care Medicine</option>
                <option value="Crystallography">Crystallography</option>
                <option value="Cultural Studies">Cultural Studies</option>
                <option value="Dance">Dance</option>
                <option value="Demography">Demography</option>
                <option value="Dentistry, Oral Surgery & Medicine">Dentistry, Oral Surgery & Medicine</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Dermatology & Venereal Diseases">Dermatology & Venereal Diseases</option>
                <option value="Development Studies">Development Studies</option>
                <option value="Developmental Biology">Developmental Biology</option>
                <option value="Ecology">Ecology</option>
                <option value="Economics">Economics</option>
                <option value="Education & Educational Research">Education & Educational Research</option>
                <option value="Education, Scientific Disciplines">Education, Scientific Disciplines</option>
                <option value="Education, Special">Education, Special</option>
                <option value="Electrochemistry">Electrochemistry</option>
                <option value="Emergency Medicine">Emergency Medicine</option>
                <option value="Emergency Medicine & Critical Care">Emergency Medicine & Critical Care</option>
                <option value="Endocrinology & Metabolism">Endocrinology & Metabolism</option>
                <option value="Energy & Fuels">Energy & Fuels</option>
                <option value="Engineering">Engineering</option>
                <option value="Engineering, Aerospace">Engineering, Aerospace</option>
                <option value="Engineering, Biomedical">Engineering, Biomedical</option>
                <option value="Engineering, Chemical">Engineering, Chemical</option>
                <option value="Engineering, Civil">Engineering, Civil</option>
                <option value="Engineering, Electrical & Electronic">Engineering, Electrical & Electronic</option>
                <option value="Engineering, Environmental">Engineering, Environmental</option>
                <option value="Engineering, Geological">Engineering, Geological</option>
                <option value="Engineering, Industrial">Engineering, Industrial</option>
                <option value="Engineering, Manufacturing">Engineering, Manufacturing</option>
                <option value="Engineering">Engineering</option>
                <option value="Marine Engineering">Marine Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Multidisciplinary Engineering">Multidisciplinary Engineering</option>
                <option value="Ocean Engineering">Ocean Engineering</option>
                <option value="Petroleum Engineering">Petroleum Engineering</option>
                <option value="Entomology">Entomology</option>
                <option value="Environmental Sciences">Environmental Sciences</option>
                <option value="Environmental Studies">Environmental Studies</option>
                <option value="Ergonomics">Ergonomics</option>
                <option value="Ethics">Ethics</option>
                <option value="Ethnic Studies">Ethnic Studies</option>
                <option value="Evolutionary Biology">Evolutionary Biology</option>
                <option value="Family Studies">Family Studies</option>
                <option value="Film, Radio, Television">Film, Radio, Television</option>
                <option value="Fisheries">Fisheries</option>
                <option value="Folklore">Folklore</option>
                <option value="Food Science & Technology">Food Science & Technology</option>
                <option value="Forestry">Forestry</option>
                <option value="Gastroenterology & Hepatology">Gastroenterology & Hepatology</option>
                <option value="Genetics & Heredity">Genetics & Heredity</option>
                <option value="Geochemistry & Geophysics">Geochemistry & Geophysics</option>
                <option value="Geography">Geography</option>
                <option value="Geography, Physical">Geography, Physical</option>
                <option value="Geology">Geology</option>
                <option value="Geosciences, Interdisciplinary">Geosciences, Interdisciplinary</option>
                <option value="Geosciences, Multidisciplinary">Geosciences, Multidisciplinary</option>
                <option value="Geriatrics & Gerontology">Geriatrics & Gerontology</option>
                <option value="Gerontology">Gerontology</option>
                <option value="Green & Sustainable Science & Technology">Green & Sustainable Science & Technology</option>
                <option value="Health Care Sciences & Services">Health Care Sciences & Services</option>
                <option value="Health Policy & Services">Health Policy & Services</option>
                <option value="Hematology">Hematology</option>
                <option value="History">History</option>
                <option value="History & Philosophy of Science">History & Philosophy of Science</option>
                <option value="History of Social Sciences">History of Social Sciences</option>
                <option value="Horticulture">Horticulture</option>
                <option value="Hospitality, Leisure, Sport & Tourism">Hospitality, Leisure, Sport & Tourism</option>
                <option value="Humanities, Multidisciplinary">Humanities, Multidisciplinary</option>
                <option value="Imaging Science & Photographic Technology">Imaging Science & Photographic Technology</option>
                <option value="Immunology">Immunology</option>
                <option value="Industrial Relations & Labor">Industrial Relations & Labor</option>
                <option value="Infectious Diseases">Infectious Diseases</option>
                <option value="Information Science & Library Science">Information Science & Library Science</option>
                <option value="Instruments & Instrumentation">Instruments & Instrumentation</option>
                <option value="Int J Press/Political Science">Int J Press/Political Science</option>
                <option value="Integrative & Complementary Medicine">Integrative & Complementary Medicine</option>
                <option value="International Relations">International Relations</option>
                <option value="Language & Linguistics">Language & Linguistics</option>
                <option value="Law">Law</option>
                <option value="Limnology">Limnology</option>
                <option value="Linguistics">Linguistics</option>
                <option value="Literary Reviews">Literary Reviews</option>
                <option value="Literary Theory & Criticism">Literary Theory & Criticism</option>
                <option value="Literature">Literature</option>
    <option value="Literature, African, Australian, Canadian">Literature, African, Australian, Canadian</option>
    <option value="Literature, American">Literature, American</option>
    <option value="Literature, British Isles">Literature, British Isles</option>
    <option value="Literature, German, Dutch, Scandinavian">Literature, German, Dutch, Scandinavian</option>
    <option value="Literature, Romance">Literature, Romance</option>
    <option value="Literature, Slavic">Literature, Slavic</option>
    <option value="Logic">Logic</option>
    <option value="Management">Management</option>
    <option value="Marine & Freshwater Biology">Marine & Freshwater Biology</option>
    <option value="Materials Science">Materials Science</option>
    <option value="Materials Science, Biomaterials">Materials Science, Biomaterials</option>
    <option value="Materials Science, Ceramics">Materials Science, Ceramics</option>
    <option value="Materials Science, Characterization & Testing">Materials Science, Characterization & Testing</option>
    <option value="Materials Science, Coatings & Films">Materials Science, Coatings & Films</option>
    <option value="Materials Science, Composites">Materials Science, Composites</option>
    <option value="Materials Science, Multidisciplinary">Materials Science, Multidisciplinary</option>
    <option value="Materials Science, Paper & Wood">Materials Science, Paper & Wood</option>
    <option value="Materials Science, Textiles">Materials Science, Textiles</option>
    <option value="Mathematical & Computational Biology">Mathematical & Computational Biology</option>
    <option value="Mathematics">Mathematics</option>
    <option value="Mathematics, Applied">Mathematics, Applied</option>
    <option value="Mathematics, Interdisciplinary Applications">Mathematics, Interdisciplinary Applications</option>
    <option value="Mathematics, Miscellaneous">Mathematics, Miscellaneous</option>
    <option value="Mechanics">Mechanics</option>
    <option value="Medical Ethics">Medical Ethics</option>
    <option value="Medical Informatics">Medical Informatics</option>
    <option value="Medical Laboratory Technology">Medical Laboratory Technology</option>
    <option value="Medicine, General & Internal">Medicine, General & Internal</option>
    <option value="Medicine, Legal">Medicine, Legal</option>
    <option value="Medicine, Research & Experimental">Medicine, Research & Experimental</option>
    <option value="Medieval & Renaissance Studies">Medieval & Renaissance Studies</option>
    <option value="Metallurgy & Metallurgical Engineering">Metallurgy & Metallurgical Engineering</option>
    <option value="Meteorology & Atmospheric Sciences">Meteorology & Atmospheric Sciences</option>
    <option value="Microbiology">Microbiology</option>
    <option value="Microscopy">Microscopy</option>
    <option value="Mineralogy">Mineralogy</option>
    <option value="Mining & Mineral Processing">Mining & Mineral Processing</option>
    <option value="Multidisciplinary Sciences">Multidisciplinary Sciences</option>
    <option value="Music">Music</option>
    <option value="Mycology">Mycology</option>
    <option value="Nanoscience & Nanotechnology">Nanoscience & Nanotechnology</option>
    <option value="Neuroimaging">Neuroimaging</option>
    <option value="Neurosciences">Neurosciences</option>
    <option value="Nuclear Science & Technology">Nuclear Science & Technology</option>
    <option value="Nursing">Nursing</option>
    <option value="Nutrition & Dietetics">Nutrition & Dietetics</option>
    <option value="Obstetrics & Gynecology">Obstetrics & Gynecology</option>
    <option value="Oceanography">Oceanography</option>
    <option value="Oncology">Oncology</option>
    <option value="Operations Research & Management Science">Operations Research & Management Science</option>
    <option value="Ophthalmology">Ophthalmology</option>
    <option value="Optics">Optics</option>
    <option value="Ornithology">Ornithology</option>
    <option value="Orthopedics">Orthopedics</option>
    <option value="Otorhinolaryngology">Otorhinolaryngology</option>
    <option value="Paleontology">Paleontology</option>
    <option value="Parasitology">Parasitology</option>
    <option value="Pathology">Pathology</option>
    <option value="Pediatrics">Pediatrics</option>
    <option value="Peripheral Vascular Disease">Peripheral Vascular Disease</option>
    <option value="Pharmacology & Pharmacy">Pharmacology & Pharmacy</option>
    <option value="Philosophy">Philosophy</option>
    <option value="Photographic Technology">Photographic Technology</option>
    <option value="Physics">Physics</option>
    <option value="Physics, Applied">Physics, Applied</option>
    <option value="Physics, Atomic, Molecular & Chemical">Physics, Atomic, Molecular & Chemical</option>
    <option value="Physics, Condensed Matter">Physics, Condensed Matter</option>
    <option value="Physics, Fluids & Plasmas">Physics, Fluids & Plasmas</option>
    <option value="Physics, Mathematical">Physics, Mathematical</option>
    <option value="Physics, Multidisciplinary">Physics, Multidisciplinary</option>
    <option value="Physics, Nuclear">Physics, Nuclear</option>
    <option value="Physics, Particles & Fields">Physics, Particles & Fields</option>
    <option value="Physiology">Physiology</option>
    <option value="Planning & Development">Planning & Development</option>
    <option value="Plant Sciences">Plant Sciences</option>
    <option value="Poetry">Poetry</option>
    <option value="Political Science">Political Science</option>
    <option value="Polymer Science">Polymer Science</option>
    <option value="Primary Health Care">Primary Health Care</option>
    <option value="Psychiatry">Psychiatry</option>
    <option value="Psychology">Psychology</option>
    <option value="Psychology, Applied">Psychology, Applied</option>
    <option value="Psychology, Biological">Psychology, Biological</option>
    <option value="Psychology, Clinical">Psychology, Clinical</option>
    <option value="Psychology, Developmental">Psychology, Developmental</option>
    <option value="Psychology, Educational">Psychology, Educational</option>
    <option value="Psychology, Experimental">Psychology, Experimental</option>
    <option value="Psychology, Mathematical">Psychology, Mathematical</option>
    <option value="Psychology, Multidisciplinary">Psychology, Multidisciplinary</option>
    <option value="Psychology, Psychoanalysis">Psychology, Psychoanalysis</option>
    <option value="Psychology, Social">Psychology, Social</option>
    <option value="Public Administration">Public Administration</option>
    <option value="Public, Environmental & Occupational Health">Public, Environmental & Occupational Health</option>
    <option value="Quantum Science & Technology">Quantum Science & Technology</option>
    <option value="Radiology, Nuclear Medicine & Medical Imaging">Radiology, Nuclear Medicine & Medical Imaging</option>
    <option value="Regional & Urban Planning">Regional & Urban Planning</option>
    <option value="Rehabilitation">Rehabilitation</option>
    <option value="Religion">Religion</option>
    <option value="Remote Sensing">Remote Sensing</option>
    <option value="Reproductive Biology">Reproductive Biology</option>
    <option value="Respiratory System">Respiratory System</option>
    <option value="Rheumatology">Rheumatology</option>
    <option value="Robotics">Robotics</option>
    <option value="Robotics & Automatic Control">Robotics & Automatic Control</option>
    <option value="Social Issues">Social Issues</option>
    <option value="Social Sciences, Biomedical">Social Sciences, Biomedical</option>
    <option value="Social Sciences, Interdisciplinary">Social Sciences, Interdisciplinary</option>
    <option value="Social Sciences, Mathematical Methods">Social Sciences, Mathematical Methods</option>
    <option value="Social Work">Social Work</option>
    <option value="Sociology">Sociology</option>
    <option value="Soil Science">Soil Science</option>
    <option value="Spectroscopy">Spectroscopy</option>
    <option value="Sport Sciences">Sport Sciences</option>
    <option value="Statistics & Probability">Statistics & Probability</option>
    <option value="Substance Abuse">Substance Abuse</option>
    <option value="Surgery">Surgery</option>
    <option value="Telecommunications">Telecommunications</option>
    <option value="Theater">Theater</option> 
    <option value="other">Other</option>
        </select> 
        <input type="text" id="otherWebOfScience" name="webofscience" class="form-control mt-2" placeholder="Enter custom field" style="display: none;" >
   
         </div> 
</div>      
         
                       


<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Country</label>   
    <div class="col-sm-10">   
    <select name="country" class="chosen-select form-control ng-pristine ng-valid ng-touched" tabindex="4" ng-model="journal.country" required>
        <option value="" disabled selected></option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
            <option value="Cook Islands">Cook Islands</option>
           <option value="CI">Cote d'Ivoire</option>
          <option value="HR">Croatia</option>
          <option value="CU">Cuba</option>
          <option value="CY">Cyprus</option>
          <option value="CZ">Czech Republic</option>
          <option value="DK">Denmark</option>
          <option value="DJ">Djibouti</option>
          <option value="DM">Dominica</option>
          <option value="DO">Dominican Republic</option>
          <option value="EC">Ecuador</option>
          <option value="EG">Egypt</option>
          <option value="SV">El Salvador</option>
          <option value="GQ">Equatorial Guinea</option>
          <option value="ER">Eritrea</option>
          <option value="EE">Estonia</option>
          <option value="ET">Ethiopia</option>
          <option value="FK">Falkland Islands (Malvinas)</option>
          <option value="FO">Faroe Islands</option>
          <option value="FJ">Fiji</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="GF">French Guiana</option>
          <option value="PF">French Polynesia</option>
          <option value="TF">French Southern Territories</option>
          <option value="MU">Mauritius</option>
          <option value="YT">Mayotte</option>
          <option value="MX">Mexico</option>
          <option value="FM">Micronesia, Federated States of</option>
          <option value="MD">Moldova</option>
          <option value="MC">Monaco</option>
          <option value="MN">Mongolia</option>
          <option value="ME">Montenegro</option>
          <option value="MS">Montserrat</option>
          <option value="MA">Morocco</option>
          <option value="MZ">Mozambique</option>
          <option value="MM">Myanmar</option>
          <option value="NA">Namibia</option>
          <option value="NR">Nauru</option>
          <option value="NP">Nepal</option>
          <option value="NL">Netherlands</option>
          <option value="AN">Netherlands Antilles</option>
          <option value="NC">New Caledonia</option>
          <option value="NZ">New Zealand</option>
          <option value="NI">Nicaragua</option>
          <option value="NE">Niger</option>
          <option value="NG">Nigeria</option>
          <option value="NU">Niue</option>
          <option value="NF">Norfolk Island</option>
          <option value="MP">Northern Mariana Islands</option>
          <option value="NO">Norway</option>
          <option value="OM">Oman</option>
          <option value="PK">Pakistan</option>
          <option value="PW">Palau</option>
          <option value="PS">Palestinian Territory, Occupied</option>
          <option value="PA">Panama</option>
          <option value="PG">Papua New Guinea</option>
          <option value="PY">Paraguay</option>
          <option value="PE">Peru</option>
          <option value="PH">Philippines</option>
          <option value="PN">Pitcairn</option>
          <option value="PL">Poland</option>
          <option value="PT">Portugal</option>
          <option value="PR">Puerto Rico</option>
          <option value="QA">Qatar</option>
          <option value="RE">Reunion</option>
          <option value="RO">Romania</option>
          <option value="RU">Russian Federation</option>
          <option value="RW">Rwanda</option>
          <option value="SH">Saint Helena</option>
          <option value="KN">Saint Kitts and Nevis</option>
          <option value="LC">Saint Lucia</option>
          <option value="PM">Saint Pierre and Miquelon</option>
          <option value="VC">Saint Vincent and the Grenadines</option>
          <option value="WS">Samoa</option>
          <option value="SM">San Marino</option>
          <option value="ST">Sao Tome and Principe</option>
          <option value="SA">Saudi Arabia</option>
          <option value="SN">Senegal</option>
          <option value="RS">Serbia</option>
          <option value="SC">Seychelles</option>
          <option value="SL">Sierra Leone</option>
          <option value="SG">Singapore</option>
          <option value="SK">Slovakia</option>
          <option value="SI">Slovenia</option>
          <option value="SB">Solomon Islands</option>
          <option value="SO">Somalia</option>
          <option value="ZA">South Africa</option>
          <option value="GS">South Georgia and the South Sandwich Islands</option>
          <option value="KR">South Korea</option>
          <option value="ES">Spain</option>
          <option value="LK">Sri Lanka</option>
          <option value="SD">Sudan</option>
          <option value="SR">Suriname</option>
          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syrian Arab Republic">Syrian Arab Republic</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Timor-leste">Timor-leste</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="United States">United States</option>
          <option value="United States Minor outlying Islands">United States Minor outlying Islands</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Vatican City State">Vatican City State</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Viet Nam">Viet Nam</option>
          <option value="Virgin Islands, British">Virgin Islands, British</option>
          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
    </select>
        </div>
</div>




   
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Publication language</label>
        <div class="col-sm-10">
        <input type="text" class="custom-input"name="language" required ></div></div>
   
            

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">ISSN</label>
            <div class="col-sm-10">
                <input type="text" name="issn" class="custom-input" maxlength="9" oninput="formatISSN(this)" required>
            </div>
        </div>
       
    
        <script>
            // Function to update the display element when a date is selected
            function updateDisplay(inputElement, displayElementId) {
                const displayElement = document.getElementById(displayElementId);
                displayElement.textContent = inputElement.value;
            }
    
            // Attach event listeners to update the display elements when a date is selected
            const submissionDeadlineInput = document.getElementById('submission-deadline-input');
            submissionDeadlineInput.addEventListener('input', function() {
                updateDisplay(submissionDeadlineInput, 'submission-deadline-display');
            });
    
            const notificationDueInput = document.getElementById('notification-due-input');
            notificationDueInput.addEventListener('input', function() {
                updateDisplay(notificationDueInput, 'notification-due-display');
            });
    
            const finalVersionDueInput = document.getElementById('final-version-due-input');
            finalVersionDueInput.addEventListener('input', function() {
                updateDisplay(finalVersionDueInput, 'final-version-due-display');
            });
        </script>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">DOI</label>
        <div class="col-sm-10">
        <input type="text" class="custom-input"name="doi" required></div></div>
   
    <div class="mb-3 row">
       
        <label class="col-sm-2 col-form-label">Journal Creative Commons articles license</label>
        <div class="col-sm-10">
            <select name="rapidReview" class="chosen-select form-control ng-pristine ng-valid ng-touched" ng-model="journal.journalLicense" required>
                <option value="" label="Choose" class="ng-binding">Choose</option>
                <option value="NONE" class="ng-binding">None</option>
                <option value="CC_BY" class="ng-binding">Yes, under the CC-BY license</option>
                <option value="CC_BY_SA" class="ng-binding">Yes, under the CC-BY SA license</option>
                <option value="CC_BY_ND" class="ng-binding">Yes, under the CC-BY ND license</option>
                <option value="CC_BY_NC" class="ng-binding">Yes, under the CC-BY NC license</option>
                <option value="CC_BY_NC_SA" class="ng-binding">Yes, under the CC-BY NC SA license</option>
                <option value="CC_BY_NC_ND" class="ng-binding">Yes, under the CC-BY NC ND license</option>
            </select>
            
        </div>
        </div>
    
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Indexing Databases</label>
        <div class="col-sm-10">
        <input type="text" name="doibase" class="custom-input" ng-model="journal.doi" required></div></div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Website</label>
            <div class="col-sm-10">
            <input type="text" class="custom-input"name="website" required ></div></div>
    

 
            <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Printed version</label>
    <div class="col-sm-8">
    
    <div class="radio-container" style="margin-left:0px;">
      <input type="radio" id="printedVersion_1" ng-value="" name="printedVersion" ng-model="journal.printedVersion" class="ng-pristine ng-untouched ng-valid" value="true" required>
      <label for="printedVersion_1" class="ng-binding">Yes</label>
    </div>
    
    <div class="radio-container" style="margin-left:100px;">
      <input type="radio" id="printedVersion_2" ng-value="" name="printedVersion" ng-model="journal.printedVersion" class="ng-pristine ng-untouched ng-valid" value="false" required>
      <label for="printedVersion_2" class="ng-binding">No</label>
    </div>
    
    <div class="radio-container" style="margin-left:80px;">
      <input type="radio" id="printedVersion_3" ng-value="" name="printedVersion" ng-model="journal.printedVersion" class="ng-pristine ng-untouched ng-valid" required>
      <label for="printedVersion_3" class="ng-binding">No data</label>
    </div>
</div>
   

<div class="mb-3 row">

    <label class="col-sm-2 col-form-label">Electronic version</label>
    <div class="col-sm-8">
     <div class="radio-container" style="margin-left: 5px;">
            <input type="radio" id="electronicVersion_1" ng-value="" name="electronicVersion" ng-model="journal.electronicVersion" class="ng-pristine ng-untouched ng-valid" value="true" required>
            <label for="electronicVersion_1" class="ng-binding"> Yes </label>
        </div>
        <div class="radio-container" style="margin-left:100px;">
            <input type="radio" id="electronicVersion_2" ng-value="" name="electronicVersion" ng-model="journal.electronicVersion" class="ng-pristine ng-untouched ng-valid" value="false" required>
            <label for="electronicVersion_2" class="ng-binding"> No </label>
        </div>
        <div class="radio-container" style="margin-left:80px;">
            <input type="radio" id="electronicVersion_3" ng-value="" name="electronicVersion" ng-model="journal.electronicVersion" class="ng-pristine ng-untouched ng-valid" required>
            <label for="electronicVersion_3" class="ng-binding"> No data </label>
        </div>
 </div>

<div class="mb-3 row">
  
    <label class="col-sm-2 col-form-label">Free full texts</label>
  
    <div class="col-sm-8">
                                  <div class="radio-container"  style="margin-left:10px;">
                                   
            <input type="radio" id="freeFullText_1" ng-value="" name="freeFullText" ng-model="journal.freeFullText" class="ng-pristine ng-untouched ng-valid" value="true" required>
            <label for="freeFullText_1" class="ng-binding"> Yes </label>
        </div>
        <div class="radio-container"  style="margin-left:100px;">
            <input type="radio" id="freeFullText_2" ng-value="" name="freeFullText" ng-model="journal.freeFullText" class="ng-pristine ng-untouched ng-valid" value="false" required>
            <label for="freeFullText_2" class="ng-binding"> No </label>
        </div>
        <div class="radio-container"  style="margin-left:80px;">
            <input type="radio" id="freeFullText_3" ng-value="" name="freeFullText" ng-model="journal.freeFullText" class="ng-pristine ng-untouched ng-valid" required>
            <label for="freeFullText_3" class="ng-binding"> No data </label>
        </div>
    </div>
</div>
    <br>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Published from</label>
        <div class="col-sm-10">
        <input type="number" min="1600" max="2023" name="firstIssueYear" class="custom-input" ng-model="journal.firstIssueYear" required></div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Publication frequency</label>
        <div class="col-sm-10">
            <select name="freq" class="chosen-select form-control ng-pristine ng-valid ng-touched" tabindex="4" ng-model="journal.country" required>
                <option value="" disabled selected></option>
            <option value="biweekly" >biweekly</option>
            <option value="bimonthly" >bimonthly</option>
            <option value="online">online</option>
            <option value="half-yearly" >half-yearly</option>
            <option value="irregular" >irregular</option>
            <option value="weekly" >weekly</option>
            <option value="quarterly" >quarterly</option>
            <option value="monthly" >monthly</option>
            <option value="annals" >annals</option>
        </select>
    </div><!-- end ngIf: currentLang !== 'pl' -->
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Circulation</label>
        <div class="col-sm-10">
        <input type="number" min="1" max="10000000" name="circulation" class="chosen-select form-control ng-pristine ng-untouched ng-valid" ng-model="journal.circulation" required></div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Review procedure model</label>
            <div class="col-sm-10">
            <select name="reviewProcedure" class="chosen-select form-control ng-pristine ng-untouched ng-valid" required>
            
            <option value="" disabled selected>Select a category</option>
                    <option value="DOUBLE_BLIND_REVIEW" >Double blind review</option>
                    <option value="SINGLE_BLIND_REVIEW" >Single blind review</option>
                    <option value="OPEN_PEER_REVIEW" >Open peer review</option>
                </select>
            </div>
        </div>
        
           
    
    <h2 style="margin-bottom: 30px" class="ng-binding">Manuscript procedure time</h2>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">The average time during which the preliminary assessment of manuscripts is conducted.</label>
        <div class="col-sm-8">
            <input type="number" name="initial_assessment_time"class="form-control ng-pristine ng-untouched ng-valid" ng-model="journal.avgManuscriptTimes.review" ng-change="validateReviewTime()" onkeypress="return isIntNumberKey(event)" required>
        <label class="col-sm-4 control-label-left ng-binding">(Days) </label>
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">The average time during which the reviews of manuscripts are conducted.</label>
        <div class="col-sm-8">
        <input type="number" name="review_time" class="form-control ng-valid ng-dirty ng-valid-number ng-touched" ng-model="journal.avgManuscriptTimes.initialAssessment" ng-change="validateInitialAssessmentTime()" onkeypress="return isIntNumberKey(event)" required>
            <label class="col-sm-4 control-label-left ng-binding">(Days) </label>
        </div>
        </div>
    <div class="mb-3 row">
        <label class="col-sm-4 col-form-label">The average time in which the article is published</label>
        <div class="col-sm-8">
        <input type="number"name="published_time" class="form-control ng-pristine ng-untouched ng-valid" ng-model="journal.avgManuscriptTimes.review" ng-change="validateReviewTime()" onkeypress="return isIntNumberKey(event)" required>
        <label class="col-sm-4 control-label-left ng-binding">(Days) </label>
    </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Journal Cover</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="image" name="image" required ></div>
      <br>
      <br>
      <br>
     
        <div class="button">
            <button type="submit" class="btn btn-primary">Save</button>
            <span style="margin: 0 10px;"></span> <!-- Adjust the margin as needed -->
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
  
    <br>
                                              
    </form>
                                        
                    
                                        
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           
            

        

                </div>
    <div ui-view></div>

</body>
</html>
<style>
    .button {
      display: flex;
      justify-content: center; /* Center buttons horizontally */
    }
    </style>



<script>
       
  const uploadLabel = document.querySelector('a');
   const fileInput = document.querySelector('#image');
                                        
                                                 uploadLabel.addEventListener('click', function() {
                                                         fileInput.click();
                                                   });
                                          
    function openFileUploader() {
  var fileInput = document.getElementById('image');
  fileInput.click();
}
function formatISSN(input) {
    
    var digits = input.value.replace(/\D/g, '');

    
    digits = digits.slice(0, 8);

   
    if (digits.length > 4) {
        digits = digits.slice(0, 4) + '-' + digits.slice(4);
    }

    /
    input.value = digits;
}





        </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ session('success') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearSessionAndCloseModal()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#successModal').modal('show');
        });

        function clearSessionAndCloseModal() {
         
            @php session()->forget('success') @endphp;
            
            $('#successModal').modal('hide');
        }
    </script>
@endif

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.hamburger-menu').click(function() {
        $(this).toggleClass('active');
        $('.menu-items').toggleClass('active');
      });
      
    });
  </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otherWebOfScienceInput = document.getElementById("otherWebOfScience");
        const webOfScienceSelect = document.getElementById("webofscience");

        // Event listener for the select dropdown
        webOfScienceSelect.addEventListener("change", function() {
            const selectedValue = webOfScienceSelect.value;
            
            // Check if the selected value is "other"
            if (selectedValue === "other") {
                otherWebOfScienceInput.style.display = "block";
                otherWebOfScienceInput.value = ""; // Clear existing value
            } else {
                otherWebOfScienceInput.style.display = "none";
                otherWebOfScienceInput.value = selectedValue; // Fill input with selected value
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otherMainProfileInput = document.getElementById("MainProfile");
        const mainProfileSelect = document.getElementById("mainprofile");

        // Event listener for the select dropdown
        mainProfileSelect.addEventListener("change", function() {
            const selectedValue = mainProfileSelect.value;
            
            // Check if the selected value is "other"
            if (selectedValue === "other") {
                otherMainProfileInput.style.display = "block";
                otherMainProfileInput.value = ""; // Clear existing value
            } else {
                otherMainProfileInput.style.display = "none";
                otherMainProfileInput.value = selectedValue; // Fill input with selected value
            }
        });

        // Initial check for "other" option on page load
        if (mainProfileSelect.value === "other") {
            otherMainProfileInput.style.display = "block";
        }
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const otherScienceProfileInput = document.getElementById("otherScienceProfile");
        const scienceProfileSelect = document.getElementById("scienceprofile");

        // Event listener for the select dropdown
        scienceProfileSelect.addEventListener("change", function() {
            const selectedValue = scienceProfileSelect.value;
            
            // Check if the selected value is "other"
            if (selectedValue === "other") {
                otherScienceProfileInput.style.display = "block";
                otherScienceProfileInput.value = ""; // Clear existing value
            } else {
                otherScienceProfileInput.style.display = "none";
                otherScienceProfileInput.value = selectedValue; // Fill input with selected value
            }
        });
    });
</script>

       <script>
        // JavaScript to handle the "Other" option and custom input
        const journalTypeSelect = document.querySelector("[name='characterJournal']");
        const otherJournalTypeInput = document.getElementById("otherJournalType");
    
        journalTypeSelect.addEventListener("change", function() {
            if (this.value === "other") {
                otherJournalTypeInput.style.display = "block";
            } else {
                otherJournalTypeInput.style.display = "none";
            }
        });
    </script>






















