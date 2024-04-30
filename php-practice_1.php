<?php
// Q1 変数と文字列

$myname = "半田";
echo "私の名前は「" . $myname . "」です。";

// Q2 四則演算

$num = 5 * 4;
echo $num, "\n", $num / 2;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');

$now = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $now . "です。";

// Q4 条件分岐-1 if文

$device = "windows";

if ($device === "windows" || $device === "mac") {
    echo "使用OSは、" . $device . "です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子

$age = 17;

$message = ($age > 17) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列

$region = ["神奈川", "東京", "埼玉", "栃木", "千葉", "茨城", "群馬"];
echo $region[3] . "と" . $region[4] . "は関東地方の都道府県です。";

// Q7 連想配列-1

$region = [
    "神奈川県" => "横浜市",
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市"
];

foreach ($region as $x) {
  echo $x, "\n";
}

// Q8 連想配列-2

$region = [
    "神奈川県" => "横浜市",
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市"
];

foreach ($region as $x => $y) {
    if ($x === "埼玉県") {
        echo $x . "の県庁所在地は、" . $y . "です。";
    }
}

// Q9 連想配列-3

$region = [
    "神奈川県" => "横浜市",
    "東京都" => "新宿区",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
];

$region["愛知県"] = "名古屋市";
$region["大阪府"] = "大阪市";

foreach ($region as $x => $y) {
    if ($x === "愛知県" || $x === "大阪府") {
        echo $x . "は関東地方ではありません。\n";
    } else {
        echo $x . "の県庁所在地は、" . $y . "です。\n";
    }
}

// Q10 関数-1

function hello($name)
{
  return $name . "さん、こんにちは。\n";
}

$helloname = hello("半田");
echo $helloname;

$helloname = hello("田中");
echo $helloname;

// Q11 関数-2

function calcTaxInPrice($Price)
{
    return  $Price * 1.1;
}

$Price = 1000;
$taxInPrice = calcTaxInPrice($Price);
echo $Price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文

function distinguishNum($num)
{
    if ($num % 2 == 0) {
        return $num . "は偶数です。\n";
    } else {
        return $num . "は奇数です。\n";
    }
}

echo distinguishNum(3);
echo distinguishNum(30);


// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch($grade) {
        case "A":
        case "B":
            return "合格です。\n";
            break;
        
        case "C":
            return "合格ですが追加課題があります。\n";
            break;
            
        case "D":
            return "不合格です。\n";
            break;
            
        default:
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

echo evaluateGrade("A");
echo evaluateGrade("das");

?>