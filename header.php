<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste1</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleHeader.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container header" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top" >
                <i class="fas fa-bars" onclick="toggleMenu()" id="menus"></i>
                <a class="navbar-brand" href="index.php"><img id="logo" src="img/download.png" alt="IFRO"> IFRO</a>
                <div class="search-bar">
                    <input type="text" placeholder="  Pesquisar">
                </div>
                <div class="collapse navbar-collapse" id="navbar-links"  >
                    <div class="menu-items" id="menu-items">
                        <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
                        <a class="nav-item nav-link" id="home-noticias" href="#">Notícias</span></a>
                        <a class="nav-item nav-link" id="home-espote" href="#">Esportes</span></a>
                        <a class="nav-item nav-link" id="home-contato" href="sobre.php">Contatos</span></a>
                    </div>

                </div>
            </nav>

        </div>
    </header>
    <script src="js/script.js"></script>
</body>
</html>