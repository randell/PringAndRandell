<?php

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('clear_registry')) {
    // Rebuild .info data.
    system_rebuild_theme_data();
    // Rebuild theme registry.
    drupal_theme_rebuild();
}