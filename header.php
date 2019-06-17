<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
      <header>
        <pre class="header-left">About Dog</pre>
        <div class="header-right">
            <p>Top</p>
            <p>Latest</p>
            <p>Contact</p>
        </div>
        <?php wp_nav_menu(
            array(
                // カスタムメニュー名
                'theme_location' => 'header-navi' ,
                // コンテナを表示しない
                'container' => false,
                // 出力されるulに対してidやclassを表示しない
                'items_wrap' => '<div class="header-right">%3$s</div>',
            )
            ); ?>
      </header>
      <main>
          <img src="<?php echo get_template_directory_uri(); ?>/img/dog (1).jpg" alt="">
      </main>