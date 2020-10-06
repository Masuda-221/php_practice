<?php
$name = "Akiko";
if ($name = "Akiko"){
    echo "私はAkikoです";
} else {
    echo "私はAkikoではありません";
}
echo "\n";

for ($i = 0 ; $i > 10000 ; $i++){
    echo $i;
}
echo "\n";

$fruits =array("apple","orange","banana","mango","painapple")
foreach ($fruits as $fruits){
    echo $fruits
};
echo "\n"

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
for($i = 1 ; $i<100 ; $i++){

  // 5で割り切れたら{}内を実行する
  if($i / 5 > 0){
    echo $i
  };
};