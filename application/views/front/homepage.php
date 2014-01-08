<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row">    
        <div class="clearfix"></div>
        <!-- Iview Slider -->
        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
            <div id="iview"> 
              <!-- Slide 1 -->
              <div data-iview:image="<?php echo base_url();?>static/images/slide0.jpg" data-iview:pausetime="60000">
                <div class="iview-caption metro-box1 orange" data-transition="wipeUp" data-x="95" data-y="209"> <a href="about.html">
                  <div class="box-hover"></div>
                  <i class="fa fa-comment-o fa-fw"></i> <span>About us</span></a> </div>
                <div class="iview-caption metro-box1 blue" data-transition="wipeUp" data-x="266" data-y="209"> <a href="#a">
                  <div class="box-hover"></div>
                  <i class="fa fa-bullhorn fa-fw"></i> <span>Blog</span></a> </div>
                <div class="iview-caption metro-box2" data-transition="expandLeft" data-x="438" data-y="209">
                  <div class="monthlydeals">
                    <div class="monthly-deals slide" id="monthly-deals">
                      <div class="carousel-inner">
                        <div class="item active"> <a href="#a"> <img alt="" src="<?php echo base_url();?>static/images/slider-deal1.jpg"> </a> </div>
                        <div class="item"> <a href="#a"> <img alt="" src="<?php echo base_url();?>static/images/slider-deal2.jpg"> </a> </div>
                        <div class="item"> <a href="#a"> <img alt="" src="<?php echo base_url();?>static/images/slider-deal3.jpg"> </a> </div>
                        <div class="item"> <a href="#a"> <img alt="" src="<?php echo base_url();?>static/images/slider-deal4.jpg"> </a> </div>
                      </div>
                    </div>
                    <a class="left carousel-control" data-slide="prev" href="#monthly-deals"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#monthly-deals"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
                  <!--  <span>Deals of the month</span> --> 
                </div>
                <div class="iview-caption metro-box1 purple" data-transition="wipeDown" data-x="438" data-y="37"> <a href="#a">
                  <div class="box-hover"></div>
                  <i class="fa fa-female fa-fw"></i> <span>Women Clothing</span></a> </div>
                <div class="iview-caption metro-box1 dark-blue" data-transition="wipeDown" data-x="610" data-y="37"> <a href="#a">
                  <div class="box-hover"></div>
                  <i class="fa fa-male fa-fw"></i> <span>Men Clothing</span></a> </div>
                <div class="iview-caption metro-heading" data-transition="expandLeft" data-x="95" data-y="40">
                  <h1>FLATRO ECOMMERCE HTML5</h1>
                </div>
                <div class="iview-caption metro-heading" data-transition="wipeLeft" data-x="95" data-y="100"> <span>Curabitur aliquet quam id dui posuere blandit. Ante ipsum primis
                  in faucibus orci luctus et ultrices posuere cubilia Curae, Donec velit
                  neque.<br>
                  <a href="#a">read more</a></span> </div>
              </div>
              <!-- Slide 1 -->
              <div data-iview:image="<?php echo base_url();?>static/images/slide1.jpg">
                <div class="iview-caption caption1" data-transition="wipeUp" data-x="100" data-y="10">30%</div>
                <div class="iview-caption caption2" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="140">SPECIAL
                  OFFER</div>
                <div class="iview-caption caption3" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="200">Enthusiastically
                  orchestrate performance based<br>
                  experiences via granular networks.</div>
                <div class="iview-caption btn-more" data-transition="fade" data-x="100" data-y="280"><a href="#a">Learn
                  more</a></div>
              </div>
              <!-- Slide 2 -->
              <div data-iview:image="<?php echo base_url();?>static/images/slide2.jpg">
                <div class="iview-caption caption3 btm-bar" data-height="107px" data-transition="expandRight" data-width="867px" data-x="0" data-y="300">
                  <h1><b>Metro style slider</b> bottom caption!</h1>
                  <p>Energistically enable enabled vortals for cross-unit niche markets.
                    Professionally leverage existing visionary customer service with virtual
                    collaboration and idea-sharing. Distinctively foster ethical content
                    whereas future-proof applications.</p>
                </div>
              </div>
            </div>
          
        </div>
  </div>
</div>
<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>New Places</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc1">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc1"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc1"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product"> 
                <!-- Product -->
                <?php 
                  for ($i=0; $i < 3; $i++) { 
                    echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
                          <div class='product-block'>
                            <div class='image'>
                              <a class='img' href='product.html'><img alt='product info' src='".base_url()."static/images/products/product1.jpg' title='product title'></a> </div>
                            <div class='product-meta'>
                              <div class='name'><a href='product.html'>Place Name</a></div>
                              <div class='big-price'> Address </div>
                              <div class='big-btns'> 
                                <a class='btn btn-default btn-view pull-left' href='#'>Detail</a> 
                                <a class='btn btn-default btn-addtocart pull-right' href='#'>Map</a>
                              </div>
                              <div class='rating'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star-half-o'></i> <i class='fa fa-star-o'></i> </div>
                              <div class='small-btns'>
                                <button class='btn btn-default btn-compare pull-left' data-toggle='tooltip' title='Rate & Review'> <i class='fa fa-star'></i> </button>
                                <button class='btn btn-default btn-wishlist pull-left' data-toggle='tooltip' title='Favorite'> <i class='fa fa-heart fa-fw'></i> </button>
                              </div>
                            </div>
                            <div class='meta-back'></div>
                          </div>
                       </div>";
                   }
                ?>
                <!-- end: Product --> 
              </div>
            </div>
            <!-- end: Items Row --> 
            <!-- Items Row -->
            <div class="item">
              <div class="row box-product"> 
                <!-- Product -->
                <?php 
                  for ($i=0; $i < 3; $i++) { 
                    echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
                          <div class='product-block'>
                            <div class='image'>
                              <a class='img' href='product.html'><img alt='product info' src='".base_url()."static/images/products/product1.jpg' title='product title'></a> </div>
                            <div class='product-meta'>
                              <div class='name'><a href='product.html'>Place Name</a></div>
                              <div class='big-price'> Address </div>
                              <div class='big-btns'> 
                                <a class='btn btn-default btn-view pull-left' href='#'>Detail</a> 
                                <a class='btn btn-default btn-addtocart pull-right' href='#'>Map</a>
                              </div>
                              <div class='rating'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star-half-o'></i> <i class='fa fa-star-o'></i> </div>
                              <div class='small-btns'>
                                <button class='btn btn-default btn-compare pull-left' data-toggle='tooltip' title='Rate & Review'> <i class='fa fa-star'></i> </button>
                                <button class='btn btn-default btn-wishlist pull-left' data-toggle='tooltip' title='Favorite'> <i class='fa fa-heart fa-fw'></i> </button>
                              </div>
                            </div>
                            <div class='meta-back'></div>
                          </div>
                       </div>";
                   }
                ?>
                <!-- end: Product --> 
              </div>
            </div>
            <!-- end: Items Row --> 
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box-block sidebar">
      <div class="box-heading"><span>Places of the Month</span></div>
      <div class="box-content">
        <div class="box-products slide carousel-fade" id="places">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#places"></li>
            <li class="" data-slide-to="1" data-target="#places"></li>
            <li class="" data-slide-to="2" data-target="#places"></li>
          </ol>
          <div class="carousel-inner"> 
            <!-- item -->
            <div class="item active">
              <div class="product-block">
                <div class="image">
                  <a class="img" href="product.html"><img alt="product info" src="<?php echo base_url(); ?>static/images/products/product1.jpg" title="product title"></a> </div>
                <div class="product-meta">
                  <div class="name"><a href="product.html">Place name</a></div>
                  <div class="big-price"> <span class="price-new">Address</div>
                  <div class="big-btns"> 
                    <a class="btn btn-default btn-view pull-left" href="#">Detal</a> 
                    <a class="btn btn-default btn-addtocart pull-right" href="#">Map</a>
                  </div>
                </div>
                <div class="meta-back"></div>
              </div>
            </div>
            <!-- end: item --> 
            <!-- item -->
            <div class="item">
              <div class="product-block">
                <div class="image">
                  <a class="img" href="product.html"><img alt="product info" src="<?php echo base_url(); ?>static/images/products/product1.jpg" title="product title"></a> </div>
                <div class="product-meta">
                  <div class="name"><a href="product.html">Place name</a></div>
                  <div class="big-price"> <span class="price-new">Address</div>
                  <div class="big-btns"> 
                    <a class="btn btn-default btn-view pull-left" href="#">Detal</a> 
                    <a class="btn btn-default btn-addtocart pull-right" href="#">Map</a>
                  </div>
                </div>
                <div class="meta-back"></div>
              </div>
            </div>
            <!-- end: item --> 
            <!-- item -->
            <div class="item">
              <div class="product-block">
                <div class="image">
                  <a class="img" href="product.html"><img alt="product info" src="<?php echo base_url(); ?>static/images/products/product1.jpg" title="product title"></a> </div>
                <div class="product-meta">
                  <div class="name"><a href="product.html">Place name</a></div>
                  <div class="big-price"> <span class="price-new">Address</div>
                  <div class="big-btns"> 
                    <a class="btn btn-default btn-view pull-left" href="#">Detal</a> 
                    <a class="btn btn-default btn-addtocart pull-right" href="#">Map</a>
                  </div>
                </div>
                <div class="meta-back"></div>
              </div>
            </div>
            <!-- end: item --> 
          </div>
        </div>
        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#places"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#places"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        <div class="nav-bg"></div>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Favorites Places</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product"> 
                <!-- Product -->
                <?php 
                  for ($i=0; $i < 4; $i++) { 
                    echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                          <div class='product-block'>
                            <div class='image'>
                              <a class='img' href='product.html'><img alt='product info' src='".base_url()."static/images/products/product1.jpg' title='product title'></a> </div>
                            <div class='product-meta'>
                              <div class='name'><a href='product.html'>Place Name</a></div>
                              <div class='big-price'> Address </div>
                              <div class='big-btns'> 
                                <a class='btn btn-default btn-view pull-left' href='#'>Detail</a> 
                                <a class='btn btn-default btn-addtocart pull-right' href='#'>Map</a>
                              </div>
                              <div class='rating'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star-half-o'></i> <i class='fa fa-star-o'></i> </div>
                              <div class='small-btns'>
                                <button class='btn btn-default btn-compare pull-left' data-toggle='tooltip' title='Rate & Review'> <i class='fa fa-star'></i> </button>
                                <button class='btn btn-default btn-wishlist pull-left' data-toggle='tooltip' title='Favorite'> <i class='fa fa-heart fa-fw'></i> </button>
                              </div>
                            </div>
                            <div class='meta-back'></div>
                          </div>
                       </div>";
                   }
                ?>
                <!-- end: Product -->  
              </div>
            </div>
            <!-- end: Items Row --> 
            <!-- Items Row -->
            <div class="item">
              <div class="row box-product"> 
                <!-- Product -->
                <?php 
                  for ($i=0; $i < 4; $i++) { 
                    echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                          <div class='product-block'>
                            <div class='image'>
                              <a class='img' href='product.html'><img alt='product info' src='".base_url()."static/images/products/product1.jpg' title='product title'></a> </div>
                            <div class='product-meta'>
                              <div class='name'><a href='product.html'>Place Name</a></div>
                              <div class='big-price'> Address </div>
                              <div class='big-btns'> 
                                <a class='btn btn-default btn-view pull-left' href='#'>Detail</a> 
                                <a class='btn btn-default btn-addtocart pull-right' href='#'>Map</a>
                              </div>
                              <div class='rating'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star-half-o'></i> <i class='fa fa-star-o'></i> </div>
                              <div class='small-btns'>
                                <button class='btn btn-default btn-compare pull-left' data-toggle='tooltip' title='Rate & Review'> <i class='fa fa-star'></i> </button>
                                <button class='btn btn-default btn-wishlist pull-left' data-toggle='tooltip' title='Favorite'> <i class='fa fa-heart fa-fw'></i> </button>
                              </div>
                            </div>
                            <div class='meta-back'></div>
                          </div>
                       </div>";
                   }
                ?>
                <!-- end: Product --> 
              </div>
            </div>
            <!-- end: Items Row --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end: Products --> 
<div class="row clearfix f-space30"></div>

<script>

(function($) {
  "use strict";
   $('#iview').iView({
                    pauseTime: 10000,
                    pauseOnHover: true,
                    directionNavHoverOpacity: 0.6,
                    timer: "360Bar",
                    timerBg: '#2da5da',
                    timerColor: '#fff',
                    timerOpacity: 0.9,
                    timerDiameter: 20,
                    timerPadding: 1,
                    touchNav: true,
                    timerStroke: 2,
                    timerBarStrokeColor: '#fff'
                });
   $('#monthly-deals').carousel({
        interval: 3000
    });
    $('#places').carousel({
        interval: 4000
    });
})(jQuery);
</script>