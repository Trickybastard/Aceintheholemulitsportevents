<!--
   Date: 2/10/2021
   Programmer: Omar Pineda
   File Name: template
   -->
<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>template</title>
      <script
         src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
         integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
         crossorigin="anonymous"></script>
      <script>
         $(function() {
         $(".toggle").on("click", function() {
             if ($(".item").hasClass("active")) {
                 $(".item").removeClass("active");
             } else {
                 $(".item").addClass("active");
             }
         });
         });
      </script>
      <link href="../css/main.css" rel="stylesheet" type="text/css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Brygada+1918&display=swap" rel="stylesheet">
   </head>
   <body>
      <?php include '../includes/aceheader.inc.html.php'; ?>
      <?php include '../includes/nav.inc.html.php'; ?>
      <div class="slideimages">
         <img class="mySlides" src="../images/ace1.jpg" alt="river run race">
         <img class="mySlides" src="../images/ace12.jpg" alt="bike race">
         <img class="mySlides" src="../images/ace2.jpg" alt="man with cruthes">
      </div>
      <main>
         <h1>Event Registration</h1>
         <h2>Please fill out the form below</h2>
         <form class="formstyle" action="index.php" method="post">
            <label>Full Name</label>
            <input type="text" name="fname">
            <label>Age</label>
            <input type="text" name="age">
            <label for="roles">Role</label>
            <select name="role" id="roles">
               <option value="" disabled="" selected="">Please choose</option>
               <option value="Athlete">Athlete</option>
               <option value="Volunteer">Volunteer</option>
               <option value="Interested Party">Interested Party</option>
            </select>
            <label>Phone</label>
            <input type="tel" name="phone">
            <label>Email</label>
            <input type="text" name="email">
            <label>Emergency Contact Name</label>
            <input type="text" name="ename">
            <label>Emergency Contact Number</label>
            <input type="tel" name="enum">
            <label for="genders">Gender</label>
            <select name="gender" id="genders">
               <option value="" disabled="" selected="">please choose</option>
               <option value="fale">Male</option>
               <option value="female">Female</option>
               <option value="other">Other</option>
            </select>
            <label for="size">Shirt Size</label>
            <select name="shirt" id="size">
               <option value="" disabled="" selected="">Please choose</option>
               <option value="XS">XS</option>
               <option value="S">S</option>
               <option value="M">M</option>
               <option value="L">L</option>
               <option value="XL">XL</option>
            </select>
            <label for="saeven">Saturday Events Registering For</label>
            <select name="sat" id="saeven">
               <option value="" disabled="" selected="">Please choose</option>
               <option value="Long Course Triathlon">Long Course Triathlon</option>
               <option value="Olympic Triathlon">Olympic Triathlon</option>
               <option value="10K">10K</option>
               <option value="Half Marathon">Half Marathon</option>
            </select>
            <label for="seven">Sunday Events Registering For</label>
            <select name="sun" id="seven">
               <option value="" disabled="" selected="">Please choose</option>
               <option value="Sprint Triathlon">Sprint Triathlon</option>
               <option value="Try-a-Tri">Try-a-Tri</option>
               <option value="Splash n Dash">Splash n Dash</option>
            </select>
            <label for="ques">Any Special Accommodations Needed</label>
            <textarea name="spec" id="ques" rows="10" cols="40"></textarea>
            <input type="submit" value="Submit">
         </form>
      </main>
      <?php include '../includes/acefooter.inc.html.php'; ?>
      <script>
         var myIndex = 0;
         carousel();
         
         function carousel() {
             var i;
             var x = document.getElementsByClassName("mySlides");
             for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";
             }
             myIndex++;
             if (myIndex > x.length) {myIndex = 1}
             x[myIndex-1].style.display = "block";
             setTimeout(carousel, 5000); // Change image every 5 seconds
         }
      </script>
   </body>
</html>