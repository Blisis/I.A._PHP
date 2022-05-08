<!Doctype HTML>
<html lang="RO">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Tema 02</title>
    </head>
    <body class="container">
<?php

$a = rand(1,100);
$b = rand(1,100);

if($a == $b)
    echo "Din păcate atât <b>".$a."</b> === <b>".$b."</b>";
else
    echo ($a > $b ) ? "Numărul <b>".$a."</b> este mai mare decât numarul <b>".$b."</b>" : "Numărul <b>".$b."</b> este mai mare decât numarul <b>".$a."</b>";
?>
<hr>
<?php

$p = rand(1,100);

switch($p) {
    case $p === 65:
        echo "Persoana noastră se poate pensiona oricând, având 65 de ani";
        break;
    case $p < 65:
            echo "Persoana noastră nu se poate pensiona, deoarece are <b>".$p."</b> ani, și mai are nevoie de <b>".(65-$p)."</b> ani pentru pensionare";
        break;
    case $p > 65:
        echo "Persoana noastră este pensioantă, deoarece are <b>".$p."</b> ani, și are <b>".($p-65)."</b> ani de pensie";
        break;
    default:
        echo "Persoana noastră nu este om :(";
        break;
}
?>
<hr>
<?php

$x = rand(1,100);
$y = rand(1,100);
$z = round(sqrt(($x**2) + ($y**2)), 2);
echo "BA = $x <br/> AC = $y<br/>BA^2 + AC^2 = $z<br/>";
echo "Mediana = ".round(($x+$y)/2, 2) ."<br/>";
echo "Radacina patrată a medianei = ".round(sqrt(($x+$y)/2), 2)
?>
<hr>
<?php

function zodie($luna, $zi){
    if($luna == 1 && $zi <= 19)
        return "Capricorn";
    elseif($luna == 1 && $zi >= 20)
        return "Vărsător";
    elseif($luna == 2 && $zi <= 18)
        return "Vărsător";
    else
        return "Pești";
}
function row()
{
    $an = rand(1900, 2022);
    $bisect = ($an % 4) === 0;
    $luna = rand(1, 2);
    $zi = ($luna === 1) ? rand(1, 31) : (($bisect) ? rand(1, 29) : rand(1, 28));
	$zi = ($zi < 10) ? "0".$zi : $zi;
    $zodie = zodie($luna, $zi);
    $luna = "0".$luna;
    return "<tr><td>" . $an . "</td><td>".($bisect ? "Da" : "Nu")."</td><td>" . $luna . "</td><td>" . $zi . "</td><td>".$an."-".$luna."-".$zi."</td><td>" . $zodie . "</td></tr>";
}
?>
        <table class="table table-sm table-striped table-responsive">
            <thead>
                <tr>
                    <th>An</th>
                    <th>Bisect</th>
                    <th>Luna</th>
                    <th>Ziua</th>
                    <th>Data</th>
                    <th>Zodie</th>
                </tr>
            </thead>
            <tbody>
        <?php
        for($i = 10; $i > 0; $i--)
            echo row();
        ?>
            </tbody>
        </table>
    <hr/>
    <a href="index.txt" class="btn btn-primary">Source DL</a>
    </body>
</html>