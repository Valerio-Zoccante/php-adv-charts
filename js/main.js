//step3

//chiamo api con i dati dei grafici
$.ajax({
    url: 'server.php',
    method: 'GET',
    success: function(data){
        valutaRisposta(data);
    },
    error: function(){
        alert('errore');
    }
});

function valutaRisposta(risposta) {
    for (var grafico in risposta) {
        if(grafico == 'fatturato') {
            var template = risposta[grafico];
            var chart = new Chart($('#line'), {
                type: template.type,
                data: {
                    labels: template.asseX,
                    datasets: [{
                        label: grafico,
                        backgroundColor: template.colore,
                        data: template.data
                    }]
                }
            })
        } else if (grafico == 'fatturato_by_agent') {
            var template = risposta[grafico];
            var chart = new Chart($('#pie'), {
                type: template.type,
                data: {
                    labels: template.nomi,
                    datasets: [{
                        backgroundColor: template.colore,
                        data: template.valori
                    }]
                }
            })
        } else if (grafico == 'team_efficiency') {
            var template = risposta[grafico];
            var chart = new Chart($('#multi-line'), {
                type: template.type,
                data: {
                    labels: template.asseX,
                    datasets: [{
                        label: 'Team1',
                        borderColor: template['colore'][0],
                        data: template['data']['Team1']
                    },
                    {
                        label: 'Team2',
                        borderColor: template['colore'][1],
                        data: template['data']['Team2']
                    },
                    {
                        label: 'Team3',
                        borderColor: template['colore'][2],
                        data: template['data']['Team3']
                    }],
                }
            })
        }
    }
};
