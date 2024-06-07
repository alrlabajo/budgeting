<x-slot name="title">Settings</x-slot>
    <div class="p-2 sm:ml-64">
        <div class="p-2">
            <!-- User Image -->
            <div x-data="{ userImage: null }" class="relative z-10 w-[170px] h-[170px] ml-12 mt-10 bg-gray-300 rounded-full overflow-hidden">
                <label for="userImageInput" class="cursor-pointer block w-full h-full">
                    <img :src="getUserImage()" alt="User Image" class="w-full h-full object-cover">
                    <input type="file" id="userImageInput" accept="image/*" class="hidden" @change="saveUserImage($event)">
                    <img x-show="userImage" :src="userImage" style="max-width: 200px; max-height: 200px;">
                </label>
            </div>

            <script>
                function saveImageToLocalStorage(imageData) {
                    localStorage.setItem('userImage', imageData);
                }

                function getImageFromLocalStorage() {
                    return localStorage.getItem('userImage');
                }


                document.addEventListener('DOMContentLoaded', function() {
                    if (localStorage.getItem('userImage')) {
                        window.userImage = localStorage.getItem('userImage');
                    }
                });

                function saveUserImage(event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    reader.onload = () => {
                        const imageData = reader.result;
                        this.userImage = imageData;
                        saveImageToLocalStorage(imageData); // Save to localStorage
                    };
                    reader.readAsDataURL(file);
                }

                function getUserImage() {
                    return this.userImage || getImageFromLocalStorage() || 'placeholder.jpg';
                }
            </script>

            <!-- Top Cover -->
            <div class="relative w-[1472px] h-44 border-opacity-20 bg-cover bg-center mt-[-280px] " style="background-image: url('css/images/image 3.png'); z-index: 1;">
                <div class="absolute inset-0 rounded-lg"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-top text-left mt-8">
                </div>
            </div>

            <!-- User Info --> <!-- NEED FUNCTIONALITY -->
            <div class="flex items-center w-[500px] h-[70px] ml-56 mt-[20px]">
                <div>
                    {{-- <h1 class="flex items-top justify-left text-[35px] font-extrabold ml-9">{{ Auth::user()->name }}</h1> --}}
                    <h2 class="flex items-top justify-left text-[20px] ml-9">Budget Office Head</h2>
                </div>
            </div>

            <!-- Activity Justification Document -->
            <div class="flex items-center w-[500px] h-[70px] ml-32 mt-[65px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Activity Justification Document</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Personal Services -->
            <div class="flex items-center w-[500px] h-[70px] ml-32 mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Personal Services</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Personnel Schedule -->
            <div class="flex items-center w-[500px] h-[70px] ml-32 mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Personnel Schedule</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Maintenance and Other Operating Expenses -->
            <div class="flex items-center w-[540px] h-[70px] ml-32 mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Maintenance and Other Operating Expenses</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Capital Outlay -->
            <div class="flex items-center w-[550px] h-[70px] ml-32 mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Capital Outlay</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Reminder -->
            <div class="flex items-center w-[500px] h-[40px] ml-32 mt-[30px]">
                <div>
                    <h1 class="flex items-top justify-left text-[10px] ml-9">To change your access system, contact ICTO.</h1>
                </div>
            </div>

            <!-- Project Procurement Manangement Plan -->
            <div class="flex items-center w-[550px] h-[70px] ml-[700px] mt-[-464px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Project Procurement Manangement Plan</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Status of Appropriations -->
            <div class="flex items-center w-[550px] h-[70px] ml-[700px] mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Status of Appropriations</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

            <!-- Budget Utilization Request -->
            <div class="flex items-center w-[550px] h-[70px] ml-[700px] mt-[10px]">
                <div>
                    <h1 class="flex items-top justify-left text-[25px] font-bold ml-9">Budget Utilization Request</h1>
                    <!-- NEED FUNCTIONALITY -->
                    <h2 class="flex items-top justify-left text-[15px] ml-9">Access: Can edit</h2>
                </div>
            </div>

        </div>
    </div>

