<?php
/**
 * Contains Customizer Extended Controls
 *
 * @since 1.0
 */
 

if (class_exists('WP_Customize_Control')):

    /**
     * Corpus Customize Important Links Control
     *
     * Controls Important Links for the Theme
     */
    class Corpus_Customize_Important_Links_Control extends WP_Customize_Control {

        public function render_content() {
            echo '<p><a href="' . CORPUS_DOCS_URL . '" target="_blank">' . __('Theme Documentation', 'corpus') . '</a></p>';
            echo '<p><a href="' . CORPUS_CONTACT_URL . '" target="_blank">' . __('Contact us', 'corpus') . '</a></p>';
        }

    }

endif;