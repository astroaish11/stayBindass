<?php
include('config.php');
include('header.php');


?>

<!-- Page Heading -->
<h1 class="h3 topTitle" style="z-index: 2;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Dashboard
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Dashboard</a> <span class="pl-2 pr-2">/</span> <a> Dashboard</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
      <h1>Comming soon</h1>
    </div>
</div>

<!-- /.container-fluid -->
<?php
include('footer.php');
?>

<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('c_add');

    var config = {
        '.chosen-select': { search_contains: false, enable_split_word_search: false },
        '.chosen-select-deselect': { allow_single_deselect: true },
        '.chosen-select-no-single': { disable_search_threshold: 10 },
        '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
        '.chosen-select-rtl': { rtl: true },
        '.chosen-select-width': { width: '95%' }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#client").change(function () {
            var id = $(this).val();
            var datastring = 'client=' + id;
            $.ajax({
                url: 'getapplication.php',
                type: "POST",
                data: datastring,
                dataType: "JSON",
                success: function (data) {
                    /*if(empData){
                        $( "$errorMessage" ).addClass
                        ('hidden').text("");
                        $("#recoedListing").removeClass
                        ('hidden').text("No Record Found!");
                    }*/

                    $('#c_name').val(data.cname);
                    $('#email').val(data.email);
                    $('#contact').val(data.contact);
                    $('#c_add').val(data.cadd);
                }
            });
        });

        $('#addrow').click(function () {

            if ($('#service').val() != '') {

                var getlength = $('#resourceRequest tbody tr').length;
                var rowid = parseFloat(getlength) + 1;

                $('#rowlen').val(rowid);

                var getservice = $('#service').val();
                var getservicename = $('#service option:selected').text();
                var getservicerate = $('#service option:selected').attr('data-rate');

                $('#resourceRequest').append('<tr><td style="text-align:left"><input type="text" value="' + getservicename + '" class="form-control" name="servicename' + rowid + '" readonly></td><td style="text-align:left"><input type="text" value="" class="form-control samples" name="sample' + rowid + '"></td><td style="text-align:left"><input type="text" value="' + getservicerate + '" class="form-control ratebx" name="rate' + rowid + '"></td><td style="text-align:left; display:none;"><input  type="text" value="" class="form-control" name="gst' + rowid + '"></td><td style="text-align:left"><input type="text" value="" readonly class="form-control tothrs" name="amount' + rowid + '"><input type="hidden" value="' + getservice + '" name="serviceid' + rowid + '" class="serviceid"></td><td><a class="btn btn-danger btn-sm deleterow" data-id="' + getservice + '">X</a></td></tr>');

                $('#service option:selected').hide();
                $('#service').prop('selectedIndex', 0);

            } else {
                alert('Please select Service');
            }

        });


        $('body').on('change', '.samples', function () {

            var getsample = $(this).val();
            var getsamplerate = $(this).closest('tr').find('.ratebx').val();

            var newamout = parseFloat(getsample) * parseFloat(getsamplerate);

            $(this).closest('tr').find('.tothrs').val(newamout);

            getgrtotal();

        });

        $('body').on('change', '.ratebx', function () {

            var getsamplerate = $(this).val();
            var getsample = $(this).closest('tr').find('.samples').val();

            var newamout = parseFloat(getsample) * parseFloat(getsamplerate);

            $(this).closest('tr').find('.tothrs').val(newamout);

            getgrtotal();

        });

        $('body').on('click', '.deleterow', function () {

            $(this).closest('tr').remove();
            var getval = $(this).attr('data-id');
            getgrtotal();

            var getrow = $('#rowlen').val();
            var newcount = parseFloat(getrow) - 1;


            $('#rowlen').val(newcount);

            $('#service option[value=' + getval + ']').show();

            return false;
        });


        function getgrtotal() {

            var thetotal = 0;

            $('.tothrs').each(function () {

                thetotal += parseFloat($(this).val());

            });

            $('#grtotal').text(thetotal);

        }



    });

</script>



</body>

</html>