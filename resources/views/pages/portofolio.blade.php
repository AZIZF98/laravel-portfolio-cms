@extends('layout')

@section('isi')
<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Portfolio</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="branding" />BRANDING
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
          </label>
        </div>
      </div>
    </div>
    <div class="row shuffle-wrapper">
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-6.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-8.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item illustration" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/portfolio/item-7.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
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

<!-- clients -->
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
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
    </div>
  </div>
</section>
<!-- /clients -->

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