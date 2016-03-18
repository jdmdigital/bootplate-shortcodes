tinymce.PluginManager.add('bp_aside', function(editor, url) {
    editor.addButton('bp_aside', {
        tooltip: 'Aside',
        icon: 'bs-alerts',
        onclick: function() {
            editor.insertContent('[aside type="warning, danger, success, info"]Note: This is an aside. Use this when you want a call-out or to mention something on the DL. [/aside]');
        }
    });
});
