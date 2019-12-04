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
background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 100%), url(/weatherstyles/melbourne.jpg);
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
background-color: #fffff9;
margin-left: 22%;
margin-right: 22%;
box-shadow: grey 3px 3px 10px;
}

#bodyDiv {
margin-left: 25%;
margin-right: 25%;
padding: 35px;
border-radius: 8px;
margin-top: 8%;
background-color: #DDEBF0;
box-shadow: grey 3px 3px 10px;
background-image: url(/weatherstyles/clouds.jpg);
background-size: cover;
}

#resultsTitle {
font-size: 2em;
}

#icon {
text-align: center;
}