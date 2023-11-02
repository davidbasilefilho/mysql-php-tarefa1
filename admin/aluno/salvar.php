<div class="col-sm-12 mb-4">
    <h3 class="text-primary">
        Cadastrar Aluno
    </h3>
</div>

<div class="col-sm-12">
    <div class="card shadow">
        <form method="post" name="frmsalvar" id="frmsalvar" class="m-3">
            <div class="form-group">
                <label for="inputText" class="col-sm-2 col-form-label">
                    Nome
                </label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="João da Silva Pinto" maxlength="50" minlength="3" required />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtemail" placeholder="exemplo@exemplo.com" required />
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">RM</label>
                <div class="col-sm-12">
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtrm" placeholder="220135" required />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary m-3" name="btnsalvar" id="btnsalvar" value="Salvar" />
                    <a class="btn btn-danger" href="?p=aluno/consultar"><i class="bi bi-arrow-return-left"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {
    $nome = filter_input(INPUT_POST, 'txtnome');
    $email = filter_input(INPUT_POST, 'txtemail');
    $rm = filter_input(INPUT_POST, 'txtrm');

    include_once '../class/Aluno.php';
    $cat = new Aluno();

    $cat->setNome($nome);
    $cat->setEmail($email);
    $cat->setRm($rm);

    echo '<div class="alert alert-primary mt-3" role="alert">'
        . $cat->salvar()
        . '</div>';
}
