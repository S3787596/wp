<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
    <div class="header"><img class="headerImg" src="../../media/logo.png" width="300" height="300"><h1 class="compName">Lunardo Cinemas</h1>
</div>
    </header>

    <nav class="sticky">
     <div id="navbar">
  <a href="aboutUs">About Us</a>
  <a href="#prices">Prices</a>
  <a href="#nowShowing">Now Showing</a>
</div>
    </nav>

    <main>

    <section>
<h2>About Us</h2>
<p>Welcome to Lunardo Cinemas! We are a small cinema located in Somerville. We have recently improved the viewing experience vastly
  by upgrading our seats as well as our screen projection and sound system. We now offer both standard seats and first class seats which are reclinable.
  The sound quality has been improved by implementing <a href="https://www.dolby.com/us/en/technologies/cinema/dolby-atmos.html">Dolby Atmos</a> sound and does well to complement the <a href="https://www.dolby.com/us/en/brands/dolby-vision.html">3D Dolby Vision</a> projection which was also installed
  here at Lunardo Cinemas!<br><br>

These are the new seats we have just installed:</p>

<div class="row">
  <div class="seatImages">
    <h3>Standard Seat</h3><img  class='standardSeat' src="../../media/standard-seat.png" alt="Standard Cinema Seat">
  </div>
  <div class="seatImages">
    <img class='firstSeat' src="../../media/first-class-seat.png" alt="First Class Cinema Seat" >
  </div>
</div>
    </section>
    <br><br>

    <section>
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

    <section>

    </section>
      <article id='Website Under Construction'>




    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> by Wyatt Jenkins (s3770872) & Prerak Soni (s3787596), Group: A2-zz-PLEASE-UPDATE-1. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>