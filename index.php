<?php
	require_once '_app.php';
	$result = api('/article/category/id/1');
	$articles = $result['articles'];

	// echo '<pre>';
	// var_dump($articles);
?>

<?php include('header.php'); ?>

<div class="header">
	<a class="back"></a>
	<div class="name">Hot Bullets</div>
	<a class="categories"></a>
</div>

<?php foreach($articles as $article): ?>
<div class="article">
	<div class="cover" style="background-image: url(http://www.pageresource.com/wallpapers/wallpaper/underwater-fishes-smash-materials_1540183.jpg)">
		<div class="labels">
			<div class="internal">
				<div class="top">
					<span class="host">ANTYWEB.PL</span>
					<span class="time">ŚRODA 14:30</span>
				</div>
				<div class="title">
					TITLE TILTE TITLE
				</div>
			</div>
		</div>
	</div>
	<div class="shortcuts">
		<div class="internal">
			<?php foreach ($article['shorts_best'] as $shortcut): ?>
			<div class="shortcut">
				<?php if(count($article['shorts_best']) > 1): ?>
				<div class="nav">
					<a href="" class="left"></a>
					<a href="" class="right"></a>
				</div>
				<?php endif; ?>
				
				<div class="user">
					<div class="avatar" style="background-image:url(https://graph.facebook.com/<?php echo $shortcut['author']['facebook_id']; ?>/picture)"></div>
					<?php echo $shortcut['author']['first_name']; ?> <?php echo $shortcut['author']['last_name']; ?> 
					<div class="popularity"></div>
				</div>
				<div class="bullets">
					<?php foreach($shortcut['bullets'] as $bullet): ?>
					<div class="bullet">
						<div class="icon"></div>
						<div class="text"><?php echo htmlentities($bullet); ?></div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endforeach; ?>

<?php include('footer.php'); ?>