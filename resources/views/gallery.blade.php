<x-layout
title="Gallery MaDin Putra"
    subtitle="Pon-Pes Al-Istiqomah Tanjungsari Petanahan Kebumen"
    bgImage="/img/madin.jpeg"
    data-aos-once="false">
    <div class="row">
        @foreach($galleries as $gallery)

        <div class="col-md-4 mb-4">
            <div class="card">

                <img
                    src="{{ asset('storage/' . $gallery->image) }}"
                    class="card-img-top"
                >

                <div class="card-body">
                    <h5>{{ $gallery->description }}</h5>
                </div>

            </div>
        </div>

        @endforeach
    </div>
</x-layout>