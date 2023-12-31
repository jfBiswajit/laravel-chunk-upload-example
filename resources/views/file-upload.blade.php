<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigaChunk</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.js"
        integrity="sha512-yyr/AZnf9KbRjIKQpglQyZeyz2sOJCa0bcAt+qBnY/jfatfojXGz3eymOoZisKcIv9P49K/PzSJwdL5dwOfgGQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            {{-- !INFO: Title --}}
            <h1 class="text-center mb-0 text-success font-acme">GigaChunk</h1>
            <h4 class="text-center font-great-vibes">Get Chunky, Upload Happy</h4>

            {{-- !INFO: Select file --}}
            @csrf
            <div class="form-group">
                <input name="uploaded-file" type="file" class="form-control" id="browse-file">
            </div>

            {{-- !INFO: File Info --}}
            <table class="table table-bordered mt-2" style="display: none" id="file-info-container">
                <tr>
                    <td><b>File Name</b></td>
                    <td id="file-name"></td>
                </tr>
                <tr>
                    <td><b>File Size</b></td>
                    <td id="file-size"></td>
                </tr>
            </table>

            {{-- !INFO: Success alert --}}
            <div class="alert alert-success mt-2" style="display: none" id='success-alert' role="alert">
                File successfully uploaded!
            </div>

            {{-- !INFO: Failed alert --}}
            <div class="alert alert-danger mt-2" style="display: none" id='error-alert' role="alert">
                Failed to upload!
            </div>

            {{-- !INFO: Progress bar --}}
            <div class="progress mt-2">
                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"
                    style="width: 0%" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>

            {{-- !INFO: Show video preview --}}
            <div class="mt-5">
                <video id="video-preview" controls style="width: 100%; height: auto; display: none"></video>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const csrfToken = `{{ csrf_token() }}`;
        const fileUploadingRoute = `{{ route('file.store') }}`;
    </script>
    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
