<form method="get" action="<?= esc_url(site_url('/')); ?>" class="search-form">
	<label class="headline headline--medium" for="s">Perform a New Search</label>
	<div class="search-form-row">
		<input class="s" type="search" name="s" placeholder="What are you looking for?">
		<input class="search-submit" type="submit" value="Search">
	</div>
</form>