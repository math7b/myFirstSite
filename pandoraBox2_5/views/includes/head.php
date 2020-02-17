<!DOCTYPE html>
<html>
    <head>
        <title> Pandora_box </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="stile_box.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="gb" id="gb">
        <header>
            <div class="logo">
                <a href="./?pagina=home">
                    <h4><b>Yuki Katashy</b></h4>
                </a>
            </div>        
            <?php if(isset($_SESSION['login']) ) { ?>
                <nav>
                    <div class="menuHead">
                        <ul>
                            <?php if( $_GET['pagina'] != 'home' ) { ?>
                                <?php if( $_SESSION['usuario'] == $admin) { ?>
                                    <?php if( $_GET['pagina'] == 'anime' ) { ?>
                                        <li><a href="./?pagina=incluir_anime&tipo_midia=anime">Incluir anime</a></li>
                                    <?php } 
                                    if( $_GET['pagina'] == 'filme' ) { ?>
                                        <li><a href="./?pagina=incluir_filme&tipo_midia=filme">Incluir filme</a></li>
                                    <?php } 
                                    if( $_GET['pagina'] == 'serie' ) { ?>
                                        <li><a href="./?pagina=incluir_serie&tipo_midia=serie">Incluir série</a></li>
                                    <?php } 
                                } ?>
                                <li><a href="./?pagina=filme" onclick="mudaFundo('gb')">Filmes</a></li>
                                <li><a href="./?pagina=serie" onclick="mudaFundo('gb')">Séries</a></li>
                                <li><a href="./?pagina=anime" onclick="mudaFundo('gb')">Animes S2</a></li>
                                <li><a href="./?pagina=home">Home</a></li>
                            <?php } 
                            if( $_GET['pagina'] == 'home' ) { ?>
                                <li><a href="#accordionExample">Midias</a></li>
                            <?php } ?>
                            <li><a href="./?pagina=logout"><?php echo $_SESSION['usuario']; ?> (sair)</a></li>
                        </ul>
                    </div>
                </nav>
            <?php } 
            if( !isset($_SESSION['login']) ) { ?>
                <div class="erroLogin">
                    <?php if(isset($_GET['erro'])) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $_GET['erro']; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </header><br>
        <?php if( isset($_SESSION['login']) ) { ?>
            <div class="erro">
                <?php if(isset($_GET['erro'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $_GET['erro']; ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>