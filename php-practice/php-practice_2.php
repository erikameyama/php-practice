<?php
// Q1 tic-tac問題
for ($i = 1; $i <=  100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo 'tic-tac' . "\r\n";
  } elseif ($i % 4 == 0) {
      echo 'tic' . "\r\n";
  } elseif ($i % 5 == 0) {
      echo 'tac' . "\r\n";
  } else {
      echo $i . "\r\n";
  }
}


// Q2 多次元連想配列
// 問題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題２
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
foreach ($personalInfos as $key => $personalInfos) {
  echo $key + 1 . '番目の' . $personalInfos['name'] . 'のメールアドレスは'
  . $personalInfos['mail'] . 'で、電話番号は' . $personalInfos['tel'] . 'です。' . "\r\n";
}


//問題３
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel' => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel' => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel' => '09055556666'
    ],
];

$age = [25, 30, 18];
foreach ($age as $key => $value){
    $personalInfos[$key]['age'] = $value;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$test = new Student('12', '亀山');
echo '学籍番号' . $test->studentId . '番の生徒は' . $test->studentName . 'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        
        // echo '学籍番号' . $id . '番の生徒は'. $name . 'です。';
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に出席しました。学籍番号:' . $this->studentId;
    }
}
// $test = new student('13', '亀山');
$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問１
$date = new DateTime('-1 month');
echo $date->format('Y-m-d');

// 問２
$today = new DateTime('now');
$past = new DateTime('1992-04-25');
$diff = $today->diff($past);

echo 'あの日から' . $diff->days . '日経過しました。';
?>