<header>
    <div class="bg-gray-100 p-4 ">
        <div class="flex container mx-auto items-center justify-between">
            <!-- Logo -->
            <div class="header-logo">
                <a href="{{ url('/') }}"><h4 class="text-3xl font-bold">MY PROJECT</h4></a>
            </div>
            <!-- Navigation -->
            <div class="header-nav">
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-lg font-medium text-black hover:text-green-500">Home</a></li>
                        <li><a href="#" class="text-lg font-medium text-black hover:text-green-500">About</a></li>
                        <li><a href="#" class="text-lg font-medium text-black hover:text-green-500">Product</a></li>
                        <li><a href="#" class="text-lg font-medium text-black hover:text-green-500">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Login/Register -->
            <div class="header-login flex space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-gray-700  text-white py-2 px-4 rounded">Login</a>
                <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-gray-700  text-white py-2 px-4 rounded">Register</a>
            </div>
        </div>
    </div>
</header>