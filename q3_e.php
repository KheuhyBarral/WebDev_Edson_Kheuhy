<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 3 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
    <?php
    $r1 = isset($_GET["r1"]) ? $_GET["r1"] : 0;
    $r2 = isset($_GET["r2"]) ? $_GET["r2"] : 0;
    $r3 = isset($_GET["r3"]) ? $_GET["r3"] : 0;
    $r4 = isset($_GET["r4"]) ? $_GET["r4"] : 0;
    ?>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <div class="questoes">
            <h2>Trabalho: Questão 3</h2>

            <div class="pergunta">
                <h3>Gabarito</h2>
                    <form id="questao" action="q3.php" method="get">
                        <div class="resposta">
                            <ol type="1">
                                <li>
                                    <div class="q3_resp">B<img
                                            src="./images/<?php echo ($r1 == 2 ? "correta" : "errada") ?>.png" alt=""
                                            class="q3_resp_img">
                                    </div>
                                </li>
                                <li>
                                    <div class="q3_resp">D<img
                                            src="./images/<?php echo ($r2 == 4 ? "correta" : "errada") ?>.png" alt=""
                                            class="q3_resp_img">
                                    </div>
                                </li>
                                <li>
                                    <div class="q3_resp">B<img
                                            src="./images/<?php echo ($r3 == 2 ? "correta" : "errada") ?>.png" alt=""
                                            class="q3_resp_img">
                                    </div>
                                </li>
                                <li>
                                    <div class="q3_resp">E<img
                                            src="./images/<?php echo ($r4 == 5 ? "correta" : "errada") ?>.png" alt=""
                                            class="q3_resp_img">
                                    </div>
                                </li>
                            </ol>
                            <a href="../q3.php"><button>Cancelar</button></a>

                    </form>
            </div>
        </div>


        <a href="../index.php"><button>Voltar</button></a>
        </div>
    </main>
    <footer>
        <p>Edson Júnior e Kheuhy - &copy; 2023</p>
    </footer>
</body>

</html>