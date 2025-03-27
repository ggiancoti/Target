<?php

tarefa05();

function tarefa01(){
    $indice = 13;
    $soma=0;

    for($k=0; $k<$indice; $k++){

        $soma = $soma + $k;
    }

    echo $soma;
}

function tarefa02(){

    $n = 10;
    $f = fibonacci($n);

    if (pertenceFibonacci($n, $f)) {
        echo "$n pertence à sequência de Fibonacci.\n";
    } else {
        echo "$n não pertence à sequência de Fibonacci.\n";
    }

}

function fibonacci($n) {
    
    $f = array(0, 1);

    while ($f[count($f) - 1] < $n) {
        $f[] = $f[count($f) - 1] + $f[count($f) - 2];
    }

    return $f;
}

function pertenceFibonacci($n, $f) {
    return in_array($n, $f);
}

function tarefa03(){

    $json = '[
        {
            "dia": 1,
            "valor": 22174.1664
        },
        {
            "dia": 2,
            "valor": 24537.6698
        },
        {
            "dia": 3,
            "valor": 26139.6134
        },
        {
            "dia": 4,
            "valor": 0.0
        },
        {
            "dia": 5,
            "valor": 0.0
        },
        {
            "dia": 6,
            "valor": 26742.6612
        },
        {
            "dia": 7,
            "valor": 0.0
        },
        {
            "dia": 8,
            "valor": 42889.2258
        },
        {
            "dia": 9,
            "valor": 46251.174
        },
        {
            "dia": 10,
            "valor": 11191.4722
        },
        {
            "dia": 11,
            "valor": 0.0
        },
        {
            "dia": 12,
            "valor": 0.0
        },
        {
            "dia": 13,
            "valor": 3847.4823
        },
        {
            "dia": 14,
            "valor": 373.7838
        },
        {
            "dia": 15,
            "valor": 2659.7563
        },
        {
            "dia": 16,
            "valor": 48924.2448
        },
        {
            "dia": 17,
            "valor": 18419.2614
        },
        {
            "dia": 18,
            "valor": 0.0
        },
        {
            "dia": 19,
            "valor": 0.0
        },
        {
            "dia": 20,
            "valor": 35240.1826
        },
        {
            "dia": 21,
            "valor": 43829.1667
        },
        {
            "dia": 22,
            "valor": 18235.6852
        },
        {
            "dia": 23,
            "valor": 4355.0662
        },
        {
            "dia": 24,
            "valor": 13327.1025
        },
        {
            "dia": 25,
            "valor": 0.0
        },
        {
            "dia": 26,
            "valor": 0.0
        },
        {
            "dia": 27,
            "valor": 25681.8318
        },
        {
            "dia": 28,
            "valor": 1718.1221
        },
        {
            "dia": 29,
            "valor": 13220.495
        },
        {
            "dia": 30,
            "valor": 8414.61
        }
    ]';

    $json = json_decode($json);
    $menor=0;
    $maior=0;
    $soma=0;
    $media=0;
    $qtde=0;
    $qtdeDias=0;

    foreach ($json as $key => $value) {
        
        $dia = json_encode($value->dia);
        $valor = json_encode($value->valor);

        if($valor<$menor || $menor==0){

            $menor = $valor;
        }

        if($valor>$maior){

            $maior = $valor;
        }

        if($valor>0){
            $qtde++;
        }

        $soma+=$valor;
    }

    $media = ($soma/$qtde);

    

    foreach ($json as $key => $value) {
        
        $dia = json_encode($value->dia);
        $valor = json_encode($value->valor);

        if($valor>$media){
            $qtdeDias++;
        }
    }

    echo 'Menor: '.$menor."\nMaior: ".$maior;
    echo 'Media: '.$media."\n";
    echo 'Qtde Dias de Faturamento Maior que a Media: '.$qtdeDias."\n";
}

function tarefa04(){

    $sp = 67836.43;
    $rj = 36678.66;
    $mg = 29229.88;
    $es = 27165.48;
    $outros = 19849.53;

    $total = $sp+$rj+$mg+$es+$outros;

    echo 'SP: '.($sp/$total*100).'%'."\n";
    echo 'RJ: '.($rj/$total*100).'%'."\n";
    echo 'MG: '.($mg/$total*100).'%'."\n";
    echo 'ES: '.($es/$total*100).'%'."\n";
    echo 'OUTROS: '.($outros/$total*100).'%';
}

function tarefa05(){

    $string = "TESTE";
    $stringReverse="";

    for($i=strlen($string)-1; $i>=0; $i--){

        $stringReverse = $stringReverse.$string[$i];
    }

    echo $stringReverse;
}