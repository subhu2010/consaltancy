@extends('frontend.layout.welcome')

@section('content')

<!-- carousel -->
<div id="carouselHomeCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('frontend/images/1.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/images/2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- about -->
<section class="home-about bg-grey pa-tb">
    <div class="container">
        <div class="section-title">
            <h2>about us</h2>
        </div>
        <div class="home-about-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio veniam aperiam quos repellat? Earum
                suscipit doloribus possimus harum quas, hic debitis beatae odio a illo, nisi enim labore deleniti
                reiciendis quaerat necessitatibus molestias illum voluptatum tenetur architecto. Repudiandae iure
                explicabo porro. Libero cupiditate omnis nulla harum molestiae perferendis ipsam, placeat quae nihil
                sint odio quidem, asperiores aspernatur beatae architecto nisi at atque corrupti enim laudantium
                consequatur facere deleniti? Aliquam, distinctio? Consequatur magnam ducimus vitae quod suscipit
                quisquam obcaecati officia in eveniet hic quaerat sed excepturi atque culpa sunt beatae, repudiandae
                veniam laudantium veritatis voluptates expedita. Magnam cupiditate debitis temporibus numquam pariatur,
                beatae aliquam a tempora repellendus provident. Deleniti, eius suscipit, consequatur ducimus velit
                deserunt nulla quidem veniam officiis modi eos reiciendis qui sit eligendi? Nulla quas veniam nobis,
                totam minima ut ipsam, dolor provident quaerat explicabo aliquam saepe facere? Alias corrupti laboriosam
                exercitationem deserunt aspernatur vitae ipsum labore accusamus tempore sapiente recusandae magnam
                maxime perferendis quae voluptatum obcaecati dolore blanditiis ratione dolorem voluptates ea, a officiis
                delectus neque? Consectetur labore aspernatur dolorum repudiandae dolores fuga ab? Accusantium aliquid
                corrupti nihil atque ipsum perspiciatis laudantium, eius similique, consequuntur architecto rem nobis
                sequi quisquam consectetur.
            </p>
            <div class="text-center">
                <a href="javascript:void(0)" class="btn more-btn">read more</a>
            </div>
        </div>
    </div>
</section>

<!-- dtudy aboard -->
<section class="study-aboard pa-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title">
                    <h2>study aboard</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                        iure
                        esse iste laboriosam quisquam quaerat?</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 g-0 g-4">
            <div class="col-lg-4">
                <div class="card-one">
                    <div class="card-one-img">
                        <img src="{{asset('frontend/images/3.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h2 class="card-one-text">
                        <a href="javascript:void(0)">Cananda</a>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <div class="card-one-img">
                        <img src="{{asset('frontend/images/4.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h2 class="card-one-text">
                        <a href="javascript:void(0)">united kingdom</a>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <div class="card-one-img">
                        <img src="{{asset('frontend/images/5.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h2 class="card-one-text">
                        <a href="javascript:void(0)">new zealand</a>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <div class="card-one-img">
                        <img src="{{asset('frontend/images/6.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h2 class="card-one-text">
                        <a href="javascript:void(0)">Usa</a>
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <div class="card-one-img">
                        <img src="{{asset('frontend/images/7.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <h2 class="card-one-text">
                        <a href="javascript:void(0)">Australia</a>
                    </h2>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="javascript:void(0)" class="btn more-btn">see more</a>
        </div>
    </div>
</section>

<!-- test -->
<section class="study-aboard bg-grey pa-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title">
                    <h2>Test preparation</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                        iure
                        esse iste laboriosam quisquam quaerat?</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 g-0 g-4">
            <div class="col-lg-4">
                <div class="card-two">
                    <div class="card-two-img">
                        <img src="{{asset('frontend/images/gre.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-two-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, qui. Reprehenderit, aut
                            voluptate. Facilis nihil eum tempora! Odit, nihil vel.</p>
                        <div class="content-more">
                            <a href="javascript:void(0)">read more <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-two">
                    <div class="card-two-img">
                        <img src="{{asset('frontend/images/sat.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-two-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, qui. Reprehenderit, aut
                            voluptate. Facilis nihil eum tempora! Odit, nihil vel.</p>
                        <div class="content-more">
                            <a href="javascript:void(0)">read more <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-two">
                    <div class="card-two-img">
                        <img src="{{asset('frontend/images/tofel.webp')}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-two-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, qui. Reprehenderit, aut
                            voluptate. Facilis nihil eum tempora! Odit, nihil vel.</p>
                        <div class="content-more">
                            <a href="javascript:void(0)">read more <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="javascript:void(0)" class="btn more-btn">see more</a>
        </div>
    </div>
</section>


<!-- partner slider -->
<section class="partner-sec pa-tb">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title">
                    <h2>university</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                        iure
                        esse iste laboriosam quisquam quaerat?</p>
                </div>
            </div>
        </div>
        <div class="partner-slider owl-carousel owl-theme">
            <div class="item">
                <div class="partner-img">
                    <img src="{{asset('frontend/images/logo-1.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="item">
                <div class="partner-img">
                    <img src="{{asset('frontend/images/logo-2.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="item">
                <div class="partner-img">
                    <img src="{{asset('frontend/images/logo-3.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="item">
                <div class="partner-img">
                    <img src="{{asset('frontend/images/logo-4.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="item">
                <div class="partner-img">
                    <img src="{{asset('frontend/images/logo-5.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- partner slider -->
<section class="partner-sec bg-grey pa-tb">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title">
                    <h2>Our student say</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                        iure
                        esse iste laboriosam quisquam quaerat?</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme owl-testimonial">
            <div class="item p-2">
                <div class="client-card">
                    <h3>Sinthy Alina</h3>
                    <span>CEO Of Finec</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
                        tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <i class="las la-quote-left client-card-quote"></i>
                    <div class="client-card-img">
                        <img src="{{asset('frontend/images/agents-01.jpg')}}" alt="Images">
                    </div>
                </div>
            </div>
            <div class="item p-2">
                <div class="client-card">
                    <h3>Sinthy Alina</h3>
                    <span>CEO Of Finec</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
                        tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <i class="las la-quote-left client-card-quote"></i>
                    <div class="client-card-img">
                        <img src="{{asset('frontend/images/agents-01.jpg')}}" alt="Images">
                    </div>
                </div>
            </div>
            <div class="item p-2">
                <div class="client-card">
                    <h3>Sinthy Alina</h3>
                    <span>CEO Of Finec</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non ullamcorper
                        tortor, vel mattis mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <i class="las la-quote-left client-card-quote"></i>
                    <div class="client-card-img">
                        <img src="{{asset('frontend/images/agents-01.jpg')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog pa-tb">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title">
                    <h2>recent event</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                        iure
                        esse iste laboriosam quisquam quaerat?</p>
                </div>
            </div>
        </div>
        <div class="row g-0 g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card-five">
                    <a href="{{ url ('blog/blog-detail') }}">
                        <div class="card-img">
                            <img src="{{asset('frontend/images/3.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-meta">
                                <h6>December 5, 2020</h6>
                            </div>
                            <h3 class="card-title"
                                title="Lorem ipsum dolorsitamet, consectetur adipiscing elit, sed doeiusmod">Lorem ipsum
                                dolorsitamet, consectetur adipiscing elit, sed doeiusmod</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Quam nulla porttitor massa id. Ut tellus elementum </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-five">
                    <a href="{{ url ('blog/blog-detail') }}">
                        <div class="card-img">
                            <img src="{{asset('frontend/images/4.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-meta">
                                <h6>December 5, 2020</h6>
                            </div>
                            <h3 class="card-title"
                                title="Lorem ipsum dolorsitamet, consectetur adipiscing elit, sed doeiusmod">Lorem ipsum
                                dolorsitamet, consectetur adipiscing elit, sed doeiusmod</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Quam nulla porttitor massa id. Ut tellus elementum </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-five">
                    <a href="{{ url ('blog/blog-detail') }}">
                        <div class="card-img">
                            <img src="{{asset('frontend/images/5.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <div class="card-meta">
                                <h6>December 5, 2020</h6>
                            </div>
                            <h3 class="card-title"
                                title="Lorem ipsum dolorsitamet, consectetur adipiscing elit, sed doeiusmod">Lorem ipsum
                                dolorsitamet, consectetur adipiscing elit, sed doeiusmod</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Quam nulla porttitor massa id. Ut tellus elementum </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="javascript:void(0)" class="btn more-btn">see more</a>
        </div>
    </div>
</section>

<!-- location -->
<section class="location bg-grey pa-t">
    <div class="row g-0 mb-4">
        <div class="col-lg-10 offset-lg-1">
            <div class="section-title">
                <h2>our location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero
                    iure
                    esse iste laboriosam quisquam quaerat?</p>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1531136481162!2d85.32994461487066!3d27.681662182802597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b25eaa53e9%3A0x75da09407eccb7d1!2sSoftbenz%20Infosys!5e0!3m2!1sen!2snp!4v1649927880928!5m2!1sen!2snp"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection