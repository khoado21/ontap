function ajax1(number) {
    $.ajax({
        url: 'select_xe.php',
        type: 'POST',
        data: {
            number: number,
        },
       dataType: 'json',
        success: function (result) {

                var html = '';
                html +='<tr>';
                html +='<th>Tên khách hàng</th>';
                html +='<th>Số lần thuê xe</th>';
                html +='</tr>';
                $(result).each(function (key, item) {
                    html += '<tr>';
                    html += '<td>' + item['TENXE'] + '</td>';
                    html += '<td>' + item['SOLAN'] + '</td>';
                    html += '</tr>';
                });
                $('#result').html(html);   
        },
        error: function(data, errorThrown){
            alert('error: ' + errorThrown +' loi');
        }
    });
}