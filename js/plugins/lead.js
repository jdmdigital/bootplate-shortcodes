tinymce.PluginManager.add('bp_lead', function(editor, url) {
    editor.addButton('bp_lead', {
        tooltip: 'Lead',
        icon: 'bp-lead',
        onclick: function() {
            editor.insertContent('[lead]This is lead text.[/lead]');
        }
    });
});