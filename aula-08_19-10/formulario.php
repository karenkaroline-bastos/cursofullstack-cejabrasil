<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$" placeholder="ex:. João Silva"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" required minlength="11"/>

        <label>Digite seu email:</label>
        <input type="email" name="email"/>

        <input type="submit" value="Enviar para o servidor">
    </form>
    </pre>

    <hr/>

    <?php
        $nome = '';

        //Olá, <nome>! Seja bem-vindo(a).

        if(isset($_POST['nome'])){ //isset é uma função do PHP que verifica se há valor em uma variável

            //estamos atribuindo o valor do campo "nome" digitado no formulário
            //à nossa variável chamada $nome
            $nome = $_POST['nome']; 

            //Estamos imprimindo a mensagem de boas vindas. 
            //Concatenamos uma string constante com a variável "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $telefone = $_POST['telefone'];
        
            function validarTelefone($telefone) {
                // Remove todos os caracteres não numéricos
                $telefone = preg_replace('/[^0-9]/', '', $telefone);
        
                // Verifica se o número tem 10 ou 11 dígitos (com DDD)
                if (strlen($telefone) == 10) {
                    // Formato: (XX) XXXX-XXXX
                    return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $telefone);
                } elseif (strlen($telefone) == 11) {
                    // Formato: (XX) XXXXX-XXXX
                    return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $telefone);
                } else {
                    // Retorna falso se o número não tiver o formato correto
                    return false;
                }
            }
        
            $telefoneFormatado = validarTelefone($telefone);
        
            if ($telefoneFormatado) {
                echo "Telefone válido e formatado: " . $telefoneFormatado;
            } else {
                echo "Número de telefone inválido. Digite no formato correto.";
            }
        }
    ?>
    
</body>
</html>

//Ativar a porta 8080
//No terminal inserir: php -S 0.0.0.0:8080
