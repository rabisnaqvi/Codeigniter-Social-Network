<?php
$this->Functions->get_header();
$this->Functions->get_navbar();
?>
<div class="container-fluid">
	<main class="row">
	<div class="newsfeed_left pull-left col-lg-2 col-sm-12">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quasi ab sed? Accusantium nulla, pariatur libero consectetur sunt non? Quia soluta debitis sint amet consectetur distinctio iusto temporibus quo sequi?
	</div>
	<div class="col-lg-1"></div>
	<div class="feed newsfeed_center col-lg-6 col-sm-12">
		<?php
		$this->load->view('includes/feed_item');
		$this->load->view('includes/feed_item');
		$this->load->view('includes/feed_item');
		$this->load->view('includes/feed_item');
		$this->load->view('includes/feed_item');
		$this->load->view('includes/feed_item');
		?>
	</div>
	<div class="col-lg-1"></div>
	<div class="newsfeed_right pull-right col-lg-2 col-sm-12">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio sapiente quia, molestias corporis quidem doloribus molestiae, eveniet beatae? Repellat cupiditate, provident. Cumque harum deserunt consequuntur, voluptate dolores tenetur ab.
	</div>
	</main>
</div>
<?php
$this->Functions->get_footer();