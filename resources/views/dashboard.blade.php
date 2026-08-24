<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AdminLTE Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-[#1a1d20] text-gray-200 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside class="w-64 bg-[#212529] border-r border-gray-800 flex flex-col justify-between">
            <div>
                <!-- Brand Logo -->
                <div class="h-16 flex items-center px-6 border-b border-gray-800 space-x-3">
                    <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center font-bold text-white">A</div>
                    <span class="text-lg font-bold text-white tracking-wide">AdminLTE 4</span>
                </div>

                <!-- Navigation -->
                <nav class="p-4 space-y-1 text-sm font-medium">
                    <!-- Menu Dashboard -->
                    <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3 bg-blue-600/20 text-blue-400 px-4 py-3 rounded-lg border-l-4 border-blue-500">
                        <i class="fa-solid me-2 fa-gauge w-5"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <!-- Menu Widgets -->
                    <a href="#" class="flex items-center space-x-3 text-gray-400 hover:bg-gray-800 hover:text-white px-4 py-3 rounded-lg transition">
                        <i class="fa-solid fa-layer-group w-5"></i>
                        <span>Widgets</span>
                    </a>

                    <!-- Menu Pengguna / Users -->
                    <a href="{{ route('users.index') }}" class="flex items-center space-x-3 text-gray-400 hover:bg-gray-800 hover:text-white px-4 py-3 rounded-lg transition">
                        <i class="fa-solid fa-users w-5"></i>
                        <span>Pengguna</span>
                    </a>

                    <!-- Menu Profil Saya -->
                    <a href="#" class="flex items-center space-x-3 text-gray-400 hover:bg-gray-800 hover:text-white px-4 py-3 rounded-lg transition">
                        <i class="fa-solid fa-user w-5"></i>
                        <span>Profil Saya</span>
                    </a>

                    <!-- Menu Laporan -->
                    <a href="#" class="flex items-center space-x-3 text-gray-400 hover:bg-gray-800 hover:text-white px-4 py-3 rounded-lg transition">
                        <i class="fa-solid fa-chart-pie w-5"></i>
                        <span>Laporan</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button -->
            <div class="p-4 border-t border-gray-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center space-x-2 bg-red-600/20 hover:bg-red-600 text-red-400 hover:text-white py-2 rounded-lg transition text-sm font-semibold">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-y-auto">

            <!-- Navbar Top -->
            <header class="h-16 bg-[#212529] border-b border-gray-800 flex items-center justify-between px-6">
                <div class="flex items-center space-x-4">
                    <button class="text-gray-400 hover:text-white"><i class="fa-solid fa-bars text-lg"></i></button>
                    <span class="text-sm font-semibold text-gray-300">Live Preview</span>
                </div>

                <!-- User Profile Dynamic -->
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm uppercase">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <span class="text-sm font-medium text-gray-200">
                        {{ Auth::user()->name ?? 'Alexander Pierce' }}
                    </span>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6 space-y-6">

                <!-- Title & Breadcrumb -->
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-white">Dashboard</h1>
                    <div class="text-xs text-gray-400">Home / <span class="text-gray-200">Dashboard</span></div>
                </div>

                <!-- 4 Colored Info Boxes -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- New Orders -->
                    <div class="bg-blue-600 rounded-lg p-4 text-white relative overflow-hidden shadow-lg">
                        <div class="text-3xl font-bold">150</div>
                        <div class="text-sm font-medium mt-1">New Orders</div>
                        <i class="fa-solid fa-cart-shopping absolute right-3 bottom-8 text-5xl opacity-20"></i>
                        <a href="#" class="block text-xs text-center bg-black/20 hover:bg-black/30 py-1.5 mt-4 -mx-4 -mb-4 transition">More info <i class="fa-solid fa-circle-arrow-right ml-1"></i></a>
                    </div>

                    <!-- Bounce Rate -->
                    <div class="bg-emerald-600 rounded-lg p-4 text-white relative overflow-hidden shadow-lg">
                        <div class="text-3xl font-bold">53<span class="text-xl">%</span></div>
                        <div class="text-sm font-medium mt-1">Bounce Rate</div>
                        <i class="fa-solid fa-chart-simple absolute right-3 bottom-8 text-5xl opacity-20"></i>
                        <a href="#" class="block text-xs text-center bg-black/20 hover:bg-black/30 py-1.5 mt-4 -mx-4 -mb-4 transition">More info <i class="fa-solid fa-circle-arrow-right ml-1"></i></a>
                    </div>

                    <!-- User Registrations -->
                    <div class="bg-amber-500 rounded-lg p-4 text-white relative overflow-hidden shadow-lg">
                        <div class="text-3xl font-bold">44</div>
                        <div class="text-sm font-medium mt-1">User Registrations</div>
                        <i class="fa-solid fa-user-plus absolute right-3 bottom-8 text-5xl opacity-20"></i>
                        <a href="{{ route('users.index') }}" class="block text-xs text-center bg-black/20 hover:bg-black/30 py-1.5 mt-4 -mx-4 -mb-4 transition">More info <i class="fa-solid fa-circle-arrow-right ml-1"></i></a>
                    </div>

                    <!-- Unique Visitors -->
                    <div class="bg-rose-600 rounded-lg p-4 text-white relative overflow-hidden shadow-lg">
                        <div class="text-3xl font-bold">65</div>
                        <div class="text-sm font-medium mt-1">Unique Visitors</div>
                        <i class="fa-solid fa-chart-pie absolute right-3 bottom-8 text-5xl opacity-20"></i>
                        <a href="#" class="block text-xs text-center bg-black/20 hover:bg-black/30 py-1.5 mt-4 -mx-4 -mb-4 transition">More info <i class="fa-solid fa-circle-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <!-- Sales Value Chart -->
                <div class="bg-[#212529] border border-gray-800 rounded-lg p-5 shadow-lg">
                    <h3 class="text-base font-semibold text-gray-200 mb-4">Sales Value</h3>
                    <div class="h-64">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Chart Script -->
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan 23', 'Feb 23', 'Mar 23', 'Apr 23', 'May 23', 'Jun 23'],
                datasets: [
                    {
                        label: 'Sales',
                        data: [65, 58, 80, 81, 56, 88],
                        borderColor: '#10b981',
                        borderWidth: 3,
                        tension: 0.4,
                        fill: false
                    },
                    {
                        label: 'Target',
                        data: [40, 60, 45, 20, 85, 55],
                        borderColor: '#3b82f6',
                        borderWidth: 3,
                        tension: 0.4,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { color: '#2d3238' }, ticks: { color: '#9ca3af' } },
                    y: { grid: { color: '#2d3238' }, ticks: { color: '#9ca3af' } }
                }
            }
        });
    </script>
</body>
</html>