<html>
<head>
    <title>
        <?php
        $nume = "Tema 1";
        echo "Tema 1";
        ?>
    </title>
</head>
<body>
<a href="index.php" ><button> Inapoi</button></a>
<h1 align="center"><?php echo $nume?></h1></br>
<h3 align="center">Cerinte:</h3>


<table cellpadding="10" border="1" valign="center">
    <tbody><tr valign="top">
        <td>
            <h3 class="jobstitle">Instalare software</h3>
            <ul>
                <li>se descarca wampserver de pe www.wampserver.com</li>
                <li>se descarca notepad++ de pe http://notepad-plus.sourceforge.net</li>
                <li>asigurati-va ca porturile 80 (cel folosit de serverul web) si 3306 (cel folosit de MySQL) NU sunt deschise. Comanda netstat -an arata porturile deja deschise (cele aflate in starea LISTENING). </li>
                <li>se porneste wampserver</li>
                <li>se activeaza serverul folosind optiunea Put Online din meniul aplicatiei</li>
                <li>se acceseaza serverul folosind URL-ul http://localhost dintr-un browser</li>
                <li>se determina locatia default pentru DocumentRoot (radacina paginilor web) alegand link-ul phpinfo() din sectiunea Tools si vizualizand valoarea variabilei DOCUMENT_ROOT de la capitolul Apache Environment</li>
            </ul>
            <h3 class="jobstitle">Creare alias-uri, verificarea corectei functionari</h3>
            <ul>
                <li>In arhiva <a href="siteHTML.zip">siteHTML.zip</a> aflata in acelasi director cu acest fisier se gaseste un site ce contine exclusiv HTML si imagini. Se dezarhiveaza arhiva intr-un director ales de dvs - dar altul decat document root-ul determinat anterior!</li>
                <li>se creeaza alias-ul <strong>/siteHTML</strong> catre directorul in care s-a dezarhivat site-ul. Se verifica corecta functionare a alias-ului accesand site-ul dezarhivat, la adresa <a href="http://localhost/siteHTML">http://localhost/siteHTML/</a></li>
                <li>se procedeaza in acelasi fel pentru a crea un alias <strong>/manual</strong>, care va pointa catre PHP Manual. Versiunea de download a PHP Manual poate fi gasita la adresa  <a href="http://www.php.net/get/php_manual_en.tar.gz/from/a/mirror">http://www.php.net/get/php_manual_en.tar.gz/from/a/mirror</a>. Puteti pastra acest alias dupa incheierea cu succes a aplicatiei, deoarece veti apela des la PHP Manual pe viitor</li>
                <li>se verifica corecta functionare a interpretorului PHP integrat in serverul web, dezarhivand de data aceasta <a href="sitePHP.zip">sitePHP.zip</a>. Se creeaza un alt alias, <strong>/sitePHP</strong>, catre directorul ales pentru dezarhivare si se verifica functionarea folosind <a href="http://localhost/sitePHP/">http://localhost/sitePHP/</a></li>
            </ul>
        </td>


    </tr>
    </tbody></table>








<?php

?>
</body>
</html>




