var urlBase1 = 'https://registrocivilminas.org.br/relatorios-recivil/pedido-certidao'; 
function graficosCRCTipoSaida() {
    let url = urlBase1 + '/tipo-saida';
    let xhr = new XMLHttpRequest();
    xhr.responseType = "json";
    xhr.open('GET', url, true);
    var tipoSaida;
    var nomeTipoRegistro;

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var request = xhr.response;
                tipoSaida = new Array(request.length);
                nomeTipoRegistro = new Array(request.length);
                for (let i = 0; i < request.length; i++) {
                    tipoSaida [i]= request[i]['quantidadeRegistro'];
                    nomeTipoRegistro[i] = request[i]['nomeTipoRegistro'];
                }
                montagraficoCRC(tipoSaida, nomeTipoRegistro, 'graficosCRCTipoSaida');
            } else {
                alert("Erro ao carregar!")
            }
        }
    }
    xhr.send();
    
}

function graficosCRCTipoCertidao() {
    let url = urlBase1 + '/tipo-certidao';
    let xhr = new XMLHttpRequest();
    xhr.responseType = "json";
    xhr.open('GET', url, true);
    var tipoCertidao;
    var nomeTipoRegistro;

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var request = xhr.response;
                tipoCertidao = new Array(request.length);
                nomeTipoRegistro = new Array(request.length);
                for (let i = 0; i < request.length; i++) {
                    tipoCertidao [i]= request[i]['quantidadeRegistro'];
                    nomeTipoRegistro[i] = request[i]['nomeTipoRegistro'];
                }
                montagraficoCRC(tipoCertidao, nomeTipoRegistro, 'graficosCRCTipoCertidao');

            } else {
                alert("Erro ao carregar!")
            }
        }
    }
    xhr.send();
    
}
function montagraficoCRC(dados, nome, id){

    var ctx = document.getElementById(id).getContext('2d');
    chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: nome ,
            datasets: [{
                label: 'My First Dataset',
                data: dados,
                backgroundColor: [
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)',
                  'rgb(0, 0, 0)',
                  'rgb(255, 99, 132)'

                ],
                hoverOffset: 4
              }]
        },
    });
}