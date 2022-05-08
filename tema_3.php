<html>
<head>
    <title>
        <?php
        $nume="Tema 3";
        echo "Tema 3";
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
            <h3 class="jobstitle">1.Structuri de control al executiei</h3>

            <h2>Fixare de cunostinte</h2>
            <ul>
                <li>afisati numerele de la 1 la 100 din 3 in 3, sub forma unei liste HTML</li>
                <li>aceeasi cerinta, insa numerele trebuie colorate astfel incat sa formeze un degradeu</li>
                <li>aceeasi cerinta, insa se afiseaza un tabel HTML cu doua coloane: pe prima se plaseaza numarul liniei (1,2,3...), iar pe a doua numarul (1,3,6,9,...)</li>
                <li>aceeasi cerinta, dar vor fi afisate numerele din X in X, unde X (pasul) este definit sub forma unei constante la inceputul scriptului</li>
                <li>aceeasi cerinta, dar numarul de inceput, cel de final si pasul vor fi definite intr-un fisier include, sub forma de constante</li>
            </ul>

            <h2>Avansati</h2>
            <ul>
                <li>sa se afiseze sub forma de tabel HTML cu 3 coloane toate tripletele de numere intregi x,y si z aflate in relatia x&lt;y&lt;z, cuprinse intre 1 si 100 si care respecta relatia lui Pitagora: x<sup>2</sup>+y<sup>2</sup>=z<sup>2</sup>.</li>
                <li>sa se determine singurul set de astfel de numere a caror suma este 1000 (indiciu: numerele se afla in intervalul 1...500).</li>
                <li>sa se gaseasca cel mai mare numar simetric (ex: 12321, 6776) care se scrie ca produs a doua numere consecutive de 3 cifre.</li>
                <li>li se vor adauga aplicatiilor anterioare un antet si un subsol al paginii.
                    <ul>
                        <li>antetul ("header") va afisa adresa IP a clientului web, sub forma unui link. La click pe link se vor afisa informatiile whois despre acea adresa IP. In acest scop, link-ul va pointa catre https://whois.domaintools.com/adresaIP(ex: pentru adresa 1.2.3.4, link-ul va fi de forma &lt;a "href= https://whois.domaintools.com/1.2.3.4"&gt;1.2.3.4&lt;/a&gt;)</li>
                        <li>subsolul ("footer") va consta dintr-o banda colorata ce se intinde pe intreaga latime a ecranului, in cadrul careia se va afisa numele cursantului, centrat</li>
                    </ul>
                    Antetul si subsolul vor fi implementate ca fisiere separate: header.php si footer.html</li>
            </ul>

            <h3 class="jobstitle">2. Functii</h3>

            <h2>Fixare de cunostinte</h2>
            <ul>
                <li>sa se scrie o functie ca primeste ca argument un pret de produs, il valideaza (verifica daca nu este vid (folosind empty() sau isset()) si daca este numeric (folosind is_numeric()) si returneaza pretul cu TVA. Se vor afisa 5 preturi generate aleator, cu si fara TVA, sub forma unui tabel HTML cu doua coloane</li>
                <li>sa se scrie o functie link() care primeste ca argument textul si tinta unui link si genereaza codul HTML al link-ului in cauza. Exemplu: daca textul este "Click aici" si tinta este "https://www.infoacademy.net", atunci codul HTML generat va fi <em>&lt;a href="https://www.infoacademy.net"&gt;Click aici&lt;/a&gt;</em>. Creati o lista HTML cu link-uri catre cateva site-uri preferate</li>
            </ul>

            <h2>Avansati</h2>
            <ul>
                <li>sa se scrie o functie cu numar variabil de argumente care afiseaza valorile argumentelor primite sub forma unei liste HTML (ex: f(1,2,3) va afisa un bulleted (unordered) list cu valorile 1, 2 si 3)</li>
                <li>aceeasi cerinta ca mai sus, dar functia va afisa argumentele ordonate crescator</li>
                <li>aceeasi cerinta, dar functia va avea un prim argument obligatoriu, care specifica sensul ordonarii (crescator sau descrescator)</li>
                <li>sa se scrie o functie care genereaza o celula de tabel. Functia va avea parametrul obligatoriu $continut si parametrul optional $atribute_extra, initializat cu sirul vid, in care sunt pasate eventuale atribute suplimentare ale tag-ului &lt;td&gt;. Exemplu: daca $continut are valoarea text iar $atribute_extra are valoarea class='red', atunci codul HTML al celulei va fi &lt;td class='red'&gt;text&lt;/td&gt;</li>
                <li>sa se scrie o functie cu numar variabil de argumente care afiseaza valorile primite ca argumente sub forma unui tabel HTML cu doua coloane. Pe prima coloana va fi afisat numarul randului, iar pe a doua valoarea corespunzatoare. Se va folosi functia precedenta de generare de celula. Functia de generare de tabel va avea si ea argumentul optional $atribute_extra, cu acelasi rol ca in cazul celulei</li>
                <li>sa se scrie o functie care realizeaza validarea unui CNP (cod numeric personal). Informatii in legatura cu formatul CNP gasiti <a href="https://www.validari.ro/cnp">aici</a></li>
                <li>creati un mini-proiect PHP cu 3 fisiere, plasat intr-un director de pe hard-disk la alegerea voastra dar accesibil prin URL-ul https://localhost/tema3/ . In acel director se vor afla urmatoarele fisiere/directoare:
                    <ul>
                        <li>directorul <em>include</em>, care contine fisierul <em>utils.php</em>, in care se definesc:
                            <ul>
                                <li>o constanta NR_DATE, cu o valoare numerica aleasa de voi</li>
                                <li>o functie validareData() ce valideaza o data calendaristica. Functia primeste 3 argumente: zi, luna si an (toate numerice) si verifica daca ziua se incadreaza in nr maxim de zile ale lunii specificate. Argumentul al 3-lea (anul) va fi optional, cu valoarea default null; daca argumentul an este prezent, validarea se va faceÂ&nbsp; tinand cont si de anii bisecti</li>
                            </ul>
                        </li>

                        <li>fisierul <em>statistici_date.php</em>, in care:
                            <ul>
                                <li>se include <em>utils.php</em>, pt a avea disponibile constanta si functia. Se va folosi o cale relativa (require "include/utils.php"), pentru a nu face site-ul dependent de locatia sa in sistemul de fisiere</li>
                                <li>se realizeaza o bucla in care se genereaza NR_DATE date calendaristice (se genereaza ziua, luna si anul folosind functia rand() ). Fiecare data generata se va afisa pe ecran: cele valide cu verde, cele invalide cu rosu. Pentru validare se va folosi functia validareData() scrisa anterior. Anul se va genera intre 1900 si 2100; daca anul este mai mic ca 1980, functia validareData() va fi apelata fara a specifica anul</li>
                                <li>la sfarsit se va afisa statistica: X date valide, Y date invalide</li>
                            </ul>
                        </li>

                        <li>fisierul <em>data_invalida.php</em>, in care:
                            <ul>
                                <li>se genereaza date aleatoare pana cand este gasita una invalida. Sunt afisate toate datele generate</li>
                                <li>la sfarsit se afiseaza numarul de incercari care a fost necesar pentru gasirea datei invalide</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Posibile sugestii pentru functia validareData(): puteti folosi o instructiune decizionala multipla, grupand case-urile pe categorii de luni si executand o singra portiune de cod pentru toate lunile unei categorii. Sunt 7 luni cu 31 de zile, 4 luni cu 30 de zile si una cu nr de zile ce depinde de anii bisecti. In toate cazurile, daca ziua nu se incadreaza in nr maxim de zile ale lunii respective, functia va returna false.</p>
                </li></ul></td>


    </tr>
    </tbody></table>



<?php





?>
</body>
</html>

