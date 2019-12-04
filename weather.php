<!DOCTYPE html>

<html>

<head>

   <link rel="stylesheet" href="/weatherstyles/style.php" media="screen">
</head>

<body>

   <?PHP

   if (count($_POST) > 0) {

      $url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['location'] . "&units=metric&APPID=a3617c67d743baa84193327c9587297b";

      if (preg_match("/[^A-Za-z'-]/", $_POST['location'])) {
         die("invalid or unknown name (please only use alpha characters)");
      }

      $response = file_get_contents($url);
      $decodedResponse = json_decode($response, true);
      $data = $decodedResponse['list'][0];

      $current = $data["main"]["temp"];
      $wind = $data["wind"]["speed"];
      $conditions = $data["weather"][0]["description"];

      $clearSky = "/weatherstyles/icons/clearSkyIcon.png";
      $fewClouds = "/weatherstyles//icons/fewCloudsIcon.png";
      $brokenClouds = "/weatherstyles/icons/brokenCloudsIcon.png";
      $overcastClouds = "/weatherstyles/icons/overcastCloudsIcon.png";
      $lightSnow = "/weatherstyles/icons/lightSnowIcon.png";
      $scatteredClouds = "/weatherstyles/icons/scatteredCloudsIcon.png";


      $currentWeather = "";

      $bgClearSky = "/weatherstyles/sunny.jpg";
      $bgFewClouds = "/weatherstyles/brokenclouds.png";
      $bgBrokenClouds = "/weatherstyles/clouds.jpg";
      $bgOvercastClouds = "/weatherstyles/overcast.jpg";
      $bgLightSnow = "/weatherstyles/snow.jpg";
      $bgScatteredClouds = "/weatherstyles/scatteredclouds.jpg";

      $bgCurrent = "";

      switch ($conditions) {
         case "clear sky":
            $currentWeather = $clearSky;
            $bgCurrent = $bgClearSky;
            break;
         case "few clouds":
            $currentWeather = $fewClouds;
            $bgCurrent = $bgFewClouds;
            break;
         case "broken clouds":
            $currentWeather = $brokenClouds;
            $bgCurrent = $bgBrokenClouds;
            break;
         case "overcast clouds":
            $currentWeather = $overcastClouds;
            $bgCurrent = $bgOvercastClouds;
            break;
         case "light snow":
            $currentWeather = $lightSnow;
            $bgCurrent = $bgLightSnow;

         case "scattered clouds":
            $currentWeather = $scatteredClouds;
            $bgCurrent = $bgScatteredClouds;
      }
      ?>
         <div id="bodyDiv" style="background-image:url(<?php echo $bgCurrent ?>) no-repeat center center fixed">
            <h1 id="title"> How's the Weather?</h1>

            <form id="form" action="<?php $_PHP_SELF ?>" method="POST">
               City name: <input type="text" name="location" />

               <input type="submit" />
            </form>


            <div id="icon">
               <?php echo "<img src='" . $currentWeather . "' height='300' width='300'>";
                  ?>

            </div>


            <article id="results">
               <div id="resultsTitle">
                  <?php
                     echo "Weather for " . $_POST['location'];

                     ?>
               </div>
               <br /><br />

               <?php echo "Current temperature is: " . $current . " °C."; ?>

               <br /><br />

               <?php echo "Current wind speed is: " . $wind . " kph."; ?>

               <br /><br />

               <?php echo "Current conditions: " . $conditions . "."; ?>

               <br /><br />

            </article>
         </div>

      <?php } ?>

</body>

</html>