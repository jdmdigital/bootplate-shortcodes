tinymce.PluginManager.add('bp_alerts', function(editor, url) {
    editor.addButton('bp_alerts', {
        tooltip: 'Alerts',
        icon: 'bp-alerts',
        onclick: function() {
            editor.insertContent('[alert type="warning, danger, success, info"]<strong>Attention.</strong> This is an alert.[/alert]');
        }
    });
});
