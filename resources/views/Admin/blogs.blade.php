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

                        <div class="col-12">
                           <br>
                            <a class="btn " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                <ion-icon name="grid-outline"></ion-icon>
                              </a>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">  <div class="col-5 text-center">
                            <h2 class=" ">DASHBOARD</h2>
                        </div>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body text-start">
                            <ul class=" ">
                                <li><a href="">
                                        <ion-icon name="grid-outline"></ion-icon> <b>DASHBOARD</b>
                                    </a></li>
                                <li><a href="">
                                        <ion-icon name="create-outline"></ion-icon> <b>BLOG'S</b>
                                    </a></li>
                                <li><a href="">
                                        <ion-icon name="mail-outline"></ion-icon> <b>MESSAGE</b>
                                    </a></li>
                                <li><a href="">
                                        <ion-icon name="people-outline"></ion-icon> <b>USER'S</b>
                                    </a></li>
                                <li><a href="">
                                        <ion-icon name="people-circle-outline"></ion-icon> <b>OUR TOPPER'S</b>
                                    </a></li>

                            </ul>

                        </div>
                      </div>

                </div>

                {{-- Header End  --}}

                {{-- sidebaar start  --}}



                {{-- sidebaar End  --}}



                {{-- Main start  --}}
                <div class="col-sm-12 col-md-9 ">
                    <div class="row justify-content-center" id="content-box">

                        {{-- breadcamp start --}}
                        <div class="col-sm-12 mb-5 breadcamp">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                              </nav>
                        </div>

                        {{-- breadcamp End --}}

                        <div class="col-12   form-card px-4">
                            <form action="" method="post">
                                <div class=" form-group">
                                    <label for="">TITLE</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <label for="">IMAGE</label>
                                        <input type="file" class="form-control" name="title">
                                    </div>
                                    <div class="col-sm-12 col-md-6  form-group">
                                        <label for="">DATE</label>
                                        <input type="date" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">CONTENT</label>
                                    <textarea name="content" id="" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-form " name="submit">SUBMIT </button>
                                </div>
                            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
