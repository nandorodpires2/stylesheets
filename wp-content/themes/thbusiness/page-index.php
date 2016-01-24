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
        <h1 class="business-page-widget-title">PRINCIPAIS SERVIÇOS</h1>		
        
        <!-- POST TYPE SERVICOS -->        
        <?php 
            query_posts(array(
                'post_type' => 'servicos',
                'orderby' => 'post_date',
                'order' => 'desc'
            ));  
        ?>
        
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="th-recentwork-box" style="padding: 15px">
                <div class="recentwork-image">
                    <a title="" href="">
                        <?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img src="<?php echo $image; ?>" class="attachment-featured wp-post-image center-block" alt="" />
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
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span class="business-page-widget-title">Faça um Orçamento</span>		 		 
                </div>
                <div class="panel-body">
                    <div class="th-singlepage-widget">                    
                        <?php echo do_shortcode('[contact-form-7 id="43" title="orcamento"]'); ?>
                    </div><!-- th-singlepage-widget -->
                </div>
            </div>

        </div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
       
        <!-- PROJETOS -->        
        <?php 
            query_posts(array(
                'post_type' => 'projetos'
            ));  
        ?>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <span class="business-page-widget-title">Alguns de nossos projetos</span>		 		 
                </div>
                <div class="panel-body">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-lg-3">
                            <?php $image = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                            <img src="<?php echo $image; ?>" class="img img-responsive img-circle center-block" alt="" />
                        </div>
                        <div class="col-lg-9">
                            <h4><?php echo the_title(); ?></h4>
                            <p><?php echo the_content(); ?></p>
                        </div>
                        <div class="col-lg-9 col-lg-offset-3">
                            Acesse <a href="<?php echo post_custom('projeto_url'); ?>" target="_blank"><?php echo post_custom('projeto_url'); ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div><!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
        
    </div><!-- .row -->
       
</div><!-- .container -->


<?php get_footer(); ?>
