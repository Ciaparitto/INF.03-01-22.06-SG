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
        $pytanie = "SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM lowisko,ryby WHERE lowisko.rodzaj = 3";
        $kwerenda = mysqli_query($conn,$pytanie);
        while($tablica = mysqli_fetch_row($kwerenda))
        {        
        
        echo "<li>$tablica[0] plywa w rzece $tablica[1],$tablica[2]</li>";
        }
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
            <?php
                $conn = mysqli_connect("localhost","root","","wedkowanie");
                $pytanie = "SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia = 1";
                $kwerenda = mysqli_query($conn,$pytanie);
                $LP = 1;
                while($tablica = mysqli_fetch_row($kwerenda))
                {        
                echo "<tr>";
                echo "<td>$LP</td>";
                echo "<td>$tablica[1]</td>";
                echo "<td>$tablica[2]</td>";
                echo "</tr>";
                $LP++;
                }
                mysqli_close($conn);
                ?>
    
        </table>
    </div>
    <footer>Strone Wykonał:00000000000</footer>
</body>
</html>