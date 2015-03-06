<?php
/**
 * The Sidebar containing the footer mid widget area.
 *
 * @package thbusiness
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
            <?php if ( ! dynamic_sidebar( 'footer-mid' ) ) : ?>
            <h1 class="footer-widget-title">Assine nossa newletter</h1>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Digite seu nome">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Digite seu e-mail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="singlepage-widget-moretag">Assinar</button>
                    </div>
                </div>
            </form>
            <?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
