
var ht = document.getElementById('HienThiCauHoi');
function xuat(obj,i)
{
    var row = document.createElement('div');
    row.className = 'row my-2';
    var col = document.createElement('div');
    col.className = 'col-12';
    row.appendChild(col);
    var NoiDung = document.createElement('div');
    NoiDung.className = 'NoiDung';
    col.appendChild(NoiDung);
    var str = '<p><b> Câu hỏi ' + i + ': ' + obj.NoiDungCauHoi + '</b></p>' + 
    '<ol><li> ' + obj.CauHoi1 + '</li>' + 
    '<li>' + obj.CauHoi2 + '</li>';
    if(obj.CauHoi3 != null) str += '<li>' + obj.CauHoi3 + '</li>';
    if(obj.CauHoi4 != null) str += '<li>' + obj.CauHoi4 + '</li>';
    str += '</ol><p>Đáp án: ' + obj.DapAn1;
    if(obj.DapAn2 != null)  str += ', ' + obj.DapAn2 + '</p>';
    else str += '</p>';
    str = str.replace(/\[IMG=(.*?)/gi, '<p><img src="Public/img/');
    str = str.replace(/\]\[\/IMG\]/gi, '"/></p>');
    NoiDung.innerHTML = str;
    ht.appendChild(row);
}

function inCauHoi(k = 0)
{
    ht.innerHTML = "";
    for(var i = 0; i < json.length; i++)
    {
        if(json[i].MaLoaiCauHoi == k)
            xuat(json[i],json[i].MaCauHoi);
        else if(k == 0)
            xuat(json[i],json[i].MaCauHoi);
    }
}

inCauHoi();