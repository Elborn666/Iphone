<?php
/*
Template Name:home
*/
?>

<?php  get_header(); ?>

<main>
    <section class="hero">
        <div class="hero__container container">
            <div class="hero__body">
                <h1 class="hero__title">IPHONE 14 PRO</h1>
                <div class="hero__img">
                    <img class="hero__img-ibg" src="<?php the_field('general_photo') ;?>" alt="four iphone">
                </div>
                <div class="hero__button">
                    <button type="button" class="hero__button-violet">ВЫБРАТЬ</button>
                </div>
            </div>
        </div>
    </section>
    <section class="whatnew" id="whatnew">
        <div class="whatnew__container container">
            <div class="whatnew__body">
                <h2 class="whatnew__title">ЧТО НОВОГО</h2>
                <div class="whatnew__wrapper">
                    <ul class="whatnew__list">
                        <?php the_field('text_whatnew'); ?>
                        <!-- <li class="whatnew__item">
                            <p>Все модели оснащены однокристальной системой A16 Bionic, 48-мегапиксельной
                                основной
                                камерой и экранами ProMotion с защитой Ceramic Shield и частотным диапазоном 1 —
                                120
                                Гц,
                                а также ускоренной памятью LPDDR5. Дизайн линейки обновлен, на фронтальной
                                панели
                                смартфонов два выреза.
                            </p>
                        </li>
                        <li class="whatnew__item">
                            <p>Все iPhone 14 в США будут продаваться без лотка для SIM-карт: производитель
                                заявляет,
                                что
                                улучшенная технология eSIM позволит перенести старые электронные сим-карты на
                                новые
                                смартфоны.
                            </p>
                        </li>
                        <li class="whatnew__item">
                            <p>Обновлены фронтальная камера (она снабжена автофокусом и быстрее распознает
                                пользователя
                                в условиях недостаточной освещенности) и сенсор основной камеры.
                            </p>
                        </li>
                        <li class="whatnew__item">
                            <p class="p-bolt">iPhone 14 Pro вышел в новом дизайне — без фирменной «челки». Также
                                в
                                ассортименте появился новый цвет. В смартфоне, в отличие от «обычных» 14-х
                                айфонов,
                                установлен процессор A16 Bionic, который может за секунду производить 4 трлн
                                операций с
                                фото.
                            </p>
                        </li> -->
                    </ul>
                    <div class="whatnew__img">
                        <img class="whatnew__img_ibg" src="<?php the_field('photo_whatnew');?>" alt="phone">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choise" id="color">
        <div class="choise__container container">
            <h2 class="choise__title">ВЫБЕРИ СВОЙ ЦВЕТ</h2>
            <ul class="choise__colum">
                <?php
        global $post;

        $myposts = get_posts([ 
	    'numberposts' => -1,
        ]);

        if( $myposts ){
	        foreach( $myposts as $post ){
		        setup_postdata( $post );
                ?>
                <li class="choise__item">
                    <!-- <div class="choise__icon">
                        <img src="<?php bloginfo('template_url');?>/assets/img/silver.jpg" alt="the phone is silver">
                    </div>  ////EXAMPLE\\\\ -->

                    <?php the_post_thumbnail(

                        array(240, 320),
                        // array(
                        //     'class' => 'class name'
                        // )

                    ) ?>
                    <h3 class="choise__color-title"><?php the_title(); ?></h3>
                    <p class="choise__color-subtitle"><?php the_content(); ?></p>
                </li>
                <?php } } wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <section class="form" id="form">
        <div class="form__container container">
            <div class="form__body">
                <div class="form__wrapper">
                    <h2 class="form__title">ХОЧЕШЬ IPHONE 14 PRO?</h2>
                    <div class="form__wrapper-form">
                        <form action="#" class="form__form">
                            <!-- <input type="text" class="form__name" placeholder="Ваше имя">
                            <input type="number" class="form__tell" placeholder="Номер телефона">
                            <p class="form__text">В ближайшее время наш менеджер свяжется с Вами</p>
                            <div class="form__wrapper-button">
                                <button type="submit" class="form__button">ЗАКАЗАТЬ</button>
                            </div> -->
                            <?php echo do_shortcode('[contact-form-7 id="fb46d75" title="Контактна форма"]') ?>
                        </form>
                    </div>
                </div>
                <div class="form__img-wrapper">
                    <img src="<?php the_field('photo_contact');?>" alt="purple iPhone" class="form__img">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>