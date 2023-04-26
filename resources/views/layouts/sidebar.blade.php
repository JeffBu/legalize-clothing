<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:translate-x-0  bg-main-500  border-gray-600" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-main-500">
        <ul class="space-y-2 font-medium">
            <li class="">
                <a href="{{route('dashboard')}}" class="flex items-center p-2 rounded-lg  text-white   hover:bg-alter-700 active:bg-alter-500 @if(Route::current()->getName() == 'dashboard' || Route::current()->getName() == '') bg-alter-500 @endif">
                <svg aria-hidden="true" class="w-6 h-6  transition duration-75  text-gray-200 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <!-- <li>
                <a href="#" class="flex items-center p-2 rounded-lg  text-white hover:bg-alter-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75  text-gray-200  group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-mediumrounded-full  bg-alter-700  text-gray-300">Pro</span>
                </a>
            </li> -->
            <li>
                <a href="#" class="flex items-center p-2 rounded-lg  text-white hover:bg-alter-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75  text-gray-200  group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="{{route('products')}}" class="flex items-center p-2 rounded-lg  text-white hover:bg-alter-700 @if(Route::current()->getName() == 'products') bg-alter-500 @endif">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75  text-gray-200 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                </a>
            </li>
            
            <li>
                <a href="{{route('products')}}" class="flex items-center align-middle p-2 rounded-lg  text-white hover:bg-alter-700 @if(Route::current()->getName() == 'orders') bg-alter-500 @endif">
                <i aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75  text-gray-200 group-hover:text-white fas fa-list"></i>
                <span class="flex-1 ml-3 whitespace-nowrap">Orders</span>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}" class="flex items-center p-2 rounded-lg  text-white hover:bg-alter-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75  text-gray-200 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                </a>
            </li>
        </ul>


    </div>
    </aside>