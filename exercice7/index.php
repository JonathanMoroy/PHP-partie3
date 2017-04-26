<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie3/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie3/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie3/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie3/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie3/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie3/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie3/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Lancement de ma boucle:
            <?php
            // Déclaration de ma boucle for et affichage du resultat
            for ($i = 1; $i <= 100; $i += 15) {
                echo $i . ' On tient le bon bout. ';
            }
            ?>
        </p>
    </body>
</html>