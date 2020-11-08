<!DOCTYPE html>
<html lang="jp">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=x-euc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP LINK -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- AOS LINK -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Web Developer Task</title>
    <!--CSS LINK -->
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/c6b0374cee.js"></script>
</head>

<body>
    <!---------------------------------------------------NAVBAR STARTS------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="#"><img class="logo" src="./images/logo.png" alt="" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                <li class="nav-item active" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1500">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-official facebookIcon"
                            aria-hidden="true"></i></a>
                </li>
                <li class="nav-item" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1500">
                    <a class="nav-link" href="#"><i class="fa fa-twitter-square twitterIcon" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1500">
                    <a class="nav-link" href="#"><i class="fa fa-instagram instagramIcon" aria-hidden="true"></i></a>
                </li>

            </ul>


        </div>

    </nav>
    <!---------------------------------------------------NAVBAR ENDS------------------------------------------------------------------->

    <!------------------------------------------------INTRODUCTION SEARCH BOX SECTION STARTS---------------------------------------------->
    <section class="d-flex">

        <textarea class="search-box"></textarea>

        <div class="introduction">

            <img id="searchIcon" src="./images/searchIcon.png" alt="">
            <p id="description">好奇心旺盛なデザイナー最強説を説く女性社長が教える
                世界一たのしくてちょっぴり厳しい仕事論</p>
        </div>

    </section>
    <!------------------------------------------------INTRODUCTION SEARCH BOX SECTION ENDS---------------------------------------------->

    <!------------------------------------------------PINK BANNER SECTION STARTS---------------------------------------------------------->
    <section class="pink-banner">

        <div data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1500">
            <p class="banner-text small-text">デザイナーは</p>
            <p class="banner-text large-text">多様力が9割</p>
        </div>

    </section>
    <!------------------------------------------------PINK BANNER SECTION ENDS---------------------------------------------------------->

    <!------------------------------------------------PEN & VERTICAL TEXT SECTION STARTS------------------------------------------------>
    <section class="pen-section">
        <div class="d-flex container">
            <img class="vertical-text" src="./images/verticalText.png" alt="">
            <div class="pen-sentences">
                <p>人生の大半の時間を費やすなら</p>
                <p>楽な事ばかりじゃなくても</p>
                <p>乗り越え方がわかれば、</p>
                <p>もっと楽しく、</p>
                <p>もっと充実した日々が</p>
                <p>きっとやって来る</p>
            </div>
            <img class="pen" src="./images/pen.png" alt="" />
        </div>

    </section>
    <!------------------------------------------------PEN & VERTICAL TEXT SECTION ENDS------------------------------------------------>

    <!------------------------------------------------TEXT BOARD WITH MAN SECTION STARTS------------------------------------------------>
    <section>
        <div class="container text-board" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="25"
            data-aos-duration="1000">
            <img class="man" src="./images/man.png" alt="" />
            <img class="head-text" src="./images/head-text.png" alt="" />
            <img class="down-half-cloud-text" src="./images/down-half-cloud-text.png" alt="" />
            <img class="oval-text" src="./images/oval-text.png" alt="" />
            <img class="rectangle-text" src="./images/rectangle-text.png" alt="" />
            <img class="full-cloud-text" src="./images/full-cloud-text.png" alt="" />
            <img class="up-half-cloud-text" src="./images/up-half-cloud-text.png" alt="" />
            <img class="text" src="./images/text.png" alt="" />
        </div>
        <div class="container leaf-section" data-aos="slide-up" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="1000">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>夢を叶える力</h1>
                    <hr class="leaf-hr">
                    <img class="leaf" src="./images/leaf.png" alt="">
                </div>
                <div class="texts col-12 col-md-6">
                    <p>数々の壁や失敗の経験から導き出す</p>
                    <p>夢を叶える思考力。</p>
                    <p>デザインには夢を叶える力がある。</p>
                </div>
            </div>

        </div>
    </section>
    <!------------------------------------------------TEXT BOARD WITH MAN SECTION ENDS------------------------------------------------>

    <!------------------------------------------------ABOUT THE BOOK SECTION STARTS------------------------------------------------>
    <section class="about-the-book" data-aos="fade-up" data-aos-offset="300" data-aos-delay="20"
        data-aos-duration="1000">
        <div class="about-book-banner">
            <h1><span><img src="./images/style-line.png"> </span>About the Book</h1>
        </div>
        <div class="about-book-header mt-5">
            <div class="d-flex justify-content-center">
                <div class="about-book-header-single">
                    <h1>仕事</h1>
                    <hr>
                </div>
                <div class="about-book-header-single">
                    <h1>独立</h1>
                    <hr>
                </div>
                <div class="about-book-header-single">
                    <h1>経営</h1>
                    <hr>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="about-book-header-single">
                    <h1>育児</h1>
                    <hr>
                </div>
                <div class="about-book-header-single">
                    <h1>遊び</h1>
                    <hr>
                </div>
            </div>


        </div>
        <div class="container list mt-5">


            <div class="d-flex">
                <img class="list-image" src="./images/checkbox.png" alt="">
                <p>アドバイスを素直に聴く力と心が成長の速さを左右す</p>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="d-flex">
                        <img class="list-image" src="./images/checkbox.png" alt="">
                        <p>ピンチはチャンス思考力でデザイン力アップ</p>
                    </div>
                    <div class="d-flex">
                        <img class="list-image" src="./images/checkbox.png" alt="">
                        <p>営業経験が指名される喜びと充実感を生む</p>
                    </div>
                </div>
                <div class="col-4">
                    <img class="page" src="./images/list-image.png" alt="">
                </div>
            </div>

            <div class="d-flex last-list-item">
                <img class="list-image" src="./images/checkbox.png" alt="">
                <p>公私混同が人生の幅とスキルを広げる</p>
            </div>
        </div>
        <div class="pink-part">

            <p>大好きな仕事をしながら、家庭を持ち、キャリアを積み重ねて行きたい！
                そう思って今を生きています。なかなか簡単には行かない事もありますが、
                その試行錯誤の経験が色々な方のお役にたつと嬉しいです♪</p>
        </div>


    </section>
    <!------------------------------------------------ABOUT THE BOOK SECTION ENDS------------------------------------------------>


    <section class="about-the-author">
        <!------------------------------------------------ABOUT THE AUTHOR SECTION STARTS------------------------------------------------>
        <div class="banner">
            <h1>About the Author<span><img src="./images/style-line2.png"> </span></h1>
        </div>
        <div class="container">
            <div class="row author">
                <div class="col-12 col-md-6" data-aos="slide-right" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1500">
                    <div class="author-details">
                        <h3>株式会社シュガーテイスト</h3><br>
                        <h5>代表取締役</h5>
                        <h2>佐藤 奈緒子（さとう・なおこ）</h2>
                        <img class="text-pad" src="./images/author.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="slide-left" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1500">
                    <div class="book-details first-one">
                        <div class="d-flex ink-image">
                            <img src="./images/shadow.png" alt="">
                            <img src="./images/ink.png" alt="">
                        </div>
                        <div class="table-section">
                            <div class="header-text">
                                <h3>立ち読みダウンロード</h3>
                            </div>
                            <table border="1">
                                <caption class="table-caption">書籍情報</caption>
                                <col style="width:30%">
                                <col style="width:70%">
                                <tr>
                                    <td>製本サイズ</td>
                                    <td>B6サイズ</td>
                                </tr>
                                <tr>
                                    <td>ページ数</td>
                                    <td>212ページ</td>
                                </tr>
                                <tr>
                                    <td>表 紙</td>
                                    <td>カラー</td>
                                </tr>
                                <tr>
                                    <td>本文カラー</td>
                                    <td>モノクロ</td>
                                </tr>
                                <tr>
                                    <td>綴じ方</td>
                                    <td>無線綴じ</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                </div>


            </div>

        </div>
        <!------------------------------------------------ABOUT THE AUTHOR SECTION ENDS------------------------------------------------>

        <!------------------------------------------------PEOPLE RECOMMENDED SECTION STARTS------------------------------------------------>
        <div class="user">
            <div class="user-banner">
                <h1>こんな方にオススメ<span><img src="./images/style-line2.png"> </span></h1>
            </div>
            <div class="user-category-list container">
                <div class="row">
                    <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="5"
                        data-aos-duration="700">
                        <div class="d-flex">
                            <img class="checkbox" src="./images/checkbox.png" alt="">
                            <p>好きな事で一生働いて行きたい方へ</p>
                        </div>
                        <div class="d-flex">
                            <img class="checkbox" src="./images/checkbox.png" alt="">
                            <p>デザイナーと一緒に夢を叶えたい方へ</p>
                        </div>
                        <div class="d-flex">
                            <img class="checkbox" src="./images/checkbox.png" alt="">
                            <p>後輩社員の育成に</p>
                        </div>
                        <div class="d-flex">
                            <img class="checkbox" src="./images/checkbox.png" alt="">
                            <p>壁にぶち当たって前に進めない方へ</p>
                        </div>
                        <div class="d-flex">
                            <img class="checkbox" src="./images/checkbox.png" alt="">
                            <p>デザイナーになりたいあなたへ</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                        data-aos-duration="1000">
                        <img class="book" src="./images/book.png" alt="">
                    </div>
                </div>


            </div>
            <div class="book-details second-one">
                <div class="d-flex ink-image">
                    <img src="./images/shadow.png" alt="">
                    <img src="./images/ink.png" alt="">
                </div>
                <div class="table-section">
                    <div class="header-text">
                        <h3>立ち読みダウンロード</h3>
                    </div>
                    <table border="1">
                        <caption class="table-caption">書籍情報</caption>
                        <col style="width:30%">
                        <col style="width:70%">
                        <tr>
                            <td>製本サイズ</td>
                            <td>B6サイズ</td>
                        </tr>
                        <tr>
                            <td>ページ数</td>
                            <td>212ページ</td>
                        </tr>
                        <tr>
                            <td>表 紙</td>
                            <td>カラー</td>
                        </tr>
                        <tr>
                            <td>本文カラー</td>
                            <td>モノクロ</td>
                        </tr>
                        <tr>
                            <td>綴じ方</td>
                            <td>無線綴じ</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!------------------------------------------------PEOPLE RECOMMENDED SECTION ENDS------------------------------------------------>

    </section>
    <!------------------------------------------------CART SECTION STARTS------------------------------------------------>
    <section class="cart">
        <?php include('cart.php');?>
    </section>
    <!------------------------------------------------CART SECTION ENDS------------------------------------------------>

    <!------------------------------------------------PINK FOOTER STARTS------------------------------------------------>
    <section class="footer">

        <div class="container footer-container ">
            <div class="head">
                <p>ご利用案内</p>
            </div>
            <div class="row footer-outer-border">

                <div class="col-12 col-md-6 right-border">

                    <div>
                        <p>
                            <お届け>
                        </p>
                        <p> ・ご注文後、一週間前後のお届けを予定しております。</p>
                        <p> ・お届けは日本国内に限ります。</p>
                    </div>
                    <div class="mt-5">
                        <p>
                            <送料>
                        </p>
                        <p> ・1冊 スマートレター（全国一律180円）</p>
                        <p> ・2冊〜4冊 クリックポスト（全国一律198円）</p>
                        <p> ・5冊以上 ゆうパック （送料一律500円）</p>
                    </div>
                    <div class="mt-5">
                        <p>
                            <お支払い方法>
                        </p>
                        <p> 1. 銀行お振込(前払いのみのご対応です。)ご注文後お送り致しますメールの振込先をご確認ください。お振込手数料はお客様のご負担とさせていただきます。</p>
                        <p> 2. クレジットカード</p>
                    </div>
                    <p class="bottom-text">
                        <特定商取引法に基づく表示>
                    </p>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="second-part">
                        <p>
                            <ご返品>


                        </p>
                        <p> ・落丁や不良品のみ交換させて頂きます。</p>
                        <p> 返品は承っておりません。</p>
                    </div>
                    <div class="mt-5">
                        <p>
                            <領収書について>



                        </p>
                        <p>・領収書は発送時に弊社からお送りする『発送メール』に</p>
                        <p> 　添付させて頂きます。</p>
                    </div>
                    <div class="mt-5">
                        <p>
                            <ショップ名>

                        </p>
                        <p>・Sugartaste Books</p>

                    </div>
                    <div class="mt-5">
                        <p>
                            <サイト運営会社>

                                　
                                　

                        </p>
                        <div>
                            <p class="ml-4"> 株式会社シュガーテイスト</p>
                            <div class="ml-5">
                                <p>住所 : 台東区松が谷2-2-10</p>
                                <p>お問い合わせ : 03-6231-7409</p>
                                <p>e-mail : info@sugartaste.co.jp</p>
                                <div class=" mt-5">
                                    <p>※テレワークを実施しておりますのでお電話は</p>
                                    <p>繋がりづらい場合がございます。</p>
                                </div>

                            </div>
                            <p class="bottom-text2">
                                <特定商取引法に基づく表示>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!------------------------------------------------PINK FOOTER ENDS------------------------------------------------>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


    <script>
    AOS.init();
    </script>
</body>
<!------------------------------------------------FOOTER COPYRIGHT TEXT STARTS------------------------------------------------>
<footer class="text-center mt-3">
    <p>Copyright © Sugartaste Corporation.ltd. All rights reserved.</p>
    <div class="footer-icon mt-2 ">

        <a class="icon mr-2" href="#"><i class="fa fa-facebook-official facebookIcon" aria-hidden="true"></i></a>
        <a class="icon mr-2" href="#"><i class="fa fa-twitter-square twitterIcon" aria-hidden="true"></i></a>
        <a class="icon" href="#"><i class="fa fa-instagram instagramIcon" aria-hidden="true"></i></a>

    </div>
</footer>
<!------------------------------------------------FOOTER COPYRIGHT TEXT ENDS------------------------------------------------>

</html>