<div class="row">
    <div class="col-sm-12 mb-4">
        <h3 class="text-primary">
            Lista de Aluno
            <a class="btn btn-success float-right" href="?p=aluno/salvar">
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
                    <th>Nome do aluno</th>
                    <th>Email do aluno</th>
                    <th>RM do Aluno</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once '../class/Aluno.php';
                $conf = new Aluno();
                $dados = $conf->listar();

                if (!empty($dados)) {
                    foreach ($dados as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td>
                                <?= $value['nome'] ?>
                            </td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['rm'] ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>