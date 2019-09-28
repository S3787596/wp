<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Assignment 3</title>
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link rel="stylesheet" type="text/css" href="style.css?t=<?php echo filemtime("style.css"); ?>" />
      <script src="tools.js?t=<?php echo filemtime("tools.js"); ?>"></script>
      <script src='../wireframe.js'></script>
      <script src='script.js'></script>
   </head>
   <body>
      <header>
         <div class="header"><img class="headerImg" src="../../media/logo.png" alt='Logo Image'><img id="websiteTitle" src="../../media/websiteTitle.png"></div>
      </header>
      <nav class="sticky">
         <div id="navbar">
            <a href="#aboutUs" class="nav">About Us</a>
            <a href="#pricing" class="nav">Pricing</a>
            <a href="#nowShowing" class="nav">Now Showing</a>
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
               These are the new seats we have just installed:
            </p>
            <div id="seatImages">
               <a>
                  <img class="seatPic" src="../../media/standard-seat.png">
                  <div class="seatText">Standard Seat</div>
               </a>
               <a>
                  <img class="seatPic" src="../../media/first-class-seat.png"> 
                  <div class="seatText">First Class Seat</div>
               </a>
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
         </div>
         </section>
         <section class="parallax"></section>
         <a class="anchor" name="nowShowing"></a>
         <section class="section">
            <h2 class="sectionHeading">
            Now Showing
            <h2>

            <!-- Movie 1 AVENGERS: ENDGAME -->
            <div onclick="changeSyn(this.id)" id="mv1" class="movieBlock">
               <img class="poster" src="../../media/avengers-endgame.png" alt="'Avengers: Endgame' Poster">
               <div class="titlePlusTimes">
                  <h3 class="posterTitle">Avengers: Endgame</h3>
                  <span class="rating">(PG-13)<span>
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
            <div onclick="changeSyn(this.id)" id="mv2" class="movieBlock">
               <img class="poster" src="../../media/top-end-wedding.jpg" alt="'Top End Wedding' Poster">
               <div class="titlePlusTimes">
                  <h3 class="posterTitle">Top End Wedding</h3>
                  <span class="rating">(M)<span>
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
            <div onclick="changeSyn(this.id)" id="mv3" class="movieBlock">
               <img class="poster" src="../../media/dumbo.jpg" alt="'Dumbo' Poster">
               <div class="titlePlusTimes">
                  <h3 class="posterTitle">Dumbo</h3>
                  <span class="rating">(PG)<span>
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
            <div onclick="changeSyn(this.id)" id="mv4" class="movieBlock">
               <img class="poster" src="../../media/the-happy-prince.jpg" alt="'The Happy Prince' Poster">
               <div class="titlePlusTimes">
                  <h3 class="posterTitle">The Happy Prince</h3>
                  <span class="rating">(R)<span>
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

               <!-- 'Avengers: Endgame' Synopsis -->
 
               <div id="movie[ACT]" class="syn">
            <div>
               <iframe src="https://www.youtube.com/embed/hA6hldpSTF8"></iframe>
               <h3 class="posterTitle">Avengers: Endgame</h3>
               <span class="span">(PG-13)<span>
            </div>
            <p>After the devastating events of Avengers: Infinity War (2018), the 
               universe is in ruins due to the efforts of the Mad Titan, Thanos. 
               With the help of remaining allies, the Avengers must assemble once 
               more in order to undo Thanos' actions and undo the chaos to the 
               universe, no matter what consequences may be in store, and no matter 
               who they face...
            </p>
            <h4 id="booking">
            Booking:
            <h4>
            <button class="T21 discount">Wednesday - 9:00PM</button>
            <button class="T21">Thursday - 9:00PM</button>
            <button class="T21">Friday - 9:00PM</button>
            <button class="T18">Saturday - 6:00PM</button>
            <button class="T18">Sunday - 6:00PM</button>
         </div>

        <!-- 'Top End Wedding Synopsis' -->

         <div id="movie[RMC]" class="syn">
            <div>
               <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU"></iframe>
               <h3 class="posterTitle">Top End Wedding</h3>
               <span class="span">(M)<span>
            </div>
            <p>Lauren and Ned have 10 days to find Lauren's mother who has 
                gone AWOL in the remote far north of Australia so that they 
                can reunite her parents and pull off their dream wedding.
            </p>
            <h4 id="booking">
            Booking:
            <h4>
            <button class="T18 discount">Monday - 6:00PM</button>
            <button class="T18">Tuesday - 6:00PM</button>
            <button class="T15">Saturday - 3:00PM</button>
            <button class="T15">Sunday - 3:00PM</button>
         </div>

         <!-- 'Dumbo' Synopsis -->

         <div id="movie[ANM]" class="syn">
            <div>
               <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8"></iframe>
               <h3 class="posterTitle">Dumbo</h3>
               <span class="span">(PG)<span>
            </div>
            <p>A young elephant, whose oversized ears enable him to fly, 
                helps save a struggling circus, but when the circus plans 
                a new venture, Dumbo and his friends discover dark secrets 
                beneath its shiny veneer.
            </p>
            <h4 id="booking">
            Booking:
            <h4>
            <button class="T12 discount">Monday - 12:00PM</button>
            <button class="T12 discount">Tuesday - 12:00PM</button>
            <button class="T18 discount">Wednesday - 6:00PM</button>
            <button class="T18">Thursday - 6:00PM</button>
            <button class="T18">Friday - 6:00PM</button>
            <button class="T12">Saturday - 12:00PM</button>
            <button class="T12">Sunday - 12:00PM</button>
         </div>

          <!-- 'The Happy Prince' Synopsis -->

          <div id="movie[AHF]" class="syn">
            <div>
               <iframe src="https://www.youtube.com/embed/tXANCJQkUIE"></iframe>
               <h3 class="posterTitle">The Happy Prince</h3>
               <span class="span">(R)<span>
            </div>
            <p>The untold story of the last days in the tragic times of Oscar Wilde, 
                a person who observes his own failure with ironic distance and regards 
                the difficulties that beset his life with detachment and humor.
            </p>
            <h4 id="booking">
            Booking:
            <h4>
            <button class="T12 discount">Wednesday - 12:00PM</button>
            <button class="T12 discount">Thursday - 12:00PM</button>
            <button class="T12 discount">Friday - 12:00PM</button>
            <button class="T21">Saturday - 9:00PM</button>
            <button class="T21">Sunday - 9:00PM</button>
         </div>

         <!-- Booking Form -->

        <section id="bookingForm">


            <form method="post" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" onsubmit="return priceCalc()">

            <h1 id="bookingHeader">MOVIE TITLE - DAY - TIME</h1>
            <input id="movie-id" name="movie[id]" value="" type="hidden"/>
            <input id="movie-day" name="movie[day]" value="" type="hidden"/>
            <input id="movie-hour" name="movie[hour]" value="" type="hidden"/>


               <div class="details">
            <fieldset class="legend">
      <legend>Contact and Payment</legend>
      <div class="tickets">
      <label for="name">Name:</label> 
      <input id="cust-name" name="cust[name]" pattern="^[a-zA-Z' -.]{2,30}$" placeholder="Enter your name here" />
               </div>

      <div class="tickets">
      <label for="name">Email:</label> 
      <input id="cust-email" name="cust[email]" pattern="^[a-z0-9!#$%&'*+\=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" placeholder="Enter your email" />
               </div>

      <div class="tickets">
      <label for="number">Mobile:</label> 
      <input id="cust-mobile" name="cust[mobile]" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" placeholder="Enter your number here" id="number" />
               </div>

      <div class="tickets">
      <label for="hdd">Credit Card:</label> 
      <input id="cust-card" name="cust[card]" pattern="^(\d{1}[ ]?){14,19}$" />
               </div>

      <div class="tickets">
      <label class = "label" for="adult">Expiry: 
         <input name="cust[expiry]" placeholder="YYYY" type="month" />
               </div>
           
            </label>   
    </fieldset>
               </div>
      
               
<fieldset class="legend">
   <legend>Standard</legend>
   <div class="tickets"><label class="label" for="adult">Adult: 
   <select onchange="return priceCalc()" id="seats-STA" name="seats[STA]" class="dropdown"  name="dropdown">
            <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
            </label>
         </select>
         </div>
  
         <div class="tickets"><label class = "label" for="adult">Concession:
   <select onchange="return priceCalc()" id="seats-STP" name="seats[STP]" class="dropdown"  name="dropdown">
   <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
            </label> 
         </select>
         </div>

         <div class="tickets"><label class = "label" for="adult">Children:
   <select onchange="return priceCalc()" id="seats-STC" name="seats[STC]" class="dropdown" name="dropdown">
   <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
            </label> 
         </select>
         </div>
               </fieldset>

               <fieldset class="legend">
   <legend>First Class</legend>
   <div class="tickets"><label class = "label" for="adult">Adult: 
   <select onchange="return priceCalc()" id="seats-FCA" name="seats[FCA]" class="dropdown"  name="dropdown">
   <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
         </select>
   </div>

         <div class="tickets"><label class = "label" for="adult">Concession:
   <select onchange="return priceCalc()" id="seats-FCP" name="seats[FCP]" class="dropdown"  name="dropdown">
   <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
            </label> 
         </select>
         </div>

         <div class="tickets"><label class = "label" for="adult">Children:
   <select onchange="return priceCalc()" id="seats-FCC" name="seats[FCC]" class="dropdown" name="dropdown">
   <option value="0" selected>Please select</option>
            <option value ="0" >0</option>
            <option value ="1" >1</option>
            <option value ="2" >2</option>
            <option value ="3" >3</option>
            <option value ="4" >4</option>
            <option value ="5" >5</option>
            <option value ="6" >6</option>
            <option value ="7" >7</option>
            <option value ="8" >8</option>
            <option value ="9" >9</option>
            <option value ="10" >10</option>
            </label> 
            
         </select>
         </div>
        


               </fieldset>


               
               <input name="Order" type="submit" value="Order">
               <span id="totalPrice"></span>
               

         </form>
         </section>
        
   
      </main>
      <footer id="footer">
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script> by Wyatt Jenkins (s3770872) & Prerak Soni (s3787596), Group: A2-s3787596-s3770872. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
   </body>
</html>