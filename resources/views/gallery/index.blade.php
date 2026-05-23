
<x-layout
title="admin"
    subtitle="Pon-Pes Al-Istiqomah Tanjungsari Petanahan Kebumen"
    bgImage="/img/madin.jpeg"
    data-aos-once="false">

           
   
        <div class="container text-center">
        <div class="row  ">
            @foreach($galleries as $gallery)
            <div class="col-md-6 d-flex align-items-center vh-100">
                <div class="conatiner " >
                
                    <div class="row g-0 justify-content-between ">
                        <div class="col-md-6 mb-2 p-5">
                            <img
                                src="{{ asset('storage/' . $gallery->image) }}"
                                alt=""
                                class="img-fluid rounded"
                            />
                        </div>
                        <div class="col-md-6 border-3 border-info border-start my-auto p-1  fw-bold">
                            <div class="mx-3 text-start">
                                <h2 class="text-info"data-aos="fade-left"
                                data-aos-offset="150"
                                data-aos-easing="ease-in-sine"></h2>
                                <p class="text-white"data-aos="fade-left"
                                data-aos-offset="250"
                                data-aos-easing="ease-in-sine">
                                {{ $$gallery->description }}
                                </p>
                                <p class="card-text">
                                 <small class="text-muted">{{ $galleryt->updated_at->format('d M Y') }}</small> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <form class=""
                        action="{{ route('posts.destroy', $post->id) }}"
                        method="POST"
                    >
                                @csrf
                        @method('DELETE')

                        <button class="btn btn-danger col-4">
                            Hapus
                        </button>
                        

                    </form>
                    {{ $post->id }}
                    <a
                        href="{{ route('posts.edit', $post->id) }}"
                        class="btn btn-warning"
                    >
                        Edit
                    </a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <a href="{{ route('posts.create') }}"><button class="btn  btn-primary mb-5">
                Tambah
        </button></a>
        
    </div>
     
        
</x-layout>