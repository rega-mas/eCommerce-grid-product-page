<?php get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

<?php /* Template Name: Product page */ ?>

	<div class="products-container" id="products-list">

		<div class="products-container__filter search-list">
			Filter

			<input type="text" class="fuzzy-search" id="searchbar" placeholder="Search..."/>
			<div class="sort" data-sort="name" id="a-z-sort">Sort A-Z</div>
			<br>
			<div class="sort" data-sort="price" id="price-sort">Price low to high</div>

			<div class="products-container__options--size">
				<!-- The filter buttons -->
		      	<!-- <div class="form-group">
		        	<span id="filter" class="btn btn-default">Show People in Edmonton (Filter)</span>
		        	<span id="removeFilters" class="btn btn-default">Remove Filters</span>
		      	</div> -->
				<ul>
					<li>
						<span class="name">1</span>
					</li>
					<li>
						<span class="name">2</span>
					</li>
				</ul>
			</div>

			<div class="products-container__options--colour form-group">
				<ul>
					<li>
						<span id="filter--category" class="btn btn-default">Surfboard</span>
					</li>
					<li>
						<span id="filter--category" class="btn btn-default">Clothing</span>
					</li>
					<li>
						<span id="filter--category" class="btn btn-default">Accessories</span>
					</li>
				</ul>
				<span id="removeFilters" class="btn btn-default">Remove Filters</span>
			</div>

		</div>


		<ul class="list products-container__products-list">
		
			<!-- LOOP TO PULL THROUGH SINGLE PRODUCTS -->
			<?php
				$args = array(
					'post_type' => 'products',
					'posts_per_page' => -1,
					'order' => 'DESC',
					'orderby' => 'date'
				);
				
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();

				$logo = get_field('brand_logo');
				$productShot = get_field('product_image');
			    $name = get_field('product_name');
			    $price = get_field('product_price');
			    $category = get_field('category');		    
			?>
				<li class="products-container__products-list__single-product <?php echo $category; ?>">
				<!-- <?php echo $posts_per_page ?>	 -->					
					
					<a class="grid-item" href="<?php echo $post->post_name; ?>">

						<!-- PRODUCT IMAGE -->
						<div class="products-container__products-list__single-product__image">
							<img src="<?php echo $logo['url']; ?>" class="products-container__products-list__single-product__image--logo" alt="<?php echo $productShot['alt']; ?>">
							<img src="<?php echo $productShot['url']; ?>" class="products-container__products-list__single-product__image--product" alt="<?php echo $productShot['alt']; ?>">
						</div>

						<!-- PRODUCT NAME AND PRICE -->
						<div class="products-container__products-list__single-product__description">	
							<span class="name"><?php echo $name ?></span>
							<br>
							<span class="price"><?php echo $price ?></span>
							<br>
							<span class="category"><?php echo $category ?></span>
						</div>				
						
					</a>											

				</li>
			<?php endwhile; ?>
		</ul>		

	</div>
	

<!-- List.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>

<?php get_footer(); ?>
