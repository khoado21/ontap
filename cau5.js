function selectkh() {
    $.ajax({
        url: 'select_kh.php',
        dataType: 'json',
        success: function (result) {
                var html = '';
                html +='<label>Tên khách hàng:</label>';
                html +='<select name="TENKH" id="TENKH">';
                $(result).each(function (key, item) {
                    html += '<option value='+item['MAKH']+'>'+item['HOTEN']+'</option>';
                });
                $('#selectkh').html(html);   
                html +='</select>';
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function selecthd(name) {
    $.ajax({
        url: 'select_hd.php',
        type: 'POST',
        data: {
            name: name,
        },
       dataType: 'json',
        success: function (result) {
                console.log(result);
                var html = '';
                html +='<label>Mã hợp đồng:</label>';
                html +='<select name="MAHD" id="MAHD">';
                $(result).each(function (key, item) {
                    html += '<option value='+item['MAHOPDONG']+'>'+item['MAHOPDONG']+'</option>';
                });
                $('#selecthd').html(html);   
                html +='</select>';
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function selectxe(MAHD) {
    $.ajax({
        url: 'select_xe_hd.php',
        type: 'POST',
        data: {
            MAHD: MAHD,
        },
       dataType: 'json',
        success: function (result) {
            var html = '';
            html +='<table>';
            html +='<tr>';
            html +='<th>Tên xe</th>';
            html +='<th>Chức năng</th>';
            html +='</tr>';
            $(result).each(function (key, item) {
                html += '<tr class="myTableRow">';
                html += '<td>' + item['TENXE'] + '</td>';
                html += "<td>";
                html += "<button class='delete' onclick='myfunc()' id='button_"+ item['MAXE']+ "' " + "value="+ item['MAXE'] +">" + "Delete" + "</input>";
                html +="</td>";
                html += '</tr>';
            });
            html +='</table>';
            $('.select_xe_hd').html(html);   
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}

function delete_cthd(MAXE, MAHD) {
    $.ajax({
        url: 'delete_cthd.php',
        type: 'POST',
        data: {
            MAXE: MAXE,
            MAHD: MAHD
        },
        success: function (result) {
            console.log(result);
            if(result == 'success')
            {
                alert('xóa thành công');
                selectxe(MAHD);
            }
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}