<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-12 box-block"> 
      <!--  box content -->
      <div class="box-content"> 
        <div class="single-product"> 
          <!-- Images -->
          <div class="images col-md-6 col-sm-12 col-xs-12">
            <div class="row"> 
              <!-- Small Images -->
              <div class="thumbs col-md-3 col-sm-3 col-xs-3"  id="thumbs">
                <ul>
                  <li class=""><a href="#a" data-image="<?php echo base_url();?>static/images/products/product1.jpg" data-zoom-image="<?php echo base_url();?>static/images/products/product1.jpg" class="elevatezoom-gallery active" ><img src="<?php echo base_url();?>static/images/products/product1.jpg" alt="small image" /></a></li>
                  <li class=""> <a href="#a" data-image="<?php echo base_url();?>static/images/products/product1-1.jpg" data-zoom-image="<?php echo base_url();?>static/images/products/product1-1.jpg"  class="elevatezoom-gallery" > <img src="<?php echo base_url();?>static/images/products/product1-1.jpg" alt="small image" /></a></li>
                  <li class=""> <a href="#a" data-image="<?php echo base_url();?>static/images/products/product1-2.jpg" data-zoom-image="<?php echo base_url();?>static/images/products/product1-2.jpg" class="elevatezoom-gallery"><img src="<?php echo base_url();?>static/images/products/product1-2.jpg" alt="small image" /></a></li>
                </ul>
              </div>
              <!-- end: Small Images --> 
              <!-- Big Image and Zoom -->
              <div class="big-image col-md-9 col-sm-9 col-xs-9"> <img id="product-image" src="<?php echo base_url();?>static/images/products/product1.jpg" data-zoom-image="<?php echo base_url();?>static/images/products/product1.jpg" alt="big image" /> </div>
              <!-- end: Big Image and Zoom --> 
            </div>
          </div>
          <!-- end: Images --> 
          <div class="product-details col-md-6 col-sm-12 col-xs-12"> 
            
            <!-- Title and rating info -->
            <div class="title">
              <h1><?php echo $place['nama'] ?></h1>
              <div class="rating"> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </div>
            <!-- end: Title and rating info -->
            
            <div class="row"> 
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="map" style="height:318px;"></div>
              </div> 
              
            </div>
          </div>
        </div>
      </div>
      <!-- end: box content --> 
    </div>
  </div>
  <!-- end:row --> 
</div>
<!-- end: container-->

<div class="row clearfix f-space10"></div>
<!-- container -->
<div class="container"> 
  <!-- row -->
  <div class="row"> 
    <!-- tabs -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column box-block product-details-tabs"> 
      
      <!-- Details Info/Reviews/Tags --> 
      <!-- Nav tabs -->
      <ul class="nav nav-tabs blog-tabs nav-justified">
        <li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> Details Info</a></li>
        <li><a href="#reviews" data-toggle="tab"><i class="fa fa-comments fa-fw"></i> Reviews</a></li>
        <li> <a href="#tags" data-toggle="tab"><i class="fa fa-tags fa-fw"></i> Tags </a> </li>
       </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="details-info">
          <p>Energistically repurpose cooperative platforms with end-to-end ideas. Credibly expedite extensible processes rather than functional communities. Holisticly streamline <em class="color1">future-proof</em> infomediaries <a href="#a">through highly</a> efficient e-commerce. <strong>Dynamically productivate</strong> revolutionary growth strategies with installed base initiatives. </p>
          <p><?php echo $place['deskripsi'] ?></p>
          <div class="table-responsive">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>Address</td>
                  <td><?php echo $place['alamat']; ?></td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td><?php echo $place['telepon']; ?></td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td><?php echo $place['website']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $place['email']; ?></td>
                </tr>
                <tr>
                  <td>Facebook</td>
                  <td><?php echo $place['facebook'];?></td>
                </tr>
                <tr>
                  <td>Twitter</td>
                  <td><?php echo $place['twitter']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="reviews">
          <div class="heading"> <span><strong>"Ladies Stylish Handbag"</strong> has 30 review(s)</span>
            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
            <a href="#wr" class="btn color1 normal">Add Review</a> </div>
          <div class="review">
            <div class="review-info">
              <div class="name"><i class="fa fa-comment-o fa-flip-horizontal fa-fw"></i> Fida Khattak</div>
              <div class="date"> on <em>Aug 15, 2013</em></div>
              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
            </div>
            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</div>
          </div>
          <div class="review">
            <div class="review-info">
              <div class="name"><i class="fa fa-comment-o fa-flip-horizontal fa-fw"></i> Fida Khattak</div>
              <div class="date"> on <em>Aug 15, 2013</em></div>
              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
            </div>
            <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</div>
          </div>
          <span class="pull-left">Showing 1 to 2 of 123 (4 Pages)</span>
          <div class="pull-right">
            <ul class="pagination pagination-xs">
              <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
              <li  class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="write-reivew" id="#write-review">
            <h3>Write a reivew</h3>
            <div class="fr-border"></div>
            
            <!-- Form -->
            <form action="#self" id="review_form" method="post">
              <div class="row">
                <div class="col-md-4 col-xs-12"> <a name="wr"> </a>
                  <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5" title="Rocks!" class="fa fa-star">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4" title="Pretty good" class="fa fa-star">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3" title="Cool" class="fa fa-star">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2" title="Kinda bad" class="fa fa-star">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1" title="Oops!" class="fa fa-star">1 star</label>
                  </fieldset>
                  <input type="text" id="name" placeholder="Name">
                  <input type="text" id="email" placeholder="E-mail">
                </div>
                <div class="col-md-8 col-xs-12">
                  <textarea name="" id="review" placeholder="Review" rows="8"></textarea>
                </div>
              </div>
              <button class="btn normal color1 pull-right">Submit</button>
            </form>
            <!-- end: Form --> 
          </div>
        </div>
        <div class="tab-pane" id="tags">
          <div class="tags"> 
            <a href="#a">Free</a> <a href="#a">Minimal</a> <a href="#a">Clean</a> <a href="#a">Flatro</a> <a href="#a">Metro</a> <a href="#a">Flat</a> <a href="#a">Blue</a> <a href="#a">Fashion</a> <a href="#a">Best</a> <a href="#a">Popular</a> <a href="#a">Good</a> <a href="#a">Free</a> <a href="#a">Minimal</a> <a href="#a">Clean</a> <a href="#a">Flatro</a> <a href="#a">Metro</a> <a href="#a">Flat</a> <a href="#a">Blue</a> <a href="#a">Fashion</a> <a href="#a">Best</a> <a href="#a">Popular</a> <a href="#a">Good</a> <a href="#a">Free</a> <a href="#a">Minimal</a> <a href="#a">Clean</a> <a href="#a">Flatro</a> <a href="#a">Metro</a> <a href="#a">Flat</a> <a href="#a">Blue</a> <a href="#a">Fashion</a> <a href="#a">Best</a> <a href="#a">Popular</a> <a href="#a">Good</a> <a href="#a">Free</a> <a href="#a">Minimal</a> <a href="#a">Clean</a> <a href="#a">Flatro</a> <a href="#a">Metro</a> <a href="#a">Flat</a> <a href="#a">Blue</a> <a href="#a">Fashion</a> <a href="#a">Best</a> <a href="#a">Popular</a> <a href="#a">Good</a> <a href="#a">Free</a> <a href="#a">Minimal</a> <a href="#a">Clean</a> <a href="#a">Flatro</a> <a href="#a">Metro</a> <a href="#a">Flat</a> <a href="#a">Blue</a> <a href="#a">Fashion</a> <a href="#a">Best</a> <a href="#a">Popular</a> <a href="#a">Good</a> 
          </div>
        </div>
      </div>
      <!-- end: Tab panes --> 
      <!-- end: Details Info/Reviews/Tags -->
      <div class="clearfix f-space30"></div>
    </div>
    <!-- end: tabs --> 
    
    <!-- sidebar -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box-block sidebar">
      <div class="box-heading"><span>You May Know</span></div>
      <div class="box-content">
        <div class="box-products slide carousel-fade" id="places1">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#places1"></li>
            <li class="" data-slide-to="1" data-target="#places1"></li>
            <li class="" data-slide-to="2" data-target="#places1"></li>
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
        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#places1"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#places1"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        <div class="nav-bg"></div>
      </div>
      <div class="clearfix f-space30"></div>
    </div>
    
    <!-- end: sidebar --> 
    
  </div>
  <!-- row --> 
</div>
<!-- end: container --> 
<div class="row clearfix f-space10"></div>
<!-- Relate Products -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Related Places</span></div>
      <div class="box-content">
        <div class="box-products slide" id="places2">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#places2"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#places2"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product"> 
                <!-- Product -->
                <?php 
                  for ($i=0; $i < 4; $i++) { 
                    echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
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
<!-- end: Related products -->
<div class="row clearfix f-space30"></div>
<script src="<?php echo base_url()?>static/js/jquery.elevatezoom.js" type="text/javascript"></script>

<!-- Google Maps --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> 
<script type="text/javascript" src="<?php echo base_url();?>static/js/gmap3.js"></script> 


<script type="text/javascript">
(function($) {
      var lat="-6.922658";
      var lon="107.616363";
      $('#map').gmap3({
      map:{
      options:{
       center: [lat, lon],
       zoom: 14
      }
      },
      marker:{
      latLng: [lat, lon]
      }
      });

      //SPECIALS
      $('#places1').carousel({
        interval: 4000
      }); 
      //RELATED PRODUCTS
      $('#places2').carousel({
        interval: 4000
      }); 
      
      //Zoom Product
      $("#product-image").elevateZoom({
                          zoomType : "inner",
                          cursor : "crosshair",
                          easing: true,
                           gallery: "thumbs",
                           galleryActiveClass: "active",
                          loadingIcon : true
                        }); 
      $("#product-image").bind("click", function(e) {  
  var ez =   $('#product-image').data('elevateZoom');
  ez.closeAll(); //NEW: This function force hides the lens, tint and window 
  //$.fancybox(ez.getGalleryList());     
  return false;
});
})(jQuery);

 </script>