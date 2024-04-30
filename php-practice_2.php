<?php
// Q1 tic-tac問題

$num = 1;
for ($num = 1; $num <= 100; $num++) {
    if ($num % 20 == 0) {
        echo "tic-tac\n";
    } elseif ($num % 4 == 0) {
        echo "tic\n";
    } elseif ($num % 5 == 0) {
        echo "tac\n";
    } else {
    echo $num . "\n";
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

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

// 問題2
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

foreach ($personalInfos as $x => $y)
echo ($x + 1) . "番目の" . $y['name'] . "のメールアドレスは" . $y['mail'] . "で、電話番号は" . $y['tel'] . "です。\n";

// 問題3
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

$ageList = [25, 30, 18];

foreach ($personalInfos as $x => $y)
$personalInfos[$x] += ['age' => $ageList[$x]];

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

$yamada = new Student(120, "山田");

echo "学籍番号" . $yamada->studentId . "の生徒は" . $yamada->studentName."です。";

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

    public function attend($study)
    {
        echo $this->studentName . 'は' . $study . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

// 問題1

$time = new DateTime();
echo $time->modify('-1 months') ->format('Y-m-d');

// 問題2

$time = new DateTime('19920425');
$now  = new DateTime();

echo $diff = $now->diff($time) ->format('あの日から%a日経過しました。');

?>