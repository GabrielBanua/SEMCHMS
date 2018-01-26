function showMe(box, b_id) {
    var box_id = b_id;
    var chboxs = document.getElementsByName("c1-" + box_id);
    var vis = "none";
    for (var i = 0; i < chboxs.length; i++) {
        if (chboxs[i].checked) {
            vis = "block";
            break;
        }
    }
    document.getElementById(box).style.display = vis;
}

function ShowRefedit(view, str) {
    var id = str;
    var chboxs = document.getElementsByName('c2-' + id);
    var vis = "none";
    for (var i = 0; i < chboxs.length; i++) {
        if (chboxs[i].checked) {
            vis = "block";
            break;
        }
    }
    document.getElementById(view).style.display = vis;
}