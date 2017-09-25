jQuery(document).ready(function()
{
	jQuery(document).on('click', '#menu-job-department a', function(e){
		e.preventDefault();

		var term_id = jQuery(this).data('term_id');

		jQuery('#menu-job-department li').map(function(_, o){
			jQuery(o).removeClass('active');
		});

		jQuery(this)
			.parents('li')
			.addClass('active');


		jQuery('.job-one').hide();

		if(term_id == 0)
		{
			jQuery('.job-one').fadeIn();
		}
		else
		{
			jQuery('.job-one[data-job-department="' + term_id + '"]').fadeIn();
		}

	});
});