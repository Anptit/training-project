<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <div class="container">
        @include('layouts.heading')
        <div class="banner">
            <div class="banner_intro">
                <div class="banner_intro_sub-content">
                    <h1 class="banner_intro_sub-content-title">
                        Let Your Home Be Unique
                    </h1>
                    <p class="banner_intro_sub-content-description">
                        There are many variations of the passages of lorem lpsum fromavailable, variations of the
                        passages
                    </p>
                </div>
                <button class="banner_intro_button">
                    <p class="banner_intro_button-text">Get started</p>
                    <i class="fa-solid fa-arrow-right banner_intro_button-img"></i>
                </button>
            </div>
            <div class="banner_image">
                <img src="/assets/images/Photo.png" alt="">
            </div>
        </div>
        <div class="content-container">
            <div class="content_work">
                <div class="content_work_list-item">
                    <div class="content_work_list-item-content">
                        <h3 class="content_work_list-item-content-title">Project plan</h3>
                        <p class="content_work_list-item-content-description">There are many variations of the
                            passages
                            of lorem Ipsum from
                            available, majority.</p>
                    </div>
                    <button class="content_work_list-item-btn">
                        <p class="content_work_list-item-btn-title">Read more</p>
                        <i class="fa-solid fa-arrow-right content_work_list-item-btn-img"></i>
                    </button>
                </div>
                <div class="content_work_list-item">
                    <div class="content_work_list-item-content">
                        <h3 class="content_work_list-item-content-title">Interior Work</h3>
                        <p class="content_work_list-item-content-description">There are many variations of the
                            passages
                            of lorem Ipsum from
                            available, majority.</p>
                    </div>
                    <button class="content_work_list-item-btn">
                        <p class="content_work_list-item-btn-title">Read more</p>
                        <i class="fa-solid fa-arrow-right content_work_list-item-btn-img"></i>
                    </button>
                </div>
                <div class="content_work_list-item">
                    <div class="content_work_list-item-content">
                        <h3 class="content_work_list-item-content-title">Realization</h3>
                        <p class="content_work_list-item-content-description">There are many variations of the
                            passages
                            of lorem Ipsum from
                            available, majority.</p>
                    </div>
                    <button class="content_work_list-item-btn">
                        <p class="content_work_list-item-btn-title">Read more</p>
                        <i class="fa-solid fa-arrow-right content_work_list-item-btn-img"></i>
                    </button>
                </div>
            </div>
            <div class="content_about-us">
                <div class="content_about-us_content">
                    <div class="content_about-us_content_text">
                        <h2 class="content_about-us_content_text-title">
                            We Create The Art Of Stylish Living Stylishly
                        </h2>
                        <p class="content_about-us_content_text-description">
                            It is a long established fact that a reader will be distracted by the of readable content of
                            a page
                            when lookings at its layouts the points of using
                            that it has a more-or-less normal.
                        </p>
                    </div>
                    <div class="content_about-us_content_btn">
                        <div class="content_about-us_content_btn-call">
                            <img class="content_about-us_content_btn-call-icon" src="/assets/images/CallIcon.png"
                                alt="">
                            <div class="content_about-us_content_btn-call_content">
                                <h3 class="content_about-us_content_btn-call_content-telephone">
                                    0123456789
                                </h3>
                                <h3 class="content_about-us_content_btn-call_content-title">
                                    Call Us Anytime
                                </h3>
                            </div>
                        </div>
                        <button class="content_about-us_content_btn_button">
                            <p class="content_about-us_content_btn_button-title">
                                Get Free Estimate
                            </p>
                            <i class="fa-solid fa-arrow-right content_about-us_content_btn_button-img"></i>
                        </button>
                    </div>
                </div>
                <div class="content_about-us_img">
                    <img src="/assets/images/Aboutus.png" alt="" class="content_about-us_img-background">
                </div>
            </div>
            <div class="content__testimonial">
                <div class="content__testimonial__body">
                    <div class="content__testimonial__body__heading">
                        <h2 class="content__testimonial__body__heading--text">
                            What the People Thinks About Us
                        </h2>
                    </div>
                    <div class="content__testimonial__body__testimonial">
                        <ul class="content__testimonial__body__testimonial--list">
                            <li class="content__testimonial__body__testimonial--list-item">
                                <div class="content__testimonial__body__testimonial--list-item-content">
                                    <div class="content__testimonial__body__testimonial--list-item-content-info">
                                        <img src="/assets/avatars/Avatar.png" alt=""
                                            class="content__testimonial__body__testimonial--list-item-content-info-img">
                                        <div
                                            class="content__testimonial__body__testimonial--list-item-content-info-identifier">
                                            <h4
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-name">
                                                Nattasha Mith
                                            </h4>
                                            <p
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-address">
                                                Sydney, USA
                                            </p>
                                        </div>
                                    </div>
                                    <p class="content__testimonial__body__testimonial--list-item-content-description">
                                        Lorem Ipsum is simply dummy
                                        text of the typesetting industry.
                                        Ipsum has been.
                                    </p>
                                </div>
                            </li>
                            <li class="content__testimonial__body__testimonial--list-item">
                                <div class="content__testimonial__body__testimonial--list-item-content">
                                    <div class="content__testimonial__body__testimonial--list-item-content-info">
                                        <img src="/assets/avatars/Avatar2.png" alt=""
                                            class="content__testimonial__body__testimonial--list-item-content-info-img">
                                        <div
                                            class="content__testimonial__body__testimonial--list-item-content-info-identifier">
                                            <h4
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-name">
                                                Raymond Galario
                                            </h4>
                                            <p
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-address">
                                                Sydney, Australia
                                            </p>
                                        </div>
                                    </div>
                                    <p class="content__testimonial__body__testimonial--list-item-content-description">
                                        Lorem Ipsum is simply dummy
                                        text of the typesetting industry.
                                        Ipsum has been scrambled it
                                        to make a type book.
                                    </p>
                                </div>
                            </li>
                            <li class="content__testimonial__body__testimonial--list-item">
                                <div class="content__testimonial__body__testimonial--list-item-content">
                                    <div class="content__testimonial__body__testimonial--list-item-content-info">
                                        <img src="/assets/avatars/Avatar3.png" alt=""
                                            class="content__testimonial__body__testimonial--list-item-content-info-img">
                                        <div
                                            class="content__testimonial__body__testimonial--list-item-content-info-identifier">
                                            <h4
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-name">
                                                Benny Roll
                                            </h4>
                                            <p
                                                class="content__testimonial__body__testimonial--list-item-content-info-identifier-address">
                                                Sydney, New York
                                            </p>
                                        </div>
                                    </div>
                                    <p class="content__testimonial__body__testimonial--list-item-content-description">
                                        Lorem Ipsum is simply dummy
                                        text of the typesetting industry.
                                        Ipsum has been scrambled.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content__client__logo">
                <ul class="content__client__logo--list">
                    <li class="content__client__logo--list-item">
                        <img src="/assets/logo/apple.png" alt=""
                            class="content__client__logo--list-item-img">
                    </li>
                    <li class="content__client__logo--list-item">
                        <img src="/assets/logo/adidas.png" alt=""
                            class="content__client__logo--list-item-img">
                    </li>
                    <li class="content__client__logo--list-item">
                        <img src="/assets/logo/pepsi.png" alt=""
                            class="content__client__logo--list-item-img">
                    </li>
                    <li class="content__client__logo--list-item">
                        <img src="/assets/logo/starbuck.png" alt=""
                            class="content__client__logo--list-item-img">
                    </li>
                    <li class="content__client__logo--list-item">
                        <img src="/assets/logo/tiktok.jpg" alt=""
                            class="content__client__logo--list-item-img">
                    </li>
                </ul>
            </div>
            <div class="content__project">
                <div class="content__project__heading">
                    <h2 class="content__project__heading-title">
                        Follow Our Projects
                    </h2>
                    <p class="content__project__heading-description">
                        It is a long established fact that a reader will be distracted
                        by the of readable content of page lookings at its layouts points.
                    </p>
                </div>
                <div class="content__project__body">
                    <div class="content__project__body--content">
                        <div class="content__project__body--content-info">
                            <img src="/assets/project/p1.png" alt=""
                                class="content__project__body--content-info-img">
                            <div class="content__project__body--content-text">
                                <div class="content__project__body--content-text-background">
                                    <h4 class="content__project__body--content-text-background-title">
                                        Modern Kitchan
                                    </h4>
                                    <p class="content__project__body--content-text-background-description">
                                        Decor / Artchitecture
                                    </p>
                                </div>
                                <button class="content__project__body--content-text-btn">
                                    <i
                                        class="fa-solid fa-angle-right content__project__body--content-text-btn-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="content__project__body--content-info">
                            <img src="/assets/project/p2.png" alt=""
                                class="content__project__body--content-info-img">
                            <div class="content__project__body--content-text">
                                <div class="content__project__body--content-text-background">
                                    <h4 class="content__project__body--content-text-background-title">
                                        Modern Kitchan
                                    </h4>
                                    <p class="content__project__body--content-text-background-description">
                                        Decor / Artchitecture
                                    </p>
                                </div>
                                <button class="content__project__body--content-text-btn">
                                    <i
                                        class="fa-solid fa-angle-right content__project__body--content-text-btn-icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="content__project__body--content">
                        <div class="content__project__body--content-info">
                            <img src="/assets/project/p3.png" alt=""
                                class="content__project__body--content-info-img">
                            <div class="content__project__body--content-text">
                                <div
                                    class="content_content__project__body--content-info_project__body--content-text-background">
                                    <h4 class="content__project__body--content-text-background-title">
                                        Modern Kitchan
                                    </h4>
                                    <p class="content__project__body--content-text-background-description">
                                        Decor / Artchitecture
                                    </p>
                                </div>
                                <button class="content__project__body--content-text-btn">
                                    <i
                                        class="fa-solid fa-angle-right content__project__body--content-text-btn-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="content__project__body--content-info">
                            <img src="/assets/project/p4.png" alt=""
                                class="content__project__body--content-info-img">
                            <div class="content__project__body--content-text">
                                <div class="content__project__body--content-text-background">
                                    <h4 class="content__project__body--content-text-background-title">
                                        Modern Kitchan
                                    </h4>
                                    <p class="content__project__body--content-text-background-description">
                                        Decor / Artchitecture
                                    </p>
                                </div>
                                <button class="content__project__body--content-text-btn">
                                    <i
                                        class="fa-solid fa-angle-right content__project__body--content-text-btn-icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter">
            <ul class="counter__list">
                <li class="counter__list-item">
                    <div class="counter__list-item-content">
                        <h1 class="counter__list-item-content-title">12</h1>
                        <p class="counter__list-item-content-description">
                            Years Of Experiance
                        </p>
                    </div>
                </li>
                <li class="counter__list-item">
                    <div class="counter__list-item-content">
                        <h1 class="counter__list-item-content-title">85</h1>
                        <p class="counter__list-item-content-description">
                            Success Project
                        </p>
                    </div>
                </li>
                <li class="counter__list-item">
                    <div class="counter__list-item-content">
                        <h1 class="counter__list-item-content-title">15</h1>
                        <p class="counter__list-item-content-description">
                            Active Project
                        </p>
                    </div>
                </li>
                <li class="counter__list-item">
                    <div class="counter__list-item-content">
                        <h1 class="counter__list-item-content-title">95</h1>
                        <p class="counter__list-item-content-description">
                            Happy Customers
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="conclusion">
            <div class="conclusion-blog">
                
            </div>
            <div class="conclusion-contact">

            </div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
