<!DOCTYPE html>
<html>
<head>
    <title>Divisions</title>
</head>
<body>
    <h1>Divisions</h1>
    <ul>
        @foreach ($divisions as $division)
            <li>
                {{ $division->name }}
                <ul>
                    @foreach ($division->departments as $department)
                        <li>
                            <a href="{{ route('department.show', $department->id) }}">{{ $department->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
