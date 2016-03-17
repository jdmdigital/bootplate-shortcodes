tinymce.PluginManager.add('bs_lead', function(editor, url) {
    editor.addButton('bs_lead', {
        tooltip: 'Lead',
        icon: 'bs-lead',
        onclick: function() {
            editor.insertContent('[lead]This is lead text.[/lead]');
        }
    });
});