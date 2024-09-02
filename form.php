<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    html,
    body {
      background: rgba( 71, 147, 227, 1);
      text-align: center;
      font-family: 'Raleway', Helvetica, sans-serif;
      min-width: 320px;
    }
    
    header {
      font-size: 2em;
      font-weight: bold;
      margin: 20px;
    }
    h1{
    text-align: center;
    font-size: 32px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

    #form-outer {
      background-color: rgb(250, 250, 250);
      margin: 0 auto;
      border-radius: 4px;
      width: 75%;
      max-width: 900px;
      padding: 10px;
      padding-top: 20px;
    }
    
    .labels {
      display: inline-block;
      text-align: right;
      width: 40%;
      padding: 5px;
      vertical-align: top;
      margin-top: 10px;
    }
    
    .rightTab {
      display: inline-block;
      text-align: left;
      width: 48%;
      vertical-align: middle;
    }
    
    .input-field {
      height: 20px;
      width: 280px;
      padding: 5px;
      margin: 10px;
      border: 1px solid #c0c0c0;
      border-radius: 2px;
    }
    
    #userAge {
      width: 40px;
    }
    
    .userRatings,
    input[type="checkbox"] {
      float: left;
      margin-right: 5px;
    }
    
    #submit {
      background-color: #1a8cff;
      border-radius: 4px;
      color: white;
      font-size: 1em;
      height: 40px;
      width: 96px;
      margin: 10px;
      border: 0px solid;
    }
    
    #reset {
      background-color: #1a8cff;
      border-radius: 4px;
      color: white;
      font-size: 1em;
      height: 40px;
      width: 96px;
      margin: 10px;
      border: 0px solid;
    }

    #details{
      background-color: #1a8cff;
      border-radius: 4px;
      color: white;
      font-size: 1em;
      height: 40px;
      margin: 10px;
      width: 96px;
      padding: 10px;
      border: 0px solid;
      text-decoration:none
    }
    .dropdown {
      height: 35px;
      width: 140px;
      padding: 5px;
      margin: 10px;  
      margin-top: 15px;
      border: 1px solid #c0c0c0;
      border-radius: 2px;
      
    }
    
    .radio, .checkbox {
      position: relative;
      left: -43px;
      margin-left: 10px;
      display: block;
      padding-bottom: 10px;
    }
    
    @media screen and (max-width: 833px) {
      .input-field {
        width: 80%;
      }
      select {
        width: 90%;
      }
    }
    
    @media screen and (max-width: 520px) {
      .labels {
        width: 100%;
        text-align: left;
      }
      .rightTab {
        width: 80%;
        float: left;
      }
      .input-field {
        width: 100%;
      }
      select {
        width: 100%;
      }
    }
    </style>
    
</head>
<body>
    <h1>Form</h1>
    <div id="form-outer">
      <form id="survey-form" method="POST" action="">
        <div class="rowTab">
          <div class="labels">
            <label id="name-label" for="name" >Name: </label>
          </div>
          <div class="rightTab">
            <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Enter your name" required>
          </div>
        </div>
        
        <div class="rowTab">
          <div class="labels">
            <label id="number-label" for="age">Age: </label>
          </div>
          <div class="rightTab">
            <input type="number" name="age" id="number" min="1" max="125" class="input-field" placeholder="Age" required>
          </div>
        </div>
        
        <div class="rowTab">
          <div class="labels">
            <label id="dob-label" for="dob"> D.O.B </label>
          </div>
          <div class="rightTab">
            <input type="date" name="dob" id="iddob" class="input-field" required>
          </div>
        </div>
        
        <div class="rowTab">
          <div class="labels">
            <label for="department">Department: </label>
          </div>
          <div class="rightTab">
            <select id="dropdown" name="dept" class="dropdown">
            <option disabled value>Select an option</option>
            <option value="IT">IT</option>
            <option value="CSE" >CSE</option>
            <option value="ECE">ECE</option>
            <option value="MECH" >MECH</option>
            <option value="CIVIL">CIVIL</option>
            <option value="Other">Other</option>
            </select>
          </div>
        </div>
        
        <div class="rowTab">
          <div class="labels">
            <label for="gender">Experience: </label>
          </div>
          <div class="rightTab">
            <ul style="list-style: none;">
              <li class="radio"><label><input name="exp" value="Fresher"  type="radio" class="userRatings" >Fresher</label></li>
              <li class="radio"><label><input name="exp" value="1-2 years"  type="radio" class="userRatings" >1-2 years</label></li>
              <li class="radio"><label><input name="exp" value="More than 2 years"  type="radio" class="userRatings" >More than 2 years</label></li>
            </ul>
          </div>
        </div>

     
        
           <div class="rowTab">
          <div class="labels">
            <label for="language">Language Known: </label>
          </div>
          <div class="rightTab">
            <ul id="language" style="list-style: none;">
              <li class="checkbox"><label><input name="lang[]" value="English" type="checkbox" class="userRatings">English</label></li>
              <li class="checkbox"><label><input name="lang[]" value="Hindi" type="checkbox" class="userRatings">Hindi</label></li>
              <li class="checkbox"><label><input name="lang[]" value="Others" type="checkbox" class="userRatings">Others</label></li>
            </ul>
          </div>
        </div>
        
        <button id="submit" type="submit" name="Submit">Submit</button>
        <button id="reset" type="reset">Reset</button>
        <a id="details" href="details.php "type="reset">Get Details</a>

      </form>
    </div> 
</body>

<!-- PHP Code -->
 
<?php
include 'db.php';

//When Button Pressed.

if(isset($_POST['Submit']))
{
    $Uname=$_POST['name'];
    $Uage=$_POST['age'];
    $Udob= $_POST['dob'];
    $Udept= $_POST['dept'];
    $Uexp= $_POST['exp'];
    $Ulang= $_POST['lang'];
     // Convert the array to a string
  $Ulang = implode(",", $Ulang);

    $insertQuery = "INSERT INTO u_entries (Uname, Uage, Udob, Udept, Uexp, Ulang) VALUES ('$Uname','$Uage','$Udob','$Udept','$Uexp','$Ulang')";
    
    $queryConnetion = mysqli_query($connection,$insertQuery);
    
    if($queryConnetion){
        echo "Data Added";
    }
    
    else{
        echo "Error ";
    }
    
}

?>