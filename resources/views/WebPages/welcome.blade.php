<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RIOSCHOOL English Medium Convent School & Jr.College   </title>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet"  href={{ asset('css/style.css')}}>
<link rel="stylesheet"  href={{ asset('css/line-icon.css')}}>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<!-- Styles -->
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
      
        </style>
    </head>
    <body>
       
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
                                    <a class="nav-link active" aria-current="page" href={{'/'}}>HOME</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{'blog'}}">ACHIEVEMENT</a>
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
                                    <a class="nav-link" href="{{'activity'}}">ACTIVITY</a>
                                    </li> 
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{'contact'}}">CONTACT</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{'login'}}">SIGN IN</a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </nav>

<!-- carousel section satrt -->

            <div id="carouselExample" class="carousel slide" >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src={{asset('images/activity/7.png')}} class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src={{asset('images/activity/9.jpg')}} class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src={{asset('images/activity/14.jpg')}} class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden ">Next</span>
                </button>
                <div class="col-12 bg-light">
                    <h6 class="text-dark py-3"> <marquee behavior="" direction=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laborum reprehenderit vero repellat, neque saepe perferendis! Quas eos dicta doloribus!</marquee> </h6>
                </div>
              </div>

<!-- notice and mission and principle & seo profile  -->
<section id="notice_Mission">
    <div class="container">
        <div class="row px-4 justify-content-between marginTop">
            <div class="col-sm-12 col-md-7 col-lg-7 ">
                <div class="card box noticBoard">
                    <div class="card-header ">
                    <h1><i class="fa-solid fa-newspaper"></i> Notice Board</h1>
                    </div>
                    <div class="card-body justify">
                        <h2>Notice Title Here</h2>
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quibusdam quas cum tenetur rem temporibus modi praesentium illo pariatur ratione minus, eius aspernatur repudiandae officiis quasi, placeat ipsa molestiae magni eaque adipisci dolorum atque 
                        ducimus quo fuga! Quasi tenetur tempora, architecto amet dolorem voluptatum eius aspernatur eligendi ipsa autem consequuntur.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quibusdam quas cum tenetur rem temporibus modi praesentium illo pariatur ratione minus, eius aspernatur repudiandae officiis quasi, placeat ipsa molestiae magni eaque adipisci dolorum atque 
                            ducimus quo fuga! Quasi tenetur tempora, architecto amet dolorem voluptatum eius aspernatur eligendi ipsa autem consequuntur.</p>
                        
                    </div>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 ">
                <div class="row  box mt-4 profileCard" data-aos="fade-left">
                    <div class="col-sm-6 ">
                       <img src={{ asset('images/persident.jpg')}} alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-6 " >
                        <h3>WAHID PATEL</h3>
                        <p>Persident</p>
                    </div>
                </div>
                <div class="row box mt-4 profileCard" data-aos="zoom-in">
                    <div class="col-sm-6 ">
                       <img src={{ asset('images/principle.jpeg')}} alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-6 ">
                        <h3>TASLIMA TADVI</h3>
                        <p>Principle</p>
                    </div>
                </div>
                <div class="row box mt-4 profileCard" data-aos="fade-right">
                    <div class="col-sm-6 ">
                       <img src={{ asset('images/persident.jpg')}} alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-6 ">
                        <h3>AARIF SHAIKH</h3>
                        <p>Vice Priciple</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- hoem about school -->

<section id="backgroundImageFirst">   
<section id="HomeAbout">
    <div class="container">
        <div class="row px-4 justify-content-around marginTop">
            <h2>ABOUT US</h2>
            <div class="col-sm-12 col-md-7 col-lg-7" data-aos="slide-right">
                <video controls autoplay width="100%">
                    <source src={{asset('images/schoolVideo.mp4')}}>
                </video>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 justify mt-4 pl-4" data-aos="slide-left">
                <h3>ABOUT</h3>
                   <p><i class="fa-sharp fa-solid fa-quote-left"></i>
                   Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus numquam nam rerum omnis aspernatur similique odit molestias nobis, modi beatae id neque facilis eius laboriosam hic vero ut corporis repellat.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, laboriosam sapiente? Tempore, commodi aut culpa reiciendis iste quia. Saepe rem delectus ipsam beatae sint deserunt velit aliquam, iste ratione maxime?
                    <i class="fa-sharp fa-solid fa-quote-right"></i></p>  
            </div>
        </div>
    </div>
</section>

<!-- blog here  -->

<section id="HomeBlog">
    <div class="container">
        <div class="row px-3 justify-content-center">
            <h2>Our Latest News</h2>
            <div class="col-sm-12 col-md-8 col-lg-7 box animatedBox" data-aos="flip-right">
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-6" data-aos="zoom-in">
                        <img src={{asset('images/activity/16.jpg')}} alt="" class="img-fluid" >
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <h3 class="text-white" >Anual Gathering Function</h3>
                        <p  class="text-white" >The annual school gathering function is an eagerly awaited event that brings together students, teachers, and parents to celebrate the achievements and successes of the academic year. It is a day filled with excitement, fun, and entertainment, and it is a time to reflect on the hard work and dedication that has gone into making the school year a success. <a href="" class="text-info">ReadMore</a> </p>
                        <p  class="text-white">Date : <b>15 / August / 2023</b></p>  
                        <p  class="text-white">Author : <b>Javed Maniyar</b></p>  
                        <div class="text-end">
                            <!-- <a href=""  class="text-white"> <i class="fa-solid fa-2x fa-circle-arrow-left"></i></a>
                            <a href=""  class="text-white"><i class="fa-solid fa-2x px-4 fa-circle-arrow-right"></i></a> -->
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>

</section>

<section id="trusticonsection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3 col-lg-3 border-end ">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 ">
                        <span><img src={{asset('images/certificate.png')}} alt="" class="img-fluid" srcset="" data-aos="fade-up"></span>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8"> <h3>Most Trusted Institute</h3></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 border-end">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <span><img src={{asset('images/users.png')}} alt="" class="img-fluid" srcset="" data-aos="fade-down"></span>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8"> <h3>5000 +Students</h3></div>
                </div>
            </div>  

            <div class="col-sm-12 col-md-3 col-lg-3 border-end">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <span><img src={{asset('images/stamp.png')}} alt="" class="img-fluid" srcset="" data-aos="fade-up"></span>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8"> <h3>Well Qualified Teachers</h3></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 ">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <span><img src={{asset('images/videochat.png')}} alt="" class="img-fluid" srcset="" data-aos="fade-down"></span>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 swzxcgfvbh"> <h3>World Class Infrastructure</h3></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="secondSectionBG">

<section id="poitsSection">
    <div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-8 text-center ">
                <img src={{asset('images/logo00.png')}} alt="" class="img-fluid">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia ullam ea delectus nostrum animi quae officia non sapiente molestiae expedita
                     accusantium, excepturi velit distinctio fugit aliquam quod, quos temporibus dolor ab doloribus? Vitae, facere magnam.</p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="row justify-content-center px-3 ">
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg1"  data-aos="slide-up">War equipment turns into educational tools.</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox1" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg2"  data-aos="slide-up">Religious disharmony turns into religious peace.</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox2" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg3"  data-aos="slide-up">Garbage and barren land turns into clean environment and fertile soil.</h5>
                        </div>
                </div>        
                <div class="row justify-content-center px-3 ">
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox3" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg4"  data-aos="slide-up">Dirty and muddy water turns into clear and flowing water.</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox4" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg5"  data-aos="slide-up">Individualism to community living.</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                             <div class="circle circlebox5" data-aos="slide-down"></div>
                             <h5 class="pointCard cardbg6"  data-aos="slide-up">Deforestation into afforestation.</h5>
                        </div>
                </div>        
            </div>
        </div>
    </div>
</section>

<!-- our classes information -->

<section>
    <div class="container my-5">
        <div class="row justify-content-around mt-5" id="classesIMG"> 
                <div class="col-sm-12 col-md-3 col-lg-3 cards objective   " >
                     <h3>OBJECTIVE</h3>
                     <p class="mx-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia architecto ex autem a inventore unde quae sint saepe
                         enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem, ratione voluptatibus .</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 cards vission ">
                     <h3>VISSION</h3>
                     <p class="mx-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia architecto ex autem a inventore unde quae sint saepe
                         enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem, ratione voluptatibus .</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 cards mission " >
                     <h3>MISSION</h3>
                     <p class="mx-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt mollitia architecto ex autem a inventore unde quae sint saepe
                         enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem, ratione voluptatibus .</p>
                </div>
           </div>
        </div>
    </div>
</section>
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

    </body>
</html>
