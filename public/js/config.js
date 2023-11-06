CKEDITOR.editorConfig = function(config) {
    // Add a custom button for Bold function
    config.toolbarGroups = [
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'forms' },
        { name: 'tools' },
        { name: 'document',    groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'others' },
        { name: 'colors' }
    ];
    config.removeButtons = 'Underline,Strike,Subscript,Superscript';
    config.extraPlugins = 'justify';
    config.extraAllowedContent = 'span(*){*}';
    config.font_names = 'Arial;Comic Sans MS;Courier New';
    config.toolbarCanCollapse = true;
    config.language = 'en';
    config.font_defaultLabel = 'Arial';
    config.fontSize_defaultLabel = '12px';
    config.contentsCss = ['https://cdn.ckeditor.com/4.15.1/full-all/contents.css'];
    config.height = 300;

    // Register a custom button for the Bold function
    config.toolbar_myToolbar =
        [
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline' ] },
            { name: 'paragraph', items: [ 'BulletedList' ] }
        ];
};
