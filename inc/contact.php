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
    <title>CONTACT FORM</title>

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
    <link rel="shortcut icon" href="img/favicon.ico" />
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

    <script type="text/javascript" src="js/jquery.easeScroll.js"></script>

    <!-- バリデーション読込 -->
    <link rel="stylesheet" href="../js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css"
        type="text/css" />
    <script src="../js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-ja.js"
        type="text/javascript" charset="utf-8"></script>
    <script src="../js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript"
        charset="utf-8"></script>
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

    <script>
    (function(d) {
        var config = {
                kitId: 'wjv0unh',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>

    <style id="base_val" type="text/css"></style>

    <style type="text/css">
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
        color: #ea4335 !important;
    }
    </style>



    <style type="text/css">
    @font-face {
        font-family: 'helvetica_black';
        src: url(assets/fonts/helvetica-neue-condensed-black.ttf);
        font-style: normal;
    }

    @font-face {
        font-family: 'co_regular';
        src: url(assets/css/fonts/CoTextCorp-Regular.ttf);
        font-style: normal;
    }

    .hans_bold {
        font-family: source-han-sans-japanese, sans-serif;
        font-weight: 700;
    }

    .noto_bold {
        font-family: noto-sans-cjk-jp, sans-serif;
        font-weight: 700;
    }

    .noto_med {
        font-family: noto-sans-cjk-jp, sans-serif;
        font-weight: 500;
    }

    .noto_black {
        font-family: noto-sans-cjk-jp, sans-serif;
        font-weight: 900;
    }

    .noto_regular {
        font-family: noto-sans-cjk-jp, sans-serif;
        font-weight: 400;
    }

    .noto_demi {
        font-family: noto-sans-cjk-jp, sans-serif;
        font-weight: 300;
    }

    .dnp_regular {
        font-family: dnp-shuei-mgothic-std, sans-serif;
        font-weight: 400;
    }

    .dnp_bold {
        font-family: dnp-shuei-mgothic-std, sans-serif;
        font-weight: 600;
    }

    .helvetica_black {
        font-family: 'helvetica_black';
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

    .undrag {
        user-drag: none;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }

    .txt_prime_color {
        color: #363A90;
    }

    .txt_1st_color {
        color: #00AFDD;
    }

    .txt_2nd_color {
        color: #2EB5E6;
    }

    .txt_3rd_color {
        color: #E660E3;
    }

    .txt_3rd_color {
        color: #666666;
    }

    .txt_4th_color {
        color: #333333;
    }

    .txt_5th_color {
        color: #2E3231;
    }

    .txt_6th_color {}

    .txt_7th_color {}

    .txt_8th_color {}

    /* custom style */

    .custom_hover:hover {
        opacity: .75;
    }

    input[type="text"]:focus,
    textarea:focus {
        border: 1px solid #0000EE !important;
    }

    input::placeholder,
    textarea::placeholder {
        opacity: .6;
    }

    /* end custom style */

    .relative {
        position: relative;
    }

    /* SLIDER CUSTOM CSS */

    .slider_cont_113 .slick-prev,
    .slider_cont_113 .slick-next,
    .slider_cont_113 .slick-prev:hover,
    .slider_cont_113 .slick-next:hover {
        width: 10vw;
        height: 18vw;
        background: #0000005e;
        display: none !important;
    }


    .accordion_item .accordion_header::after {
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        float: right;
        font-size: 25px;
        color: #005bac;
    }

    .accordion_header.flex.flex_center.active::after {
        content: "\f106";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        float: right;
        font-size: 25px;
        color: #005bac;
    }

    .accordion_content {
        display: none;
        overflow: hidden;
    }

    @media only screen and (max-width: 600px) {
        .accordion_content {
            display: none;
            overflow: hidden;
        }

        .slider_cont_135 .slick-list {
            margin-left: 2vw;
        }
    }



    .slider_cont_135 .slick-list {
        margin-left: 0.3vw !important;
    }

    .slider_cont_135 .slick-prev {
        background: transparent !important;
        opacity: 1 !important;
        left: -4% !important;
    }

    .slider_cont_135 .slick-next {
        background: transparent !important;
        opacity: 1 !important;
        right: -10px !important;
    }

    .slider_cont_135 .slick-prev:before {
        font-size: 2vw !important;
        margin-left: 0.2vw;

    }

    .slider_cont_135 .slick-next:before {
        font-size: 2vw !important;
    }


    .slick-prev:before,
    .slick-next:before {
        color: #000581 !important;

    }

    @media only screen and (max-width: 770px) {
        .slider_cont_135 .slick-prev:before {
            font-size: 27px !important;
            opacity: 1 !important;
            position: absolute !important;
            left: 0;
            width: 100%;
            transform: translate(0%, -50%);
        }
    }


    @media only screen and (max-width: 770px) {
        .slider_cont_135 .slick-next:before {
            font-size: 27px !important;
            opacity: 1 !important;
            position: absolute !important;
            right: 0;
            width: 100%;
            transform: translate(0%, -50%);
        }
    }

    @media only screen and (max-width: 1440px) {
        .slider_cont_135 .slick-next {
            width: 4% !important;
            right: -3% !important;
        }

        .slider_cont_135 .slick-prev {
            background: transparent !important;
            opacity: 1 !important;
            left: -5% !important;
            width: 5%;
        }
    }


    @media only screen and (max-width: 470px) {
        .slider_cont_135 .slick-prev:before {
            left: 0vw;
        }

        .slider_cont_135 .slick-list {
            margin-left: 2vw !important;
        }
    }

    @media only screen and (max-width: 371px) {
        .slider_cont_135 .slick-prev:before {
            left: -2vw;
        }

        .slider_cont_135 .slick-list {
            margin-left: 2vw !important;
        }

        .slider_cont_135 .slick-next:before {
            right: 0vw;
        }
    }

    /* custom medai query */
    @media (min-width:1051px) {
        /* input[type="text"] {
            width: 75% !important;
        } */

        form {
            padding-right: 4vw;
            padding-left: 3vw;
        }
    }

    input[type="checkbox"] {
        width: 1.2vw !important;
        height: 1.2vw !important;
    }

    @media (max-width:1050px) {

        form {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        input[type="checkbox"] {
            width: 2vw !important;
            height: 2vw !important;
        }

        button {
            width: 38vw !important;
            padding: 20vw 0 !important;
        }
    }

    @media (max-width:770px) {
        input[type="checkbox"] {
            width: 3vw !important;
            height: 3vw !important;
        }
    }


    /* custome style for checkbox */
/* 
     input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        visibility: hidden !important;
        }

        input:checked ~ .checkmark {
             background-color: #2196F3;
             border: 3px solid #2196F3;
        }

        .checkmark {
            position: absolute;
            top: -10px;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: white;
            border: 3px solid #eee;
            border-radius: 5px;
        }

            input:checked ~ .checkmark:after {
            display: block;
            }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            }

            .checkmark:after {
                left: 0.9vw;
                top: 0.2vw;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 3px 3px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
                } */



    </style>

    <link rel="stylesheet" href="css/sp.css">
</head>

<body>

    <main>
        <!-- CONTACT FORM -->
        <section class="contact_form">
            <div class="">
                <div style="background-color: #33b9bb;">
                    <div class="wrapper_60 txt_tpad_2">
                        <div class="bg_img">
                            <div class="view_pc">
                                <img src="../img/logo.png" alt="" class="fix_zoom"
                                style="width: 27% !important; margin: 0 auto !important;">
                            </div>
                            <div class="view_tabsp">
                                <img src="../img/logo.png" alt="" class="fix_zoom"
                                style="width: 61% !important; margin: 0 auto !important;">
                            </div>
                        </div>
                        <p class="white font_125 noto_bold txt_center txt_tpad_05">無料相談・資料請求</p>
                        <div class="space_1"></div>
                        <div class="space_05"></div>
                    </div>
                </div>
                <div class="space_4"></div>
                <div class="cont_wrapper_50">
                    <form method="post" action="#form" enctype="multipart/form-data" novalidate
                        class="txt_left">

                       
                        <!-- FORM CHECK BOX -->
                          
                        
                             <!-- IF ERROR -->
                             <label class="font_75 noto_bold <?= !empty($error['customer_attr']) ? 'red' : 'txt_5th_color'; ?>  ">複数選択（チェックボックス）<span
                                   class="red bold">*</span></label>

                             <div class="txt_tpad_05 flex" style="align-items: center; justify-content: flex-start;">
                            
                                    <input type="checkbox" value="無料相談" name="customer_attr[]" class="validate[required]"
                                    style="cursor: pointer; opacity: .6"
                                    <?php if( !empty($_POST['customer_attr'][0]) && $_POST['customer_attr'][0] === "無料相談" ){ echo 'checked'; } ?>>
                                    <span class="checkmark"></span>
                            
                                

                                <label class="noto_regular  <?= !empty($error['customer_attr']) ? 'red' : 'txt_5th_color'; ?>  font_75 txt_lpad_05">無料相談</label>
                             </div>

                            <div class="txt_tpad_1 flex" style="align-items: center; justify-content: flex-start;">
                                <input type="checkbox" value="資料請求" name="customer_attr[]" class="validate[required]"
                                    style="cursor: pointer; opacity: .6"
                                    <?php if( !empty($_POST['customer_attr'][1]) && $_POST['customer_attr'][1] === "資料請求" ){ echo 'checked'; } ?>>
                                <label class="noto_regular  <?= !empty($error['customer_attr']) ? 'red' : 'txt_5th_color'; ?>  font_75 txt_lpad_05">資料請求</label>
                            </div>

                            <div class="txt_tpad_1 flex" style="align-items: center; justify-content: flex-start;">
                                <input type="checkbox" value="オンラインにてデモをご希望" name="customer_attr[]" class="validate[required]"
                                    style="cursor: pointer; opacity: .6"
                                    <?php if( !empty($_POST['customer_attr'][2]) && $_POST['customer_attr'][2] === "オンラインにてデモをご希望" ){ echo 'checked'; } ?>>
                                <label class="noto_regular  <?= !empty($error['customer_attr']) ? 'red' : 'txt_5th_color'; ?>  font_75 txt_lpad_05">オンラインにてデモをご希望</label>
                            </div>

                            <div class="txt_tpad_1 flex" style="align-items: center; justify-content: flex-start;">
                                <input type="checkbox" value="その他　※詳細はお問い合わせ内容欄に入力をお願いします。" name="customer_attr[]"
                                    class="validate[required]"
                                    style="cursor: pointer; opacity: .6"
                                    <?php if( !empty($_POST['customer_attr'][3]) && $_POST['customer_attr'][3] === "その他　※詳細はお問い合わせ内容欄に入力をお願いします。" ){ echo 'checked'; } ?>>
                                <label
                                    class="noto_regular  <?= !empty($error['customer_attr']) ? 'red' : 'txt_5th_color'; ?>  font_75 txt_lpad_05">その他　※詳細はお問い合わせ内容欄に入力をお願いします。</label>
                            </div>

                        

                        <!-- spacing -->
                        <div class="space_05"></div>

                        <?php if( !empty($error['customer_attr']) ): ?>
                        <p class="error_msg bold txt_left font_75 txt_tpad_05 mg_auto">
                            <?php echo $error['customer_attr']; ?></p>
                        <?php endif; ?>

                        <p class="font_60 noto_regular txt_5th_color txt_tpad_05" style="opacity: .6;">複数回答可能です。</p>

                        <!-- spacing -->
                        <div class="space_2"></div>
                       <!-- END FORM CHECKBOX -->
                        
                       <!-- FORM INPUTS -->

                        <div>
                            <label class="noto_bold <?= !empty($error['your_name']) ? 'red' : 'txt_5th_color'; ?> font_75">お名前 <span class="red bold">*</span></label>
                            <div class="space_05"></div>
                            <input type="text"
                                class="validate[required] block width_100 font_75 txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                placeholder="お名前を入力してください"
                                value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>"
                                style=" <?= !empty($error['your_name']) ? 'border: 2px solid red; border-radius: 4px; outline: none; background-color: rgb(234, 235, 234)' : 'border: 1px solid rgba(0,0,0,.15); border-radius: 4px; outline: none;' ?>   "
                                id="input-name" name="your_name">
                            <?php if( !empty($error['your_name']) ): ?><p class="error_msg bold txt_left font_75"
                                style="margin: 0; padding-top: 5px;">
                                <?php echo $error['your_name']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <div>
                            <label class="noto_bold <?= !empty($error['your_name']) ? 'red' : 'txt_5th_color'; ?> font_75">メールアドレス <span class="red bold">*</span></label>
                            <div class="space_05"></div>
                            <input type="text"
                                class="validate[required] block width_100 font_75 txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                placeholder="メールアドレスを入力してください"
                                value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>"
                                style=" <?= !empty($error['email']) ? 'border: 2px solid red; border-radius: 4px; outline: none; background-color: rgb(234, 235, 234)' : 'border: 1px solid rgba(0,0,0,.15); border-radius: 4px; outline: none;' ?>   "
                                id="input-email" name="email">
                            <?php if( !empty($error['email']) ): ?><p class="error_msg bold txt_left font_75"
                                style="margin: 0; padding-top: 5px;">
                                <?php echo $error['email']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <div>
                            <label class="noto_bold <?= !empty($error['your_name']) ? 'red' : 'txt_5th_color'; ?> font_75">会社名 <span class="red bold">*</span></label>
                            <div class="space_05"></div>
                            <input type="text" name="company_name" id="input-company"
                                class="validate[required] block width_100 font_75 txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                placeholder="会社名を入力してください"
                                value="<?php if( !empty($clean['company_name']) ){ echo $clean['company_name']; } ?>"
                                style=" <?= !empty($error['company_name']) ? 'border: 2px solid red; border-radius: 4px; outline: none; background-color: rgb(234, 235, 234)' : 'border: 1px solid rgba(0,0,0,.15); border-radius: 4px; outline: none;' ?>   ">
                            <?php if( !empty($error['company_name']) ): ?><p class="error_msg bold txt_left font_75"
                                style="margin: 0; padding-top: 5px;">
                                <?php echo $error['company_name']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <div>
                            <label class="noto_bold font_75">電話番号</label>
                            <div class="space_05"></div>
                            <input type="text"
                                class="validate[required] block width_100 font_75 txt_tpad_1 txt_bpad_1 txt_lpad_1 txt_rpad_1"
                                placeholder="電話番号を入力してください（ハイフン有り"
                                value="<?php if( !empty($clean['tel']) ){ echo $clean['tel']; } ?>"
                                style="border: 1px solid rgba(0,0,0,.15); border-radius: 4px; outline: none;"
                                id="input-tel" name="tel">

                            <p class="font_60 noto_med txt_5th_color txt_tpad_05" style="opacity: .6;">
                                ※リモートワークなどお勤め先ではない場所に連絡をご希望の場合は、携帯番号をご記入ください。</p>
                        </div>
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <div>
                            <label class="noto_bold font_75">お問い合せ内容</label>
                            <div class="space_05"></div>
                            <textarea name="contents" id="input-text"
                                class="validate[required] width_100 font_75 txt_tpad_1 txt_lpad_1 txt_bpad_1 txt_rpad_1"
                                placeholder="例）電話で詳細を聞きたい" rows="5"
                                style="border: 1px solid rgba(0,0,0,.15); border-radius: 4px; outline: none;"><?php if( !empty($clean['contents']) ){ echo $clean['contents']; } ?></textarea>
                            
                        </div>
                        
                        <!-- END FORM INPUTS -->
                        
                        <!-- FORM CHECKBOX AGREEMENT -->
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <p class="font_75 noto_bold <?= !empty($error['your_name']) ? 'red' : 'txt_5th_color'; ?>">プライバシーポリシー<span class="red"> *</span></p>
                        <div class="txt_tpad_05 flex" style="align-items: center; justify-content: flex-start;">
                            <input type="checkbox" value="同意する。" class="validate[required]" id="agreement"
                                name="agreement"
                                style="cursor: pointer;  opacity: .6;">
                            <label class="noto_med <?= !empty($error['your_name']) ? 'red' : 'txt_5th_color'; ?> txt_5th_color font_75 txt_lpad_05">同意する。</label>
                            <?php if( !empty($error['agreement']) ): ?>
                                <div class="space_05"></div>
                            <p class="error_msg bold txt_left font_75 width_100"
                                style="margin: 0; padding-top: 5px;">
                                <?php echo $error['agreement']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- END FORM CHECKBOX AGREEMENT -->

                        <!-- spacing -->
                        <div class="space_1"></div>
                        <div class="font_60 noto_regular txt_5th_color" style="opacity: .6;">
                            ADlive株式会社の「個人情報保護方針（<a href="https://adlive.asia/privacy" target="_blank"
                                style="text-decoration: underline; color: #551A8B;"
                                class="font_60 noto_regular">https://adlive.asia/privacy</a>）」と「個人情報の取扱いについて（<a
                                href="https://adlive.asia/policy" target="_blank"
                                style="text-decoration: underline; color: #0000EE;"
                                class="font_60 noto_regular">https://adlive.asia/policy</a>）」に同意いただけた場合は「同意する」をチェックしてください。
                        </div>
                        <!-- spacing -->
                        <div class="space_2"></div>
                        <div class="txt_center">
                            <button type="submit" name="btn_submit" value="内容を送信"
                                class="custom_hover font_75 txt_tpad_1 txt_bpad_1 white"
                                style="font-family: arial,helvetica,clean,sans-serif; width: 12vw; border-radius: 13vw; border: none; background-color: #ff9500; cursor: pointer;">内容を送信</button>
                        </div>
                    </form>
                    <div class="space_5"></div>
                </div>
            </div>




        </section>

        <script>
        $("html").easeScroll();

        // Navigation
        $('#toggle').click(function() {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
        });
        </script>

        <script>
        (function(d) {
            var config = {
                    kitId: 'lbs3xkk',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
        </script>


        <!-- ACCORDION  -->
        <script>
        var acc = document.getElementsByClassName("accordion_header");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var accordion_content = this.nextElementSibling;
                if (accordion_content.style.display === "flex") {
                    accordion_content.style.display = "none";
                } else {
                    accordion_content.style.display = "flex";
                }
            });
        }
        </script>
</body>

</html>