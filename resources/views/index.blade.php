<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <meta id="csrf_token" name="csrf-token" content="{{ csrf_token() }}">
    <title>Biv2Lab</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>
    <div class="modal fade" style="z-index: 999999;" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="section-header mb-4">          
              <h2 class="section-title" style="font-size: 32px;">Login</h2>
              <hr class="lines">
            </div>
            <form id="login" method="POST">
              <div class="container">
                <div class="row">
                  <div class="col-12 mb-3">
                    <div class="form-group mb-2">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control"  id="email" name="email">
                      <div id="email_error" class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-12 mb-3">
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control"  id="password" name="password">
                      <div id="password_error" class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <div class="text-center mb-3">
                  <button type="submit" class="btn btn-common">Submit</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo" style="padding: 10px;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
              <img class="img-fulid" src="{{asset('img/logo.svg')}}" style="max-height:50px;max-width:60px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#news">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">People</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#research">Lines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#productions">Productions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                @if (Auth::check())
                  <a href="{{route('home')}}" class="nav-link page-scroll">
                    {{session('usr')['first_name']}}
                  </a>
                @else
                  <a class="page-scroll nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                    Login
                  </a>
                @endif
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#hero-area">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#testimonial">People</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#research">Lines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#productions">Productions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            @if (Auth::check())
              <a href="{{route('home')}}" class="nav-link page-scroll">
                {{session('usr')['first_name']}}
              </a>
            @else
              <a class="page-scroll nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                Login
              </a>
            @endif
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">BIVL<sup>2</sup>AB</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Biomedical Imaging, Vision and Learning Laboratory, Computer Engineering and Informatics School, Universidad Industrial de Santander</p>
              <a href="#contact" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Contact with us</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Biomedical Imaging, Vision and Learning Laboratory</h2>
                <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
                  BivL<sup>2</sup>ab is mainly dedicated to solve problems related with visual information, covering from the acquisition and 
                  analysis of medical images to the understanding of complex spatio-temporal patterns in the general context of 
                  computer vision. Such problems are tipically highly variant and challenging, being hence, the proposal of learning strategies fundamental to 
                  stand out significant behaviors from observed data, and to model prior expert knowledge in robust representations.
                </p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- section news -->
    <div id="news" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">News</h2>
          <hr class="lines">
          <!-- <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p> -->
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel text-dark">
              @foreach($news as $new)
                <div class="card m-2 border-0">
                  <img class="card-img-top" src="{{asset($new->photo)}}" alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title" style="font-size: 18px;font-weight: 700;">{{$new->title}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('news.show', $new->pk_new)}}" class="btn-rm ">Show <i class="lnr lnr-arrow-right"></i></a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>        
      </div>
    </div>

              

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title text-white">Our Team</h2>
          <hr class="lines">
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              @foreach($usrs as $usr)
                <a class="testimonial-item">
                  <img src="{{asset($usr->photo)}}" alt="Client Testimonoal" />
                  <div class="testimonial-text">
                    <p>{{substr($usr->biography, 0, 200 )}}</p>
                    <h3>{{$usr->first_name}} {{$usr->last_name}}</h3>
                    @foreach($usr->group('education') as $key => $education)
                        <span class="badge badge-pill text-white {{$pills[$key%7]}}">{{$education}}</span>
                    @endforeach
                    <div class="float-right"></div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    <div id="research" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Lines of research</h2>
          <hr class="lines">
          <!-- <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p> -->
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font">
                    Imaging and Inverse Problems
                  </span>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                      <ul>
                          <li>Image Formation Models</li>
                          <li>Image Reconstruction</li>
                          <li>Biomedical Image Processing</li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                    <span data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Motion Understanding
                    </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                        <li>MU1: Motion Magnification</li>
                        <li>MU2: Gait Analysis</li>
                        <li>MU3: Tracking and Temporal Segmentation</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <span data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Learning and Image representation
                </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                        <li>LIR-1: Learning models</li>
                        <li>LIR-2: Image Data Analytics</li>
                        <li>LIR-3: Fusion Models</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>

    <div id="productions" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title text-white">Productions</h2>
          <hr class="lines">
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel text-dark">
              @foreach($productions as $production)
                <div class="card m-2 border-0">
                  <img class="card-img-top" src="{{asset($production->photo)}}" alt="Card image cap">
                  <div class="card-body">
                    <h6 class="card-title" style="font-size: 18px;font-weight: 700;">{{$production->title}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>        
      </div>
    </div>

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-4">
              <div class="contact-us">
                <h3>Contact With us</h3>
                <div>
                  <div class="text-white mb-3 pl-4">
                    <h6 style="">Lola Bautista Rozo</h6>
                    Assistant professor<br>
                    Email: lxbautis <at> uis dot edu dot co<br>
                    Phone: (+57) 6 344000<br>
                    Escuela de Ingeniería de Sistemas e Informática<br>
                    Universidad Industrial de Santander<br></at>
                  </div>

                  
                  <div class="text-white pl-4">
                    <h6 style="">Fabio Martínez Carrillo</h6>
                    Assistant professor<br>
                    Email: famarcar <at> uis dot edu dot co<br>
                    Phone: (+57) 6 344000 - ext 2110<br>
                    Escuela de Ingeniería de Sistemas e Informática<br>
                    Universidad Industrial de Santander<br></at>
                  </div>
                </div>

                <div class="ml-4 social-icons">
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/bivl2ab/"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/bivl2ab"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="https://www.instagram.com/bivl2ab/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>

                <!-- <div class="contact-address">
                  <p>Centerville Road, DE 19808, US </p>
                  <p class="phone">Phone: <span>(+94 123 456 789)</span></p>
                  <p class="email">E-mail: <span>(contact@mate.com)</span></p>
                </div>
                <div class="social-icons">
                  <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div> -->
              </div>
            </div>     
            <div class="col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Your Name">
                        </div>                                 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Your Email" id="email" class="form-control form-control-sm" name="name" required data-error="Please enter your email">
                        </div> 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control form-control-sm" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                        </div>
                        <div class="submit-button text-center">
                          <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                        </div>
                      </div>
                    </div>            
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
    <script>
      $('form').submit(function(e){
        e.preventDefault()
        const email = $('#email').val();
        const password = $('#password').val();
        $.ajax({
          type: 'POST',
          url: "{{route('login')}}",
          data: {
            _token:$('#csrf_token').attr('content'), 
            email,
            password
          },
          success: function(data) {
            console.log(data);
            if(data.state){
              location.pathname = '/home';
            }else{
              $('#email').addClass('is-invalid')
              $('#password').addClass('is-invalid')
              $('#password_error').html(data.msg);
              $('#email_error').html(data.msg);
            }
          },
          error: function(){
            $('#email').addClass('is-invalid')
            $('#password').addClass('is-invalid')
            $('#password').html('Something went wrong. Try again.');
          }
        }); 
      });
      
    </script>

  </body>
</html>