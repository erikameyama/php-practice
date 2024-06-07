<?php
// Q1 変数と文字列
$name = '「亀山」';
echo '私の名前は' . $name . 'です。';



// Q2 四則演算

$num = 5 * 4;
echo $num;



echo $num / 2;



// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は' . date("Y年m月d日 h時i分s秒") . 'です。';



// Q4 条件分岐-1 if文

$devise = 'mac';
if ($devise == 'windows' || $devise == 'mac') {
  echo '使用OSは、' . $devise . 'です';
} else {
  echo 'どちらでもありません。';
}



// Q5 条件分岐-2 三項演算子

$age = '18';
$message = ($age < 18) ? '未成年です。' : '成人です';
echo $message;



// Q6 配列

$prefectures = ['東京都', '神奈川県', '茨城県', '栃木県', '千葉県', '埼玉県', '群馬県'];
echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';



// Q7 連想配列-1
// <!-- <prev>や<br />で改行ができなかったため\r\nを使用しています。 -->

$capital = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
            '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach  ($capital as $key => $value) {
    echo $value . "\r\n";
}



// Q8 連想配列-2

$capital = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
            '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市']; 

foreach  ($capital as $key => $value) {
    if ($key == '埼玉県'){
        echo $key . 'の県庁所在地は、' . $value . 'です。';
    }
}



// Q9 連想配列-3

$capital = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市',
            '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];

$capital['岐阜県'] = '岐阜市';
$capital['愛知県'] = '名古屋市';


foreach  ($capital as $key => $value) {
    if (!($key == '岐阜県') && !($key == '愛知県')) {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\r\n";
    } else {
        echo $key . 'は関東地方ではありません。' . "\r\n" ;
    }
}



// Q10 関数-1

function hi ($name) {
    echo $name . 'さん、こんにちは。' . "\r\n";
}

hi('北谷');
hi('キタニ');



// Q11 関数-2

function calcTaxInPrice ($price) {
    $taxInPrice = $price * 1.1;
    // 小数点以下は店舗の采配なので今回は切り捨て表示させる
    echo $price . '円の商品の税込み価格は' . floor($taxInPrice) . '円です。';
}

calcTaxInPrice(853);


// Q12 関数とif文
// <!-- 検索してもよくわからなかったのですが、if部分を三項演算子に置換できるのでしょうか？ -->

function distinguishNum ($num) {
    if ($num / 2 == 0) {
        echo $num . 'は偶数です。';
    } else {
        echo $num . 'は奇数です。';
    }
}

distinguishNum(30);
echo "\r\n";
distinguishNum(99);



// Q13 関数とswitch文

function evaluateGrade ($score) {
    switch ($score) {
        case 'A':
        case 'B':
            echo '合格です。';
            break;
        
        case 'C':
            echo '合格ですが追加課題があります。';
            break;
            
        case 'D':
            echo '不合格です';
            break;
        
        default:
            echo '判定不明です。講師に問い合わせてください。';
            break;
    }
}

evaluateGrade(30);
echo "\r\n";
evaluateGrade('C');

?>