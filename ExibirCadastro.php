<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Cadastro.css"/>
    <link rel="icon" href="/Icons/checklist.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Cadastros</title>
</head>
    <body>
        <h1>Lista dos Cadastrados</h1>
        <?php
            
            $fluxoArquivo = fopen("Cadastro.txt", "r");
                while(!feof($fluxoArquivo)){
                    $cadastro["nome"] = fgets($fluxoArquivo);
                    $cadastro["matricula"] = fgets($fluxoArquivo);
                    $cadastro["nota1"] = fgets($fluxoArquivo);
                    $cadastro["nota2"] = fgets($fluxoArquivo);
                    $cadastro["media"] = fgets($fluxoArquivo);
                    $cadastros[] = $cadastro;
                }
            fclose($fluxoArquivo);
        ?>
        <table>
            <tr>
                <th>Nome Completo</th>
                <th>Matrícula</th>
                <th>Primeira Nota</th>
                <th>Segunda Nota</th>
                <th>Média</th>
            </tr>
            <?php foreach($cadastros as $cadastro){?>
            <tr>
            <td><?php echo $cadastro["nome"]?></td>
            <td><?php echo $cadastro["matricula"]?></td>
            <td><?php echo $cadastro["nota1"]?></td>
            <td><?php echo $cadastro["nota2"]?></td>
            <td><?php echo $cadastro["media"]?></td>
            </tr>
            <?php }?>
                
        </table>
        <input type="checkbox" id="active">
        <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
        <div class="wrapper">
            <ul>
                <li><a href="FormularioCadastro.html">Fazer Cadastro</a></li>
                <li><a href="ExibirCadastro.php">Lista dos Cadastrados</a></li>
            </ul>
        </div>
    </body>
</html>