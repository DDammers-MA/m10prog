
        <div class="flex justify-between items-center">
            <div>
            
                <img src="your-logo.png" alt="Logo" class="h-8 w-auto">
            </div>
            <nav class="my-5">
              
                <ul class="flex">
                    <li><a href="{{ route('welcome') }}" class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'welcome') bg-lime-400   @else bg-lightblue @endif text-black">Home</a></li>

                    <li><a href="{{ route('about') }}" class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'about') bg-lime-400  @else bg-lightblue @endif text-black">About</a></li>

                    <li><a href="{{ route('contact') }}" class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'contact') bg-lime-400 @else  bg-lightblue @endif text-black">Contact</a></li>

                    <li><a href="{{ route('project') }}" class="mr-3 px-4 py-2 @if(Route::currentRouteName() == 'project') bg-lime-400 @else  bg-lightblue @endif text-black">projects</a></li>
                    

                </ul>
            </nav>
        </div>
