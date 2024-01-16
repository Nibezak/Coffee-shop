<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Convect Coffee</title>

    <!-- fav icon -->
    <link rel="stylesheet" href="assets/img/favicon.png" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- boxicons -->
    <link rel="stylesheet" href="
    <link
      rel=" stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- or -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    ">
  </head>
  <style>
    /* Basic styles for navigation */
    .nav {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .nav__item {
      position: relative;
      display: inline-block;
      margin-right: 10px;
    }

    .nav__link {
      text-decoration: none;
      color: #dcdcdc;
      padding: 10px;
      display: block;
    }

    /* Dropdown styles */
    .dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      border: 1px solid #ddd;
      background: black;
    }

    .nav__item:hover .dropdown {
      display: block;
    }

    .dropdown__item {
      border-radius: 10px;
      padding: 10px;
      width: 200px;
      color: #dcdcdc;
      border-bottom: 1px solid #878787db;
    }
    .nav__link {
      text-decoration: none;
      color: #dcdcdc; /* Set the color of the <a> tags */
      padding: 10px;
      display: block;
    }
    .nav__link:hover {
      color: #dcdcdc;
    }
    .blog__cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: -10px; /* Adjust the margin as needed */
        }

        /* Custom styles for the blog card */
        .blog__card {
            width: calc(33.33% - 20px); /* Adjust the width and margin as needed */
            height: 400px; /* Set a fixed height for the card */
            border: 1px solid #ddd; /* Add border for better visibility */
            overflow: hidden; /* Hide overflow content */
            margin: 10px; /* Add margin as needed */
            box-sizing: border-box;
        }

        .blog__image {
            position: relative;
            height: 200px; /* Set a fixed height for the thumbnail */
            overflow: hidden; /* Hide overflow content */
        }

        .coffee_image {
            width: 100%;
            height: auto;
        }

        .blog__data {
            padding: 15px;
        }

        .blog__title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Limit the number of lines to 2 */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog__description {
            margin-bottom: 10px;
            overflow: hidden; /* Hide overflow content */
            text-overflow: ellipsis; /* Add ellipsis for long text */
            white-space: nowrap; /* Prevent text from wrapping */
        }

        .blog__footer {
            display: flex;
            justify-content: space-between;
        }

        .blog__reaction {
            display: flex;
            align-items: center;
        }

        .pill {
            display: inline-block;
            padding: 8px 16px;
            background-color: #000;
            color: #fff;
            border-radius: 20px; /* Adjust the border-radius for the desired pill shape */
        }

        /* Media query for small screens */
        @media (max-width: 768px) {
            .blog__card {
                width: calc(100% - 20px); /* Full width for small screens */
            }
        }
  </style>
  <body>
    <!--==================== LOADER ====================-->

    <div class="load" id="load">
      <img src="assets/img/loadcoffee.gif" alt="" class="load__gif" />
    </div>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo">
          <img src="assets/img/image.png" alt="" class="nav__logo-img" />
          Convect Coffee
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
    
            <li class="nav__item">
              <a href="#products" class="nav__link">All Coffee</a>
            </li>
            <li class="nav__item">
              <a href="#premium" class="nav__link">Gallery</a>
            </li>
            <li class="nav__item">
              <a href="#premium" class="nav__link">Blends</a>
            </li>

            <li class="nav__item">
              <a href="#blog" class="nav__link">Learn More</a>
              <div class="dropdown">
                <div class="dropdown__item">
                  <a href="nav__link" style="color: #dcdcdc">About us</a>
                </div>
                <div class="dropdown__item">
                  <a href="nav__link" style="color: #dcdcdc">Videos</a>
                </div>
              </div>
            </li>
            
        <li class="nav__item">
            @auth
                <a href="/accounts/profile" class="nav__link">Profile</a>
            @endauth
        </li>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <!-- toggle button -->
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main>
      <!--==================== HOME ====================-->
      <section class="home grid" id="home">
        <div class="home__container">
          <div class="home__content container">
            <h1 class="home__title">
              Choose Your Favorite Coffee And Enjoy<span>.</span>
            </h1>
            <p class="home__description">Buy The Best And Delicious Coffees.</p>

            <div class="home__data">
              <div class="home__data-group">
                <h2 class="home__data-number">120K</h2>
                <h3 class="home__data-title">Testimonials</h3>
                <p class="home__data-description">
                  Testimonials from various customers who trust us.
                </p>
              </div>

              <div class="home__data-group">
                <h2 class="home__data-number">340+</h2>
                <h3 class="home__data-title">Exclusive Product</h3>
                <p class="home__data-description">
                  Premium preparation with quality ingredients.
                </p>
              </div>
            </div>

            <a href="#specialty">
              <img src="assets/img/scroll.png" alt="" class="home__scroll" />
            </a>
          </div>
        </div>

        <img src="assets/img/home.png" alt="" class="home__img" />
      </section>

      <!--==================== ESPECIALTY ====================-->
      <div class="specialty section container" id="specialty">
        <div class="specialty__container">
          <div class="specialty__box">
            <h2 class="section__title">
              Specialty coffees that make you happy and cheer you up!
            </h2>

            <div>
              <a href="#" class="button specialty__button"> see moro </a>
            </div>
          </div>

          <div class="specialty__category">
            <div class="specialty__group specialty__line">
              <img
                src="assets/img/specialty1.png"
                alt=""
                class="specialty__img"
              />

              <h3 class="specialty__title">Selected Coffee</h3>
              <p class="specialty__description">
                We select the best premium coffee, for a true taste.
              </p>
            </div>

            <div class="specialty__group specialty__line">
              <img
                src="assets/img/specialty2.png"
                alt=""
                class="specialty__img"
              />

              <h3 class="specialty__title">Delicious Cookies</h3>
              <p class="specialty__description">
                Enjoy your coffee with some hot cookies
              </p>
            </div>

            <div class="specialty__group">
              <img
                src="assets/img/specialty3.png"
                alt=""
                class="specialty__img"
              />

              <h3 class="specialty__title">Enjoy at Home</h3>
              <p class="specialty__description">
                Enjoy the best coffee in the comfort of your home.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--==================== PRODUCTS ====================-->
      <section class="products section" id="products">
        <div class="products__container container">
          <h2 class="section__title">Choose our delicious and best Coffee</h2>
          <div class="blog__cards">
   
            @foreach($products as $product)
            <article class="blog__card">
                <div class="blog__image">
                    <img src="{{$product->thumbnail}}" alt="" class="coffee_image" />
                    <a href="#" class="blog__button">
                        <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>
                <div class="blog__data">
                    <h2 class="blog__title">{{$product->name}}</h2>
                    <p class="blog__description">
                        {{$product->verse}}
                    </p>
                    <div class="blog__footer">
                        <div class="blog__reaction">
                            <span class="pill">Price {{$product->price}} RWF</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
        </div>            </div>
          
      </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container">
        <h1 class="footer__title">coffee.</h1>
        <div class="footer__content grid">
          <div class="footer__data">
            <p class="footer__description">Subscribe to our newsletter</p>
            <div class="footer__newsletter">
              <input
                type="email"
                placeholder="your email address"
                class="footer__input"
              />
              <button class="footer__button">
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>

          <div class="footer__data">
            <h2 class="footer__subtitle">Address</h2>
            <p class="footer__information">
              Convect coffe <br />
              Kigali, Rwanda
            </p>
          </div>

          <div class="footer__data">
            <h2 class="footer__subtitle">Contact</h2>
            <p class="footer__information">
              +8801760-670045 <br />
              ConvectCoffee@email.com
            </p>
          </div>

          <div class="footer__data">
            <h2 class="footer__subtitle">Office</h2>
            <p class="footer__information">
              Monday - Saturday <br />
              9AM - 10PM
            </p>
          </div>
        </div>

        <div class="footer__group">
          <div class="footer__group">
            <ul class="footer__social">
              <a
                href="https://www.facebook.com/"
                target="blank"
                class="footer__social-link"
              >
                <i class="bx bxl-facebook"></i>
              </a>
              <a
                href="https://www.instagram.com/"
                target="blank"
                class="footer__social-link"
              >
                <i class="bx bxl-instagram"></i>
              </a>
              <a
                href="https://twitter.com/"
                target="blank"
                class="footer__social-link"
              >
                <i class="bx bxl-twitter"></i>
              </a>
            </ul>

            <span class="footer__copy">
              &#169; Convect Cafe. All rigths reserved.
            </span>
          </div>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt"></i>
    </a>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
