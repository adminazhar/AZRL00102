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
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ URL::asset('js/core/app-menu.js') }}"></script>
<script src="{{ URL::asset('js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ URL::asset('js/scripts/cards/card-advance.js') }}"></script>
<!-- END: Page JS-->

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
