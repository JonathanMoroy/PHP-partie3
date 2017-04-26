<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie3/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie3/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie3/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie3/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie3/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie3/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie3/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 2 Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas supérieur à 20 :<br/>
            multiplier la première variable avec la deuxième<br/>
            afficher le résultat<br/>
            incrementer la première variable</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Lancement de ma boucle:
            <?php
            // Déclaration de mes deux variables
            $factor = 42;
            // Déclaration de ma boucle for et affichage du resultat
            for ($i = 0; $i <= 20; $i++) {
                echo ' ' . $i . 'x' . $factor . '=' . $i * $factor;
            }
            ?>
        </p>
    </body>
</html>