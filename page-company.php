<style>
    a.btn.btn-default.my_butt{
        display:none;

    }
    .banner{
        position: absolute;
        top: 0px;
        width: 1351px;
        height: 275px !important;
        overflow: hidden;
        clip: rect(0px 1351px 275px -186px);
        background-color: rgb(255, 255, 255);
        background: url("../wp-content/themes/chine-prop/images/page_company/company.png") 50% 0px / cover no-repeat fixed !important;
        opacity: 1;
        text-align: left !important;
    }
    .from-blog{
        margin-bottom: -25px;
    }
    .from_page_servis {
        border-top: 1px solid rgba(160, 160, 159, 1);
        border-bottom: 1px solid rgba(160, 160, 159, 1);
    }
    .small_text{
        display:none;
    }

    .big_text{
        font: normal normal normal 56px/1.4em avenir-lt-w01_35-light1475496,sans-serif !important;
        font-weight: 100 !important;
        padding-top: 7% !important;
        padding-left: 14%;
        letter-spacing: 0.05em;
    }

    /*------------------------------------------------------КОНСТАНТЫ------------------------------------------------*/
    .content{
        width: 100%;
    }
    .page_text strong{
        font: normal normal normal 33px/1.4em avenir-lt-w01_85-heavy1475544,sans-serif;
        color: #2F2E2E;
        letter-spacing:0.07em;
        text-transform: none;

    }
    .page_text {
        width: 60%;
        padding-left: 15%;
    }
    .page_text p {
        font: normal normal normal 17px/1.4em avenir-lt-w01_35-light1475496,sans-serif;
        color: #2F2E2E;

    }
    .team{
        background-color: rgba(179, 191, 231, 0.298039);
    }

    .team p{
        font: normal normal normal 33px/1.4em avenir-lt-w01_85-heavy1475544,sans-serif;
        color: #2F2E2E;
        text-transform: none;
        padding-left: 15%;
        padding-top: 50px;
    }

</style>
<?php
/**
 * Template Name: Page Company
 *
 * @package Modality
 */

get_header();
modality_unslider_slider();
$post = get_post( 26, ARRAY_A);
//$title = $post['post_title'];
$content = $post['post_content'];

?>

<div class="container-fluid">
    <div class="content">
        <div class="page_text">
            <?=$content?>
        </div>
    </div>

</div>
<div class="team">
    <p>Наша команда</p>
</div>




<div class="from-blog" style="background: url(<?php echo esc_url($blog_bg_image); ?>) 50% 0 no-repeat fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

    <div class="from-blog from_page_servis">

        <div id="from-blog-wrap ">
            <div class="row">
                <div class="quest col-md-8">
                    <?php
                    $text_title = "Есть вопросы?";
                    $text = "Мы с радостью на них ответим. Спрашивать можно и нужно!";
                    ?>
                    <div> <h2 class="text_title_quest"><?php echo $text_title; ?></h2>
                        <div class="text_quest"><?php echo $text;?></div>
                    </div>

                </div>
                <div class="col-md-4">
                    <a class="btn btn-default quest-btn" role="button" href="#"><div class="read_more_text qu">Напишите нам</div></a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php

get_template_part( 'social', 'section' );

get_footer(); ?>



