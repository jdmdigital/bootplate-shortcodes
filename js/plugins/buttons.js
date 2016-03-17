tinymce.PluginManager.add('bp_buttons', function(editor, url) {
    editor.addButton('bp_buttons', {
        tooltip: 'Buttons',
        icon: 'bs-buttons',
        onclick: function() {
            editor.insertContent('[btn classes="btn-default"]Click Here[/btn]');
        }
    });
});