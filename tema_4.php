<html>
<head>
    <title>
        <?php
        $nume="Tema 4";
        echo "Tema 4";
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
            <h2>Fixare de cunostinte</h2>
            <ul>
                <li>creati un tablou si populati-l cu 50 de numere aleatoare
                    <ul>
                        <li>afisati doar numerele pare, sub forma de lista HTML</li>
                        <li>afisati toate numerele sub forma de lista HTML, dar colorate diferit: cele pare cu verde, cele impare cu rosu</li>
                    </ul>
                </li>
                <li>definiti un tablou cu valute, de forma nume_valuta=&gt;curs, unde cursul este raportat la RON (ex: 'EUR'=&gt;4.1, 'USD'=&gt;3 etc). Sa se parcurga tabloul, generand pentru fiecare valuta o suma aleatoare si afisand rezultatul conversiei acesteia la RON, sub forma "Suma de X EUR reprezinta Y RON" (unde EUR devine pe rand USD, GBP etc)</li>
                <li>scrieti o functie care primeste ca argument un tablou de forma text=&gt;link si genereaza o lista HTML cu link-uri. Inainte de a parcurge tabloul, se va verifica daca variabila primita ca argument este intr-adevar de tip tablou, folosind is_array()!</li>
            </ul>

            <h2>Avansati</h2>
            <ul>
                <li>se genereaza o data calendaristica. Sa se afiseze data urmatoare (urmatoarea zi). Indiciu: puteti crea un tablou de forma luna=&gt;nr_zile, iar in cazul lunii februarie sa tineti cont de anii bisecti</li>
                <li>fie un magazin cu diverse modele de telefoane mobile, manufacturate de feluriti producatori. Incepeti prin a defini manual un tablou cu producatori si modelele atasate:

                    <pre>$modele = array(
	"producator1" =&gt; array ("model1", "model2", ...),
	"producator2" =&gt; "array( "model3", model4", ...),
â€¦
); </pre>

                    Se cere:
                    <ol>
                        <li>Pornind de la tabloul de mai sus, generati (algoritmic) un alt tablou, numit $magazin, de forma:
                            <pre>$magazin = array("model1"=&gt;array("producator"=&gt; "producator1",
					"caracteristici"=&gt;array("lungime"=&gt;...
								"latime"=&gt;...,
								"greutate"=&gt;...)
			),
			"model2"=&gt;array("producator"=&gt;...etc
</pre>
                            in care dimensiunile si greutatea sunt generate aleator (in limite rezonabile, desigur)
                        </li>

                        <li>
                            Scrieti un algoritm care determina si afiseaza toate caracteristicile celui mai usor telefon (producatorul, modelul, lungime, latime, greutate)</li>
                        <li>Scrieti un algoritm care determina si afiseaza latimea medie a telefoanelor pentru fiecare producator in parte</li>
                        <li>Generati si afisati un tabel HTML structurat ca cel de mai jos:<br><br>


                            <table border="2" bordercolor="#000000" cellpadding="9" cellspacing="0" width="100%">
                                <colgroup><col width="62*"> <col width="66*"> <col width="65*"> <col width="63*"> </colgroup><tbody>
                                <tr valign="top">
                                    <td rowspan="4" width="24%">
                                        <p>producator1 </p>
                                    </td>
                                    <td rowspan="2" width="26%">
                                        <p> model1 </p>
                                    </td>
                                    <td width="26%">
                                        <p>lungime x latime </p>
                                    </td>
                                    <td width="24%">
                                        <p>102 x 40 </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="26%">
                                        <p>greutate </p>
                                    </td>
                                    <td width="24%">
                                        <p>...etc... </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="2" width="26%">
                                        <p>model2 </p>
                                    </td>
                                    <td width="26%">
                                        <p>lungime x latime </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="26%">
                                        <p>greutate </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="4" width="24%">
                                        <p>producator2 </p>
                                    </td>
                                    <td rowspan="2" width="26%">
                                        <p> model3 </p>
                                    </td>
                                    <td width="26%">
                                        <p>lungime x latime </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="26%">
                                        <p>greutate </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td rowspan="2" width="26%">
                                        <p>model4 </p>
                                    </td>
                                    <td width="26%">
                                        <p>lungime x latime </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td width="26%">
                                        <p>greutate </p>
                                    </td>
                                    <td width="24%">
                                        <p><br>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            <p>Reminder: extinderea unei celule de tabel HTML pe mai multe linii sau coloane se face folosind atributele colspan sau rowspan:

                                &lt;td rowspan=4&gt;producator1&lt;/td&gt;</p></li>

                    </ol>
                </li>
            </ul>
        </td>


    </tr>
    </tbody></table>


<?php





?>
</body>
</html>

