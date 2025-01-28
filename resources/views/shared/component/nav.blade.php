<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200" style="background-color: #F3F4F6">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 px-4">
        <!-- Left side - Drawer Toggle Button -->
        <button type="button"
            class="inline-flex items-center p-1.5 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            data-drawer-target="drawer-navigation"
            data-drawer-toggle="drawer-navigation"
            aria-controls="drawer-navigation">
            <svg class="w-8 h-8 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
        </button>

        <!-- Right side - User Profile and Get Started -->
        <div class="flex items-center md:order-2">
            <!-- User Profile -->
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-medium text-gray-600">Testing</span>
            </div>
        </div>
    </div>
</nav>
@include('shared.component.drawer-nav')
