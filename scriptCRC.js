var urlBase2 = 'https://registrocivilminas.org.br/relatorios-recivil/pedido-certidao'; 

function CRC(){
    cardsCRC("#cardsCRCTipoSaida","para entrega ",  "CRC",'/tipo-saida' );
    cardsCRC("#cardsCRCTipoCertidao","para certidões de ", "CRC",'/tipo-certidao' );
}

function cardsCRC( cards, descricao, tipoRelatorio, url1) {
    let url = urlBase2 + url1;
    let xhr = new XMLHttpRequest();
    xhr.responseType = "json";
    xhr.open('GET', url, true);
    let cod_html = "";
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var request = xhr.response;

                for (i = 0; i < request.length; i++) {
                    var quantidadeDeRegistro = request[i]["quantidadeRegistro"];
                    var nomeTipoRegistro = request[i]["nomeTipoRegistro"];
                    
                    cod_html +=
                        `
                        <div class="card" style="width: 32%; margin-left:1%; margin-bottom:1%">
                            <div class="card-header">Relatórios do ${tipoRelatorio}</div>
                            <div class="card-body">
                                <h4 class="card-title">Número de pedidos via CRC ${descricao}${nomeTipoRegistro}</h4>
                                <h2 class="card-text" style="text-align: right;">${quantidadeDeRegistro}</h2>
                                <button class="btn btn-primary">Saiba mais</button></a>
                            </div>
                        </div>
                    `;
                }

                $(cards).html(cod_html);

            } else {
                alert("Erro ao carregar!")
            }
        }
    }
    xhr.send();
}
