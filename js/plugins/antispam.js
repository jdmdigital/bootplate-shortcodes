tinymce.PluginManager.add('bp_antispam', function(editor, url) {
    editor.addButton('bp_antispam', {
        tooltip: 'Antispam',
        icon: 'bs-tooltip',
        onclick: function() {
            editor.insertContent('[antispam]you@mail.com[/antispam]');
        }
    });
});