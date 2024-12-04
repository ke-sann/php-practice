<?php
// Q1 変数と文字列

$name = '木村';

echo '私の名前は「' . $name . '」です。';


// Q2 四則演算

$x = 5;
$y = 4;
$num = $x * $y;
echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作

$date = date('Y年m月d日　H時i分s秒');
echo '現在時刻は、' . $date . 'です。'; 

// Q4 条件分岐-1 if文

$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、'.$device.'です。';
}else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列

$kanto = [
  '群馬県', 
  '神奈川県', 
  '東京都', 
  '茨城県', 
  '埼玉県', 
  '千葉県', 
  '栃木県'
];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。'; 

// Q7 連想配列-1

$kanto = [
  '東京都' =>'新宿区', 
  '神奈川県' => '横浜市',
  '千葉県' =>'千葉市', 
  '埼玉県' => 'さいたま市',
  '栃木県' =>'宇都宮市', 
  '群馬県' => '前橋市',
  '茨城県' =>'水戸市'
];
foreach ($kanto as $value) {
    echo $value . "\n";
}

// Q8 連想配列-2

$kanto = [
  '東京都' =>'新宿区', 
  '神奈川県' => '横浜市',
  '千葉県' =>'千葉市', 
  '埼玉県' => 'さいたま市',
  '栃木県' =>'宇都宮市', 
  '群馬県' => '前橋市',
  '茨城県' =>'水戸市'
];
foreach ($kanto as $pre => $city) {
    if ($pre === '埼玉県') {
        echo $pre . 'の県庁所在地は、'. $city . 'です。';
    }
}

// Q9 連想配列-3

$kanto = [
  '東京都' =>'新宿区', 
  '神奈川県' => '横浜市',
  '千葉県' =>'千葉市', 
  '埼玉県' => 'さいたま市',
  '栃木県' =>'宇都宮市', 
  '群馬県' => '前橋市',
  '茨城県' =>'水戸市'
];
$kanto += [
  '愛知県'=>'名古屋市',
  '大阪府'=>'大阪市'
];
$notkanto_prefecture = [
  '愛知県',
  '大阪府'
];
$notkanto_city = [
  '名古屋市',
  '大阪市'
];
foreach ($kanto as $pre => $city){
    if (in_array($pre,$notkanto_prefecture,true) && in_array($city,$notkanto_city,true)) {
        echo $pre.'は関東地方ではありません。'."\n";
    } else {
        echo $pre.'の県庁所在地は、'.$city.'です。'."\n";
    }
}

// Q10 関数-1

function hello($name)
{
    echo $name.'さん、こんにちは。'."\n";
}

hello('田中');
hello('小島');

// Q11 関数-2

function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}

$price = 100;
$taxInPrice = calcTaxInPrice($price);
echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';

// Q12 関数とif文

function distinguishNum($number) 
{
    if ($number % 2 == 0) {
        return $number.'は偶数です。';
    } else {
        return $number.'は奇数です。';
    }
}

echo distinguishNum(100)."\n";
echo distinguishNum(661);

// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch($grade)
    {
     case 'A':
     case 'B':
      return '合格です。';
      break;
      
     case 'C':
      return '合格ですが追加課題があります。';
      break;
      
     case 'D':
      return '不合格です。';
      
     default:
      return '判定不明です。講師に問い合わせてください';
      break;  
    }
}

echo evaluateGrade('A')."\n";
echo evaluateGrade('H');
?>