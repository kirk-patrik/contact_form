<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <title>Medical-Wi-Fi</title>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PJLQ9VQ');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- CSS読込 -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/pagetop.css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="../css/base.css">

    <link rel="stylesheet" href="../css/main.css">

    <!-- フォントオーサム -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- ファビコン読込 -->
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <meta http-equiv="imagetoolbar" content="no">
    <!-- 検索有無設定 -->
    <!-- jquery読込 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/easy-rollover.js"></script>
    <script src="https://use.typekit.net/zzb5mon.js"></script>
    <script src="js/modernizr-2.8.3.min.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/base-color.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script type="text/javascript" src="../js/jquery.easeScroll.js"></script>

    <!-- バリデーション読込 -->
    <link rel="stylesheet" href="../js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css" />
    <script src="../js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js" type="text/javascript" charset="utf-8"></script>
    <script src="../js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(function() {
            jQuery("#form form").validationEngine();
        });
    </script>

    <!-- スムーススクロール -->
    <script type="text/javascript">
        $(function() {
            $('a[href^="#"]').on('click', function() {
                var speed = 1000;
                var href = $(this).attr('href');
                var target = $(href == '#' || href == '' ? 'html' : href);
                var position = target.offset().top;
                $('body,html').animate({
                    scrollTop: position
                }, speed, 'swing');
                return false;
            });
        });
    </script>

    <style id='base_val' type='text/css'></style>

    <style type='text/css'>
        table {
            margin: auto;
        }

        /*表示切替*/
        html body .view_pc {
            display: block !important;
        }

        html body table.view_pc {
            display: table !important;
        }

        html body table.view_pc tr {
            display: table !important;
        }

        html body table.view_pc th {
            display: table !important;
        }

        html body table.view_pc td {
            display: table !important;
        }

        html body .view_pctab {
            display: block !important;
        }

        html body table.view_pctab {
            display: table !important;
        }

        html body table.view_pctab tr {
            display: table !important;
        }

        html body table.view_pctab th {
            display: table !important;
        }

        html body table.view_pctab td {
            display: table !important;
        }

        html body .view_tab {
            display: none !important;
        }

        html body .view_sp {
            display: none !important;
        }

        html body .view_tabsp {
            display: none !important;
        }

        @media only screen and (max-width: 1050px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: block !important;
            }

            html body table.view_pctab {
                display: table !important;
            }

            html body table.view_pctab tr {
                display: table !important;
            }

            html body table.view_pctab th {
                display: table !important;
            }

            html body table.view_pctab td {
                display: table !important;
            }

            html body .view_tab {
                display: block !important;
            }

            html body table.view_tab {
                display: table !important;
            }

            html body table.view_tab tr {
                display: table !important;
            }

            html body table.view_tab th {
                display: table !important;
            }

            html body table.view_tab td {
                display: table !important;
            }

            html body .view_sp {
                display: none !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        @media only screen and (max-width: 770px) {
            html body .view_pc {
                display: none !important;
            }

            html body .view_pctab {
                display: none !important;
            }

            html body .view_tab {
                display: none !important;
            }

            html body .view_sp {
                display: block !important;
            }

            html body table.view_sp {
                display: table !important;
            }

            html body table.view_sp tr {
                display: table !important;
            }

            html body table.view_sp th {
                display: table !important;
            }

            html body table.view_sp td {
                display: table !important;
            }

            html body .view_tabsp {
                display: block !important;
            }

            html body table.view_tabsp {
                display: table !important;
            }

            html body table.view_tabsp tr {
                display: table !important;
            }

            html body table.view_tabsp th {
                display: table !important;
            }

            html body table.view_tabsp td {
                display: table !important;
            }
        }

        /* エラーメッセージ　赤文字設定 */
        .error_msg {
            color: #ff2e5a !important;
        }
    </style>

    <style type='text/css'>
        @font-face {
            font-family: 'noto_demilight';
            src: url(assets/css/fonts/NotoSansCJKjp-DemiLight.otf);
            font-style: normal;
        }

        @font-face {
            font-family: 'noto_regular';
            src: url(assets/css/fonts/NotoSansCJKjp-Regular.otf);
            font-style: normal;
        }

        @font-face {
            font-family: 'noto_bold';
            src: url(/assets/fonts/NotoSansJP-Bold.otf);
            font-style: normal;
        }

        @font-face {
            font-family: 'noto_light';
            src: url(assets/css/fonts/NotoSansJP-Light.otf);
            font-style: normal;
        }

        @font-face {
            font-family: 'noto_medium';
            src: url(assets/css/fonts/NotoSansJP-Medium.otf);
            font-style: normal;
        }

        @font-face {
            font-family: 'co_regular';
            src: url(assets/css/fonts/CoTextCorp-Regular.ttf);
            font-style: normal;
        }

        .noto_demilight {
            font-family: 'noto_demilight';
        }

        .noto_regular {
            font-family: 'noto_regular';
        }

        .noto_bold {
            font-family: 'noto_bold';
        }

        .noto_light {
            font-family: 'noto_light';
        }

        .noto_medium {
            font-family: 'noto_medium';
        }

        .co_regular {
            font-family: 'co_regular';
        }

        .flex_start {
            align-items: flex-start;
        }

        .inline_block {
            display: inline-block;
        }

        .mg_auto {
            margin: 0 auto;
        }

        .txt_mg_0 {
            margin: 0;
        }

        .txt_p_0 {
            padding: 0;
        }

        .txt_pd_l_foot {
            padding-left: 1.1vw;
        }

        .txt_deco {
            text-decoration: none;
        }

        .bg_wht_grey {
            background-color: #f5f5f5;
        }

        .u_line_d_grey {
            border-bottom: solid 1px #475160;
        }

        .u_line_top_d_grey {
            border-top: solid 1px #475160;
        }

        .u_line_right_d_grey {
            border-right: solid 2px #475160;
        }

        .undrag {
            user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-drag: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        .txt_main_color {
            color: #3a3327;
        }

        .txt_main_color_2 {
            color: #0c2e9f;
        }

        .relative {
            position: relative;
        }
    </style>

    <!-- CUSTOM STYLE -->
    <style>
        table {
            width: 100%;
        }

        th {
            background: #0C2E9F;
            color: #fff;
            /* padding: 24px 70px; */
        }


        td {
            background: #F5F5F5;
            /* padding: 10px 30px; */
            color: #0c2e9f;
        }

        .row-1 {
            background: none;
            padding: 0;
            width: 40%;
        }

        .row-2 {
            background: none;
            color: #3a3327;
            padding: 0;
        }

        tr:not(:last-child) {
            border-bottom: 1px solid #3a3327;
        }



        .accordion-container {
            position: relative;
            background: #fff;
        }

        .accordion-container>h2 {
            text-align: center;
            color: #fff;
            padding-bottom: 5px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .accordion_item>a {
            position: relative;
            width: 100%;
            height: auto;
            color: #0C2E9F;
        }

        .accordion_item>a i {
            float: right;
            margin-top: 2px;
        }

        .accordion_item>a.active {
            background-color: #0C2E9F;
            color: #fff;
        }

        .content {
            background-color: #fff;
            display: none;

        }

        .content p {
            margin: 0;
        }

        .fa-plus:before {
            content: "\f067";
            color: #0C2E9F;
        }

        .fa-minus:before {
            color: #fff;
        }

        /* Input */
        input[type='radio'] {
            -webkit-appearance: none;
            width: 1vw;
            height: 1vw;
            border-radius: 50%;
            outline: none;
            border: 2px solid #0b2d9f;
        }

        input[type='radio']:before {
            content: '';
            display: block;
            width: 60%;
            height: 60%;
            margin: 20% auto;
            border-radius: 50%;
        }

        input[type='radio']:checked:before {
            background: #0b2d9f;
        }

        /* Input End*/

        .form-btn-wrap {
            position: relative;
            display: block;
            width: 100%;
            background-color: #0b2d9f;
            box-shadow: 0px 8px #021969;
        }

        .form-btn-wrap input[type="submit"] {
            background: none;
        }

        .form-btn-wrap::after {
            content: '▶';
            color: #FFFFFF;
            position: absolute;
            top: 35%;
            right: 11%;
        }

        .required_span {
            top: -.5vw;
        }

        @media only screen and (max-width: 1050px) {
            /* .ml-30 {
            margin-left: 30vw;
        } */

            .required_span {
                top: -2vw;
            }

            input[type='radio'] {
                -webkit-appearance: none;
                width: 17px;
                height: 17px;
                border-radius: 50%;
                outline: none;
                border: 2px solid #0b2d9f;
            }
        }
    </style>
    <link rel="stylesheet" href="css/sp.css">
</head>

<body>

    <!-- Header -->
    <header>
    </header>

    <main>
        <section class="sect_2">
            <div style="background-color: #33b9bb;">
                <div class="wrapper_60 txt_tpad_2">
                    <div class="bg_img">
                        <img src="img/logo.png" alt="" class="fix_zoom" style="width: 27% !important; margin: 0 auto !important;">
                    </div>
                    <p class="white font_125 noto_bold txt_center txt_tpad_05">無料相談・資料請求</p>
                    <div class="space_1"></div>
                    <div class="space_05"></div>
                </div>
            </div>
            <div class="space_4"></div>
            <!-- Spacing -->
            <div class="space_4"></div>
            <!-- Title -->
            <p class="font_200 noto_bold txt_left txt_bpad_1">基本情報</p>

            <form method="post" action="#form" enctype="multipart/form-data" novalidate>
                <div class="wrapper_100" style="background-color: #f5f5f5;">
                    <!-- Spacing -->
                    <div class="space_3"></div>
                    <!-- Radio Button 1 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">お客様属性<span class="font_75 required_span" style="position: relative; color: red;">※</span></label>
                            </li>
                            <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                <?php echo $clean['customer_attr']; ?></p>
                        </ul>
                    </div>
                    <!-- Input 1 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">会社名<span style="font-size: 12px; position: relative; top: -6px; color: red;"></span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['company_name']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 2 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">お名前<span class="font_75 required_span" style=" position: relative; color: red;">※</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['your_name']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 3 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">フリガナ<span class="font_75 required_span" style="position: relative; color: red;">※</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['furigana']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 4 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">電話番号<span class="font_75 required_span" style="position: relative; color: red;">※</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['tel']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 5 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">メールアドレス<span class="font_75 required_span" style="position: relative;color: red;">※</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['email']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 6 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100 line_h_100">メールアドレス<span class="font_75 required_span" style="position: relative;color: red;">※</span><br><span class="font_75 noto_regular">(確認用)</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['confirm-email']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Radio Button 2 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_2 txt_tpad_2 txt_lpad_1 txt_rpad_1 bspace_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100">お問い合わせ種別<span class="font_75 required_span" style="position: relative;color: red;">※</span></label>
                            </li>
                            <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                <?php echo $clean['inquiry_type']; ?></p>
                        </ul>
                    </div>
                    <!-- TextArea 1 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 txt_left txt_bpad_1 txt_lpad_1 txt_rpad_1" style="justify-content: start; align-items:
                                    start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100 line_h_100">お問い合わせ内容<span class="font_75 required_span" style="position: relative;color: red;">※</span></label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['contents']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Spacing -->
                    <div class="space_3"></div>
                    <p class="font_200 noto_bold txt_left txt_bpad_1 wrapper_90 txt_lpad_1">施設情報</p>
                    <!-- Input 7 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_tpad_1 txt_lpad_1 txt_rpad_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100 line_h_100">所在地</label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['location']; ?></p>
                            </li>
                        </ul>
                    </div>
                    <!-- Input 8 -->
                    <div class="wrapper_90">
                        <ul class="flex_1 flex_center txt_left txt_bpad_1 txt_tpad_1 txt_lpad_1 txt_rpad_1" style="justify-content: start;">
                            <li class="width_23 f_sub">
                                <label for="" class="noto_regular font_100 line_h_100">施設名</label>
                            </li>
                            <li class="width_77 f_sub">
                                <p class="font_100 txt_left black noto_bold line_h_200 txt_mg_0">
                                    <?php echo $clean['facility']; ?></p>
                            </li>
                        </ul>
                    </div>

                    <input type="hidden" name="customer_attr" value="<?php echo $clean['customer_attr']; ?>">
                    <input type="hidden" name="company_name" value="<?php echo $clean['company_name']; ?>">
                    <input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
                    <input type="hidden" name="furigana" value="<?php echo $clean['furigana']; ?>">
                    <input type="hidden" name="tel" value="<?php echo $clean['tel']; ?>">
                    <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
                    <input type="hidden" name="confirm-email" value="<?php echo $clean['confirm-email']; ?>">
                    <input type="hidden" name="inquiry_type" value="<?php echo $clean['inquiry_type']; ?>">
                    <input type="hidden" name="contents" value="<?php echo $clean['contents']; ?>">
                    <input type="hidden" name="location" value="<?php echo $clean['location']; ?>">
                    <input type="hidden" name="facility" value="<?php echo $clean['facility']; ?>">
                    <div class="space_3"></div>
                </div>
                <div class="space_3"></div>
                <div class="view_pc cont_wrapper_85">
                    <div class="flex">
                        <div class="width_48">
                            <input class="view_pc width_100 square_btn white line_h_350 font_100 noto_bold box_radius_9999" type="submit" name="btn_back" value="入力画面に戻る" style="background-color: #8d8b83;">
                        </div>
                        <div class="width_48">
                            <input class="view_pc width_100 square_btn white line_h_350 font_100 noto_bold box_radius_9999" type="submit" name="btn_submit" value="送信する" style="background-color: #ff7770;">
                        </div>
                    </div>
                </div>
                <div class="view_tabsp cont_wrapper_75">
                    <div class="wrapper_95">
                        <input class="view_tabsp width_100 square_btn white line_h_350 font_100 noto_bold box_radius_9999" type="submit" name="btn_back" value="入力画面に戻る" style="background-color: #8d8b83;">
                    </div>
                    <div class="space_3"></div>
                    <div class="wrapper_95">
                        <input class="view_tabsp width_100 square_btn white line_h_350 font_100 noto_bold box_radius_9999" type="submit" name="btn_submit" value="送信する" style="background-color: #ff7770;">
                    </div>
                </div>
                <div class="space_5"></div>
            </form>

            </div>
        </section>

    </main>

    <footer>
        <div class="">
            <div class="wrapper_100">
                <p class="noto_demilight font_75 txt_center white txt_bpad_05 txt_tpad_05" style="background-color: #0b2d9f;">
                    <a href="https://www.fibergate.co.jp/" target="_blank" class="noto_demilight font_75 txt_center white">
                        Copyright (C) 2021 Fibergate Inc. all rights reserved.</a>
                </p>
            </div>
        </div>
    </footer>
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location
                    .hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

    <script>
        $("html").easeScroll();
    </script>

    <script>
        $("html").easeScroll();
        // Navigation
        $('#toggle').click(function() {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
        });

        function close_menu() {
            $('#toggle').toggleClass('active');
            $('#overlay').toggleClass('open');
        }
    </script>

</body>

</html>