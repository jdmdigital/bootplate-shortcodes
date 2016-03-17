tinymce.PluginManager.add('bs_antispam', function(editor, url) {
    editor.addButton('bp_antispam', {
        tooltip: 'Antispam',
        icon: 'bs-tooltip',
        onclick: function() {
            editor.insertContent('[antispam]you@mail.com[/antispam]');
        }
    });
});