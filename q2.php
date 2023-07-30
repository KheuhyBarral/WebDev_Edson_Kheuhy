<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 2 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_q2.css" />

</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <div class="questoes">
            <h2>Trabalho: Questão 2</h2>
            <div class="tabela">
                <table class="IMC-table">
                    <thead>
                        <tr>
                            <th> </th>
                            <?php
                            for ($i = 46; $i <= 120; $i++) {
                                echo "<th>" . $i . "</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        function tipoIMC($imc)
                        {
                            if ($imc < 16) {
                                return "baixo-muito-grave";
                            }
                            if ($imc < 17) {
                                return "baixo-grave";
                            }
                            if ($imc < 18.5) {
                                return "baixo";
                            }
                            if ($imc < 25) {
                                return "normal";
                            }
                            if ($imc < 30) {
                                return "sobrepeso";
                            }
                            if ($imc < 35) {
                                return "obesidade1";
                            }
                            if ($imc < 40) {
                                return "obesidade2";
                            }
                            return "obesidade3";
                        }
                        function calcularIMC($peso, $altura)
                        {
                            return $peso / ($altura / 110 * $altura / 100);
                        }

                        for ($altura = 146; $altura <= 210; $altura++) {
                            echo "<tr>";

                            echo "<td>" . $altura . "</td>";

                            for ($peso = 46; $peso <= 120; $peso++) {
                                $imc = calcularIMC($peso, $altura);
                                $tipo_imc = tipoIMC($imc);
                                $title = "$tipo_imc \nAltura(cm): " . $altura . "\nPeso(kg): " . $peso . "\nIMC: " . sprintf("%.2f", $imc);

                                echo "<td>" . "<div title=\"" . $title . "\" class=\"IMC-" . $tipo_imc . "\"> </div>" . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>


            <a href="../index.php"><button>Voltar</button></a>
        </div>
    </main>
    <footer>
        <p>Edson Júnior e Kheuhy Barral - &copy; 2023</p>
    </footer>
</body>

</html>