<?php $midiaId = $_POST['midiaId'];
$nome_completo = $_POST['nome_completo'];
$nome_capa = $_POST['nome_capa'];
$ano_lancamento = $_POST['ano_lancamento'];
$num_episodios = $_POST['num_episodios'];
$num_temporadas = $_POST['num_temporadas'];
$num_temporada = $_POST['num_temporada'];
$img_capa = $_POST['img_capa'];
$genero = $_POST['genero'];
$duracao = $_POST['duracao'];
$link_midia = $_POST['link_midia'];
$link_intru = $_POST['link_intru'];
$link_amv = $_POST['link_amv'];
$descri = $_POST['descri'];
$tipo_conteudo = $_POST['tipo_conteudo'];
$faixa_etaria = $_POST['faixa_etaria'];
$link_trailer = $_POST['link_trailer'];
$tipo_midia = $_GET['tipo_midia'];
$midia->EditarMidia($midiaId, $nome_completo, $nome_capa, $ano_lancamento, $num_episodios, $num_temporadas, $num_temporada, $img_capa, $genero, $duracao, $link_midia, $link_intru, $link_amv, $descri, $tipo_conteudo, $faixa_etaria, $link_trailer, $tipo_midia);
header('location:index.php?pagina=detalhes_'.$tipo_midia.'&id='.$midiaId) ?>
