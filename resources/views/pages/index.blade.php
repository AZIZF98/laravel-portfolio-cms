@extends('layout')

@section('isi')
<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">Halo, saya Aziz <br>Backend Developer</h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <div class="layer" id="l2">
    <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l3">
    <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l4">
    <img src="images/illustrations/dots-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l5">
    <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
  </div>
  <div class="layer" id="l6">
    <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
  </div>
  <div class="layer" id="l7">
    <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
  </div>
  <div class="layer" id="l8">
    <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
  </div>
  <div class="layer" id="l9">
    <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
  </div>
  <!-- social icon -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
    <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
  </ul>
  <!-- /social icon -->
</section>
<!-- /hero area -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <p class="font-secondary paragraph-lg text-dark">Nama saya Aziz Fakhurokhman, seorang Backend Developer yang berfokus pada pengembangan solusi backend yang efisien dan skalabel. Dengan pengalaman di berbagai teknologi dan framework, saya memiliki keahlian dalam merancang dan mengimplementasikan sistem backend yang mendukung aplikasi web dan mobile modern.</p>
        <a href="about.html" class="btn btn-transparent">know more</a>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- skills -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress="90%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">PHP (90%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
            <div class="wave" data-progress="60%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Logo Design (60%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">After Effects (80%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
            <div class="wave" data-progress="70%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web App (70%)</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /skills -->

<!-- experience -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Experience</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-1.png" alt="icon">
        <p class="mb-0">Jan 2007 - Feb 2009</p>
        <h4>Junior UX Designer</h4>
        <h6 class="text-light">WEBEX</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-2.png" alt="icon">
        <p class="mb-0">Mar 2009 - Aug 2014</p>
        <h4>UX & UI Designer</h4>
        <h6 class="text-light">AUGMEDIX</h6>
      </div>
      <div class="col-lg-3 col-md-4 text-center">
        <img src="images/experience/icon-3.png" alt="icon">
        <p class="mb-0">Sep 2014 - Present</p>
        <h4>Senior UI Designer</h4>
        <h6 class="text-light">THEMEFISHER</h6>
      </div>
    </div>
  </div>
</section>
<!-- ./experience -->

<!-- education -->
<section class="section position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Education</h2>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2006</p>
            <h4>Marters in UX Design</h4>
            <p class="mb-0 text-light">Masassusets Institute of Technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2004</p>
            <h4>Honours in Fine Arts</h4>
            <p class="mb-0 text-light">Harvard University</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">2000</p>
            <h4>Higher Secondary Certificat</h4>
            <p class="mb-0 text-light">Cardiff School</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-80">
        <div class="d-flex">
          <div class="mr-lg-5 mr-3">
            <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
          </div>
          <div>
            <p class="text-dark mb-1">1998</p>
            <h4>Secondary School Certificate</h4>
            <p class="mb-0 text-light">Cardiff School</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>
<!-- /education -->

<!-- services -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Services</h2>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-palette icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">Database</h4>
            <p>Memiliki keahlian dalam desain dan manajemen database, termasuk perancangan skema, normalisasi data, dan optimasi kueri. Terampil dalam penggunaan sistem manajemen database relasional seperti MySQL, PostgreSQL, dan SQL Server. Berpengalaman dalam pemeliharaan, backup, dan pemulihan database untuk memastikan integritas dan ketersediaan data</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card active-bg-primary hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-vector icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">Laravel</h4>
            <p>Mahiran dalam pengembangan aplikasi web menggunakan Laravel, sebuah framework PHP yang elegan dan kuat. Berpengalaman dalam pembuatan aplikasi dengan fitur-fitur seperti routing, middleware, dan Eloquent ORM untuk manipulasi database. Memiliki kemampuan dalam menerapkan prinsip MVC (Model-View-Controller), serta menggunakan alat dan teknik Laravel untuk pengujian, otentikasi, dan manajemen sesi.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card hover-shadow shadow">
          <div class="card-body text-center px-4 py-5">
            <i class="ti-panel icon mb-5 d-inline-block"></i>
            <h4 class="mb-4">Deploy dan Hosting</h4>
            <p>Berpengalaman dalam proses deploy aplikasi web ke berbagai platform hosting. Mahir dalam konfigurasi server dan pengaturan lingkungan produksi, termasuk pengaturan domain, SSL/TLS, dan pengelolaan server melalui layanan cloud seperti AWS, DigitalOcean, atau Heroku. Terampil dalam menggunakan alat CI/CD untuk otomatisasi proses deploy dan pengujian. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /services -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Portfolio</h2>
      </div>
    </div>
    <div class="row shuffle-wrapper">
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-4.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /portfolio -->

<!-- testimonial -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white mb-5">Testimonials</h2>
      </div>
      <div class="col-lg-10 mx-auto testimonial-slider">
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Dengan bantuan Aziz Fakhurokhman, kami berhasil melakukan migrasi data besar-besaran tanpa downtime yang berarti. Ia menunjukkan keahlian luar biasa dalam manajemen database dan optimasi server. Kami sangat menghargai kontribusinya dan akan sangat merekomendasikannya sebagai back end developer.</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Andi Hartono</h4>
          <h6 class="text-light mb-4">Direktur Teknologi </h6>
        </div>
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Profesional, cepat tanggap, dan sangat berdedikasi. Proyek kami diselesaikan tepat waktu dengan kualitas yang luar biasa. Sangat direkomendasikan!</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Sarah Widodo</h4>
          <h6 class="text-light mb-4">Product Manager</h6>
        </div>
        <!-- slider-item -->
        <div class="text-center testimonial-content">
          <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          <p class="text-white mb-4">Bekerja dengan Aziz fakhurokhman adalah pengalaman yang luar biasa. Ia memiliki pemahaman mendalam tentang arsitektur sistem dan mampu merancang solusi back end yang sangat efisien dan scalable. Proyek kami berjalan dengan lancar berkat keahliannya dalam mengintegrasikan berbagai API dan mengoptimalkan database</p>
          <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png"
            alt="client-image">
          <h4 class="text-white">Maya Putri</h4>
          <h6 class="text-light mb-4">Manajer Proyek</h6>
        </div>
      </div>
    </div>
  </div>
  <!-- bg shapes -->
  <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
  <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
  <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
  <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
  <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
  <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
</section>
<!-- /testimonial -->

<!-- client logo slider -->
<section class="section pb-0">
  <div class="container">
    <div class="client-logo-slider d-flex align-items-center">
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
      <a href="contact.html" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
          src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
    </div>
  </div>
</section>
<!-- /client logo slider -->

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Blogs</h2>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-3.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-4.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <article class="card shadow">
          <img class="rounded card-img-top" src="images/blog/post-2.jpg" alt="post-thumb">
          <div class="card-body">
            <h4 class="card-title"><a class="text-dark" href="blog-single.html">Amazon increase income 1.5 Million</a>
            </h4>
            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et
              dolore magna aliqua.</p>
            <a href="blog-single.html" class="btn btn-xs btn-primary">Read More</a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- /blog -->

<!-- contact -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Contact Info</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Contact Form</h4>
          <form action="#" class="row">
            <div class="col-md-6">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control px-0 mb-4"
                placeholder="Type Message Here" required></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->
@endsection
