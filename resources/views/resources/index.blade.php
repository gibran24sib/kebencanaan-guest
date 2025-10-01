<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kejadian Bencana</title>
</head>
<body>
    <h1>🌍 Informasi Kejadian Bencana</h1>
    <ul>
        @foreach($kejadian as $k)
        <li>
            <strong>{{ $k['jenis_bencana'] }}</strong> -
            {{ $k['tanggal'] }} di {{ $k['lokasi_text'] }}
            → Dampak: {{ $k['dampak'] }}
            (Status: {{ $k['status_kejadian'] }})
        </li>
        @endforeach
    </ul>
</body>
</html>


