<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <form id="submit_form">
                <div class="form-group">
                    <label>Enter Your Full-Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname">
                </div>
                <div class="form-group">
                    <label>Enter Your email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label>Enter Your Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-success" type="submit" id="add_data">Add</button>
                </div>
            </form>

            <div id="show"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        $('#submit_form').submit(function(e) {
            e.preventDefault();
            var formData = $('#submit_form').serialize();
            $.ajax({
                type: 'POST',
                url: "{{ url('/form_submit') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response.fullname);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
</body>

</html>
