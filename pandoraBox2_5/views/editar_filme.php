<section>
    <?php $midiaId = $_GET['midiaId'];
    if( $_SESSION['usuario'] == $admin ) {
        $result = $midia->GetMidiaPorId($midiaId);
        while( $linha = $result->fetchObject() ) { ?>
            <form class="form" method="post" action="./?pagina=editarMidia&tipo_midia=filme">
                <input class="form-control" type="hidden" name="midiaId"
                    value="<?php echo $linha->midiaId; ?>">
                <input class="form-control" type="text" name="nome_completo" placeholder="Nome completo do filme"
                    value="<?php echo $linha->nome_completo; ?>">
                <input class="form-control" type="text" name="nome_capa" placeholder="Nome do filme"
                    value="<?php echo $linha->nome_capa; ?>"><br>
                <input class="form-control" type="text" name="ano_lancamento" placeholder="Ano de lançamento"
                    value="<?php echo $linha->ano_lancamento; ?>">
                <input class="form-control" type="text" name="img_capa" placeholder="Img do filme"
                    value="<?php echo $linha->img_capa; ?>">
                <input class="form-control" type="text" name="genero" placeholder="genero"
                    value="<?php echo $linha->genero; ?>">
                <input class="form-control" type="text" name="duracao" placeholder="duração"
                    value="<?php echo $linha->duracao; ?>">
                <input class="form-control" type="text" name="faixa_etaria" placeholder="faixa etaria"
                    value="<?php echo $linha->faixa_etaria; ?>"><br>
                <textarea class="form-control" rows="5" type="text" name="descri" placeholder="Descrição"><?php echo $linha->descri; ?></textarea><br>
                <input class="form-control" type="text" name="link_midia" placeholder="URL do filme"
                    value="<?php echo $linha->link_midia; ?>">
                <input class="form-control" type="text" name="link_trailer" placeholder="URL do trailer"
                    value="<?php echo $linha->link_trailer; ?>">
                <input class="form-control" type="text" name="tipo_conteudo" placeholder="tipo"
                    value="<?php echo $linha->tipo_conteudo; ?>"><br>
                <input class="form-control" type="text" name="tipo_midia" placeholder="Tipo da midia"
                    value="<?php echo $linha->tipo_midia; ?>"><br><br>
                <input class="btn btn-dark btn-lg btn-block" type="submit" value="Editar filme">
            </form>
        <?php }
    } else {
        echo "Você não tem permisão para interagir aqui!";
    } ?>
</section>