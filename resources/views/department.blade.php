<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">{{ $department->name }}</h1>
        <h2 class="text-xl font-semibold mb-4">Teams</h2>
        <ul class="space-y-4">
            @foreach ($department->teams as $team)
            <li class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">{{ $team->name }}</h3>
                <ul class="mt-2 space-y-2">
                    @foreach ($team->users as $user)
                    <li class="text-gray-700">
                        {{ $user->name }}
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
        <a href="{{ route('division.list') }}" class="block text-center mt-6 text-blue-500 hover:underline">
            Divisions 로 돌아가기
        </a>
    </div>
</body>
</html>
