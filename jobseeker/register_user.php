<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker | Registration</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/indexstyle.css ">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="../index.html"><img src="../images/jobportal.png" alt="jobportal" class="img-fluid" width="80px">JOB PORTAL</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse fg-secondary" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Recent Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Job Seeker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Employer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Contact Us</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto mt-5 mt-lg-0">
          <div class="nav-item active">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-user"></span> Register
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="register_user.php">Jobseeker</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../employer/register_emp.php">Employer</a>
              </div>
            </li>
          </div>

          <li class="nav-item ml-1">
            <a class="nav-link" href="jobseekerlogin.php"><span class="fa fa-sign-in"></span> JobSeeker Login</a>
          </li>

          <li class="nav-item ml-1">
            <a class="nav-link" href="../employer/companylogin.php"><span class="fa fa-sign-in"></span> Company Login</a>
          </li>

        </ul>


      </form>
    </div>
  </nav>
  <style>
    body {
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    h1, h3, h5 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }
    p {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }
    .navbar-brand {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }
    .card-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }
    .card-text {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }
    .content {
        padding: 20px;
        flex: 1;
    }
    footer {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        background-color: #cdd6eb;
        padding: 20px 0;
    }
    </style>
</head>

<body>
	
  <div class="container mt-4">
    <center><h3><a href="../index.html">Job Portal</span></a></h3></center>      
      <hr>
        <form method="POST" action="process_user.php">
          
          <center>
            
          <table class="table" style="width:60%">
          <tr>
  <h5>Your Login Details</h5></tr>
      <tr>
        <th scope="col" width="30%">Enter your Email ID: <td>
          <input type="text" id="useremail" name="useremail" class="form-control"placeholder="Enter E-mail" required></td></th>
      </tr>
    <tr>
    <th scope="col">Create new Password:</th>
    <td>
      <input type="password" id="pass1" class="form-control" name="pass1" placeholder="New Password" required></td>
    </tr>   
  </table>
  <table class="table" style="width:60%">
  <tr>
  <h5>Your Contact Information</h5></tr>
  <tr>
        <th scope="col" width="30%">Mention your Full Name: <td>
          <input type="text" id="uname" name="uname" class="form-control"placeholder="Your Name" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Where are you currently located?: <td>
          <input type="text" id="city" name="city" class="form-control"placeholder="Your City" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Enter your Mobile number: <td>
          <input type="text" id="mobno" name="mobno" class="form-control"placeholder="Mobile number" required></td></th>
      </tr>
</table>
<table class="table" style="width:60%">
  <tr>
  <h5>Your Current Employment Details</h5></tr>
  <tr>
        <th scope="col" width="30%">What are your Key Skills: <td>
          <input type="text" id="skills" name="skills" class="form-control"placeholder="skills" required></td></th>
      </tr>
  <tr>
        <th scope="col" width="30%">How much work experience do you have: <td>
        <div class="col-sm-12">
            <select name="experience" style="cursor:pointer" class="form-control" id="experience" required>
                <option value="">select </option>
                <option value="1">1 year </option>
                <option value="2">2 year </option>
                <option value="3">3 year </option>
                <option value="4">4 year </option>
                <option value="5">5 year </option>
                <option value="6">6 year </option>
                <option value="7">7 year </option>
                <option value="8">8 year </option>
                <option value="9+">9+ year </option>
         </select>
    </div></td></th>
      </tr>
      
    
</table>
<table class="table" style="width:60%">
  <tr>
  <h5>Your Educational Qualifications</h5></tr>
  <tr>
        <th scope="col" width="30%">Your Basic Education:: <td>
        <div class="col-sm-12"> <select name="ugcourse" style ="cursor:pointer" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
                <option value="B.A">B.A</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BDS">BDS</option>
                <option value="BHM">BHM</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="MBBS">MBBS</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select>
        </div></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Your Masters Education: <td>
        <div class="col-sm-12"> <select name="pgcourse" id="pgcourse"  style="cursor:pointer" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
                                <option value="CA">CA</option>
                                <option value="CS">CS</option>
                                <option value="ICWA (CMA)">ICWA (CMA)</option>
                                <option value="Integrated PG">Integrated PG</option>
                                <option value="LLM">LLM</option>
                                <option value="M.A">M.A</option>
                                <option value="M.Arch">M.Arch</option>
                                <option value="M.Com">M.Com</option>
                                <option value="M.Ed">M.Ed</option>
                                <option value="M.Pharma">M.Pharma</option>
                                <option value="M.Sc">M.Sc</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="MBA/PGDM">MBA/PGDM</option>
                                <option value="MCA">MCA</option>
                                <option value="MS">MS</option>
                                <option value="PG Diploma">PG Diploma</option>
                                <option value="MVSC">MVSC</option>
                                <option value="MCM">MCM</option>
                                <option value="Other">Other</option>
                            </select>
                          </td></th>
      </tr>
      
<tr><td></td>
      <td><input type="submit" class="btn btn-success" value="Submit"/>
      <input type="reset" class="btn btn-danger" value="Reset"/>
      <h6><a href="../index.html" class="btn btn-outline-primary mt-2" >Back to Previous Page</a></h6>
           </td>
</tr>
</table>

</center>

  </form>
  </div>
<hr>
<script src="js/search.js"></script>
</body>
    <footer class="container-fluid text-center pt-4" style="
    background-color: #cdd6eb;">
	<div class="container d-flex justify-content-center" >
		<div class="row pb-1" style="color: black; ">

			<div class="copyright clearfix">
				<p>Copyright &copy; 2024 JobPortal Group. All Right Reserved</p>

				<p> Designed and Developed by Priyanshu Gupta</p>

			</div>

		</div>
	</div>
</footer>
</html>