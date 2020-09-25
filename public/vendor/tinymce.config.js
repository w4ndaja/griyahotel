tinymce.PluginManager.add('custom', function(editor, url) {
    // Add a button that opens a window
//            editor.addButton('example', {
//                text: 'My button',
//                icon: false,
//                onclick: function() {
//                }
//            });
});
var editor_config = {
    path_absolute : "/",
    selector: "textarea#body",
    plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
    ],
    fontsize_formats: "8px 10px 12px 14px 16px 18px 20px 22px 24px 36px",
    // toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontsizeselect",
    toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | preview | forecolor backcolor | table | fullscreen",
    // toolbar3: " | hr removeformat | charmap emoticons | fullscreen | ltr rtl | visualchars visualblocks template restoredraft",
    style_formats_merge: true,

    // force_br_newlines : false,
    force_p_newlines : true,
    // setup: function(editor) {
    //     editor.on('PostProcess', function (e) {
    //         e.content = e.content.replace(/<br\s?\/?><br\s?\/?>/gi, '</p><p>');
    //     });
    // },
    apply_source_formatting : false,
    style_formats: [
        { title: 'border',
            inline: 'span',
            styles: {padding: '20px', margin: '10px', border: '1px dashed #bababa', display: 'block' , 'border-radius': '5px'}
        },
        { title: 'conversation-fa',
            inline: 'span',
            styles: {'border-right': '15px solid #d6d6d6' , display: 'block', background: '#f1f1f1', margin: '20px 30px' , padding: '15px'}
        },
        { title: 'conversation-en',
            inline: 'span',
            styles: {'border-left': '15px solid #d6d6d6' , display: 'block', background: '#f1f1f1', margin: '20px 30px' , padding: '15px'}
        },
        { title: 'none',
            inline: 'span',
            styles: {}
        },

    ],
    toolbar_items_size: 'small',
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
        });
    }
};
tinymce.init(editor_config);
