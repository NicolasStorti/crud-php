<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $update = "SELECT * FROM `tarefas` WHERE `id` = $id";
    $result = mysqli_query($conexao, $update);

    $linha = mysqli_fetch_assoc($result);
    $titulo = $linha['titulo'];
    $descricao = $linha['descricao'];
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $update = "UPDATE `tarefas` SET `titulo`='$titulo',`descricao`='$descricao' WHERE `id`=$id";
    $result = mysqli_query($conexao,$update);
    header("location: index.php");

}
?>
<?php include 'includes/header.php'; ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="edit.php?id=<?= $_GET['id']; ?>" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control rounded-0" id="titulo" name="titulo" placeholder="Titulo" value="<?= $titulo; ?>" />
                </div>
                <div class="mb-3">
                    <textarea class="form-control rounded-0" id="descricao" name="descricao" rows="3" placeholder="Descrição"><?= $descricao; ?></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-success rounded-0" type="submit" id="btn" name="update">
                        Atualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>