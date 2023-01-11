<x-master-frontend>
<!--   Banner area Start-->
<section class="banner-area overflow-hidden">
    <!-- start of hero -->
    <section class="hero-slider hero-style">
        <div class="banner-overlay"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="{{ asset('storage/banners/'.$banner->image) }}">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h1 class="color-white">{{ $banner->title }}</br>
                                        with Technology</h1>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>{{ $banner->description }}</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">{{ $banner->button }} <i
                                            class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end slide-inner -->
                    </div>
                    <!-- end swiper-slide -->
                @endforeach

                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- end of hero slider -->
</section>
<!--   Banner area End-->
<!--   Who-we-are area Start-->
<section class="who-area pt-110 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="who-left animate__animated animate__fadeInLeft">
                    <h6 class="color-blue">WHO WE ARE</h6>
                    <h2>Innovative</br>
                        Strategic</br>
                        Creative</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="who-right animate__animated animate__fadeInRight">
                    <p>Welcome to Mind Orbital Technologies Ltd. One of the best Software It Farm in Bangladesh.
                        Where we prioritize your ideas and Choices. All the project is created very creatively and
                        we maintain some strategic plan so that the projects are standardized and acceptable to you.
                        We handle every clients in a very fast and responsive way which is very different from
                        others. We know how important your projects are to you so we monitor and create any project
                        very carefully. We are promising for Web Development, Mobile application, Big Data
                        Analytics, Chatbots, Web Security,
                        Embedded Systems which will create a new dimension in the field of software technology and
                        in your business.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="who-item text-center animate__animated animate__slideInUp animation-duration: 5s;">
                    <i class="fa-solid fa-laptop-code"></i>
                    <h4>Web Design UI</h4>
                    <p>Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="who-item text-center animate__animated animate__slideInUp animation-duration: 1s;">
                    <i class="fa-solid fa-fingerprint"></i>
                    <h4>Print design</h4>
                    <p>Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="who-item text-center animate__animated animate__slideInUp animation-duration: 1.5s;">
                    <i class="fa-solid fa-chalkboard"></i>
                    <h4>Visual Design</h4>
                    <p>Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been</p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="who-item text-center animate__animated animate__slideInUp animation-duration: 2s;">
                    <i class="fa-solid fa-database"></i>
                    <h4> UI Designer</h4>
                    <p>Lorem Ipsum is simply dummy typesetting industry. Lorem Ipsum has been</p>
                </div>
            </div>
        </div>
    </div>
    <div class="who-shape-1">
        <img src="{{ asset('ui/frontend') }}/img/what-we-are-shape-1.png" alt="">
    </div>
    <div class="who-shape-2">
        <img src="{{ asset('ui/frontend') }}/img/what-we-are-shape-2.png" alt="">
    </div>
</section>
<!--   Who-we-are area End-->
<!--   Solution area Start-->
<section class="solution-area ">
    <div class="solution-color pt-110">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="solution-content">
                        <h2 class="color-white">Get Better Solution For your Business</h2>
                        <p class="color-white">Make your business to the next level. We offer better quality,
                            creative
                            ideas and innovation
                            strategy
                            for the better solution of your businesses.</p>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</section>
<!--   Solution area End-->
<!--   Services area Start-->
<section-services-area>
    <div class="services-title text-center pt-110">
        <div class="ring-shape"></div>
        <h6 class="color-white">OUR LATEST SERVICES</h6>
        <h2 class="color-white title-offfer">We Offer Better Solution For</br> Your IT Business</h2>
    </div>
    <div class="container">
        <div class="row services-item">
            @foreach ($services as $service)
            <div class="col-md-4 mb-55">
                <div class="animate__animated animate__slideInUp">
                    <img src="{{ asset('storage/services/'.$service->image) }}" class="card-img-top"
                        alt="...">
                    <div class="text-left">
                        <h4 class="card-title">{{ $service->title }}</h4>
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section-services-area>
<!--   Services area End-->
<!--   Why-choose area Start-->
<section class="why-choose-area">
    <div class="container">
        <div class="why-choose-content text-center">
            <h6 class="color-white">WHY CHOOSE US</h6>
            <h2 class="color-white">Let Innovation Change Your</br> Life</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="why-choose-item text-center">
                    <div class="why-icon my-5">
                        <span class="why-icon-span"></span>
                        <i class="fa-regular fa-laptop-code"></i>
                    </div>
                    <h4 class="color-white">Natural Language Processing</h4>
                    <p class="color-white">Implement your system with NLP that understand and respond to text or
                        voice
                        data—and respond with text or speech of their own.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-item text-center">
                    <div class="why-icon my-5">
                        <span class="why-icon-span"></span>
                        <i class="fa-regular fa-laptop-code"></i>
                    </div>
                    <h4 class="color-white">Database Security</h4>
                    <p class="color-white">Protect your data against threats such as accidental or intentional
                        loss,
                        destruction or misuse.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-item text-center">
                    <div class="why-icon my-5">
                        <span class="why-icon-span"></span>
                        <i class="fa-regular fa-laptop-code"></i>
                    </div>
                    <h4 class="color-white">Embedded Systems</h4>
                    <p class="color-white">Implement your Embedded systems which is used for in consumer, cooking,
                        industrial,
                        automotive,
                        and medical applications.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-dot">
        <img src="img/choose-dot.png" alt="">
    </div>
    <div class="choose-shape">
        <img src="img/choose-shape.png" alt="">
    </div>
</section>
<!--   Why-choose area End-->
<!--   Our-solutions area Start-->
<section class="our-solutions-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="our-left">
                    <h2 class="color-blue">Why Choose Our</br> Solutions</h2>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                    <i class="fa-solid fa-arrow-right-long"></i> We Provide Professional Service
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <i class="fa-solid fa-arrow-right-long"></i> Stay Up, Stay Running & Protected
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    second item's accordion body. Let's imagine this being filled with some actual
                                    content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    <i class="fa-solid fa-arrow-right-long"></i> Our Experienced Experts
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    third item's accordion body. Nothing more exciting happening here in terms of
                                    content, but just filling up the space to make it look, at least at first
                                    glance, a bit more representative of how this would look in a real-world
                                    application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                    aria-expanded="false" aria-controls="flush-collapseFour">
                                    <i class="fa-solid fa-arrow-right-long"></i> Our Experienced Experts
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is
                                    intended to demonstrate the <code>.accordion-flush</code> class. This is the
                                    third item's accordion body. Nothing more exciting happening here in terms of
                                    content, but just filling up the space to make it look, at least at first
                                    glance, a bit more representative of how this would look in a real-world
                                    application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="our-right">
                    <img src="{{ asset('ui/frontend') }}/img/why-choose.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--   Our-solutions area End-->
</x-master-frontend>