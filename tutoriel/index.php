<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux avec bootstrap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-hover"> <!-- table-succes | table-primary | table-secondary -->
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Benoit</td>
                    <td>Bremaud</td>
                    <td>42</td>
                </tr>
            </tbody>
            <tbody>
                <tr> <!-- <tr class="table-primary" > -->
                    <td>Viktor</td>
                    <td>Argirov</td>
                    <td>23</td>
                </tr>
            </tbody>
            <tbody>
                <tr> <!-- <tr class="table-danger"> -->
                    <td>Valeria</td>
                    <td>Pallas</td>
                    <td>38</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>