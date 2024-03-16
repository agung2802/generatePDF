<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <?php use Barryvdh\DomPDF\Facade\Pdf;?>
        <h1>hello word</h1>

        <table border="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Agung</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Daffa</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rizal</td>
                    <td>Bandung</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('pdf.generate') }}">Download PDF</a>
    </body>
</html>
