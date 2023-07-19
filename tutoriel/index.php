<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les classes utilitaires : la propriété display</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <p class="bg-primary text-white p-2">Un premier paragraphe</p>
        <p class="bg-danger text-white p-2 d-inline">Un deuxième paragraphe</p>
        <hr>
        <a class="bg-warning p-2 d-block"href="#">Lien</a>
    </div>
    <br>
    <div class="container">
        <p class="bg-primary text-white p-2 d-sm-none">Affichage sur smartphone</p>
        <p class="bg-success text-white p-2 d-md-none">Affichage sur tablette</p>
        <p class="bg-danger text-white p-2 d-none d-lg-block">Affichage sur grand ecran</p>
    </div>
</body>
</html>