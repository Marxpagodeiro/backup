<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/styleMp.css">
    <link rel="stylesheet" href="css/styleProfile.css">
    <script src="js/menu.js" defer></script>
</head>

<body>
<header>
        <div class="dir">
            <img id="img" src="img/WhatsApp Image 2024-04-08 at 11.42.03.jpeg" alt="logo">
            <input onkeyup="filterFunction()" type="text" id="txtBusca" placeholder="Pesquisar..." />
            <div id="myDropdown" class="dropdown-content">
                <a href="perfil_user.php">Rafael Ribeiro Machado</a>
                <a href="">Bruno Almeida Machado</a>
                <a href="">Mateus Correia De Andrade</a>
                <a href="">Boaz</a>
                <a href="">Richard</a>
                <a href="">Henrique</a>
                <a href="">João Pedro</a>
            </div>
            <button onclick="myFunction()" id="btnBusca"><img id="iconb" src="img/lupa.png" alt=""></button>
        </div>
        <h2>Sophinous</h2>
        <nav>
            <ul class="menu">
                <l><a href="menu.php"><img class="icon" src="img/casa.png" alt=""></a></l>
                <li><a href="arquivos.php"><img class="icon" src="img/pasta.png" alt=""></a></li>
                <l><a href="calendario.php"><img class="icon" src="img/data-limite.png" alt=""></a></l>
                <l><a id="user"><img class="icon" src="img/do-utilizador.png" alt=""></a></l>
                <l><a href="index.php"><img class="icon" src="img/porta.png" alt=""></a></l>
            </ul>
        </nav>
    </header>
    <section class="container">
        <article class="containerImg">
            <div class="imgProfile"><img src="img/foto_rafael.png" alt=""></div>
        </article>
        <article class="">
            <h1>Rafael Machado Ribeiro</h1>
            <h1>T.I IFES - 4/4 </h1>
            <h1>Ciência da Computação UVV - 1/8</h1>
            <a href=""><button>Seguir</button>
            </a>
            <div class="divisor"></div>
            <article class="container2">
                <div id="post1" class="post">
                    <img src="img/post-rafael-01.png" alt="">
                </div>
                <div id="post2" class="post">
                    <img src="img/post-rafael-02.png" alt="">
                </div>
                <div id="post3" class="post">
                    <img src="img/post-rafael-03.png" alt="">
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
</body>

</html>