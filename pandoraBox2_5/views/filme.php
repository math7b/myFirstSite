<section>

    <div class="pendentesDetalhes">
        <div class="accordion" id="accordionExample">
            <div class="card bg-transparent">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <h5>Pendentes</h5>
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="my_container">
                            <?php $result = $midia->GetFilmeCardPendente();
                            while( $linha = $result->fetchObject() ) { ?>                    
                            <div class="midia">
                                <a href="./?pagina=detalhes_filme&id=<?php echo $linha->midiaId; ?>">
                                    <div>
                                        <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                                    </div>
                                    <div class="midia_detalhes">
                                        <p>
                                            <?php echo $linha->duracao; ?><br>
                                            <?php echo $linha->ano_lancamento; ?><br>
                                            <span class="badge badge-dark">
                                                <b><?php echo $linha->faixa_etaria; ?></b>
                                            </span>
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
        <?php $result = $midia->GetFilme();
        while( $linha = $result->fetchObject() ) { ?>
        <div class="midia">
            <a href="./?pagina=detalhes_filme&id=<?php echo $linha->midiaId; ?>">
                <div>
                    <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                </div>
                <div class="midia_detalhes">
                    <p>
                        <?php echo $linha->duracao; ?><br>
                        <?php echo $linha->ano_lancamento; ?><br>
                        <span class="badge badge-dark">
                            <b><?php echo $linha->faixa_etaria; ?></b>
                        </span>
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
