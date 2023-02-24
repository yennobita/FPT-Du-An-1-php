<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/c30645c964.js"
      crossorigin="anonymous"
    ></script>
    <title>chi-tiet</title>
  </head>
  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
          <div class="d-inline-flex align-items-center h-100">
            <a class="text-body mr-3" href="">About</a>
            <a class="text-body mr-3" href="">Contact</a>
            <a class="text-body mr-3" href="">Help</a>
            <a class="text-body mr-3" href="">FAQs</a>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                My Account
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Sign in</button>
                <button class="dropdown-item" type="button">Sign up</button>
              </div>
            </div>
            <div class="btn-group mx-2">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                USD
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">EUR</button>
                <button class="dropdown-item" type="button">GBP</button>
                <button class="dropdown-item" type="button">CAD</button>
              </div>
            </div>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                EN
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">FR</button>
                <button class="dropdown-item" type="button">AR</button>
                <button class="dropdown-item" type="button">RU</button>
              </div>
            </div>
          </div>
          <div class="d-inline-flex align-items-center d-block d-lg-none">
            <a href="" class="btn px-0 ml-2">
              <i class="fas fa-heart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
            <a href="" class="btn px-0 ml-2">
              <i class="fas fa-shopping-cart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
          </div>
        </div>
      </div>
      <div
        class="now align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex"
      >
        <div class="search-btn">
          <div class="search-item">
            <input type="text" placeholder="Search" />
            <div class="icon">
              <i class="fa fa-search"></i>
              <i class="fa-solid fa-xmark"></i>
            </div>
          </div>
        </div>
        <div>
          <a href="" class="text-decoration-none">
            <img class="header-logo" src="/img/logo pts.png" alt="" />
          </a>
        </div>
        <div class="myaccount-title text-center d-flex">
          <a class="myaccount">
            <i class="menu fa-solid fa-gear" href="#click"></i>
          </a>
          <div
            class="account-list dropdown-menu1 dropdown-menu-right"
            id="_desktop_account_list"
            x-placement="bottom-end"
            style="
              position: absolute;
              transform: translate3d(-375px, 124px, 11px);
              top: 0px;
              right: 100px;
              will-change: transform;
            "
          >
            <div class="nov_sideward_content">
              <div class="account-list-content">
                <div>
                  <a
                    class="login"
                    href="https://greenbee-4.myshopify.com/account/login"
                    rel="nofollow"
                    title="Login"
                  >
                    <i class="fa-solid fa-key"></i><span>Login</span>
                  </a>
                </div>

                <div>
                  <a
                    class="register"
                    href="https://greenbee-4.myshopify.com/account/register"
                    rel="nofollow"
                    title="Register account"
                  >
                    <i class="fa-solid fa-lock"></i
                    ><span>Register account</span>
                  </a>
                </div>

                <div>
                  <a
                    class="check-out"
                    href="https://greenbee-4.myshopify.com/checkout"
                    rel="nofollow"
                    title="Check out"
                  >
                    <i class="fa-solid fa-circle-check"></i
                    ><span>Check out</span>
                  </a>
                </div>
                <div class="link_wishlist">
                  <a
                    class="wishlist"
                    href="/pages/page-wishlist"
                    rel="nofollow"
                    title="My Wishlist"
                  >
                    <i class="fa-solid fa-heart"></i><span>My Wishlist</span>
                  </a>
                </div>
                <div class="list-content d-none d-md-block">
                  <div
                    id="_desktop_currency_selector"
                    class="currency-selector groups-selector"
                  >
                    <ul id="currencies" class="list-inline">
                      <li class="currency__item list-inline-item">
                        <span data-currency="USD" class="selected">USD</span>
                      </li>
                      <li class="currency__item list-inline-item">
                        <span data-currency="EUR">EUR</span>
                      </li>

                      <li class="currency__item list-inline-item">
                        <span data-currency="GBP">GBP</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contentsticky_cart">
          <div id="cart_block">
            <div class="header-cart d-flex align-items-center">
              <div class="site-header__cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <span id="_desktop_cart_count" class="site-header__cart-count">
                  <span id="CartCount">2</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->
    <!-- navbar-sticky -->
    <div
      id="header-sticky"
      class="d-none d-md-block headerr"
      style="background-color: #ffffff"
    >
      <div class="container">
        <div class="now align-items-center justify-content-between">
          <div class="contentstickynew_logo col-xl-3 col-lg-2 col-md-2">
            <div
              class="h2 site-header__logo mb-0"
              itemscope=""
              itemtype="http://schema.org/Organization"
            >
              <a href="/" itemprop="url" class="site-header__logo-image">
                <img
                  class="js img-fluid"
                  src="/img/logo pts.png"
                  alt="Greenbee 4"
                />
              </a>
            </div>
          </div>

          <div class="navbar-nav col-xl-6 col-lg-8 col-md-8 mr-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="shop.html" class="nav-item nav-link">Shop</a>
            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages <i class="fa fa-angle-down mt-1"></i
              ></a>
              <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                <a href="checkout.html" class="dropdown-item">Checkout</a>
              </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
          </div>
          <div
            class="contentstickynew_cart col-xl-3 col-lg-2 col-md-2 d-flex justify-content-end"
          >
            <div id="cart_block">
              <div class="header-cart d-flex align-items-center">
                <div class="site-header__cart">
                  <span class="site-header__cart-icon"></span>
                  <span
                    id="_desktop_cart_count"
                    class="site-header__cart-count"
                  >
                    <span id="CartCount">2</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Start -->
    <div class="navbar-header">
      <div class="container-fluid bg-dark">
        <div class="now-then">
          <div class="col-lg-3 d-none d-lg-block">
            <a
              class="btn d-flex align-items-center justify-content-between bg-primary w-100"
              data-toggle="collapse"
              href="#navbar-vertical"
              style="height: 65px; padding: 0 30px"
            >
              <h6 class="text-dark m-0">
                <i class="fa fa-bars mr-2"></i>Categories
              </h6>
              <i class="fa fa-angle-down text-dark"></i>
            </a>

            <nav
              class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
              id="navbar-vertical"
              style="width: calc(100% - 30px); z-index: 999"
            >
              <div class="navbar-nav w-100">
                <div class="nav-item dropdown dropright">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Dresses <i class="fa fa-angle-right float-right mt-1"></i
                  ></a>
                  <div
                    class="dropdown-menu position-absolute rounded-0 border-0 m-0"
                  >
                    <a href="" class="dropdown-item">Men's Dresses</a>
                    <a href="" class="dropdown-item">Women's Dresses</a>
                    <a href="" class="dropdown-item">Baby's Dresses</a>
                  </div>
                </div>
                <a href="" class="nav-item nav-link">Shirts</a>
                <a href="" class="nav-item nav-link">Jeans</a>
                <a href="" class="nav-item nav-link">Swimwear</a>
                <a href="" class="nav-item nav-link">Sleepwear</a>
                <a href="" class="nav-item nav-link">Sportswear</a>
                <a href="" class="nav-item nav-link">Jumpsuits</a>
                <a href="" class="nav-item nav-link">Blazers</a>
                <a href="" class="nav-item nav-link">Jackets</a>
                <a href="" class="nav-item nav-link">Shoes</a>
              </div>
            </nav>
          </div>
          <div class="col-lg-9">
            <nav
              class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0"
            >
              <a href="" class="text-decoration-none d-block d-lg-none">
                <span class="h1 text-uppercase text-dark bg-light px-2"
                  >Multi</span
                >
                <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1"
                  >Shop</span
                >
              </a>
              <button
                type="button"
                class="navbar-toggler"
                data-toggle="collapse"
                data-target="#navbarCollapse"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-between"
                id="navbarCollapse"
              >
                <div class="navbar-nav mr-auto py-0">
                  <a href="index.html" class="nav-item nav-link active">Home</a>
                  <a href="shop.html" class="nav-item nav-link">Shop</a>
                  <a href="detail.html" class="nav-item nav-link"
                    >Shop Detail</a
                  >
                  <div class="nav-item dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      >Pages <i class="fa fa-angle-down mt-1"></i
                    ></a>
                    <div
                      class="dropdown-menu bg-primary rounded-0 border-0 m-0"
                    >
                      <a href="cart.html" class="dropdown-item"
                        >Shopping Cart</a
                      >
                      <a href="checkout.html" class="dropdown-item">Checkout</a>
                    </div>
                  </div>
                  <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="block_social">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <a
                        href="https://facebook.com/vinovatheme"
                        title="Greenbee 4 on Facebook"
                      >
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://twitter.com/vinovatheme"
                        title="Greenbee 4 on Twitter"
                      >
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://pinterest.com/vinovatheme"
                        title="Greenbee 4 on Pinterest"
                      >
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://vimeo.com/vinovatheme"
                        title="Greenbee 4 on Vimeo"
                      >
                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://instagram.com/vinovatheme"
                        title="Greenbee 4 on Instagram"
                      >
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
      <div class="now px-xl-5">
        <div class="col-12">
          <nav class="breadcrumb bg-light mb-30">
            <a class="breadcrumb-item text-dark" href="#">Home</a>
            <a class="breadcrumb-item text-dark" href="#">Shop</a>
            <span class="breadcrumb-item active">Shop List</span>
          </nav>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="TopContent mb-100 pb-xs-60">
      <div class="product-single now position-static">
        <div class="col-md-6 col-xs-12 position-static">
          <div class="product-single__photos block_img_sticky">
            <div class="proFeaturedImage">
              <div class="block_content d-flex">
                <span
                  class="w-100"
                  style="
                    display: inline-block;
                    position: relative;
                    overflow: hidden;
                  "
                  ><img
                    class="img-fluid image-zoom img-responsive lazyloaded"
                    src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/23_900x900.jpg?v=1610772140"
                  />
                </span>
              </div>
            </div>

            <div id="productThumbs" class="mt-10">
              <div class="thumblist" data-pswp-uid="1">
                <div
                  class="owl-carousel owl-theme owl-loaded owl-drag"
                  data-autoplay="false"
                  data-autoplaytimeout="6000"
                  data-items="5"
                  data-margin="10"
                  data-nav="false"
                  data-dots="false"
                  data-loop="false"
                  data-items_tablet="4"
                  data-items_mobile="5"
                >
                  <div class="owl-stage-outer">
                    <div
                      class="owl-stage"
                      style="
                        transform: translate3d(0px, 0px, 0px);
                        transition: all 0s ease 0s;
                        width: 696px;
                        display: flex;
                      "
                    >
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/23_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/23_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/23_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/32_20a65f1f-6e8f-4f60-b2e8-0d8895dbd896_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/32_20a65f1f-6e8f-4f60-b2e8-0d8895dbd896_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/32_20a65f1f-6e8f-4f60-b2e8-0d8895dbd896_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/33_0fd56928-e79b-4fdf-b69b-15e8fd244a7a_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/33_0fd56928-e79b-4fdf-b69b-15e8fd244a7a_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/33_0fd56928-e79b-4fdf-b69b-15e8fd244a7a_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/34_2a3e3691-827e-4864-8f61-87998f691a5e_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/34_2a3e3691-827e-4864-8f61-87998f691a5e_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/34_2a3e3691-827e-4864-8f61-87998f691a5e_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/35_5c1d1d5f-17ed-4c57-b191-0aa457c37c15_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/35_5c1d1d5f-17ed-4c57-b191-0aa457c37c15_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/35_5c1d1d5f-17ed-4c57-b191-0aa457c37c15_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="owl-item"
                        style="width: 106px; margin-right: 10px"
                      >
                        <div class="thumbItem">
                          <a
                            data-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/38_ae51f00b-b1b1-4d49-96f8-23cdbc270a00_900x900.jpg?v=1610772140"
                            data-zoom-image="//cdn.shopify.com/s/files/1/0526/4677/2928/products/38_ae51f00b-b1b1-4d49-96f8-23cdbc270a00_small.jpg?v=1610772140"
                            class="product-single__thumbnail"
                          >
                            <img
                              src="//cdn.shopify.com/s/files/1/0526/4677/2928/products/38_ae51f00b-b1b1-4d49-96f8-23cdbc270a00_100x125.jpg?v=1610772140"
                              alt="Xiamond Talo Stud Garrings"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="block_information position-static col-md-6 col-xs-12 mt-xs-30"
        >
          <div class="info_content">
            <h1 itemprop="name" class="product-single__title">
              Xiamond Talo Stud Garrings
            </h1>
            <div class="product-single__meta">
              <div
                itemprop="offers"
                itemscope=""
                itemtype="http://schema.org/Offer"
              >
                <meta itemprop="priceCurrency" content="USD" />
                <link
                  itemprop="availability"
                  href="http://schema.org/InStock"
                />

                <div
                  class="group-reviews has-border d-flex align-items-center mb-25"
                >
                  <div class="detail-reviews">
                    <span
                      class="spr-badge"
                      id="spr_badge_6153538732224"
                      data-rating="0.0"
                      ><span class="spr-starrating spr-badge-starrating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i> </span
                      ><span class="spr-badge-caption">No reviews</span>
                    </span>
                  </div>
                </div>

                <div class="available_product d-flex align-items-center">
                  <div class="available_name control-label">Available:</div>
                  <span class="product__available in-stock">
                    <span>In stock</span>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  </span>
                </div>

                <div class="group-single__sku has-border">
                  <p itemprop="sku" class="product-single__sku">
                    <span class="label control-label">SKU:</span>
                    <span class="label-sku">e-1</span>
                  </p>

                  <p itemprop="cat" class="product-single__cat">
                    <span class="label control-label">Category:</span>

                    <a href="/collections/frontpage" title="Home page"
                      >Home page</a
                    >,

                    <a href="/collections/juices" title="Juices">Juices</a>,

                    <a href="/collections/upsell" title="Upsell">Upsell</a>
                  </p>

                  <p itemprop="tags" class="product-single__tags">
                    <span class="label control-label">Tags:</span>

                    <a href="/collections/all/apple" title="">apple</a>,

                    <a href="/collections/all/m" title="">m</a>,

                    <a href="/collections/all/pink" title="">Pink</a>,
                  </p>

                  <div
                    class="product-single__shortdes mb-20"
                    itemprop="description"
                  >
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                    natoque penatibus et magnis dis parturient montes, nascetur
                    ridicu lus mus. Donec quam...
                  </div>
                </div>
              </div>
            </div>

            <p
              class="product-single__price product-single__price-nov-product-template d-flex align-items-center"
            >
              <span class="visually-hidden">Regular price</span>
              <span
                class="product-price__price product-price__price-nov-product-template"
              >
                <span
                  id="ProductPrice-nov-product-template"
                  itemprop="price"
                  content="27.0"
                  class="mr-10"
                  ><span data-currency-usd="$27.00" data-currency="USD"
                    >$27.00</span
                  ></span
                >
              </span>
            </p>
            <form
              action="/cart/add"
              method="post"
              enctype="multipart/form-data"
              class="product-form product-form-nov-product-template"
              data-section="nov-product-template"
            >
              <div class="selectorVariants">
                <style rel="stylesheet" type="text/css">
                  .selectorVariants .selector-wrapper:nth-child(1) {
                    display: none;
                  }
                </style>

                <div class="swatch clearfix" data-option-index="0">
                  <div class="watch_availabel">
                    <div class="header">
                      Size: <span class="variant_current">small</span>
                    </div>
                    <div class="swatch_filter">
                      <div
                        data-value="small"
                        class="swatch-element small available"
                      >
                        <label for="swatch-0-small"> small </label>
                      </div>
                      <div
                        data-value="medium"
                        class="swatch-element medium available"
                      >
                        <label for="swatch-0-medium"> medium </label>
                      </div>
                      <div
                        data-value="large"
                        class="swatch-element large available"
                      >
                        <label for="swatch-0-large"> large </label>
                      </div>
                      <div
                        data-value="ultra"
                        class="swatch-element ultra available"
                      >
                        <label for="swatch-0-ultra"> ultra </label>
                      </div>
                    </div>
                  </div>
                </div>

                <style rel="stylesheet" type="text/css">
                  .selectorVariants .selector-wrapper:nth-child(2) {
                    display: none;
                  }
                </style>

                <div class="swatch clearfix" data-option-index="1">
                  <div class="watch_availabel">
                    <div class="header">
                      Color: <span class="variant_current">blue</span>
                    </div>
                    <div class="swatch_filter">
                      <div
                        data-value="blue"
                        class="swatch-element color blue available"
                      >
                        <div class="tooltip">blue</div>

                        <label for="swatch-1-blue" style="background: blue">
                          <span class="name_color">blue</span>
                        </label>
                      </div>

                      <div
                        data-value="red"
                        class="swatch-element color red available"
                      >
                        <div class="tooltip">red</div>

                        <label for="swatch-1-red" style="background: red">
                          <span class="name_color">red</span>
                        </label>
                      </div>

                      <div
                        data-value="orange"
                        class="swatch-element color orange available"
                      >
                        <div class="tooltip">orange</div>

                        <label for="swatch-1-orange" style="background: orange">
                          <span class="name_color">orange</span>
                        </label>
                      </div>

                      <div
                        data-value="green"
                        class="swatch-element color green available"
                      >
                        <div class="tooltip">green</div>

                        <label for="swatch-1-green" style="background: green">
                          <span class="name_color">green</span>
                        </label>
                      </div>

                      <div
                        data-value="pink"
                        class="swatch-element color pink available"
                      >
                        <div class="tooltip">pink</div>

                        <label for="swatch-1-pink" style="background: pink">
                          <span class="name_color">pink</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="group-quantity" style="margin-top: 0px">
                <div class="product_option_sub">
                  <div class="product-form__item product-form__item--submit">
                    <button
                      data-handle="xiamond-talo-stud-garrings"
                      type="submit"
                      name="add"
                      id="AddToCart"
                      class="btnAddToCart btn product-form__cart-submit mb-15"
                    >
                      <span id="AddToCartText">Add to cart</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>

            <div class="productbuttons d-flex align-items-center mt-40 pb-30">
              <a
                target="_blank"
                href="//www.facebook.com/sharer.php?u=https://greenbee-4.myshopify.com/products/xiamond-talo-stud-garrings"
                class="btn--share share-facebook"
                title="Share on Facebook"
              >
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <span class="share-title" aria-hidden="true">Facebook</span>
                <span class="visually-hidden">Share on Facebook</span>
              </a>

              <a
                target="_blank"
                href="//twitter.com/share?text=&amp;url=https://greenbee-4.myshopify.com/products/xiamond-talo-stud-garrings"
                class="btn--share share-twitter"
                title="Tweet on Twitter"
              >
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <span class="share-title" aria-hidden="true">Tweeter</span>
                <span class="visually-hidden">Tweet on Twitter</span>
              </a>

              <a
                target="_blank"
                href="//pinterest.com/pin/create/button/?url=https://greenbee-4.myshopify.com/products/xiamond-talo-stud-garrings&amp;media=//cdn.shopify.com/s/files/1/0526/4677/2928/products/23_1024x1024.jpg?v=1610772140"
                class="btn--share share-pinterest"
                title="Pin on Pinterest"
              >
                <i class="fa fa-pinterest" aria-hidden="true"></i>
                <span class="share-title" aria-hidden="true">Pin it</span>
                <span class="visually-hidden">Pin on Pinterest</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="now product-single__tabs mt-100 mt-lg-60">
        <div>
          <div class="tab-list">
            <div class="tab-item actives" data-tab="1">Description</div>
            <div class="tab-item" data-tab="2">Customer reviews</div>
            <div class="tab-item" data-tab="3">Delivery policy</div>
            <div class="tab-item" data-tab="4">Returns & Exchanges Policy</div>
            <div class="tab-item" data-tab="5">Video</div>
          </div>
        </div>

        <div class="tab-content">
          <div class="tab-new actives data1" data-tab="1">
            <div>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
              commodo ligula eget dolor. Aenean massa. Cum sociis natoque
              penatibus et magnis dis parturient montes, nascetur ridicu lus
              mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
              quis, sem. Nulla consequat massa quis enim. Donec pede justo,
              fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum
              dolor sit amet, consectetuer adipiscing elit.&nbsp;
            </div>
            <div><br /></div>
            <div>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
              commodo ligula eget dolor. Aenean massa. Cum sociis natoque
              penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
              sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
              vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit
              amet, consectetuer adipiscing elit.&nbsp;
            </div>
          </div>

          <div class="tab-new data2" data-tab="2">
            <div>
              <div class="spr-container">
                <div class="spr-header">
                  <h2 class="spr-header-title">Customer Reviews</h2>
                  <div class="spr-summary rte">
                    <span class="spr-summary-caption">No reviews yet</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-new data3" data-tab="3">
            <div class="product-description">
              <p><strong>Lorem ipsum dolor sit amet</strong></p>
              <p><br /></p>
              <p>
                Vivamus a placerat dolor. Proin ut vehicula mauris. Etiam
                sagittis augue ipsum. Aliquam vestibulum massa nulla,
                ullamcorper aliquam diam feugiat vel. Fusce porttitor ultrices
                ante, posuere vehicula lacus tempor eu. Sed et purus et massa
                mattis aliquet ac vel dolor. Pellentesque eros lectus, placerat
                nec finibus ac, lobortis eu risus.
              </p>
              <p></p>
              <p>
                Donec fringilla metus ligula, sit amet fermentum ex laoreet non
              </p>
              <p><br /></p>
              <p>- Ribbed and double stitched collar and armholes</p>
              <p>- High-density fabric for vivid print clarity</p>
              <p>- Machine-wash safeSingle right rear button flap pocket</p>
              <p>- Products are proudly printed in the United States</p>
              <p><br /></p>
              <p>Curabitur egestas suscipit odio. Nam vitae aliquam dui</p>
              <p></p>
              <p>
                in laoreet elit. In posuere augue id velit placerat, vitae
                porttitor leo aliquet. Aenean non ligula sed lorem eleifend
                aliquam. Morbi posuere faucibus viverra. Proin ullamcorper,
                lorem lacinia cursus finibus.
              </p>
            </div>
          </div>

          <div class="tab-new data4" data-tab="4">
            <div class="product-description">
              <p>
                <em
                  ><strong
                    >Nullam at mi accumsan, fermentum turpis at, hendrerit
                    tortor</strong
                  ></em
                >
              </p>
              <p><br /></p>
              <p>
                Vivamus commodo magna rutrum ipsum convallis luctus. Maecenas
                sollicitudin tincidunt sem at consectetur. Sed ligula elit,
                sodales feugiat porttitor non, commodo in ipsum. Donec vehicula
                orci et pharetra laoreet. Donec feugiat, nibh ac ornare
                hendrerit, dui augue semper felis, a finibus dui felis quis
                magna. Curabitur a ligula purus. Suspendisse vestibulum lorem
                non tellus aliquet blandit.
              </p>
              <p>
                Proin cursus sollicitudin scelerisque. Donec ultrices elit quis
                magna lobortis porttitor. Quisque et consectetur mauris. Sed
                facilisis malesuada ante eget blandit. Class aptent taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos
                himenaeos. Pellentesque rutrum mattis ex ac sagittis. Nulla
                convallis euismod ipsum, a mollis sapien fringilla eget. Nam
                dignissim ornare nisi, in bibendum nibh auctor id.
              </p>
              <p>
                Quisque dictum justo id velit dapibus, id mollis diam tincidunt.
                Donec luctus tincidunt ultrices. Sed condimentum ante accumsan,
                sagittis lorem quis, dictum enim. Nam et facilisis odio. Ut
                iaculis dui non interdum accumsan. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Fusce lacus sem, molestie non
                convallis nec, tristique a lacus. Proin eget lacus semper dui
                imperdiet accumsan. Morbi sagittis erat ac justo congue, a
                ornare tortor mollis. Aenean eu vulputate diam. Praesent
                suscipit ex non elit finibus ultricies.
              </p>
            </div>
          </div>
          <div class="tab-new data5" data-tab="5">
            <div class="iframe-video">
              <iframe
                class="embed-responsive-item"
                src="https://www.youtube.com/embed/UqyD2PgOw9Q"
                id="video"
                allowfullscreen=""
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

 <!-- vector-top -->

    <div class="footer_newsletter pt-120">
      <div class="container">
        <div class="b_news text-center pb-65">
          
            <img src="//cdn.shopify.com/s/files/1/0526/4677/2928/files/icon-7_120x.png?v=1613581322" class="icon_news" alt="img">
          
          
          <div class="title-block mb-5">
            Sign Up For Newsletters
          
          </div>
          
            <div class="des mb-35">Sign up for newsletter to receive special offers and exclusive news about Greenbee products</div>
          
          <div class="section-content">
                <div class="input-group">
                  <input type="hidden" name="contact[tags]" value="newsletter">
                  <input type="email" name="contact[email]" id="Email_Footer" class="input-group__field newsletter__input form-control" value="" placeholder="Enter your email">
                  <div class="input-group__btn">
                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe_footer">
                      <span class="newsletter__submit-text--large">Subscribe</span>
                    </button>
                  </div>
                </div>
              
            </form>
          </div>
        </div>
      </div>
      
        <div class="footer_policy pt-80 pb-30 mt-75">
          <div class="container">
            <div class="row">
                  <div class="nov-policy-item d-flex d-md-block d-lg-flex align-items-center col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="b_icon nv-mr-20 mb-md-10">
                      <img src="//cdn.shopify.com/s/files/1/0526/4677/2928/files/p-1_45x.png?v=1613581324" alt="icon_policy">
                    </div>
                    <div>
                      <div class="title-policy">cash on delivery</div>
                      <div class="desc-policy">
                        Diverse and fast payment</div>
                    </div>
                  </div>
                
              
                
                  <div class="nov-policy-item d-flex d-md-block d-lg-flex align-items-center col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="b_icon nv-mr-20 mb-md-10">
                      <img src="//cdn.shopify.com/s/files/1/0526/4677/2928/files/p-2_45x.png?v=1613581324" alt="icon_policy">
                    </div>
                    <div>
                      <div class="title-policy">FREE SHIPPING</div>
                      <div class="desc-policy">Fast packing and shipping</div>
                    </div>
                  </div>
                
              
                
                  <div class="nov-policy-item d-flex d-md-block d-lg-flex align-items-center col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="b_icon nv-mr-20 mb-md-10">
                      <img src="//cdn.shopify.com/s/files/1/0526/4677/2928/files/p-3_45x.png?v=1613581324" alt="icon_policy">
                    </div>
                    <div>
                      <div class="title-policy">money back guarantee</div>
                      <div class="desc-policy">Affordable products and reputable returns</div>
                    </div>
                  </div>
                
              
            </div>
          </div>
        </div>
      
    </div>
    <!-- footer -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="now px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
          <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
          <p class="mb-4">
            No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et
            et dolor sed dolor. Rebum tempor no vero est magna amet no
          </p>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street,
            New York, USA
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
          </p>
          <p class="mb-0">
            <i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890
          </p>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Our Shop</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Shop Detail</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Checkout</a
                >
                <a class="text-secondary" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Our Shop</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Shop Detail</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a
                >
                <a class="text-secondary mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Checkout</a
                >
                <a class="text-secondary" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
              <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
              <form action="">
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Your Email Address"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-primary">Sign Up</button>
                  </div>
                </div>
              </form>
              <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
              <div class="d-flex">
                <a class="btn btn-primary btn-square mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-primary btn-square mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-primary btn-square mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-primary btn-square" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="now border-top mx-xl-5 py-4"
        style="border-color: rgba(256, 256, 256, 0.1) !important"
      >
        <div class="col-md-6 px-xl-0">
          <p class="mb-md-0 text-center text-md-left text-secondary">
            &copy; <a class="text-primary" href="#">Domain</a>. All Rights
            Reserved. Designed by
            <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
          </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
          <img class="img-fluid" src="img/payments.png" alt="" />
        </div>
      </div>
    </div>
    <script src="/js/main-style.js"></script>
  </body>
</html>
