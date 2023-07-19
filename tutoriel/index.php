<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container py-3">
        <!-- <form action="">
            <div class="mb-3">
                <label class="form-label" for="name">Nom</label>
                <input class="form-control form-control-sm"type="text" name="name" id="name" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control"type="text" name="email" id="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control"name="message" id="message" cols="30" rows="10"></textarea>
            </div>
        </form> -->

        <form action="" class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="name">Nom</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="col-md-12">
                <label class="form-label" for="adresse">Adresse</label>
                <input class="form-control" type="text" name="adresse" id="adresse">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="cp">Code postal</label>
                <input class="form-control" type="text" name="cp" id="cp">
            </div>
            <div class="col-md-8">
                <label class="form-label" for="email">Ville</label>
                <input class="form-control" type="text" name="ville" id="ville">
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>