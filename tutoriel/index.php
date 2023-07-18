<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemples de typographie avec Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center"> <!-- Centre tous les élements sur la page -->
        <h1 class="display-1">Balise H1</h1>
        <h1 class="h4">Balise H1</h1>
        <h2>Balise H2</h2>
        <h3>Balise H3</h3>
        <h4>Balise H4</h4>
        <h5>Balise H5</h5>
        <h6>Balise H6</h6>
        <h6 class="h1">Balise H6</h6>
        <p class="display-2">Mettre en évidence du texte</p>

        <h2 class="text-start">Liste à puces</h2> <!-- Justifier à gauche -->
            <ul class="list-unstyled"> <!-- Permet de supprimer les puces -->
                <li class="list-inline-item">Element 1</li>
                <li class="list-inline-item">Element 2</li>
                <li class="list-inline-item">Element 3</li>
                <li class="list-inline-item">Element 4</li>
                <li class="list-inline-item">Element 5</li>
            </ul>
        <h2 class="text-end">Liste ordonnée</h2> <!-- Justifier à droite -->
            <ol class="list-unstyled"> <!-- Permet de supprimer les numéros -->
                <li>Element 1</li>
                <li>Element 2</li>
                <li>Element 3</li>
                <li>Element 4</li>
                <li>Element 5</li>
            </ol>
    </div>

</body>
</html>