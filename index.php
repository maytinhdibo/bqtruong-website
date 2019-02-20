<?php
  // Include WordPress
  global $wpdb;
  define('WP_USE_THEMES', false);
  require('/home/opltaydm/blog.buiquoctruong.com/wp-blog-header.php');
  query_posts('posts_per_page=1');
?>

<?php
    global $projects;
    $projects = get_pages(array("parent" => 37));

    session_start();
?>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />

    <meta name="description" content="Bùi Quốc Trưởng chuyên ta tư vấn đầu tư bất động sản">
    <meta name="keywords" content="bất động sản, flc, vinhome, plandvietnam">
    <meta name="author" content="iammaytinhdibo@gmail.com">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/slide.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    <title>Bùi Quốc Trưởng - Chuyên gia tư vấn BĐS Cao cấp</title>
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div class="fb-customerchat" page_id="380508829429307" logged_in_greeting="Xin chào! mình có thể hỗ trợ bạn điều gì?"
        logged_out_greeting="Xin chào! mình có thể hỗ trợ bạn điều gì?">
    </div>

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '295027501369343',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v3.2'
            });

            // FB.CustomerChat.show();
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand mr-4" href="#">Bùi Quốc Trưởng</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#about">Về tôi</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="https://blog.buiquoctruong.com">Blog</a>
                </li>
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#"><img class="logo" src="img/bqt.jpg" /></a>
                    </li>
                    </li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link " data-value="project" href="#project">Dự án</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="talk" href="#contact">Đánh giá</a> </li>
                <!-- <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#contact"> Liên hệ</a> </li> -->

            </ul>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <iframe id="iframeYoutube" width="100%" height="315" src="https://www.youtube.com/embed/e80BbX05D7Y"
                        frameborder="0" allowfullscreen></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <header class="header">
        <div class="overlay"></div>

        <div id="video-background" class="video-background">
            <div class="video-foreground">
                <iframe id="video" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="description col-sm-6 col-xs-12 wow fadeInUp">
            <h1>Tôi là Bùi Quốc Trưởng<br>
                Chuyên gia tư vấn BĐS Cao Cấp</h1>
            <p>Có thể tôi không
                phải là người giỏi nhất để có thể giải quyết mọi vấn đề của quý khách nhưng tôi tự tin mình là người tư
                vấn tận tâm và chuyên nghiệp nhất…</p>
            <div style="position: relative;" class="video-container">
                <span onclick="playvideo()" class="play-video"><span class="fa fa-play"></span></span>
            </div>
        </div>

    </header>

    <div id="about" class="page">
        <div class="container">
            <div class="title-page">
                <h2>Tôi là ai?</h2>
            </div>
            <div class="row">
                <div style="text-align: center" class="col-lg-3 col-md-4 col-sm-12 wow fadeInLeft">
                    <img src="img/bqt.jpg"
                        class="img-fluid">
                    <!-- <span class="text-justify">Chuyên gia tư vấn BĐS</span> -->
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 desc wow fadeInRight">
                    <h3>Bùi Quốc Trưởng</h3>
                    <p>
                        <em>"Mọi chuyện xảy ra trong cuộc đời đều có ý nghĩa riêng của nó"</em><br/>
                        Xuất thân là một kĩ sư thiết kế cơ khí ôtô làm việc tại công ty 100% vốn Nhật Bản, nơi rèn giũa
                        cho tôi tinh thần làm việc Nhiệt tình - Chuyên nghiệp - Chính trực. Chuyển hướng sang Tư vấn
                        đầu tư Bất Động Sản chuyên nghiệp,
                        những giá trị dịch vụ tôi mang lại chắc chắn sẽ rất khác biệt và nằm trên sự mong muốn của tất
                        cả Quý vị!
                    </p>
                    <ul class="timeline">
                        <li>
                            <a href="#about">Chuyên gia Bất động sản -
                                Sale Supervisor</a>
                            <a class="floatright">Tháng 9/2018 - nay</a>
                            <p>Công ty TNHH Đầu tư và Phát triển P.Land Việt Nam</p>
                        </li>

                        <li>
                            <a href="#about">Chuyên viên Bất động sản - Sale </a>
                            <a class="floatright">Tháng 5/2018 - Tháng 9/2018</a>
                            <p>Công ty TNHH Đầu tư và Phát triển P.Land Việt Nam</p>
                        </li>

                        <li>
                            <a href="#about">Kỹ sư thiết kế Linh kiện ô
                                tô Nhật Bản </a>
                            <a class="floatright">Tháng 8/2016 - Tháng 5/2018</a>
                            <p>Công ty TNHH Denso Việt Nam</p>
                        </li>


                        <li>
                            <a href="#about">Cộng tác viên tư vấn bất động sản - Sale
                                Collaborator </a>
                            <a class="floatright">Tháng 9/2015 - Tháng 5/2018</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="project" class="page">
        <div class="title-page">
            <h2>Dự án của tôi</h2>
        </div>
        <div id="list-project" class="container">
            <?php
            if ( $projects ) {
                foreach ( $projects as $project ) :
                    $_SESSION["project"] = $project; ?>
            <a href="<?php echo get_page_link( $_SESSION["project"]->ID ); ?>">
                <div class="list-card">
                    <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                        <div class="card-img">
                            <img src="<?php echo get_the_post_thumbnail_url($_SESSION["project"]->ID) ?>"
                            class="img-fluid">
                        </div>
                        <div class="card-footer">
                            <h5>
                                <?php echo $_SESSION["project"]->post_title; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </a>
            <?php
                endforeach;
            }
            ?>
        </div>
        <div class="container">
            <div id="cate-project" class="row">
                <div class="col-md-12">
                    <h4>Các danh mục dự án</h4>
                </div>
                <div class="col-md-3">
                    <a href="https://blog.buiquoctruong.com/tag/biet-thu/">
                        <div class="cate-item">
                            <div style="background-image:url('img/bietthu.png')" class="bg-overlay"></div>
                            <div class="card-overlay"></div>
                            <div class="list-text">Biệt thự</div>
                        </div>
                    </a>
                </div>


                <div class="col-md-3">
                    <a href="https://blog.buiquoctruong.com/tag/lien-ke/">
                        <div class="cate-item">
                            <div style="background-image:url('img/lienke.jpg')" class="bg-overlay"></div>
                            <div class="card-overlay"></div>
                            <div class="list-text">Shophouse/ Liền kề</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://blog.buiquoctruong.com/tag/chung-cu/">
                        <div class="cate-item">
                            <div style="background-image:url('img/chungcu.jpg')" class="bg-overlay"></div>
                            <div class="card-overlay"></div>
                            <div class="list-text">Chung cư</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://blog.buiquoctruong.com/tag/condotel/">
                        <div class="cate-item">
                            <div style="background-image:url('img/condotel.jpg')" class="bg-overlay"></div>
                            <div class="card-overlay"></div>
                            <div class="list-text">Condotel</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div id="post" class="page">
        <div class="title-page">
            <h2>Bài viết của tôi</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
                    <h4>Tin tức</h4>
                    <?php
						$posts = get_posts(array('category' => 17));
						if ( $posts ) {
						    $first = false;
							foreach ( $posts as $post ) :
								setup_postdata( $post );
                                if ( !$first ) {
                                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" class="img-fluid">
                            </div>
                            <b class="post-title">
                                <?php the_title();?></b>
                        </div>
                    </a>
                    <?php
                                    $first = true;
                                }
                                else { ?>
                    <li><a href="<?php the_permalink(); ?>">
                            <?php the_title();?></a></li>
                    <?php
                                }
							endforeach;
							wp_reset_postdata();
						}
					?>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
                    <h4>Phân tích đầu tư</h4>
                    <?php
                    $posts = get_posts(array('category' => 18));
                    if ( $posts ) {
                        $first = false;
                        foreach ( $posts as $post ) :
                            setup_postdata( $post );
                            if ( !$first ) {
                                ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" class="img-fluid">
                            </div>
                            <b class="post-title">
                                <?php the_title();?></b>
                        </div>
                    </a>
                    <?php
                                $first = true;
                            }
                            else { ?>
                    <li><a href="<?php the_permalink(); ?>">
                            <?php the_title();?></a></li>
                    <?php
                            }
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
                    <h4>Trải nghiệm khách hàng</h4>
                    <?php
                    $posts = get_posts(array('category' => 19));
                    if ( $posts ) {
                        $first = false;
                        foreach ( $posts as $post ) :
                            setup_postdata( $post );
                            if ( !$first ) {
                                ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" class="img-fluid">
                            </div>
                            <b class="post-title">
                                <?php the_title();?></b>
                        </div>
                    </a>
                    <?php
                                $first = true;
                            }
                            else { ?>
                    <li><a href="<?php the_permalink(); ?>">
                            <?php the_title();?></a></li>
                    <?php
                            }
                        endforeach;
                        wp_reset_postdata();
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <div style="padding:46px;background-size:cover;background-position: bottom;background-image: linear-gradient(
        rgba(0, 0, 0, 0.75), 
        rgba(0, 0, 0, 0.75)
      ),url('img/contact.png')"
        id="contact" class="page">



        <?php echo do_shortcode( '[contact-form-7 id="75" title="Contact"]' ); ?>

    </div>

    <div id="talk-aboutme" class="page">
        <div class="title-page">
            <h2>Khách hàng nói về tôi</h2>
        </div>
        <div class="talk-aboutme">
            <div class="crd">
                <div class="row">
                    <div style="background-image:url('img/khachhang/nguyenngocanh.jpg')" class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Chú Nguyễn Ngọc Anh</h5>
                            <p>Khách hàng sở hữu Biệt thự FLC Sầm Sơn</p>
                        </div>
                        <p>"Tôi đã đầu tư khá nhiều đất thổ cư tại Hà Nội và Thành phố Thanh Hóa, gặp Trưởng là lần đầu
                            tiên tôi biết đến Bất Động Sản nghỉ dưỡng, nhận được những chia sẻ và phân tích về thị
                            trường của chàng trai trẻ này tôi thấy được tiềm năng trong đầu tư Nghỉ dưỡng tại nước ta
                            rồi kịp thời đón đầu.
                            Cùng làm trong lĩnh vực kĩ thuật nên các phân tích và chia sẻ ngắn gọn, cụ thể và rất khoa
                            học của anh chàng này, tôi quyết định đầu tư khi mới được giới thiệu và thăm quan dự án chỉ
                            vỏn vẹn duy nhất 1 tuần."
			</p>
			<a href="https://blog.buiquoctruong.com/khach-hang-noi-ve-toi/chu-nguyen-ngoc-anh/">&gt;&gt; Xem thêm &lt;&lt;</a>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('img/khachhang/buivanhoan.jpg')" class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Chú Bùi Văn Hoàn</h5>
                            <p>Nhà đầu tư đất nền FLC Tropical City Hạ Long</p>
                        </div>
                        <p>
                            "Gặp được Trưởng cũng khá là tình cờ, tại quán cafe tại góc phố cuối tuần tại Hà Nội. Nhìn
                            qua tướng tá chàng trai trẻ này tôi thấy có thiện cảm ngay, không giống bất kì sale nào tôi
                            từng gặp. Điều ấn tượng nhất tôi nhận thấy ở chất lượng tư vấn và cái tâm bán hàng đó là
                            Trưởng chỉ bán lô góc và cạnh góc có vị trí đẹp, đảm bảo tính thanh khoản cho tôi và bạn bè
                            khi đầu tư vào dự án tại Hạ Long. Nói chung tôi hoàn toàn hài lòng và sẽ tiếp tục đồng hành
                            trong các dự án tiếp theo."
                        </p>
                        <a href="https://blog.buiquoctruong.com/khach-hang-noi-ve-toi/chu-bui-van-hoan/">&gt;&gt; Xem thêm &lt;&lt;</a>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('img/khachhang/luonghaiyen.png')" class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Chị Lương Hải Yến</h5>
                            <p>Sở hữu Condotel BEST WESTERN PREMIER Quảng Bình</p>
                        </div>
                        <p>
                            "Một ngày tôi nhận tới 4 5 cuộc điện thoại mời đầu tư Bất Động Sản, công việc thì rất bận
                            nên tôi rất bực mình khi nhận những cuộc gọi như vậy trong ngày. Tuy nhiên anh chàng này
                            lại gây cho tôi ấn tượng hơn ai hết.
                            Anh chàng này thông minh và thật thà, đặc biệt là khả năng tính toán nhanh nhẹn đã đưa ra
                            phương án cho tôi rất cụ thể. Chẳng tội gì không giới thiệu cho bạn bè đúng không?"
                        </p>
                        <a href="https://blog.buiquoctruong.com/khach-hang-noi-ve-toi/chi-luong-hai-yen/">&gt;&gt; Xem thêm &lt;&lt;</a>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('img/khachhang/nvt.png')" class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Bác N.V.T</h5>
                            <p>Đầu tư Biệt thự đồi và 2 căn Condotel FLC Hạ Long</p>
                        </div>
                        <p>
                            "Tuy còn ít tuổi và chưa thực sự khéo léo trong ứng xử với người lớn tuổi, nhưng được cái
                            Trưởng rất thật thà, cái gì chưa biết thì không dám tư vấn.
                            Với kinh nghiệm người làm doanh nghiệp lâu năm, tôi tin tưởng chàng trai trẻ này sẽ rất
                            thành công trong lĩnh vực mà niềm tin là thứ quan trọng nhất này."
                        </p>
                        <a href="https://blog.buiquoctruong.com/khach-hang-noi-ve-toi/bac-n-v-t/">&gt;&gt; Xem thêm &lt;&lt;</a>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('img/khachhang/leduytung.jpg')" class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Anh Lê Duy Tùng</h5>
                            <p>Đầu tư Shophouse FLC Quảng Bình và FLC Tropical City Hạ Long</p>
                        </div>
                        <p>
                            "Biết đến Trưởng cũng khá thú vị, đợt đó đăng kí tìm hiểu thông tin về Condotel ở FLC Hạ Long trên Facebook. Trưởng đều đặn gửi thông tin về 2 dự án FLC Quảng Bình và FLC Hạ Long cho tôi từ tháng 5 cho tới tháng 11 năm nay, tất cả đều là những thông tin quan trọng và sát với thị trường.  Đến nay tôi nhận thấy được tiềm năng lâu dài của dự án này nên đã tin tưởng đặt cọc thiện trí để lấy được 1 lô đẹp trong đợt ra hàng mới của giai đoạn 2 sau Tết. Hồi tầm tuổi đó, tôi cũng không có nhiều nhiệt huyết với công việc như anh chàng này đâu <strong>*cười*</strong>"
                        </p>
                        <a href="https://blog.buiquoctruong.com/khach-hang-noi-ve-toi/anh-le-duy-tung/">&gt;&gt; Xem thêm &lt;&lt;</a>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                                                                                                          style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                                class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

        </div>
        <div style="text-algin:center">
<!--    <button class="custom"><a href="#">Đọc thêm về những câu chuyện</a></button>-->
    </div>

    </div>


    <div id="with-me" class="blog page">
        <div class="title-page">
            <h2>Đồng hành cùng tôi</h2>
        </div>
        <div class="container">
            <div id="friend" class="row">
                <?php
//                print_r(get_pages(array("parent" => 82)));
                $pages = get_pages(array("parent" => 82));
                if ( $pages ) {
                    foreach ( $pages as $page ) :
                        $_SESSION["page"] = $page; ?>
                <div class="list-card">
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo get_the_post_thumbnail_url($_SESSION["page"]->ID) ?>"
                            class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $_SESSION["page"]->post_title; ?>
                            </h4>
                            <p class="card-text">
                                <?php
                                            $content = $_SESSION["page"]->post_content;
                                            $content = strip_tags($content);
                                            if ( strlen($content) > 120 ) {
                                                $index = 120;
                                                while ($index < strlen($content) && $content[$index] != ' ') {
                                                    $index++;
                                                }
                                                $content = substr( $content, 0, $index );
                                                $content .= "...";
                                            }
                                            echo $content;
                                        ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="<?php echo get_page_link( $_SESSION["page"]->ID ); ?>"
                                    class="card-link">Xem thêm</a></button>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                }
                ?>
            </div>
        </div>
    </div>



    <div id="client-logo" class="page">
        <div class="client-logo row">
            <div class="col-lg-2 col-md-6" style="background-image:url(./img/logo-flc.jpg)"></div>
            <div class="col-lg-3 col-md-6" style="background-image:url(./img/logo-vinhomes.png)"></div>
            <div class="col-lg-2 col-md-6" style="background-image:url(./img/logo-sungroup.jpg)"></div>
            <div class="col-lg-3 col-md-6" style="background-image:url(./img/logo-phomes.png)"></div>
            <div class="col-lg-2 col-md-6" style="background-image:url(./img/logo-mekonggroup.jpg)"></div>
        </div>
    </div>

    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-5 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5>Mr. Bùi Quốc Trưởng</h5>
                    <p><i class="fa fa-envelope"></i> buiquoctruong.bds@gmail.com</p>
                    <p><i class="fa fa-phone"></i> <a href="tel:+84961362174">096.136.2174</a> - <a href="tel:+84931005567">0931.005.567</a></p>
                    <p><i class="fa fa-home"></i>Tòa nhà M3 - M4 số 91 Nguyễn Chí Thanh - Ba Đình - Hà Nội</p>
                    <p>Hãy liên hệ và cùng trò chuyện nhé!</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Dự án của tôi</h5>

                    <ul class="list-unstyled">
                        <?php
                        $pages = get_pages(array("parent" => 37));
                        if ( $pages ) {
                            foreach ( $pages as $page ) :
                                $res = '<li><a href="';
                                $res .= get_page_link( $page->ID );
                                $res .= '">';
                                $res .= $page->post_title;
                                $res .= '</a></li>';
                                echo $res;
                            endforeach;
                        }
                        ?>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Tải Tài Liệu</h5>

                    <ul class="list-unstyled">
                        <?php
                        $pages = get_pages(array("parent" => 64));
                        if ( $pages ) {
                            foreach ( $pages as $page ) :
                                $res = '<li><a href="';
                                $res .= get_page_link( $page->ID );
                                $res .= '">';
                                $res .= $page->post_title;
                                $res .= '</a></li>';
                                echo $res;
                            endforeach;
                        }
                        ?>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://buiquoctruong.com"> buiquoctruong.com</a>
        </div>
        <!-- Copyright -->

    </footer>

    <div id="totop">
        <i class="fas fa-angle-up"></i>
    </div>

    <div id="callme">
        <i class="fa fa-phone"></i> <a href="tel:+84931005567">0931.005.567</a>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133222263-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-133222263-1');
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $(".navbar").addClass("active");
                $('#totop').fadeIn();
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar").removeClass("active");
                $('#totop').fadeOut();
            }
        });
        $('#totop').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 0);
            return false;
        });

        $(document).ready(function () {
            $("#myModal").on("hidden.bs.modal", function () {
                $("#iframeYoutube").attr("src", "#");
            })
        })


        var play = 0;
        function playvideo() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                // window.open("https://www.youtube.com/watch?v=mUyggKgfkXg");
            
                    var iframe = document.getElementById("iframeYoutube");
                    iframe.src = "https://www.youtube.com/embed/NlKPOBBYMq8";

                    $("#myModal").modal("show");
        
            } else {
                if (play == 0) {
                    document.querySelector("#video-background").style.visibility = "visible";
                    document.querySelector("#video").src = "https://www.youtube.com/embed/NlKPOBBYMq8?controls=0&showinfo=0&autoplay=1&loop=1&mute=1";
                    document.querySelector(".play-video").innerHTML = '<span class="fas fa-pause"></span>';
                    document.querySelector(".description h1").style.display = "none";
                    document.querySelector(".description p").style.display = "none";
                    document.querySelector(".navbar").style.opacity = "0";
                    play = 1;
                } else {
                    document.querySelector("#video-background").style.visibility = "hidden";
                    document.querySelector("#video").src = "";
                    document.querySelector(".play-video").innerHTML = '<span class="fas fa-play"></span>';
                    document.querySelector(".description h1").style.display = "block";
                    document.querySelector(".description p").style.display = "block";
                    document.querySelector(".navbar").style.opacity = "1";
                    play = 0;
                }
            }


        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/slide.js"></script>
</body>

</html>
