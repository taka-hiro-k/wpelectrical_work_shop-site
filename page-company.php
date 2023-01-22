<?php get_header(); ?><!-- <header>を呼び出す関数 -->

<body>
<div class="company-subcontainer">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="company-subcontainer-title">
<?php the_title(); ?>
</div>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>

<div class="company-table-container">
  <table class="company-table">
    <tr>
      <td>会社名</td>
      <td>|             ○○電気工事株式会社</td>
    </tr>
    <tr>
      <td>代表者</td>
      <td>|             代表取締役社長　川井貴弘</td>
    </tr>
    <tr>
      <td>会社設立</td>
      <td>|             1990年5月30日</td>
    </tr>
    <tr>
      <td>住所</td>
      <td>|             東京都八王子市成瀬町1-1-1</td>
      <!-- MAPボタンをつくりGoogleマップにとぶ -->
    </tr>
    <tr>
      <td>資本金</td>
      <td>|             5,000,000円</td>
    </tr>
    <tr>
      <td>従業員</td>
      <td>|             ４名</td>
    </tr>
    <tr>
      <td>事業内容</td>
      <td>|             電気工事設備設計・施工</td>
    </tr>
    <tr>
      <td>各種許認可</td>
      <td>|             ○○電気工事株式会社</td>
    </tr>
  </table>
  </div>

  </div>

</body>

<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。