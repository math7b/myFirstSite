<?php $midiaId = $_GET['id'];
$result = $midia->GetMidiaPorId($midiaId);
$linha = $result->fetchObject() ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-12 col-xl-12">
                            <div>
                                <img class="det_img" src="imagens/<?php echo $linha->img_capa; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-8 col-lg-12 col-xl-12">
                            <div class="det_detalhes">
                                <h6>
                                    <b>Ep: </b><?php echo $linha->num_episodios; ?><br>
                                    <b>Temporadas: </b><?php echo $linha->num_temporadas; ?>
                                    <b>Temporada: </b><?php echo $linha->num_temporada;?><br>
                                    <b>Duração: </b><?php echo $linha->duracao; ?><br>
                                    <b>Ano: </b><?php echo $linha->ano_lancamento; ?><br><br>
                                    <b>Gêneros: </b><br><?php echo $linha->genero; ?><br><br>
                                    <?php if( $_SESSION['usuario'] == $admin or $ajudante ) { ?>
                                        <b>Data de adição: </b><br><?php echo $linha->data_adicao; ?><br>
                                        <b>Data de mocidicação: </b><br>
                                        <?php if( $linha->data_modificacao != '') {
                                            echo $linha->data_modificacao;
                                        } else { ?>
                                            A midia não sofreu nenhuma modificação.
                                        <?php } ?><br>
                                    <?php } ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9">
                <div class="det_descri">
                    <h6>
                        <div class="det_title">
                            <h5><b><?php echo $linha->nome_completo; ?></b></h5>
                        </div>
                        <p><?php echo $linha->descri; ?></p><br><br>
                    </h6>
                </div>
                <div class="det_link"> 
                    <a href="<?php echo $linha->link_midia; ?>">
                        <button type="button">
                            <h6>Ir para o Anime?</h6>
                        </button>
                    </a>
                    <a href="<?php echo $linha->link_intru; ?>">
                        <button type="button">
                            <h6>Ir para a intru?</h6>
                        </button>
                    </a>
                    <a href="<?php echo $linha->link_amv; ?>">
                        <button type="button">
                            <h6>Ir para o amv?</h6>
                        </button>
                    </a>
                    <a href="./?pagina=alt_pendente&id=<?php echo $linha->midiaId; ?>&tipo_midia=anime">
                        <button type="button">
                            <h6>
                                <?php if ( ($midia->GetPendentesPorId($midiaId)) != '' ) {
                                    echo "Remover dos pendentes?";
                                } else { 
                                    echo "Adicionar aos pendetes?";
                                } ?>
                            </h6>
                        </button>
                    </a> 
                    <a href="./?pagina=alt_favorito&id=<?php echo $linha->midiaId; ?>&tipo_midia=anime">
                        <button type="button">
                            <h6>
                                <?php if( ($midia->GetFavoritosPorId($midiaId)) != '' ) {
                                    echo "Remover dos favoritos?";
                                } else {
                                    echo "Adicionar aos favoritos?";
                                } ?>
                            </h6>
                        </button>
                    </a> <br>
                    <?php
                    if( $_SESSION['usuario'] == $admin or $ajudante) { ?>
                        <a href="./?pagina=excluirMidia&midiaId=<?php echo $linha->midiaId; ?>&tipo_midia=anime">
                            <button type="button">
                                <h6>Deletar</h6>
                            </button>
                        </a>
                        <a href="./?pagina=editar_anime&midiaId=<?php echo $linha->midiaId; ?>&tipo_midia=anime">
                            <button type="button">
                                <h6>Editar</h6>
                            </button>
                        </a>
                    <?php } ?>
                </div>            
            </div>
        </div>
    </div>
</section>
