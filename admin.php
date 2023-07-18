<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<script>
    var slideIndex = 0;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }

    function lib(){
    document.getElementById("library").style.backgroundImage="url('lib2.jpg')";
      document.getElementById("library").style.overflow="inherit";
     document.getElementById("library").innerHTML="There is Library where students can utilize their free time.";
     document.getElementById("library").style.color="white";
     document.getElementById("library").style.fontWeight="bolder";
      document.getElementById("library").style.fontFamily="Monotype Corsiva";
      document.getElementById("library").style.fontSize="30px";
     document.getElementById("library").style.opacity="0.6";

    }
    function lib2(){
      document.getElementById("library").style.backgroundImage="url('lib2.jpg')";
      document.getElementById("library").style.opacity="1";
    document.getElementById("library").innerHTML=" ";
    }
   function play(){
  document.getElementById("play").style.backgroundImage="url('play.jpg')";
    document.getElementById("play").style.overflow="inherit";
  document.getElementById("play").innerHTML="There is big Playground where students can play.";
  document.getElementById("play").style.color="white";
  document.getElementById("play").style.fontWeight="bolder";
  document.getElementById("play").style.fontFamily="Monotype Corsiva";
  document.getElementById("play").style.fontSize="30px";
  document.getElementById("play").style.opacity="0.6";
   }
  function play2(){
  document.getElementById("play").style.backgroundImage="url('play.jpg')";
  document.getElementById("play").style.opacity="1";
  document.getElementById("play").innerHTML=" ";
  }
  function cant(){
  document.getElementById("canteen").style.backgroundImage="url('canteen.jpg')";
  document.getElementById("canteen").style.overflow="inherit";
  document.getElementById("canteen").innerHTML="We serve Healthy and Tasty food our students along with a sophisticated Environment.";
  document.getElementById("canteen").style.color="white";
  document.getElementById("canteen").style.fontWeight="bolder";
  document.getElementById("canteen").style.fontFamily="Monotype Corsiva";
  document.getElementById("canteen").style.fontSize="30px";
  document.getElementById("canteen").style.opacity="0.6";
 }
 function cant2(){
  document.getElementById("canteen").style.backgroundImage="url('canteen.jpg')";
  document.getElementById("canteen").style.opacity="1";
 document.getElementById("canteen").innerHTML=" ";
 }
 function auditorium(){
  document.getElementById("audi").style.backgroundImage="url('auditorium.jpg')";
  document.getElementById("audi").style.overflow="inherit";
  document.getElementById("audi").innerHTML="We serve Healthy and Tasty food our students along with a sophisticated Environment.";
  document.getElementById("audi").style.color="white";
  document.getElementById("audi").style.fontWeight="bolder";
  document.getElementById("audi").style.fontFamily="Monotype Corsiva";
  document.getElementById("audi").style.fontSize="30px";
  document.getElementById("audi").style.opacity="0.6";
   }
   function auditorium2(){
  document.getElementById("audi").style.backgroundImage="url('auditorium.jpg')";
  document.getElementById("audi").style.opacity="1";
    document.getElementById("audi").innerHTML=" ";
   }
   function smarty(){
  document.getElementById("smart").style.backgroundImage="url('smart2.jpg')";
  document.getElementById("smart").style.overflow="inherit";
  document.getElementById("smart").innerHTML="We serve Healthy and Tasty food our students along with a sophisticated Environment.";
  document.getElementById("smart").style.color="white";
  document.getElementById("smart").style.fontWeight="bolder";
  document.getElementById("smart").style.fontFamily="Monotype Corsiva";
  document.getElementById("smart").style.fontSize="30px";
  document.getElementById("smart").style.opacity="0.6";
   }
   function smarty2(){
    document.getElementById("smart").style.backgroundImage="url('smart2.jpg')";
    document.getElementById("smart").style.opacity="1";
    document.getElementById("smart").innerHTML=" ";
    }
</script>
  </head>
  <body>
    <center>
      <h1>STUDENT RECORD SYSTEM</h1></center>
      <ul class="li2">
      <li>  <a class="s1" href="">HOME</a></li>
      <li>  <a href="../contact/contact.php">CONTACT US</a></li>
      <li>  <a href="./login.php">ADMIN LOGIN</a><li>
      <li>  <a href="../login/login.html">TUTOR LOGIN</a><li>
      <li>  <a href="../project1/login.php">STUDENT LOGIN</a><li>
      <li><a href="./aboutus.html">ABOUT US</a></li>
      </ul>
     <div class="shrt">
      <div class="div1">
        <img class="icon" src="newblue.png" alt="">
      </div>
      <div class="div2">
  <h2>S3 SCHOOL</h2>
  <h5 style="font-size:15px;margin-bottom:20px;">Named on Saloni,Shruti,Shalini.</h5>
   </div>
    </div>
    <br>
    <div class="slideshow-container">

    <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img id="sl1" class="s1" src="event1.jpg" style="width:500px;height:400px;border-radius: 30px 30px" onmouseover="slitwo()" >
  <div class="text">slide1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="s1" src="event2.jpg" style="width:500px;height:400px;border-radius: 30px 30px">
  <div class="text">slide Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="s1" src="event3.jpg" style="width:500px;height:400px;border-radius: 30px 30px">
  <div class="text">slide Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span style="margin:0px;" class="dot" onclick="currentSlide(2)"></span>
  <span style="margin:0px;" class="dot" onclick="currentSlide(3)"></span>
</div>

</div>
</div>
<div class="desc">
  <h2 class="fdesc">EVENTS LIKE DANCE COMPETION, RACING, SPEECH, AND MANY MORE ARE ALWAYS ARRANGE FOR STUDENTS REFRESHMENT AND FOR KEEPING THEM ACTIVE.</h2>
</div>
<br>
<div style="background-color:rgba(0,0,0,0.9);width:100%;height:720px;">
  <div class="ndiv1" id="library" onmouseover="lib()" onmouseout="lib2()">

  </div>
  <div class="ndiv2" id="play" onmouseover="play()" onmouseout="play2()">

  </div>
  <div class="ndiv3" id="canteen" onmouseover="cant()" onmouseout="cant2()">

  </div>
  <div style="margin-left:300px"class="ndiv4" id="audi" onmouseover="auditorium()" onmouseout="auditorium2()">

  </div>
  <div  style="margin-left:150px" class="ndiv5" id="smart" onmouseover="smarty()" onmouseout="smarty2()">

  </div>
   </div>
   <div class="div11">
            <p id="heading2"><b><u>01&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b></p>
            <p id="p3"><b>Live Online Examination</b></p>
            <ul id="unlist">
                <li class="li1">Effective, efficiant and futuristic way of conducting exams</li>
                <li class="li1">Hassle free and paperless experiance with quick results</li>
                <li class="li1">Simple, secured and transparent mode of exams</li>
            </ul>
        </div>
        <div class="div11"><img style="width: 50%;height: 400px;float: left; " src="onlineexam.jpeg" alt="">

        </div>
        <div class="div12"><img style="width: 50%;height: 400px;float: left; " src="onlinefee.jpeg" alt="">

        </div>
        <div class="div12">
            <p id="heading2"><b><u>02&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b></p>
            <p id="p3"><b>Online Fee Payment</b></p>
            <ul id="unlist">
                <li>Secured online fee collection with instant receipts</li>
                <li>Advance fee collection with automated reminders</li>
                <li>In depth fee analytics and simplified financial reports</li>
            </ul>
        </div>
        <div class="div11">
            <p id="heading2"><b><u>03&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b></p>
            <p id="p3"><b>Student e-Dairy</b></p>
            <ul id="unlist">
                <li>Seamless communication with instant notifications</li>
                <li>Secured, cost effective and transparent record keeping</li>
                <li>Digital solution to age old cumbersome practise of physical diary</li>
               </ul>
        </div>
        <div class="div11"><img style="width: 50%;height: 400px;float: left; " src="e-diry.jpeg" alt="">

        </div>
        <footer id="footer1" style="float: left;width:100%;height:fit-content;margin-top:20px;">
            <div class="footerdiv">links <br>Home<br> Privacy Policy</div>
            <div class="footerdiv"> +91-8376527836 <br>support@onlineacadmy.com</div>
            <div class="footerdiv">Get it On <br>Google play</div>
            <p>Copyright 2021 Online Academy All Rights Reserved</p>
        </footer>

 </body>
<style>
   #heading1{
            margin-top: 5px;text-align: center;color: white;font-size: 90px;
            font-family:'Times New Roman', Times, serif;
        }
        #p1{
            margin-top: 5px;
            text-align: center;
            color:white;
            font-size: 30px;
            font-family:'Times New Roman', Times, serif;
        }
        .div11{
            width: 50%;
            height: 400px;
            margin-top: 20px;
            padding-left: 30px;
            float: left;
        }
        .div12{
            width: 50%;
            height: 400px;
            margin-top: 20px;
            padding-left: 40px;
            float: left;
        }
        #heading2{

            color: white;
            text-shadow: 4px 4px #D8BFD8;
            font-size: 50px;
        }
        #unlist>li{
          color:white;
          font-size:25px;
        }


      img{
      width: 50%;
      height: 300px;
      margin-left: 100px;
      }
      #heading3{
      color: white;
      text-align: center;
      font-size: 40px;
      font-family: Verdana;
      }
        #p3{
            color: white;
            font-size: 30px;
        }

        #footer1{
            background-color: navy;
            color: blanchedalmond;
            height: 100px;
            text-align: center;
        }
        .footerdiv{
            width:25%;
            text-align: center;
            color: blanchedalmond;
            background-color: navy;
            float: left;
        }
* {
  box-sizing: border-box;
   }
   body {
  font-family: Verdana, sans-serif;
  margin:0;
  background-image: url('../login/bg4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  backdrop-filter:blur(15px);

  }
  .mySlides {
  display: none
  }
  img {
  vertical-align: middle;
  }

/* Slideshow container */
.slideshow-container {

  background-image: url('scevent.jpg');
  background-repeat: no-repeat;
  background-size: 500px 400px;
  background-color: black;
  border: none;
  position: relative;
  margin-left: 450px;
  width:500px;
  height:400px;
border-radius: 30px 30px;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
   position:absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family:Magneto ;
  font-weight: bold;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
 margin-left: 670px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
@keyframes  shrutian{
  from{left:0px;}
  to{left:800px;}
}

  .li2{
    width:97%;
    height:50px;
    border:1px solid black;
    border-radius:50px 50px;
    background-color:#330026;
    list-style-type: none;
     overflow: hidden;
     background-attachment: fixed;
  }
  .li2>li{
    float:left;
}

.li2>li a {
display:block;
color: white;
text-align: center;
padding: 16px 15px;
text-decoration: none;
}

.li2>li a:hover:not(.s1) {
background-color: #111;
}

.s1{

background-color:purple;
}
.icon{
width:250px;
height:200px;
margin
}
.div1{
margin-left: 300px;
float: left;
}
.div2{
font-size: 50px;

font-family:algerian;
text-decoration: underline;
}
.desc{

width: 1000px;
height:120px;
font-family:Showcard Gothic;
font-weight: bold;
font-size: 25px;
margin-left: 200px;
overflow-y: scroll;

}

.fdesc{
margin-top: 20px;

}

.shrt{

  height: 180px;
background-color: white;
}
.ndiv1{
margin-left: 115px;
width:300px;
height:300px;
float: left;
background-image: url('lib2.jpg');
background-repeat: no-repeat;
background-size: cover;
margin-top: 30px;
border-radius: 30px 30px;
}
.ndiv2{
margin-left: 115px;
width:300px;
height:300px;
float: left;
margin-top: 30px;
background-image: url('play.jpg');
background-repeat: no-repeat;
background-size: cover;
border-radius: 30px 30px;

}
.ndiv3{
margin-left: 115px;
width:300px;
height:300px;
float: left;
margin-top: 30px;
background-image: url('canteen.jpg');
background-repeat: no-repeat;
background-size: cover;
border-radius: 30px 30px;

}
.ndiv1,.ndiv2,.ndiv3,.ndiv4,.ndiv5:hover{
  cursor: pointer;

}
.ndiv4{
margin-left: 115px;
width:300px;
height:300px;
float: left;
margin-top: 30px;
background-image: url('auditorium.jpg');
background-repeat: no-repeat;
background-size: cover;
border-radius: 30px 30px;
}
.ndiv5{
margin-left: 115px;
width:300px;
height:300px;
float: left;
margin-top: 30px;
background-image: url('smart2.jpg');
background-repeat: no-repeat;
background-size: cover;
border-radius: 30px 30px;
}

</style>
</html>
