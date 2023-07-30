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
                <h3>Q3: Quem são os professores de programação PHP e HTML do IFNMG-MOC?</h2>
                    <form id="questao" action="q3.php" method="get">
                        <div class="resposta">
                            <ol type="A">
                                <a href="q3_d.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=1">
                                    <li>Edson Júnior</li>
                                </a>
                                <a id="resp" href="q3_d.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=2">
                                    <li>Luis Antônio Guisso</li>
                                </a>
                                <a href="q3_d.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=3">
                                    <li>Kheuhy Barral</li>
                                </a>
                                <a href="q3_d.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=4">
                                    <li>Mario Sergio</li>
                                </a>
                                <a href="q3_d.php?r1=<?php echo $r1 ?>&r2=<?php echo $r2 ?>&r3=5">
                                    <li>Maria Alice Leite</li>
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
        <p>Edson Júnior e Kheuhy Barral - &copy; 2023</p>
    </footer>
</body>

</html>