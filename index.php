<?php get_header(); ?><!-- <header>を呼び出す関数 -->

<main>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
</main>



<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。