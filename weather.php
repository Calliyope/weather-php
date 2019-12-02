<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="/weatherstyles/style.css">
</head>

<body>

<h1> Weather</h1>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
         City name: <input type = "text" name = "name" />
         
         <input type = "submit" />
      </form>

<!-- ************ PHP BELOW *************** --> 

<?PHP

data.forEach(el => {

    $current = el.dt_txt.split(" ");
    $wind = dateNTime[0].split("-");
    $conditions = dateNTime[1].split(":");

$current = "1°C";
$wind = "2°C";
$conditions = "-2°C";

$url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['name'] . "&units=metric&APPID=a3617c67d743baa84193327c9587297b";

if( $_POST["name"]) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
       die ("invalid name, please only use alpha characters");
    }
    echo "Weather for ". $_POST['name']. "<br />" . "<br />";

    echo "Current temperature is: " . $current . "<br />";

    echo "Current wind speed is: " . $wind . "<br />";

    echo "Current conditions: " . $conditions . "<br />";
    
    $response = file_get_contents($url);
    $decodedResponse = json_decode($response, true);
    $data = $decodedResponse['list'][0];

    var_dump($data);
    exit();
 }

?>

</body>

</html>