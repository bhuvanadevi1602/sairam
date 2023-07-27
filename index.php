<?php
 include('header.php');
?>

<style>
.display-4 {
  font-size: 2.5rem !important;
  font-weight: 300;
  line-height: 1.2;
}



.banner-info {
  padding: 0;
  background-color: darkcyan !important;
  color: rgba(255, 255, 255, 0.8);
}


.social-media-button a:hover {
  background-color: rgb(68,215,249) !important;
}
.page-banner.home-banner .btn-scroll:hover {
  text-decoration: none;
  background-color:rgb(68,215,249) !important;
  color: #fff;
}
.elementor-row{
        position: relative;
    justify-content: center;
}
.elementor-container{
    box-shadow: 0 0 10px rgb(192,192,192 / 23%) !important;
    background-color: honeydew;
}
.elementor-heading-title {   
    padding: 0;
    margin: 0;
    line-height: 3;
}
    .elementor-section .elementor-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
}

.elementor-row {
    width: 100%;

    display: flex;
}
@media (min-width: 768px){
.elementor-column.elementor-col-100, .elementor-column[data-col="100"] {
    width: 100%;
}
}

.elementor-column, .elementor-column-wrap {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.elementor-column {
    min-height: 1px;
}

.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
    padding: 10px;
}
.elementor-column-wrap {
    width: 100%;
}
@media (min-width: 768px){
.elementor-column.elementor-col-33, .elementor-column[data-col="33"] {
    width: 33.333%;
}
}

.elementor-section.elementor-section-boxed > .elementor-container {
    max-width: 1140px;
}


.elementor-10 .elementor-element.elementor-element-dee13f9 .elementor-image-box-wrapper .elementor-image-box-img {
    width: 30%;
}

.elementor-10 .elementor-element.elementor-element-dee13f9 .elementor-image-box-wrapper .elementor-image-box-img {
    width: 30%;
}
.elementor-10 .elementor-element.elementor-element-dee13f9.elementor-position-top .elementor-image-box-img {
    margin-bottom: 15px;
}
.elementor .elementor-widget:not(.elementor-widget-text-editor):not(.elementor-widget-theme-post-content) figure {
    margin: 0;
}
.elementor-10 .elementor-element.elementor-element-dee13f9 .elementor-image-box-description {
    color: #110101;
}
.elementor-widget-image-box .elementor-image-box-description {
    color: var( --e-global-color-text );
    font-family: var( --e-global-typography-text-font-family ), Sans-serif;
    font-weight: var( --e-global-typography-text-font-weight );
}
.elementor-10 .elementor-element.elementor-element-dee13f9 .elementor-image-box-img img {
    filter: brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );
    transition-duration: 0.3s;
}
.elementor img {
    height: auto;
    max-width: 100%;
    border: none;
    -webkit-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}

h2{
    color:#B5B5C3;
}
.company-logo {
    width: 62px;
    line-height: 62px;
    background-color:#fff;
    text-align: center;
    border-radius: 50%;
    -webkit-box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
    box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
}

.how-chit {
    text-align: center;
    background: #fcfcfc;
    padding: 35px;
}
.how-chit h2 {
    color: #B5B5C3;
    font-size: 24px;
    padding: 10px 0 10px 25px;
}
.how-chit ak {
    list-style: none;
    width: 25%;
    border: solid 15px #f2f2f2;
}
.ak{
    padding:20px;
}
.how-chit .li1 img {
    background: linear-gradient(120deg, #949597, #585c63);
}
.how-chit li img {
    border-radius: 50%;
    padding: 10px;
}
.how-chit li h3 {
    color: #3b3932;
    font-size: 20px;
    font-weight: 700;
}
 h3 {
    color: #2a2f27;
    margin: 15px 0;
    text-transform: uppercase;
    font-weight: 400;
}
.how-chit li p {
    text-align: center;
}

th, td, tr,h1, h2, h3, h4, h5, h6, p{
     font-family:'Comfortaa', cursive !important;
}

.how-chit p {
   
    margin: 15px 0;
    font-size: 16px;
    line-height: 24px;
    font-weight: 800;
}
.how-chit .li2 img {
    background: linear-gradient(120deg, #e9546e, #d32f4c);
}
.how-chit .li3 img {
    background: linear-gradient(120deg, #f38f43, #d36511);
}

.how-chit .li4 img {
    background: linear-gradient(120deg, #ebbd1d, #bc9717);
}
.how-chit .li5 img {
    background: linear-gradient(120deg, #8a995e, #4c4f35);
}
.how-chit .li6 img {
    background: linear-gradient(120deg, #ed171c, #f6464b);
}
.how-chit .li7 img {
    background: linear-gradient(120deg, #19c6bc, #189b93);
}
.how-chit .li8 img {
    background: linear-gradient(120deg, #1479ce, #4ba3ee);
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
      <div class="page-banner1 home-banner" style="background-image:url('https://img.freepik.com/premium-vector/curve-blend-background_34645-675.jpg?w=740');background-blend-mode: multiply;background-size: cover;">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Life Colorful Chit Funds</h1>
            <p class="text-lg text-justify text-grey mb-5">TWe are more than a chit fund company

Develop and help smaller chit funds companies thrive and spur community growth

Embrace innovation and seek to do, what we do the best

Work as a team and value every contribution
              </p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="">
              <img src="assets/download.png" data-aos="zoom-in-up" alt="" style="width: -webkit-fill-available;  height: 440px;">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  

  <!--<div class="page-section">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-4">-->
  <!--        <div class="card-service wow fadeInUp">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-1.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">SEO Consultancy</h5>-->
  <!--            <p>We help you define your SEO objective & develop a realistic strategy with you</p>-->
  <!--            <a href="service.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-lg-4">-->
  <!--        <div class="card-service wow fadeInUp">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-2.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">Content Marketing</h5>-->
  <!--            <p>We help you define your SEO objective & develop a realistic strategy with you</p>-->
  <!--            <a href="service.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="col-lg-4">-->
  <!--        <div class="card-service wow fadeInUp">-->
  <!--          <div class="header">-->
  <!--            <img src="assets/img/services/service-3.svg" alt="">-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="text-secondary">Keyword Research</h5>-->
  <!--            <p>We help you define your SEO objective & develop a realistic strategy with you</p>-->
  <!--            <a href="service.php" class="btn btn-primary">Read More</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div> -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
      
        <div class="col-lg-6 py-3 wow"  >
                <div data-aos="fade-right">
          <span class="subhead">About us</span>
          <h2 class="title-section">WHO WE ARE AND WHAT WE DO</h2>
          <div class="divider"></div>

       <p><span style="color:#6C55F9">JRV</span> குடும்பத்தின் ஒரு அங்கமாக செயல்படும் இந்த  நிறுவனம் பலதரப்பட்ட பரிமனத்துடன் செயல்பட உள்ளது.</p>
          <p><span style="color:#6C55F9">LIFE COLOURFUL CHIT FUND PRIVATE LIMITED</span> எனும் எங்களின் நிறுவனர்.</p>
          <p><span style="color:#6C55F9">K JAIRAMESH</span> அவர்களின் கனவு   கெளதம் ஜெய்ரமேஷ் எனும் அவரின் மகனால் நடத்தப்படுகிறது </p>
          <p>அதிகப்படியான துறைகளில் நமது <span style="color:#6C55F9">JRV</span> குடும்பம் அதனின் இலக்கை நோக்கி பயணித்து கொண்டு வருகிறது.</p>
          <p>உங்களின் ஆதரவால் விரைவில் கூடிய விரைவில் அந்த இலக்கை அடையும்.</p>
        
         
          <!-- <a href="about.php" class="btn btn-primary mt-3">Read More</a> -->
             </div>
        </div>
     
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="assets/chits.webp"  data-aos="fade-left" alt="" style="width: -webkit-fill-available;">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!--<div class="page-section bg-light">-->
  <!--  <div class="container">-->
  <!--    <div class="text-center wow fadeInUp">-->
  <!--      <div class="subhead">Our services</div>-->
  <!--      <h2 class="title-section">How SEO Team Can Help</h2>-->
  <!--      <div class="divider mx-auto"></div>-->
  <!--    </div>-->

  <!--      <div class="row">-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">-->
  <!--          <div class="features">-->
  <!--            <div class="header mb-3">-->
  <!--              <span class="mai-business"></span>-->
  <!--            </div>-->
  <!--            <h5>OnSite SEO</h5>-->
  <!--            <p>We analyse your website's structure, internal architecture & other key</p>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--  </div> -->
  <!--</div> -->
<!--<div class="elementor-container elementor-column-gap-default" >-->
<!--							<div class="elementor-row">-->
<!--					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-02b5b17" data-id="02b5b17" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-152603e elementor-widget elementor-widget-heading" data-id="152603e" data-element_type="widget" data-widget_type="heading.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<h2 class="elementor-heading-title text-center elementor-size-default">What are Chit Funds?-->
<!--</h2>		</div>-->
<!--				</div>-->
<!--				<div class="elementor-element elementor-element-56f54f3 elementor-widget elementor-widget-text-editor" data-id="56f54f3" data-element_type="widget" data-widget_type="text-editor.default">-->
<!--				<div class="elementor-widget-container">-->
<!--								<div class="elementor-text-editor elementor-clearfix">-->
<!--					<p class="text-center">A chit fund is initiated when a person enters an agreement with a specific number of people to subscribe to a specific sum of money by way of periodic installments for a definite period. Each subscriber shall in his turn, as determined by a lot or auction be entitled to the prize amount. Such schemes are conducted by financial institutions or by unorganized schemes conducted between friends, kith, and kin.</p>					</div>-->
<!--						</div>-->
<!--				</div>-->
<!--				<section class="elementor-section elementor-inner-section elementor-element elementor-element-52cd7b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52cd7b2" data-element_type="section">-->
<!--						<div class="elementor-container elementor-column-gap-default">-->
<!--							<div class="elementor-row">-->
<!--					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55be8de" data-id="55be8de" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-dee13f9 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="dee13f9" data-element_type="widget" data-widget_type="image-box.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img src="images/fund-icon3.png" style="display: inline; visibility: visible; opacity: 1;"<div class="elementor-image-box-content"><p class="elementor-image-box-description">Chit means a transaction,-->
<!--also known as chitty or kuri</p></div></div>		</div>-->
<!--				</div>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-27ccb6f" data-id="27ccb6f" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-f3a0c81 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="f3a0c81" data-element_type="widget" data-widget_type="image-box.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="80" height="80" src="https://www.achilleschitfund.com/wp-content/uploads/2020/03/rupee2-512.png" class="elementor-animation-pulse attachment-full size-full" alt="" loading="lazy" srcset="https://www.achilleschitfund.com/wp-content/uploads/2020/03/rupee2-512.png 512w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/rupee2-512-300x300.png 300w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/rupee2-512-150x150.png 150w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/rupee2-512-100x100.png 100w" sizes="(max-width: 512px) 100vw, 512px"></figure><div class="elementor-image-box-content"><p class="elementor-image-box-description">Chit funds are popular-->
<!--Saving scheme in india</p></div></div>		</div>-->
<!--				</div>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ce473a7" data-id="ce473a7" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-055a7c2 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="055a7c2" data-element_type="widget" data-widget_type="image-box.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="80" height="80" src="https://www.achilleschitfund.com/wp-content/uploads/2020/03/bag-rupee-512.png" class="elementor-animation-pulse attachment-full size-full" alt="" loading="lazy" srcset="https://www.achilleschitfund.com/wp-content/uploads/2020/03/bag-rupee-512.png 512w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/bag-rupee-512-300x300.png 300w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/bag-rupee-512-150x150.png 150w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/bag-rupee-512-100x100.png 100w" sizes="(max-width: 512px) 100vw, 512px"></figure><div class="elementor-image-box-content"><p class="elementor-image-box-description">Practicted for more than-->
<!--a thousands years now</p></div></div>		</div>-->
<!--				</div>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--								</div>-->
<!--					</div>-->
<!--		</section>-->
<!--				<section class="elementor-section elementor-inner-section elementor-element elementor-element-0102925 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0102925" data-element_type="section">-->
<!--						<div class="elementor-container elementor-column-gap-default">-->
<!--							<div class="elementor-row">-->
<!--					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1c21068" data-id="1c21068" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-3a203e3 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="3a203e3" data-element_type="widget" data-widget_type="image-box.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="80" height="80" src="https://www.achilleschitfund.com/wp-content/uploads/2020/03/dollar_coin_hand-512.png" class="elementor-animation-pulse attachment-full size-full" alt="" loading="lazy" srcset="https://www.achilleschitfund.com/wp-content/uploads/2020/03/dollar_coin_hand-512.png 512w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/dollar_coin_hand-512-300x300.png 300w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/dollar_coin_hand-512-150x150.png 150w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/dollar_coin_hand-512-100x100.png 100w" sizes="(max-width: 512px) 100vw, 512px"></figure><div class="elementor-image-box-content"><p class="elementor-image-box-description">A Chit Fund bring savers and-->
<!--borrowers on a single platform</p></div></div>		</div>-->
<!--				</div>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-93fd92b" data-id="93fd92b" data-element_type="column">-->
<!--			<div class="elementor-column-wrap elementor-element-populated">-->
<!--							<div class="elementor-widget-wrap">-->
<!--						<div class="elementor-element elementor-element-1ebe935 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="1ebe935" data-element_type="widget" data-widget_type="image-box.default">-->
<!--				<div class="elementor-widget-container">-->
<!--			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img width="80" height="80" src="https://www.achilleschitfund.com/wp-content/uploads/2020/03/Currency_financial_money_price_indian_rupee_finance_-_Copy_9-512.png" class="elementor-animation-pulse attachment-full size-full" alt="" loading="lazy" srcset="https://www.achilleschitfund.com/wp-content/uploads/2020/03/Currency_financial_money_price_indian_rupee_finance_-_Copy_9-512.png 512w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/Currency_financial_money_price_indian_rupee_finance_-_Copy_9-512-300x300.png 300w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/Currency_financial_money_price_indian_rupee_finance_-_Copy_9-512-150x150.png 150w, https://www.achilleschitfund.com/wp-content/uploads/2020/03/Currency_financial_money_price_indian_rupee_finance_-_Copy_9-512-100x100.png 100w" sizes="(max-width: 512px) 100vw, 512px"></figure><div class="elementor-image-box-content"><p class="elementor-image-box-description">Providing them the flexibility-->
<!--to borrow and save</p></div></div>		</div>-->
<!--				</div>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--								</div>-->
<!--					</div>-->
<!--		</section>-->
<!--						</div>-->
<!--					</div>-->
<!--		</div>-->
<!--								</div>-->
<!--					</div>-->
					
					
					
					
					
		
		<div class="how-chit mb-5" data-aos="fade-up" style="background-image:url('assets/back.png');background-size:cover;object-fit:cover;">
    <h2 class="mb-2">How Chit Fund Works...</h2>
    
    <p class="mb-5">A chit fund is initiated when a person enters an agreement with a specific number of people to subscribe to a specific sum of money by way of periodic installments for a definite period. Each subscriber shall in his turn, as determined by a lot or auction be entitled to the prize amount. Such schemes are conducted by financial institutions</p>
    	<div class="row ak " >
    	   
    	 
    	   
    	   
    	        <div class=" col-lg-3 col-md-3  li1 ">
    	             <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon1.png" class="company-logo" style="display: inline;width: 40px; visibility: visible; opacity: 1;">
            </div>
            
			<h3>Step  <span id="count1" class="display-4"></span></h3>
            <p>Audit your funds, installment paying for participating in the growth path.</p>
            </div>
            
         <div class=" col-lg-3 col-md-3 li2">
                <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon2.png" class="company-logo" style="display: inline;  width: 40px; visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count2" class="display-4"></span></h3>
            <p>Approach us for membership and fund support.</p>
            </div>
            
         <div class=" col-lg-3 col-md-3 li3">
                <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon3.png" class="company-logo" style="display: inline; width: 40px;visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count3" class="display-4"></span></h3>
            <p>Once a member, you get the privilege for bidding.</p>
            </div>
            
         <div class=" col-lg-3 col-md-3 li4">
                <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon4.png" class="company-logo"  style="display: inline;  width: 40px; visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count4" class="display-4"></span></h3>
            <p>If you are lucky enough and in need of funds, you can collect the POT for your necessity.</p>
           </div> 
      
            
             	
    	        <div class="col-lg-3 col-md-3 mt-5 li5">
    	               <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon5.png" class="company-logo" style="display: inline; width: 40px; visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count5" class="display-4"></span></h3>
            <p>Earn your profits after collecting the POT amount.</p>
            </div>
            
        	   <div class=" col-lg-3 col-md-3  mt-5 li6">
        	          <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon6.png" class="company-logo" style="display: inline; width: 40px; visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count6" class="display-4"></span></h3>
            <p>Keep paying the periodic instalments as per the tenure.</p>
            </div>
            
          <div class="col-lg-3 col-md-3 mt-5 li7">
                 <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon7.png" class="company-logo" style="display: inline; width: 40px;visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count7" class="display-4"></span></h3>
            <p>Once the chit term is complete, we audit your account.</p>
            </div>
            
            
          <div class="col-lg-3 col-md-3 mt-5 li8">
                 <div class="offset-lg-5 text-center company-logo">
            <img src="images/fund-icon8.png" class="company-logo" style="display: inline; width: 40px;visibility: visible; opacity: 1;">
            </div>
			<h3>Step <span id="count8" class="display-4"></span></h3>
            <p>Final settlement is done and the membership terminates.</p>
            </div>
        

    </div>
    </div>
  <!--<div class="page-section banner-seo-check">-->
  <!--  <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">-->
  <!--    <div class="container text-center">-->
  <!--      <div class="row justify-content-center wow fadeInUp">-->
  <!--        <div class="col-lg-8">-->
  <!--          <h2 class="mb-4">Check your Website SEO</h2>-->
  <!--          <form action="#">-->
  <!--            <input type="text" class="form-control" placeholder="E.g google.com">-->
  <!--            <button type="submit" class="btn btn-success">Check Now</button>-->
  <!--          </form>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div> -->
  <!--  </div>-->
  <!--</div>-->

  <!--<div class="page-section">-->
    <!--<div class="container">-->
    <!--  <div class="text-center wow fadeInUp">-->
    <!--    <div class="subhead">Pricing Plan</div>-->
    <!--    <h2 class="title-section">Choose plan the right for you</h2>-->
    <!--    <div class="divider mx-auto"></div>-->
    <!--  </div>-->
    <!--  <div class="row mt-5">-->
    <!--    <div class="col-lg-4 py-3 wow zoomIn">-->
    <!--      <div class="card-pricing">-->
    <!--        <div class="header">-->
    <!--          <div class="pricing-type">Basic</div>-->
    <!--          <div class="price">-->
    <!--            <span class="dollar">$</span>-->
    <!--            <h1>39<span class="suffix">.99</span></h1>-->
    <!--          </div>-->
    <!--          <h5>Per Month</h5>-->
    <!--        </div>-->
    <!--        <div class="body">-->
    <!--          <p>25 Analytics <span class="suffix">Campaign</span></p>-->
    <!--          <p>1,300 Change <span class="suffix">Keywords</span></p>-->
    <!--          <p>Social Media <span class="suffix">Reviews</span></p>-->
    <!--          <p>1 Free <span class="suffix">Optimization</span></p>-->
    <!--          <p>24/7 <span class="suffix">Support</span></p>-->
    <!--        </div>-->
    <!--        <div class="footer">-->
    <!--          <a href="#" class="btn btn-pricing btn-block">Subscribe</a>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--    <div class="col-lg-4 py-3 wow zoomIn">-->
    <!--      <div class="card-pricing marked">-->
    <!--        <div class="header">-->
    <!--          <div class="pricing-type">Standar</div>-->
    <!--          <div class="price">-->
    <!--            <span class="dollar">$</span>-->
    <!--            <h1>59<span class="suffix">.99</span></h1>-->
    <!--          </div>-->
    <!--          <h5>Per Month</h5>-->
    <!--        </div>-->
    <!--        <div class="body">-->
    <!--          <p>25 Analytics <span class="suffix">Campaign</span></p>-->
    <!--          <p>1,300 Change <span class="suffix">Keywords</span></p>-->
    <!--          <p>Social Media <span class="suffix">Reviews</span></p>-->
    <!--          <p>1 Free <span class="suffix">Optimization</span></p>-->
    <!--          <p>24/7 <span class="suffix">Support</span></p>-->
    <!--        </div>-->
    <!--        <div class="footer">-->
    <!--          <a href="#" class="btn btn-pricing btn-block">Subscribe</a>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--    <div class="col-lg-4 py-3 wow zoomIn">-->
    <!--      <div class="card-pricing">-->
    <!--        <div class="header">-->
    <!--          <div class="pricing-type">Professional</div>-->
    <!--          <div class="price">-->
    <!--            <span class="dollar">$</span>-->
    <!--            <h1>99<span class="suffix">.99</span></h1>-->
    <!--          </div>-->
    <!--          <h5>Per Month</h5>-->
    <!--        </div>-->
    <!--        <div class="body">-->
    <!--          <p>25 Analytics <span class="suffix">Campaign</span></p>-->
    <!--          <p>1,300 Change <span class="suffix">Keywords</span></p>-->
    <!--          <p>Social Media <span class="suffix">Reviews</span></p>-->
    <!--          <p>1 Free <span class="suffix">Optimization</span></p>-->
    <!--          <p>24/7 <span class="suffix">Support</span></p>-->
    <!--        </div>-->
    <!--        <div class="footer">-->
    <!--          <a href="#" class="btn btn-pricing btn-block">Subscribe</a>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</div>-->
    
    <!--</div>-->
    
    <!-- .container -->

  
  
   <!--.page-section -->

  <!-- Banner info -->
  <div class="page-section banner-info mt-5" data-aos="fade-right">
    <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">LIFE COLORFUL CHIT FUNDS <br> LIMITED</h2>
            <div class="divider"></div>
          <p style="line-height:1.7">LIFE COLORFUL CHIT FUNDS (P) LIMITED is certified company .LIFE COLORFUL CHIT FUNDS (P) LIMITED has made its presence felt in the Chit Funds industry with their Registered Office / Corporate Office and Branch in Chennai Ambattur. It is a Private Limited Company with CIN U65992TN2021PTC144534  and a Registered Chit Funds Company under the Chit Fund Act with Deputy Registrar of Chit Funds, Central Chennai. It proposes to expand all over and across Tamil Nadu in a short span of time. </p>
            
            <!--<ul class="theme-list theme-list-light text-white">-->
            <!--  <li>-->
            <!--    <div class="h5">SEO Content Strategy</div>-->
            <!--    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>-->
            <!--  </li>-->
            <!--  <li>-->
            <!--    <div class="h5">B2B SEO</div>-->
            <!--    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>-->
            <!--  </li>-->
            <!--</ul>-->
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="assets/foot.png" alt="" style="width: -webkit-fill-available;">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->

  <!-- Blog -->
  <!--<div class="page-section">-->
  <!--  <div class="container">-->
  <!--    <div class="text-center wow fadeInUp">-->
  <!--      <div class="subhead">Our Blog</div>-->
  <!--      <h2 class="title-section">Read Latest News</h2>-->
  <!--      <div class="divider mx-auto"></div>-->
  <!--    </div>-->

  <!--    <div class="row mt-5">-->
  <!--      <div class="col-lg-4 py-3 wow fadeInUp">-->
  <!--        <div class="card-blog">-->
  <!--          <div class="header">-->
  <!--            <div class="post-thumb">-->
  <!--              <img src="assets/img/blog/blog-1.jpg" alt="">-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>-->
  <!--            <div class="post-date"><a href="#">Read More!</a></div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
        
  <!--      <div class="col-lg-4 py-3 wow fadeInUp">-->
  <!--        <div class="card-blog">-->
  <!--          <div class="header">-->
  <!--            <div class="post-thumb">-->
  <!--              <img src="assets/img/blog/blog-2.jpg" alt="">-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>-->
  <!--            <div class="post-date"><a href="#">Read More!</a></div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-lg-4 py-3 wow fadeInUp">-->
  <!--        <div class="card-blog">-->
  <!--          <div class="header">-->
  <!--            <div class="post-thumb">-->
  <!--              <img src="assets/img/blog/blog-3.jpg" alt="">-->
  <!--            </div>-->
  <!--          </div>-->
  <!--          <div class="body">-->
  <!--            <h5 class="post-title"><a href="#">Source of Content Inspiration</a></h5>-->
  <!--            <div class="post-date"><a href="#">Read More!</a></div>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-12 mt-4 text-center wow fadeInUp">-->
  <!--        <a href="blog.php" class="btn btn-primary">View More</a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

 <?php
   include('footer.php');
  ?>
  <script>
      //#region - start of - number counter animation
const counterAnim = (qSelector, start = 0, end, duration = 4000) => {
 const target = document.querySelector(qSelector);
 let startTimestamp = null;
 const step = (timestamp) => {
  if (!startTimestamp) startTimestamp = timestamp;
  const progress = Math.min((timestamp - startTimestamp) / duration, 1);
  target.innerText = Math.floor(progress * (end - start) + start);
  if (progress < 1) {
   window.requestAnimationFrame(step);
  }
 };
 window.requestAnimationFrame(step);
};
//#endregion - end of - number counter animation

document.addEventListener("DOMContentLoaded", () => {
 counterAnim("#count1", 7500, 1, 5000);
 counterAnim("#count2", 7500, 2, 5000);
 counterAnim("#count3", 7500, 3, 5000);
 counterAnim("#count4", 7500, 4, 5000);
  counterAnim("#count5",7500, 5, 5000);
 counterAnim("#count6", 7500, 6, 5000);
 counterAnim("#count7", 7500, 7, 5000);
 counterAnim("#count8", 7500, 8, 5000);
 
});

  </script>
  