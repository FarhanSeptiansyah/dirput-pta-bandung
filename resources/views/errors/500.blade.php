<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="{{{ asset('favicon/favicon.ico') }}}" type="image/png" />
  <!-- loader-->
  <link href="{{ asset('template')}}/assets/css/pace.min.css" rel="stylesheet" />
  <script src="{{ asset('template')}}/assets/js/pace.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('template')}}/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/css/app.css" rel="stylesheet">
  <link href="{{ asset('template')}}/assets/css/icons.css" rel="stylesheet">
  <title> 500 | PTA Bandung</title>
</head>

<body class="bg-theme bg-theme3">
  <!-- wrapper -->
  <div class="wrapper">
    <div class="error-500 d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="card">
          <div class="row g-0">
            <div class="col-xl-5">
              <div class="card-body p-4">
                <h1 class="display-1"><span class="text-white">5</span><span class="text-white">0</span><span class="text-white">0</span></h1>
                <h2 class="font-weight-bold display-4">Sorry, unexpected error</h2>
                <p>Looks like you are lost!
                  <br>May be you are not connected to the internet!
                </p>
                <div class="mt-5"> <a href="/" class="btn btn-lg btn-light px-md-5 radius-30">Go Home</a>
                </div>
              </div>
            </div>
            <div class="col-xl-7">
              <img src="{{ asset('template')}}/assets/images/errors-images/505-error.png" class="img-fluid" alt="">
            </div>
          </div>
          <!--end row-->
        </div>
      </div>
    </div>

  </div>
  <!-- end wrapper -->


  <!-- Bootstrap JS -->
  <script src="{{ asset('template')}}/assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>

  <script>
    $(".switcher-btn").on("click", function() {
        $(".switcher-wrapper").toggleClass("switcher-toggled")
      }), $(".close-switcher").on("click", function() {
        $(".switcher-wrapper").removeClass("switcher-toggled")
      }),


      $('#theme1').click(theme1);
    $('#theme2').click(theme2);
    $('#theme3').click(theme3);
    $('#theme4').click(theme4);
    $('#theme5').click(theme5);
    $('#theme6').click(theme6);
    $('#theme7').click(theme7);
    $('#theme8').click(theme8);
    $('#theme9').click(theme9);
    $('#theme10').click(theme10);
    $('#theme11').click(theme11);
    $('#theme12').click(theme12);
    $('#theme13').click(theme13);
    $('#theme14').click(theme14);
    $('#theme15').click(theme15);


    function theme1() {
      $('body').attr('class', 'bg-theme bg-theme1');
    }

    function theme2() {
      $('body').attr('class', 'bg-theme bg-theme2');
    }

    function theme3() {
      $('body').attr('class', 'bg-theme bg-theme3');
    }

    function theme4() {
      $('body').attr('class', 'bg-theme bg-theme4');
    }

    function theme5() {
      $('body').attr('class', 'bg-theme bg-theme5');
    }

    function theme6() {
      $('body').attr('class', 'bg-theme bg-theme6');
    }

    function theme7() {
      $('body').attr('class', 'bg-theme bg-theme7');
    }

    function theme8() {
      $('body').attr('class', 'bg-theme bg-theme8');
    }

    function theme9() {
      $('body').attr('class', 'bg-theme bg-theme9');
    }

    function theme10() {
      $('body').attr('class', 'bg-theme bg-theme10');
    }

    function theme11() {
      $('body').attr('class', 'bg-theme bg-theme11');
    }

    function theme12() {
      $('body').attr('class', 'bg-theme bg-theme12');
    }

    function theme13() {
      $('body').attr('class', 'bg-theme bg-theme13');
    }

    function theme14() {
      $('body').attr('class', 'bg-theme bg-theme14');
    }

    function theme15() {
      $('body').attr('class', 'bg-theme bg-theme15');
    }
  </script>
</body>

</html>