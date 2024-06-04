<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script>
        Swal.fire({
            title: "{{ $title }}",
            text: "{{ $message }}",
            icon: "{{ $success ? 'success' : 'error' }}",
        });
    </script>
</body>

</html>
