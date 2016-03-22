tinymce.PluginManager.add('bp_icons', function(editor, url) {
    editor.addButton('bp_icons', {
        tooltip : 'Icons',
        icon : 'bp-icon',
        onclick: function() {
            editor.insertContent('[bpicon class=""]');
        }
    });
});
