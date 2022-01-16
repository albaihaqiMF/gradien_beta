<!-- BEGIN: Top Bar -->
<div class="px-3 mb-12 -mx-3 border-b top-bar-boxed border-theme-2 -mt-7 md:-mt-5 sm:-mx-8 sm:px-8 md:pt-0">
    <div class="flex items-center h-full">
        <!-- BEGIN: Logo -->
        <a href="" class="hidden -intro-x md:flex">
            <img alt="Gradien.co Tailwind HTML Admin Template" class="w-8 h-8" src="/images/gradien/logo.png">
            <span class="ml-3 text-lg text-white"> Gra<span class="font-medium text-theme-15">dien.co</span> </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <div class="mr-auto -intro-x breadcrumb"> <a href="">Application</a> <i data-feather="chevron-right"
                class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
        <!-- END: Breadcrumb -->
        @livewire('component.search')
        <!-- BEGIN: Notifications -->
        <div class="mr-4 intro-x dropdown sm:mr-6">
            <div class="cursor-pointer dropdown-toggle notification notification--bullet" role="button"
                aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
            </div>
            <div class="pt-2 notification-content dropdown-menu">
                <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                    <div class="notification-content__title">Notifications</div>
                    <div class="relative flex items-center cursor-pointer ">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Gradien.co Tailwind HTML Admin Template" class="rounded-full"
                                src="/images/profile-6.jpg">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-10">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Denzel Washington</a>
                                <div class="ml-auto text-xs text-gray-500 whitespace-nowrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">There are many variations of passages
                                of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Gradien.co Tailwind HTML Admin Template" class="rounded-full"
                                src="/images/profile-5.jpg">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-10">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Johnny Depp</a>
                                <div class="ml-auto text-xs text-gray-500 whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Gradien.co Tailwind HTML Admin Template" class="rounded-full"
                                src="/images/profile-1.jpg">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-10">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Brad Pitt</a>
                                <div class="ml-auto text-xs text-gray-500 whitespace-nowrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of
                                the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                                standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Gradien.co Tailwind HTML Admin Template" class="rounded-full"
                                src="/images/profile-5.jpg">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-10">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Johnny Depp</a>
                                <div class="ml-auto text-xs text-gray-500 whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">Contrary to popular belief, Lorem
                                Ipsum is not simply random text. It has roots in a piece of classical Latin
                                literature from 45 BC, making it over 20</div>
                        </div>
                    </div>
                    <div class="relative flex items-center mt-5 cursor-pointer">
                        <div class="flex-none w-12 h-12 mr-1 image-fit">
                            <img alt="Gradien.co Tailwind HTML Admin Template" class="rounded-full"
                                src="/images/profile-9.jpg">
                            <div
                                class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-theme-10">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="mr-5 font-medium truncate">Leonardo DiCaprio</a>
                                <div class="ml-auto text-xs text-gray-500 whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of
                                the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s
                                standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="w-8 h-8 intro-x dropdown">
            <div class="w-8 h-8 overflow-hidden scale-110 rounded-full shadow-lg dropdown-toggle image-fit zoom-in"
                role="button" aria-expanded="false">
                <img alt="Gradien.co Tailwind HTML Admin Template" src="/images/profile-2.jpg">
            </div>
            <div class="w-56 dropdown-menu">
                <div class="text-white dropdown-menu__content box bg-theme-11 dark:bg-dark-6">
                    <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                        <div class="font-medium">Denzel Washington</div>
                        <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">DevOps Engineer</div>
                    </div>
                    <div class="p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                            <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                    </div>
                    <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();"
                                class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-theme-1 dark:hover:bg-dark-3">
                                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->
