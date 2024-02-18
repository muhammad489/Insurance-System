<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan EMI Calculator</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            widh:400px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body style="background-color: white;">
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
        <div class="container" style="background-color:whitesmoke;width:750px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div style="display:inline-block;width: 350px;text-align: center;margin-top:30px;">
        <div id="loanForm">
            <h2  style="background-color: MediumSeaGreen;color:white;padding:7px;border-radius: 20px;margin-top: -10px;">Loan EMI Calculator</h2>
    
            <label for="loanAmount">Loan Amount:</label>
            <input type="number" id="loanAmount" placeholder="Enter loan amount" style="background-color:white;border:none;border-radius: 10px;" required>
    
            <label for="interestRate">Interest Rate (%):</label>
            <input type="number" id="interestRate" placeholder="Enter interest rate" style="background-color:white;border:none;border-radius: 10px;" required>
    
            <label for="loanTenure">Loan Tenure (months):</label>
            <input type="number" id="loanTenure" placeholder="Enter loan tenure in months" style="background-color:white;border:none;border-radius: 10px;" required>
    
            <button type="button" style="margin-top:15px;" onclick="calculateEMI()">Calculate EMI</button>
    
            <div id="result" style="background-color: tomato;color:white;border-radius: 12px;padding:10px;"><b></b></div>
            </div>
            </div>
            
            <img src="Loan EMI Calculator.png" style="width:300px;display: inline-block;margin-top: -250px;margin-left: 50px;">

        </form>
    </div>
        <script>
            function calculateEMI() {
                var loanAmount = document.getElementById('loanAmount').value;
                var interestRate = document.getElementById('interestRate').value / 100 / 12; // Monthly interest rate
                var loanTenure = document.getElementById('loanTenure').value;
    
                var emi = (loanAmount * interestRate * Math.pow(1 + interestRate, loanTenure)) / (Math.pow(1 + interestRate, loanTenure) - 1);
    
                document.getElementById('result').innerHTML = 'Monthly EMI: ₹' + emi.toFixed(2);
            }
        </script>
</body>
</html>