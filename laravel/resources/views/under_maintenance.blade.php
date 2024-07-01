<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    @font-face {
      font-family: 'Open Sans';
      src: url('fonts/open_sans/OpenSans-Regular.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'Open Sans';
      src: url('fonts/open_sans/OpenSans-Bold.ttf') format('truetype');
      font-weight: 700;
      font-style: normal;
    }

    @font-face {
      font-family: 'Open Sans';
      src: url('fonts/open_sans/OpenSans-Italic.ttf') format('truetype');
      font-weight: 400;
      font-style: italic;
    }

   

    /* Split the screen in half */
    .split {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* Control the left side */
    .left {
      left: 0;
      background-color: #ffffff;
    }

    /* Control the right side */
    .right {
      right: 0;
      background-color: #0455bb;
      background-image: url(image/ATMC.jpg);
      padding:0;
      /* opacity:50%; */
    }
    .rightFilter{
      height:100%;
      width:100%;
      background-color: black;
      opacity:25%;
    }

    /* If you want the content centered horizontally and vertically */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      width: 100%;

      font-family: 'Open Sans', sans-serif;
      color: #171c7e;
    }

    /* Style the image inside the centered container, if needed */
    .centered img {
      height:60px;
      
      /* border-radius: 50%; */
    }

    .logosBottom img{
      height:80px;
      margin:30px;
    }


    .headerText {
      font-weight: 700;
      font-size: 2.8em;
      margin: 0;
      color: #090e3f;
    }

    .headerItalic {
      font-size: 1.75em;
      font-style: italic;
     
      margin: 0;
    }

    .normalText {
      margin: 0;
    }

    .normalText b {
      color: #171c7e;
    }
  </style>
</head>

<body>
  <!-- <img src="{{ asset('image/under_maintenance_ver1.png') }}" alt="Custom Image">
    <img src="{{ asset('image/under_maintenance_ver2.png') }}" alt="Custom Image">
    <img src="{{ asset('image/under_maintenance_ver3.png') }}" alt="Custom Image">
        <img src="{{ asset('image/under_maintenance_ver4.png') }}" alt="Custom Image"> -->

  <div class="split left">
    <div class="centered">
      <img src="image/ais_logo_transparent.png" alt="ais logo">
      </br>
      </br>
      <p class="headerText">SITE IS UNDER MAINTENANCE</p>
      <p class="headerItalic">We sincerely apologize for the inconvenience.</p>
      </br>
      <p class="normalText">For urgent inquiries, please contact:</p>
      <span class="normalText">AIS NOTAM Management Section: <b>ais_notammanagement@caap.gov.ph</b></span>
      </br>
      <span class="normalText">AIS Operations: <b>ais_operations@caap.gov.ph</b></span>
      <br>  
      <br>
      <div class="logosBottom">
      <img src="image/CAAP_Logo_Transparent.png" alt="ais logo">
      <img src="image/bagong_pilipinas.png" alt="ais logo">
      </div>
    </div>
  </div>

  <div class="split right">
    <div class="rightFilter">
      <!-- <img src="image/ATMC.jpg" alt="under maintenance icon"> -->
    </div>
  </div>



</body>

</html>