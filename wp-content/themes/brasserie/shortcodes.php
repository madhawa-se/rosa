<?php

add_shortcode('mdrop', function($atts) {
    $atts = shortcode_atts(
            array(
                  "name" => "room def",
                  "price" => 5000
            ), $atts);
    return "<option value='{$atts['name']}'>{$atts['name']}</option>";
});
