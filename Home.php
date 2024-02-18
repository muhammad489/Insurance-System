<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
    <style>
    .navbar-nav{
    margin-left: 800px;
    color:blue;
}
#carousel{
    width:500px;
    height:400px;
    margin-top: 40px;
    border-radius:15px;
    float: right;
    display: inline-block;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.content{
    width:500px;
    margin-top: 40px;
    height: 400px;
    display: inline-block;
    padding-top: 100px;
}
button:hover{
    background-color: mediumseagreen ;
}
.caards{
    wdth: 800px;
    eight:200px;
    margin-top: 70px;
    margin-left: 50px;
    border:none;
    display: flexbox;
    
}
body {
    font-family: 'Arial', sans-serif;
    backgound-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.why-choose-section {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

p {
    color: #555;
    line-height: 1.6;
}

.icon {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.reason {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
#one{
    line-height:1.0;
}
header {
    background-color:tomato;
    color: #fff;
    text-align: center;
    padding: 1em;
}

section {
    margin: 20px;
}

.insurance-plan {
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
    background-color: #fff;
}

.plan-header {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.plan-details {
    padding: 20px;
}

.plan-details p {
    margin-bottom: 10px;
}
footer {
    background-color: #333;
    color:white;
    text-align: center;
    padding: 1em;
    
    bottom: 0;
    width: 100%;
}


</style>
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
              <li class="nav-item" style="padding-left: 10px;">
                <span style="margin-bottom:20px;margin-top:-20px;"> <a href="index.php?logout='1'" style="color: whitesmoke;margin-left:430px;margin-bottom:-25px;"><img src="logout.png" style="width:40px;margin-top:5px;"></a></span>
    
              </li>




          </ul>
        </div>
        </div>
    </nav>
    <div class="container">
    <div class="content">
    <h1>Get the best policy at your fingertips</h1>
    <p style="color: dodgerblue;font-size: medium;">Get the best prices <span class="glyphicon glyphicon-usd"></span></p>
    <p style="color: darkorange;font-size: medium;">Easy and Quick <span class="glyphicon glyphicon-ok-sign"></span></p>
    
</div>


    <div id="carousel" class="carousel slide" style="width:500px;
    height:400px;
    margin-top: 40px;
    border-radius:15px;
    float: right;
    display: inline-block;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators" style="background-color:mediumaquamarine;border-radius: 20px;">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active" id="op">
            <img src="Asset 5@300x (1).png" alt="Los Angeles" class="d-block w-100";
            height:400px;">
          </div>
          <div class="carousel-item" id="op">
            <img src="828.jpg" alt="Chicago" class="d-block w-100";>
          </div>
          <div class="carousel-item" id="op">
            <img src="groupinsurance1.jpg" alt="New York" class="d-block w-100";>
          </div>
        </div>
      
        <!-- Left and right controls/icons -->
        <div class="carouselbuttons" id="para2">
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
        </div>
        
      </div>
      <h1 style="text-align:center;margin-top:60px;margin-bottom:-20px;"><b>Our</b> <span style="background-color:mediumseagreen;border-radius:40px;padding:8px;color:white;"><b>Features</b></span></h1>
      <div class="caards">
        <!-- life insurance card-->
        <div class="col-md-4 mb-4">
          <div class="card img-fluid" style="border: none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <img src="life 2.png" class="card-img-top" alt="Life Insurance" >
              <div class="card-body">
                  <h4 class="card-title" style="ext-align: center;color:darkslategray"><b>Life Insurance</b> 25% off <span class="glyphicon glyphicon-tag"></span></h4>
                  <p class="card-text">Provide financial security to your loved ones.</p>
                  <a href="Life-Insurance.php" class="btn btn-success">Learn More</a>
              </div>
          </div>
      </div>

      <!-- Medical Insurance Card -->
      <div class="col-md-4 mb-4">
          <div class="card img-fluid h-100" style="border:none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            
              <img src="med.png" class="card-img-top" alt="Medical Insurance">
              <div class="card-body">
                  <h4 class="card-title" style="ext-align: center;color:darkslategray"><b>Medical Insurance</b> 25% off <span class="glyphicon glyphicon-tag"></span></h4>
                  <p class="card-text">Coverage for your healthcare expenses.</p>
                  <a href="Medical-insurance.php" class="btn btn-success">Learn More</a>
              </div>
          </div>
      </div>

      <!-- Motor Insurance Card -->
      <div class="motor">
      <div class="col-md-4 mb-4">
        
          <div class="card img-fluid w-80" style="border:none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <img src="motor.png" class="card-img-top" alt="Motor Insurance">
              <div class="card-body">
                  <h4 class="card-title" style="ext-align: center;color:darkslategray;"><b>Motor Insurance</b> 40% off <span class="glyphicon glyphicon-tag"></span></h4>
                  <p class="card-text">Protect your vehicle from damages.</p>
                  <a href="Motor-insurance.php" class="btn btn-success">Learn More</a>
              </div>
          </div>
      </div>
      </div>

      <!-- Home Insurance Card -->
      <div class="col-md-4 mb-4">
          <div class="card img-fluid" style="border:none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <img src="home.png" class="card-img-top" alt="Home Insurance">
              <div class="card-body">
                  <h4 class="card-title" style="ext-align: center;color:darkslategray"><b>Home Insurance</b> 10% off <span class="glyphicon glyphicon-tag"></span></h4>
                  <p class="card-text">Safeguard your home and belongings.</p>
                  <a href="Home-insurance.php" class="btn btn-success">Learn More</a>
              </div>
          </div>
      </div>

      <!-- Travel Insurance Card -->
      <div class="col-md-4 mb-4">
          <div class="card img-fluid" style="border:none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
              <img src="travel.png" class="card-img-top" alt="Travel Insurance">
              <div class="card-body">
                  <h4 class="card-title" style="ext-align: center;color:darkslategray"><b>Travel Insurance</b> 40% off <span class="glyphicon glyphicon-tag"></span></h4>
                  <p class="card-text">Enjoy a worry-free travel experience.</p>
                  <a href="Travel-insurance.php" class="btn btn-success">Learn More</a>
              </div>
          </div>
      </div>
      </div>
      </div>



      

      <div class="jumbotron" style="display:inline-block;background-color: ivory;width:100%;">
        <div class="why-choose-section">
          <h2>Why Choose Us?</h2>
  
          <div class="reason">
              <img src="coverage.png" alt="Coverage Icon" class="icon">
              <p><b style="color: darkseagreen;">Comprehensive Coverage:</b> We offer a wide range of insurance coverage options tailored to meet your unique needs and provide financial protection.</p>
          </div>
  
          <div class="reason">
              <img src="easyprocess.png" alt="Easy Process Icon" class="icon">
              <p><b  style="color: tomato;">Simple and Easy Process: </b>Our user-friendly platform ensures a hassle-free experience from obtaining quotes to managing your policies.</p>
          </div>
  
          <div class="reason">
              <img src="affordable.png" alt="Affordable Rates Icon" class="icon">
              <p><b style="color: dodgerblue;">Affordable Rates: </b>We strive to provide competitive and transparent pricing to ensure you get the best value for your insurance coverage.</p>
          </div>
  
          </div>
      </div>

      
      <div class="jumbotron" style="display:inline-block;background-color:whitesmoke;width:100%;height:500px;">
        <div class="container">
          <span class="both" style="display: inline-block;">
          <h2 style="border-left: 4px solid dodgerblue;padding-left: 8px;"><b>Have a question?<br>
            Here to help.</b></h2>
            <p style="padding-top:20px;">Here to help. Please feel free to ask any questions you may have,<br> and our team will assist you.</p>
            <form action="#" method="post">
              <label for="userQuestion" style="display: block;margin-bottom: 8px;padding-top: 10px;">Your Question:</label>
              <input type="text" style="width: 100%;padding: 10px;margin-bottom: 15px;border:none;border-radius: 4px;box-sizing: border-box;border-bottom:3px solid #ccc;margin-top: 15px;"id="userQuestion" name="userQuestion" placeholder="Ask your question here..." required>
  
              <button style="background-color: #3498db;color: #fff;padding: 10px 20px;border: none;border-radius: 4px;cursor: pointer;" id ="buttoon" onclick="submitQuestion()">Submit Question</button>
          </form>
          </span>
          <img src="help.png" style="width: 300px;height: 300px;margin-left: 150px;margin-bottom: 270px;">
        </div>
        </div>
        <div style="border:1px solid black;margin-top: -30px;">
        <div class="container">
          <h3 style="padding-bottom: 15px;margin-left: 15px;"><b>More Services</b></h3>
          <ul style="display: inline-block;">
            <h4 style="padding-bottom: 10px;">Life Insurance</h4>
            <p id="one"><a href="#">Life Insurance</a></p><br>
            <p id="one"><a href="#">Term Insurance</a></p><br>
            <p id="one"><a href="#">Term Insurance Calculator</a></p><br>
            <p id="one"><a href="#">1 Crore Term Insurance</a></p><br>
            <p id="one"><a href="#">Term Return of Premium</a></p><br>
            <p id="one"><a href="#">Term Insurance for Housewife</a></p><br>
            <p id="one"><a href="#">Spouse Term Plan</a></p><br>
          </ul>
          <ul style="display: inline-block;">
            <h4 style="padding-bottom: 10px;">Health Insurance</h4>
            <p id="one"><a href="#">Health Insurance</a></p><br>
            <p id="one"><a href="#">1 Cr Health Cover</a></p><br>
            <p id="one"><a href="#">Family Health Insurance</a></p><br>
            <p id="one"><a href="#">Senior Citizen Health Insurance</a></p><br>
            <p id="one"><a href="#">Coronavirus Insurance</a></p><br>
            <p id="one"><a href="#">Arogya Sanjeevani Policy</a></p><br>
            <p id="one"><a href="#">Health Insurance</a></p><br>
          </ul>
          <ul style="display:inline-block;">
            <h4 style="padding-bottom: 10px;">Investment</h4>
            <p id="one"><a href="#">Investment Plans</a></p><br>
            <p id="one"><a href="#">Capital Guarantee Plans</a></p><br>
            <p id="one"><a href="#">Investment Plans for NRIs</a></p><br>
            <p id="one"><a href="#">Child Plans</a></p><br>
            <p id="one"><a href="#">Pension Plans</a></p><br>
            <p id="one"><a href="#">Guaranteed Return Plans</a></p><br>
            <p id="one"><a href="#">Tax Saving Investments</a></p><br>
            
          </ul>
          <ul style="display:inline-block;">
            <h4 style="padding-bottom: 10px;">General Insurance</h4>
            <p id="one"><a href="#">Car Insurance</a></p><br>
            <p id="one"><a href="#">Bike Insurance</a></p><br>
            <p id="one"><a href="#">Motor Insurance</a></p><br>
            <p id="one"><a href="#">Third Party Car Insurance</a></p><br>
            <p id="one"><a href="#">Third Party Bike Insurance</a></p><br>
            <p id="one"><a href="#">Travel Insurance</a></p><br>
            <p id="one"><a href="#">Commercial Vehicle Insurance</a></p><br>
          </ul>
          <ul style="display:inline-block;">
            <h4 style="padding-bottom: 10px;">Other Insurance</h4>
            <p id="one"><a href="#">Group Health Insurance</a></p><br>
            <p id="one"><a href="#">Marine Insurance</a></p><br>
            <p id="one"><a href="#">Workers Compensation</a></p><br>
            <p id="one"><a href="#">Professional Indemnity</a></p><br>
            <p id="one"><a href="#">Fire and Burglary Insurance</a></p><br>
            <p id="one"><a href="#">Home Insurance</a></p><br>
            <p id="one"><a href="#">Cancer Insurance</a></p><br>
          </ul>
          <p style="font-size: small;">*Standard Plans Terms and Conditions apply<br>
          +For insurance plans that do not require inspection of your car<br>
            #The above returns are based on the past performance of 7 years<br>
            *As per Draft Notification No. RT-11036/194/2021-MVL (Govt. of India, Ministry of Road Transport and Highways<br>
            #Tax benefit is subject to change in tax laws. ^Valid for policies issued until 31st March 23<br>
            *The Guaranteed Returns are dependent on the policy term and premium term availed along with the other variable factors. The Guaranteed return of Rs 1 Cr is for a 30-Year-old individual for a policy term of 10 Years and a premium paying term of 5 Years with a Rs 1,00,000 monthly installment premium.<br>
            **Fixed deposit rate applicable for 5 years 1 day to 10 years for investment amount less < 2 Crore ( Not for senior citizens), PPF interest rate applicable for 15 years for investment amount upto 1.5 Lac<br>
            *Rs. 950/month is the starting price for a Rs. 1 Crore term life insurance for a 30 year-old male, non-smoker, with no pre-existing diseases, cover upto 68 years of age. Additional premium is payable for riders opted.<br>
            **Full refund of the premium may be availed when you opt to exit the policy at a pre-defined interval. On availing the one-time option to exit, the total base premium is returned by the Insurer excluding GST & premium paid for additional optional benefits.</p>
        </div>
        </div>
      
            
    

      </div>
      


    
      
</body>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<script>
  function submitQuestion() {
    
    alert("Question submitted! We will get back to you.");

    // You can add additional actions here, if needed
  }
</script>
<footer>
  <p style="color:whitesmoke">&copy; 2024 Insurance Company. All rights reserved.</p>
</footer>
</html>