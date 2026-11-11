<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Department Management')</title>
</head>

<body>

    <header>
        <h1>Department Management</h1>

        <nav>
            <a href="{{ route('departments.index') }}">Departments</a>
        </nav>
    </header>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <div>
                <p>Please correct the following errors:</p>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

</body>

</html>