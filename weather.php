<!DOCTYPE html>

<html>

<head>

   <link rel="stylesheet" href="/weatherstyles/style.php" media="screen">
</head>

<body>
   <div id="bodyDiv">
      <h1 id="title"> Weather Application</h1>

      <form id="form" action="<?php $_PHP_SELF ?>" method="POST">
         City name: <input type="text" name="location" />

         <input type="submit" />
      </form>

      <?PHP

      if (count($_POST) > 0) {

         $url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['location'] . "&units=metric&APPID=a3617c67d743baa84193327c9587297b";

         if (preg_match("/[^A-Za-z'-]/", $_POST['location'])) {
            die("invalid name, please only use alpha characters");
         }

         $response = file_get_contents($url);
         $decodedResponse = json_decode($response, true);
         $data = $decodedResponse['list'][0];

         $current = $data["main"]["temp"];
         $wind = $data["wind"]["speed"];
         $conditions = $data["weather"][0]["description"];

         ?>

         <article id="results">

            <?php
               echo "Weather for " . $_POST['location'];

               ?>

            <br /><br />

            <?php echo "Current temperature is: " . $current . "°C."; ?>

            <br />

            <?php echo "Current wind speed is: " . $wind . "kph."; ?>

            <br />

            <?php echo "Current conditions: " . $conditions . "."; ?>

            <br />

         </article>
   </div>

<?php } ?>

</body>

</html>