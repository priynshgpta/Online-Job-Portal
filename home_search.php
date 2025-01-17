<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Job PortalL</title>
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
  <link rel="stylesheet" href="css/indexstyle.css ">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="images/jobportal.png" alt="" class="img-fluid" width="80px">JOB PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse fg-secondary" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recent_jobs.php">Recent Jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#jobseeker">Job Seeker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#employer">Employer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
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
                <a class="dropdown-item" href="jobseeker/register_user.php">Jobseeker</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="employer/register_emp.php">Employer</a>
              </div>
            </li>
          </div>
          
          <li class="nav-item ml-1">
            <a class="nav-link" href="jobseeker/jobseekerlogin.php"><span class="fa fa-sign-in"></span> JobSeeker Login</a>
          </li>

          <li class="nav-item ml-1">
            <a class="nav-link" href="employer/companylogin.php"><span class="fa fa-sign-in"></span> Company Login</a>
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
    <div class="container mt-5 content">
        <?php
        $keyword = $_GET['key'];
        if (empty($keyword)) {
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <p style='font-size: 20px'><strong>Oops!</strong> Please enter a search term</p>
                  </div>";
        } else {
            // Use prepared statements to prevent SQL Injection
            $stmt = $db1->prepare("SELECT * FROM jobs JOIN employer ON jobs.eid = employer.eid WHERE title LIKE ? OR employer.ename LIKE ? OR employer.profile LIKE ?");
            $searchTerm = '%' . $keyword . '%';
            $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <p style='font-size: 20px'><strong>Sorry!</strong> No jobs found matching your search, try something else</p>
                      </div>";
            } else {
                echo "<h3 style='color:green'> Search Results Matching: " . htmlspecialchars($keyword) . "</h3>";
                echo "<div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Position</th>
                                    <th>Post Date</th>
                                    <th>Candidate Profile</th>
                                </tr>
                            </thead>
                            <tbody>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row['ename']) . "</td>
                            <td>" . htmlspecialchars($row['title']) . "</td>
                            <td>" . htmlspecialchars($row['date_posted']) . "</td>
                            <td>" . htmlspecialchars($row['profile']) . "</td>
                          </tr>";
                }

                echo "    </tbody>
                        </table>
                      </div>";
            }
            $stmt->close();
        }
        ?>
    </div>

    <footer class="container-fluid text-center pt-4">
        <div class="container d-flex justify-content-center">
            <div class="row pb-1" style="color: black;">
                <div class="copyright clearfix">
                    <p>Copyright &copy; 2024 JobPortal Group. All Right Reserved</p>
                    <p>Designed and Developed by Priyanshu Gupta</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
