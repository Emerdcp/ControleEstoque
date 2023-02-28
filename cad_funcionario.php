
<?php 
//include_once "sessao-login.php";
include_once "header.php";
?>

<div class="menu container-fluid">
    <?php include_once "menu.php";?>
</div>
    
<section class="vh-100 fundo">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="justify-content-center">
                        <h1 class="title">Cadastro de Funcionário</h1>
                        <hr>
                    </div>
                    <div class="card">
                        <div class="card-body p-5">
                            
                            <?php include_once "mensagemFuncionarioCadastrado.php";?>
                
                            <form class="d-flex justify-content-center align-items-center mb-4" action="cad_funcionario_inserir.php" method="post">
                            <div class="cal-md-12 col-lg-10">    
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3" class="col-md-2">
                                            <label class="label">Nome</label>
                                            <input type="text" placeholder="Nome Funcionário" class="form-control" name="fun_nome" id="fun_nome" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group mb-3">
                                            <label class="label">E-mail</label>
                                            <input type="text" placeholder="E-mail" class="form-control" name="fun_email" type="email" id="fun_email" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label class="label">Senha</label>
                                            <input type="text" placeholder="Senha" class="form-control" name="fun_senha" type="password" id="fun_senha" required>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-3">
                                            <label class="label">Status</label>
                                            <select name="fun_status" class="form-select">
                                                <option value="Ativo">Ativo</option>
                                                <option value="Inatico">Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-dark ms-2"><i class="bi bi-save"></i> ADD</button>
                                    
                                </div>
                            </div>
                            </form>
                    
                    

                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a href="cad_funcionario.php" aria-current="page" class="nav-link active"><i class="bi bi-list-task"></i> Todos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cad_funcionario.php?status=Ativo" aria-current="page" class="nav-link active"><i class="bi bi-list-nested"></i> Ativos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cad_funcionario.php?status=Inativo" aria-current="page" class="nav-link active"><i class="bi bi-list-check"></i> Ivativos</a>
                                </li>
                            </ul>

                            <ul class="list-grupo mb-0">
                                <?php 
                                include_once "conexao.php";
                                $sqlBuscaFun = "SELECT * FROM CAD_FUNCIONARIO";
                                $buscaFun = $con->query($sqlBuscaFun);
                                $buscaFun->execute();
                                $cadFun = $buscaFun->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($cadFun as $funcionarios){
                                ?>
                                    <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                        <div class="col-1"> 
                                            <?php echo $funcionarios['FUN_ID']; ?>
                                        </div>
                                        <div class="col-3"> 
                                            <?php echo $funcionarios['FUN_NOME']; ?>
                                        </div>
                                        <div class="col-4">
                                            <?php echo $funcionarios['FUN_EMAIL']; ?>
                                        </div>
                                        <div class="col-2">
                                            <?php echo $funcionarios['FUN_STATUS']; ?>
                                        </div>
                                        <div class="col-2">
                                            <span>
                                                <a class='btn btn-light' href="?id=<?php echo $funcionarios['FUN_ID']?>"><i class="bi bi-pencil-fill"></i></a>
                                                <a class='btn btn-light' href="?id=<?php echo $funcionarios['FUN_ID']?>"><i class="bi bi-trash3-fill"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                <?php 
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include_once "footer.php"; ?>