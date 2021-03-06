/* arkemoticons v 1.0
 * (c) Alexander Karataev 10/2014
 * ddw2@yandex.ru
 */

tinymce.PluginManager.add('arkemoticons', function(editor, url) {
var arkagent = [
["01", "02", "03", "04", "05", "06", "07", "08", "09", "10"],
["11", "12", "13", "14", "15", "16", "17", "18", "19", "20"],
["21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
["31", "32", "33", "34", "35", "36", "37", "38", "39", "40"],
["41", "42", "43", "44", "45", "46", "47"]
];

function getHtml() {
var arkagentHtml;

arkagentHtml = '<table role="list" class="mce-grid" style="width:400px !important; height:200px !important;">';

tinymce.each(arkagent, function(row) {
arkagentHtml += '<tr>';

tinymce.each(row, function(icon) {
var arkagentUrl = url + '/img/' + icon + '.gif';

arkagentHtml += '<td><a href="#" data-mce-url="' + arkagentUrl + '" data-mce-alt="' + icon + '" tabindex="-1" ' +
'role="option" aria-label="' + icon + '"><img src="' +
arkagentUrl + '" style="width:32;" role="presentation" /></a></td>';
});

arkagentHtml += '</tr>';
});

arkagentHtml += '</table>';

return arkagentHtml;
}

editor.addButton('arkemoticons', {
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
tooltip: 'Smile Agent',
image: url + '/img/smile_agent.png'
});
});

