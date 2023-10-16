<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div class="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ul>
          <?php
          $conn = mysqli_connect("localhost","root","","wedkowanie");

          
          mysqli_close($conn);
          ?>
        </ul>
    </div>
    <div class="prawy">
    
        <img src="ryba1.jpg" alt="Sum">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>  
    <div class="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p</th>
                <th>Gatunek</th>
                <th>występowanie</th>
            </tr>
            <tr>
                <td>efekt1</td>
                <td>efekt1</td>
                <td>efekt1</td>
            </tr>
        </table>
    </div>
    <footer>Strone Wykonał:00000000000</footer>
</body>
</html>