<?php
// Assuming you have already established a connection to your MySQL database
include('./connectTeste.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent SQL injection
    $emailI = mysqli_real_escape_string($conn, $_POST['emailI']);
    $numeroI = mysqli_real_escape_string($conn, $_POST['phonenumberI']);
    $cepI = mysqli_real_escape_string($conn, $_POST['cepI']);
    $cidadeI = mysqli_real_escape_string($conn, $_POST['cityI']);
    $razaoI = mysqli_real_escape_string($conn, $_POST['reasonI']);
    $nomeI = mysqli_real_escape_string($conn, $_POST['nameI']);
    $cnpjI = mysqli_real_escape_string($conn, $_POST['cnpjI']);
    $dataI = mysqli_real_escape_string($conn, $_POST['dateI']);
    $socialI = mysqli_real_escape_string($conn, $_POST['socialI']);
    $nomeAdmin = mysqli_real_escape_string($conn, $_POST['adminNameI']);
    $horaAbertura = mysqli_real_escape_string($conn, $_POST['open_time']);
    $horaFechamento = mysqli_real_escape_string($conn, $_POST['close_time']);
    $administracaoI = mysqli_real_escape_string($conn, $_POST['adminNameI']);
    $pass1I = mysqli_real_escape_string($conn, $_POST['pass1I']);
    $pass2I = mysqli_real_escape_string($conn, $_POST['pass2I']);

    $query = "SELECT * FROM instituicao WHERE cnpj = '$cnpjI'";
    $resultCNPJ = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultCNPJ) > 0) {
        session_start();

        $_SESSION['typeForm'] = "institution";
        $_SESSION['emailI'] = $emailI;
        $_SESSION['numeroI'] = $numeroI;
        $_SESSION['cepI'] = $cepI;
        $_SESSION['cidadeI'] = $cidadeI;
        $_SESSION['razaoI'] = $razaoI;
        $_SESSION['nameI'] = $nomeI;
        $_SESSION['cnpjI'] = $cnpjI;
        $_SESSION['dataI'] = $dataI;
        $_SESSION['socialI'] = $socialI;
        $_SESSION['nomeAdmin'] = $nomeAdmin;
        $_SESSION['horaAbertura'] = $horaAbertura;
        $_SESSION['horaFechamento'] = $horaFechamento;
        $_SESSION['administracaoI'] = $administracaoI;
        $_SESSION['pass1I'] = $pass1I;

        header("Location:../signin.php");
    } else {
        $sqlI = "INSERT INTO instituicao (nomeFantasia,nomeAdministrador,email,telefone,cep,cidade,razaoSocial,cnpj,dataFundacao,capitalSocial,horaInicial,horaFinal,senha) VALUES ('$nomeI','$administracaoI','$emailI','$numeroI','$cepI','$cidadeI','$razaoI','$cnpjI','$dataI','$socialI','$horaAbertura','$horaFechamento',md5('$pass1I'))";

        // Execute the query
        if (mysqli_query($conn, $sqlI) && $pass1I === $pass2I) {
            $sql = "SELECT * FROM Instituicao WHERE email = '$emailI'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            
            session_start();
            $_SESSION['tipoCadastro'] = 'instituicao';
            $_SESSION['id'] = $row['id_Inst'];
            $_SESSION['nome'] = $row['nomeFantasia'];
            echo 'Cadastrado com sucesso!';
            header("Location:../home.php");
        } else {
            echo 'Erro ao cadastrar: ' . mysqli_error($conn); // Output the specific error message
        }
    }
}
?>
