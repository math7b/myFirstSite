<section>
    <form class="form" method="post" action="usuario_login.php">
        <input type="text" name="usuario" class="form-control"
        placeholder="Nome de usuário" ><br>
        <input type="password" name="senha" class="form-control"
        placeholder="Qual a senha?" ><br><br>
        <input class="btn btn-dark" type="submit" value="Logar">
    </form>
    <div class="usuarioIncluir">
        <a href="./?pagina=cadastrar">
            <button class="btn btn-dark" type="button">
                Crie uma conta
            </button>
        </a>
    </div>
</section>