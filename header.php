<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPHONE14PRO</title>

    <?php  wp_head(); ?>

</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="header__container container">
                    <div class="header__body">
                        <ul class="header__list">
                            <li><a href="#whatnew" class="header__item">Что нового</a></li>
                            <li><a href="#color" class="header__item">Цвет</a></li>
                            <li><a href="#form" class="header__item">Заказать</a></li>
                        </ul>
                        <?php  the_custom_logo(); ?>
                        <div class="header__tell">
                            <a href="<?php the_field('phone_link'); ?>" class="tell-header"><?php the_field('phone'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>