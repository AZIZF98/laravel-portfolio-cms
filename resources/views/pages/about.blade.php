@extends('layout')

@section('isi')
<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">About Me</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Hello, I'm Aziz Fakhurokhman!
          I’m a passionate and detail-oriented Backend Developer with a strong background in building robust and scalable server-side applications. With a keen interest in creating efficient and high-performance backend systems, I specialize in designing, developing, and maintaining the server-side infrastructure that powers modern web and mobile applications.</p>
        <p>Experience
          I have had the opportunity to work on a diverse range of projects, from small-scale applications to large enterprise systems. My journey has equipped me with a deep understanding of backend technologies and a problem-solving mindset that thrives in dynamic environments.</p>
        <p>My Approach
          I believe in writing clean, maintainable code and using best practices to build reliable and efficient systems. I’m a strong advocate for continuous learning and improvement, staying up-to-date with the latest industry trends and technologies to deliver cutting-edge solutions.</p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="images/about/author.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <img src="images/about/signature.png" alt="signature" class="img-fluid">
        <h4>Johnathan Smith</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- Work Process -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Work Process</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <div class="">
          <img src="images/icons/plan.png" class="mb-4" alt="icon">
          <h4 class="mb-4">Research and Plan</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/design.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Design and Develop</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/print.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Deliver</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>
<!-- ./Work Process -->

<!-- team -->
<section class="section bg-cover" data-background="images/backgrounds/team-bg.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Team</h2>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-1.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-2.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-3.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /team -->

<!-- clients -->
<section class="section">
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

