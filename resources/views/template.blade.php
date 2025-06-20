<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026231125 : Ayesha Hana Azkiya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        body {
            background-color: #c5f5f5; /* Tosca muda konsisten */
        }

        .jumbotron {
            background: linear-gradient(to right, #1abc9c, #007bff); /* Tosca ke biru */
            height: 100px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        .jumbotron h1 {
            font-size: 30px;
            margin: 0;
        }

        .table {
            border: 1px solid #dee2e6;
        }

        .table thead th {
            background-color: #ffffff;
            color: black;
        }

        .table tbody td {
            color: black;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #ffffff;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #e6f7ff;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231125 : Ayesha Hana Azkiya</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li
                class="nav-item"><a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/bis">Tugas CRUD</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/eas">EAS</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/keranjangbelanja">Latihan 1</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/pagecounter">Latihan 2</a>
            </li>
            <li
                class="nav-item"><a class="nav-link" href="/karyawan">Latihan 3</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
