<?php

//自分のメールアドレスの設定 -- 複数指定したい場合は各アドレスを半角カンマで区切って記述 --
  $send_address = 'yuri.sfm1104@gmail.com';

//メールの差出人名に表示される自分の名前
  $send_name = '結崎有理';

//相手に届くメールの内容(上部) -- EOMからEOM;までの間の文章を自分に合わせて変更してください。 --
$thanks_body_head = <<<EOM

この度はお問い合わせをいただき、ありがとうございました。
折り返し返信を致しますので、しばらくお待ちください。
以下の内容でお問い合わせをお受けしました。

EOM;


//相手に届くメールの内容(下部) -- EOMからEOM;までの間の文章を自分に合わせて変更してください。 --
$thanks_body_foot = <<<EOM

────────────────────────────────────

結崎有理
yuri.sfm1104@gmail.com
http://yu.sflabo.com/
Twitter:yurisugar

────────────────────────────────────
EOM;

//サンクスページのURL -- mailform.phpからの相対パス、またはhttp://からの絶対パス --
$thanks_page_url = 'thanks.html';

?>
