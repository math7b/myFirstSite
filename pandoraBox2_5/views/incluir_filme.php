<section>
    <?php if( $_SESSION['usuario'] == $admin or $ajudante ) { ?>
        <form class="form" method="post" action="./?pagina=addMidia&tipo_midia='filme'">
            <input class="form-control" type="text" name="nome_completo" placeholder="Nome completo do filme">
            <input class="form-control" type="text" name="nome_capa" placeholder="Nome do filme"><br>
            <input class="form-control" type="text" name="ano_lancamento" placeholder="Ano de lançamento">
            <input class="form-control" type="text" name="img_capa" placeholder="Img do filme">
            <input class="form-control" type="text" name="genero" placeholder="genero">
            <input class="form-control" type="text" name="duracao" placeholder="duração">
            <input class="form-control" type="text" name="faixa_etaria" placeholder="faixa etaria"><br>
            <textarea class="form-control" rows="5" type="text" name="descri" placeholder="Descrição"></textarea><br>
            <input class="form-control" type="text" name="link_midia" placeholder="URL do filme">
            <input class="form-control" type="text" name="link_trailer" placeholder="URL do trailer">
            <input class="form-control" type="text" name="tipo_conteudo" placeholder="tipo do conteudo"><br><br>
            <input class="btn btn-dark btn-lg btn-block" type="submit" value="Inserir filme">
        </form>
    <?php } else {
        echo "Você não tem permisão para interagir aqui!";
    } ?>
</section>
