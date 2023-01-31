<?php
session_start();

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "Mario";
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

echo "Ti chiami " . $_SESSION['name'] . " e hai visitato questa pagina " . $_SESSION['count'] . ' volte';
echo "<br>Il tuo session id è ".session_id() ." e il tuo session name è ".session_name() . " il tuo stato è ".session_status();

if (($_SESSION['count'] > 2) && ($_SESSION['name'] == 'Mario')) {
    echo "Hai visitato questa pagina troppe volte. Cancello il conteggio";
    unset($_SESSION['count']);
    $_SESSION['name'] = "Martina";
} elseif ($_SESSION['count'] > 4) {
    echo "Hai visitato questa pagina troppe volte. Azzero il conteggio";
    session_destroy();
}
