<html>
    <head>

    <style>
        body {
            background: purple;
            background-image: url('img/paisagem.jpeg');
        }

    </style>
    </head>
    
    <?php
    // dados dos banco de dados.
    // obs: é o que está no nosso phpAdmin!
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "formulario";

    //aqui é realizado a conexão com o banco...
    $conn = new mysqli($servername, $username, $password, $dbname);

    //verificar se a conexão com o bd deu boa
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    //obter os valores do formulário
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];

    $sql = "INSERT INTO contatos (nome, email, telefone)
    VALUES ('$nome', '$email', '$telefone')";

    if($conn->query($sql) === TRUE) {
        //echo "Dados Inseridos com Sucesso!";
        echo "<div style='background-color: #dff0d8; padding: 10px;
        border: 1px solid #3c763d; border-radius: 5px;'>
        Dados Inseridos com Sucesso!</div>";
        echo "<div class='message' style='background-color: #dff0d8;
        padding: 10px; border: 1px solid #3c763d; border-radius: 5px;'><a href='formulario.html'>Retornar à Página Inicial</a></div>";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    //Fechar a conexão com o bamco de dados
    $conn->close();
    ?>

</body>
</html>

    
