@if (session('success'))
    <script>
        swal({
            text: "{{ session('success') }}",
            button: false,
            timer: 1800,
        });
    </script>
@endif
@if (session('error'))
    <script>
        swal({
            text: "{{ session('error') }}",
            button: true,
        });
    </script>
@endif
