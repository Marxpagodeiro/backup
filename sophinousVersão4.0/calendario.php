<?php 
require_once 'header.php';


?>

    <link rel="stylesheet" href="css/evo-calendar.midnight-blue.min.css">
    <link rel="stylesheet" href="css/evo-calendar.min.css">
    <div class="hero">

        <div id="calendar"></div>

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
    <!--- Java Script do calenario-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
    <script src="js/evo-calendar.min.js"></script>

    <script>
        $('#calendar').evoCalendar({
            'language': 'pt'
        });


        $(document).ready(function () {
            $('#calendar').evoCalendar({
                'theme': 'Midnight Blue'
            })
        });

        $('#calendar').evoCalendar('addCalendarEvent', {
            id: 'kNybja6',
            name: 'Trabalho PI',
            description: 'Apresentação do front end do trabalho de programação web',
            date: 'june 03, 2024',
            type: 'Trabalho'
        });
    </script>

<?php 

require_once 'footer.php';

?>