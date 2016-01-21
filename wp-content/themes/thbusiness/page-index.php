<?php
/*
  Template Name: Página inicial
 */
?> 

<?php get_header(); ?>

<div class="row">
    <aside id="thbusiness_services_widget-2" class="widget widget_thbusiness_services_widget">		

        <!-- Apresentacao -->
        <?php 
            query_posts(array(
                'post_type' => 'apresentacao'
            ));  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
            <div class="th-services-box text-center">
                
                <h1 class="">
                    <a title="" href=""><?php the_title(); ?></a>
                </h1>				
                <article class="th-front-page-summery">
                    <?php echo the_content(); ?>
                </article>
                
                <div class="th-morelink-sep">
                    <a class="th-morelink" title="Regular Updates" href="<?php echo bloginfo() .  post_custom('apresentacao_url'); ?>">Saiba mais</a>
                </div>
                
            </div><!-- .thbusiness-services-boxset -->
        </div>
        <?php endwhile;?> 
        
    </aside>	
</div><!-- .row -->
<hr /> 
<div class="row">
    <aside id="thbusiness_recentwork_widget-2" class="widget widget_thbusiness_recentwork_widget">		
        <h1 class="business-page-widget-title">NOSSOS SERVIÇOS</h1>		
        
        <!-- POST TYPE SERVICOS -->
        <?php 
            query_posts(array(
                'post_type' => 'servicos'
            ));  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="th-recentwork-box">
                <div class="recentwork-image">
                    <a title="" href="">
                        <?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img src="<?php echo $image; ?>" class="attachment-featured wp-post-image img-thumbnail" alt="" />
                    </a>
                </div>
                <div class="th-recentwork-title">
                    <h1>
                        <a title="" href=""><?php the_title(); ?></a>
                    </h1>
                </div>
                <article class="th-front-page-summery text-justify">
                    <?php echo the_content(); ?>
                </article>               
            </div><!-- .thbusiness-services-box -->
        </div><!-- .col-xs-12 .col-sm-6 .col-md-3 .col-lg-3 -->
        <?php endwhile;?>        

    </aside>	
</div><!-- .row -->        
<hr />

<div class="container">
    <div class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
            <div class="th-singlepage-widget">
                <h1 class="business-page-widget-title"><a href="http://www.themezhut.com/demo/thbusiness/?page_id=2" title="Sample Page">Faça um Orçamento</a></h1>		 		 
                <?php echo do_shortcode('[contact-form-7 id="43" title="orcamento"]'); ?>
            </div><!-- th-singlepage-widget -->

        </div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
       
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
            <aside id="thbusiness_testimonial-2" class="widget widget_thbusiness_testimonial">
                <div class="th-testimonial-widget">
                    <h1 class="business-page-widget-title">O que dizem nossos clientes?</h1>			
                    <article>
                        <div class="th-testimonial-image">
                            <img src="http://www.themezhut.com/demo/thbusiness/wp-content/uploads/2014/06/man1.jpg" title="John Doe" alt="John Doe" />
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt.</p>
                            <div class="testimonial-meta"> <strong>John Doe,</strong> Web Developer -  <a href="http://www.themezhut.com" title="Web Studio" target="_blank"> Web Studio</a> </div>
                        </div>
                    </article> 
                </div>

                <aside id="thbusiness_testimonial-3" class="widget widget_thbusiness_testimonial">
                    <div class="th-testimonial-widget">
                        <article>
                            <div class="th-testimonial-image">
                                <img src="http://www.themezhut.com/demo/thbusiness/wp-content/uploads/2014/06/beautiful-18279_640.jpg" title="Lisa Keran" alt="Lisa Keran" />
                            </div>
                            <div class="testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt.</p>
                                <div class="testimonial-meta"> <strong>Lisa Keran,</strong> Founder -  <a href="http://www.themezhut.com" title="Graphic Design Company" target="_blank"> Graphic Design Company</a> </div>
                            </div>
                        </article> 
                    </div>

                    <aside id="thbusiness_testimonial-4" class="widget widget_thbusiness_testimonial">
                        <div class="th-testimonial-widget">
                            <article>
                                <div class="th-testimonial-image">
                                    <img src="http://www.themezhut.com/demo/thbusiness/wp-content/uploads/2014/06/man2.jpg" title="Tom Brown" alt="Tom Brown" />
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mollis. Quisque convallis libero in sapien pharetra tincidunt.
                                    </p>
                                    <div class="testimonial-meta"> <strong>Tom Brown,</strong> Owner -  <a href="http://www.themezhut.com" title="Web Development Company" target="_blank"> Web Development Company</a> </div>
                                </div>
                            </article> 
                        </div>
                    </aside>
                </aside>
            </aside>
        </div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
        
    </div><!-- .row -->
       
</div><!-- .container -->

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
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/mysql-logo.jpg" /></a>
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

<?php get_footer(); ?>
