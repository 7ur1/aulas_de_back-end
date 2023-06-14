<?php require_once "../comentario/consultar_todos.php";  ?>
<?php require_once "../template/cabecalho.php";  ?>

  <div class="container">
        <h1>Comentários</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir comentario
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Texto</th>
                <th scope="col">Data</th>
                <th scope="col">Autor</th>
                <th scope="col">Estrela</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($comentarios as $comentario){ ?>
            <tr>
                <th scope="row"><?php echo $comentario['texto']; ?></th>
                <td><?php echo $comentario['data']; ?></td>
                <td><?php echo $comentario['autor']; ?></td>
                <td><?php echo $comentario['estrela']; ?></td>
                <td class="text-end">
                  <a href="excluir.php?id=<?php echo $comentario['idcomentario']; ?>"  class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $comentario['idcomentario']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    
 <?php require_once "../template/rodape.php";  ?>


 