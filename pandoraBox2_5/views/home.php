<div class="Home">
    <div class="homeTitle">
        <h1>
            <?php if( $_SESSION['usuario'] == $admin ) {
                    echo 'Bem vindo desenvolvedor';
                } else {
                    echo 'Bem vindo '.$_SESSION['usuario'];
                }?>
        </h1>
    </div>
</div>
<div id="accordionExample" class="homeMidia">
    <div class="menuHome">
        <ul>
            <li><a href="#top">Home</a></li>
            <li><a href="./?pagina=filme">Filmes</a></li>
            <li><a href="./?pagina=serie">Séries</a></li>
            <li><a href="./?pagina=anime">Animes S2</a></li>
        </ul>
    </div>
    <div class="homeCardPendentes">
        <div class="accordion">
            <!-- Animes -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Animes pendentes
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="my_container">
                            <?php $result = $midia->GetAnimeCardPendente();
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
                                                <?php echo $linha->num_temporada; ?>
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
            <!-- Filmes -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Filmes pendentes
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
            <!-- Series -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Series pendentes
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
                                                <?php echo $linha->num_temporada; ?>
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
    <div class="homeCardFavoritos">
        <div class="accordion">
            <!-- Animes -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Seus animes favoritos
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
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
                                                <?php echo $linha->num_temporada; ?>
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
            <!-- Filmes -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Seus filmes favoritos
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
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
            <!-- Series -->
            <div class="card bg-transparent">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Suas séries favoritas
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
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
                                                <?php echo $linha->num_temporada; ?>
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
</div>
