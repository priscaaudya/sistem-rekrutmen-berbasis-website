@extends('layouts.main')
@section('container')

  <div class="page-hero bg-image overlay-dark mt-5" style="background-image: url(img/anandaa.jpg);" id="beranda">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Selamat Datang</span>
        <h1 class="display-4">RSU Ananda Purwokerto</h1>
        <a href="#lowongan" class="btn btn-primary">Lihat Lowongan</a>
      </div>
    </div>
  </div>

   <div class="bg-light">
    <div class="page-section pb-0" id="profil">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 py-3 wow fadeInUp">
            <h1>Rumah Sakit Umum Ananda </h1> <hr>
            <p class="text-grey mb-4" style="text-align: justify">Rumah Sakit "Ananda" Purwokerto semula adalah Rumah Sakit Ibu dan Anak (Rumah Sakit Bersalin) yang diselenggarakan oleh sebuah Yayasan yang bernama “YAYASAN SUTARI“ yang didirikan berdasarkan Akta Notaris Nomor: 39 Tertanggal 20 Februari 1989 di Purwokerto. Yayasan dimaksud merupakan Yayasan Keluarga Bapak Sutari. <br> <br>

              Penyelenggaraan Rumah Sakit Ibu dan Anak “Ananda“ Purwokerto didasarkan pada Surat Ijin Sementara Rumah Sakit yang dikeluarkan oleh Kepala Kantor Wilayah Departemen Kesehatan Daerah Tingkat I. Propinsi Jawa Tengah Nomor : 29/Kanwil/RSIA/XII/90.S1. Tertanggal 26 Desember 1990. Selanjutnya Surat Ijin Penyelenggara Rumah Sakit yang bersifat tetap dikeluarkan berdasarkan Keputusan Menteri Kesehatan Republik Indonesia Nomor Ym.02.04.3.5.3469 Tertanggal 24 Mei 1993 dan mulai berlaku sejak tanggal 24 Mei 1993 sampai dengan 24 Mei 1998. <br> <br>
              Pada Awal berdirinya Rumah Sakit “Ananda“ Purwokerto adalah Rumah Sakit Khusus (Rumah Sakit Ibu dan Anak/Rumah Sakit Bersalin). Kemudian perkembangan selanjutnya atau tepatnya sekitar awal 1995, Rumah Sakit Ibu dan Anak ini dikembangkan menjadi Rumah Sakit Umum.Berdasarkan Surat Ijin Penyelenggaraan Rumah Sakit Keputusan Menteri Kesehatan RI Nomor : YM.02.04.3.5.2555.</p>
          </div>
          <div class="col-lg-4 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="img/sejarah.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section" id="lowongan">
    <div class="container">
      <div class="section-title">
        <span class="wow fadeInUp">Lowongan</span>
        <h2 class="text-center wow fadeInUp mb-5">Lowongan</h2>
      </div>
      <div class="row mt-5">
        @if ($jobs->count())
        @foreach ($jobs as $job)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="/detail-{{ $job->slug }}" class="post-thumb">
                <img src="img/job.png" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/detail-{{ $job->slug }}">{{ $job->position }}</a></h5>
              <div class="site-info float-right mb-1">
                <span class="mai-time"></span> {{ $job->created_at->diffForHumans() }}
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p class="col-12 text-center mt-4 d-flex justify-content-center">Tidak ada lowongan tersedia.</p>       
       @endif
        <div class="col-12 text-center mt-4 d-flex justify-content-center">
            {{ $jobs->links() }}
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="bg-light">
    <div class="page-section" id="kontak">
      <div class="container">
        <div class="section-title">
          <span class="wow fadeInUp">Kontak</span>
          <h2 class="text-center wow fadeInUp mb-5">Kontak</h2>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-6 wow fadeInLeft">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Pemuda No.30, Kober, Purwokerto Barat, Kabupaten Banyumas, Jawa Tengah</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>info@rsananda.co.id</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInRight">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>(0281) 636417</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInRight">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.5530896044583!2d109.22371931298856!3d-7.418158166827945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e67e4209eb7%3A0xc60f72f33706f339!2sRS%20Ananda%20Purwokerto!5e0!3m2!1sid!2sid!4v1612878707788!5m2!1sid!2sid" width="540" height="350" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-lg-6 col-md-6 wow fadeInRight">
            <form class="main-form" action="/" method="post">
              @csrf
              <div class="row">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                  <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                  <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                  <textarea name="message" id="message" class="form-control" rows="6" placeholder="Tulis pesan..." required></textarea>
                </div>
              </div>
              <div class="col-12 text-center d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Kirim</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->
@endsection