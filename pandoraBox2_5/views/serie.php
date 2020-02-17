<section>

    <div class="pendentesDetalhes">
        <div class="accordion" id="accordionExample">
            <div class="card bg-transparent">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <h5>Pendentes</h5>
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="my_container">
                            <?php $result = $midia->GetSerieCardPendente();
                            while( $linha = $result->fetchObject() ) { ?>                    
                            <div class="midia">
                                <a href="./?pagina=detalhes_serie&id=<?php echo $linha->midiaId; ?>">
                                    <div>
                                        <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                                    </div>
                                    <div class="midia_detalhes">
                                        <p>
                                            <?php echo $linha->ano_lancamento; ?><br>
                                            <?php echo $linha->num_episodios; ?></b><br>
                                            <?php echo $linha->num_temporadas; ?>         
                                        </p>
                                    </div>
                                    <div class="midia_rodape">
                                        <p> <?php echo $linha->nome_capa; ?> </p>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my_container">
        <?php $result = $midia->GetSerie();
        while( $linha = $result->fetchObject() ) { ?>
        <div class="midia">
            <a href="./?pagina=detalhes_serie&id=<?php echo $linha->midiaId; ?>">
                <div>
                    <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                </div>
                <div class="midia_detalhes">
                    <p>
                        <?php echo $linha->ano_lancamento; ?><br>
                        <?php echo $linha->num_episodios; ?></b><br>
                        <?php echo $linha->num_temporadas; ?>         
                    </p>
                </div>
                <div class="midia_rodape">
                    <p> <?php echo $linha->nome_capa; ?> </p>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>

</section>
