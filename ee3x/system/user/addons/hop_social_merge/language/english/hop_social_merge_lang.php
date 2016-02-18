<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang = array(

	//Required for MODULES page

	'hop_social_merge_module_name'			=> 'Hop Social Merge',
	'hop_social_merge_module_description'	=> 'Display and merge into one timeline your posts from Twitter and Facebook',
	
	
	'nav_how_to'							=> 'How To',
	'nav_settings'							=> 'Settings',

	'label_cache_ttl'						=> 'Cache Life',
	'label_sub_cache_ttl'					=> 'Time in minutes before refreshing data. Be careful, loading data from social networks can be long.',
	'label_cache_ttl_unit'					=> 'Minutes',
	'label_fcbk_app_token'					=> 'Facebook App Token',
	'label_sub_fcbk_app_token'				=> 'The Facebook app token in order to access Facebook posts.',
	'label_twitter_token'					=> 'Twitter Token',
	'label_sub_twitter_token'				=> 'Twitter token found on your developer app page.',
	'label_twitter_token_secret'			=> 'Twitter Token Secret',
	'label_sub_twitter_token_secret'		=> 'Twitter token secret found on your developer app page.',
	'label_twitter_cons_key'				=> 'Twitter Consumer Key',
	'label_sub_twitter_cons_key'			=> 'Twitter consumer key found on your developer app page',
	'label_twitter_cons_key_secret'			=> 'Twitter Consumer Key Secret',
	'label_sub_twitter_cons_key_secret'		=> 'Twitter consumer key secret found on your developer app page',

	'settings_save'							=> 'Save',
	'settings_save_working'					=> 'Saving...',
	'settings_saved_success'				=> 'Settings have been saved successfully',
	'settings_form_error_cache'				=> 'Cache must be an integer greater than 0',
	//END
);