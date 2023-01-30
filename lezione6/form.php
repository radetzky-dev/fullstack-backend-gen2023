<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
/*
1 grafica bootstrap coi min.js e min.css
2 inserire campi: nome cognome società qualifica email telefono data di nascita upload della foto
3 validare campi (no vuoti) e deve accettare i termini
4 post e carica l'immagine in alto e compila il form coi dati appena inseriti (esercizio precedente)
*/

$name = $surname = $company = $email = $phone = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nome'];
    $surname = $_POST['cognome'];
    $company = $_POST['societa'];
    $email = $_POST['email'];
    $phone = $_POST['telefono'];
}


set_time_limit(0);
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 4000); // Play with the values
ini_set('max_execution_time', 4000); // Play with the values

if ($_FILES) {
    echo '<pre>';
    var_dump($_FILES);
    echo '<pre>';
    echo  sys_get_temp_dir();
    echo '<hr>';

    //remember :  sudo chmod -R 777 sulla cartella uploads
    $uploadDir = __DIR__ . '/uploads';
    echo $uploadDir;
    echo '<br>';


    foreach ($_FILES as $file) {
        if (UPLOAD_ERR_OK === $file['error']) {
            $fileName = basename($file['name']);
            echo '<br>->' . $file['tmp_name'];
            echo '<br>->' . $uploadDir . DIRECTORY_SEPARATOR . $fileName;
            $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
            if ($result) {
                echo '<br>File uploaded';
            } else {
                echo '<br>ERROR';
            }
        }
    }
}

?>

<body>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://dummyimage.com/300" id="profilePhoto" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" id="namesurname">NOME E COGNOME</h5>
                <p class="card-text">Lista con dati ul - li ecc.</p>
                <button class="btn btn-primary">Registra dati</button>
            </div>


        </div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $name ?>" required>

            </div>
            <div class="form-group">
                <label for="cognome">Cognome</label>
                <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome" value="<?= $surname ?>" required>

            </div>
            <div class="form-group">
                <label for="company">Società</label>
                <input type="text" class="form-control" id="societa" name="societa" placeholder="Società" value="<?= $company ?>" required>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $email ?>" required>

            </div>
            <div class="form-group">
                <label for="exampleInputTelephone">Telefono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?= $phone ?>" required>
            </div>

            <div class="form-group">
                <label for="exampleInputTelephone">Carica immagine del profilo</label>
                <input type="file" name="file" class="form-control" required>
            </div>


            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Accetta i nostri termini di servizio</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>