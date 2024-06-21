<?php 
require_once 'header.php';


?>
    <link rel="stylesheet" href="css/styleProfileEdit.css">
    <script src="js/form.js" defer></script>
    <section class="container">
        <article>
            <div class="imgProfile"><img src="img/do-utilizador.png" alt=""></div>
        </article>
        <form action="">
            <article class="btnFoto"><input type="file" name="foto_usuario" id="fotoPerfil"></article>
            <article class="grupoDiv">
                <div class="coluna1">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome_usuario" id="nome" class="Formulário">
                    <label for="email">Email</label>
                    <input type="email" name="email_usuario" id="email" class="Formulário">
                    <label for="contato">Contato</label>
                    <input type="tel" name="contato_usuario" id="contato" class="Formulário">
                    <label for="nascimento">Data de Nascimento</label>
                    <input type="date" name="nascimento_usuario" id="nascimento" class="Formulário">
                    <label>Gênero</label>
                    <div class="btnRadio">
                        <input type="radio" value="Masculino" name="usuario_genero" id="masculino">
                        <label for="masculino">Masculino</label>
                    </div>
                    <div class="btnRadio">
                        <input type="radio" value="Feminino" name="usuario_genero" id="feminino">
                        <label for="feminino">Feminino</label>
                    </div>
                    <div class="btnRadio">
                        <input type="radio" value="NaoBinario" name="usuario_genero" id="nao_binario">
                        <label for="nao_binario">Não Binario</label>
                    </div>
                    <label for="sobre">Sobre mim</label>
                </div>
                <div class="coluna2">
                    <label for="ensino">Instituição de Ensino</label>
                    <input type="text" name="ensino_usuario" id="ensino" class="Formulário">
                    <label for="curso">Curso</label>
                    <input type="text" name="curso_usuario" id="curso" class="Formulário">
                    <label for="periodo">Período</label>
                    <input type="number" name="periodo_usuario" id="periodo" class="Formulário">
                    <label for="ineteresse">Diciplinas/Interesses</label>
                    <input type="text" name="Diciplinas_usuarios" id="Diciplinas" class="Formulário">
                </div>
            </article>
            <textarea name="sobre_usuario" id="sobre"></textarea>
            <article class="btnEnviar">
                <button type="submit">CONFIRMAR</button>
                <button type="reset">Limpar</button>
            </article>
        </form>
    </section>

    <div id="popuPerfil" class="hidden">
        <div class="perfil-header">
            <img src="img/do-utilizador.png" alt="User Image" class="imagemPerfil">
            <h3>Usuário</h3>
        </div>
        <div class="perfil-stats">
            <p id="contadorSeguindo">Seguindo: <span>100</span></p>
            <p id="contadorSegidores">Seguidores: <span>150</span></p>
        </div>
        <button id="botaoEdi" onclick="entrar()">Perfil</button>
    </div>

<?php 

require_once 'footer.php';

?>