<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?= $shopName; ?></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Prodotti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrello</a>
                </li>
            </ul>
        </div>
    </div>

    <span class="navbar-text">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Cerca">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
    </span>
</nav>