<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina principal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

    <style>
        .btn-bd-primary {
        --bd-green-bg: #28e084;
        --bd-green-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-green-bg);
        --bs-btn-border-color: var(--bd-green-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #28e084;
        --bs-btn-hover-border-color: #28e084;
        --bs-btn-focus-shadow-rgb: var(--bd-green-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #28e084;
        --bs-btn-active-border-color: #28e084;
      }

      
    </style>


</head>
<body>

    <!-- acessibilidade -->
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script> 




<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>




    <div class="container mt-5">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header" role="banner">
                        <h1>Polícia investiga como cabeça de porco entrou na arena e pede imagens ao Corinthians</h1>
                        <p>Dois homens foram detidos e levados ao Juizado Especial Criminal da Neo Química Arena, mas negaram envolvimento e foram liberados; na rede social, um torcedor diz ter sido autor</p>
                        <p class="text-muted">Por Bruno Cassucci e Emilio Botta — São Paulo</p>
                        <p class="text-muted">05/11/2024 00h14 • Atualizado há 25 minutos</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Flamengo x Atlético-MG</h5>
                        <p class="card-text">
                            Gabigol e Filipe Luís foram protagonistas de duas cenas curiosas no Maracanã no jogo entre Flamengo x Atlético-MG, neste domingo, no jogo de ida da final da Copa do Brasil. O treinador deu uma bronca no atacante por um erro de posicionamento na beira do gramado, mas o camisa 99 se redimiu segundos depois e marcou o segundo gol do Rubro-Negro na partida.
                        </p>
                        <p class="card-text">
                            A jogada se desenrolou até chegar em Léo Ortiz, que lançou Plata. O equatoriano tocou para Gabigol nas costas da defesa. O atacante entrou na cara com Everson, deslocou o goleiro e marcou o gol. Na comemoração, abraçou o treinador.
                        </p>
                        <img src="https://via.placeholder.com/800x400" class="img-fluid" alt="Filipe Luís e Gabigol após o segundo gol do Flamengo contra o Atlético-MG">
                        <p class="text-muted">Filipe Luís e Gabigol após o segundo gol do Flamengo contra o Atlético-MG — Foto: André Durão</p>


                        <p class="card-text">
                            A jogada se desenrolou até chegar em Léo Ortiz, que lançou Plata. O equatoriano tocou para Gabigol nas costas da defesa. O atacante entrou na cara com Everson, deslocou o goleiro e marcou o gol. Na comemoração, abraçou o treinador.
                        </p>


                        <p class="card-text">
                            Gabigol e Filipe Luís foram protagonistas de duas cenas curiosas no Maracanã no jogo entre Flamengo x Atlético-MG, neste domingo, no jogo de ida da final da Copa do Brasil. O treinador deu uma bronca no atacante por um erro de posicionamento na beira do gramado, mas o camisa 99 se redimiu segundos depois e marcou o segundo gol do Rubro-Negro na partida.
                        </p>

                        <blockquote class="blockquote">
                            <p class="mb-0">Eu quase quebrei o pé. Pensei que era uma almofada, alguma coisa assim, mas era uma cabeça de porco, quase machuquei o pé – disse o atacante Yuri Alberto após o jogo.</p>
                        </blockquote>
                        <hr>
                        <footer class="blockquote-footer">O árbitro Wilton Pereira Sampaio deve relatar o incidente na súmula após o clássico e, assim, o Corinthians pode ir a julgamento no Superior Tribunal de Justiça Desportiva (STJD).</footer>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" aria-label="Compartilhar">
                            <i class="fas fa-share"></i>
                        </button>
                        <button type="button" class="btn btn-danger" aria-label="Favoritar">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
            </div>
        </div>
    </div>

    <?php 
        include 'header.php';
        include 'rodape.php';
    ?>
</body>
</html>
