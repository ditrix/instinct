/* arkemoticons v 1.0
 * (c) Alexander Karataev 10/2014
 * ddw2@yandex.ru
 */

tinymce.PluginManager.add('arkemoticonssk', function(editor, url) {
var arkskype = [
["01", "02", "03", "04", "05", "06"],
["07", "08", "09", "10", "11", "12"],
["13", "14", "15", "16", "17", "18"],
["19", "20", "21", "22"]
];

function getHtml() {
var arkskypeHtml;

arkskypeHtml = '<table role="list" class="mce-grid" style="width:200px !important; height:100px !important;">';

tinymce.each(arkskype, function(row) {
arkskypeHtml += '<tr>';

tinymce.each(row, function(icon) {
var arkskypeUrl = url + '/img/' + icon + '.gif';

arkskypeHtml += '<td><a href="#" data-mce-url="' + arkskypeUrl + '" data-mce-alt="' + icon + '" tabindex="-1" ' +
'role="option" aria-label="' + icon + '"><img src="' +
arkskypeUrl + '" role="presentation" /></a></td>';
});

arkskypeHtml += '</tr>';
});

arkskypeHtml += '</table>';

return arkskypeHtml;
}

editor.addButton('arkemoticonssk', {
type: 'panelbutton',
panel: {
role: 'application',
autohide: true,
html: getHtml,
onclick: function(e) {
var linkElm = editor.dom.getParent(e.target, 'a');

if (linkElm) {
editor.insertContent(
'<img src="' + linkElm.getAttribute('data-mce-url') + '" alt="' + linkElm.getAttribute('data-mce-alt') + '" />'
);

//this.hide();
}
}
},
tooltip: 'Smile Skype',
image: url + '/img/smile.jpg'
});
});

