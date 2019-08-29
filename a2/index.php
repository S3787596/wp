<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" type="text/css" href="style.css?t=<?php echo filemtime("style.css"); ?>" />
    <script src="tools.js?t=<?php echo filemtime("tools.js"); ?>"></script>
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
    <div class="header"><img class="headerImg" src="../../media/logo.png" alt='Logo Image'><img id="websiteTitle" src="../../media/websiteTitle.png">
</div>
    </header>

    <nav class="sticky">
     <div id="navbar">
  <a href="#aboutUs">About Us</a>
  <a href="#pricing">Pricing</a>
  <a href="#nowShowing">Now Showing</a>
</div>
    </nav>

    <main class="main">
    <a class="anchor" name="aboutUs"></a>
    <section class="section">
<h2 class="sectionHeading">About Us</h2>
<p>Welcome to Lunardo Cinemas! We are a small cinema located in Somerville. We have recently improved the viewing experience vastly
  by upgrading our seats as well as our screen projection and sound system. We now offer both standard seats and first class seats which are reclinable.
  The sound quality has been improved by implementing <a href="https://www.dolby.com/us/en/technologies/cinema/dolby-atmos.html">Dolby Atmos</a> sound and does well to complement the <a href="https://www.dolby.com/us/en/brands/dolby-vision.html">3D Dolby Vision</a> projection which was also installed
  here at Lunardo Cinemas!

These are the new seats we have just installed:</p>

<div class="row">
  <div class="seatImages">
  <img  class='standardSeat' src="../../media/standard-seat.png" alt="Standard Cinema Seat">
  </div>
  <div class="seatImages">
    <img class='firstSeat' src="../../media/first-class-seat.png" alt="First Class Cinema Seat" >
  </div>
</div>

    </section>

    <section class="parallax"></section> 
    <a class="anchor" name="pricing"></a>
    <section class="section"> 
    <h2 class="sectionHeading">Pricing</h2>
<p> Lunardo Cinema offers discounted prices on weekday afternoons and all day on Mondays and Wednesdays!</p>
<table class ="table">
  <tr>
    <th>Seat Type</th>
    <th>Discounted Price [$]</th>
    <th>Normal Price [$]</th>
  </tr>
  <tr>
    <td>Standard Adult</td>
    <td>14.00</td>
    <td>19.80</td>
  </tr>
  <tr>
    <td>Standard Concession</td>
    <td>12.50</td>
    <td>17.50</td>
  </tr>
  <tr>
    <td>Standard Child</td>
    <td>11.00</td>
    <td>15.30</td>
  </tr>
  <tr>
    <td>First Class Adult</td>
    <td>24.00</td>
    <td>30.00</td>
  </tr>
  <tr>
    <td>First Class Concession</td>
    <td>22.50</td>
    <td>27.00</td>
  </tr>
  <tr>
    <td>First Class Child</td>
    <td>21.00</td>
    <td>24.00</td>
  </tr>
</table>

    
  
 
    </section>
    <section class="parallax"></section> 
    <a class="anchor" name="nowShowing"></a>
    <section class="section">
    <h2 class="sectionHeading">Now Showing<h2>

      <!-- Movie 1 AVENGERS: ENDGAME -->

        <div id="mv1" class="movieBlock"><img class="poster" src="../../media/avengers-endgame.png" alt="'Avengers: Endgame' Poster">
      <div class="titlePlusTimes"><h3 class="posterTitle">Avengers: Endgame</h3><span class="rating">(PG-13)<span>
        
        <ul class="showtimes">
        <li>Monday - (no screenings)</li>
        <li>Tuesday - (no screenings)</li>
        <li>Wednesday - 9:00pm</li>
        <li>Thursday - 9:00pm</li>
        <li>Friday - 9:00pm</li>
        <li>Saturday - 6:00pm</li>
        <li>Sunday - 6:00pm</li>
</ul>
</div>
    </div>

    <!-- Movie 2 TOP END WEDDING -->

    <div id="mv2" class="movieBlock"><img class="poster" src="../../media/top-end-wedding.jpg" alt="'Top End Wedding' Poster">
    <div class="titlePlusTimes"><h3 class="posterTitle">Top End Wedding</h3><span class="rating">(M)<span>
  
        <ul class="showtimes">
        <li>Monday - 6:00pm</li>
        <li>Tuesday - 6:00pm</li>
        <li>Wednesday - (no screenings)</li>
        <li>Thursday - (no screenings)</li>
        <li>Friday - (no screenings)</li>
        <li>Saturday - 3:00pm</li>
        <li>Sunday - 3:00pm</li>
</ul>
</div>

    </div>

    <!-- Movie 3 DUMBO -->

    <div id="mv3" class="movieBlock"><img class="poster" src="../../media/dumbo.jpg" alt="'Dumbo' Poster">
    <div class="titlePlusTimes"><h3 class="posterTitle">Dumbo</h3><span class="rating">(PG)<span>
        
        <ul class="showtimes">
        <li>Monday - 12:00pm</li>
        <li>Tuesday - 12:00pm</li>
        <li>Wednesday - 6:00pm</li>
        <li>Thursday - 6:00pm</li>
        <li>Friday - 6:00pm</li>
        <li>Saturday - 12:00pm</li>
        <li>Sunday - 12:00pm</li>
</ul>
</div>
    </div>

    <!-- Movie 4 THE HAPPY PRINCE -->

    <div id="mv4" class="movieBlock"><img class="poster" src="../../media/the-happy-prince.jpg" alt="'The Happy Prince' Poster">
    <div class="titlePlusTimes"><h3 class="posterTitle">The Happy Prince</h3><span class="rating">(R)<span>
  
        <ul class="showtimes">
        <li>Monday - (no screenings)</li>
        <li>Tuesday - (no screenings)</li>
        <li>Wednesday - 12:00pm</li>
        <li>Thursday - 12:00pm</li>
        <li>Friday - 12:00pm</li>
        <li>Saturday - 9:00pm</li>
        <li>Sunday - 9:00pm</li>
</ul>
</div>
    </div>
    </section>

    </main>

    <footer id="footer">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> by Wyatt Jenkins (s3770872) & Prerak Soni (s3787596), Group: A2-zz-PLEASE-UPDATE-1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>