<section class="card-slider__section">
   <div class="row card-slider__container">
      <div class= "cards-container">
         <div class="slider-card active" id="card-1">
            <?php if(is_page_template('templates/homepage.php')) { ?>
               <img class="slider-card__image" src="wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } elseif(is_page_template('templates/pricing.php')) { ;?>
                <img class="slider-card__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } ?>
            <div class="slider-card__content">
               <p class="card__paragraph">"Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."</p>
               <div class="card__author-information">
                  <h3 class="card__author-name">1 Howard Arlene</h3>
                  <h5 class="card__author-position">Finance Manager</h5> 
               </div>
            </div>
         </div>
           <div class="slider-card" id="card-2">
             <?php if(is_page_template('templates/homepage.php')) { ?>
               <img class="slider-card__image" src="wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } elseif(is_page_template('templates/pricing.php')) { ;?>
                <img class="slider-card__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } ?>
            <div class="slider-card__content">
               <p class="card__paragraph">"Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."</p>
               <div class="card__author-information">
                  <h3 class="card__author-name">2 Howard Arlene</h3>
                  <h5 class="card__author-position">Finance Manager</h5> 
               </div>
            </div>
         </div>
           <div class="slider-card" id="card-3">
             <?php if(is_page_template('templates/homepage.php')) { ?>
               <img class="slider-card__image" src="wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } elseif(is_page_template('templates/pricing.php')) { ;?>
                <img class="slider-card__image" src="../../wp-content/themes/gutenberg-base/assets/dist/images/content.jpg">
            <?php } ?>
            <div class="slider-card__content">
               <p class="card__paragraph">"Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."</p>
               <div class="card__author-information">
                  <h3 class="card__author-name">3 Howard Arlene</h3>
                  <h5 class="card__author-position">Finance Manager</h5> 
               </div>
            </div>
         </div>
      </div>
      <div class="slider-controls__container">
         <span data-id="card-1" class="slider-control active"></span>
         <span data-id="card-2" class="slider-control"></span>
         <span data-id="card-3" class="slider-control"></span>
      </div>
   </div>
</section>