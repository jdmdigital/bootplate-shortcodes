tinymce.PluginManager.add('bp_tweetable', function(editor, url) {
    editor.addButton('bp_tweetable', {
        tooltip: 'Tweetable',
        icon: 'bs-collapse',
        onclick: function() {
            editor.insertContent('[tweetable via="jdmdigital"]Tweetable sentance goes here.[/tweetable]');
        }
    });
});