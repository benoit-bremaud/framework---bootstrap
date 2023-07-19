<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le composant Alerts</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <hr>
    <div class="container py-4">
        <div class="alert alert-primary">Un message de couleur primary.</div>
        <div class="alert alert-secondary">Un message de couleur secondary.</div>
        <div class="alert alert-success">Un message de couleur success.</div>
        <div class="alert alert-danger">Un message de couleur danger.</div>
        <div class="alert alert-warning">Un message de couleur warning.</div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="alert alert-primary">Un message de couleur primary. <a href="#">Mettre un lien</a></div>
        <div class="alert alert-secondary">Un message de couleur secondary. <a href="#">Mettre un lien</a></div>
        <div class="alert alert-success">Un message de couleur success.</div>
        <div class="alert alert-danger">Un message de couleur danger.</div>
        <div class="alert alert-warning">Un message de couleur warning.</div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="alert alert-primary">Un message de couleur primary. <a href="#" class="alert-link">Mettre un lien</a></div>
        <div class="alert alert-secondary">Un message de couleur secondary. <a href="#" class="alert-link">Mettre un lien</a></div>
        <div class="alert alert-success">Un message de couleur success.</div>
        <div class="alert alert-danger">Un message de couleur danger.</div>
        <div class="alert alert-warning">Un message de couleur warning.</div>
    </div>
    <hr>
    <div class="container py-4">
        <div class="alert alert-primary alert-dismissible">Un message de couleur primary.
            <a href="#" class="alert-link">Mettre un lien</a>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-secondary alert-dismissible">Un message de couleur secondary. 
            <a href="#" class="alert-link">Mettre un lien</a>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-success alert-dismissible">Un message de couleur success. 
            <a href="#" class="alert-link">Mettre un lien</a>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible">Un message de couleur danger. 
            <a href="#" class="alert-link">Mettre un lien</a>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible">Un message de couleur warning. 
            <a href="#" class="alert-link">Mettre un lien</a>
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>