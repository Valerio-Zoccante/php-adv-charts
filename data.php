 <?php
    $graphs = [
        'fatturato' => [
            'type' => 'line',
            'data' => [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322]
        ],
        'fatturato_by_agent' => [
            'type' => 'pie',
            'data' => [
                'Marco' => 9000,
                'Giuseppe' => 4000,
                'Mattia' => 3200,
                'Alberto' => 2300
            ]
        ]
    ];

    //lavoro su grafico1
    //creo label mesi grafico1
    $graphs['fatturato']['label'] = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Semptember', 'October', 'November', 'December'];
    //creo json da passare api
    $fatturato = json_encode($graphs['fatturato']);

    //lavoro su grafico2
    $fatturato_by_agent = [];
    //creo type
    $fatturato_by_agent['type'] = $graphs['fatturato_by_agent']['type'];
    //creo label e data
    //array da analizzare
    $grafico_pie = $graphs['fatturato_by_agent']['data'];
    //creo due contenitori vuoti
    $fatturato_by_agent['label'] = [];
    $fatturato_by_agent['data'] = [];
    //ciclo e push
    foreach ($grafico_pie as $label => $qty) {
        $fatturato_by_agent['label'][] = $label;
        $fatturato_by_agent['data'][] = $qty;
    };
    //encode
    $fatturato_ag = json_encode($fatturato_by_agent);
 ?>
