<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>

    <h1>Comentários</h1>
    <hr>

    <form 
    action="<?php echo isset($comentario) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="texto">Texto</label><br>
       <input type="text" name="texto" id="texto" value="<?php echo $comentario['texto'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $comentario['idcomentario'] ?? ""; ?>"><br>

       <label for="data">Data</label><br>
       <textarea  name="data" id="data"><?php echo $comentario['data'] ?? ""; ?></textarea><br>

       <label for="autor">Autor</label><br>
       <input type="text" name="autor" id="autor"><br>

       <label for="estrela">Estrela</label><br>
       <input type="number" step="0.01" name="estrela" id="estrela" value="<?php echo $comentario['estrela'] ?? "0.00"; ?>"><br>


       <br>
       <button type="submit">Cadastrar</button>

    </form>

    <?php require_once "../template/rodape.php";  ?>