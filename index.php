<!DOCTYPE html>
<html>
<head>
  <title>大根の傘は心許ない</title>
  <meta charset="UTF-8">
</head>
<body background="">
  <h1>サイト名</h1>
  <h3>このサイトの説明</h3>
  <p>このサイトのコンテンツは「自由律俳句」と「感想」です。</p>
  <p>自由律俳句は私が作ったものです。感想は私ので、その内容はアニメや漫画などです。</p>
  <button onclick="location.href='haiku.html'">自由律俳句</button>
  <button onclick="location.href='kansou.html'">感想(アニメ、漫画など)</button>
  <p>あなたは<!--#exec cmd="/bin/sh -c 'c=`/bin/cat count`;expr $c + 1 | /usr/bin/tee count'"-->人目の訪問者です。</p>
  
  <?php

$counter_file = 'counter.txt';
$counter_lenght = 8;

$fp = fopen($counter_file, 'r+');

if ($fp){
    if (flock($fp, LOCK_EX)){

        $counter = fgets($fp, $counter_lenght);
        $counter++;

        rewind($fp);

        if (fwrite($fp,  $counter) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }
}

fclose($fp);

print('count:'.$counter);

?>
</body>
</html>
