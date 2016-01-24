<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package thbusiness
 */
?>
</div><!-- .row -->
</div><!-- .container -->
	</div><!-- #content -->

<div class="th-clients">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <h1 class="business-page-widget-title">PRINCIPAIS TECNOLOGIAS</h1>						
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="th-client-item-image zend">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/ZendFramework-logo.png" /></a>
                    </div>	
                </div><!-- col-xs-12 col-sm-6 col-md-3 col-lg-3 -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="th-client-item-image">
                        <a href="#"><img src="http://www.themezhut.com/demo/thbusiness/wp-content/uploads/2014/06/wordpress-logo-hoz-rgb.png" /></a>
                    </div>	
                </div><!-- col-xs-12 col-sm-6 col-md-3 col-lg-3 -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="th-client-item-image mysql">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/mysql-logo.png" /></a>
                    </div>	
                </div><!-- col-xs-12 col-sm-6 col-md-3 col-lg-3 -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="th-client-item-image">
                        <a href="#"><img src="http://www.themezhut.com/demo/thbusiness/wp-content/uploads/2014/06/jquery-logo.png" /></a>
                    </div>	
                </div><!-- col-xs-12 col-sm-6 col-md-3 col-lg-3 -->
                
            </div><!-- row -->
        </div><!--container -->
    </div><!--container-fluid -->
</div><!-- .th_clients -->        
	
<div class="container-fluid">
<div class="row">
	<span class="scrollup-icon"><a href="#" class="scrollup"></a></span>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="row">
                    <div class="footer-widget-area">                        
                        <div class="col-md-4">                            
                            <div class="left-footer">
                                <?php get_sidebar('footer-left'); ?>
                            </div>                            
                        </div>

                        <div class="col-md-4">                            
                            <div class="mid-footer">
                                <?php get_sidebar('footer-mid'); ?>					
                            </div>                            
                        </div>

                        <div class="col-md-4">
                            <div class="right-footer">
                                <?php get_sidebar('footer-right'); ?>					
                            </div>
                        </div>						
                    </div><!-- .footer-widget-area -->
	</div><!-- .row -->
</div><!-- .container -->		
	<div class="footer-site-info">
		<div class="container">
		<div class="row">
			<div class="footer-details-container">
				<div class="copyright-container">
					<?php 
						$thbusiness_copyright_text = of_get_option( 'thbusiness_left_footer_text' , '' );
						if ( !empty( $thbusiness_copyright_text ) ) { 
							echo esc_textarea( $thbusiness_copyright_text );
					 	} else { 
							printf( __( 'Theme: THBusiness by <a href="%1$s" rel="designer">ThemezHut.Com</a>.', 'thbusiness' ), esc_url('http://www.themezhut.com/') ); 
					} ?>	

				</div>
                                <!--
				<div class="credit-container">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'thbusiness' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'thbusiness' ), 'WordPress' ); ?></a>
				</div> 
                                -->
			</div><!-- .footer-details-container -->
			</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .row -->
</div><!-- .container-fluid -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>