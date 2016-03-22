tinymce.PluginManager.add('bp_tweetable', function(editor, url) {
    editor.addButton('bp_tweetable', {
        tooltip: 'Tweetable',
        icon: 'bp-tweetable',
        onclick: function() {
            editor.insertContent('[tweetable via="jdmdigital"]Tweetable sentance goes here.[/tweetable]');
        }
    });
});