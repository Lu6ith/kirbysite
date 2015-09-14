<article class="nobackground">
<header>
	<h2><?php echo $page->latest()->html() ?></h2>
</header>
  <?php foreach(page('projects')->children()->visible()->flip()->limit(2) as $project): ?>
  
	<section class="showcase">
	<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
		<a href="<?php echo $project->url() ?>">
	 		<figure>
      		<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
			</figure>
    		</a>
    <?php endif ?>
		  
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
		  
		  <p><?php echo $project->text()->excerpt(80) ?></p>
		  <p><a href="<?php echo $project->url() ?>"><button class="button grey-btn">Read more</button></a></p>
	</section>
  <?php endforeach ?>
</article><br class="clear" />
