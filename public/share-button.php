<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="robots" content="noindex,nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>シェアボタンを表示するサンプルデモ [PHP版]</title>
		<!-- スタイルシート -->
		<link href="./share-button.css" rel="stylesheet">
		<!-- ライブラリの読み込み -->
		<script src="./share-button.js"></script>
	</head>
<body>
<h1>シェアボタンを表示するサンプルデモ [PHP版]</h1>
<p>「Twitter」「Facebook」「Google+」「はてなブックマーク」「pocket」「LINE」のシェアボタンを表示するサンプルデモのPHP版です。WordPressなどのPHPプラットフォームを利用している場合は、こちらの方が設置しやすいと思います。</p>
<p style="text-align:right">(プログラムの配布元: <a href="http://syncer.jp/how-to-setting-share-button">Syncer</a>)</p>

<h2>シェアボタンの表示</h2>
<p>横幅を狭めると、2行になり、LINEボタンが出現します。LINEボタンの画像は、<a href="https://media.line.me/howto/ja/" target="_blank">公式ウェブサイト</a>よりダウンロードする必要があります。</p>

<!-- シェアボタン [ここからコピー] -->

<?php
	$share_url_syncer = "http://syncer.jp/";		//シェア対象のURLアドレスを指定する (HTML部分は変更不要)
?>

<div class="social-area-syncer">
	<ul class="social-button-syncer">
		<!-- Twitter -->
		<li class="sc-tw"><a data-url="<?php echo $share_url_syncer; ?>" href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-dnt="true">ツイート</a></li>

		<!-- Facebook -->
		<li class="sc-fb"><div class="fb-like" data-href="<?php echo $share_url_syncer; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div></li>

		<!-- Google+ -->
		<li><div data-href="<?php echo $share_url_syncer; ?>" class="g-plusone" data-size="tall"></div></li>

		<!-- はてなブックマーク -->
		<li><a href="http://b.hatena.ne.jp/entry/<?php echo $share_url_syncer; ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border:none;" /></a></li>

		<!-- pocket -->
		<li><a data-save-url="<?php echo $share_url_syncer; ?>" data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a></li>

		<!-- LINE [画像は公式ウェブサイトからダウンロードして下さい] -->
		<li class="sc-li"><a href="http://line.me/R/msg/text/?<?php echo rawurlencode($share_url_syncer); ?>"><img src="./linebutton_36x60.png" width="36" height="60" alt="LINEに送る" class="sc-li-img"></a></li>
	</ul>

<!-- Facebook用 -->
<div id="fb-root"></div>

</div>
<!-- シェアボタン [ここまでコピー] -->

</body>
</html>
