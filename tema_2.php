<html>
<head>
    <title>
        <?php
        $nume = "Tema 2";
        echo "Tema 2";
        ?>
    </title>
</head>
<body>
<a href="index.php" ><button> Inapoi</button></a>
<h1 align="center"><?php echo $nume?></h1></br>
<h2 align="center">Cerinte:</h2>
<table cellpadding="10" border="1" valign="center">
    <tbody><tr valign="top">
        <td>
            <p>In aplicatiile ce urmeaza, pentru a genera numere intregi aleatoare se foloseste functia <strong>rand(N1,N2)</strong> care returneaza valori in intervalul [N1,N2]. Ex: dupa executarea instructiunii $x = rand(1,100), variabila $x va avea o valoare intreaga mai mare sau egala cu 1 si mai mica sau egala cu 100. Executand de mai multe ori instructiunea, $x va capata diferite valori, distribuite uniform in intervalul 1...100.</p>

            <h3 >Fixare de cunostinte</h3>
            <ul>
                <li>1.se genereaza doua numere aleatoare. Se afiseaza cele doua numere si care dintre ele este mai mare, sub forma "Numarul <strong>N1</strong> este mai mare decat numarul <strong>N2</strong>". (numarul mai mare este afisat intotdeauna primul, iar cele doua numere sunt afisate bold)</li>
                <li>2.se genereaza in mod aleator varsta unei persoane. Considerand varsta de pensionare ca fiind 65 de ani, se va afisa daca persoana in cauza este pensionata sau nu, si in cel de-al doilea caz, numarul de ani ramasi pana la pensionare</li>
                <li>3.se genereaza in mod aleator lungimile celor doua catete ale unui triunghi dreptunghic. Sa se afiseze lungimile catetelor, ipotenuzei si a inaltimii perpendiculare pe ipotenuza. Se va folosi functia sqrt() care returneaza radacina patrata a numarului primit ca argument. Exemplu: executand $a = sqrt(9), variabila $a va avea apoi valoarea 3.</li>
            </ul>

            <h3 >Avansati</h3>
            <ul>
                <li>Se genereaza in mod aleator o data de nastere. Pentru simplificare, luna generata va fi ianuarie sau februarie. Se va incerca generarea zilei in intervalul corect (1-31 pentru ianuarie, 1-28 sau 1-29 pentru februarie, in functie de an). Se va afisa un tabel HTML cu:
                    <ul>
                        <li>Data generata</li>
                        <li>Daca anul nasterii este bisect (folosind operatorul ternar)</li>
                        <li>Zodia persoanei (folosind operatorul ternar)</li>
                    </ul>
                </li></ul>
        </td>


    </tr>
    </tbody></table>
</br>
</br>
<h2 align="center">Rezolvarea:</h2>


<?php
$n=rand(1,100);
$m=rand(1,100);
if($n>$m){
    echo "1.Numarul <b>$n</b> este mai mare decat numarul <b>$m</b></br>";
    }else if($n=$m){
        echo "1.Numarul <b>$n</b> este egal cu numarul <b>$m</b></br>";
    }else{
        echo "1.Numarul <b>$m</b> este mai mare decat numarul <b>$n</b></br>";
    }

if($n>65){
    echo "2.Persoana este pensionata!</br>";
    }else if($n==65){
    echo "2.In cursul acestui an se pensioneaza!</br>";
    }else if($n<65){
    $pensie=65-$n;
    echo "2.Persoana nu este pensionata , peste <b>$pensie</b> ani se va pensiona!</br>";
    }


?>
</body>
</html>

