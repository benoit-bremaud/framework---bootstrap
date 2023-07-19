<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox avec bootstrap : flex-row</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div style="height: 200px" class="container bg-dark d-flex">
        <div class="p-2 text-white bg-primary">1</div>
        <div class="p-2 text-white bg-warning">2</div>
        <div class="p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <div style="height: 200px" class="container bg-dark d-flex">
        <div class="w-50 p-2 text-white bg-primary">1</div>
        <div class="w-50 p-2 text-white bg-warning">2</div>
        <div class="w-50 p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <div style="height: 200px" class="container bg-dark d-flex flex-wrap">
        <div class="w-50 p-2 text-white bg-primary">1</div>
        <div class="w-50 p-2 text-white bg-warning">2</div>
        <div class="w-50 p-2 text-white bg-danger">3</div>
    </div>
</body>
</html>