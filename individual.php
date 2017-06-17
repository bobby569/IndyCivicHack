<!DOCTYPE html>
<html>
<title>Individual Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
input[type=text], input[type=time], input[type=number], input[type=file], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
td {
  border: 1px solid black;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-small">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-center w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>-->
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    <a href="individual.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Up / Login</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donations</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Sign Up / Login</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Donations</a>
  </div>
</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-left">
      <h1>Individual Registration</h1>
      <div>
        <form id="individual">
            <p>
              <label>
                Title:
                <input autofocus required placeholder="Enter title here" type="text">
              </label>
            </p>
            <p>
              <label>
                Summary:
                <textarea autofocus required placeholder="Enter summary here" rows="4" cols="50"></textarea>
              </label>
            </p>
            <p>
              <label>
                Image:
                <input autofocus required placeholder="Enter image" type="file">
              </label>
            </p>
            <p>
              <label>
                Location:
                <input autofocus required placeholder="Enter location here" type="text"></label>
            </p>
            <p>
              <label>
                Time:
                <input autofocus required placeholder="Enter time here" type="time">
              </label>
            </p>
            <p>
              <label>
                Spots left:
                <input autofocus required placeholder= "Enter how many spots left here" type="number">
              </label>
            </p>
            <button class="w3-right">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
