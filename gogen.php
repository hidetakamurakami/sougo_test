<?php
//神戸から東京に行くには？
$kobetotokyo = array(
    'overland' => array(          
        'car' => 'toyota',        
        'walk' => '5km',
        'train' => array(
		  'zairaisen'=>'hutsu',
		  'bullettrain'=>array(
			  'ziyuseki'=>'free',
			  'shiteiseki'=>array(
				  'madogawa'=>'A',
				  'tsurogawa'=>'C',
	           ),
			),
		),
	)
);
print("<pre>");
var_dump($kobetotokyo); //配列内容を出力
print("</pre>");
$oneElement = $kobetotokyo["overland"]["train"]["bullettrain"]["shiteiseki"];  //キーの指定による５次元配列
//$oneElement2 = $kobetotokyo[2][1][1][1]; 
print current($oneElement); //５次元配列結果出力
//print current($oneElement2);
?>

