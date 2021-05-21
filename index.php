<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Relatórios de Registros</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="graficosObito.js"></script>
  <script src="graficos.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



</head>

<body class="container" onload="carregamento()">
      <script>
            function carregamento() {
                  montaCard();
                  APICasamento(); 
                  APINascimento();
                  APIObito(); 
            }
            
      </script>

      <main>
            <div>
                  <div class="row">
                        <div class="col-12 ">
                        
                              <!-- Graficos de Barra -->
                              <div class="tab-content" id="nav-tabContent">
                                    
                                    <div class="tab-pane fade show active" id="nav-bar" role="tabpanel" aria-labelledby="nav-bar-tab">

                                          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"  aria-label="Slide 1"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                                </div>
                                                
                                                <div class="carousel-inner">
                                                      <div class="carousel-item active" data-bs-interval="30000">
                                                      <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                            <div class="col-12" id="grafico">
                                                                  <h3>Registros de óbitos</h3>
                                                                  <canvas id="graficosObito"></canvas>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsObito1"></div>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsObito2"></div>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsObito3"></div>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsObito4"></div>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item">
                                                            <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                            <div class="col-12" id="grafico" data-bs-interval="30000">
                                                                  <h3>Registros de nascimentos</h3>
                                                                  <canvas id="graficosNascimento"></canvas>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsNascimento1"></div>

                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsNascimento2"></div>

                                                            </div>
                                                      </div>
    
                                                      <div class="carousel-item">
                                                            <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                            <div class="col-12" id="grafico" data-bs-interval="30000">
                                                                  <h3>Registros de casamentos</h3>
                                                                  <canvas id="graficosCasamento"></canvas>
                                                            </div>
                                                      </div>

                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>
                                                                  <div class="row" id="cardsCasamento1"></div>
                                                            </div>
                                                      </div>
                                                      
                                                      <div class="carousel-item" id="card" data-bs-interval="20000">
                                                            <div class="col-12" >
                                                                  <div class="row" id="logo">
                                                                        <img src='logo.jpg'>
                                                                  </div>      
                                                                  <div class="row" id="cardsCasamento2"></div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Next</span>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
</body>