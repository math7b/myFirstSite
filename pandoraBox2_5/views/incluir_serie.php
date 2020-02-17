<section>
    <?php if( $_SESSION['usuario'] == $admin ) { ?>
        <form class="form" method="post" action="./?pagina=addMidia&tipo_midia=serie">
            <input class="form-control" type="text" name="nome_completo" placeholder="Nome completo da série">
            <input class="form-control" type="text" name="nome_capa" placeholder="Nome da série"><br>
            <input class="form-control" type="text" name="num_episodios" placeholder="Nume de ep">
            <input class="form-control" type="text" name="num_temporada" placeholder="Núm da temporada">
            <input class="form-control" type="text" name="num_temporadas" placeholder="Numero de temporadas">
            <input class="form-control" type="text" name="ano_lancamento" placeholder="Ano de lançamento">
            <input class="form-control" type="text" name="img_capa" placeholder="Img da série">
            <input class="form-control" type="text" name="duracao" placeholder="duração">
            <input class="form-control" type="text" name="faixa_etaria" placeholder="faixa etaria"><br>
            <textarea class="form-control" rows="5" type="text" name="descri" placeholder="Descrição"></textarea><br>
            <input class="form-control" type="text" name="link_midia" placeholder="URL da série">
            <input class="form-control" type="text" name="link_trailer" placeholder="URL do trailer"><br><br>
            <input class="btn btn-dark btn-lg btn-block" type="submit" value="Inserir série">
        </form>
    <?php } else {
        echo "Você não tem permisão para interagir aqui!";
    } ?>
</section>
