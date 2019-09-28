/* Insert your javascript here */

// Assignment 3 - Web Programming
// by Wyatt Jenkins (s3770872) & Prerak Soni (s3787596)
/* _______________________________________________ */

// Navigation Bar Programming

window.onscroll = function() {
    var articles = document.getElementsByTagName('main')
    [0].getElementsByClassName('anchor');
    var navLinks = document.getElementsByTagName('nav')
    [0].getElementsByTagName('a');

    var n = -1;
    while (n < articles.length - 1 && articles[n+1].offsetTop <= window.scrollY) {
        n++;
    }

    for (var a=0; a < navLinks.length; a++) {
        navLinks[a].classList.remove('activeNav');
    }

    if (n >= 0) {
        navLinks[n].classList.add('activeNav');
    }
}

// Booking Form Programming

function priceCalc() {

    // Standard seats
    var seatSTA = parseInt(document.getElementById("seats-STA").value);
    var priceSTA = 19.80;
    var seatSTP = parseInt(document.getElementById("seats-STP").value);
    var priceSTP = 17.50;
    var seatSTC = parseInt(document.getElementById("seats-STC").value);
    var priceSTC = 15.30;
    // First Class seats
    var seatFCA = parseInt(document.getElementById("seats-FCA").value);
    var priceFCA = 30.00;
    var seatFCP = parseInt(document.getElementById("seats-FCP").value);
    var priceFCP = 27.00;
    var seatFCC = parseInt(document.getElementById("seats-FCC").value);
    var priceFCC = 24.00;

   //  if (document.getElementByClassName("discount"))

    var totalCost = (seatSTA * priceSTA) + (seatSTP * priceSTP) + (seatSTC * priceSTC) + (seatFCA * priceFCA) + (seatFCP * priceFCP) + (seatFCC * priceFCC);
    document.getElementById("totalPrice").innerHTML = "Total cost: $" + totalCost.toFixed(2);
}

// Synopsis Programming

function changeSyn(clicked_id) {

    if (clicked_id == "mv1")  {
        document.getElementById("movie[AHF]").style.display = "none";
        document.getElementById("movie[RMC]").style.display = "none";
        document.getElementById("movie[ANM]").style.display = "none";
        document.getElementById("movie[ACT]").style.display = "inline-block";
        document.getElementById("movie[ACT]").style.width = "100%";
        }

    if (clicked_id == "mv2")  {
        document.getElementById("movie[ACT]").style.display = "none";
        document.getElementById("movie[AHF]").style.display = "none";
        document.getElementById("movie[ANM]").style.display = "none";
        document.getElementById("movie[RMC]").style.display = "inline-block";
        document.getElementById("movie[RMC]").style.width = "100%";
        }

    if (clicked_id == "mv3")  {
        document.getElementById("movie[ACT]").style.display = "none";
        document.getElementById("movie[RMC]").style.display = "none";
        document.getElementById("movie[AHF]").style.display = "none";
        document.getElementById("movie[ANM]").style.display = "inline-block";
        document.getElementById("movie[ANM]").style.width = "100%";
        }

    if (clicked_id == "mv4")  {
        document.getElementById("movie[ACT]").style.display = "none";
        document.getElementById("movie[RMC]").style.display = "none";
        document.getElementById("movie[ANM]").style.display = "none";
        document.getElementById("movie[AHF]").style.display = "inline-block";
        document.getElementById("movie[AHF]").style.width = "100%";
        }

}

