<?php
    require('conf/config.php');
    require('conf/phpFunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portal Website Organisasi Perangkat Daerah (OPD) Kabupaten Sidoarjo</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta
        content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport">
    <link rel="icon" type="image/x-icon" href="assets/img/sidoarjo.png">

    <!-- style start -->
    <link href="assets/css/plugins.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/news.css" media="all" rel="stylesheet" type="text/css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- style end -->

    <!-- google fonts start -->
    <link
        href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CMontserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" type="text/css">
    <!-- google fonts end -->

    <!-- Vendor CSS Files start-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'>
    <!-- Vendor CSS Files end-->

</head>

<body id="mm-united">

    <!-- preloader start -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader">
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- social icons start -->
    <div class="social-icons-wrapper fadeIn-element">
        <ul class="social-icons">
            <li class="social-icon">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            </li>
            <li class="social-icon">
                <a href="#" class="twitter"><i class="bx bxl-facebook"></i></a>
            </li>
            <li class="social-icon">
                <a href="#" class="twitter"><i class="bx bxl-instagram"></i></a>
            </li>
            <li class="social-icon">
                <a href="#" class="twitter"><i class="bx bxl-whatsapp"></i></a>
            </li>
        </ul>
    </div>
    <!-- social icons end-->

    <header id="header" class="fixed-top d-flex align-items-center bg-white">
        <?PHP require('views/navbar.php')?>
    </header>

    <!-- fullPage start -->
    <div id="fullpage">
        <!-- section home start -->
        <div class="section overlay overlay-dark-60" id="section0">
            <!-- home bg start -->
            <div class="section-bg-home" style="background-image: url('assets/img/blog/blog-inside-post.jpg');">
            </div>
            <!-- home bg end -->
            <!-- intro wrapper start -->
            <div class="intro-wrapper fadeIn-element">
                <!-- center container start -->
                <div class="center-container-home">
                    <!-- center block start -->
                    <div class="center-block-home">

                        <!-- intro title start -->
                        <div id="intro-title">
                            <img src="assets/img/sidoarjo.png" width="200px">
                        </div>
                        <!-- intro title end -->

                        <!-- intro subtitle start -->
                        <div class="intro-subtitle">

                        </div>
                        <!-- intro subtitle end -->
                    </div>
                    <!-- center block end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- intro wrapper end -->

            <!-- bottom credits start -->
            <div class="bottom-credits fadeIn-element">
                <a class="link-underline" href="#">Organisasi Perangkat Daerah Kabupaten Sidoarjo</a> &copy; 2024 All
                Rights Reserved.
            </div>
            <!-- bottom credits end -->

            <!-- scroll indicator start -->
            <div class="scroll-indicator-wrapper fadeIn-element">
                <div class="scroll-indicator"></div>
            </div><!-- scroll indicator end -->
        </div>
        <!-- section home end -->

        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>NEWS</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">
                        <!-- launch full start -->
                        <div class="launch-container">
                            <!-- news -->
                            <!-- Latest News Start -->
                            <div class="container-fluid latest-news py-5">
                                <div class="container py-5">
                                    <h2 class="mb-4 text-white">CARI BERITA LAIN</h2>
                                    <div class="mt-lg-5 pt-lg-5 latest-news-carousel owl-carousel">
                                        <div class="latest-news-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="assets/img/news/news-7.jpg"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4 text-black">Lorem Ipsum is simply dummy
                                                        text
                                                        of...</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="small text-body link-hover">by Willum
                                                            Skeem</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="assets/img/news/news-6.jpg"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4 text-black">Lorem Ipsum is simply dummy
                                                        text
                                                        of...</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="small text-body link-hover">by Willum
                                                            Skeem</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="assets/img/news/news-3.jpg"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4 text-black">Lorem Ipsum is simply dummy
                                                        text
                                                        of...</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="small text-body link-hover">by Willum
                                                            Skeem</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="assets/img/news/news-4.jpg"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4 text-black">Lorem Ipsum is simply dummy
                                                        text
                                                        of...</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="small text-body link-hover">by Willum
                                                            Skeem</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="latest-news-item">
                                            <div class="bg-light rounded">
                                                <div class="rounded-top overflow-hidden">
                                                    <img src="assets/img/news/news-5.jpg"
                                                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    <a href="#" class="h4 text-black ">Lorem Ipsum is simply dummy
                                                        text
                                                        of...</a>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="#" class="small text-body link-hover">by Willum
                                                            Skeem</a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                            2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Latest News End -->


                            <!-- end news -->


                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->


        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Calender</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">

                        <!-- launch full start -->
                        <div class="launch-container">


                            <h1 class="center-container center-block pt-5 mt-5 mb-lg-5 pb-lg-5" style="color:#ffff ;">
                                CALENDAR BERITA
                            </h1>


                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <!-- modal Calender -->
                            <div class="container mt-lg-5" id='calendar'></div>

                            <div class="modal fade edit-form" id="form" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title " id="modal-title">Add Event</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div> -->
                                        <!-- <form id="myForm">
                                            <div class="modal-body">
                                                <div class="alert alert-danger " role="alert" id="danger-alert"
                                                    style="display: none;">
                                                    End date should be greater than start date.
                                                </div>
                                                <div class="form-group">
                                                    <label for="event-title">Event name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="event-title"
                                                        placeholder="Enter event name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start-date">Start date <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="start-date"
                                                        placeholder="start-date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="end-date">End date - <small
                                                            class="text-muted">Optional</small></label>
                                                    <input type="date" class="form-control" id="end-date"
                                                        placeholder="end-date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="event-color">Color</label>
                                                    <input type="color" class="form-control" id="event-color"
                                                        value="#3788d8">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success"
                                                    id="submit-button">Submit</button>
                                            </div>
                                        </form> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <!-- <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog"
                                aria-labelledby="delete-modal-title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center" id="delete-modal-body">
                                            Are you sure you want to delete the event?
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-secondary rounded-sm"
                                                data-dismiss="modal" id="cancel-button">Cancel</button>
                                            <button type="button" class="btn btn-danger rounded-lg"
                                                id="delete-button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->

        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Calender</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">
                        <!-- launch full start -->
                        <div class="launch-container">
                            <!-- <h1 class="center-container center-block pt-5 mt-5" style="color:#ffff ;">CALENDER ACADEMIK
                                2
                            </h1> -->

                            <br>
                            <section class="ftco-section">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-3 text-center mb-3">
                                            <!-- <h1 class="heading-section text-white">Calendar #04</h1> -->
                                            <h1 class="heading-section text-white">Calendar BERITA</h1>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="content w-100">
                                                <div class="calendar-container rounded-3">
                                                    <div class="calendar">
                                                        <div class="year-header">
                                                            <span class="left-button fa fa-chevron-left" id="prev">
                                                            </span>
                                                            <span class="year" id="label"></span>
                                                            <span class="right-button fa fa-chevron-right" id="next">
                                                            </span>
                                                        </div>
                                                        <table class="months-table w-100">
                                                            <tbody>
                                                                <tr class="months-row">
                                                                    <td class="month">Jan</td>
                                                                    <td class="month">Feb</td>
                                                                    <td class="month">Mar</td>
                                                                    <td class="month">Apr</td>
                                                                    <td class="month">May</td>
                                                                    <td class="month">Jun</td>
                                                                    <td class="month">Jul</td>
                                                                    <td class="month">Aug</td>
                                                                    <td class="month">Sep</td>
                                                                    <td class="month">Oct</td>
                                                                    <td class="month">Nov</td>
                                                                    <td class="month">Dec</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <table class="days-table w-100">
                                                            <td class="day">Sun</td>
                                                            <td class="day">Mon</td>
                                                            <td class="day">Tue</td>
                                                            <td class="day">Wed</td>
                                                            <td class="day">Thu</td>
                                                            <td class="day">Fri</td>
                                                            <td class="day">Sat</td>
                                                        </table>
                                                        <div class="frame">
                                                            <table class="dates-table w-100">
                                                                <tbody class="tbody">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <button class="button" id="add-button">Add Event</button>
                                                    </div>
                                                </div>
                                                <div class="events-container">
                                                </div>
                                                <div class="dialog" id="dialog">
                                                    <h2 class="dialog-header"> Add New Event </h2>
                                                    <form class="form" id="form">
                                                        <div class="form-container" align="center">
                                                            <label class="form-label" id="valueFromMyButton"
                                                                for="name">Event name</label>
                                                            <input class="input" type="text" id="name" maxlength="36">
                                                            <label class="form-label" id="valueFromMyButton"
                                                                for="count">Number of people to invite</label>
                                                            <input class="input" type="number" id="count" min="0"
                                                                max="1000000" maxlength="7">
                                                            <input type="button" value="Cancel" class="button"
                                                                id="cancel-button">
                                                            <input type="button" value="OK" class="button button-white"
                                                                id="ok-button">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Dialog Box-->
                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->

        <!-- section about start -->
        <div class="section" id="section1">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Pimpinan</span>
            </div>
            <!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-6 col-sm-6 col-sm-push-6 nopadding">
                        <!-- about right start -->
                        <div class="slick-about">
                            <!-- about content wrapper start -->
                            <div class="about-content-wrapper">
                                <div class="about-content">
                                    <div class="about-content-inner">
                                        <!-- about content start -->
                                        <h2
                                            class="section-subheading section-subheading-about section-subheading-light">
                                            <span>pimpinan</span>
                                        </h2>
                                        <h2 class="section-heading-about section-heading-light">
                                            Profil Pimpinan
                                        </h2>
                                        <p class="about-txt">
                                            bob is a platform with a network of retail trading investors seeking to
                                            invest in the stock market via automation and predefined trading
                                            strategie.
                                        </p>
                                        <!-- about content end -->
                                    </div>
                                </div>
                            </div>
                            <!-- about content wrapper end -->
                        </div>
                        <!-- about right end -->
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-md-6 col-sm-6 col-sm-pull-6 nopadding bg-black">
                        <!-- about left start -->
                        <div class="d-flex justify-content-center align-items-center w-100 h-100">
                            <img src="assets/img/team/team-1.jpg" class="rounded" width="400px">
                        </div>
                        <!-- <div class="overlay overlay-inverse-dark-35">
                                <div class="about-bg-wrapper">
                                    <div class="about-bg"></div>
                                </div>
                            </div> -->
                        <!-- about left end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section about end -->

        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Layanan</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">
                        <!-- launch full start -->
                        <div class="launch-container">

                            <!-- center container start -->
                            <div class="center-container galery d-flex justify-content-center align-items-center gap-3">
                                <div>
                                    <img src="assets/img/blog/blog-1.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-2.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-3.jpg" class="rounded">
                                </div>
                            </div>
                            <!-- center container end -->

                            <!-- launch bg start -->
                            <!-- <div class="overlay overlay-dark-60">
                                    <div class="launch-bg-wrapper">
                                        <div class="launch-bg"></div>
                                    </div>
                                </div> -->
                            <!-- launch bg end -->
                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->
        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Galery</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">
                        <!-- launch full start -->
                        <div class="launch-container">

                            <!-- center container start -->
                            <div class="center-container galery d-flex justify-content-center align-items-center gap-3">
                                <div>
                                    <img src="assets/img/blog/blog-1.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-2.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-3.jpg" class="rounded">
                                </div>
                            </div>
                            <!-- center container end -->

                            <!-- launch bg start -->
                            <!-- <div class="overlay overlay-dark-60">
                                    <div class="launch-bg-wrapper">
                                        <div class="launch-bg"></div>
                                    </div>
                                </div> -->
                            <!-- launch bg end -->
                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->
        <!-- section launch start -->
        <div class="section" id="section3">
            <!-- section title start -->
            <div class="section-title-vertical">
                <span>Galery</span>
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 nopadding">
                        <!-- launch full start -->
                        <div class="launch-container">

                            <!-- center container start -->
                            <div class="center-container galery d-flex justify-content-center align-items-center gap-3">
                                <div>
                                    <img src="assets/img/blog/blog-1.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-2.jpg" class="rounded">
                                </div>
                                <div>
                                    <img src="assets/img/blog/blog-3.jpg" class="rounded">
                                </div>
                            </div>
                            <!-- center container end -->

                            <!-- launch bg start -->
                            <!-- <div class="overlay overlay-dark-60">
                                    <div class="launch-bg-wrapper">
                                        <div class="launch-bg"></div>
                                    </div>
                                </div> -->
                            <!-- launch bg end -->
                        </div>
                        <!-- launch full end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section launch end -->



        <!-- section contact start -->
        <div class="section" id="section4">
            <!-- section title start -->
            <div class="section-title-vertical">
                <!-- <span>Contact</span> -->
            </div><!-- section title end -->
            <!-- container start -->
            <div class="container-fluid sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-6 col-sm-6 nopadding">
                        <!-- contact left start -->
                        <div class="contact-container contact-reset">
                            <!-- center container start -->
                            <div class="center-container">
                                <!-- center block start -->
                                <div class="center-block">
                                    <p class="contact-txt">
                                        <span class="contact-info-mail"><a
                                                class="link-underline link-underline-dark">KONTAK KAMI</a></span>
                                        <span>
                                            Dinas Informatika dan Komunikasi<br>
                                            Jl. Diponegoro No. 139 Sidoarjo 61213
                                        </span>
                                    </p>
                                    <!-- contact social icons start -->
                                    <div class="social-icons-contact-wrapper">
                                        <ul class="social-icons-contact">
                                            <li class="social-icon">
                                                <a class="bx bxl-twitter" href="#"></a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="bx bxl-facebook" href="#"></a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="bx bxl-youtube" href="#"></a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="bx bxl-whatsapp" href="#"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- contact social icons end -->
                                </div>
                                <!-- center block end -->
                            </div>
                            <!-- center container end -->
                        </div>
                        <!-- contact left end -->
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-md-6 col-sm-6 nopadding bg-white">
                        <!-- contact right start -->
                        <!-- contact right end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- section contact end -->
    </div>
    <!-- fullPage end -->
    <!-- scripts start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/js/news.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/dexa.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const myModal = new bootstrap.Modal(document.getElementById('form'));
        const dangerAlert = document.getElementById('danger-alert');
        const close = document.querySelector('.btn-close');




        const myEvents = JSON.parse(localStorage.getItem('events')) || [{
                id: uuidv4(),
                title: `Edit Me`,
                start: '2023-04-11',
                backgroundColor: 'red',
                allDay: false,
                editable: false,
            },
            {
                id: uuidv4(),
                title: `Delete me`,
                start: '2023-04-17',
                end: '2023-04-21',

                allDay: false,
                editable: false,
            },
        ];


        const calendar = new FullCalendar.Calendar(calendarEl, {
            // customButtons: {
            //     customButton: {
            //         text: 'Add Event',
            //         click: function() {
            //             myModal.show();
            //             const modalTitle = document.getElementById('modal-title');
            //             const submitButton = document.getElementById('submit-button');
            //             modalTitle.innerHTML = 'Add Event'
            //             submitButton.innerHTML = 'Add Event'
            //             submitButton.classList.remove('btn-primary');
            //             submitButton.classList.add('btn-success');



            //             close.addEventListener('click', () => {
            //                 myModal.hide()
            //             })



            //         }
            //     }
            // },
            header: {
                center: 'customButton', // add your custom button here
                right: 'today, prev,next '
            },
            plugins: ['dayGrid', 'interaction'],
            allDay: false,
            editable: true,
            selectable: true,
            unselectAuto: false,
            displayEventTime: false,
            events: myEvents,
            eventRender: function(info) {
                info.el.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                    let existingMenu = document.querySelector(
                        '.context-menu');
                    existingMenu && existingMenu.remove();
                    let menu = document.createElement('div');
                    menu.className = 'context-menu';
                    menu.innerHTML = `<ul>
        <li><i class="fas fa-edit"></i>Edit</li>
        <li><i class="fas fa-trash-alt"></i>Delete</li>
        </ul>`;

                    const eventIndex = myEvents.findIndex(event => event
                        .id === info.event
                        .id);


                    document.body.appendChild(menu);
                    menu.style.top = e.pageY + 'px';
                    menu.style.left = e.pageX + 'px';

                    // Edit context menu

                    menu.querySelector('li:first-child').addEventListener(
                        'click',
                        function() {
                            menu.remove();

                            const editModal = new bootstrap.Modal(
                                document
                                .getElementById('form'));
                            const modalTitle = document.getElementById(
                                'modal-title');
                            const titleInput = document.getElementById(
                                'event-title');
                            const startDateInput = document
                                .getElementById(
                                    'start-date');
                            const endDateInput = document
                                .getElementById('end-date');
                            const colorInput = document.getElementById(
                                'event-color');
                            const submitButton = document
                                .getElementById(
                                    'submit-button');
                            const cancelButton = document
                                .getElementById(
                                    'cancel-button');
                            modalTitle.innerHTML = 'Edit Event';
                            titleInput.value = info.event.title;
                            startDateInput.value = moment(info.event
                                .start).format(
                                'YYYY-MM-DD');
                            endDateInput.value = moment(info.event.end,
                                    'YYYY-MM-DD')
                                .subtract(1, 'day').format(
                                    'YYYY-MM-DD');
                            colorInput.value = info.event
                                .backgroundColor;
                            submitButton.innerHTML = 'Save Changes';





                            editModal.show();

                            submitButton.classList.remove('btn-success')
                            submitButton.classList.add('btn-primary')

                            // Edit button

                            submitButton.addEventListener('click',
                                function() {
                                    const updatedEvents = {
                                        id: info.event.id,
                                        title: titleInput.value,
                                        start: startDateInput
                                            .value,
                                        end: moment(endDateInput
                                                .value,
                                                'YYYY-MM-DD')
                                            .add(1, 'day')
                                            .format(
                                                'YYYY-MM-DD'),
                                        backgroundColor: colorInput
                                            .value
                                    }

                                    if (updatedEvents.end <=
                                        updatedEvents
                                        .start
                                    ) { // add if statement to check end date
                                        dangerAlert.style.display =
                                            'block';
                                        return;
                                    }

                                    const eventIndex = myEvents
                                        .findIndex(event =>
                                            event.id ===
                                            updatedEvents.id);
                                    myEvents.splice(eventIndex, 1,
                                        updatedEvents);

                                    localStorage.setItem('events',
                                        JSON.stringify(
                                            myEvents));

                                    // Update the event in the calendar
                                    const calendarEvent = calendar
                                        .getEventById(info
                                            .event.id);
                                    calendarEvent.setProp('title',
                                        updatedEvents
                                        .title);
                                    calendarEvent.setStart(
                                        updatedEvents.start);
                                    calendarEvent.setEnd(
                                        updatedEvents.end);
                                    calendarEvent.setProp(
                                        'backgroundColor',
                                        updatedEvents
                                        .backgroundColor);



                                    editModal.hide();

                                })



                        });

                    // Delete menu
                    menu.querySelector('li:last-child').addEventListener(
                        'click',
                        function() {
                            const deleteModal = new bootstrap.Modal(
                                document
                                .getElementById('delete-modal'));
                            const modalBody = document.getElementById(
                                'delete-modal-body');
                            const cancelModal = document.getElementById(
                                'cancel-button');
                            modalBody.innerHTML =
                                `Are you sure you want to delete <b>"${info.event.title}"</b>`
                            deleteModal.show();

                            const deleteButton = document
                                .getElementById(
                                    'delete-button');
                            deleteButton.addEventListener('click',
                                function() {
                                    myEvents.splice(eventIndex, 1);
                                    localStorage.setItem('events',
                                        JSON.stringify(
                                            myEvents));
                                    calendar.getEventById(info.event
                                        .id).remove();
                                    deleteModal.hide();
                                    menu.remove();

                                });

                            cancelModal.addEventListener('click',
                                function() {
                                    deleteModal.hide();
                                })




                        });
                    document.addEventListener('click', function() {
                        menu.remove();
                    });
                });
            },

            eventDrop: function(info) {
                let myEvents = JSON.parse(localStorage.getItem('events')) || [];
                const eventIndex = myEvents.findIndex(event => event.id === info
                    .event.id);
                const updatedEvent = {
                    ...myEvents[eventIndex],
                    id: info.event.id,
                    title: info.event.title,
                    start: moment(info.event.start).format('YYYY-MM-DD'),
                    end: moment(info.event.end).format('YYYY-MM-DD'),
                    backgroundColor: info.event.backgroundColor
                };
                myEvents.splice(eventIndex, 1,
                    updatedEvent); // Replace old event data with updated event data
                localStorage.setItem('events', JSON.stringify(myEvents));
                console.log(updatedEvent);
            }

        });

        calendar.on('select', function(info) {

            const startDateInput = document.getElementById('start-date');
            const endDateInput = document.getElementById('end-date');
            startDateInput.value = info.startStr;
            const endDate = moment(info.endStr, 'YYYY-MM-DD').subtract(1, 'day').format(
                'YYYY-MM-DD');
            endDateInput.value = endDate;
            if (startDateInput.value === endDate) {
                endDateInput.value = '';
            }
        });


        calendar.render();

        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // prevent default form submission

            // retrieve the form input values
            const title = document.querySelector('#event-title').value;
            const startDate = document.querySelector('#start-date').value;
            const endDate = document.querySelector('#end-date').value;
            const color = document.querySelector('#event-color').value;
            const endDateFormatted = moment(endDate, 'YYYY-MM-DD').add(1, 'day').format(
                'YYYY-MM-DD');
            const eventId = uuidv4();

            console.log(eventId);

            if (endDateFormatted <= startDate) { // add if statement to check end date
                dangerAlert.style.display = 'block';
                return;
            }

            const newEvent = {
                id: eventId,
                title: title,
                start: startDate,
                end: endDateFormatted,
                allDay: false,
                backgroundColor: color
            };

            // add the new event to the myEvents array
            myEvents.push(newEvent);

            // render the new event on the calendar
            calendar.addEvent(newEvent);

            // save events to local storage
            localStorage.setItem('events', JSON.stringify(myEvents));

            myModal.hide();
            form.reset();
        });

        myModal._element.addEventListener('hide.bs.modal', function() {
            dangerAlert.style.display = 'none';
            form.reset();
        });

    });
    </script>


    <!-- scripts end -->
</body>

</html>
<!-- partial -->