// pega a lista da URL e armazena no vetor
// Temos um vetor para cada URL

// Casamentos em Minas gerais
var urlBase = 'https://legado.registrocivilminas.org.br/relatorio/';
function APICasamento() {
  
  let url7 = urlBase + 'casamento/tres-anos-casamento-MG';
  let xhr7 = new XMLHttpRequest();
  xhr7.responseType = "json";
  xhr7.open('GET', url7, true);
  var casamentoMG = new Array(25);
  var vetMes = new Array(25);

  xhr7.onreadystatechange = function () {
    if (xhr7.readyState == 4) {
      if (xhr7.status == 200) {
        var request7 = xhr7.response;

        
        for (i = 1; i < request7.length; i++) {
          vetMes[i] = request7[i]["mes"]
        }


        for (i = 1; i < 25; i++) {
          casamentoMG[i] = parseFloat((request7[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }
    }
  }
  xhr7.send();

  //Casamentos em Belo horizonte
  let url8 = urlBase + 'casamento/tres-anos-casamento-BH';
  let xhr8 = new XMLHttpRequest();
  xhr8.responseType = "json";
  xhr8.open('GET', url8, true);
  var casamentoBH = new Array(25);

  xhr8.onreadystatechange = function () {
    if (xhr8.readyState == 4) {
      if (xhr8.status == 200) {
        var request8 = xhr8.response;


        for (i = 1; i < 25; i++) {
          casamentoBH[i] = parseFloat((request8[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }

    }
  }
  xhr8.send();

  montaGrafico(casamentoMG, casamentoBH, vetMes, 'graficosCasamento', 'Casamentos');

}

function APINascimento() {

  let url5 = urlBase + 'nascimento/tres-anos-nascimento-MG';
  let xhr5 = new XMLHttpRequest();
  xhr5.responseType = "json";
  xhr5.open('GET', url5, true);
  var nascimentoMG = new Array(25);
  var vetMes = new Array(25);

  xhr5.onreadystatechange = function () {
    if (xhr5.readyState == 4) {
      if (xhr5.status == 200) {
        var request1 = xhr5.response;

        
        for (i = 1; i < request1.length; i++) {
          vetMes[i] = request1[i]["mes"]
        }

        for (i = 1; i < 25; i++) {
          nascimentoMG[i] = parseFloat((request1[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }
    }
  }
  xhr5.send();

  //Nascimentos em Belo Horizonte 
  let url6 = urlBase + 'nascimento/tres-anos-nascimento-BH';
  let xhr6 = new XMLHttpRequest();
  xhr6.responseType = "json";
  xhr6.open('GET', url6, true);
  var nascimentoBH = new Array(25);

  xhr6.onreadystatechange = function () {
    if (xhr6.readyState == 4) {
      if (xhr6.status == 200) {
        var request2 = xhr6.response;


        for (i = 1; i < 25; i++) {
          nascimentoBH[i] = parseFloat((request2[i]["quantidadeDeRegistro"]).replace('.', ''))
        }
      }
      else {
        alert("Erro ao carregar!")
      }

    }
  }
  xhr6.send();

  montaGrafico(nascimentoMG, nascimentoBH, vetMes, 'graficosNascimento', 'Nascimentos');
}


//Monta os Graficos
function montaGrafico(vetor1, vetor2, vetMes, divID, legenda) {

  var ctx = document.getElementById(divID).getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: vetMes.reverse(),
      datasets: [
        {
          label: legenda + ' em Minas gerais',
          data: vetor1,
          backgroundColor: [
            '#F2B33D',
          ],
          borderColor: [
            '#F2B33D',
          ],
          borderWidth: 1
        },
        {
          label: legenda + ' em Belo Horizonte',
          data: vetor2,
          backgroundColor: [
            '#007cba',
          ],
          borderColor: [
            '#007cba',
          ],
          borderWidth: 1
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