<?php
 include('header.php');
 ?>
 
 <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
 
 
 
<style>
 @media screen and (min-device-width: 768px) and (max-device-width: 991px) { 
 .gallery1{
     padding: 17px;
     margin-top:4px;
    border: 1px solid #ccc;
box-shadow: 0px 17px 13px 0px rgb(0 15 5 / 24%) !important;
    border-radius: 15px;
}
}


.section-title:before {
    position: absolute;
    content: '';
    height: 6px;
    width: 70px;
    margin-left: -90px;
    bottom: 40px;
    border-radius: 50px;
    background-color:  #6C55F9;
}
.section-title:after {
    position: absolute;
    content: '';
    height: 6px;
    width: 70px;
    margin-left: 20px;
    bottom: 40px;
    border-radius: 50px;
    background-color: #6C55F9;
}

.section-title {
    font-size: 30px;
    color: #333;
    line-height: 52px;
    font-weight: 700;
    padding-bottom: 15px;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
}





   .gallery2 {
     padding: 17px;
    border: 1px solid #ccc;
box-shadow: 0px 17px 13px 0px rgb(0 15 5 / 24%) !important;
    border-radius: 15px;
}

 .gallery1 {
     padding: 17px;
     margin:35px;
    border: 1px solid #ccc;
    box-shadow: 0px 17px 13px 0px rgb(0 15 5 / 24%) !important;
    border-radius: 15px;


}

.gallery1:hover {
  border: 1px solid #777; 
  transform: scale(1.2);
  transition-duration: 0.3s;
 
  
}

.gallery1 img {
  width: 100%;
  height: 280px;
  object-fit: cover;
}

.desc {
  padding: 15px;
  text-align: center;
}

.page-banner1 {
  position: relative;
  margin-top: 16px;
  margin-bottom: 16px;
  height: 320px;
  background-color: #F6F5FC;
  color: #645F88;
  border-radius: 30px;
  z-index: 10;
}

.page-banner1.home-banner {
  height: auto;
}

.page-banner1.home-banner .img-fluid {
  max-width: 400px;
  margin: 0 auto;
}

.page-banner1.home-banner .btn-scroll {
  position: absolute;
  bottom: -14px;
  left: 0;
  right: 0;
  margin: auto;
  width: 26px;
  height: 40px;
  line-height: 44px;
  background-color: #fff;
  color: #645F88;
  text-align: center;
  border-radius: 40px;
  box-shadow: 0 2px 6px rgba(100, 95, 136, 0.24);
  transition: all .2s ease;
}

.page-banner1.home-banner .btn-scroll:hover {
  text-decoration: none;
  background-color:rgb(68,215,249) !important;
  color: #fff;
}
</style>
    <div class="container">
      <div class="page-banner1" style="    background-image: url(https://images.unsplash.com/photo-1620503374956-c942862f0372?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);background-repeat: round;object-fit: cover;">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ul>
            </nav>
            <h1 class="text-center">Our Gallery</h1>
          </div>
        </div>
      </div>
    </div>
 



<!-- Gallery -->
<div class="ak" data-aos="fade-up">
  <div class="row mb-5" style="justify-content:center;">  
<div class="col-lg-3 col-md-3 card-image gallery1">
<a href="images/1.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/1.jpeg" alt="Image Gallery">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
  <a href="images/2.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/2.jpeg" alt="Forest" >
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class=" col-lg-3 col-md-3 card-image gallery1">
 <a href="images/3.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/3.jpeg" alt="Northern Lights">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
<a href="images/4.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/4.jpeg" alt="Mountains" >
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 gallery1">
<a href="images/5.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/5.jpeg" alt="Cinque Terre">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
 <a href="images/6.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/6.jpeg" alt="Forest">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
 <a href="images/7.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/7.jpeg" alt="Northern Lights" >
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
  <a href="images/8.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/8.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
 <a href="images/9.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/9.jpeg" alt="Cinque Terre" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
 <a href="images/10.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/10.jpeg" alt="Forest" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
<a href="images/11.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/11.jpeg" alt="Northern Lights" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
 <a href="images/12.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/12.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1">
<a href="images/13.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/13.jpeg" alt="Cinque Terre" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1" >
 <a href="images/14.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/14.jpeg" alt="Forest" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<div class="col-lg-3 col-md-3 card-image gallery1" >
 <a href="images/15.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/15.jpeg" alt="Northern Lights" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

<!--<div class="col-lg-3 col-md-3 card-image gallery1">-->
<!--<a href="images/16.jpeg" data-fancybox="gallery" data-caption="">-->
<!--    <img src="images/16.jpeg" alt="Mountains" width="600" height="400">-->
<!--  </a>-->
  <!--<div class="desc">Add a description of the image here</div>-->
<!--</div>-->

<!--<div class="col-lg-3 col-md-3 card-image gallery1">-->
<!-- <a href="images/17.jpeg" data-fancybox="gallery" data-caption="">-->
<!--    <img src="images/17.jpeg" alt="Cinque Terre" width="600" height="400">-->
<!--  </a>-->
  <!--<div class="desc">Add a description of the image here</div>-->


<div class="col-lg-3 col-md-3 card-image gallery1">
<a href="images/18.jpeg" data-fancybox="gallery" data-caption="">
    <img src="images/18.jpeg" alt="Forest" width="600" height="400">
  </a>
  <!--<div class="desc">Add a description of the image here</div>-->
</div>

</div>
</div>



<h3 class="section-title mb-1">Video</h3>
<div class="row mt-0" data-aos="fade-up" style=" justify-content: center;padding:25px;">
    
<div class="col-lg-3  col-md-3 card-image gallery2 mt-5" a href="video/v1.mp4" data-fancybox="gallery" data-caption="">
 <video width="100%" controls>
  <source src="video/v1.mp4" type="video/mp4">
  <source src="video/v1.ogg" type="video/ogg">
</video>

</div>

<div class="col-lg-3 offset-lg-1 col-md-3 card-image gallery2 mt-5" a href="video/v2.mp4" data-fancybox="gallery" data-caption="">
 <video width="100%" controls>
  <source src="video/v2.mp4" type="video/mp4">
  <source src="video/v2.ogg" type="video/ogg">
</video>

</div>

<div class="col-lg-3 offset-lg-1 col-md-3 card-image gallery2 mt-5" a href="video/v3.mp4" data-fancybox="gallery" data-caption="">
 <video width="100%" controls>
  <source src="video/v3.mp4" type="video/mp4">
  <source src="video/v3.ogg" type="video/ogg">
 
</video>

</div>

<div class="col-lg-3 col-md-3 card-image gallery2 mt-5 mb-5" a href="video/v4.mp4" data-fancybox="gallery" data-caption="">
 <video width="100%" controls>
  <source src="video/v4.mp4" type="video/mp4">
  <source src="video/v4.ogg" type="video/ogg">
 
</video>

</div>
</div>


<!-- Gallery -->
  <!--<div class="page-section">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-6">-->
  <!--        <div class="card-service">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-1.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">Chit Schemes</h5>-->
  <!--            <p>Chit Fund is a uniquely Indian informal system of saving and borrowing money.</p>-->
  <!--            <a href="chit.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-lg-6">-->
  <!--        <div class="card-service">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-2.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">Loan Schemes</h5>-->
  <!--            <p>Loans can also be described as revolving or term. Your loan purpose is the reason you want to borrow money</p>-->
  <!--            <a href="loan.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--       <div class="col-lg-4">-->
  <!--        <div class="card-service">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-3.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">Keyword Research</h5>-->
  <!--            <p>We help you define your SEO objective & develop a realistic strategy with you</p>-->
  <!--            <a href="service.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div> -->
  <!--    </div>-->
  <!--  </div> -->
  <!--   .container -->
  <!--</div> -->
  <!-- .page-section -->

  <!-- <div class="page-section bg-light">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
        </div>

      </div>
    </div>  -->
    <!-- .container 
  </div> 
  <!-- .page-section -->
 
  
  
<?php
 include('footer.php');
 ?>
 
 
 <script type="module">
  import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
</script>

 
 

