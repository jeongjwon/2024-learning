<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Divisions</h1>
        <ul class="space-x-4 flex ">
            @foreach ($divisions as $division)
            <li class="w-full space-y-2">
                <h2 class="bg-blue-200  p-4 rounded-lg text-xl font-semibold text-center">{{ $division->name }}</h2>
                <ul class="mt-2 w-full flex gap-x-2 text-center">
                    @foreach ($division->departments as $department)
                    <li class="w-1/2 bg-white p-4 rounded-lg shadow-md text-xl font-semibold text-center">
                        <a href="{{ route('department.show', ['id' => $department->id]) }}" class="text-blue-500 hover:underline">
                            {{ $department->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
