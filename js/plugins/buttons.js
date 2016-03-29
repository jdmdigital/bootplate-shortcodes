tinymce.PluginManager.add('bp_buttons', function(editor, url) {
    editor.addButton('bp_buttons', {
        tooltip: 'Buttons',
        icon: 'bp-button',
        onclick: function() {
            editor.insertContent('[btn btnurl="http://" classes="btn-default"]Click Here[/btn]');
        }
    });
});