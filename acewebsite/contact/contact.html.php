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
      <h1>Questions? We'd love to hear from you!</h1>
      <form class="formstyle" method="post" action=" " id="inquiryForm">
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myQuestion">Question:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
          <h2>FAQs</h2>
          <p><b>What are the Rules?</b> We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>

          <p><b>Can I use a personal music device while cycling?</b> Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>

          <p><b>Can I use a personal music device while running?</b> During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
<ul id="faqs">
    <li>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</li>
    <li>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</li>
    <li>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</li>
</ul>
          <p><b>Do I need to wear a wetsuit?</b> No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>

          <p><b>Do I have to use a road or racing bike?</b> No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
    </main>
         <?php include '../includes/acefooter.inc.html.php'; ?>
   </body>
</html>