<?php

/**

 * @package  Plus Instagram Widget

*/

/*

Plugin Name: Plus Instagram Widget

Plugin URI: https://wordpress.org/plugins/plus-instagram-widget/

Description: Thanks for installing Plus Instagram Widget. Plus Instagram Widget helps you to display Instagram Widget on your website.

Version: 1.1

Author: Jose Porit

Author URI: https://wordpress.org/support/profile/twitterslider

*/



class PlusInstagram extends WP_Widget{

    

    public function __construct() {

        $params = array(

            'description' => 'Thanks for installing Plus Instagram Widget',

            'name' => 'Plus Instagram Widget'

        );

        parent::__construct('PlusInstagram','',$params);

    }

    

    public function form($instance) {

        extract($instance);

        

        ?>

<!-- here will put all widget configuration -->



<p>

    <label for="<?php echo $this->get_field_id('title');?>">Title : </label>

    <input class="widefat" id="<?php echo $this->get_field_id('title');?>"   name="<?php echo $this->get_field_name('title');?>" value="<?php echo !empty($title) ? $title : "Plus Instagram Widget"; ?>" />

</p>

<p>

    <label for="<?php echo $this->get_field_id('href');?>">Instagram Widgets ID : </label>

    <input

    class="widefat"

    id="<?php echo $this->get_field_id('href');?>"

    name="<?php echo $this->get_field_name('href');?>"

        value="<?php echo !empty($href) ? $href : ""; ?>" />

</p>

<p><strong>Instagram Widgets ID Generate here https://widgets.websta.me
</strong></p>

<p>

    <label for="<?php echo $this->get_field_id('width');?>"> Width : </label>

    <input

    class="widefat"

    id="<?php echo $this->get_field_id('width');?>"

    name="<?php echo $this->get_field_name('width');?>"

        value="<?php echo !empty($width) ? $width : "500"; ?>" />

</p>

<p>

    <label for="<?php echo $this->get_field_id('height');?>"> height : </label>

    <input

    class="widefat"

    id="<?php echo $this->get_field_id('height');?>"

    name="<?php echo $this->get_field_name('height');?>"

        value="<?php echo !empty($height) ? $height : "500"; ?>" />

</p>



<?php /*?><p>

    <label for="<?php echo $this->get_field_id('horizontal');?>">Horizontal: </label>

    <input

    class="widefat"

    id="<?php echo $this->get_field_id('horizontal');?>"

    name="<?php echo $this->get_field_name('horizontal');?>"

        value="<?php echo !empty($horizontal) ? $horizontal : "4"; ?>" />

</p>



<p>

    <label for="<?php echo $this->get_field_id('vertical');?>">Vertical: </label>

    <input

    class="widefat"

    id="<?php echo $this->get_field_id('vertical');?>"

    name="<?php echo $this->get_field_name('vertical');?>"

        value="<?php echo !empty($vertical) ? $vertical : "4"; ?>" />

</p><?php */?>

















<?php

    }

    

    public function widget($args, $instance) {

        extract($args);

        extract($instance);

        $title = apply_filters('widget_title', $title);

        $description = apply_filters('widget_description', $description);

        if(empty($title)) $title = "Plus Pinterest Widget";

        if(empty($pageURL)) $pageURL = "instagram";

        if(empty($width)) $width = "400";

        if(empty($height)) $height = "400";

        if(empty($horizontal)) $horizontal = "4";

        if(empty($vertical)) $vertical = "4";

        echo $before_widget;

        echo $before_title . $title . $after_title;

          



/*  $print_instagram .= '<iframe src="http://widget.stagram.com/in/'.$pageURL.'/?s=100&w='.$horizontal.'&h='.$vertical.'&b=no&bg=#000&p=3" allowtransparency="true" frameborder="0"

 scrolling="no" style="border:none;overflow:hidden; width:'.$width.'px; height:'.$height.'px" ></iframe>*/
 
 $print_instagram .= '<iframe src="http://widgets-code.websta.me/w/'.$href.'?ck=MjAxNi0wNi0yMFQwODo0MjoxNy4wMDBa" allowtransparency="true" frameborder="0"

 scrolling="yes" style="border:none;overflow:hidden; width:'.$width.'px; height:'.$height.'px"></iframe>

 

 <div style="font-size: 9px; color: #808080; font-weight: normal; font-family: tahoma,verdana,arial,sans-serif; line-height: 1.28; text-align: right; direction: ltr;"><a href="https://www.nationalcprassociation.com/" target="_blank" style="color: #808080;">National CPR association</a></div>';

 



          echo $print_instagram;





        echo $after_widget;

    }

}



add_action('widgets_init','register_PlusInstagram');

function register_PlusInstagram(){

    register_widget('PlusInstagram');

    

}