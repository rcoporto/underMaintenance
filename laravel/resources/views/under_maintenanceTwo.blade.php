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

    @media only screen and (max-width: 600px) {
      body {
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        background-color: #f0f0f0;
        /* Adding background color to make the background icon visible */
      }

      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 80%;
        /* Adjust width as necessary */
        padding: 20px;
        color: #171c7e;
        z-index: 1;
      }

      .centered::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 112%;
        height: 112%;
        background-image: url('image/under-construction.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        /* Change this value to adjust the opacity */
        transform: translate(-50%, -50%);
        z-index: -1;
        /* Ensure the background is behind the text */
      }

      .centered img {
        height: 50px;
        margin-top:50px;
      }

      .logosBottom img {
        height: 60px;
        margin: 30px;
      }



      .headerText {
        font-weight: 700;
        font-size: 2em;
        /* font-size:5vw; */
        margin: 0;
        color: #090e3f;
      }

      .headerItalic {
        font-size: 1.5em;
        font-style: italic;
        margin: 0;
      }

      .normalText {
        margin: 0;
      }

      .normalText b {
        color: #171c7e;
      }

    }

    @media only screen and (min-width: 600px) {
      body {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
        background-color: #f0f0f0;
        /* Adding background color to make the background icon visible */
      }

      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 80%;
        /* Adjust width as necessary */
        padding: 20px;
        color: #171c7e;
        z-index: 1;
      }

      .centered::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 112%;
        height: 112%;
        background-image: url('image/under-construction.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        /* Change this value to adjust the opacity */
        transform: translate(-50%, -50%);
        z-index: -1;
        /* Ensure the background is behind the text */
      }

      .centered img {
        height: 60px;
      }

      .logosBottom img {
        height: 80px;
        margin: 30px;
      }



      .headerText {
        font-weight: 700;
        font-size: 2.8em;
        /* font-size:5vw; */
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

    }
  </style>
</head>

<body>
  <div class="centered">
    <img src="image/ais_logo_transparent.png" alt="ais logo">
    <br><br>
    <p class="headerText">SITE IS UNDER MAINTENANCE</p>
    <p class="headerItalic">We sincerely apologize for the inconvenience.</p>
    <br>
    <p class="normalText">For urgent inquiries, please contact:</p>
    <span class="normalText">AIS NOTAM Management Section: <b>ais_notammanagement@caap.gov.ph</b></span>
    <br>
    <span class="normalText">AIS Operations: <b>ais_operations@caap.gov.ph</b></span>
    <br><br>
    <div class="logosBottom">
      <img src="image/CAAP_Logo_Transparent.png" alt="CAAP logo">
      <img src="image/bagong_pilipinas.png" alt="Bagong Pilipinas logo">
    </div>
  </div>
</body>

</html>