
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!--ページタイトル ここから -->
		<title>Dental Clinic</title>
		 <!--ページタイトル ここまで -->
		<meta name="description" content="">
		<meta name="keyword" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<link href="../common/css/style.css" rel="stylesheet" type="text/css" />
		<!--<link href="../common/css/reset.css" rel="stylesheet" type="text/css" >-->
　　　　<!--<link rel="stylesheet" href="../css/style.css" type="text/css">-->
　　　　<!--<link rel="stylesheet" href="../css/default.css" type="text/css">-->
　　　　<!--<link rel="stylesheet" href="../css/fonts.css" type="text/css">-->
　　　　<!--<link rel="stylesheet" href="../css/design.css" type="text/css">-->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="common/js/jquery.lightbox-0.5.min.js"></script>
		<script type="text/javascript" src="common/js/setting.js"></script>
	</head>　
	<body>
		<div id="wrapper">
			<?php
				// include('header.php');
				include "header.php";
			?>
	
			<div id="contentsWrapper">
				<div id="contents" class="clearFix">
					<div id="main">
						<!-- メイン画像 ここから -->
						<div class="mainImage">
							<img src="../common/images/in01.jpg" alt="メイン画像" />
						</div>
						<!-- メイン画像 ここまで -->

						<div class="inner">
							<!-- 新着情報 ここから -->
							<h2 class="subMidashi"><span class="midashiText">新着情報</span></h2>

							<div class="news">
								<dl>
									<dt><span class="date">2012年08月01日</span></dt>
									<dd>【診療時間変更のお知らせ】長期休診の前日8月11日は、通常より1時間長く診療をすることにしました。ご予約をお待ちしております。</dd>
									<dt><span class="date">2012年07月24日</span></dt>
									<dd>【8月の休診のお知らせ】8月12日～16日の間は休診とさせていただきます。何卒よろしくお願いいたします。</dd>
									<dt><span class="date">2012年07月02日</span></dt>
									<dd>【こどもデンタル教室のご案内】毎月第2土曜日に行っているこどもデンタル教室では、参加してくださるお子様を募集しております。</dd>
									<dt><span class="date">2012年06月20日</span></dt>
									<dd>【7月休診日のお知らせ】7月は土日祝日以外の休診日はありません。ご来院お待ちしております。</dd>
									<dt><span class="date">2012年06月01日</span></dt>
									<dd>ホームページをリニューアルしました。</dd>
								</dl>
							</div>
							<!-- 新着情報 ここまで -->
						</div>
					</div>

					<div id="menu">
						<!-- サイドバー ここから -->
						<h2 class="menuTitle01">一般歯科</h2>

						<div class="menuList01">
							<ul>
								<li><a href="service.php#menu01">虫歯治療</a></li>
								<li><a href="service.php#menu02">歯周病治療</a></li>
								<li><a href="service.php#menu03">入れ歯</a></li>
								<li><a href="service.php#menu04">予防歯科</a></li>
							</ul>
						</div>
						<!-- サイドバー ここまで -->

						<h2 class="menuTitle02">審美歯科</h2>

						<div class="menuList02">
							<ul>
								<li><a href="service.php#menu05">ホワイトニング</a></li>
								<li><a href="service.php#menu06">オールセラミック</a></li>
								<li><a href="service.php#menu07">セラミックインレー</a></li>
								<li><a href="service.php#menu08">PMTC</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
　　　　　　
　　　　　　　<?php include ('footer.php'); ?>
			<!--<div id="footerWrapper">-->
			<!--	<div id="footer">-->
			<!--		<div id="footerMenu" class="clearFix">-->
						<!-- ナビゲーション ここから -->
			<!--			<ul>-->
			<!--				<li><a href="index.html">トップページ</a></li>-->
			<!--				<li><a href="clinic.html">医院紹介</a></li>-->
			<!--				<li><a href="service.html">診療案内</a></li>-->
			<!--				<li><a href="staff.html">院長・スタッフ紹介</a></li>-->
			<!--				<li><a href="access.html">アクセス</a></li>-->
			<!--			</ul>-->
						<!-- ナビゲーション ここまで -->
			<!--		</div>-->

			<!--		<div class="footerAddress">-->
						<!-- 医院情報（フッター） ここから -->
			<!--			<strong>デンタル クリニック</strong> <span>東京都新宿区市谷左内町21-13</span> <span>TEL:03-0000-0000</span>-->
						<!-- 医院情報（フッター） ここまで -->
			<!--		</div>-->

					<!-- コピーライト ここから -->
			<!--		<p class="copyright">Copyright 2012 Dental Clinic CO.,LTD All Rights Reserved.</p>-->
					<!-- コピーライト ここまで -->
			<!--	</div>-->
			<!--</div>-->
		</div>
	</body>
</html>