<?php

/*課題１..引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($Multiplication){
    return  $Multiplication * 2;
}
    //echo sum(2);


//課題2..$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function total($a,$b){
    return $a + $b;
}
    //echo total(2,4);
    
    
//課題3..$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr =[1,3,5,7,9];
function f($arr){

    $result =1;

    foreach($arr as $value){
        $result *=$value;
    }
    return $result;
}

echo f($arr);



//課題4..次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

$arr =[8,10,7,9];
function max_array($arr){

    $max_number = $arr[0];
    foreach($arr as $a){
      if($max_number < $a);
         $max_number = $a;
}
    return  $max_number;

}
    echo max_array($arr);
    
    
//課題5..次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

/*strip_tags
array_push
array_merge
time, mktime
date*/

//①strip_tags..文字列のHTMLタグ、PHPタグを取り除く

/*例文
$contents = "<p>テスト</p>";
$contents =strip_tags($contents); 

echo $contents;//実行結果 :テスト




②array_push..1つ以上の要素を配列の最後に追加したい時に用いる関数


//例文

$fruits = ["りんご","みかん"];

    array_push($fruits,"ぶどう");

     print_r ($fruits); //実行結果..[0] => りんご[1] => みかん[2] => ぶどう
     
     
     
     
③..array_merge..配列の後ろに配列を追加できる

//例文

$fluits1 = ["りんご","みかん"];
$fluits2 = ["ぶどう","なし"];

$fluitsFruits = array_merge($fluits1,$fluits2);
    
    print_r($fluitsFruits);//実行結果..[0] => りんご [1] => みかん　[2] => ぶどう[3] => なし
)



④time,..UNIXタイムスタンプを取得できる関数のこと。
    mktime..timeと同じタイムスタンプを取得することができる
    
    timeとmktimeの違い..timeは現在時刻タイムスタンプの取得、mktimeは指定した時刻のタイムスタンプの取得
    タイムスタンプ..コンピュータのシステム時刻の一種
    
//例文 time

$timestamp = time(); 

echo $timestamp;



//例文 mktime

echo mktime(1,1,1,1,2020,1);


⑤date...日付、時間の出力ができる。date関数にはphpで予め用意されてるフォーマットがあり、date関数の引数に文字を指定する。

//例文
echo date("Y/m/d");*/


?>
