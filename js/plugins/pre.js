tinymce.PluginManager.add('bp_pre', function(editor, url) {
    editor.addButton('bp_pre', {
        tooltip: 'PRE',
        icon: 'bs-wells',
        onclick: function() {
            editor.insertContent('[pre]Code Goes Here[/pre]');
        }
    });
});