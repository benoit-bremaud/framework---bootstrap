<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox avec bootstrap : justify-content</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex justify-content-end"</p>
    <div style="height: 200px" class="container bg-dark d-flex justify-content-end">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning">2</div>
        <div class="w-25 p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex justify-content-center"</p>
    <div style="height: 200px" class="container bg-dark d-flex justify-content-center">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning">2</div>
        <div class="w-25 p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex justify-content-between"</p>
    <div style="height: 200px" class="container bg-dark d-flex justify-content-between">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning">2</div>
        <div class="w-25 p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex justify-content-evenly"</p>
    <div style="height: 200px" class="container bg-dark d-flex justify-content-evenly">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning">2</div>
        <div class="w-25 p-2 text-white bg-danger">3</div>
    </div>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex justify-content-around"</p>
    <div style="height: 200px" class="container bg-dark d-flex justify-content-around">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning">2</div>
        <div class="w-25 p-2 text-white bg-danger">3</div>
    </div>
</body>
</html>