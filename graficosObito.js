function APIObito() {
  var urlBase = 'https://legado.registrocivilminas.org.br/relatorio/';
  let url1 = urlBase + 'obito/tres-anos-geral-MG';
  let xhr1 = new XMLHttpRequest();
  xhr1.responseType = "json";
  xhr1.open('GET', url1, true);
  var mortesGeralMG = new Array(25);
  var vetMes = new Array(25);
  
  xhr1.onreadystatechange = function () {
    if (xhr1.readyState == 4) {
      if (xhr1.status == 200) {
        var request1 = xhr1.response;
        
        for (i = 1; i < request1.length; i++) {
          vetMes[i] = request1[i]["mes"]
        }

        for (i = 1; i < 25; i++) {
          mortesGeralMG[i] = parseFloat((request1[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }
    }
  }
  xhr1.send();


  let url2 = urlBase + 'obito/tres-anos-covid-MG';
  let xhr2 = new XMLHttpRequest();
  xhr2.responseType = "json";
  xhr2.open('GET', url2, true);
  var mortesCovidMG = new Array(25);

  xhr2.onreadystatechange = function () {
    if (xhr2.readyState == 4) {
      if (xhr2.status == 200) {
        var request2 = xhr2.response;


        for (i = 1; i < request2.length; i++) {
          mortesCovidMG[i] = parseFloat((request2[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }

    }
  }
  xhr2.send();
  
  let url3 = urlBase + 'obito/tres-anos-geral-BH';
  let xhr3 = new XMLHttpRequest();
  xhr3.responseType = "json";
  xhr3.open('GET', url3, true);
  var mortesGeralBH = new Array(25);

  
  xhr3.onreadystatechange = function () {
    if (xhr3.readyState == 4) {
      if (xhr3.status == 200) {
        var request3 = xhr3.response;

        for (i = 1; i < 25; i++) {
          mortesGeralBH[i] = parseFloat((request3[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }
    }
  }
  xhr3.send();


  let url4 = urlBase + 'obito/tres-anos-covid-BH';
  let xhr4 = new XMLHttpRequest();
  xhr4.responseType = "json";
  xhr4.open('GET', url4, true);
  var mortesCovidBH = new Array(25);

  xhr4.onreadystatechange = function () {
    if (xhr4.readyState == 4) {
      if (xhr4.status == 200) {
        var request4 = xhr4.response;

        for (i = 1; i < request4.length; i++) {
          mortesCovidBH[i] = parseFloat((request4[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }

    }
  }
  xhr4.send();

  montaGraficoObito(mortesGeralMG, mortesCovidMG, mortesGeralBH, mortesCovidBH, vetMes, 'graficosObito', 'Óbitos')

}


//Monta os Graficos
function montaGraficoObito(mortesGeralMG, mortesCovidMG, mortesGeralBH, mortesCovidBH, vetMes, divID, legenda) {

  var ctx = document.getElementById(divID).getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: vetMes,
      datasets: [
        {
          label: legenda + ' em Minas gerais',
          data: mortesGeralMG,
          backgroundColor: [
            '#F2B33D',
          ],
          borderColor: [
            '#F2B33D',
          ],
          borderWidth: 1
        },
        {
          label: legenda + 'por COVID em Minas Gerais',
          data: mortesCovidMG,
          backgroundColor: [
            'rgba(255, 0, 0)',
          ],
          borderColor: [
            'rgba(255, 0, 0)',
          ],
          borderWidth: 1
        },
        {
          label: legenda + ' em Belo Horizonte',
          data: mortesGeralBH,
          backgroundColor: [
            '#007cba',
          ],
          borderColor: [
            '#007cba',
          ]
        },
        {
          label: legenda + ' por COVID em Belo Horizonte',
          data: mortesCovidBH,
          backgroundColor: [
            'rgba(0, 0, 0)',
          ],
          borderColor: [
            'rgba(0, 0, 0)',
          ]
        },

      ]
    },
    options: {
      plugins: {
        legend: {

          position: 'bottom'

        }
      }
    }
  });

}