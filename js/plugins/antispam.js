tinymce.PluginManager.add('bp_antispam', function(editor, url) {
    editor.addButton('bp_antispam', {
        tooltip: 'Antispam',
        icon: 'bp-antispam',
        onclick: function() {
            editor.insertContent('[antispam]you@mail.com[/antispam]');
        }
    });
});