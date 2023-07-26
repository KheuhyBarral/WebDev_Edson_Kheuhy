<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Questão 1 - Web dev</title>
    <link rel="stylesheet" href="style.css" />
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
        <form id="my-form"action="q1.php" method="get">
            
            <p>Quant. elementos: <input type="number" name="qnt" value="1" > (1 a 15)</p> 
            <ul class="q1_select">
                <li><input type="radio" name="q1" value="text" id="text-type" onclick="document.getElementById('my-form').submit()"><label for="text-type">Texto</label></li>
                <li><input type="radio" name="q1" value="pass" id="pass-type" onclick="document.getElementById('my-form').submit()"><label for="pass-type">Senha</label></li>
                <li><input type="radio" name="q1" value="btt" id="btt-type"  onclick="document.getElementById('my-form').submit()"><label for="btt-type">Botão</label></li>
                <li><input type="radio" name="q1" value="radi" id="radi-type" onclick="document.getElementById('my-form').submit()"><label for="radi-type">Radial</label></li>
                <li><input type="radio" name="q1" value="sbx" id="sbx-type"  onclick="document.getElementById('my-form').submit()"><label for="sbx-type">Caixa de Seleção</label></li>
                <li><input type="radio" name="q1" value="line" id="line-type" onclick="document.getElementById('my-form').submit()"><label for="line-type">Faixa</label></li>
            </ul>
        </form>        
        </fieldset>

        <a href="../index.php"><button>Voltar</button></a>
      </div>
    </main>
    <footer>
      <p>Edson Júnior e Kheuhy - &copy; 2023</p>
    </footer>
  </body>
</html>
