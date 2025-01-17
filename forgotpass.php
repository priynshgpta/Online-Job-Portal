<?php
session_start();
include_once('config.php'); //connects to the database

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Use prepared statements to prevent SQL Injection
    $stmt = $db1->prepare("SELECT * FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    // If the count is equal to one, we will send message otherwise display an error message.
    $sentmail = 0;
    if ($count == 1) {
        $rows = $result->fetch_assoc();
        $pass = $rows['password']; // FETCHING PASS
        $to = $rows['email'];

        // Details for sending E-mail
        $from = "Job Portal";
        $url = "http://www.jobportal.com/";
        $body = "Your Password Recovery
        -----------------------------------------------
        Url : $url;
        email Details is : $to;
        Here is your password  : $pass;
        Sincerely,
        Priyansh Gupta";
        $from = "help@jobportal.com";
        $subject = "JobPortal Password recovered";
        $headers1 = "From: $from\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $headers1 .= "X-Priority: 1\r\n";
        $headers1 .= "X-MSMail-Priority: High\r\n";
        $headers1 .= "X-Mailer: Just My Server\r\n";
        if (mail($to, $subject, $body, $headers1)) {
            $sentmail = 1;
        } else {
            echo '<span style="color: #ff0000;">Failed to send email. Please try again later.</span>';
        }
    } else {
        if ($_POST['email'] != "") {
            echo '<span style="color: #ff0000;"> Not found your email in our database</span>';
        }
    }

    // If the message is sent successfully, display success message otherwise display an error message.
    if ($sentmail) {
        echo '<span style="color: #00ff00;"> Your Password Has Been Sent To Your Email Address.</span>';
    } else {
        echo '<span style="color: #ff0000;"> Cannot send password to your e-mail address. Problem with sending mail...</span>';
    }
}
?>

<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Forget Password | Job Portal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
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
        footer p {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }
    </style>
</head>
<body>
<!-- NAVIGATION BAR -->
<header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="../images/jobportal.png" alt="jobportal" class="img-fluid" width="80px">
            
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <a class="navbar-brand" href="index.html" >Job Portal</a>
            <ul class="nav navbar-nav">
            <li class="nav-itemf">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.html">Recent Jobs</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.html">Job Seeker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Employer</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="../index.html">Contact Us</a>
        </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div class="container">
        <h2>Forgot Password</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="form-group">
                <label for="email">Enter your Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Send My Password</button>
        </form>
    </div>
</body>
<footer class="container-fluid text-center pt-4" >
	<div class="container d-flex justify-content-center">
		<div class="row pb-1" style="color: black; ">
			<div class="copyright clearfix">
				<p>Copyright &copy; 2024 JobPortal Group. All Right Reserved</p>
				<p> Designed and Developed by Priyanshu Gupta</p>
			</div>
		</div>
	</div>
</footer>
</html>