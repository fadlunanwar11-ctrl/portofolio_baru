<x-layout
    title="Madrasah Diniah Putra"
    subtitle="Pon-Pes Al-Istiqomah Tanjungsari Petanahan Kebumen"
    bgImage="/img/madin.jpeg"
    data-aos-once="false"
>
    <div class="text-center">
        <h2 class="fw-bold displai-3 mt-5 text-light">SRUKTUR KEPENGURUSAN MADIN</h2>
    </div>
    <div class="container m-5 d-flex align-items-center vh-100 " >
        
        <div class="row g-0 justify-content-around ">
            <div class="col-md-3 mb-2"data-aos="zoom-in-down"
                data-aos-offset="200"
                data-aos-easing="ease-in-sine">
                <img
                    src="{{asset('img/RomoYai.jpeg')}}"
                    alt="Trendy Pants and Shoes"
                    class="img-fluid rounded"
                />
            </div>
            <div class="col-md-4  my-auto p-2 text-center fw-bold">
                <div >
                    <h2 class="text-info"data-aos="fade-left"
                    data-aos-offset="100"
                    data-aos-easing="ease-in-sine">KH Dr.Ali Muhdi, MPd</h2>
                    <p class="text-white"data-aos="fade-left"
                    data-aos-offset="200"
                    data-aos-easing="ease-in-sine">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                    </p>
                    <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="continer m-5">
        <div class="row justify-content-between">
            @foreach($posts as $post)
            <div class="col-md-6 d-flex align-items-center vh-100">
                <div class="continer " >
                    <div class="row g-0 justify-content-between ">
                        <div class="col-md-6 mb-2 p-5">
                            <img
                                src="{{ asset('storage/' . $post->image) }}"
                                alt=""
                                class="img-fluid rounded"
                            />
                        </div>
                        <div class="col-md-6 border-3 border-info border-start my-auto p-1  fw-bold">
                            <div class="mx-3 text-start">
                                <h3 class="text-info"data-aos="fade-left"
                                data-aos-offset="150"
                                data-aos-easing="ease-in-sine">{{ $post->title }}</h3>
                                <p class="text-white"data-aos="fade-left"
                                data-aos-offset="250"
                                data-aos-easing="ease-in-sine">
                                {{ $post->description }}
                                </p>
                                <p class="card-text">
                                 <small class="text-muted">{{ $post->updated_at->format('d M Y') }}</small> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>

</x-layout>