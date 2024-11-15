<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/js/chart-bar-demo.js') }}"></script>


<script>
    // Simple Datatable
    let table_data = document.querySelector('.table-data');
    let dataTable = new simpleDatatables.DataTable(table_data);
</script>