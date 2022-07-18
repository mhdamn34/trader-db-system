<!-- Bootstrap 5 bundle-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    // Simple Datatable
    let table_data = document.querySelector('.data-table');
    let dataTable = new simpleDatatables.DataTable(table_data);

</script>