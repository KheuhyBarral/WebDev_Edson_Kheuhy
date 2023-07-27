<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 1 - Web dev</title>
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
            <h2>Trabalho: Questão 1</h2>
            <fieldset>
                <legend>Critérios para geração</legend>
                <form id="my-form" action="q1.php" method="get">

                    <p>Quant. elementos: <input type="number" min="1" max="15" name="qnt"
                            value=<?php echo '"' . $qnt . '"' ?>> (1 a 15)</p>
                    <ul class="q1_select">
                        <li><input type="radio" name="select" value="text" id="text-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "text" ? "checked" : "") ?>><label for="text-type">Texto</label>
                        </li>
                        <li><input type="radio" name="select" value="password" id="pass-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "password" ? "checked" : "") ?>><label
                                for="pass-type">Senha</label></li>
                        <li><input type="radio" name="select" value="button" id="btt-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "button" ?  "checked" : "") ?>><label for="btt-type">Botão</label>
                        </li>
                        <li><input type="radio" name="select" value="radio" id="radi-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "radio" ? "checked" : "") ?>><label for="radi-type">Radial</label>
                        </li>
                        <li><input type="radio" name="select" value="checkbox" id="sbx-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "checkbox" ?  "checked" : "") ?>><label for="sbx-type">Caixa de
                                Seleção</label></li>
                        <li><input type="radio" name="select" value="range" id="line-type"
                                onclick="document.getElementById('my-form').submit()"
                                <?php echo ($selec == "range" ? "checked" : "") ?>><label for="line-type">Faixa</label>
                        </li>
                    </ul>
                </form>
            </fieldset>


            <fieldset>
                <legend>Resultado</legend>
                <div class="questoes">
                    <?php
                    $output = [];

                    switch ($selec) {
                        case "text":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = '<input type="text"> <br>';
                                
                            };

                            break;
                        case "password":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = '<input type="password"> <br>';
                            };
                            break;
                        case "button":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = ' <input type="button" value="Botão ' . $i . '"> <br>';
                            };
                            break;
                        case "radio":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = '<input type="radio" name="result" id="result_button_' . $i . '"><label for="result_button_' . $i . '">Botão radial  ' . $i . '</label> <br>';
                            };
                            break;
                        case "checkbox":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = ' <input type="checkbox" name="result" id="result_checkbox_' . $i . '"> <label for="result_checkbox_' . $i . '">Caixa de seleção ' . $i . '</label> <br>';
                            };
                            break;
                        case "range":
                            for ($i = 1; $i <= $qnt; $i++) {
                                $output[] = '<input type="range" min="1" max="100" name="result" id="range_' . $i . '" value="' . ($i / $qnt) * 100 . '"> <br>';
                            };
                            break;
                    };
                    foreach ($output as $cod) {
                        echo $cod;
                    };

                    echo "<br>";

                    foreach ($output as $cod) {
                        echo  str_replace(">","&gt",str_replace("<","&lt;",str_replace("<br>","",$cod))) . "<br>";
                    };

                    ?>

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