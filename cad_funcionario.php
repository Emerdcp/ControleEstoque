<?php include_once "header.php"; ?>
<main class="conteiner">
    <div class="row justify-content-center barda">
        <div class="col-md-12 col-lg-10">
            <div class="row">
                <h1>Cadastro de Funcionário</h1>
                <hr>
            </div>
            <div class="col-12">
                <form action="">
                    <div class="row">
                        <div class="col-1">
                            <div class="form-group mb-3">
                                <label class="label">Código</label>
                                <input class="form-control" name="cad_id">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label class="label">Nome</label>
                                <input class="form-control" name="cad_name">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label class="label">Status</label>
                                <select name="status" id="status" form="status" class="form-select">
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inatico">Inativo</option>
                                    <option value="Bloqueado">Bloqueado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>


</main>