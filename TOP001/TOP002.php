<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="../css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="../slick/slick.css">
<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">

<link rel="stylesheet" type="text/css" href="../css/style.css">
	
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="../js/iscroll.js"></script>
<script src="../js/drawer.min.js"></script>
<script src="../js/script.js"></script>

<title>SoppingSite （トップ）</title>
<style type="text/css">

</style>

</head>

<body class="drawer drawer--left">
<script>
  $(function(){
    $(".out-header").load("../common/header.html .include-header");
    $('.drawer').drawer();
  });
</script>

<div class="out-header"></div>

<nav class="drawer-nav">
  <ul class="drawer-menu">
      <li class="drawer-element"><a href="#">LOGIN</a></li>
      <li class="drawer-element"><a href="#">WISH LIST</a></li>
  </ul>
</nav>
<section class="vertical-center-4 slider">
  <p><img src="../img/top_1.JPG"></p>
  <p><img src="../img/top_2.JPG"></p>
  <p><img src="../img/top_3.JPG"></p>
</section>
    
<!-- メイン部 -->
  <figure class="relative">
    <img id="topic-1" src="../img/topic-1.jpg" alt="" />
    <figcaption  id="topic-char-1">
      <p>SHOES</p>
      <img class="topic-1-icon" src="../img/icon/shoes.png" alt="" />
      <p class="check-char"><a href="#">CHECK MORE ></a></p>
    </figcaption>
    <figcaption  id="topic-char-2">
        <p>DRESS</p>
        <img class="topic-1-icon" src="../img/icon/dress.png" alt="" />
        <p class="check-char"><a href="#">CHECK MORE ></a></p>
      </figcaption>
  </figure>

<script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".vertical-center-4").slick({
        dots: true, //点の表示
        autoplay: true, //自動切り替え
        autoplaySpeed: 5000, //自動切り替えにかかる時間
        centerMode: true, //要素を中央へ
        adaptiveHeight:true,
    });
  });
</script>

</body>
</html>
