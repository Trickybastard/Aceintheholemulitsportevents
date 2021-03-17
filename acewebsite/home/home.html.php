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
         <?php include 'includes/aceheader.inc.html.php'; ?>
         <?php include 'includes/nav.inc.html.php'; ?>
       <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" data-basecolor="#92414e" >PORTLAND WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
      <main>
          <h1>ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h1>
          <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.</p>

          <h2>ABOUT THE EVENT</h2>
<p><img src="images/ace8.jpg" class="runner" alt="runner">The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.

    There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>

          <h2>What to Bring</h2>
<p>Watch the weather closely. The show goes on no matter what the weather is doing.

    You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

          <p><b>Swim:</b> Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>

          <p><b>Bike:</b> A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

          <p><b>Run:</b> You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.

    Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
      </main>
                 <div class=" grid-container">
             
         <div class="twitter item1">
             <!-- twitter plugin code -->
             <a class="twitter-timeline" data-width="400" data-height="250" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> 
         </div>
         <!-- facebook plugin code -->
         
         <div class="facebook item2">
         
             <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="400" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
             
                 <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore">
                 
                     <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
             
                 </blockquote>           
             </div>
             </div>
             </div>

         <?php include 'includes/acefooter.inc.html.php'; ?>
       <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<!-- twitter script -->
         <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
         <!-- facebook plugin script -->
         <div id="fb-root"></div>

         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="3SJJc8JY"></script>
   </body>
</html>