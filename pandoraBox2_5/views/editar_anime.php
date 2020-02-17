<section>
    <?php $midiaId = $_GET['midiaId'];
    if( $_SESSION['usuario'] == $admin ) {
        $result = $midia->GetMidiaPorId($midiaId);
        while( $linha = $result->fetchObject() ) { ?>
            <form class="form" method="post" action="./?pagina=editarMidia&tipo_midia=anime">
                <input class="form-control" type="hidden" name="midiaId"
                    value="<?php echo $linha->midiaId; ?>">
                <input class="form-control" type="text" name="nome_completo" placeholder="Nome do Anime"
                    value="<?php echo $linha->nome_completo; ?>">
                <input class="form-control" type="text" name="nome_capa" placeholder="Nome da capa"
                    value="<?php echo $linha->nome_capa; ?>"><br>
                <input class="form-control" type="text" name="ano_lancamento" placeholder="Ano de lançamento"
                    value="<?php echo $linha->ano_lancamento; ?>">
                <input class="form-control" type="text" name="num_episodios" placeholder="Núm de ep"
                    value="<?php echo $linha->num_episodios; ?>">
                <input class="form-control" type="text" name="num_temporadas" placeholder="Núm de temporadas"
                    value="<?php echo $linha->num_temporadas; ?>">
                <input class="form-control" type="text" name="num_temporada" placeholder="Núm da temporada"
                    value="<?php echo $linha->num_temporada; ?>">
                <input class="form-control" type="text" name="img_capa" placeholder="Img do anime"
                    value="<?php echo $linha->img_capa; ?>">
                <input class="form-control" type="text" name="genero" placeholder="genero"
                    value="<?php echo $linha->genero; ?>">
                <input class="form-control" type="text" name="duracao" placeholder="duração"
                    value="<?php echo $linha->duracao; ?>"><br>
                <textarea class="form-control" rows="5" name="descri" placeholder="Descrição"><?php echo $linha->descri; ?></textarea><br>
                <input class="form-control" type="text" name="link_midia" placeholder="URL do anime"
                    value="<?php echo $linha->link_midia; ?>">
                <input class="form-control" type="text" name="link_intru" placeholder="Intru do anime"
                    value="<?php echo $linha->link_intru; ?>">
                <input class="form-control" type="text" name="link_amv" placeholder="URL do amv"
                    value="<?php echo $linha->link_amv; ?>"><br><br>
                <input class="btn btn-dark btn-lg btn-block" type="submit" value="Editar anime">
            </form>
        <?php }
    } else {
        echo "Você não tem permisão para interagir aqui!";
    } ?>
</section>