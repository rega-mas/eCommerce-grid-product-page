<?php get_header(); ?>

<?php 
	$logo = get_field('brand_logo');
    $name = get_field('product_name');
    $category = get_field('category');
    $price = get_field('product_price');
    $description = get_field('description');
    $productShot = get_field('product_image');
?>

	<div class="single-products-container">

		<!-- IMAGE AREA -->
		<div class="single-products-container__image-gallery">
			<div class="single-products-container__image-gallery__arrows-and-product">

				<!-- LEFT ARROW -->
				<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/product-page/arrow.png" class="single-products-container__image-gallery__arrows-and-product__arrow--left" alt="left">

				<!-- PRODUCT SHOTS -->
				<div class="single-products-container__image-gallery__arrows-and-product__carousel" id="slickCarousel">
					<img src="<?php echo $productShot['url']; ?>" class="product-details--image" alt="<?php echo $productShot['alt']; ?>">										
				</div>				

				<!-- RIGHT ARROW -->
				<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/product-page/arrow.png" class="single-products-container__image-gallery__arrows-and-product__arrow--right" alt="right">
			</div>						
		</div>	

		<!-- PIPS -->
		<div class="single-products-container__gallery-bottom">
			<div class="single-products-container__gallery-bottom__pips-container">

				<span class="single-products-container__gallery-bottom__pips-container__pips active" id="pip1"></span>
				<span class="single-products-container__gallery-bottom__pips-container__pips" id="pip2"></span>
				<span class="single-products-container__gallery-bottom__pips-container__pips" id="pip3"></span>
				<span class="single-products-container__gallery-bottom__pips-container__pips" id="pip4"></span>
				<span class="single-products-container__gallery-bottom__pips-container__pips" id="pip4"></span>
			</div>
		</div>				

		<!-- NAME AND PRICE -->
		<div class="single-products-container__name-and-price">

			<!-- FAVOURITE STAR -->
			<div class="single-products-container__name-and-price__star-container">
				<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/product-page/star.png" alt="Favourite">
			</div>

			<!-- PRODUCT LOGO -->
			<div>
				<img class="product-details--logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
			</div>

			<!-- PRODUCT NAME -->
			<h1 class="product-details--name heading--blue"><?php echo $name; ?></h1>

			<!-- PRODUCT PRICE -->
			<p class="product-details--price"><?php echo $price; ?></p>
		</div>						

		<!-- PRODUCT INFO -->
		<div class="single-products-container__product-information">
			<p>
				<?php echo $description; ?>				
				<br/>
				<a href="#" class="product-details--delivery-info">Delivery and return information</a>
			</p>
		</div>

		<!-- COLOUR AND SIZE OPTIONS -->
		<div class="single-products-container__color-size-selections">

			<!-- SIZE -->
			<div class="single-products-container__color-size-selections__table-row">

				<div class="single-products-container__color-size-selections__table-row__col--left">
					<span class="product-details--selection-labels">
						Size
					</span>
				</div>

				<div class="single-products-container__color-size-selections__table-row__col--right">

					<div class="single-products-container__color-size-selections__table-row__col--right__option">
						5'0ft
					</div>

					<div class="single-products-container__color-size-selections__table-row__col--right__option option--selected">
						5'5ft
					</div>

					<div class="single-products-container__color-size-selections__table-row__col--right__option">
						6'0ft
					</div>
				</div>
				
			</div>

			<!-- COLOUR -->
			<div class="single-products-container__color-size-selections__table-row">

				<div class="single-products-container__color-size-selections__table-row__col--left">
					<span class="product-details--selection-labels">
						Colour
					</span>
				</div>

				<div class="single-products-container__color-size-selections__table-row__col--right">

					<div class="single-products-container__color-size-selections__table-row__col--right__option option--selected">
						<span class="product-details--selection-colours product-colour--blue"></span>
					</div>

					<div class="single-products-container__color-size-selections__table-row__col--right__option">
						<span class="product-details--selection-colours product-colour--red"></span>
					</div>

					<div class="single-products-container__color-size-selections__table-row__col--right__option">
						<span class="product-details--selection-colours product-colour--black"></span>
					</div>

				</div>
				
			</div>				
		</div>

		<!-- BUT NOW BUTTON -->
		<div class="single-products-container__buy-now-button">
			<div class="single-products-container__buy-now-button__button-container">
				<input type="button" name="buyNow" id="buyNow" value="Add to basket" class="button button--buy-now">
			</div>						
		</div>

		<!-- SOCIAL SHARE BUTTONS -->
		<div class="single-products-container__social-buttons">
			<div class="single-products-container__social-buttons__icons">

				<img class="single-products-container__social-buttons__icons--facebook" src="<?php echo get_stylesheet_directory_uri();?>/library/images/generic/social/facebook.png">

				<img class="single-products-container__social-buttons__icons--twitter" src="<?php echo get_stylesheet_directory_uri();?>/library/images/generic/social/twitter.png">

				<img class="single-products-container__social-buttons__icons--instagram" src="<?php echo get_stylesheet_directory_uri();?>/library/images/generic/social/instagram.png">

				<img class="single-products-container__social-buttons__icons--sharing" src="<?php echo get_stylesheet_directory_uri();?>/library/images/generic/social/sharing.png">
			</div>
		</div>

		<!-- GALLERY BACKGROUND -->
		<div class="single-products-container__gallery-background">&nbsp;</div>

		<!-- INFORMATION BACKGROUND -->
		<div class="single-products-container__product-info-background ">&nbsp;</div>

	</div>

<?php get_footer(); ?>
