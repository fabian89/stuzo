<?php
$TermsJobDepartment = get_terms(array(
	'taxonomy' => 'job-department',
	'hide_empty' => false,
));

$Post = new WP_Query(array(
	'post_type' => 'careers_jobs',
	'posts_per_page' => -1,
	'post_status' => 'publish',
));

get_header();
?>
<nav>
	<ul id="menu-job-department">
		<li class="active"><a href="#" data-term_id="0">All</a></li>
		<?php foreach($TermsJobDepartment as $Term): ?>
			<li><a href="#" data-term_id="<?php echo $Term -> term_id ?>"><?php echo $Term -> name ?></a></li>
		<?php endforeach; ?>
	</ul>
</nav>
<section id="job-list">
	<?php if($Post -> have_posts()) :
			while($Post -> have_posts()):
				$Post -> the_post();
				
				//Sets
				$job_department_id = NULL;
				$job_department_title = NULL;
				$location_title = NULL;
	
				$job_department_ar = get_the_terms(get_the_ID(), 'job-department');
				if(isset($job_department_ar[0])):
					$job_department_id = $job_department_ar[0] -> term_id;
					$job_department_title = $job_department_ar[0] -> name;
				endif;
				
				$location_ar = get_the_terms(get_the_ID(), 'location');
				if(isset($location_ar[0])):
					$location_title = $location_ar[0] -> name;
				endif;
	?>
			<div class="job-one" <?php echo is_null($job_department_id) == false ? ' data-job-department="'.$job_department_id.'"' : ''?>>
				<h2><?php echo the_title(); ?></h2>
				<?php if($job_department_title): ?>
					<div><?php echo $job_department_title ?></div>
				<?php endif; ?>
				<div>
					<?php the_post_thumbnail(array(250)) ?>
				</div>
				<?php if($location_title): ?>
					<div><?php echo $location_title ?></div>
				<?php endif; ?>
			</div>

		<?php 
			endwhile;
			wp_reset_postdata();
		else:
		?>
		<h2>Empty here...</h2>
	<?php endif; ?>
</section>
<?php get_footer();