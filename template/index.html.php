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
      <link href="css/main.css" rel="stylesheet" type="text/css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Brygada+1918&display=swap" rel="stylesheet">
   </head>
   <body>
      <header>
         <?php include 'includes/aceheader.php'; ?>
      </header>
      <nav>
         <ul class="menu">
            <li class="item"><a href="#">About &amp; FAQs</a></li>
            <li class="item"><a href="#">Events</a></li>
            <li class="item"><a href="#">Register</a></li>
            <li class="item"><a href="#">Conact</a></li>
            <li class="toggle"><span class="bars"></span></li>
         </ul>
      </nav>
      <main>
         <h1>Heading one</h1>
          <p>Content</p>
           <h2>Heading two</h2>
          <p>Content</p>
      </main>
      <footer>
         <p>Copyright <?php echo date('Y');?> &copy; Ace in the hole Multisport Events<br>
      </footer>
   </body>
</html>