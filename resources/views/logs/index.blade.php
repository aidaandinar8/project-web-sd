@extends('layouts.base-admin')

@section('content')
<!DOCTYPE html>

<html>
    <head>
        <title>Log Viewer</title>
    </head>

    <body>
        <pre>
            {{ $logContents }}
        </pre>
    </body>
</html>
@endsection