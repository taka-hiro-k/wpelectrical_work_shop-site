<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- <html lang="ja">を出力 -->
<head>
<meta charset="<?php bloginfo('charset'); ?>"><!-- <meta charset="utf-8">を出力 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?><!-- 必ずこの場所に書く。<head>内のメタタグを出力するためのアクションフック -->
</head>
<body <?php body_class(); ?>><!-- ページごとにクラスを追加する（クラス名は例えばフロントページなら「home page」など決まっている） -->


<header class="page-header" id="top">
  <div class="header-container">
    <div class="sitetitle">
      <h1 class="header-logo">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/logo.png" alt="ロゴ"></a>
      </h1>
      <div class="navbtn"></div>

    </div>

   <!-- ヘッダーにメニューを表示 -->
   <div class="header-nav collapse">
   <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる。
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定 //
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する。 //
                );
                wp_nav_menu($args);//メニューを表示
                ?>
</div>

</div>
</header>


</html>
