<!-- BEGIN: Vendor JS-->
<script src="{{ URL::asset('vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ URL::asset('vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>

<script src="{{ URL::asset('vendors/js/extensions/toastr.min.js') }}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ URL::asset('js/core/app-menu.js') }}"></script>
<script src="{{ URL::asset('js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ URL::asset('js/scripts/cards/card-advance.js') }}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Bootstrap Switch -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- END: Bootstrap Switch -->



<script>
    $(function() {
        $('.toggle-class').change(function() {
            var is_admin = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'users/changeStatus',
                data: {'is_admin': is_admin, 'id': id},
                success: function(data){
                    if(is_admin==1){
                        $("#alert_success").show();
                    }else{
                        $("#alert_error").show();
                    }
                }
            });
        })
    })
</script>


<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    $(document).ready( function () {
        $('#customertable').DataTable();
    } );
</script>

