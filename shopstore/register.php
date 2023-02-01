<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <?php
    $name = $surname = $company = $email = $phone = $username = $password = $confirmpassword = "";
    $dummyPhoto = "https://dummyimage.com/300";
    $dummyName = "Name";
    $dummySurname = "Surname";
    $dummyText = "Qui appariranno i tuoi dati personali";
    $anagraficaArray = "";
    ?>

    <script>
        //TODO quando finito tutto in un js

        function verifyImage() {
            var file = document.getElementById("file").value;
            console.log(file);
            if (file == "") {
                alert("Seleziona un file da caricare!");
                return false;
            }
            return true;
        }

        function verifyPassword() {
            var pw = document.getElementById("password").value;
            var confirm_pw = document.getElementById("confirmpassword").value;
            if (pw === confirm_pw) {
                return true;
            }
            alert("Attenzione le password non coincidono");
            return false;
        }


        function sendData() {
            var dummyPhotoValue = "<?= $dummyPhoto; ?>";

            var name = document.getElementById("nome").value;
            var surname = document.getElementById("cognome").value;
            var username = document.getElementById("user_name").value;
            var password = document.getElementById("password").value;
            var photoId = document.getElementById("photoId").value;

            console.log(name + " " + password + " F:" + photoId);

            if (name != "" &&
                surname != "" &&
                username != "" &&
                password != "" &&
                dummyPhotoValue != photoId
            ) {
                window.location.href = "savedata.php"
            } else {
                alert('Carica una foto di profilo e completa il form!');
            }
            //se tutti campi corretti mando
            //window.location.href = "savedata.php";

            //altrimenti mostro un alert (carica una foto di profilo)

        }
    </script>

</head>
<?php
/*
1 - salvare le informazioni in variabile session
*/

function setDataSession(array $userData)
{
    $_SESSION['userData'] = $userData;
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['uploadPhoto'])) {

        if (isset($_POST['otherFormInfo']) && str_contains($_POST['otherFormInfo'], '#')) {
            $fields = explode("#", $_POST['otherFormInfo']);
            $name = $dummyName = $fields[0];
            $surname = $dummySurname = $fields[1];
            $company = $fields[2];
            $email = $fields[3];
            $phone = $fields[4];
            $username = $fields[5];
            $password = $fields[6];
            $confirmpassword = $fields[7];
            setDataSession(["nome" => $name, "cognome" => $surname, "username" => $username, "pwd" => $password, "photo" => $dummyPhoto]);
        }

        if ($_FILES) {
            $uploadDir = __DIR__ . '/uploads';
            foreach ($_FILES as $file) {
                if (UPLOAD_ERR_OK === $file['error']) {
                    $fileName = basename($file['name']);
                    $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
                    if ($result) {
                        $dummyPhoto = "uploads" . DIRECTORY_SEPARATOR . $fileName;
                    } else {
                        echo '<br>ERRORE NEL CARICAMENTO DELL\'IMMAGINE!';
                    }
                }
            }
        }
    } else {

        $name = $dummyName = $_POST['nome'];
        $surname = $dummySurname = $_POST['cognome'];
        $company = $_POST['societa'];
        $email = $_POST['email'];
        $phone = $_POST['telefono'];
        $username = $_POST['user_name'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $anagraficaArray = $name . "#" . $surname . "#" . $company . "#" . $email . "#" . $phone . "#" . $username . "#" . $password . "#" . $confirmpassword;
        //popolare delle info $_SESSION ($name) ecc...



        if (isset($_POST['photoId'])) {
            $dummyPhoto = $_POST['photoId'];
        }

        setDataSession(["nome" => $name, "cognome" => $surname, "username" => $username, "pwd" => $password, "photo" => $dummyPhoto]);
    }
}

if ($company) {
    $dummyText = "<ul>
    <li>$company</li>
    <li>$email</li>
    <li>$phone</li>
    </ul>";
}


?>

<body>
    <div class="container">
        <h3>Registration form</h3>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $dummyPhoto; ?>" id="profilePhoto" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" id="namesurname"><?= $dummyName . ' ' . $dummySurname; ?></h5>
                        <p class="card-text"><?= $dummyText; ?></p>
                        <button class="btn btn-primary" onclick="sendData();">Registrami</button>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="FormProfilePhoto">
                        <input type="file" name="file" id="file">
                        <input type="hidden" name="uploadPhoto" value="uploadPhoto" />
                        <input type="hidden" name="otherFormInfo" value="<?= $anagraficaArray; ?>" />
                        <input type="submit" class="btn btn-primary" name="upload" value="Carica foto profilo" onclick="return verifyImage();">
                    </form>
                </div>
            </div>
            <div class="col">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onsubmit="return verifyPassword();">
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
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter username" value="<?= $username ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter password" value="<?= $password ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Confirm PassWord</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" aria-describedby="passwordHelp" placeholder="Confirm password" value="<?= $confirmpassword ?>" required>
                    </div>

                    <input type="hidden" value="<?= $dummyPhoto; ?>" id="photoId" name="photoId">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>