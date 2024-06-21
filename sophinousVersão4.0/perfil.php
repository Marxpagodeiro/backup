<?php 
require_once 'header.php';


?>

    <link rel="stylesheet" href="css/styleProfile.css">
    <section class="container">
        <article class="containerImg">
            <div class="imgProfile"><img src="img/do-utilizador.png" alt=""></div>
        </article>
        <article class="">
            <h1>Usuario</h1>
            <h1>IFES - Campus Serra</h1>
            <h1>Tecnico Informática</h1>
            <a href="editPerfil.php">
                <button>Editar Perfil</button>
            </a>
            <div class="divisor"></div>
            <article class="container2">
                <div id="post1" class="post">
                    <img src="img/Captura de tela 2024-06-01 142351.png" alt="">
                </div>
                <div id="post2" class="post">
                    <img src="img/Captura de tela 2024-06-01 142420.png" alt="">
                </div>
                <div id="post3" class="post">
                    <img src="img/Captura de tela 2024-06-01 142450.png" alt="">
                </div>
            </article>
        </article>
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