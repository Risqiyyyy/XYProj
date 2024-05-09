<!-- JAVASCRIPT -->
<script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>

{{-- modal --}}

<script>
    function submitEditForm(kategoriId) {
        var form = document.getElementById('editForm' + kategoriId);
        var formData = new FormData(form);

        fetch('/categories/' + kategoriId, {
            method: 'PUT',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(response => {
            if (response.ok) {
                alert('Kategori berhasil diperbarui');
                location.reload();
            } else {
                alert('Terjadi kesalahan');
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    }
</script>

