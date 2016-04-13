(function($){
    $(document).ready(function (e) {
        $('#customize-controls .preview-notice').append('<a class="corpus-pro-link" href="http://www.mudthemes.com/showcase/corpus-theme" title="'+corpusCustomizerUpgradeVars.upgrade_text+'" target="_blank">'+corpusCustomizerUpgradeVars.upgrade_text+'</a>');
        $('.corpus-pro-link').click(function (e) {
            e.stopPropagation();
        });
    });
})(jQuery);