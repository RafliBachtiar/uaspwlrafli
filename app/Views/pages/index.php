<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>3 Second</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo nobis facere officia maiores consequatur dolore modi deleniti et quod officiis ab consequuntur quas, totam vero atque distinctio veniam vitae similique?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider1.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single-slide-item slide2">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>Polo</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt a molestias fugiat illum dolor? Perspiciatis nihil repellendus facere nostrum. Atque, nihil molestiae et nobis facere quisquam veniam voluptate velit cupiditate!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider2.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>