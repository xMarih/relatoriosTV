<?php include 'menu.php'; ?>

<body onload="carregamentoGraficos()">


      <script>
            function carregamentoGraficos() {
                  myFunction();
                  graficosObito();
                  graficosNasc();
                  graficosCasamento();

                  casamentos();
                  nascimentos();
                  obitos();

                  graficosCRCTipoSaida();
                  graficosCRCTipoCertidao();
                  CRC();


            }
      </script>
      <div id="loader"></div>
      <div style="display:none;" id="myDiv" class="animate-bottom">
            <div class="row">
                  <div class="col-12 ">
                        <div class="row" id="logo">
                              <img src='logo.jpg'>
                        </div>
                        <!-- Graficos de Barra -->
                        <div class="tab-content" id="nav-tabContent">

                              <div class="tab-pane fade show active" id="nav-bar" role="tabpanel" aria-labelledby="nav-bar-tab">

                                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                          <div class="carousel-indicators">

                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
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
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="12" aria-label="Slide 13"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="13" aria-label="Slide 14"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="14" aria-label="Slide 15"></button>

                                          </div>


                                          <div class="carousel-inner">
                                                <!-- Graficos de registro de obito -->
                                                <div class="carousel-item active">
                                                      <div class="col-12" id="grafico">
                                                            <h3>Registros de óbitos</h3>
                                                            <canvas id="graficosObitoBar"></canvas>
                                                      </div>
                                                </div>

                                                <!-- Cards Registro de Obito -->
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">

                                                            <div class="row" id="cardsObito1"></div>

                                                      </div>
                                                </div>
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">

                                                            <div class="row" id="cardsObito2"></div>
                                                      </div>
                                                </div>
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">

                                                            <div class="row" id="cardsObito3"></div>

                                                      </div>
                                                </div>
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">

                                                            <div class="row" id="cardsObito4"></div>

                                                      </div>
                                                </div>
                                                <!-- Graficos Registro de Nascimento -->
                                                <div class="carousel-item">
                                                      <div class="col-12" id="grafico">
                                                            <h3>Registros de nascimentos</h3>
                                                            <canvas id="graficosNascBar"></canvas>
                                                      </div>
                                                </div>
                                                <!-- Cards Registro de nascimento -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">
                                                            
                                                            <div class="row" id="cardsNascimento1"></div>

                                                      </div>
                                                </div>
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">
                                                            
                                                            <div class="row" id="cardsNascimento2"></div>

                                                      </div>
                                                </div>
                                                <!-- Graficos Registro de Casamento -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="grafico">
                                                            <h3>Registros de casamentos</h3>
                                                            <canvas id="graficosCasamentoBar"></canvas>
                                                      </div>
                                                </div>
                                                <!-- Cards Registro de Casamento -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">
                                                            
                                                            <div class="row" id="cardsCasamento1"></div>

                                                      </div>
                                                </div>
                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">
                                                            
                                                            <div class="row" id="cardsCasamento2"></div>

                                                      </div>
                                                </div>
                                                <!-- Graficos Registro de CRC Tipo saida -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="graficoPie">
                                                            <h3>Relatórios do CRC</h3>
                                                            <h4>por tipo entrega</h4>
                                                            <canvas id="graficosCRCTipoSaida"></canvas>
                                                      </div>
                                                </div>
                                                <!-- Cards Registro de CRC Tipo saida -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards1">
                                         
                                                            <div class="row" id="cardsCRCTipoSaida"></div>

                                                      </div>
                                                </div>

                                                <!-- Graficos Registro de CRC Tipo certidão -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="graficoPie">
                                                            <h3>Relatórios do CRC</h3>
                                                            <h4>por tipo de certidão solicitada</h4>
                                                            <canvas id="graficosCRCTipoCertidao"></canvas>
                                                      </div>
                                                </div>
                                                <!-- Cards Registro de CRC Tipo certidão -->

                                                <div class="carousel-item">
                                                      <div class="col-12" id="cards">
                                     
                                                            <div class="row" id="cardsCRCTipoCertidao"></div>

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
</body>