<div class="row">
    <div class="col-sm-12 mb-4">
        <h3 class="text-primary">
            Lista de Categoria
            <a class="btn btn-success float-right" href="?p=categoria/salvar">
                Cadastrar
            </a>
        </h3>
    </div>
</div>

<div class="col-sm-12">
    <div class="card shadow">
        <table class="table table-striped table-sm ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da categoria</th>
                    <th>Descrição da categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once '../class/Categoria.php';
                $conf = new Categoria();
                $dados = $conf->listar();

                if (!empty($dados)) {
                    foreach ($dados as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td>
                                <?= $value['nome'] ?>
                            </td>
                            <td><?= $value['descricao'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>