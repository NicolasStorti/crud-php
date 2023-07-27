
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="salva.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-0" id="titulo" name="titulo" placeholder="Titulo" />
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-0" id="descricao" name="descricao" rows="3" placeholder="Descrição"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success rounded-0" type="submit" id="btn">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table  table-hover text-center table-bordered">
                    <thead>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Data da Criação</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        <?php 
                        include 'conexao.php';
                        $query = "SELECT * FROM tarefas";
                        $result = mysqli_query($conexao, $query);
                        while ($linha = mysqli_fetch_assoc($result)) { ?>
                            
                        <tr>
                            <td><?= $linha['titulo'] ?></td>
                            <td><?= $linha['descricao'] ?></td>
                            <td><?= $linha['data_criacao'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $linha['id'] ?>" class="btn btn-secondary rounded-0">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="delete.php?id=<?= $linha['id'] ?>" class="btn btn-danger rounded-0">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>