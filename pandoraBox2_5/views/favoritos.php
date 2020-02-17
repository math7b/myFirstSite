<div class="home_card">
    <div class="accordion" id="accordionExample">
        <!--animes-->
        <div class="card bg-transparent">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Seus animes favoritos
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="my_container">
                        <?php $result = $midia->GetAnimeCardFavorito();
                        while( $linha = $result->fetchObject() ) { ?>
                        <div class="midia">
                            <a href="./?pagina=detalhes_anime&id=<?php echo $linha->midiaId; ?>">
                                <div>
                                    <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                                </div>
                                <div class="midia_detalhes">
                                    <p>
                                        <?php echo $linha->ano_lancamento; ?> <br>
                                        <?php echo $linha->num_episodios; ?> <br>
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
        <!--filmes-->
        <div class="card bg-transparent">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Seus filmes favoritos
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">                
                    <div class="my_container">
                        <?php $result = $midia->GetFilmeCardFavorito();
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
                                            <?php echo $linha->faixa_etaria; ?>
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
        <!--séries-->
        <div class="card bg-transparent">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Suas séries favoritas
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="my_container">
                        <?php $result = $midia->GetSerieCardFavorito();
                        while( $linha = $result->fetchObject() ) { ?>
                        <div class="midia">
                            <a href="./?pagina=detalhes_serie&id=<?php echo $linha->midiaId; ?>">
                                <div>
                                    <img class="midia_img" src="imagens/<?php echo $linha->img_capa; ?>">
                                </div>
                                <div class="midia_detalhes">
                                    <p>
                                        <?php echo $linha->ano_lancamento; ?><br>
                                        <?php echo $linha->num_episodios; ?><br>
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
