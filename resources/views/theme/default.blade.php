<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('theme/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    </head>
    <body class="sb-nav-fixed">

        @include('theme.header')

        <div id="layoutSidenav">

            @include('theme.sidebar')
            <div id="layoutSidenav_content">

                <main>
                    @yield('content')
                </main>

                @include('theme.footer')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('theme/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('theme/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('theme/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('theme/js/datatables-simple-demo.js') }}"></script>
          <!-- Place script AFTER the dropdown and input -->
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              const typeSelect = document.getElementById('type');
              const couponField = document.getElementById('couponField');

              function toggleField() {
                if (typeSelect.value === 'coupon') {
                  couponField.classList.remove('hidden');
                } else {
                  couponField.classList.add('hidden');
                }
              }

              // Initial call
              toggleField();

              // Event listener
              typeSelect.addEventListener('change', toggleField);
            });
          </script>
    </body>
</html>
