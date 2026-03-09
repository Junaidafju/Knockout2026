<?php
/**
 * Template Name: Menu Page
 * 
 * @package KnockOut_Theme
 */

get_header(); ?>

<main id="primary" class="site-main page-menu">
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="page-breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a> / 
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </section>
    
    <!-- Menu Categories -->
    <section class="menu-categories">
        <div class="container">
            <div class="menu-tabs">
                <button class="menu-tab active" data-category="all">All</button>
                <button class="menu-tab" data-category="appetizers">Appetizers</button>
                <button class="menu-tab" data-category="mains">Mains</button>
                <button class="menu-tab" data-category="pizza">Pizza</button>
                <button class="menu-tab" data-category="desserts">Desserts</button>
                <button class="menu-tab" data-category="cocktails">Cocktails</button>
                <button class="menu-tab" data-category="beer">Beer</button>
            </div>
            
            <!-- Hard-coded menu items -->
            <div class="menu-items-grid">
                <!-- Appetizers -->
                <div class="menu-item" data-category="appetizers">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/chicken-wings.jpg" alt="Chicken Wings">
                    </div>
                    <div class="menu-item-content">
                        <h3>Chicken Wings <span class="price">₹350</span></h3>
                        <p>Spicy buffalo wings with ranch dressing and celery sticks</p>
                    </div>
                </div>
                
                <div class="menu-item" data-category="appetizers">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/nachos.jpg" alt="Loaded Nachos">
                    </div>
                    <div class="menu-item-content">
                        <h3>Loaded Nachos <span class="price">₹420</span></h3>
                        <p>Tortilla chips topped with cheese, jalapeños, salsa, and sour cream</p>
                    </div>
                </div>
                
                <!-- Mains -->
                <div class="menu-item" data-category="mains">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/burger.jpg" alt="Classic Burger">
                    </div>
                    <div class="menu-item-content">
                        <h3>Classic Burger <span class="price">₹550</span></h3>
                        <p>Beef patty with lettuce, tomato, cheese, and our special sauce</p>
                    </div>
                </div>
                
                <div class="menu-item" data-category="mains">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/steak.jpg" alt="Grilled Steak">
                    </div>
                    <div class="menu-item-content">
                        <h3>Grilled Steak <span class="price">₹1200</span></h3>
                        <p>200g grilled steak with mashed potatoes and seasonal vegetables</p>
                    </div>
                </div>
                
                <!-- Pizza -->
                <div class="menu-item" data-category="pizza">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/pepperoni.jpg" alt="Pepperoni Pizza">
                    </div>
                    <div class="menu-item-content">
                        <h3>Pepperoni Pizza <span class="price">₹650</span></h3>
                        <p>Classic pepperoni with mozzarella cheese and tomato sauce</p>
                    </div>
                </div>
                
                <!-- Desserts -->
                <div class="menu-item" data-category="desserts">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/brownie.jpg" alt="Chocolate Brownie">
                    </div>
                    <div class="menu-item-content">
                        <h3>Chocolate Brownie <span class="price">₹280</span></h3>
                        <p>Warm chocolate brownie with vanilla ice cream</p>
                    </div>
                </div>
                
                <!-- Cocktails -->
                <div class="menu-item" data-category="cocktails">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/mojito.jpg" alt="Mojito">
                    </div>
                    <div class="menu-item-content">
                        <h3>Mojito <span class="price">₹450</span></h3>
                        <p>White rum, mint, lime, sugar, and soda water</p>
                    </div>
                </div>
                
                <div class="menu-item" data-category="cocktails">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/margarita.jpg" alt="Margarita">
                    </div>
                    <div class="menu-item-content">
                        <h3>Margarita <span class="price">₹480</span></h3>
                        <p>Tequila, triple sec, lime juice, and salt rim</p>
                    </div>
                </div>
                
                <!-- Beer -->
                <div class="menu-item" data-category="beer">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/kingfisher.jpg" alt="Kingfisher">
                    </div>
                    <div class="menu-item-content">
                        <h3>Kingfisher <span class="price">₹220</span></h3>
                        <p>Premium lager - 650ml</p>
                    </div>
                </div>
                
                <div class="menu-item" data-category="beer">
                    <div class="menu-item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bira.jpg" alt="Bira 91">
                    </div>
                    <div class="menu-item-content">
                        <h3>Bira 91 <span class="price">₹280</span></h3>
                        <p>White beer - 650ml</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    jQuery(document).ready(function($) {
        // Menu filtering
        $('.menu-tab').on('click', function() {
            const category = $(this).data('category');
            
            $('.menu-tab').removeClass('active');
            $(this).addClass('active');
            
            if (category === 'all') {
                $('.menu-item').show();
            } else {
                $('.menu-item').hide();
                $(`.menu-item[data-category="${category}"]`).show();
            }
        });
    });
    </script>

</main>

<?php get_footer(); ?>