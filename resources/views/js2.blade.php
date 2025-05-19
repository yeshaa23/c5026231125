<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validasi() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;

            if (nrp.length == 0) {
                swal("Pesan", "NRP harus diisi", "error");
                document.getElementById("nrp").focus();
                return false;
            }

            if (isNaN(nrp)) {
                swal("Pesan", "NRP hanya boleh angka", "error");
                document.getElementById("nrp").focus();
                return false;
            }

            if (nama.length == 0) {
                swal("Pesan", "Nama harus diisi", "error");
                document.getElementById("nama").focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <form id="formdaftar" onsubmit="return validasi()">
            <div class="form-group">
                <label>NRP:</label>
                <input type="text" class="form-control" id="nrp" name="nrp" 
                    placeholder="Isikan 10 digit NRP, harus diisi">
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" 
                    placeholder="Isikan nama, harus diisi">
            </div>
            <input type="submit" class="btn btn-success" value="Daftar">
        </form>
    </div>
</body>
</html>
