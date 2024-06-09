<div>
    <button wire:click.prevent="goBack" id="backButton" class="w-30 h-10 px-4 py-2 bg-gray-500 rounded-md shadow justify-center items-center text-white text-base font-medium font-['Inter'] leading-tight">Back</button>

    <script>
        document.getElementById("backButton").addEventListener("click", function() {
            window.history.back();
        });
    </script>

</div>
