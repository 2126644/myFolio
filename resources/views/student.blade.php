<!-- Name: Nur Fatihah Adawiyah (2126644) -->
<!-- Section: 2 -->

@extends('master.layout')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        List of Students
                      </h5>
                    </div>
                    <div>
                    <button onclick="document.location='/add-student'" type="button" class="button button-a button-big button-rouded">Add New Records</button>
                        <form action="" method="post" role="form" class="php-email-form">
                        <div class="col-md-12 text-center">
                            <div class="table-container">
                                <table class="table table-striped table-hover" style="width: 100%; min-width: 800px">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student-> matric_id }}</td>
                                            <td>{{ $student-> first_name }}</td>
                                            <td>{{ $student-> last_name }}</td>
                                            <td>{{ $student-> email }}</td>
                                            <td>{{ $student-> phone_no }}</td>
                                        </tr>
                                        @endforeach
                                        {{--
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Alia Nasuha</td>
                                          <td>Ismail</td>
                                          <td>alianasuha@gmail.com</td>
                                          <td>0123456789</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Ain Maisarah</td>
                                          <td>Abdullah</td>
                                          <td>maisarah345@gmail.com</td>
                                          <td>0132456789</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Mohd Hafidz Fikri</td>
                                          <td>Gadafi</td>
                                          <td>hafidzfikry123@gmail.com</td>
                                          <td>0192345678</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">4</th>
                                          <td>Mohd Hanafi</td>
                                          <td>Abdullah</td>
                                          <td>hanafi1603@gmail.com</td>
                                          <td>0134567892</td>
                                        </tr>
                                    --}}
                                      </tbody>
                                </table>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
