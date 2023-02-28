<?php include "header.php";?>
<?php include "conexao.php";?>

<main class="container">
    <div class="row w-50 ms-auto me-auto vh-100">
        <div class="col align-self-center">
            <form action="login-validar.php" method="post">
                <div class="row">
                    <div class="col text-center mt-3">
                        <img src="imagens\EkePreto.png">  
                        <hr>
                        <h1>Usuário</h1>
                        <?php include_once "mensagemUsuarioInvalido.php";?>
                        <input type="email" id="fun_email" class="form-control" placeholder="E-mail" name="fun_email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-3">
                        <input type="password" id="fun_senha" class="form-control" placeholder="Senha" name="fun_senha" required>
                    </div>
                </div>
                    <div class="col text-center mt-3">
                        <button type="submit" class="btn btn-dark ms-2"><i class="bi bi-person-fill"></i> Entrar</button><i class="bi bi-person-fill-lock"></i>
                    </div>
                    <hr>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once "footer.php";?>
