<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie3/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie3/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie3/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie3/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie3/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie3/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie3/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>##Exercice 4 Créer une variable et l'initialiser à 1.
            Tant que cette variable n'atteint pas 10, il faut :<br/>
            l'afficher<br/>
            l'incrementer de la moitié de sa valeur
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Lancement de ma boucle:
            <?php
            // Déclaration de ma boucle for et affichage du resultat
            for ($i = 1; $i <= 10; $i += $i / 2) {
                echo $i . ' ';
            }
            ?>
        </p>
    </body>
</html>