<!-- resources/views/admin/produk.blade.php -->

@extends('layouts.main')

@section('content')
<section id="portfolio" class="portfolio">
      <div class="container mt-5">

        <div class="section-title" data-aos="fade-up">
          <h2>Produk</h2>
          <p>
            Produk yang kami jual 100% Tayyiban
          </p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Pakaian</li>
              <li data-filter=".filter-card">Mainan Anak</li>
              <li data-filter=".filter-web">Buku</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app center">
            <div class="portfolio-wrap">
              <img src="assets/img/pfs5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gamis Anak</h4>
                <p>Rp. 60.000</p>
              </div>
              
              <div class="portfolio-links">
                <a href="assets/img/pfs5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 60.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/pbuku1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Puncak Ilmu Adalah Akhlak</h4>
                <p>Rp. 92.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/pbuku1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 92.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/pfs3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gamis Wanita</h4>
                <p>Rp. 120.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/pfs3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 120.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/mainan1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>E-Book Muslim</h4>
                <p>RP 23.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/mainan1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RP 23.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/pbuku2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tuhan Maaf Aku Kurang Bersyukur</h4>
                <p>Rp. 72.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/pbuku2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 72.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/pfs4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gamis Pria</h4>
                <p>Rp. 80.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/pfs4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 80.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/mainan3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Puzzle Huruf Hijayah</h4>
                <p>Rp 15.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/mainan3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp 15.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/mainan2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>E-Book Anak</h4>
                <p>Rp 21.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/mainan2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp 21.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/pbuku3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mindset Islami Muslimah Milenial</h4>
                <p>Rp. 81.000</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rp. 81.000"><i class="bx bx-plus"></i></a>
                <a href="{{ route('payment.checkout')}}" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>