<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">Reset Your Password</h2>

        <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required
                    class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700">New Password</label>
                <input type="password" name="password" placeholder="New password" required
                    class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700">Confirm New Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm new password" required
                    class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
                Reset Password
            </button>
        </form>
    </div>

</body>
</html>
