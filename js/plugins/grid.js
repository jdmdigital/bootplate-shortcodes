tinymce.PluginManager.add('bs_grid', function(editor, url) {
    editor.addButton('bs_grid', {
        type: 'menubutton',
        tooltip: 'Grid',
        icon: 'bs-grid',
        menu: [
            { text: '1/2 Columns', onclick: function() { editor.insertContent('[one_half xclass="col-md-6"]Text Goes Here[/one_half]<br class="nc"/>[one_half_last xclass="col-md-6"]Text Goes Here[/one_half_last]'); } },
            { text: '1/3 Columns',  onclick: function() { editor.insertContent('[one_third_first xclass="col-md-4"]Text Goes Here[/one_third_first]<br class="nc"/>[one_third xclass="col-md-4"]Text Goes Here[/one_third]<br class="nc"/>[one_third_last xclass="col-md-4"]Text Goes Here[/one_third_last]'); } },
            { text: '1/4 Columns',  onclick: function() { editor.insertContent('[one_fourth_first xclass="col-md-3"]Text Goes Here[/one_fourth_first]<br class="nc"/>[one_fourth xclass="col-md-3"]Text Goes Here[/one_fourth]<br class="nc"/>[one_fourth xclass="col-md-3"]Text Goes Here[/one_fourth]<br class="nc"/>[one_fourth_last xclass="col-md-3"]Text Goes Here[/one_fourth_last]'); } },
        ]
    });
});
