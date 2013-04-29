<div id="alpha">

  <header id="header" role="banner">
    
    <?php print render($page['header']); ?>

  </header>
  
</div><!-- /#alpha -->


<div id="container-bravo">
	<div id="bravo">
		<?php print render($page['above_content']); ?>
	</div><!-- /#bravo -->
</div><!-- /.container -->

<div id="charlie">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['below_content']); ?>
    </div><!-- /#content -->

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside><!-- /.sidebars -->
    <?php endif; ?>

  </div><!-- /#main -->

  <?php print render($page['footer']); ?>

</div><!-- /#charlie -->

<?php print render($page['bottom']); ?>
