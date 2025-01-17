<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="icon" type="image/x-icon" href="../images/favicon.png" />
    <title>Company Login | Job Portal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
          <a class="navbar-brand" href="../index.html">Job Portal</a>  
            <ul class="nav navbar-nav">
            <li class="nav-itemf">
          <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../index.html">Recent Jobs</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../index.html">Job Seeker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html">Employer</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="../index.html">Contact Us</a>
        </li>
          
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <section>
    <center><h3><a href="../index.html">Job Portal</span></a></h3></center>   
      <hr>
      <div class="container">
     
        <div class="row">
          <div class="col-md-4 col-md-offset-4 well">
          <h3 class="text-center">Company Login</h3>
            <form method="post" action="companylogindtb.php">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
              </div>
              <div class="form-group">
                <a href="">Forgot Password</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(function() {
        $("#successMessage:visible").fadeOut(2000);
      });
    </script>
<hr>
<script src="js/search.js"></script>
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