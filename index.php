<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>


    <form action="server.php" method="POST" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" accept="image/*" onchange="loadFile(event)" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="upload">
    </form>

    <div class="row">

        <div class="col-md-4">

            <img id="output" class="img-thumbnail" alt="...">

        </div>
    </div>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

</body>

</html>