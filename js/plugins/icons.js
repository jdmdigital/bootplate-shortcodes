tinymce.PluginManager.add('bp_icons', function(editor, url) {
    editor.addButton('bp_icons', {
        tooltip : 'Icons',
        icon : 'bs-icons',
        onclick: function() {
            editor.insertContent('[bpicon class=""]');
        }
    });
});
