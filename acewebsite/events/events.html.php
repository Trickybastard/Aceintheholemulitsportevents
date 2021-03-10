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
        <h2>Start Times</h2>

<table>
   <tr>
      <th>Day</th>
      <th>Event</th>
      <th>Start Time</th>
      <th>Price</th>
   </tr>
   <tr>
      <td>Saturday</td>
      <td>Long Course Triathlon</td>
      <td>7:00 AM</td>
      <td>&#36;240</td>
   </tr>
   <tr>
      <td>Saturday</td>
      <td>Olympic Triathlon</td>
      <td>7:30 AM</td>
      <td>&#36;110</td>
   <tr>
      <td>Saturday</td>
      <td>10K</td>
      <td>7:15 AM</td>
       <td>&#36;50</td>
   </tr>
   <tr>
      <td>Saturday</td>
      <td>Half Marathon</td>
      <td>7:15 AM</td>
       <td>&#36;75</td>
   </tr>
   <tr>
      <td>Sunday</td>
      <td>Sprint Triathlon</td>
      <td>8:00 AM</td>
    <td>&#36;90</td>
   </tr>
   <tr>
      <td>Sunday</td>
      <td>Try-a-Tri</td>
      <td>8:20 AM</td>
       <td>&#36;65</td>
   </tr>
   <tr>
      <td>Sunday</td>
      <td>Splash n Dash</td>
      <td>12:00 PM</td>
       <td>Free</td>
   </tr>
    </table>
    <h2>Cost Includes</h2>

<p>Food &amp; Beer
Access to the weekend's live entertainment &amp; Fitness Expo
Commemorative Finisher medal
Accurate Chip Timing for competitive races
Ace in the Hole Multisport Weekend Tech Shirt
Post-event party &amp; entertainment</p>

<p>NOTE: Tech shirts guaranteed to pre-registered participants only.<p>

    <h2>PACKET PICK UP</h2>
    <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>

    <h2>COURSE DETAILS</h2>
    <p>WATER TEMPERATURE is expected to be between 62 &amp; 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>

          <p><b>Long Course SWIM</b> - 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

<p><b>Long Course BIKE</b> - 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>

<p><b>Long Course RUN</b> - 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>

<p><b>OLYMPIC SWIM</b> - 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

<p><b>OLYMPIC BIKE</b> - 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>

<p><b>OLYMPIC RUN</b> - 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>

<p><b>Sprint:</b> Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>

<p><b>Try-A-Tri:</b> This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>

<p><b>Half Marathon COURSE:</b> Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>

<p><b>10k COURSE:</b> The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>

<p><b>Splash n' Dash:</b> Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</p>
         
      </main>
         <?php include '../includes/acefooter.inc.html.php'; ?>
   </body>
</html>