<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gizi Sehat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="{{ asset('guest/images/icon-index.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('guest/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('guest/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('guest/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('guest/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('guest/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('guest/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/flaticon1.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('guest/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .d-none {
            display: none;
        }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="flaticon-pharmacy"></i><span>Gizi</span>SEHAT</a>
    </div>
  </nav>
      
    <!-- END nav -->
    <section class="ftco-section-parallax">
      <div class="hero-wrap d-flex align-items-center" style="background-image: url('guest/images/bg_1.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>GIZI SEHAT</h2>
              <p>Merupakan Sistem Informasi yang menyediakan informasi tentang penyakit dan rekomendasi cara terapi untuk penyembuhannya</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="/searchpenyakit" class="subscribe-form" method="post">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Masukkan Penyakit" autocomplete="off" style="text-align: center;" id="namapp" name="namapp" onfocus="this.value=''">
                      @csrf
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-cardiogram"></span> Penyakit</a>

              <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab" aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon1-010-gym"></span> Jenis Diet</a>

              <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception" role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon1-014-dish"></span> Makanan Yang Dianjurkan</a>

              <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab" aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 fa fa-warning"></span> Makanan Yang Dibatasi</a>

            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                <span class="icon mb-3 d-block flaticon-cardiogram"></span>
                <h2 class="mb-4" id="nmpenyakit">Penyakit</h2>
                <div id="deskpenyakit">-</div>
                @if(Session('alert'))
                  <h2 class="mb-4">{{Session('alert')}}</h2>
                @endif
              </div>

              <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                <span class="icon mb-3 d-block flaticon1-010-gym"></span>
                <h2 class="mb-4">Jenis Diet</h2>
                <div id="jnsdiet">-</div>
                @if(Session('alert'))
                  <h2 class="mb-4">{{Session('alert')}}</h2>
                @endif
              </div>

              <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                <span class="icon mb-3 d-block flaticon1-014-dish"></span>
                <h2 class="mb-4">Makanan Yang Dianjurkan</h2>
                <div id="anjmkn">-</div>
                @if(Session('alert'))
                  <h2 class="mb-4">{{Session('alert')}}</h2>
                @endif
              </div>

              <div class="tab-pane fade py-5" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                <span class="icon mb-3 d-block fa fa-warning"></span>
                <h2 class="mb-4">Makanan Yang Dibatasi</h2>
                <div id="lrgmkn">-</div>
                @if(Session('alert'))
                  <h2 class="mb-4">{{Session('alert')}}</h2>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
    
    <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 30px; padding-bottom: 30px;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p> Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
          </div>
        </div>
      </div>
    </footer>
      
  <script type="text/javascript">
    $(document).ready(function(){

      $( "#namapp" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url:"{{route('getPenyakit')}}",
            method: 'post',
            dataType: "json",
            data: {
               _token: _token,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           // Set selection
           $('#namapp').val(ui.item.value); // display the selected text
            
           $('#nmpenyakit').html(ui.item.value); // display the selected text
           $('#deskpenyakit').html(ui.item.deskp); // save selected id to input
           $('#jnsdiet').html(ui.item.jenisp); // save selected id to input
           $('#anjmkn').html(ui.item.anjp); // save selected id to input
           $('#lrgmkn').html(ui.item.larp); // save selected id to input
            
           $('#description-sec').removeClass("d-none");
           $('#description-sec').addClass("d-md-flex");
            
           return false;
        }
      });

    });
  </script>      
  
  <script src="{{ asset('guest/js/popper.min.js') }}"></script>
  <script src="{{ asset('guest/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('guest/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('guest/js/aos.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('guest/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('guest/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('guest/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('guest/js/main.js') }}"></script>
  </body>
</html>