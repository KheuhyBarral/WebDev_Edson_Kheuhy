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
                <h3>Q4: Quem nasceu primeiro?</h2>
                    <form id="questao" action="q3.php" method="get">
                        <div class="resposta">
                            <ol type="A">
                                <a href="q3_e.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r1 ?>&r4=1">
                                    <li>Ovo</li>
                                </a>
                                <a href="q3_e.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r1 ?>&r4=2">
                                    <li>Galinha</li>
                                </a>
                                <a href="q3_e.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r1 ?>&r4=3">
                                    <li>Galo</li>
                                </a>
                                <a href="q3_e.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r1 ?>&r4=4">
                                    <li>Pintinho</li>
                                </a>
                                <a id="resp"
                                    href="q3_e.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=<?php echo $r1 ?>&r4=5">
                                    <li>Mario Sergio</li>
                                </a>


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