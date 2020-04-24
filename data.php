<?php
    $graphs = [
        'fatturato' => [
            'type' => 'line',
            'data' => [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322],
            'access' => 'guest'
        ],
        'fatturato_by_agent' => [
            'type' => 'pie',
            'data' => [
                'Marco' => 9000,
                'Giuseppe' => 4000,
                'Mattia' => 3200,
                'Alberto' => 2300
            ],
            'access' => 'employee'
        ],
        'team_efficiency' => [
            'type' => 'line',
            'data' => [
                'Team1' => [1,0.8,0.7,0.5,0.7,0.8,0.9,0.5,0.6,1,0.3,0.9],
                'Team2' => [0.3,0.6,0.8,0.3,0.6,0.5,0.8,0.7,0.3,0.5,0.6,1],
                'Team3' => [0.2,0.1,0.5,0.1,0.6,0.5,0.4,0.6,0.3,0.4,0.5,0.7],
            ],
            'access' => 'clevel'
        ],
    ];

    //sistemo array con tutte le informazioni che mi servono
    //aggiungo mesi a fatturato primo grafico
    $graphs['fatturato']['asseX'] = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Semptember', 'October', 'November', 'December'];
    //aggiungo colore al primo grafico del background
    $graphs['fatturato']['colore']=['lightgrey'];
    //aggiungo colori al grafico a torta
    $graphs['fatturato_by_agent']['colore']=['grey', 'orange', 'green', 'lightblue'];
    //aggiungo colori al grafico a torta
    $graphs['team_efficiency']['colore']=['blue', 'orange', 'green'];
    //aggiungo nomi e valori grafico 2 già sistemato in Array
    foreach ($graphs['fatturato_by_agent']['data'] as $key => $value) {
        $graphs['fatturato_by_agent']['nomi'][] = $key;
        $graphs['fatturato_by_agent']['valori'][] = $value;
    };
    //aggiungo mesi al grafico3
    $graphs['team_efficiency']['asseX'] = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Semptember', 'October', 'November', 'December'];

     //creo json da passare api
     $grafici = json_encode($graphs);      //filtrato
 ?>
