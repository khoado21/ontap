<style>
    .border {
        border: 1px solid black;
        width: 300px;
    }

    table,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cau5.js"></script>

<script>
    $(document).ready(function() {
        selectkh();
        $('#selectkh').change(function() {
            var name = $('#TENKH').val();
            selecthd(name);
        })
        $('#selecthd').change(function() {
            var MAHD = $('#MAHD').val();
            selectxe(MAHD);
        })
        $(document).ready(function(){
            $(document).on('click', '.delete', function(){
            var MAXE = $(this).val();
            var MAHD = $('#MAHD').val();
            delete_cthd(MAXE, MAHD);
            });
        });
    })
</script>


<div>
    <div id="selectkh"></div>


    <div id="selecthd"></div>


    <div class="select_xe_hd"></div>

</div>
