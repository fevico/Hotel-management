@php 
$about = App\Models\About::first();
@endphp

<div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>{{ $about->title}}</h3>
                        </div>
                        <p>{{ $about->description}}</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="{{ asset($about->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>