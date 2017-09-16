<?php

add_action('admin_init', 'add_sections_and_fields_config_cb');

function add_sections_and_fields_config_cb() {
    add_settings_section(
            'treinaweb_plugin_section', 'Opções de Cor do Menu', 'exibe_section_plug_config_cb', 'general'
    );
    add_settings_field(
            'CorMenu', 'Confirgurações da cor do menu', 'input_treinaweb_config_cb', 'general', 'treinaweb_plugin_section'
    );
    register_setting(
            'general', 'CorMenu'
    );
}

function exibe_section_plug_config_cb() {
    
}

function input_treinaweb_config_cb() {
    $config = get_option('CorMenu');
    echo'<hr>';
    echo '<p><label>cor inicial</label><input  name="CorMenu[normal]" value="' . $config['normal'] . '" type="color"></p>';
    echo '<p><label>cor com o mouse por cima</label><input  name="CorMenu[over]" value="' . $config['over'] . '" type="color"></p>';
    echo '<p><label>fundo do submenu</label><input  name="CorMenu[fundao]" value="' . $config['fundao'] . '" type="color"></p>';
    echo'<hr>';
}
