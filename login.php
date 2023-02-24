<?php include "header.php";?>

<?php include "conexao.php";?>

<main class="container">
    <div class="row w-50 ms-auto me-auto vh-100">
        <div class="col align-self-center">
            <form action="login-validar.php" method="post">
                <div class="row">
                    <div class="col text-center mt-3">
                        <img src="imagens\EkePreto.png">  
                                       
                    <!--<?php include_once "mensagemInvalido.php";?>-->
                    
                    <hr>
                        <h1>Usuário</h1>
                        <!--<label class="form-label">Usuário</label>-->
                        <input type="email" id="usuario" class="form-control" placeholder="E-mail" name="cad_usuario" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-3">
                        <input type="password" id="senha" class="form-control" placeholder="Senha" name="cad_senha" required>
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
