<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie3/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie3/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie3/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie3/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie3/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie3/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie3/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
            Tant que la première variable n'est pas inférieur ou égale à 10 :<br/>
            multiplier la première variable avec la deuxième<br/>
            afficher le résultat<br/>
            décrémenter la première variable
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Lancement de ma boucle:
            <?php
            // Déclaration de mes deux variables
            $factor = 42;
            // Déclaration de ma boucle for et affichage du resultat
            for ($i = 100; $i >= 10; $i--) {
                echo ' ' . $i . 'x' . $factor . '=' . $i * $factor;
            }
            ?>
        </p>
    </body>
</html>