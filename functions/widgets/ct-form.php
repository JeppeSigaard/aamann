<?php 

class smamo_ct_box extends WP_Widget {

    function __construct() {
    parent::__construct(
    // Base ID of your widget
    'smamo_ct_box', 

    // Widget name will appear in UI
    __('Kontaktformular', 'smamo'), 

    // Widget description
    array( 'description' => __( 'Widget, der viser en kontaktformular. Mails gemmes også under "Emails"', 'smamo' ), ) 
    );
    }

    // FRONT END
    public function widget( $args, $instance ) {
        
        if(isset($instance['to'])){$receiver = $instance['to'];}
        else{$receiver = 'info@aa-w.dk';}
        
        echo $args['before_widget']; ?>

        <form id="sidebar-ct-form" class="loading">
            <input type="hidden" name="receiver" value="<?php echo $receiver ?>"/>
            <input type="hidden" name="appID" value="bre3ml59inksjw23232hoqiwhqwkl234nkfnewkfewn677fwk3enf"/>
            <h3>Kontakt mig</h3>
            <div class="form-section section-1">
                <p>Udfyld kontaktformularen og vi kontakter dig hurtigst muligt</p>
                <input type="text" name="name" placeholder="Dit navn"/>
                <input type="email" name="email" placeholder="Din email"/>
                <input type="text" name="phone" placeholder="Dit telefonnummer"/>
            </div>

            <div class="form-section section-2 hidden">
                <p>Jeg vil gerne vide mere om:</p>
                <div><input type="checkbox" name="check-1"/>Ejendomsservice</div>
                <div><input type="checkbox" name="check-2"/>Rengøring</div>
                <div><input type="checkbox" name="check-3"/>Vinduespudsning</div>
                <div><input type="checkbox" name="check-4"/>Havearbejde</div>
                <div><input type="checkbox" name="check-5"/>Snerydning</div>
                <div><input type="checkbox" name="check-6"/>Skadeservice</div>
            </div>

            <div class="form-section section-3 hidden">
                <p>Evt. bemærkninger</p>
                <textarea name="message" placeholder="tilføj evt. en kommentar (valgfrit)"></textarea>
            </div>


            <div class="form-buttons">
                <a class="form-btn btn-back disabled" href="#">Tilbage</a>
                <a class="form-btn btn-forw" href="#">Næste</a>
            </div>
        </form>

        <?php echo $args['after_widget'];
 
    }

    // BACKEND
    public function form( $instance ) {
        if ( isset( $instance[ 'to' ] ) ) {

            $to = $instance[ 'to' ];

        }

        else {

            $to = __( 'info@aa-w.dk', 'smamo' );

        }

        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'to' ); ?>"><?php _e( 'Send mails til:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'to' ); ?>" name="<?php echo $this->get_field_name( 'to' ); ?>" type="email" value="<?php echo esc_attr( $to ); ?>" />
        </p>
        <?php 
    }

    // OPDATER
    public function update( $new_instance, $old_instance ) {

        $instance = array();

        $instance['to'] = ( ! empty( $new_instance['to'] ) ) ? strip_tags( $new_instance['to'] ) : '';

        return $instance;

    }

} 


add_action( 'widgets_init', 'smamo_load_widgets' );
function smamo_load_widgets() {
	register_widget( 'smamo_ct_box' );
}

?>