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
      <main>
         <h1>Events</h1>
      </main>
         <?php include '../includes/acefooter.inc.html.php'; ?>
   </body>
</html>