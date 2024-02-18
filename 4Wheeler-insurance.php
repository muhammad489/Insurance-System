<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
    <nav class="navbar navbar-expand-sm bg-light" ></nav>
    
        <span><a class="navbar-brand" id="1" href="#"><img src="Logo.jpg"style="width:60px;margin-top:-20px;margin-left:-5px;border-radius:40px;"></a></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav" id="para" style="margin-left:-20px;" >
            <li class="nav-item" style="padding-left: 10px;">
              <a class="nav-link" id="link1" style="color:whitesmoke;" href="Home.php"><b>Home</b></a>
            </li>
            <li class="nav-item" style="padding-left: 10px;">
              <a class="nav-link"  style="color:whitesmoke;" href="Loan EMI Calculator.php"><b>Loan EMI Calculator</b></a>
            </li>
            <li class="nav-item" style="padding-left: 10px;">
              <a class="nav-link" style="color:whitesmoke;"  href="Interest calculator.php"><b>Interest-Calculator</b></a>
            </li>  
            <li class="nav-item dropdown" style="padding-left: 10px;">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:whitesmoke;"><b>Policies</b></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Life-Insurance.php">Life Insurance</a></li>
                <li><a class="dropdown-item" href="Medical-insurance.php">Medical Insurance</a></li>
                <li><a class="dropdown-item" href="Motor-insurance.php">Motor Insurance</a></li>
                <li><a class="dropdown-item" href="Home-insurance.php">Home Insurance</a></li>
                <li><a class="dropdown-item" href="Travel-insurance.php">Travel Insurance</a></li>
              </ul>
            </li>
            <li class="nav-item" style="padding-left: 10px;">
                <a class="nav-link" href="About.php" style="color:whitesmoke;"><b>About Us</b></a>
              </li>
          </ul>
        </div>
        </div>
    </nav>
        <div class="container">
            <div>
                <h2>Four Wheeler Insurance</h2>
                <p>Car insurance is a vital shield for vehicle owners against unexpected financial burdens. In a world of<br> uncertainties on the road, car insurance provides financial protection and peace. It ensures that you<br> are prepared for accidents, damages, and liabilities that may arise.</p>
            </div>
            <div class="jumbotron" style="display:inline-block;background-color: whitesmoke;width:100%;">
            <span style="display: inline-block;">
            <h2 style="font-size: 35px;">Get your Car Insurance done in no time!</h2>
            <h3>Welcome Back,<br><br>
                Choose your four wheeler Insurance Plans from<br> top Insurers starting at Rs 1800/- for 3 years!</h3><br>
                <form action="#" method="post">
                    <label for="Vehicle number" style="display: block;margin-bottom: 8px;padding-top: 10px;">Enter Vehicle Number:</label>
                    <input type="text" style="width: 100%;padding: 10px;margin-bottom: 15px;border:none;border-radius: 4px;box-sizing: border-box;border-bottom:3px solid #ccc;margin-top: 15px;"id="userQuestion" name="userQuestion" placeholder="Car Number..." required>
        
                    <button style="background-color: #3498db;color: #fff;padding: 10px 20px;border: none;border-radius: 4px;cursor: pointer;" id ="buttoon" type="submit">Submit</button>
                </form><br>
                
                <a href="4 wheeler plans.php" class="btn btn-success">View Plans</a>
                <p style="font-size: x-small;margin-top: 10px;">By clicking, I agree to <a href="#">*terms & conditions</a> and <a href="#">privacy policy</a>.<br>
                    **For 18 Year Female, college graduate & Salaried with 7 Lac and above salary having cover upto 35 Years</p>
            </span>
            <img src="car.png" alt="" style="float: right;width: 300px;margin-top: 25px;">
            </div>
    
    
    
    
    
            </div>
            <footer>
              <p style="color:whitesmoke;">&copy; 2024 Insurance Company. All rights reserved.</p>
          </footer>
</body>
</html>