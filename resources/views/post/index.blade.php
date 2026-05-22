<x-layout
title="admin"
    subtitle="Pon-Pes Al-Istiqomah Tanjungsari Petanahan Kebumen"
    bgImage="/img/madin.jpeg"
    data-aos-once="false">

           
   
        <div class="continer text-center">
        <div class="row  ">
            @foreach($post as $post)
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
                                <h2 class="text-info"data-aos="fade-left"
                                data-aos-offset="150"
                                data-aos-easing="ease-in-sine">{{ $post->title }}</h2>
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
                    <form class="text-center"
                        action="{{ route('posts.destroy', $post->id) }}"
                        method="POST"
                    >
                                @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Hapus
                        </button>

                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        <a href="{{('posts/create')}}"><button class="btn  btn-primary mb-5">
                TAmbah
        </button></a>
    </div>
     
        
</x-layout>