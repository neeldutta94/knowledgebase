<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="dist.css">

    <title>Login</title>
</head>
<body class="bg-grey-lighter h-screen font-sans">
    <div class="container mx-auto h-full flex justify-center items-center">
        <div class="w-1/3">
            <h1 class="font-hairline mb-6 text-center">Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Name</label>
                        <input type="type" name="name" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Username">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Email</label>
                        <input type="type" name="email" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Email">
                    </div>

                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Password</label>
                        <input type="password" name="password" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Your Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="font-bold text-grey-darker block mb-2">Confirm Password</label>
                        <input type="password" id="password-confirm" name="password_confirmation" class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow" placeholder="Confirm Password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 rounded" type="submit">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
