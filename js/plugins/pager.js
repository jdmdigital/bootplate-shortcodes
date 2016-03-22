tinymce.PluginManager.add('bp_pager', function(editor, url) {
    editor.addButton('bp_pager', {
        tooltip: 'Pager',
        icon: 'bs-wells',
        onclick: function() {
            editor.insertContent('[pager next="http://" prev="http://"]');
        }
    });
});