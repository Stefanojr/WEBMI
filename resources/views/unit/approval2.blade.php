@extends('unit.layout.main')
@section('title', 'Approval')

@section('content')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPROVAL RISALAH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../css/background.css">
    <link rel="stylesheet" href="../../css/tableUnit.css">
</head>
<body>
    <div class="table-container">
        <h2>APPROVAL RISALAH</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Langkah</th>
                    <th>Unit</th>
                    <th>Group</th>
                    <th>Tanggal</th>
                    <th>Komentar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($approvals as $index => $approval)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $approval['langkah'] }}</td>
                    <td>{{ $approval['unit-name'] }}</td>
                    <td>{{ $approval['group-name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($approval['date'])->format('d/m/Y') }}</td>
                    <td>{{ $approval['komentar'] }}</td>
                    <td class="status">
                        <div class="indicator {{ $approval['status'] == 'setuju' ? 'approve' : 'revisi' }}"></div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
@endsection
