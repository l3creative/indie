<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <p class="unpublished"><?php print t('Unpublished'); ?></p>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>
  
  	  <div id="tabs" class="tabs-spec">
		   <ul id="tab-control">
		     <li><a href="#tab-1" class="first"><?php print $content['field_tab_name']['#items']['0']['value']; ?></a></li>
		     <li><a href="#tab-2"><?php print $content['field_tab_name']['#items']['1']['value']; ?></a></li>
		     <li><a href="#tab-3"><?php print $content['field_tab_name']['#items']['2']['value']; ?></a></li>
		     <li><a href="#tab-4"><?php print $content['field_tab_name']['#items']['3']['value']; ?></a></li>
		     <li><a href="#tab-5" class="last"><?php print $content['field_tab_name']['#items']['4']['value']; ?></a></li>
		   </ul>
		   <div id="tab-1" class="tabby first">
			   <img src="<?php print image_style_url('200x200', $node->field_tab_image['und'][0]['uri']); ?>" class="tab-image" />
			   <div class="tab-headline"><?php print $content['field_tab_headline']['#items']['0']['value']; ?></div>
			   <div class="tab-subheader"><?php print $content['field_tab_subheader']['#items']['0']['value']; ?></div>
			   <div class="tab-copy"><?php print $content['field_tab_copy']['#items']['0']['value']; ?></div> 
		   </div>
		   <div id="tab-2" class="tabby">
			   <img src="<?php print image_style_url('200x200', $node->field_tab_image['und'][1]['uri']); ?>" class="tab-image" />
			   <div class="tab-headline"><?php print $content['field_tab_headline']['#items']['1']['value']; ?></div>
			   <div class="tab-subheader"><?php print $content['field_tab_subheader']['#items']['1']['value']; ?></div>
			   <div class="tab-copy"><?php print $content['field_tab_copy']['#items']['1']['value']; ?></div>					   
		   </div>
		   <div id="tab-3" class="tabby">
			   <img src="<?php print image_style_url('200x200', $node->field_tab_image['und'][2]['uri']); ?>" class="tab-image" />
			   <div class="tab-headline"><?php print $content['field_tab_headline']['#items']['2']['value']; ?></div>
			   <div class="tab-subheader"><?php print $content['field_tab_subheader']['#items']['2']['value']; ?></div>
			   <div class="tab-copy"><?php print $content['field_tab_copy']['#items']['2']['value']; ?></div>					   
		   </div>
		   <div id="tab-4" class="tabby">
			   <img src="<?php print image_style_url('200x200', $node->field_tab_image['und'][3]['uri']); ?>" class="tab-image" />	
			   <div class="tab-headline"><?php print $content['field_tab_headline']['#items']['3']['value']; ?></div>
			   <div class="tab-subheader"><?php print $content['field_tab_subheader']['#items']['3']['value']; ?></div>
			   <div class="tab-copy"><?php print $content['field_tab_copy']['#items']['3']['value']; ?></div>					   
		   </div>
		   <div id="tab-5" class="tabby last">
			   <img src="<?php print image_style_url('200x200', $node->field_tab_image['und'][4]['uri']); ?>" class="tab-image" />		    
			   <div class="tab-headline"><?php print $content['field_tab_headline']['#items']['4']['value']; ?></div>
			   <div class="tab-subheader"><?php print $content['field_tab_subheader']['#items']['4']['value']; ?></div>
			   <div class="tab-copy"><?php print $content['field_tab_copy']['#items']['4']['value']; ?></div>				   
		   </div>		   
		 </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article><!-- /.node -->
