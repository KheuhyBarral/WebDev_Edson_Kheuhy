<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 4 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
    <?php
    $qnt = isset($_GET["qnt"]) ? $_GET["qnt"] : 1;
    $selec = isset($_GET["select"]) ? $_GET["select"] : "none";
    ?>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <div class="questoes">
            <h2>Trabalho: Questão 4</h2>


            <a href="../index.php"><button>Voltar</button></a>
        </div>
    </main>
    <footer>
        <p>Edson Júnior e Kheuhy - &copy; 2023</p>
    </footer>
</body>

</html>