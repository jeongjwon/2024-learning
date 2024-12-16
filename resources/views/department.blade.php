<!DOCTYPE html>
<html>
<head>
    <title>{{ $department->name }}</title>
</head>
<body>
    <h1>{{ $department->name }}</h1>
    <h2>Teams</h2>
    <ul>
        @foreach ($department->teams as $team)
            <li>
                {{ $team->name }}
                <ul>
                    @foreach ($team->users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('division.list') }}">Division으로 돌아가기</a>
</body>
</html>
