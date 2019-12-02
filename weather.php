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

$current = "1°C";
$high = "2°C";
$low = "-2°C";

$url = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['name'] . "&units=metric&APPID=a3617c67d743baa84193327c9587297b";

if( $_POST["name"]) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
       die ("invalid name, please only use alpha characters");
    }
    echo "Weather for ". $_POST['name']. "<br />" . "<br />";

    echo "Current temperature is: " . $current . "<br />";

    echo "High today: " . $high . "<br />";

    echo "Low today: " . $low . "<br />";
    
    $response = file_get_contents($url);
    $response = json_decode($response);
    
    var_dump($response);
    exit();
 }

?>

</body>

</html>