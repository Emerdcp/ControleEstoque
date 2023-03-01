

<?php 
include_once "sessao-login.php";
include_once "header.php";
?>

<div class="menu container-fluid">
    <?php include_once "menu.php";?>
</div>

<?php 
$uni_unidadeA = $_GET['uni_unidade'];
$uni_descricaoA = $_GET[''];

include_once "conexao.php";

$sqlBuscaUni = "SELECT * FROM CAD_UNIDADE WHERE UNI_UNIDADE = '$uni_unidadeA'";

$sqlBuscaTodosUni = $con->query($sqlBuscaTodosUni);

$dadosUni = $sqlBuscaTodosUni->fetchAll(PDO::FETCH_ASSOC);

while ($tarefaUni = $con->query($dadosUni));{
    $uni_unidadeA = $dadosUni['uni_unidade'];
    $uni_descricaoA = $dadosUni['uni_descricao'];
}

echo "$uni_unidadeA - $uni_descricaoA"
?>

<section class="vh-100 fundo">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="justify-content-center">
                        <h1 class="title">Alterar Unidade de Medida</h1>
                        <?php include_once "mensagemUnidade.php";?>
                        <?php include_once "mensagemUnidadeDelete.php";?>
                        <hr>
                    </div>
                    <div class="card">
                        <div class="card-body p-5">
                
                            <form class="d-flex justify-content-center align-items-center mb-4" action="cad_unidade_alterar.php" method="post">
                            <div class="cal-md-12 col-lg-10">    
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group mb-3" class="col-md-2">
                                            <label class="label">Unidade</label>
                                            <input type="text" placeholder="Unidade" class="form-control" name="uni_unidade" id="uni_unidade" <?php echo $uni_unidade; ?>>
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <div class="form-group mb-3" class="col-md-2">
                                            <label class="label">Descrição Unidade</label>
                                            <input type="text" placeholder="Descrição" class="form-control" name="uni_descricao" id="uni_descricao" required <?php echo $uni_descricao; ?>>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-dark ms-2"><i class="bi bi-save"></i> ADD</button>
                                    
                                </div>
                            </div>
                            </form>
                    
                            <ul class="list-grupo mb-0">
                                <?php 
                                include_once "conexao.php";
                                $sqlBuscaUni = "SELECT * FROM CAD_UNIDADE";
                                $buscaUni = $con->query($sqlBuscaUni);
                                $buscaUni->execute();
                                $cadUni = $buscaUni->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($cadUni as $unidade){
                                ?>
                                    <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                                        <div class="col-2"> 
                                           
                                        </div>
                                        <div class="col-2"> 
                                            <?php echo $unidade['UNI_UNIDADE']; ?>
                                        </div>
                                        <div class="col-5"> 
                                            <?php echo $unidade['UNI_DESCRICAO']; ?>
                                        </div>
                                        <div class="col-4">
                                            <span>
                                                <a class='btn btn-light' href="?uni_unidade=<?php echo $unidade['UNI_UNIDADE']?>"><i class="bi bi-pencil-fill"></i></a>
                                                <a class='btn btn-light' href="cad_unidade_delete.php?unidade=<?php echo $unidade['UNI_UNIDADE']?>"><i class="bi bi-trash-fill"></i> Excluir</a>
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