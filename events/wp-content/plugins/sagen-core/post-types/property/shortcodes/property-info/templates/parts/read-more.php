<div class="qodef-pi-read-more">
    <?php
        echo sagen_select_execute_shortcode('qodef_button', array(
            'type'  => 'outline',
            'text'  => esc_html__('Know More', 'qodef-core'),
            'link'  => get_the_permalink()
        ));
    ?>
</div>