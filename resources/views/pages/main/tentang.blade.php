@extends('layouts.guest.app')

@section('content')
    <main class="container my-5">
        <header class="text-center mb-5">
            <h1 class="text-primary fw-bold">Modul Kebencanaan</h1>
            <p class="lead">Meningkatkan kesadaran, kesiapsiagaan, dan ketangguhan masyarakat menghadapi bencana.</p>
        </header>

        <!-- Deskripsi Umum -->
        <section class="mb-5">
            <h2 class="text-primary border-start border-3 ps-3">Deskripsi Umum</h2>
            <p>
                Modul ini dirancang untuk membantu masyarakat memahami berbagai jenis bencana alam dan non-alam,
                serta langkah-langkah yang harus dilakukan sebelum, saat, dan sesudah bencana terjadi.
                Dengan modul ini, diharapkan pengguna dapat menjadi individu yang tangguh dan sigap dalam menghadapi situasi
                darurat.
            </p>
        </section>

        <!-- Tujuan Modul -->
        <section class="mb-5">
            <h2 class="text-primary border-start border-3 ps-3">Tujuan Modul</h2>
            <ul>
                <li>Memahami jenis-jenis bencana yang ada di Indonesia.</li>
                <li>Mengetahui langkah mitigasi dan pencegahan bencana.</li>
                <li>Melatih keterampilan menghadapi situasi darurat.</li>
                <li>Menumbuhkan rasa peduli terhadap lingkungan dan sesama.</li>
                <li>Mengetahui langkah pemulihan setelah bencana.</li>
            </ul>
        </section>

        <!-- Alur Modul -->
        <section class="mb-5">
            <h2 class="text-primary border-start border-3 ps-3">Alur Modul Kebencanaan</h2>
            <div class="row text-center mt-4">
                <div class="col-md-3 mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="img-fluid mb-2"
                        alt="Pendahuluan" width="80">
                    <h5>Pendahuluan</h5>
                    <p>Pengenalan dasar tentang jenis dan penyebab bencana.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/1048/1048940.png" class="img-fluid mb-2" alt="Mitigasi"
                        width="80">
                    <h5>Mitigasi</h5>
                    <p>Langkah pencegahan dan persiapan menghadapi bencana.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/2920/2920244.png" class="img-fluid mb-2"
                        alt="Tanggap Darurat" width="80">
                    <h5>Tanggap Darurat</h5>
                    <p>Tindakan yang dilakukan saat bencana terjadi.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/3063/3063825.png" class="img-fluid mb-2"
                        alt="Pemulihan" width="80">
                    <h5>Pemulihan</h5>
                    <p>Langkah-langkah setelah bencana untuk kembali normal.</p>
                </div>
            </div>
        </section>

        <!-- Gambar Pendukung -->
        <section class="mb-5">
            <h2 class="text-primary border-start border-3 ps-3 mb-4">Gambar Pendukung</h2>
            <div class="row g-4 justify-content-center text-center">
                <<div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="{{asset('assets-guest/img/gunung.jpg')}}" alt="Image">
                    <h6>Gunung Meletus</h6>
                </div>
                <<div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="{{asset('assets-guest/img/gempa.jpg')}}" alt="Image">
                    <h6>Gempa</h6>
                </div>
                <<div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="{{asset('assets-guest/img/banjir.jpg')}}" alt="Image">
                    <h6>Banjir</h6>
                </div>
                <<div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="{{asset('assets-guest/img/longsor.jpg')}}" alt="Image">
                    <h6>Longsor</h6>
            </div>

            </div>
            </div>
        </section>


        <!-- Sumber dan Kontak -->
        <section>
            <h2 class="text-primary border-start border-3 ps-3">Sumber dan Kontak</h2>
            <p>Untuk informasi lebih lanjut mengenai kebencanaan, kunjungi:</p>
            <ul>
                <li><a href="https://bnpb.go.id" target="_blank">BNPB (Badan Nasional Penanggulangan Bencana)</a></li>
                <li><a href="https://bmkg.go.id" target="_blank">BMKG</a></li>
                <li><a href="https://pmi.or.id" target="_blank">Palang Merah Indonesia (PMI)</a></li>
            </ul>
        </section>
    </main>
@endsection
