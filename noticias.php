<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheets/noticias.css">
    <title>Noticias | PETComp</title>
</head>
<body>
    <?php
        include("./header.php");
    ?>
    <main>
        <section>
            <div class="title">
                <h1>Noticias</h1>
                <div class="divider"></div>
            </div>
            <div class="desc">
                <p>Buscar por:</p>
                <form>
                    <label for="title">Título</label>
                    <input type="text" name="title">
                    <label for="text">Texto</label>
                    <input type="text" name="text">
                    <label for="search">Buscar</label>
                    <button type="submit"><img src="./assets/svg/search.svg"></button>
                </form>
            </div>
        </section>
    </main>
    <?php
        include_once("./footer.php");
    ?>
</body>