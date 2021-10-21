<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- font awesome 5 free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Poppins font from Google -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <title>BJMS</title>
</head>

<style>
  .img-hover-zoom {
    width: 100%; 
    overflow: hidden;
  }
  .img-hover-zoom img {
    transition: transform .5s ease;
      object-fit: cover;
      width: 100%;
    
  }
  .img-hover-zoom:hover img {
    transform: scale(1.5);
  }
</style>

<body style="">

  <header class="hero container-fluid border-bottom">
    <nav class="hero-nav container px-4 px-lg-0 mx-auto">
      <ul class="nav w-100 list-unstyled align-items-center p-0">
        <li class="hero-nav__item">
          <img class="hero-nav__logo" src="assets/logo/logo2.png">
        </li>
        <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
          <ul class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
            <li class="flex-grow-1">
              <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
                <li class="hero-nav__item">
                  <a href="#contact-us" class="hero-nav__link">Contact Us</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#faq" class="hero-nav__link">FAQ</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#pricing" class="hero-nav__link">Pricing</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#testimonials" class="hero-nav__link">Testimonials</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#features" class="hero-nav__link">Features</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#product" class="hero-nav__link">Product</a>
                </li>
              </ul>
            </li>
          </ul>
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="ft-menu__close-btn animated">
            <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </li>
        <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="text-center px-2">
            <i class="fas fa-bars"></i>
          </button>
        </li>
      </ul>
    </nav>
    <div class="hero__content container mx-auto">
      <div class="row px-0 mx-0 align-items-center">
        <div class="col-lg-6 px-0">
          <div class="" style="background-color: red; width: 115px;">
          <h6 class="ml-2" style="color: white;"><strong>BEST PRICE : </strong></h6>
          </div>
          <h1 class="hero__title mb-3">
           INCREDIBLE PRICES ON  <span class="highlight">ALL YOUR</span> FAVORITE ITEMS
          </h1>
          <p class="hero__paragraph mb-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard
          </p>
          <div class="hero__btns-container">
            <a class="hero__btn btn btn-primary mb-2 mb-lg-0" href="#">
                SHOP NOW
            </a>
           <!--  <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
              Go Premium
            </a> -->
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
            <img src="assets/produk/produk2.png" class="hero__img w-100">
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- 
  <div id="pricing" class="block-17 px-4 space-between-blocks">
    <div class="container">
      <div class="block-17__header col-lg-6 col-xl-7 mx-auto text-center px-0">
       
      </div>
      <div class="block-17__card row flex-column-reverse flex-lg-row justify-content-center">
        <div class="testimonial-card-3 text-center col-lg-6 px-0 d-flex align-items-center justify-content-center">
          <div class="px-4 px-lg-5">
            <img class="person__avatar" src="assets/imgs/profile-2.png">
            <p class="testimonial-card-3__paragraph my-4">
              Lorem Ipsum is simply dummy text of the printing
              and typesetting industry. Lorem Ipsum has been the
              industry’s standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.
            </p>
            <div class="flex-grow-1 d-flex flex-column mb-3">
              <span class="person__name">Ali Boukeroui</span>
              <span class="person__info my-1">indiehackers.com</span>
              <span class="person__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
          </div>
          
        </div>
        <div class="cta-card col-lg-6 px-0">
          <div class="plan-card text-center">
            <h6 class="plan-card__name mb-0">Free Shipping</h6>
            <p class="discount mt-3 mb-0 d-flex align-items-center justify-content-center">
              <span class="discount__old-price mx-2">$300</span>
              <span class="discount__percentage mx-2">50% off</span>
            </p>
            <p class="plan-card__price my-2">$149</p>
            <span class="plan-card__duration">90 Days Money Back Guarenteed</span>
            <ul class="plan-features list-unstyled mt-5 mb-0">
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">The Watch</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">+Bonus: Accessories</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Lifetime Mobile App</span>
              </li>
              <li class="mt-5">
                <a href="#" class="d-block btn btn-primary px-5 mx-auto">
                  Buy Now
                </a>
                <small class="d-block mt-2 text-center">208 Left. Discount ends after 2 weeks</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="container mt-4 mb-4">
      <div class="row">
  <div class="col-sm-6 mt-5 mb-5">
    <div class="card" style="">
      <div class="text ml-3" style="position: absolute; margin-top: 140px;">
          <h4><strong>BEST DEALS</strong></h4>
          <h2><strong>GET 10% OFF <br>FOR MIN. <br>ORDER 10 PCS</strong></h2>
          <button class="btn btn-primary" style="background-color: white; color:black;">SHOP NOW</button>
      </div>
      <img class="card-img-top" src="assets/produk/gambar.webp" alt="Card image cap">
      
    </div>
  </div>
  <div class="col-sm-6 mt-5 mb-5">
      <div class="card" style="">
        <div class="text ml-3" style="position: absolute; margin-top: 140px;">
          <h4><strong>HIGHEST QUALITY VALVE </strong></h4>
          <h2><strong>YOUR SAFETY <br> AND QUALITY <br>PARTNER</strong></h2>
          <button class="btn btn-primary" style="background-color: white; color:black;">SHOP NOW</button>
       </div>

      <img class="card-img-top" src="assets/produk/gambar2.webp" alt="Card image cap">
    </div>
  </div>
</div>
  </div>




 <!--  <div class="container mb-3">
    <div class="card shadow">
      <div class="card-body">
       <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
       </div>
      </div>
    </div>
  </div>
 -->
     

  <!-- ===================================== -->



  <div id="product" class="block-5 space-between-blocks">
    <div class="container">

      <div class="card mb-5">
        <div class="card-body">
         <div class="row">
            <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="assets/produk/dollar.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong>LOW PRICES GUARENTEED</strong></h6>
                </div>
              </div>
              
            </div>
            <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="assets/produk/jam.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong>LOW PRICES GUARENTEED</strong></h6>
                </div>
              </div>
              
            </div>
            <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="assets/produk/settings.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"> <strong>AFTER SALES SERVICES</strong></h6>
                </div>
              </div>
              
            </div><div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="assets/produk/set.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong>QUALITY CONTROL</strong></h6>
                </div>
              </div>
              
            </div>
         </div>
        </div>
      </div>

      <!-- HEADER -->
     
    </div>
  </div>

  <!-- ===================================== -->

  <div id="features" class="block-11 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center">
       
        <h1 class="block__title mb-3">Best Seller</h1>
        <p class="block__paragraph mb-0">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="card-group">
          <div class="card">
            <div class="img-hover-zoom">
              <img class="card-img-top" src="assets/produk/pr1.png" alt="Card image cap">
            </div>
            <div class="card-body shadow">
              <h5 class="card-title text-center"><strong>WIKA PRESSURE GAUGE 232.50.100</strong></h5>
              <p class="text-center" style="color: blue;"><strike>Rp.000.0000</strike></p>
              <p class="text-center">Rp.000.0000</p>
              <center>
              <button class="btn btn-primary">ADD TO CART</button>
            </center>
            </div>
          </div>
          <div class="card shadow">
            <div class="img-hover-zoom">
               <img class="card-img-top" src="assets/produk/pr2.png" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>GLOBE VALVE PN16</strong></h5>
              <p class="text-center" style="color: blue;"><strike>Rp.000.0000</strike></p>
              <p class="text-center">Rp.000.0000</p>
              <center>
              <button class="btn btn-primary">ADD TO CART</button>
            </center>
            </div>
          </div>
          <div class="card shadow">
            <div class="img-hover-zoom">
              <img class="card-img-top" src="assets/produk/pr3.png" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>BALL VALVE JIS10K</strong></h5>
                <p class="text-center" style="color: blue;"><strike>Rp.000.0000</strike></p>
                <p class="text-center">Rp.000.0000</p>
                <center>
                <button class="btn btn-primary">ADD TO CART</button>
              </center>
            </div>
          </div>
          <div class="card shadow">
             <div class="img-hover-zoom">
              <img class="card-img-top" src="assets/produk/pr4.png" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>TEMPERATURE GAUGE A52  & R52</strong></h5>
                <p class="text-center" style="color: blue;"><strike>Rp.000.0000</strike></p>
                <p class="text-center">Rp.000.0000</p>
                <center>
                <button class="btn btn-primary">ADD TO CART</button>
              </center>
            </div>
          </div>
          <div class="card shadow">
             <div class="img-hover-zoom">
               <img class="card-img-top" src="assets/produk/pr5.png" alt="Card image cap">
             </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>3 PCS BODY BALL VALVE</strong></h5>
                <p class="text-center" style="color: blue;"><strike>Rp.000.0000</strike></p>
                <p class="text-center">Rp.000.0000</p>
                <center>
                <button class="btn btn-primary">ADD TO CART</button>
              </center>
            </div>
          </div>
        </div>
        

      </div>

      <!-- End best seller -->

      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center mt-5">
       
        <h1 class="block__title mb-3">ON SALE</h1>
        <p class="block__paragraph mb-0">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>

      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="card-group">
          <div class="card">
            <div class="img-hover-zoom">
             <img class="card-img-top" src="assets/produk/pr1.png" alt="Card image cap">
           </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>WIKA PRESSURE GAUGE 232.50.100</strong></h5>
              <p class="text-center" style="color:blue;"><strike>Rp.000.0000</strike></p>
              <p class="text-center">Rp.000.0000</p>
              <center>
              <button class="btn btn-primary">SHOP NOW</button>
            </center>
            </div>
          </div>
          <div class="card">
            <div class="img-hover-zoom">
              <img class="card-img-top" src="assets/produk/pr2.png" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>WIKA TEMPERATURE GAUGE A52 - 4 INCH</strong></h5>
              <p class="text-center" style="color:blue;"><strike>Rp.000.0000</strike></p>
              <p class="text-center">Rp.000.0000</p>
              <center>
              <button class="btn btn-primary">SHOP NOW</button>
            </center>
            </div>
          </div>
          <div class="card">
            <div class="img-hover-zoom">
              <img class="card-img-top" src="assets/produk/pr3.png" alt="Card image cap">
           </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>WIKA TEMPERATURE GAUGE R52 - 4 INCH</strong></h5>
                <p class="text-center" style="color:blue;"><strike>Rp.000.0000</strike></p>
                <p class="text-center">Rp.000.0000</p>
                <center>
                <button class="btn btn-primary">SHOP NOW</button>
              </center>
            </div>

      </div>



    </div>
  </div>

  <!-- card -->



 <!-- end card -->
  <!-- ======================================== -->

 <!--  <div id="testimonials" class="block-20 space-between-blocks">
    <div class="container">
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">What Buyers Says About Us</h1>
        <p class="block__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row px-2 pt-4">
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard

              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  <!-- <div id="pricing" class="block-17 px-4 space-between-blocks">
    <div class="container">
      <div class="block-17__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">PRICING</h1>
        <p class="block__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="block-17__card row flex-column-reverse flex-lg-row justify-content-center">
        <div class="testimonial-card-3 text-center col-lg-6 px-0 d-flex align-items-center justify-content-center">
          <div class="px-4 px-lg-5">
            <img class="person__avatar" src="assets/imgs/profile-2.png">
            <p class="testimonial-card-3__paragraph my-4">
              Lorem Ipsum is simply dummy text of the printing
              and typesetting industry. Lorem Ipsum has been the
              industry’s standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.
            </p>
            <div class="flex-grow-1 d-flex flex-column mb-3">
              <span class="person__name">Ali Boukeroui</span>
              <span class="person__info my-1">indiehackers.com</span>
              <span class="person__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
          </div>
          <span class="testimonial-card-3__quote-symbol">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>
        <div class="cta-card col-lg-5 px-0">
          <div class="plan-card text-center">
            <h6 class="plan-card__name mb-0">Free Shipping</h6>
            <p class="discount mt-3 mb-0 d-flex align-items-center justify-content-center">
              <span class="discount__old-price mx-2">$300</span>
              <span class="discount__percentage mx-2">50% off</span>
            </p>
            <p class="plan-card__price my-2">$149</p>
            <span class="plan-card__duration">90 Days Money Back Guarenteed</span>
            <ul class="plan-features list-unstyled mt-5 mb-0">
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">The Watch</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">+Bonus: Accessories</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Lifetime Mobile App</span>
              </li>
              <li class="mt-5">
                <a href="#" class="d-block btn btn-primary px-5 mx-auto">
                  Buy Now
                </a>
                <small class="d-block mt-2 text-center">208 Left. Discount ends after 2 weeks</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  <div id="faq" class="block-39 space-between-blocks">
    
  </div>

  <!-- =================================== -->

  <div id="contact-us" class="block-28 space-between-blocks border-top border-bottom">
    <div class="container">
      <div class="row h-100">
        <div class="col-lg-6 h-100 block-28__content-side">
          <div class="contact-info">
            <h5 class="contact-info__title mb-3">Get in Touch</h5>
            <p class="contact-info__paragraph mb-5">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s.
            </p>
            <div class="mb-5">
              <h6 class="contact-info__title-2 mb-3">Jakarta Office</h6>
              <p class="d-flex flex-column">
                <span class="contact-info__item mb-2">Jl. Daan Mogot KM. 18 Green Sedayu Bizpark DM 5 No. 2 <br> Jakarta Barat 11840 - Indonesia. </span>
                <span class="contact-info__item mb-2">
                  <i class="fas fa-phone"></i><span class="mx-2"> Telp. (021) 22522441. </span>
                </span>
                <span class="contact-info__item">
                  <i class="fas fa-fax"></i><span class="mx-2"> Fax. (021) 22522442.</span>
                </span>
              </p>
            </div>
            <div class="mb-5">
              <h6 class="contact-info__title-2 mb-3">Medan Office & Warehouse</h6>
              <p class="d-flex flex-column">
                <span>Jln Sangir Talaud I KIM IV Desa Pematang Johar, Labuhan Deli <br>Sumatera Utara 20373 - Indonesia  </span>
                <span class="contact-info__item mb-2">
                  <i class="fas fa-phone"></i><span class="mx-2"> Telp. (061) 7862299. </span>
                </span>
               <span class="contact-info__item mb-2">
                  <i class="fas fa-fax"></i><span class="mx-2"> Fax. (061) 7874188. </span>
                </span>
                
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 h-100 block-28__form-side">
          <form onsubmit="submitContactForm(event)" class="contact-form text-center">
            <div class="contact-form__header mb-5">
              <h6 class="contact-form__title mb-3">Contact Us</h6>
              <p class="contact-form__paragraph mb-0 mx-auto">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </p>
            </div>
            <input type="text" class="contact-form__input" placeholder="Full Name">
            <input type="email" class="contact-form__input" placeholder="Email">
            <textarea class="contact-form__input" placeholder="Message"></textarea>
            <button class="btn btn-primary w-100">SEND MESSAGE</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- =================================== -->

  <!-- <div class="block-32 space-between-blocks">
    <div class="container">
    
      <div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <h1 class="block__title mb-3">Buy Now And Save 50%</h1>
        <p class="block__paragraph mb-0">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="text-center">
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  <div class="block-44 py-5">
    <div class="container">
      <div class="row px-0 mx-0 justify-content-center align-items-center">
        <div class="block-44__logo-container">
          <img class="block-44__logo" src="assets/logo/logo2.png">
        </div>
            <form class="form-inline">
              <div class="form-group mx-sm-3 mb-2">
                <input type="email" class="form-control" id="email" placeholder="Enter email" required="">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Subcribe</button>
            </form> 
      </div>
    </div>
    <hr class="block-44__divider">
    <div class="container">
      
        <div class="row">
          <div class="col-sm-4">
            <p><strong>BJMS Online</strong></p>
              <ul class="block-44__extra-links d-flex list-unstyled p-0">
                    <li class="mx-2">
                      <a href="#" class="block-44__link m-0">
                         <img src="assets/logo/bjmsonline.png" style="height: 50px;">
                      </a>
                    </li>
                    <li class="mx-2">
                      <a href="#" class="block-44__link m-0">
                         <img src="assets/logo/playstore.png" style="height: 50px;">
                      </a>
                    </li>
                    <li class="mx-2">
                      <a href="#" class="block-44__link m-0">
                        <img src="assets/logo/tokopedia.png" style="height: 50px;">
                      </a>
                    </li>
                     <li class="mx-2">
                      <a href="#" class="block-44__link m-0">
                        <img src="assets/logo/bukalapak.png" style="height: 50px;">
                      </a>
                    </li>
              </ul>
          </div>
          <div class="col-sm-4">
             <p><strong>Contact Us</strong></p>
             <small><li class="fas fa-phone"></li> Telephone: (061) 7862299</small><br>
             <small><li class="fab fa-whatsapp"></li> WA: +62821 6030 7043</small><br>
             <small><li class="fas fa-fax"></li> Fax: (061) 7874188</small><br>
             <small><li class="fas fa-envelope"></li> E-mail: seller@bjmsgroup.com</small><br>

          </div>
          <div class="col-sm-4">
             <p><strong>Social Media</strong></p>
              <h6><a href="https://www.facebook.com/bjmsonline/" target="_blank"><li class="fab fa-facebook"></li></a> Facebook</h6>
              <h6><a href="https://www.instagram.com/bjmsonline/" target="_blank"><li class="fab fa-instagram"></li></a> Instagram</h6>
              <h6><a href="https://id.linkedin.com/company/pt-budijaya-makmursentosa" target="_blank"><li class="fab fa-linkedin"></li></a> linkedin</h6>

          </div>
        </div>
    </div>
  </div>

  <!-- =================================== -->

  <script src="assets/app.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</body>

</html>
