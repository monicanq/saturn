<?php 
/**
 * Saturn Theme Customizer
 *
 * @package Saturn
 */

/**
 * Extension for Radio Control
 *
 */

if( class_exists( 'WP_Customize_Control' ) ) {
	class WP_Customize_Radio extends WP_Customize_Control {
		public $type = 'custom_radio';

        public function __construct( $manager, $id, $args = array() ) {
            parent::__construct( $manager, $id, $args );
            // $defaults = array(
            //     'a' => 1,
            //     'b' => 2,
            //     'c' => 3
            // );
            // $args = wp_parse_args( $args, $defaults );
            $this->args = $args['choices'];
            $this->img = $args['generic_img'];
            $this->id = $id;
        }
		public function render_content() {

		?>
        <div class="radio-container">
            <?php foreach ($this->args as $value){
                if ($this->img):
                    $img_src = "/wp-content/themes/saturn/assets/img" . "/" . $value . ".png";
                else:
                    $img_src = "/wp-content/themes/saturn/assets/img" . "/" . $this->id . $value . ".png";
                endif; 
            ?>
                <div class="radio">
                    <img class='radio-image' src='<?php echo ($img_src);?>'>
                    <input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> <?php checked( $this->value() ); ?>/>
                    
                    <label for="<?php echo ($this->id . "option_" . $value);?>"><?php echo ($value); ?></label>
                </div>
            <?php }?>

            
        </div>
		<?php
		}
	}
}

