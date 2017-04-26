<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
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
                <li><a href="http://partie3/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie3/exercice8/">Exercice 8</a></li>
            </ul>
        </nav>
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Lancement de ma boucle:
            <?php
            // Déclaration de ma boucle for et affichage du resultat
            for ($i = 20; $i >= 0; $i --) {
                echo $i . ' C\'est presque bon. ';
            }
            ?>
        </p>
    </body>
</html>