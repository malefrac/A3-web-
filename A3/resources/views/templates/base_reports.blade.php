<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reports.css') }}">
</head>
<body>
    <section id="header">
        <table width="100%" style="bordercollapse: collapse; border: 1px solid;">
            <th>
                <div style="text-aling: center">
                    <img src="{{ asset('img/Logoa3.jpg') }}" alt="logo"
                    height="250px" width="250px">
                </div>
            </th>
            <th>
                <p style="text-aling: center; font-size: 14px;">
                    @yield('header')
                </p>
            </th>
        </table>
    </section>
    <br>
    <section id="infoReport">
        <p style="font-size: 1px;">
            <strong>Fecha reporte:</strong>
            @php
                $time = time();
                echo date("Y-m-d (H:i:s)", $time);
            @endphp
        </p>

    </section>
    <br>
    @yield('content')

    <footer id="version_text">
        <p>Generado por A3 web 1.0</p>
 </footer>

</body>
</html>