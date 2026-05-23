

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
<div class="card text-center border m-5 p-5 w-50">
    <h1>Tambah Post</h1>

<form action="{{ route('galleries.store') }}" method="POST"
    enctype="multipart/form-data"
    class="border-top border-3 border-info">

    @csrf

    <input class="m-2 w-100"
        type="text"
        name="title"
        class="form-control mb-3"
        placeholder="Judul"
    ><br>

    <textarea class="m-2 w-100"
        type="text"
        name="description"
        class="form-control mb-3"
        placeholder="Deskripsi">
    </textarea><br>

    <input  class="m-2 w-100"
        type="file"
        name="image"
        class="form-control mb-3"
        placeholder="img/contoh.jpeg"
    ><br>

    <button class="btn btn-primary m-2">
        Simpan
    </button>

</form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>