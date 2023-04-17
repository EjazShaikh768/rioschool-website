<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{ asset('css/admin_style.css') }}>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="body">


    <section>
        <div class="container" id="loginbox">
            <div class="row justify-content-center" >
                <div class="col-sm-12 col-md-4 border p-5 form-box" >
                    <form action="" method="post">
                        <div class="form-group text-end">
                            <div class="d-flex ">

                            <label for="">Email</label>
                            <ion-icon name="mail-outline"></ion-icon>
                            </div>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group text-end mt-4">
                            <div class="d-flex">

                            <label for="">Password</label>
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            </div>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-coloring">SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>
