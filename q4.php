<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 4 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_q4.css" />
    <?php
    $aporte_inical = (isset($_GET["aporte_inicial"]) ? $_GET["aporte_inicial"] : 500);
    $meses = (isset($_GET["meses"]) ? $_GET["meses"] : 12);
    $rendimento = (isset($_GET["rendimento"]) ? $_GET["rendimento"] : 0.7);
    $aporte_mensal = (isset($_GET["aporte_mensal"]) ? $_GET["aporte_mensal"] : 350);
    ?>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <div class="questoes">
            <h2>Trabalho: Questão 4</h2>
            <fieldset>
                <legend>Parâmetros</legend>
                <form action="q4.php" method="get">

                    <p>Aporte inicial(R$): <input type="number" min="0" max="99999999.99" name="aporte_inicial"
                            value="<?php echo $aporte_inical ?>" style="width: 100px">[até R$
                        999.999,99]</p>
                    <p>Período(meses): <input type="number" min="1" max="480" name="meses" style="width: 100px"
                            value="<?php echo $meses ?>">[1 até 480]
                    </p>
                    <p>Rendimento mensal(%): <input type="number" max="20" name="rendimento" style="width: 50px"
                            step="0.1" value="<?php echo $rendimento ?>">[até 20%]
                    </p>
                    <p>Aporte mensal(R$): <input type="number" min="0" max="99999999.99" name="aporte_mensal"
                            value="<?php echo $aporte_mensal ?>" style="width: 100px">[até R$
                        999.999,99]</p>
                    <a href="../index.php"><button type="submit">Processar</button></a>
                </form>

            </fieldset>

            <fieldset>
                <legend>Resultado</legend>
                <div class="tabela">

                    <table>
                        <thead>
                            <tr>
                                <th>Mês</th>
                                <th>Valor Inicial (R$)</th>
                                <th>Aporte (R$)</th>
                                <th>Rendimento (R$)</th>
                                <th>Total (R$)</th>
                            </tr>
                        <tbody>
                            <?php
                            for ($i = 1; $i <= $meses; $i++) {
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . number_format($aporte_inical, 2, ",", ".") . "</td>";
                                echo "<td>" . ($i > 1 ? number_format($aporte_mensal, 2, ",", ".") : "---") . "</td>";
                                echo "<td>" . number_format($aporte_inical * $rendimento / 100, 2, ",", ".") . "</td>";
                                $aporte_inical = $aporte_inical * (1 + ($rendimento / 100));
                                echo "<td>" . number_format($aporte_inical, 2, ",", ".") . "</td>";
                                $aporte_inical += $aporte_mensal;
                                echo "</tr>";
                            }

                            ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </fieldset>


            <a href="../index.php"><button>Voltar</button></a>
        </div>
    </main>
    <footer>
        <p>Edson Júnior e Kheuhy - &copy; 2023</p>
    </footer>
</body>

</html>