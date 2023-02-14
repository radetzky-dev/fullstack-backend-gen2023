<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";
require_once "db/dbconn.php"; 
?>

<?php if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $page_info_title = "MODIFICA ANGRAFICA CLIENTE";

    if (getenv('USE_DB') != "no") {
        $dbConn = new Database();
        $dbConnection = $dbConn->openConnection();

        $query = "SELECT * from costumers";
        $result = $dbConn->getResults($query, $dbConnection, "where id='".$_REQUEST["id"]."'");
        
        while ($row = $result->fetch_assoc()) {
            $id_cliente =$row['id'];
            $name =$row['name'];
            $surname =$row['surname'];
            $company =$row['society'];
            $email =$row['email'];
            $phone =$row['phone'];
            $username =$row['user'];
        }
        
        $dbConn->closeConnection($dbConnection);
    }


} else {
   echo "Nessuna modifica possibile. Torna alla home";
   die();
}
?>

<h3><?= $page_info_title; ?></h3>

<div class="col-sm-6">
<form method="POST" action="save_costumer.php" enctype="multipart/form-data" onsubmit="return verifyPassword();">
        <div class="form-group">
            <label for="nome">Id cliente</label>
            <input type="number" class="form-control" id="id_cliente" name="id_cliente" value="<?= $id; ?>" readonly>
        </div>
        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="<?= $name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Cognome" value="<?= $surname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Società</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="Società" value="<?= $company ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTelephone">Telefono</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefono" value="<?= $phone ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter username" value="<?= $username ?>" required>
                    </div>
             
        

        <button type="submit" class="btn btn-primary">Modifica anagrafica cliente</button>
    </form>
</div>
<?php

require_once "inc/footer.php";
