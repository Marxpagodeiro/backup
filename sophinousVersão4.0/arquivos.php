<?php 
require_once 'header.php';


?>
    <link rel="stylesheet" href="css/arquivo.css">
  <div class="container">
    <aside class="sidebar">
      <button id="progWeb">Programação para Web</button><br>
      <button id="s_redes">Serviço de redes</button><br>
      <button id="p_redes">Projeto de redes</button><br>
      <button id="t_redes">Tópicos de redes</button><br>
      <button id="a_web">Aplicativos Gráficos para web</button>
    </aside>
    <main class="content">
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
      <div class="folder"><img src="img/pasta.png" alt="Pasta"><span>aula1.zip</span></div>
    </main>
  </div>
  <div class="action-buttons">
    <button id="add" class="btn-action"><img src="img/add.png" alt="Adicionar"></button>
    <button id="remover" class="btn-action"><img src="img/lixeira.png" alt="Excluir"></button>
  </div>

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
require_once 'header.php';


?>
