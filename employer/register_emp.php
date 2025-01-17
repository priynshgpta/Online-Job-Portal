<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="../images/favicon.png" />
    <title>NEW COMPANY | Registration</title>
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
    <a class="navbar-brand" href="../index.html"><img src="../images/jobportal.png" alt="" class="img-fluid" width="80px">JOB PORTAL</a>

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
                <a class="dropdown-item" href="../jobseeker/register_user.php">Jobseeker</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="register_emp.php">Employer</a>
              </div>
            </li>
          </div>

          <li class="nav-item ml-1">
            <a class="nav-link" href="../jobseeker/jobseekerlogin.php"><span class="fa fa-sign-in"></span> JobSeeker Login</a>
          </li>

          <li class="nav-item ml-1">
            <a class="nav-link" href="companylogin.php"><span class="fa fa-sign-in"></span> Company Login</a>
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
        <form method="POST" action="process_emp.php">
          
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
  <h5>Your Company Details</h5></tr>
  <tr>
        <th scope="col" width="30%">Company Name: <td>
          <input type="text" id="uname" name="uname" class="form-control"placeholder="Enter Company Name" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Company Type: <td>
        <div class="col-sm-11 form-inline" id="comtype">
        <label class="radio-inline mr-3" style="cursor:pointer"><input type="radio" name="comtype" id="comtype" value="Company" > Company</label>
        <label class="radio-inline" style="cursor:pointer"><input type="radio" name="comtype" id="comtype" value="Consultant">&nbspConsultant</label>
  </div></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Industry: <td>
        <div class="col-sm-12"> 
                    <select name="indtype" style="cursor:pointer" id="indtype" class="form-control"  required>
                    <option selected="selected" value="">Select an Industry -</option>
                    <option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
                    <option value="Accounting/Consulting/Taxation">Accounting/Consulting/Taxation</option>
                    <option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
                    <option value="Agriculture/Dairy Technology">Agriculture/Dairy Technology</option>
                    <option value="Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants</option>
                    <option value="Animation / Gaming">Animation / Gaming</option>
                    <option value="Architectural Services/ Interior Designing">Architectural Services/ Interior Designing</option>
                    <option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
                    <option value="Banking/Financial Services/Stockbroking/Securities">Banking/Financial Services/Stockbroking/Securities</option>
                    <option value="Banking/FinancialServices/Broking">Banking/FinancialServices/Broking</option>
                    <option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
                    <option value="Brewery/Distillery">Brewery/Distillery</option>
                    <option value="Cement/Construction/Engineering/Metals/Steel/Iron">Cement/Construction/Engineering/Metals/Steel/Iron</option>
                    <option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
                    <option value="Chemicals/Petro Chemicals/Plastics">Chemicals/Petro Chemicals/Plastics</option>
                    <option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
                    <option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
                    <option value="Consumer Goods - Durables">Consumer Goods - Durables</option>
                    <option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
                    <option value="CRM/ IT Enabled Services/BPO">CRM/ IT Enabled Services/BPO</option>
                    <option value="Education/Training/Teaching">Education/Training/Teaching</option>
                    <option value="Electricals/Switchgears">Electricals/Switchgears</option>
                    <option value="Employment Firms/Recruitment Services Firms">Employment Firms/Recruitment Services Firms</option>
                    <option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
                    <option value="Export Houses/Textiles/Merchandise">Export Houses/Textiles/Merchandise</option>
                    <option value="FacilityManagement">FacilityManagement</option>
                    <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
                    <option value="FoodProcessing">FoodProcessing</option>
                    <option value="Gems and Jewellery">Gems and Jewellery</option>
                    <option value="Glass">Glass</option>
                    <option value="Government/Defence">Government/Defence</option>
                    <option value="Healthcare/Medicine">Healthcare/Medicine</option>
                    <option value="HeatVentilation/AirConditioning">HeatVentilation/AirConditioning</option>
                    <option value="Insurance">Insurance</option>
                    <option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
                    <option value="Law/Legal Firms">Law/Legal Firms</option>
                    <option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
                    <option value=">Mining">Mining</option>
                    <option value="NGO/Social Services">NGO/Social Services</option>
                    <option value="Office Automation">Office Automation</option>
                    <option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
                    <option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option>
                    <option value="Printing/Packaging">Printing/Packaging</option>
                    <option value="Publishing">Publishing</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Retailing">Retailing</option>
                    <option value="Security/Law Enforcement">Security/Law Enforcement</option>
                    <option value="Shipping/Marine">Shipping/Marine</option>
                    <option value="Software Services">Software Services</option>
                    <option value="Steel">Steel</option>
                    <option value="Strategy/ManagementConsultingFirms">Strategy/ManagementConsultingFirms</option>
                    <option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option>
                    <option value="Telecom/ISP">Telecom/ISP</option>
                        <option value="Tyres">Tyres</option>
                    <option value="WaterTreatment/WasteManagement">WaterTreatment/WasteManagement</option>
                    <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
                </select>
          </div></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Address: <td>
        <textarea id="address" rows="3" name="address" class="form-control" required 
          onblur="validate('address','addrerror',this.value)"></textarea></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Pincode: <td>
          <input type="text" id="pin" name="pin" class="form-control"placeholder="Enter Pincode" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Contact Person: <td>
          <input type="text" id="contact_person" name="contact_person" class="form-control"placeholder="Enter Executive Name" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Contact Number: <td>
          <input type="number" id="mobno" name="mobno" class="form-control"placeholder="Mobile number" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">Where are you currently located?: <td>
          <input type="text" id="city" name="city" class="form-control"placeholder="city" required></td></th>
      </tr>
      <tr>
        <th scope="col" width="30%">About Company: <td>
          <input type="text" id="about" name="about" class="form-control"placeholder="Describe your company" required></td></th>
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
<script src="../js/search.js"></script>
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