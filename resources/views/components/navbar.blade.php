<nav class="border-b py-4">
    <div class="max-w-screen-xl mx-auto px-4 text-center">
        @if (Auth::guard('student')->check())
        <div>
            <a href="/dashboard" class="px-3 py-2 rounded text-sm font-medium bg-blue-600 text-gray-50 transition-all duration-200 hover:bg-blue-500">Dashboard</a>
            <a href="/logout" class="px-3 py-2 rounded text-sm font-medium bg-red-600 text-gray-50 transition-all duration-200 hover:bg-red-500">Logout</a>
        </div>
        @else
        <div>
            <a href="/signup" class="px-3 py-2 rounded text-sm font-medium bg-blue-600 text-gray-50 transition-all duration-200 hover:bg-blue-500">Signup</a>
            <a href="/login" class="px-3 py-2 rounded text-sm font-medium bg-red-600 text-gray-50 transition-all duration-200 hover:bg-red-500">Login</a>
        </div>
        @endif
    </div>
</nav>