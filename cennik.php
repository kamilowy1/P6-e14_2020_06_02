<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl.css"/>
    <title>Pokoje</title>
</head>
<body>
    <div id="baner1">
     <h2> WYNAJEM POKOI </h2>
    </div>

    <div id="menu1">
     <a href="index.html">POKOJE</a>
    </div>

       <div id="menu2">
        <a href="cennik.php">CENNIK</a>
       </div>

         <div id="menu3">
         <a href="kalkulator.html">KALKULATOR</a>
         </div>

           <div id="baner2"></div>

           <div id="lewy">

           </div>

             <div id="środkowy">
               <h1> Cennik </h1>
    <table>        
<?php
// utworzenie zmiennych polaczeniowych 

$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "wynajem";

$conn = mysqli_connect($server,$user,$passwd,$dbname);

/*
//sprawdzenie polaczenia 

if (!$conn){
  die ("fatal error:".mysqli_error($conn));
} echo "jest okej";
*/

$sql = "SELECT * FROM `pokoje`;";
$zapytanie = mysqli_query($conn,$sql);

while ($wynik = mysqli_fetch_row($zapytanie)){
  echo "<tr>";
  echo "<td>". $wynik[0]. "</td>";
  echo "<td>". $wynik[1]. "</td>";
  echo "<td>". $wynik[2]. "</td>";
  echo "</tr>";
}

mysqli_close($conn);

?>
</table>
             </div>

               <div id="prawy">

               </div>
                <div id="stopka">
                 <p> Stronę opracował:000000000 </p>
                </div>

</body>
</html>