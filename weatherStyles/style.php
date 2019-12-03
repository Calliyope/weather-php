<?php

header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.9em';
$border = 'black 1px solid';
?>


body {
background-color: #E4F2EE;
color: #333C4B;
font-family: <?= $font_family ?>;
background-size: cover;
background-image: linear-gradient(to bottom, rgba(255,255,255,0.4) 0%,rgba(255,255,255,0.4) 100%), url(/weatherstyles/weather.jpg);
}

#title {
color: #FA5E42 ;
text-align: center;
font-size: 3rem;
}

#form {
text-align: center;
font-weight: bold;
margin-top: 40px;
color: #FA5E42;
}

#results {
border-radius: 8px;
padding: 25px;
margin-top: 30px;
text-align: center;
background-color: #fffcf4;
margin-left: 22%;
margin-right: 22%;
box-shadow: grey 2px 2px 10px;
}

#bodyDiv {
margin-left: 25%;
margin-right: 25%;
padding: 40px;
border-radius: 8px;
margin-top: 10%;
background-color: #e8f6f7;
box-shadow: grey 2px 2px 10px;
}