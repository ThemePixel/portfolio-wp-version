



    <footer class="footer">
      
      <div class="footer__container">
        
         <div class="column__footer-one">
            <h4 class="column__footer-one-title svg-icon">Column-one</h4>
            <div class="column__footer-one-elements column">
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
              <a class="column__footer-one-a">Some Link</a>
            </div>
          </div>
          <div class="column__footer-five ">
            <h4 class="column__footer-five-title svg-icon">Column-five</h4>
            <div class="column__footer-five-elements column">
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
              <a class="column__footer-five-a">Some Link</a>
            </div>
          </div>
          <div class="column__footer-four">
            <h4 class="column__footer-four-title svg-icon">Column-four</h4>
            <div class="column__footer-four-elements column">
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              <a class="column__footer-four-a">Some Link</a>
              
            </div>
          </div>
          <div class="column__footer-two">
            <h4 class="column__footer-two-title svg-icon">Column-two</h4>
            <div class="column__footer-two-elements column">
              <a class="column__footer-two-a">Some Link</a>
              <a class="column__footer-two-a">Some Link</a>
              <a class="column__footer-two-a">Some Link</a>
            </div>
          </div>
          <div class="column__footer-three">
            <h4 class="column__footer-three-title svg-icon">Column-three</h4>
            <div class="column__footer-three-elements column">
              <a class="column__footer-three-a">Some Link</a>
              <a class="column__footer-three-a">Some Link</a>
              <a class="column__footer-three-a">Some Link</a>
              <a class="column__footer-three-a">Some Link</a>
              
              
            </div>
          </div>
          <script>
            const accordionone = document.getElementsByClassName('column__footer-one');
            const accordiontwo = document.getElementsByClassName('column__footer-two');
            const accordionthree = document.getElementsByClassName('column__footer-three');
            const accordionfour = document.getElementsByClassName('column__footer-four');
            const accordionfive = document.getElementsByClassName('column__footer-five');
            for (i = 0; i<accordionone.length; i++ ){
                accordionone[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
            for (i = 0; i<accordiontwo.length; i++ ){
                accordiontwo[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
            for (i = 0; i<accordionthree.length; i++ ){
              accordionthree[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
            for (i = 0; i<accordionfour.length; i++ ){
              accordionfour[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
            for (i = 0; i<accordionfive.length; i++ ){
              accordionfive[i].addEventListener('click', function(){
                    this.classList.toggle('active')
                })
            }
          </script>  
          
         
        <div class="paragraph__footer">
          <h4 class="paragraph__footer-heading mb-4">Some Paragraph</h4>
          <p class="paragraph__footer-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci mollitia iusto aliquam corrupti quia esse porro magni, omnis et itaque nobis, cum officia alias illum nihil aspernatur impedit?</p>
        </div>

        <div class="subscribe__footer">
          <h4 class="subscribe__footer-heading">Subscribe To Our Newsletter</h4>
          <div class="subscribe__footer-placeholder">
            <form action="#" method="post">
              <div class="subscribe__footer-input">
                  <input type="text" class="subscribe__footer__input" placeholder="Enter your email address" aria-label="Enter your email address" aria-describedby="button-addon2">
                  <div class="subscribe__footer__button">
                    <button class="subscribe__footer-button svg_icons_css" type="button" id="">Subscribe</button>
                  </div>
              </div>
            </form>
          </div>
          <div class="subscribe__footer-email">
            <p>By entering your email, you agree to our<br /><strong><a href="https://themepixel.github.io/Portfolio_HTML/" target="_blank" rel="noopener">Terms &amp; Conditions </a>
            </strong>and<strong> <a href="https://themepixel.github.io/Portfolio_HTML/" target="_blank" rel="noopener">Privacy Policy</a></strong>.</p>
          </div>
          
        </div>
        
        <div class="follow__footer">
          <div class="follow__footer-icons">
            <a href="https://www.linkedin.com/in/alex-bohdanik-b79031252/" class="follow__footer-svg"><?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" >    <path d="M25,2C12.318,2,2,12.317,2,25s10.318,23,23,23s23-10.317,23-23S37.682,2,25,2z M18,35h-4V20h4V35z M16,17 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2C18,16.105,17.105,17,16,17z M37,35h-4v-5v-2.5c0-1.925-1.575-3.5-3.5-3.5 S26,25.575,26,27.5V35h-4V20h4v1.816C27.168,20.694,28.752,20,30.5,20c3.59,0,6.5,2.91,6.5,6.5V35z"/></svg></a>
            <a href="https://github.com/ThemePixel" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="github-logo" data-prefix="fab" data-icon="github" viewBox="0 0 496 512"><title>Github logo</title><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></a>
            <a href="https://www.facebook.com/profile.php?id=100088560259973" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="facebook-logo" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" viewBox="0 0 320 512"><title id="catTitle">Facebook Logo</title><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
            
            <a href="#" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="producthunt-logo" data-prefix="fab" data-icon="product-hunt" class="svg-inline--fa fa-product-hunt fa-w-16" viewBox="0 0 512 512"><title id="catTitle">ProductHunt Logo</title><path d="M326.3 218.8c0 20.5-16.7 37.2-37.2 37.2h-70.3v-74.4h70.3c20.5 0 37.2 16.7 37.2 37.2zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-128.1-37.2c0-47.9-38.9-86.8-86.8-86.8H169.2v248h49.6v-74.4h70.3c47.9 0 86.8-38.9 86.8-86.8z"></path></svg></a>
            <a href="#" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="instagram-logo" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" viewBox="0 0 448 512"><title id="catTitle">Instagram Logo</title><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
            
            <a href="#" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="twitter-logo" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" viewBox="0 0 512 512"><title id="catTitle">Twitter Logo</title><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
            <a href="#" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="youtube-logo" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" viewBox="0 0 576 512"><title id="catTitle">Youtube Logo</title><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a>
            <a href="#" class="follow__footer-svg"><svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="pinterest-logo" data-name="pinterest" viewBox="0 0 97.75 97.75"><title>Pinterest logo</title><path d="M48.875 0C21.883 0 0 21.882 0 48.875S21.883 97.75 48.875 97.75 97.75 75.868 97.75 48.875 75.867 0 48.875 0zm5.624 65.109c-4.521 0-8.773-2.444-10.229-5.219 0 0-2.432 9.645-2.943 11.506-1.813 6.58-7.146 13.162-7.561 13.701-.289.375-.928.258-.994-.24-.113-.838-1.475-9.139.127-15.909.801-3.4 5.383-22.814 5.383-22.814s-1.334-2.673-1.334-6.625c0-6.205 3.596-10.837 8.074-10.837 3.807 0 5.645 2.859 5.645 6.286 0 3.828-2.436 9.552-3.693 14.856-1.051 4.441 2.225 8.064 6.605 8.064 7.933 0 13.272-10.188 13.272-22.261 0-9.174-6.176-16.044-17.418-16.044-12.697 0-20.615 9.471-20.615 20.052 0 3.646 1.078 6.221 2.764 8.21.773.915.883 1.283.602 2.333-.203.771-.66 2.625-.854 3.358-.279 1.062-1.137 1.44-2.098 1.049-5.846-2.387-8.572-8.793-8.572-15.994 0-11.893 10.029-26.154 29.922-26.154 15.985 0 26.506 11.566 26.506 23.984.001 16.428-9.132 28.698-22.589 28.698z"></path></svg></a>
          </div>   
        </div>

        <div class="copyright__footer">
          <p>© Pixel. All rights reserved</p>
        </div> 



      </div>
    </footer>






<?php wp_footer(); ?>

</body>
</html>
