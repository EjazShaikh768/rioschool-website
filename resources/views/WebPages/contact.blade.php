<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>RIOSCHOOL English Medium Convent School & Jr.College   </title>

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet"  href={{ asset('css/style.css')}}>
        <link rel="stylesheet"  href={{ asset('css/line-icon.css')}}>
        <link rel="shortcut icon" href="{{asset('favicon_io/favicon.ico')}}">
        <link rel="shortcut icon" sizes="16x16" href="{{asset('favicon_io/favicon-16x16.png')}}">
        <link rel="shortcut icon" sizes="32x32" href="{{asset('favicon_io/favicon-32x32.png')}}">
        <link rel="apple-touch-icon" href="{{asset('favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" href="{{asset('favicon_io/android-chrome-192x192.png')}}" sizes="192x192">
        <link rel="icon" href="{{asset('favicon_io/android-chrome-512x512.png')}}" sizes="512x512">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

    </head>
    <body >

    <!-- header and nav section -->
<nav class="navbar navbar-expand-md sticky-top py-4 navbar-expand-lg ">
     <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon text-dark"></span>
                                </button>
                                <img src={{asset('images/logo00.png')}} alt="" class="img-fluid mx-lg-5">
                            <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                    <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href={{'/'}}>HOME</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link " href="{{'blog'}}">ACHIEVEMENT</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ABOUT US
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{'inspiration'}}">OUR INSPIRATION</a></li>
                                        <li><a class="dropdown-item" href="{{'about'}}">ABOUT</a></li>
                                    </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        OUR FAMILY
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{'managment'}}">SCHOOL MANAGMENT</a></li>
                                        <li><a class="dropdown-item" href="{{'teachingStaff'}}">TEACHING STAFF</a></li>
                                        <li><a class="dropdown-item" href="{{'nonoteachstaff'}}">NON TEACHING STAFF</a></li>
                                    </ul>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{'gallery'}}">GALLERY</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link " href="{{'activity'}}">ACTIVITY</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link active" href="{{'contact'}}">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{'login'}}">SIGN IN</a>
                                    </li>
                                </ul>
                            </div>
     </div>
 </nav>




 <section id="managmentBreadcamp">
    <div class="row">
        <div class="col-12">
            <img src={{ asset("images/schoolbg.webp")}} class="img-fluid" alt="">

            <div class="centered">
            <h1>CONTACT US</h1>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
       <div class="row my-5  px-3 justify-content-around">
        <div class="col-sm-12 col-md-3 col-lg-3 box  mt-3 contactCard" data-aos="slide-left">
            <h2><img src={{ asset('images/location.gif') }} alt="" class="img-fluid" srcset="" width="100px"></h2>
            <h3>Khadka Road Near 32 Rooms  <br> BHUSAWAL</h3>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 box mt-3  contactCard">
            <h2><img src={{ asset('images/msg.gif') }} alt="" class="img-fluid" srcset="" width="100px"></h2>
            <h3><a href="">contact@hswdschool.com</a></h3>

        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 box  mt-3  contactCard" data-aos="slide-right"  >
            <h2><img src={{ asset('images/telephone.gif') }} alt="" class="img-fluid" srcset="" width="100px"></h2>
            <h3><a href="tel:+918446931810">8446931810</a></h3>

        </div>
       </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-6 col-lg-5 my-5"  id="contactForm">
                <fieldset>
                    <legend> Contact Form</legend>
                  <center> <div class="divider"></div></center>
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="msg" class="form-control" id=""  rows="5"></textarea>
                        </div>
                        <div class="form-group mt-3 text-center">
                           <button class="btn px-5" style="font-size:1.2em">SUBMIT</button>
                        </div>
                    </form>
                </fieldset>
            </div>
            <div class="col-sm-12" data-aos="zoom-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14019.448249319603!2d77.291394!3d28.5438655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5f73efa7317%3A0x76a062d37ab20633!2sRioforge%20Information%20solutions!5e0!3m2!1sen!2sin!4v1679771260973!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
           </div>
    </div>
</section>


<!-- footer star -->

<section id="footer">
    <div class="container">
        <div class="row py-5 justify-content-between ">
                <div class="col-sm-12 col-md-3 col-lg-3 text-center ">
                    <img src= {{ asset ('images/logo00.png') }} alt="school logo" class="img-fluid" >
                    <h3 class="text-light">RIO SCHOOL</h3>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 pt-3 text-center footerLinks">
                    <h3> Links-</h3>
                <div class="row">
                    <div class="col-6 text-start">
                        <ul>
                            <li><a href="">SIGN IN</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Achivement</a></li>
                            <li><a href="">Gallery</a></li>
                            <li><a href="">Activity</a></li>
                        </ul>
                    </div>
                    <div class="col-6 text-start">
                        <ul>
                            <li><a href="">School Managment</a></li>
                            <li><a href="">Teaching Staff</a></li>
                            <li><a href="">Non Teaching Staff</a></li>
                            <li><a href="">OUR SCHOOL</a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 text-center pt-3" >
                    <h5>RIO English Medium Convent <br> School & Jr. College</h5>
                    <address>
                        32 Colony Near High way <br>
                        Bhusawal
                    </address>
                    <ul id="icons">
                        <li><a href=""  ><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                    </ul>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
               <h6 class="text-white"> <i class="fa-regular fa-copyright"></i> <?php echo date("Y"); ?> <b><a href="https://rioforge.com/">Rioforge</a></b> All Rights Reserved by Rioforge Information Systems</h6>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset:300,
            duration:1000,
            easing :'ease'
        });
        </script>
    </body>
</html>
