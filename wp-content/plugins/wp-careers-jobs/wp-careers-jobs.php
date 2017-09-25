<?php
/*
Plugin Name: WordPress careers jobs plugin
*/

defined('ABSPATH') or die('No script kiddies please!');

class WpCareersJobs
{
	public function __construct()
	{
		add_filter('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
		
		add_action('init', array($this, 'init_post_type'));
		add_action('init', array($this, 'init_taxonomy'));
	}
	
	public function wp_enqueue_scripts()
	{
		$plugin_dir_url = plugin_dir_url(__FILE__);
		
		wp_enqueue_style('xyz-index', $plugin_dir_url.'assets/index/css/style.css');
		wp_enqueue_script('wp-careers-jobs', $plugin_dir_url.'assets/index/js/script.js', array('jquery'), null, true);
	}
	
	//=========================================================== 
	// APP INIT
	//=========================================================== 
	
	public function init_post_type()
	{
		register_post_type('careers_jobs', array(
			'label'		 => 'Careers Jobs',
			'public'	 => true,
			'has_archive'=> true,
			'rewrite'	 => array('slug' => 'career'),
			'supports'	 => array('title', 'editor', 'thumbnail'),
//			'supports'	 => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
		));
	}
	
	public function init_taxonomy()
	{
		register_taxonomy('location', array('careers_jobs'), array(
			'label' => 'Location',
			'hierarchical'  => true,
			'query_var'     => true,
			'rewrite'       => array('slug' => 'location')
		));
		
		register_taxonomy('job-department', array('careers_jobs'), array(
			'label' => 'Job Department',
			'hierarchical'  => true,
			'query_var'     => true,
			'rewrite'       => array('slug' => 'job-department')
		));
	}
}

new WpCareersJobs();