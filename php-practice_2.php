<?php
// Q1 tic-tac問題

echo '1から100までのカウントを開始します'."\n";
echo "\n";
for($i = 1; $i <= 100; $i++)
{
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo 'tic-tac'."\n";
    } elseif ($i % 4 == 0) {
        echo 'tic'."\n";
    } elseif ($i % 5 == 0) {
        echo 'tac'."\n";
    } else {
        echo $i."\n";
    }
}

// Q2 多次元連想配列

問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';
問題2
foreach ($personalInfos as $index => $value){
  $index++;
  echo  $index.'番目の'.$value['name'].'さんのメールアドレスは'.$value['mail'].'で、電話番号は'.$value['tel'].'です。'."\n";
}
問題3

$ageList = [25, 30, 18];
foreach ($ageList as $key => &$value) {
    $personalInfos[$key]['age'] = $value;
}

// Q3 オブジェクト-1

$tanaka = new Student('26','田中');
echo '学籍番号'.$tanaka->studentId.'の生徒は'.$tanaka->studentName.'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName.'は'.$subject.'の授業に参加しました。'.'学籍番号：'. $this->studentId;
    }
}

$tanaka = new Student('26','田中');
$tanaka -> attend('数学');


// Q5 定義済みクラス

$date = new DateTime('2024-12-02');
$date -> modify('-1 Year');
echo $date -> format('Y-m-d');

date_default_timezone_set('Asia/Tokyo');
$today = new DateTime('now');
$day = new DateTime('1992-04-25');
$diff = $day -> diff($today);
echo $diff ->format('あの日から%a日経過しました。');

?>