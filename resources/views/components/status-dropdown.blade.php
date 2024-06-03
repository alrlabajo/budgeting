<div>
    <div class="relative inline-block text-left">
        <!-- Dropdown Button -->
        <button id="dropdownButton" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span id="selectedStatus">Status</span>
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06 0L10 10.94l3.71-3.73a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 010-1.06z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="dropdownMenu" class="hidden origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                <!-- Pending Status -->
                <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-status="Pending" data-bg-color="bg-yellow-100" data-text-color="text-yellow-800" data-dark-bg-color="dark:bg-yellow-900" data-dark-text-color="dark:text-yellow-300" role="menuitem">
                    Pending
                </a>
                <!-- Approved Status -->
                <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-status="Approved" data-bg-color="bg-green-100" data-text-color="text-green-800" data-dark-bg-color="dark:bg-green-900" data-dark-text-color="dark:text-green-300" role="menuitem">
                    Approved
                </a>
                <!-- Rejected Status -->
                <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" data-status="Rejected" data-bg-color="bg-red-100" data-text-color="text-red-800" data-dark-bg-color="dark:bg-red-900" data-dark-text-color="dark:text-red-300" role="menuitem">
                    Rejected
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript to Toggle Dropdown Menu and Update Selected Status -->
    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default anchor behavior

                // Get status and colors
                var selectedStatus = this.getAttribute('data-status');
                var bgColor = this.getAttribute('data-bg-color');
                var textColor = this.getAttribute('data-text-color');
                var darkBgColor = this.getAttribute('data-dark-bg-color');
                var darkTextColor = this.getAttribute('data-dark-text-color');

                var statusSpan = document.getElementById('selectedStatus');

                // Update the button text and styles
                statusSpan.textContent = selectedStatus;
                statusSpan.className = `inline-flex items-center ${bgColor} ${textColor} text-sm font-medium px-2.5 py-0.5 rounded-full ${darkBgColor} ${darkTextColor}`;

                // Hide the dropdown menu
                document.getElementById('dropdownMenu').classList.add('hidden');
            });
        });
    </script>

</div>