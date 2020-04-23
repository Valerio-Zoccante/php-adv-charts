//step2
//funzioni che crea due grafici milestone2 con tipo di grafico in ingresso
creaGrafico('line');
creaGrafico('pie');

//chiamata ajax richiamata da funzione
function creaGrafico(type){
    var url = 'server' + type + '.php';
    var selettore = '#' + type;
    $.ajax({
        url: url,
        method: 'GET',
        success: function(data){
            var ctx = $(selettore);
            var chart = new Chart(ctx, {
                type: data.type,
                data: {
                    labels: data.label,
                    datasets: [{
                        data: data.data,
                        label: 'Vendite',
                        backgroundColor: ['grey', 'orange', 'green', 'lightgrey']
                    }]
                }
            });
        },
        error: function(){
            alert('errore');
        }
    });
};
