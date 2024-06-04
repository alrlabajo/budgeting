<div>
    <!--Top Navigation-->
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between w-16 h-18">
                <!-- Logo -->
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="/chart" class="flex ms-2 md:me-24">
                        <img src="{{ asset('css/images/image 5.png') }}" class="w-20 h-20" alt="PLM Logo" />
                        <span class="flex items-center w-80 text-indigo-800 text-2xl font-extrabold font-['Inter'] ml-3 leading-10">PLM Budget System</span>
                    </a>
                </div>

                <!--Search Bar--> <!-- NEED FUNCTIONALITY -->
                <div class="hidden sm:flex items-left ml-[-20px]">
                    <div class="relative">
                        <svg class="absolute left-5 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none" aria-hidden="true">
                            <path d="M20.3778 22.6405L14.6174 16.8801M16.5376 12.0798C16.5376 12.9624 16.3637 13.8362 16.026 14.6516C15.6883 15.467 15.1932 16.2078 14.5692 16.8319C13.9451 17.4559 13.2043 17.951 12.3889 18.2887C11.5736 18.6264 10.6997 18.8002 9.81712 18.8002C8.93458 18.8002 8.06068 18.6264 7.24532 18.2887C6.42996 17.951 5.6891 17.4559 5.06505 16.8319C4.441 16.2078 3.94598 15.467 3.60824 14.6516C3.27051 13.8362 3.09668 12.9624 3.09668 12.0798C3.09668 10.2974 3.80472 8.58807 5.06505 7.32774C6.32538 6.06742 8.03475 5.35938 9.81712 5.35938C11.5995 5.35937 13.3089 6.06742 14.5692 7.32774C15.8295 8.58807 16.5376 10.2974 16.5376 12.0798Z" stroke="#434343" stroke-width="1.92012" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="search" id="search-bar" class="w-[950px] h-12 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 text-base font-normal font-nunito leading-normal ml-2 border-transparent" placeholder="Search here" />
                    </div>
                </div>

                <!-- User Info -->
                <div x-data="{ open: false }" class="sm:relative sm:ml-[70px] sm:items-center justify-end sm:focus:ring-4 sm:focus:outline-none sm:focus:ring-gray-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 30 30" fill="none">
                            <path d="M19.8797 9.04991C19.8797 11.7082 17.7247 13.8632 15.0664 13.8632C12.4081 13.8632 10.2531 11.7082 10.2531 9.04991C10.2531 6.39157 12.4081 4.23657 15.0664 4.23657C17.7247 4.23657 19.8797 6.39157 19.8797 9.04991Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.0664 17.4732C10.4143 17.4732 6.64307 21.2445 6.64307 25.8966H23.4897C23.4897 21.2445 19.7185 17.4732 15.0664 17.4732Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="mx-1 rounded-lg justify-end items-center gap-1 flex">
                            <button x-on:click="open = !open" class="text-slate-600 text-base font-normal font-['Inter'] leading-9">User</button>
                            <div class="w-3 h-2 relative mx-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                    <g clip-path="url(#clip0_4528_3236)">
                                        <path d="M10.5055 0.742463C10.9754 0.272532 11.7373 0.272532 12.2073 0.742463C12.6772 1.21239 12.6772 1.9743 12.2073 2.44423L7.39392 7.25757C6.92399 7.7275 6.16208 7.7275 5.69215 7.25757L0.878815 2.44423C0.408885 1.9743 0.408885 1.21239 0.878815 0.742463C1.34875 0.272532 2.11065 0.272532 2.58059 0.742463L6.54303 4.70491L10.5055 0.742463Z" fill="#64748B" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4528_3236">
                                            <rect width="12.0333" height="7.22" fill="white" transform="translate(0.526367 0.390015)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown content -->
                    <div x-show="open" class="sm:absolute sm:right-0 sm:mt-1 sm:w-44 bg-white divide-y divide-gray-100 rounded-lg shadow" x-transition:enter="duration-300 ease-out" x-transition:enter-start="opacity-0 -translate-y-5 scale-90" x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                        <ul>
                            <li><a href="/settings" class="block px-4 py-2 hover:bg-gray-100 text-base font-normal font-['Inter'] leading-9">Settings</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 text-base font-normal font-['Inter'] leading-9">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Side Navigation-->
    <aside id="logo-sidebar" class="fixed top-6 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:" aria-label="Sidebar">
        <div class="h-full px-4 pb-4 overflow-y-auto bg-indigo-800 ">
            <!-- Label -->
            <div class="text-white text-2xl font-extrabold font-['Inter'] leading-10 my-10">Budgeting</div>
            <!-- Selections -->
            <ul class="space-y-1 font-medium w-78 h-10 flex-col top-5 justify-start items-start gap-1 inline-flex">
                <!-- Home -->
                <li>
                    <a href="/chart" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
                            <path d="M3.52881 13.896L5.72683 11.698M5.72683 11.698L13.4199 4.00488L21.113 11.698M5.72683 11.698V22.6881C5.72683 23.295 6.21887 23.7871 6.82584 23.7871H10.1229M21.113 11.698L23.311 13.896M21.113 11.698V22.6881C21.113 23.295 20.6209 23.7871 20.014 23.7871H16.7169M10.1229 23.7871C10.7298 23.7871 11.2219 23.295 11.2219 22.6881V18.292C11.2219 17.6851 11.7139 17.193 12.3209 17.193H14.5189C15.1259 17.193 15.6179 17.6851 15.6179 18.292V22.6881C15.6179 23.295 16.11 23.7871 16.7169 23.7871M10.1229 23.7871H16.7169" stroke="white" stroke-width="2.19802" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Home</span>
                    </a>
                </li>
                <!-- Budget Call -->
                <li>
                    <div class="self-stretch flex-col justify-start items-start flex">
                        <button type="button" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]" aria-controls="budget-call-dropdown" data-collapse-toggle="budget-call-dropdown">
                            <div class="grow shrink basis-0 h-7 justify-start items-center gap-2.5 flex">
                                <div class="w-7 h-7 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                        <path d="M4.87988 7.82561C4.87988 7.18732 5.13344 6.57518 5.58478 6.12384C6.03612 5.6725 6.64826 5.41895 7.28655 5.41895H9.69322C10.3315 5.41895 10.9436 5.6725 11.395 6.12384C11.8463 6.57518 12.0999 7.18732 12.0999 7.82561V10.2323C12.0999 10.8706 11.8463 11.4827 11.395 11.934C10.9436 12.3854 10.3315 12.6389 9.69322 12.6389H7.28655C6.64826 12.6389 6.03612 12.3854 5.58478 11.934C5.13344 11.4827 4.87988 10.8706 4.87988 10.2323V7.82561ZM16.9132 7.82561C16.9132 7.18732 17.1668 6.57518 17.6181 6.12384C18.0695 5.6725 18.6816 5.41895 19.3199 5.41895H21.7266C22.3648 5.41895 22.977 5.6725 23.4283 6.12384C23.8797 6.57518 24.1332 7.18732 24.1332 7.82561V10.2323C24.1332 10.8706 23.8797 11.4827 23.4283 11.934C22.977 12.3854 22.3648 12.6389 21.7266 12.6389H19.3199C18.6816 12.6389 18.0695 12.3854 17.6181 11.934C17.1668 11.4827 16.9132 10.8706 16.9132 10.2323V7.82561ZM4.87988 19.8589C4.87988 19.2207 5.13344 18.6085 5.58478 18.1572C6.03612 17.7058 6.64826 17.4523 7.28655 17.4523H9.69322C10.3315 17.4523 10.9436 17.7058 11.395 18.1572C11.8463 18.6085 12.0999 19.2207 12.0999 19.8589V22.2656C12.0999 22.9039 11.8463 23.516 11.395 23.9674C10.9436 24.4187 10.3315 24.6723 9.69322 24.6723H7.28655C6.64826 24.6723 6.03612 24.4187 5.58478 23.9674C5.13344 23.516 4.87988 22.9039 4.87988 22.2656V19.8589ZM16.9132 19.8589C16.9132 19.2207 17.1668 18.6085 17.6181 18.1572C18.0695 17.7058 18.6816 17.4523 19.3199 17.4523H21.7266C22.3648 17.4523 22.977 17.7058 23.4283 18.1572C23.8797 18.6085 24.1332 19.2207 24.1332 19.8589V22.2656C24.1332 22.9039 23.8797 23.516 23.4283 23.9674C22.977 24.4187 22.3648 24.6723 21.7266 24.6723H19.3199C18.6816 24.6723 18.0695 24.4187 17.6181 23.9674C17.1668 23.516 16.9132 22.9039 16.9132 22.2656V19.8589Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="text-white text-base font-normal font-['Nunito Sans'] leading-normal">Budget Call</span>
                            </div>
                            <div class="w-3 h-2 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                    <g clip-path="url(#clip0_4316_6370)">
                                        <path d="M10.879 0.787995C11.3489 0.318064 12.1109 0.318064 12.5808 0.787995C13.0507 1.25793 13.0507 2.01983 12.5808 2.48977L7.76745 7.3031C7.29752 7.77303 6.53562 7.77303 6.06568 7.3031L1.25235 2.48977C0.78242 2.01983 0.78242 1.25793 1.25235 0.787995C1.72228 0.318064 2.48419 0.318064 2.95412 0.787995L6.91657 4.75044L10.879 0.787995Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4316_6370">
                                            <rect width="12.0333" height="7.22" fill="white" transform="translate(0.899902 0.435547)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </button>
                        <!-- Budget Call Dropdown -->
                        <ul id="budget-call-dropdown" class="hidden ml-4 py-2 space-y-1">
                            <li>
                                <a href="/activity-justification" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">Activity Justification</span>
                                </a>
                            </li>
                            <li>
                                <a href="/personal-services" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">Personal Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="/personnel-schedule" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">Personnel Schedule</span>
                                </a>
                            </li>
                            <li>
                                <a href="/MOOE" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">MOOE</span>
                                </a>
                            </li>
                            <li>
                                <a href="/capital-outlay" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">Capital Outlay</span>
                                </a>
                            </li>
                            <li>
                                <a href="/PPMP" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-7 w-full">PPMP</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Payment Request -->
                <li>
                    <div class="self-stretch flex-col justify-start items-start flex">
                        <button type="button" id="payment-request-button" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]" aria-controls="payment-request-dropdown" data-collapse-toggle="payment-request-dropdown">
                            <div class="grow shrink basis-0 h-7 justify-start items-center gap-2.5 flex">
                                <div class="w-7 h-7 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                        <path d="M4.87988 7.82561C4.87988 7.18732 5.13344 6.57518 5.58478 6.12384C6.03612 5.6725 6.64826 5.41895 7.28655 5.41895H9.69322C10.3315 5.41895 10.9436 5.6725 11.395 6.12384C11.8463 6.57518 12.0999 7.18732 12.0999 7.82561V10.2323C12.0999 10.8706 11.8463 11.4827 11.395 11.934C10.9436 12.3854 10.3315 12.6389 9.69322 12.6389H7.28655C6.64826 12.6389 6.03612 12.3854 5.58478 11.934C5.13344 11.4827 4.87988 10.8706 4.87988 10.2323V7.82561ZM16.9132 7.82561C16.9132 7.18732 17.1668 6.57518 17.6181 6.12384C18.0695 5.6725 18.6816 5.41895 19.3199 5.41895H21.7266C22.3648 5.41895 22.977 5.6725 23.4283 6.12384C23.8797 6.57518 24.1332 7.18732 24.1332 7.82561V10.2323C24.1332 10.8706 23.8797 11.4827 23.4283 11.934C22.977 12.3854 22.3648 12.6389 21.7266 12.6389H19.3199C18.6816 12.6389 18.0695 12.3854 17.6181 11.934C17.1668 11.4827 16.9132 10.8706 16.9132 10.2323V7.82561ZM4.87988 19.8589C4.87988 19.2207 5.13344 18.6085 5.58478 18.1572C6.03612 17.7058 6.64826 17.4523 7.28655 17.4523H9.69322C10.3315 17.4523 10.9436 17.7058 11.395 18.1572C11.8463 18.6085 12.0999 19.2207 12.0999 19.8589V22.2656C12.0999 22.9039 11.8463 23.516 11.395 23.9674C10.9436 24.4187 10.3315 24.6723 9.69322 24.6723H7.28655C6.64826 24.6723 6.03612 24.4187 5.58478 23.9674C5.13344 23.516 4.87988 22.9039 4.87988 22.2656V19.8589ZM16.9132 19.8589C16.9132 19.2207 17.1668 18.6085 17.6181 18.1572C18.0695 17.7058 18.6816 17.4523 19.3199 17.4523H21.7266C22.3648 17.4523 22.977 17.7058 23.4283 18.1572C23.8797 18.6085 24.1332 19.2207 24.1332 19.8589V22.2656C24.1332 22.9039 23.8797 23.516 23.4283 23.9674C22.977 24.4187 22.3648 24.6723 21.7266 24.6723H19.3199C18.6816 24.6723 18.0695 24.4187 17.6181 23.9674C17.1668 23.516 16.9132 22.9039 16.9132 22.2656V19.8589Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span class="text-white text-base font-normal font-['Nunito Sans'] leading-normal">Payment Request</span>
                            </div>
                            <div class="w-3 h-2 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                    <g clip-path="url(#clip0_4316_6370)">
                                        <path d="M10.879 0.787995C11.3489 0.318064 12.1109 0.318064 12.5808 0.787995C13.0507 1.25793 13.0507 2.01983 12.5808 2.48977L7.76745 7.3031C7.29752 7.77303 6.53562 7.77303 6.06568 7.3031L1.25235 2.48977C0.78242 2.01983 0.78242 1.25793 1.25235 0.787995C1.72228 0.318064 2.48419 0.318064 2.95412 0.787995L6.91657 4.75044L10.879 0.787995Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4316_6370">
                                            <rect width="12.0333" height="7.22" fill="white" transform="translate(0.899902 0.435547)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </button>
                        <!-- Payment Request Dropdown -->
                        <ul id="payment-request-dropdown" class="hidden py-2 space-y-1">
                            <li>
                                <a href="/BUR" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-11 w-full">BUR</span>
                                </a>
                            </li>
                            <li>
                                <a href="/amendment" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                    <span class="px-11 w-full">Amendment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Appropriations -->
                <li>
                    <a href="/appropriations" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                            <path d="M4.87988 7.81878C4.87988 7.18049 5.13344 6.56834 5.58478 6.11701C6.03612 5.66567 6.64826 5.41211 7.28655 5.41211H9.69322C10.3315 5.41211 10.9436 5.66567 11.395 6.11701C11.8463 6.56834 12.0999 7.18049 12.0999 7.81878V10.2254C12.0999 10.8637 11.8463 11.4759 11.395 11.9272C10.9436 12.3786 10.3315 12.6321 9.69322 12.6321H7.28655C6.64826 12.6321 6.03612 12.3786 5.58478 11.9272C5.13344 11.4759 4.87988 10.8637 4.87988 10.2254V7.81878ZM16.9132 7.81878C16.9132 7.18049 17.1668 6.56834 17.6181 6.11701C18.0695 5.66567 18.6816 5.41211 19.3199 5.41211H21.7266C22.3648 5.41211 22.977 5.66567 23.4283 6.11701C23.8797 6.56834 24.1332 7.18049 24.1332 7.81878V10.2254C24.1332 10.8637 23.8797 11.4759 23.4283 11.9272C22.977 12.3786 22.3648 12.6321 21.7266 12.6321H19.3199C18.6816 12.6321 18.0695 12.3786 17.6181 11.9272C17.1668 11.4759 16.9132 10.8637 16.9132 10.2254V7.81878ZM4.87988 19.8521C4.87988 19.2138 5.13344 18.6017 5.58478 18.1503C6.03612 17.699 6.64826 17.4454 7.28655 17.4454H9.69322C10.3315 17.4454 10.9436 17.699 11.395 18.1503C11.8463 18.6017 12.0999 19.2138 12.0999 19.8521V22.2588C12.0999 22.8971 11.8463 23.5092 11.395 23.9605C10.9436 24.4119 10.3315 24.6654 9.69322 24.6654H7.28655C6.64826 24.6654 6.03612 24.4119 5.58478 23.9605C5.13344 23.5092 4.87988 22.8971 4.87988 22.2588V19.8521ZM16.9132 19.8521C16.9132 19.2138 17.1668 18.6017 17.6181 18.1503C18.0695 17.699 18.6816 17.4454 19.3199 17.4454H21.7266C22.3648 17.4454 22.977 17.699 23.4283 18.1503C23.8797 18.6017 24.1332 19.2138 24.1332 19.8521V22.2588C24.1332 22.8971 23.8797 23.5092 23.4283 23.9605C22.977 24.4119 22.3648 24.6654 21.7266 24.6654H19.3199C18.6816 24.6654 18.0695 24.4119 17.6181 23.9605C17.1668 23.5092 16.9132 22.8971 16.9132 22.2588V19.8521Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Appropriations</span>
                    </a>
                </li>
                <!--Generate Budget Report-->
                <li>

                    <a href="/generate-pdf" class="w-56 mt-64 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M17.4733 3.2793V10.4993H24.6933M15.0666 22.5326V15.3126M15.0666 22.5326L11.4566 18.9226M15.0666 22.5326L18.6766 18.9226M18.0749 3.2793H7.84661C7.20832 3.2793 6.59618 3.53286 6.14484 3.98419C5.6935 4.43553 5.43994 5.04768 5.43994 5.68596V24.9393C5.43994 25.5776 5.6935 26.1897 6.14484 26.6411C6.59618 27.0924 7.20832 27.346 7.84661 27.346H22.2866C22.9249 27.346 23.537 27.0924 23.9884 26.6411C24.4397 26.1897 24.6933 25.5776 24.6933 24.9393V9.89763L18.0749 3.2793Z" stroke="#E4E4E7" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex-1 ms-3 text-white text-normal font-normal font-['Nunito Sans'] leading-normal">Generate Budget Report</span>
                    </a>
                </li>
                <!-- Settings -->
                <li>
                    <a href="/settings" class="flex-w-50 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M13.0503 6.06856C13.5634 3.95501 16.5693 3.95501 17.0824 6.06856C17.4138 7.43389 18.9781 8.08182 20.1779 7.35076C22.0352 6.21907 24.1607 8.34454 23.029 10.2019C22.2979 11.4017 22.9458 12.9659 24.3112 13.2974C26.4247 13.8105 26.4247 16.8163 24.3112 17.3294C22.9458 17.6609 22.2979 19.2251 23.029 20.4249C24.1607 22.2823 22.0352 24.4077 20.1779 23.276C18.9781 22.545 17.4138 23.1929 17.0824 24.5582C16.5693 26.6718 13.5634 26.6718 13.0503 24.5582C12.7188 23.1929 11.1546 22.545 9.95479 23.276C8.09747 24.4077 5.972 22.2823 7.10369 20.4249C7.83475 19.2251 7.18682 17.6609 5.82149 17.3294C3.70794 16.8163 3.70794 13.8105 5.82149 13.2974C7.18682 12.9659 7.83475 11.4017 7.10369 10.2019C5.972 8.34454 8.09747 6.21907 9.95479 7.35076C11.1546 8.08182 12.7188 7.43389 13.0503 6.06856Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.6763 15.3134C18.6763 17.3071 17.0601 18.9234 15.0663 18.9234C13.0726 18.9234 11.4563 17.3071 11.4563 15.3134C11.4563 13.3197 13.0726 11.7034 15.0663 11.7034C17.0601 11.7034 18.6763 13.3197 18.6763 15.3134Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="flex items-bot ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="sm:ml-64">
        <div class="rounded-lg">
        </div>
    </div>
</div>