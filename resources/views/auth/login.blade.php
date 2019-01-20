<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body class="bg-grey-lighter h-screen font-sans bg-cover-image">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container mx-auto h-full flex justify-center items-center">
            <div class="w-1/3">
                <h1 class="font-hairline mb-6 text-white text-center">Login</h1>
                <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Username or Email</label>
                        <input type="type" name="email" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Username">
                    </div>

                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Password</label>
                        <input type="password" name="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 rounded">
                            Login
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>
</html>
