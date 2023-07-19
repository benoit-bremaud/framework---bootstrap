<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le composant Nav</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header class="bg-warning">
        <div class="container">
            <nav class="nav">
                <a href="#" class="nav-link">Lien 1</a>
                <a href="#" class="nav-link">Lien 2</a>
                <a href="#" class="nav-link">Lien 3</a>
                <a href="#" class="nav-link disabled">Lien 4</a>
            </nav>
        </div>
    </header>
    <hr>
    <div class="container">
        <nav>
            <ul class="nav justify-content-end">
                <li><a href="#" class="nav-link">Lien 1</a></li>
                <li><a href="#" class="nav-link">Lien 2</a></li>
                <li><a href="#" class="nav-link">Lien 3</a></li>
                <li><a href="#" class="nav-link">Lien 4</a></li>
            </ul>
        </nav>
    </div>
    <hr>
    <div class="container">
        <nav>
            <ul class="nav flex-column">
                <li><a href="#" class="nav-link">Lien 1</a></li>
                <li><a href="#" class="nav-link">Lien 2</a></li>
                <li><a href="#" class="nav-link">Lien 3</a></li>
                <li><a href="#" class="nav-link">Lien 4</a></li>
            </ul>
        </nav>
    </div>
    <hr>
    <div class="container">
        <nav>
            <ul class="nav">
                <li><a href="#" class="nav-link">Lien 1</a></li>
                <li><a href="#" class="nav-link">Lien 2</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sous menu</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Sous menu 1</a></li>
                        <li><a href="#" class="dropdown-item">Sous menu 2</a></li>
                        <li><a href="#" class="dropdown-item">Sous menu 3</a></li>
                    </ul>
                </li>
                <li><a href="#" class="nav-link">Lien 3</a></li>
                <li><a href="#" class="nav-link">Lien 4</a></li>
            </ul>
        </nav>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>