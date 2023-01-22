<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio-wp._version
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://themepixel.github.io/Portfolio_HTML/">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header ">
  <div class="header__container ">
	  
		<a href="index.html" class="header__logo">
		 <span class="logo__text">Pixel</span>
		</a>

		<div class="header__menu menu ">
			<div class="menu__icon">
				<span></span>
			</div>  



			<nav class="menu__body">
				<ul class="menu__list">
					<li><a data-goto=".page__section1" href="index.html"  class="menu__link">HOME</a></li>
					<li><a data-goto=".page__section2" href=""  class="menu__link">SHOP</a></li>
					<li><a data-goto=".page__section3" href=""  class="menu__link">PORTFOLIO</a></li>
					<li>
					   <a data-goto=".page__section4" style="color: #92003B; font-weight: 600;" style="font-weight: 600" href="" class="menu__link">MY SKILLS</a>
					   <span class="menu__arrow"></span>
					   <span class="menu__arrowfalse"></span>
					   <div class="mega-menu_section">
						<ul class="menu__sub-list">
						  <li class="sub-list__li-tag">
							  <a data-goto=".page__section1" href="" class="menu__sub-link__title">GENERAL ELEMENTS</a>
							  <ul class="menu__sub-list__down">
								<li><a href="pages/subpages/3D Swiper Slider.html" data-goto=".page__section1" class="menu__sub-link">3D Swiper Slider</a></li>
								<li><a href="pages/subpages/Load More Button.html" data-goto=".page__section1" class="menu__sub-link">Load More Button</a></li>
								<li><a href="pages/subpages/Tabs.html" data-goto=".page__section1" class="menu__sub-link">Tabs</a></li>
								<li><a href="pages/subpages/SVG Icon Animation.html" data-goto=".page__section1" class="menu__sub-link">SVG Icon Animation</a></li>
								<li><a href="pages/subpages/Accordion footer.html" data-goto=".page__section1" class="menu__sub-link">Accordion footer</a></li>
								<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
								<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
								<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
								
							  </ul>
						  </li>
						  <li class="sub-list__li-tag">
							<a data-goto=".page__section1" href="" class="menu__sub-link__title">GENERAL ELEMENTS</a>
							<ul class="menu__sub-list__down">
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							</ul>
						</li>
						<li class="sub-list__li-tag">
						  <a data-goto=".page__section1" href="" class="menu__sub-link__title">GENERAL ELEMENTS</a>
						  <ul class="menu__sub-list__down">
							<li><a href="pages/subpages/3D Swiper Slider.html" data-goto=".page__section1" class="menu__sub-link">3D Swiper Slider</a></li>
							<li><a href="pages/subpages/Load More Button.html" data-goto=".page__section1" class="menu__sub-link">Load More Button</a></li>
							<li><a href="pages/subpages/Tabs.html" data-goto=".page__section1" class="menu__sub-link">Tabs</a></li>
							<li><a href="pages/subpages/SVG Icon Animation.html" data-goto=".page__section1" class="menu__sub-link">SVG Icon Animation</a></li>
							<li><a href="pages/subpages/Accordion footer.html" data-goto=".page__section1" class="menu__sub-link">Accordion footer</a></li>
							<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							<li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
							
						  </ul>
					  </li>
					  <li class="sub-list__li-tag">
						<a data-goto=".page__section1" href="" class="menu__sub-link__title">GENERAL ELEMENTS</a>
						<ul class="menu__sub-list__down">
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						  <li><a data-goto=".page__section1" href="" class="menu__sub-link">Page 1</a></li>
						</ul>
					</li>
						</ul>

					   </div>
					</li> 
					
					<li><a data-goto=".page__section1" href=""  class="menu__link">BLOG</a></li>
					
					<li><a data-goto=".page__section3" href=""  class="menu__link">FEATURES</a></li>
				</ul>
			</nav>        
		</div>
</header>

<main class="main__container">

    <section class="tab-slider__section">
      <div class="tab-slider-navbar">
        <div class="tab-slider-navigation">
          <i class="tab-slider-left-btn"></i>
          <i class="tab-slider-right-btn"></i>
          <ul class="tab-slider-menu">
            <li class="tab-slider-btn active">3D Slider</li>
            <li class="tab-slider-btn">Portfolio</li>
            <li class="tab-slider-btn">Tabs</li>
            <li class="tab-slider-btn">Portfolio</li>
            <li class="tab-slider-btn">Tabs</li>
            <li class="tab-slider-btn">Portfolio</li>
            <li class="tab-slider-btn">Tabs</li>
            <li class="tab-slider-btn">Portfolio</li>
            <li class="tab-slider-btn">Portfolio</li>
            <li class="tab-slider-btn">Tabs</li>
            <li class="tab-slider-btn">Portfolio</li>
          </ul>
        </div>
      </div>

      <div class="tab-content">

        <div class="tab-content-tab active">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city3.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
      

      
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">Portfolio</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">Portfolio</h1>
        </div>
      

      
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city5.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
      
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city4.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
      
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city2.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
      
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city4.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>


        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city5.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>

        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city3.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>

        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city5.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
        <div class="tab-content-tab">
          <div class="tab-content-row">
            <div class="tab-content-left-column">
              <div class="tab-content-img-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/city2.jpg" alt="">
              </div>
            </div>
            <div class="tab-content-right-column">
              <div class="tab-content-info">
                <h2 class="tab-content-city">3D Slider</h2>
                <div class="tab-content-description">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.amet consectetur adipisicing elit.amet consectetur adipisicing elit. Consectetur voluptas minus optio dolor? Recusandae modi veritatis obcaecati nam accusamus saepe.</p>
                  <p>Lorem ipsum dolor t consectetur adipisicing elit. Conselor?  accusamus amet consectetur adipisicing elit.ametamet consectetur adipisicing elit. consectetur adipisicing elit.saepe.</p>
                </div>
              </div>
            </div>
          </div>
        <h1 class="tab-content-country">3D Slider</h1>
        </div>
    </section>
 

    <section class="swiper-slider">
        <h2 class="swiper-slider__header"><span></span></h2>
        <div class="swiper-slider__wrapper">
          <div class="swiper-slider__container">
            <div class="swiper-carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide swiper-carousel__item">
                  <div class="swiper-carousel__image-wrapper">
                    <div class="swiper-carousel__image-left">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">
				    </div>
                    <div class="swiper-carousel__image-right">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">
                    </div>
                  </div>
                  <p href="https://www.google.com>">Portfolio</p> 
                </div>
                <div class="swiper-slide swiper-carousel__item">
                  <div class="swiper-carousel__image-wrapper">
                    <div class="swiper-carousel__image-left">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/2.jpg">
                    </div>
                    <div class="swiper-carousel__image-right">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/2.jpg">
                    </div>
                  </div>
                  <p>Recent work</p> 
                </div>
                <div class="swiper-slide swiper-carousel__item">
                  <div class="swiper-carousel__image-wrapper">
                    <div class="swiper-carousel__image-left">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">
                    </div>
                    <div class="swiper-carousel__image-right">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">
                    </div>
                  </div>
                  <p>Recent work</p> 
                </div>
                <div class="swiper-slide swiper-carousel__item">
                  <div class="swiper-carousel__image-wrapper">
                    <div class="swiper-carousel__image-left">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">    
					</div>                
                    <div class="swiper-carousel__image-right">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg">     
					</div>                
                  </div>
                  <p>Recent work</p> 
                </div>
                <div class="swiper-slide swiper-carousel__item">
                  <div class="swiper-carousel__image-wrapper">
                    <div class="swiper-carousel__image-left">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/5.jpg">
                    </div>
                    <div class="swiper-carousel__image-right">
					    <img class="swiper-carousel__image" src="<?php echo get_template_directory_uri(); ?>/img/5.jpg"> 
                    </div>
                  </div>
                  <p>Recent work</p>
              </div>
            </div>
            <div class="swiper-slider__navigation">
              <div class="swiper-slider__navigation-next"></div>
              <div class="swiper-slider__navigation-prev"></div>
            </div>
          
          </div>
        </div>
        
        






       
















        <video src="<?php echo get_template_directory_uri(); ?>/assets/swiper-slider/videos/smoke.mp4" class="swiper-slider__video" autoplay loop muted></video>
    </section>

    <section class="loading-lazy__section">
      <h2>Recent works :</h2>
      <div class="loading-lazy__container">
        <div class="loading-lazy__box">
          <div class="loading-lazy__box-flex">
              <div class="loading-lazy__ul">

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li one ">
                    <a href="https://themepixel.github.io/PSDtoHTML.WITH.LESS.CSS.EXOTICO./"><img class="imglazy" data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>
                
                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li two">
                    <a href="https://themepixel.github.io/PSDtoHTML.WITH.LESS.CSS.EXOTICO./"><img class="imglazy" data-src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>
                
                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li three">
                    <a href="https://themepixel.github.io/PSDtoHTML.WITH.LESS.CSS.EXOTICO./"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li four ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li five ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li six ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li seven ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li eight ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li nine ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li ten  ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li eleven  ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li twelve ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li thirteen  ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li fourteen  ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

                <div class="loading-lazy-hide">
                  <div id="container" class="loading-lazy__li fifteen ">
                    <a href="https://themepixel.github.io/Portfolio_HTML/"><img class="imglazy"  data-src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" src="<?php echo get_template_directory_uri(); ?>/img/1x1.png" alt="some-image"></a>
                  </div >
                </div>

               </div >
              </div >
           </div>
        </div>
      </div>
      <div id="load__more-button">Load more</div>  
    <script>
        let loadMoreBtn = document.querySelector('#load__more-button');
        let currentItem = 3;
        
        loadMoreBtn.onclick = () =>{
           let boxes = [...document.querySelectorAll('.loading-lazy__box .loading-lazy__ul .loading-lazy-hide')];
           for (var i = currentItem; i < currentItem + 3; i++){
              boxes[i].style.display = 'inline-block';
           }
           currentItem += 3;
        
           if(currentItem >= boxes.length){
              loadMoreBtn.style.display = 'none';
           }
        }
        
        </script>
    </section>


    </main> 









<!--



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio-wp-version' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$portfolio_wp_version_description = get_bloginfo( 'description', 'display' );
			if ( $portfolio_wp_version_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $portfolio_wp_version_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio-wp-version' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header>



	-->