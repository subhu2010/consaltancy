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
<section class="home-about pa-tb">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae earum molestiae, id ratione vero iure
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


@endsection