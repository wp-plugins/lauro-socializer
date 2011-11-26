<?php
/*
Plugin Name: Lauro Socializer 
Plugin URI: http://all-inclusiv-web.info/lauro-socializer/
Description: Lauro Socializer plugin is a social share plugin  for social networks 
Version: 1.0.0
Author: Lauro
Author URI: http://all-inclusiv-web.info/
License: GPLv2
*/
 
class laurosocializer extends WP_Widget {

	function laurosocializer() {
		$widget_ops = array('classname' => 'laurosocializer', 'description' => __('Display your social profiles on sidebar.'));
		$control_ops = array('width' => 250, 'height' => 350);
		$this->WP_Widget('laurosocializer', __('Lauro Socializer'), $widget_ops, $control_ops);
	}

	function head() {
		$siteurl = get_option('siteurl');
		$url = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/styles.css';
		echo "<link rel='stylesheet' type='text/css' href='$url' />\n";
	}
					
	function widget( $args, $instance ) {
		extract($args);	
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = $instance['twitter_id'];
		$facebook_id = $instance['facebook_id'];
		$linkedin_id = $instance['linkedin_id'];
		$googleplus_id = $instance['googleplus_id'];
		$widgetwidth_id = $instance['widgetwidth_id'];
		$fbwidth_id = $instance['fbwidth_id'];
		$fbheight_id = $instance['fbheight_id'];
		$recommend_id = $instance['recommend_id'];
		$emailwidth_id = $instance['emailwidth_id'];
		$emailtext_id = $instance['emailtext_id'];
		$fbboxcolor_id = $instance['fbboxcolor_id'];
		$gpluscolor_id = $instance['gpluscolor_id'];
		$twitcolor_id = $instance['twitcolor_id'];
		$emailcolor_id = $instance['emailcolor_id'];
		$othercolor_id = $instance['othercolor_id'];
		?>
		
<!--begin of social widget--> 

<div id="lauro-socializer-bar" style="width:<?php echo $widgetwidth_id; ?>px;"> <!-- Begin Widget -->

	<div class="fb-likebox" style="background: <?php echo $fbboxcolor_id; ?>;"> <!-- Facebook -->
		<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $facebook_id; ?>&amp;send=false&amp;layout=standard&amp;width=<?php echo $fbwidth_id; ?>&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=<?php echo $fbheight_id; ?>&amp;appId=234513819928295" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $fbwidth_id; ?>px; height:<?php echo $fbheight_id; ?>px;"></iframe>
	</div>

	<div class="googleplus" style="background: <?php echo $gpluscolor_id; ?>;"> <!-- Google -->
		<span><?php echo $recommend_id; ?></span><div class="g-plusone" data-size="medium"></div>  
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
	</div>

	<div class="twitter" style="background: <?php echo $twitcolor_id; ?>;"> <!-- Twitter -->
        	<iframe title="" style="width: 300px; height: 20px;" class="twitter-follow-button" src="http://platform.twitter.com/widgets/follow_button.html#_=1319978796351&amp;align=&amp;button=blue&amp;id=twitter_tweet_button_0&amp;lang=en&amp;link_color=&amp;screen_name=<?php echo $twitter_id; ?>&amp;show_count=&amp;show_screen_name=&amp;text_color=" frameborder="0" scrolling="no"></iframe>
	</div>

	<div id="email-news-subscribe" style="background: <?php echo $emailcolor_id; ?>;"> <!-- Email Subscribe -->
		<div class="email-box">
			<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburner_id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">	
				<input class="email" type="text" style="width: <?php echo $emailwidth_id; ?>px; font-size: 12px;" id="email" name="email" value="<?php echo $emailtext_id; ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">		
				<input type="hidden" value="<?php echo $feedburner_id; ?>" name="uri">
				<input type="hidden" name="loc" value="en_US">
				<input class="subscribe" name="commit" type="submit" value="Subscribe">	
			</form>
		</div>
	</div>

<div id="other-social-bar" style="background: <?php echo $othercolor_id; ?>;"> <!-- Other Social Bar -->
	<ul class="other-follow">
		<li class="my-rss">
			<a rel="nofollow" title="RSS" href="http://feeds.feedburner.com/<?php echo $feedburner_id; ?>" target="_blank">RSS Feed</a>
		</li>
		<li class="my-linkedin">
			<a rel="nofollow external" title="LinkedIn" href="http://my.linkedin.com/in/<?php echo $linkedin_id; ?>" target="_blank">LinkedIn</a>
		</li>
		<li class="my-gplus">
			<a rel="nofollow" title="Google Plus" rel="author" href="http://plus.google.com/<?php echo $googleplus_id; ?>" target="_blank">Google Plus</a>
		</li>
	</ul>
</div>



<div id="get-lauro" style="background: #EBEBEB;border: 1px solid #CCC;border-top: 1px solid white;padding: 0px 8px 0px 3px;text-align: right;border-image: initial;">
      <span class="author-credit" style="font-family: Arial, Helvetica, sans-serif; color: #ebebeb"><a href="http://www.jungla-jucariilor.ro" style="color: #ebebeb;" target="_blank" title="Jucarii Ieftine">Jucarii Ieftine</a></span></div></div> <!-- End Widget -->
<!--end of social widget--> 

		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;		
		$instance['feedburner_id'] = $new_instance['feedburner_id'];
		$instance['twitter_id'] =  $new_instance['twitter_id'];
		$instance['facebook_id'] =  $new_instance['facebook_id'];
		$instance['linkedin_id'] =  $new_instance['linkedin_id'];
		$instance['googleplus_id'] =  $new_instance['googleplus_id'];
		$instance['widgetwidth_id'] =  $new_instance['widgetwidth_id'];
		$instance['fbwidth_id'] =  $new_instance['fbwidth_id'];
		$instance['fbheight_id'] =  $new_instance['fbheight_id'];
		$instance['recommend_id'] =  $new_instance['recommend_id'];
		$instance['emailwidth_id'] =  $new_instance['emailwidth_id'];
		$instance['emailtext_id'] =  $new_instance['emailtext_id'];
		$instance['fbboxcolor_id'] =  $new_instance['fbboxcolor_id'];
		$instance['gpluscolor_id'] =  $new_instance['gpluscolor_id'];
		$instance['twitcolor_id'] =  $new_instance['twitcolor_id'];
		$instance['emailcolor_id'] =  $new_instance['emailcolor_id'];
		$instance['othercolor_id'] =  $new_instance['othercolor_id'];
		return $instance;
	}

	function form( $instance ) { 
		$instance = wp_parse_args( (array) $instance, array( 'feedburner_id' => 'dianys', 'twitter_id' => 'dianysmedia', 'facebook_id' => 'https://facebook.com/dianysmedia', 'fbwidth_id' => '270', 'fbheight_id' => '80', 'recommend_id' => 'Recommend on Google', 'emailwidth_id' => '140', 'emailtext_id' => 'Enter your email', 'fbboxcolor_id' => '#FFF', 'gpluscolor_id' => '#F5FCFE', 'twitcolor_id' => '#EEF9FD', 'emailcolor_id' => '#E3EDF4', 'othercolor_id' => '#D8E6EB', 'linkedin_id' => 'syafiqzaimi', 'googleplus_id' => '108415603620522309492', 'widgetwidth_id' => '280' ) );
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = format_to_edit($instance['twitter_id']);
		$facebook_id = format_to_edit($instance['facebook_id']);
		$linkedin_id = format_to_edit($instance['linkedin_id']);
		$googleplus_id = format_to_edit($instance['googleplus_id']);
		$widgetwidth_id = format_to_edit($instance['widgetwidth_id']);
		$fbwidth_id = format_to_edit($instance['fbwidth_id']);
		$fbheight_id = format_to_edit($instance['fbheight_id']);
		$recommend_id = format_to_edit($instance['recommend_id']);
		$emailwidth_id = format_to_edit($instance['emailwidth_id']);
		$emailtext_id = format_to_edit($instance['emailtext_id']);
		$fbboxcolor_id = format_to_edit($instance['fbboxcolor_id']);
		$gpluscolor_id = format_to_edit($instance['gpluscolor_id']);
		$twitcolor_id = format_to_edit($instance['twitcolor_id']);
		$emailcolor_id = format_to_edit($instance['emailcolor_id']);
		$othercolor_id = format_to_edit($instance['othercolor_id']);
	?>			
		<center><strong><u>Social Profiles Setting</u></strong></center><br />
		<p><label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php _e('Enter your Feedburner ID:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" type="text" value="<?php echo $feedburner_id; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php _e('Enter your Twitter ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $twitter_id; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('facebook_id'); ?>"><?php _e('Enter your Facebook URL:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('facebook_id'); ?>" value="<?php echo $facebook_id; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('linkedin_id'); ?>"><?php _e('Enter your LinkedIn ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('linkedin_id'); ?>" value="<?php echo $linkedin_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('googleplus_id'); ?>"><?php _e('Enter your Google+ ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('googleplus_id'); ?>" value="<?php echo $googleplus_id; ?>" /></p>

		<center><strong><u>Other Settings</u></strong></center><br />
		<p><label for="<?php echo $this->get_field_id('widgetwidth_id'); ?>"><?php _e('Widget width(px):'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('widgetwidth_id'); ?>" value="<?php echo $widgetwidth_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('fbwidth_id'); ?>"><?php _e('Facebook width(px):'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('fbwidth_id'); ?>" value="<?php echo $fbwidth_id; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('fbheight_id'); ?>"><?php _e('Facebook height(px):'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('fbheight_id'); ?>" value="<?php echo $fbheight_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('recommend_id'); ?>"><?php _e('Google recommend text:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('recommend_id'); ?>" value="<?php echo $recommend_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('emailwidth_id'); ?>"><?php _e('Subscription box width(px):'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('emailwidth_id'); ?>" value="<?php echo $emailwidth_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('emailtext_id'); ?>"><?php _e('Subscription box text:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('emailtext_id'); ?>" value="<?php echo $emailtext_id; ?>" /></p>
		<center><strong><u>Background Color Settings</u></strong><br />[Get color code list  <a href="http://html-color-codes.info/" rel="nofollow" title="Get color code list here" target="_blank"><strong>HERE</strong></a>]</center><br />
		<p><label for="<?php echo $this->get_field_id('fbboxcolor_id'); ?>"><?php _e('Facebook: Default: #FFFFFF'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('fbboxcolor_id'); ?>" value="<?php echo $fbboxcolor_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('gpluscolor_id'); ?>"><?php _e('Google: Default: #F5FCFE'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('gpluscolor_id'); ?>" value="<?php echo $gpluscolor_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('twitcolor_id'); ?>"><?php _e('Twitter: Default: #EEF9FD'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('twitcolor_id'); ?>" value="<?php echo $twitcolor_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('emailcolor_id'); ?>"><?php _e('Subscription: Default: #E3EDF4'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('emailcolor_id'); ?>" value="<?php echo $emailcolor_id; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('othercolor_id'); ?>"><?php _e('RSS, LinkedIn, Google+: Default: #D8E6EB'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('othercolor_id'); ?>" value="<?php echo $othercolor_id; ?>" /></p>
		<p>Share and support this plugin. For more info, go to <a href="http://all-inclusiv-web.info/" target="_blank">Lauro Socializer</a> plugin page</p>
		<?php }
}

add_action('widgets_init', create_function('', 'return register_widget(\'laurosocializer\');'));
add_action('wp_head', array('laurosocializer', 'head'));