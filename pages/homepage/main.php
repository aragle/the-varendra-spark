<?php
    include 'pages/homepage/corousel.php';
?>


<style>
.border-bottom {
    border-bottom: 0.1px solid #464646 !important;
}

.col-lg-4 {
    max-width: 31.9%
}

@media screen and (max-width: 767px) {
    .col-lg-4 {
        max-width: 100%
    }
    .container{
        max-width: 100% !important;
    }
}

.content-border {
        border: 0.1px solid #464646 !important;
        margin: 0px 5px;
    }


.content-padding {
    border-radius: 10px;
}

.post-padding {
    padding: 20px;
}

.menu-title {
    font-size: 22px;
    padding: 22px 25px;
    background-color: #212529;
    color: white;
    border-bottom: 0.1px solid #464646;
    border-radius: 10px 10px 0px 0px;
    margin-bottom: 0px;
}

.menu-foot {
    font-weight: bold;
    color: #ffffffcc;
    bottom: 0px;
    text-align: center;
    padding: 10px;
    background: #ffffff11;
    border-radius: 0px 0px 10px 10px;
}

.menu-foot:hover {
    background: #ffffff22;
}

.content-menu-title {
    font-size: 22px;
    background-color: #212529;
    color: white;
    border-bottom: 0.1px solid #464646;
    margin-bottom: 20px;
    padding: 22px 5px;
}

.sidebar-news {
    padding: 0;
    border-radius: 10px;
    background: #212529;
}
</style>


<!--Main layout-->
<main class="my-3">
    <div class="container">
        <!--Section: Content-->
        <section>
            <div class="row gx-lg-5">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 bg-dark content-border content-padding">
                    <h1 class="content-menu-title">
                        Journals
                    </h1>
                    <!-- News block -->
                    <div class="post-padding">
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/fluid/city/113.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" class="text-info">
                                    <i class="fas fa-star"></i>
                                    Featured
                                </a>
                            </div>

                            <div class="col-6 text-end">
                                See all >
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" class="text-white-50">
                            <h5>This is title of the news</h5>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                adipisci iusto nam temporibus modi animi laboriosam?
                            </p>
                        </a>

                        <hr />

                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>


                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>


                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <!-- News block -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 bg-dark content-border content-padding">
                    <h1 class="content-menu-title">
                        Community Posts
                    </h1>
                    <!-- News block -->
                    <div class="post-padding">
                        <!-- Featured image -->
                        <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                            data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/fluid/city/011.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" class="text-danger">
                                    <i class="fas fa-star"></i>
                                    Featured
                                </a>
                            </div>

                            <div class="col-6 text-end">
                                See all >
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" class="text-white-50">
                            <h5>This is title of the news</h5>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                adipisci iusto nam temporibus modi animi laboriosam?
                            </p>
                        </a>

                        <hr />

                        <!-- News -->
                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/031.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- News -->
                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/032.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- News -->
                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/033.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>

                        <!-- News -->
                        <a href="" class="text-white-50">
                            <div class="row mb-4 border-bottom pb-2">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/new/standard/city/034.jpg"
                                        class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
                                    <p>
                                        aratheunseen
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- News block -->
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 sidebar-news content-border">
                    <h1 class="menu-title">
                        News and Events
                    </h1>
                    <rssapp-feed id="ch7eZITZqBut1OkI"></rssapp-feed>
                    <script src="https://widget.rss.app/v1/feed.js" type="text/javascript" async></script>
                    <a href="news-and-events.php">
                        <p class="menu-foot">See More News and Events</p>
                    </a>
                </div>
            </div>
        </section>
        <!--Section: Content-->
    </div>
</main>
<!--Main layout-->