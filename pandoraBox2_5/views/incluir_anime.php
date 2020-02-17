<section>
    <?php if( $_SESSION['usuario'] == $admin or $ajudante ) { ?>
        <form class="form" method="post" action="./?pagina=addMidia&tipo_midia=anime">
            <input class="form-control" type="text" name="nome_completo" placeholder="Nome completo do Anime">
            <input class="form-control" type="text" name="nome_capa" placeholder="Nome do anime"><br>
            <input class="form-control" type="text" name="ano_lancamento" placeholder="Ano de lançamento">
            <input class="form-control" type="text" name="num_episodios" placeholder="Núm de ep">
            <input class="form-control" type="text" name="num_temporadas" placeholder="Núm de temporadas">
            <input class="form-control" type="text" name="num_temporada" placeholder="Núm da temporada">
            <input class="form-control" type="text" name="img_capa" placeholder="Img do anime">
            <input class="form-control" type="text" name="genero" placeholder="genero">
            <input class="form-control" type="text" name="duracao" placeholder="duração"><br>
            <textarea class="form-control" rows="5" type="text" name="descri" placeholder="Descrição"></textarea><br>
            <input class="form-control" type="text" name="link_midia" placeholder="URL do anime">
            <input class="form-control" type="text" name="link_intru" placeholder="URL da intru">
            <input class="form-control" type="text" name="link_amv" placeholder="URL do amv"><br><br>
            <input class="btn btn-dark btn-lg btn-block" type="submit" value="Inserir anime">
        </form>
    <?php } else {
        echo "Você não tem permisão para interagir aqui!";
    } ?>
</section>
