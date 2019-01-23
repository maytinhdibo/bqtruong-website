<?php
  // Include WordPress
  global $wpdb;
  define('WP_USE_THEMES', false);
  require('/var/www/bqtdotcom/wp-blog-header.php');
  query_posts('posts_per_page=1');
?>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />

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
    <nav class="navbar navbar-expand-lg fixed-top ">
        <!-- <a class="navbar-brand mr-4" href="#">Bùi Quốc Trưởng</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"><i class="fas fa-bars"></i>
            </span> -->
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#about">Về tôi</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio" href="http://blog.buiquoctruong.com">Blog</a>
                </li>
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item">
                        <img class="logo" src="img/profile.jpg" />
                    </li>
                    </li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link " data-value="project" href="#project">Dự án</a> </li>
                <li class="nav-item">
                    <a class="nav-link " data-value="talk" href="#talk-aboutme">Đánh giá</a> </li>
                <!-- <li class="nav-item">
                    <a class="nav-link " data-value="team" href="#contact"> Liên hệ</a> </li> -->

            </ul>
        </div>
    </nav>



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
                    <img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/46773957_2046770548747316_7421143681450639360_n.jpg?_nc_cat=108&_nc_oc=AQltd91WYebEICchBVdUmyv4mECOzboIgNo7RPpLL4LhPRt2lW3iuP0D9ZLE55_xqRo&_nc_ht=scontent.fhan2-3.fna&oh=6ae9b130b6e4bb852a4d91642ee2ec36&oe=5CD1EC7D"
                        class="img-fluid">
                    <!-- <span class="text-justify">Chuyên gia tư vấn BĐS</span> -->
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 desc wow fadeInRight">
                    <h3>Bùi Quốc Trưởng</h3>
                    <p>
                        Nếu quý khách có bất kỳ nhu cầu hay thắc gì về BĐS cần tư vấn hãy liên hệ với tôi ngay. Có thể
                        tôi không phải là người giỏi nhất để có thể giải quyết mọi vấn đề của quý khách nhưng tôi tự
                        tin mình là người tư vấn tận tâm và chuyên nghiệp nhất…
                    </p>
                    <ul class="timeline">
                        <li>
                            <a target="_blank" href="http://plandvietnam.com/">Chuyên gia Bất động sản -
                                Sale Supervisor</a>
                            <a class="float-right">Tháng 9/2018 - nay</a>
                            <p>Công ty TNHH Đầu tư và Phát triển P.Land Việt Nam</p>
                        </li>

                        <li>
                            <a target="_blank" href="http://plandvietnam.com/">Chuyên viên Bất động sản - Sale </a>
                            <a class="float-right">Tháng 5/2018 - Tháng 9/2018</a>
                            <p>Công ty TNHH Đầu tư và Phát triển P.Land Việt Nam</p>
                        </li>

                        <li>
                            <a target="_blank" href="https://www.denso.com/vn/vi/">Kỹ sư thiết kế Linh kiện ô
                                tô Nhật Bản </a>
                            <a class="float-right">Tháng 8/2016 - Tháng 5/2018</a>
                            <p>Công ty TNHH Denso Việt Nam</p>
                        </li>


                        <li>
                            <a target="_blank" href="http://plandvietnam.com/">Công tác viên tư vấn bất động sản - Sale
                                Collaborator </a>
                            <a class="float-right">Tháng 9/2015 - Tháng 5/2018</a>
                            <p>Công ty TNHH Đầu tư và Phát triển P.Land Việt Nam</p>
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
            <div class="list-card">
                <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                    <div class="card-img">
                        <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/49180764_2100057073418663_64231497904685056_o.jpg?_nc_cat=104&_nc_oc=AQkzwzVYEmqc9siDenslOGyzKdJhONuthYyO4ySq9kFvs0SKi5yOknaGp0tNwiIlTQw&_nc_ht=scontent.fhan2-4.fna&oh=b682cb0cc61e21ef1f28806a3190f242&oe=5CCD3EF8"
                            class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <h5> FLC HẠ LONG</h5>
                    </div>
                </div>
            </div>

            <div class="list-card">
                <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                    <div class="card-img">
                        <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/49180764_2100057073418663_64231497904685056_o.jpg?_nc_cat=104&_nc_oc=AQkzwzVYEmqc9siDenslOGyzKdJhONuthYyO4ySq9kFvs0SKi5yOknaGp0tNwiIlTQw&_nc_ht=scontent.fhan2-4.fna&oh=b682cb0cc61e21ef1f28806a3190f242&oe=5CCD3EF8"
                            class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <h5> FLC HẠ LONG</h5>
                    </div>
                </div>
            </div>

            <div class="list-card">
                <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                    <div class="card-img">
                        <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/49180764_2100057073418663_64231497904685056_o.jpg?_nc_cat=104&_nc_oc=AQkzwzVYEmqc9siDenslOGyzKdJhONuthYyO4ySq9kFvs0SKi5yOknaGp0tNwiIlTQw&_nc_ht=scontent.fhan2-4.fna&oh=b682cb0cc61e21ef1f28806a3190f242&oe=5CCD3EF8"
                            class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <h5> FLC HẠ LONG</h5>
                    </div>
                </div>
            </div>

            <div class="list-card">
                <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                    <div class="card-img">
                        <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/49180764_2100057073418663_64231497904685056_o.jpg?_nc_cat=104&_nc_oc=AQkzwzVYEmqc9siDenslOGyzKdJhONuthYyO4ySq9kFvs0SKi5yOknaGp0tNwiIlTQw&_nc_ht=scontent.fhan2-4.fna&oh=b682cb0cc61e21ef1f28806a3190f242&oe=5CCD3EF8"
                            class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <h5> FLC HẠ LONG</h5>
                    </div>
                </div>
            </div>

            <div class="list-card">
                <div class="card wow jackInTheBox" data-wow-duration="0.75s">
                    <div class="card-img">
                        <img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/49180764_2100057073418663_64231497904685056_o.jpg?_nc_cat=104&_nc_oc=AQkzwzVYEmqc9siDenslOGyzKdJhONuthYyO4ySq9kFvs0SKi5yOknaGp0tNwiIlTQw&_nc_ht=scontent.fhan2-4.fna&oh=b682cb0cc61e21ef1f28806a3190f242&oe=5CCD3EF8"
                            class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <h5> FLC HẠ LONG</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="cate-project" class="row">
                <div class="col-md-12">
                    <h4>Các danh mục dự án</h4>
                </div>
                <div class="col-md-3">
                    <div class="cate-item">
                        <div style="background-image:url('http://trannghia.net/wp-content/uploads/2018/07/avt-vinpearl-cua-hoi.jpg')"
                            class="bg-overlay"></div>
                        <div class="card-overlay"></div>
                        <div class="list-text">Biệt thự</div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="cate-item">
                        <div style="background-image:url('http://nguyenhoanganh.net/wp-content/uploads/2017/02/vinhomes-green-bay-600x420.jpg')"
                            class="bg-overlay"></div>
                        <div class="card-overlay"></div>
                        <div class="list-text">Liền kề</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cate-item">
                        <div style="background-image:url('http://nguyenhoanganh.net/wp-content/uploads/2017/05/vinhomes-skylake.jpg')"
                            class="bg-overlay"></div>
                        <div class="card-overlay"></div>
                        <div class="list-text">Chung cư</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cate-item">
                        <div style="background-image:url('http://trannghia.net/wp-content/uploads/2018/08/the-costa-nha-trang.jpg')"
                            class="bg-overlay"></div>
                        <div class="card-overlay"></div>
                        <div class="list-text">Condotel</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div id="blog" class="blog page">
        <div class="title-page">
            <h2>Bài viết</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.5s">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="1s">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="post" class="page">
        <div class="title-page">
            <h2>Bài viết của tôi</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
		    <h4>Tin tức</h4>
				<ul>
				<?php while (have_posts()): the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
				<?php endwhile; ?>
				</ul>
                    <a href="#">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="http://nguyenhoanganh.net/wp-content/uploads/2019/01/Canh-1-31-min-1024x519.jpg"
                                    class="img-fluid">
                            </div>
                            <b class="post-title">Đây là bài viết 1 nè, quan trọng lắm á</b>
                        </div>
                    </a>
                    <ul>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Đây là một bài viết gì đó mình hông biết</a></li>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Bài này viết về một nội dung cực kì dài đó nha, không thể nói hết được</a></li>
                        <li><a href="#">Còn bài này ngắn quá ngắn</a></li>

                    </ul>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
                    <h4>Phân tích đầu tư</h4>
                    <a href="#">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="http://nguyenhoanganh.net/wp-content/uploads/2018/12/7-ly-do-nen-dau-tu-vincity-sportia.jpg"
                                    class="img-fluid">
                            </div>
                            <b class="post-title">Đây là bài viết 1 nè, quan trọng lắm á</b>
                        </div>
                    </a>
                    <ul>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Đây là một bài viết gì đó mình hông biết</a></li>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Bài này viết về một nội dung cực kì dài đó nha, không thể nói hết được</a></li>
                        <li><a href="#">Còn bài này ngắn quá ngắn</a></li>

                    </ul>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12 post-item">
                    <h4>Trải nghiệm khách hàng</h4>
                    <a href="#">
                        <div class="thumb-post">
                            <div class="card-img">
                                <img src="http://nguyenhoanganh.net/wp-content/uploads/2018/12/nen-chon-mua-toa-nao-toa-h8.jpg"
                                    class="img-fluid">
                            </div>
                            <b class="post-title">Đây là bài viết 1 nè, quan trọng lắm á</b>
                        </div>
                    </a>
                    <ul>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Đây là một bài viết gì đó mình hông biết</a></li>
                        <li><a href="#">Bài này viết sau đó nha</a></li>
                        <li><a href="#">Bài này viết về một nội dung cực kì dài đó nha, không thể nói hết được</a></li>
                        <li><a href="#">Còn bài này ngắn quá ngắn</a></li>

                    </ul>
                </div>


            </div>
        </div>
    </div>

    <div style="padding:46px;background-size:cover;background-position: bottom;background-image: linear-gradient(
        rgba(0, 0, 0, 0.75), 
        rgba(0, 0, 0, 0.75)
      ),url('https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/40978439_1941482415942797_8209395099390443520_o.jpg?_nc_cat=101&_nc_ht=scontent.fhan5-5.fna&oh=25885d6212b82800daf0fd662d88d032&oe=5CD7CCC1')"
        id="contact" class="page">

        <div class="row">
            <div class="col-md-5 .col-sm-12">
                <h3 style="color:#fff"> Nhận tư vấn chuyên sâu</h3>
            </div>
            <div class="col-md-2 .col-sm-4">
                <label for="inputPassword2" class="sr-only">Số điện thoại</label>
                <input type="text" class="custom" id="inputPassword2" placeholder="Số điện thoại">
            </div>

            <div class="col-md-3 .col-sm-5">
                <label for="inputPassword2" class="sr-only">Email</label>
                <input type="text" class="custom" id="inputPassword2" placeholder="Email">
            </div>
            <div class="col-md-2 .col-sm-5">
                <button id="submit-sub" style="width:100%;" type="submit" class="custom">Đăng ký</button>
            </div>

        </div>
    </div>

    <div id="talk-aboutme" class="page">
        <div class="title-page">
            <h2>Khách hàng nói về tôi</h2>
        </div>
        <div class="talk-aboutme">
            <div class="crd">
                <div class="row">
                    <div style="background-image:url('https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/50250681_2297591406927144_3789774800054910976_n.jpg?_nc_cat=108&_nc_oc=AQljbW7N4fREeee2rDu7SUyKm4fg5XFcAmgwkGRjpZmi_gzkcUwU5oa64p_ZV4XYdDw&_nc_ht=scontent.fhan2-3.fna&oh=15fdac9994043fd97161b1e568f76ea6&oe=5CC0B3F1')"
                        class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Cô Vi</h5>
                            <p>Khách hàng mua Biệt Thự FLC</p>
                        </div>
                        <p>Trưởng à, số tiền mà cô dự định chi cho việc mua nhà lần này rất lớn, vì thế cô chú rất kỹ
                            tính trong việc lựa chọn người tư vấn. Và hôm nay coi như cô cháu mình có duyên, cô cũng
                            giao hết công việc này cho cháu. Cháu hãy coi cô như người thân của mình tư vấn hết cho cô
                            chú nhé</p>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/50082554_2297592466927038_5888205785481084928_n.jpg?_nc_cat=100&_nc_oc=AQmn2TouUYOXWwzK5IPiU4qQE_zOjv2wKXcN_MLyOxuIYgEJCu_Kb7NTO2TqDmxiQvQ&_nc_ht=scontent.fhan2-4.fna&oh=214f80229cdd53ce4b4fe2d4798a4bb8&oe=5CC69239')"
                        class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Chị Hương</h5>
                            <p>Khách hàng mua Biệt Thự FLC</p>
                        </div>
                        <p>Đây là phần xứng đáng em được hưởng sau quá trình chị làm việc với em. Mặc dù em không lấy
                            được nhưng sự nhiệt tình hết mình và cái tâm trong công việc chị rất ghi nhận</p>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

            <div class="crd">
                <div class="row">
                    <div style="background-image:url('https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-0/p206x206/50324493_2297592840260334_2348280911050571776_n.jpg?_nc_cat=102&_nc_oc=AQl6Zy2Cxi7YvlNq9Sarh5Z3fpmg-kBvSTh_JNcONe14h32z_bZd4NL0b_3howEchBM&_nc_ht=scontent.fhan2-1.fna&oh=fc1e6c423bcb0481c1df062f6f9e9c4a&oe=5CCA48CB')"
                        class="client-img"></div>
                    <div class="client-content">
                        <div class="rw-author-details">
                            <h5>Cô Thảo</h5>
                            <p>Khách hàng mua Biệt Thự FLC</p>
                        </div>
                        <p>Trưởng à! Cô, Chú từng này tuổi rồi ít khi nhìn sai người lắm. Các cháu còn trẻ hơn ai hết
                            các cháu hãy làm việc có tâm rồi may mắn sẽ đến với các cháu!</p>
                    </div>
                    <div class="rw_rating"> <span class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star"
                            style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span><span
                            class="fa fa-star" style="color: #ffc662;"></span><span class="fa fa-star" style="color: #ffc662;"></span></div>
                </div>
            </div>

        </div>
    </div>


    <div id="with-me" class="blog page">
        <div class="title-page">
            <h2>Đồng hành cùng tôi</h2>
        </div>
        <div class="container">
            <div id="friend" class="row">
                <div class="list-card">
                    <div class="card">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>
                <div class="list-card">
                    <div class="card">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="list-card">
                    <div class="card">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>

                <div class="list-card">
                    <div class="card" data-wow-duration="0.75s" data-wow-delay="1s">
                        <div class="card-img">
                            <img src="img/46741501_2046814075409630_9129134785023705088_o.jpg" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="card-footer">
                            <button class="custom"><a href="" class="card-link">Read more</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="client-logo" class="page">
        <div class="client-logo row">
            <div class="col-lg-2 col-md-6" style="background-image:url(http://plandvietnam.com/wp-content/uploads/2018/04/logo-flc.jpg)"></div>
            <div class="col-lg-3 col-md-6" style="background-image:url(http://plandvietnam.com/wp-content/uploads/2018/04/logo-vinhomes.png)"></div>
            <div class="col-lg-2 col-md-6" style="background-image:url(http://plandvietnam.com/wp-content/uploads/2018/04/logo-sungroup.jpg)"></div>
            <div class="col-lg-3 col-md-6" style="background-image:url(http://plandvietnam.com/wp-content/uploads/2018/04/logo-vinhomes.png)"></div>
            <div class="col-lg-2 col-md-6" style="background-image:url(http://plandvietnam.com/wp-content/uploads/2018/06/4-1.jpg)"></div>
        </div>
    </div>

    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Mr. Bùi Quốc Trưởng</h5>
                    <p><i class="fa fa-envelope"></i> buiquoctruong.bds@gmail.com</p>
                    <p><i class="fa fa-phone"></i> <a href="tel:+84961362174">096.136.2174</a> - <a href="tel:+84931005567">093.100.5567</a></p>
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
                        <li>
                            <a href="#!">FLC Resort Hạ Long</a>
                        </li>
                        <li>
                            <a href="#!">FLC Resort Hạ Long</a>
                        </li>
                        <li>
                            <a href="#!">FLC Resort Hạ Long</a>
                        </li>
                        <li>
                            <a href="#!">FLC Resort Hạ Long</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Liên Kết</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.flc.vn/">FLC Group</a>
                        </li>
                        <li>
                            <a href="http://plandvietnam.com/">P.Land Việt Nam</a>
                        </li>
                        <li>
                            <a href="https://www.flc.vn/">FLC Group</a>
                        </li>
                        <li>
                            <a href="http://plandvietnam.com/">P.Land Việt Nam</a>
                        </li>
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
   
    
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1053231291479293">
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $(".navbar").addClass("active");
                $('#scroll').fadeIn(); 
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar").removeClass("active");
                $('#scroll').fadeOut(); 
            }
        });
        $('#totop').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 0); 
        return false; 
    }); 
        var play = 0;
        function playvideo() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                window.open("https://www.youtube.com/watch?v=mUyggKgfkXg");
            } else {
                if (play == 0) {
                    document.querySelector("#video-background").style.visibility = "visible";
                    document.querySelector("#video").src = "https://www.youtube.com/embed/MB80ZuIJATI?controls=0&showinfo=0&autoplay=1&loop=1&mute=1";
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
