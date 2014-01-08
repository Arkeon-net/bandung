<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="map" style="height:500px;"></div>
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12 box-block">
      <div class="box-content">
        <div class="box-products">          
          <!-- Product Row -->
          <div class="row list-product"> 
            <!-- Product --> 
            <!-- Image -->
            <div class="col-md-4 col-sm-12 col-xs-12 product-image">
              <div class="image">
                <a class="img" href="product.html"><img alt="product info" src="<?php echo base_url();?>static/images/products/product1.jpg" title="product title" class="ani-image"></a> </div>
            </div>
            <!-- end: Image -->
            
            <div class="col-md-8 col-sm-12 col-xs-12 product-title">
              <div class="producttitle">
                <h1><a href="#">Place Name</a></h1>
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <span class="reviews-info">30 review(s)</span> </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 product-title" >
              <div class="productmeta">
                <p>Dramatically innovate granular niches rather than interactive materials. Build ethical leadership skills via alternative manufactured e-enable... <a href="#a">read more</a></p>
                <div class="category-list-btns">
                  <button class="btn normal btn-compare pull-left" data-toggle="tooltip" title="Rate & Review"> <i class="fa normal fa-star fa-fw"></i> </button>
                  <button class="btn normal btn-wishlist pull-left" data-toggle="tooltip" title="Favorite"> <i class="fa normal fa-heart fa-fw"></i> </button>
                  </div>
              </div>
            </div>
          </div>
          <!-- end: Product Row -->
        </div>
      </div>
    </div>
    
    <!-- side bar -->
    <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
      <div class="box-heading"><span>Contact Details</span></div>
      <!-- Contact Details -->
      <div class="box-content contactdetails-box-wr">
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-map-marker fa-fw"></i></span>
          <div class="details">
            <h1>Logoby.us</h1>
            1234 Street,<br/>
            Collage Road, Islamabad, <br/>
            PK 46000</div>
        </div>
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-phone fa-fw"></i></span> <span class="details">Phone: 92 300 9712255 <br/>
          Fax:  92 300 9716116</span> </div>
      </div>
    </div>
    <!-- end:sidebar --> 
  </div>
  <!-- end:row --> 
</div>
<div class="row clearfix f-space10"></div>

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
      
})(jQuery);

 </script>