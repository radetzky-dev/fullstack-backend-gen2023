<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

echo "Hai visitato questa pagina " . $_SESSION['count'] . ' volte';

if ($_SESSION['count'] > 4) {
    echo "Hai visitato questa pagina troppe volte. Azzero il conteggio";
    session_destroy();
}
