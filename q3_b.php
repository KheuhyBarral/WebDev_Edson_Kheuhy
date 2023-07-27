<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 3 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
    <?php
    $r1 = isset($_GET["r1"]) ? $_GET["r1"] : 0;
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
                <h3>Q2: Qual é o objetivo do PHP?</h2>
                    <form id="questao" action="q3.php" method="get">
                        <div class="resposta">
                            <ol type="A">
                                <a href="q3_c.php?r1=<?php echo $r1 ?>&r2=1">
                                    <li>Criar páginas web dinâmicas</li>
                                </a>
                                <a href="q3_c.php?r1=<?php echo $r1 ?>&r2=2">
                                    <li>Processar dados do lado do servidor</li>
                                </a>
                                <a href="q3_c.php?r1=<?php echo $r1 ?>&r2=3">
                                    <li>Criar aplicações web</li>
                                </a>
                                <a id="resp" href="q3_c.php?r1=<?php echo $r1 ?>&r2=4">
                                    <li>Todas as anteriores</li>
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