<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{ asset('css/admin_style.css') }}>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body class="body">


    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">


{{-- Header  start  --}}

                <div class="col-12 text-end sticky-top" id="header">
                  <div class="row">
                    <div class="col-6 text-start">
                        <h2 class=" ">DASHBOARD</h2>
                    </div>
                    <div class="col-6">
                        <div class="btn-group">
                            <button type="button" class="btn " data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <ion-icon name="person-circle-outline"></ion-icon>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">EJAZ SHAIKH/button>
                                <button class="dropdown-item" type="button">PROFILE </button>
                                <button class="dropdown-item" type="button">SIGN OUT</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

{{-- Header End  --}}

{{-- sidebaar start  --}}

                <div class="col-sm-12 col-md-3 hv-100" id="sidebaar">
                    <div class="sidebaar me-auto">
                        <ul class=" ">
                            <li><a href=""><ion-icon name="grid-outline"></ion-icon>  <b>DASHBOARD</b></a></li>
                            <li><a href=""><ion-icon name="create-outline"></ion-icon> <b>BLOG'S</b></a></li>
                            <li><a href=""><ion-icon name="mail-outline"></ion-icon> <b>MESSAGE</b></a></li>
                            <li><a href=""><ion-icon name="people-outline"></ion-icon> <b>USER'S</b></a></li>
                            <li><a href=""><ion-icon name="people-circle-outline"></ion-icon> <b>OUR TOPPER'S</b></a></li>

                        </ul>
                    </div>
                </div>



{{-- sidebaar End  --}}



{{-- Main start  --}}
                <div class="col-sm-12 col-md-9 ">
                    <div class="row justify-content-center">
                        <div class="col-11" id="content-box">
                            <div class="row justify-content-around">


                            </div>
                        </div>
                    </div>
                </div>


{{-- Main End  --}}


            </div>
        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>

</html>
