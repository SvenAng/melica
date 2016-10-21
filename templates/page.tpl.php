 
 <aside class="right-off-canvas-menu">
        <?php //print ($alt_main_menu); ?>
        <?php print render($page['offcanvas_meny']); ?>
        <?php print render($page['lang']); ?>
 </aside>

    <a class="exit-off-canvas"></a>
<!--.page -->



<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">
<!-- Title, slogan and menu -->
<?php if ($alt_header): ?>

<div class="lev1-navigation row">
	<nav class="small-12 columns hide-for-large-up tab-bar">
		<a class="right-off-canvas-toggle menu-icon" href="#" ><span></span></a>
	</nav>
	<div class="small-5 large-3 small-centered large-uncentered columns logo">
		<!--<div class="row">-->
			<div class="logo-inside">	
	    		<?php print $linked_logo; ?>
			</div>
			
		<!--</div>-->
	</div>
	
	
	
	<div class="small-12 large-6 columns slogan">
		<h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
	</div>
    
    <div class="small-11 large-3 columns show-for-medium-up search">
    	<?php print render($page['search_block']); ?>
    </div>
</div>


<?php endif; ?>
  </header>
  <!--/.l-header -->

  
  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <!--.l-main -->
  <div class="outer-main">
  <main role="main" class="row l-main">
     
  
     <!-- ****************** MAIN -->
    <div class="small-12 large-6  large-push-3 medium-8  columns main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

     <!-- **************** MAIN END\ -->

		<?php if (!empty($page['featured'])): ?>
		  <!--.l-featured -->
		  <section class="l-featured row">
		    <div class="columns">
		      <?php print render($page['featured']); ?>
		    </div>
		  </section>
		  <!--/.l-featured -->
		<?php endif; ?>
		
		
		
      <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
     
      <!-- ****************RIGHT\ -->
    
    <aside role="complementary" class="small-12 medium-4  large-3 large-push-3 columns sidebar-second sidebar ">
        <?php print render($page['sidebar_second']); ?>
    </aside>
    <!-- ****************** RIGHT END\ -->


    <!-- ************** LEFT   -->
     <div class=" small-12 large-3 large-pull-9 medium-4 medium-push-8 columns sidebar-first sidebar left">
     
       <nav role="navigation" class="show-for-large-up">
        <?php print render($page['sidebar_first_nav']); ?>
       </nav>
       
       <aside role="complementary" class="">
         <?php print render($page['sidebar_first']); ?>
       </aside>
       
     </div>  
      <!-- ************** LEFT END\   -->

  </main>
  <!--/.l-main -->
  </div>
<!--</div>-->
<!--END .page -->
  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first medium-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle medium-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last medium-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third medium-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth medium-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer -->
  <footer class="l-footer panel row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) : ?>
      <div class="copyright columns">
        &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.l-footer -->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

