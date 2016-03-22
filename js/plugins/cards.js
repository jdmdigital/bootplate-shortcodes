tinymce.PluginManager.add('bp_cards', function(editor, url) {
    editor.addButton('bp_cards', {
        type: 'menubutton',
        tooltip: 'Cards',
        icon: 'bp-cards',
        menu: [
            { text: 'Card w/ Image', onclick: function() { editor.insertContent('[card col="col-md-4" xclass="bootplate-cardimg" imgsrc="" title="Title" subtitle="Subtitle Here" link="" linktext="Click Here" openrow="y/n" closerow="y/n"]Card Body Text Goes Here.[/card]'); } },
            { text: 'Card no Image',  onclick: function() { editor.insertContent('[card col="col-md-4" xclass="bootplate-card" title="Title" subtitle="Subtitle Here" link="" linktext="Click Here" openrow="y/n" closerow="y/n"]Card Body Text Goes Here.[/card]'); } }
        ]
    });
});
