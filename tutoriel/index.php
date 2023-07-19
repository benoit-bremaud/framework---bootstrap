<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox avec bootstrap : align-self</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex"</p>
    <div style="height: 200px" class="container bg-dark d-flex">
        <div class="w-25 p-2 text-white bg-primary align-self-start">1</div>
        <div class="w-25 p-2 text-white bg-warning align-self-end">2</div>
        <div class="w-25 p-2 text-white bg-danger align-self-center">3</div>
    </div>
    <hr>
    <p>div style="height: 200px" class="container bg-dark d-flex align-items-start"</p>
    <div style="height: 200px" class="container bg-dark d-flex align-items-start">
        <div class="w-25 p-2 text-white bg-primary">1</div>
        <div class="w-25 p-2 text-white bg-warning flex-grow-1">2</div>
        <div class="w-25 p-2 text-white bg-danger flex-grow-1">3</div>
    </div>
</body>
</html>