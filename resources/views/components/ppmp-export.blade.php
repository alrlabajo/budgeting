<div class="flex flex-row grow justify-end gap-2">

    <select wire:model.live="college" id="college_office" name="college_office" class="font-['Inter'] block w-80 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
        <option value="">Select College/Office</option>
        {{-- <option value="CISTM">CISTM</option>
            <option value="CEng">CEng</option> --}}

        @foreach ($college_office as $college)
        <option value="{{$college}}">{{$college}}</option>
        @endforeach
    </select>

    <select id="school_year" name="school_year" class="font-['Inter'] block w-28 h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="text-indent: 10px;">
        <option disabled selected>Year</option>
        <option value="College 1">2023</option>
        <option value="College 2">2022</option>
        <option value="">...</option>
    </select>

    <!-- Export Modal toggle -->
    <button data-modal-target="export-modal" data-modal-toggle="export-modal" class="font-['Inter'] w-20 h-10 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex text-indigo-800 text-sm font-semibold font-inter leading-tight" type="button">Export</button>

    <!-- Export modal -->
    <div id="export-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-zinc-950 text-xl font-semibold font-inter leading-7">
                        Export data as CSV
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="export-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex justify-center">
                        <input type="text" id="filename-input" class="w-full h-11 rounded-lg border border-zinc-200 text-black text-base font-light font-['Inter'] leading-normal" placeholder="Enter filename (without extension)">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex gap-x-2 justify-end p-4">
                    <button data-modal-hide="export-modal" type="button" class="w-24 h-11 px-5 py-2.5 bg-white rounded-lg shadow border border-zinc-200 justify-center items-center inline-flex">
                        <div class="text-zinc-950 text-base font-medium font-inter leading-normal">Cancel</div>
                    </button>
                    <button onclick="exportToCsv()" class="w-24 h-11 px-5 py-2.5 bg-indigo-800 rounded-lg shadow justify-center items-center gap-2.5 inline-flex">
                        <div class="text-white text-base font-bold font-inter leading-normal">Export</div>
                    </button>
                </div>

            </div>

        </div>
    </div>


    <!--Export Script-->
    <script>
        function exportToCsv() {
            var filename = document.getElementById("filename-input").value + ".csv";
            var csv = [];

            // Get table headers
            var headers = [];
            var headerCells = document.querySelectorAll("#p-p-m-p-table th");
            for (var i = 0; i < headerCells.length; i++) {
                headers.push(headerCells[i].innerText.trim());
            }
            csv.push(headers.join(","));

            // Get table rows
            var rows = document.querySelectorAll("#p-p-p-m-table tbody tr");
            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td");

                for (var j = 0; j < cols.length; j++) {
                    // Trim the text content and replace new lines or multiple spaces
                    var cellText = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, "").replace(/\s+/g, " ").trim();
                    // Ensure that cell content with commas is enclosed in quotes
                    if (cellText.indexOf(",") >= 0) {
                        cellText = '"' + cellText + '"';
                    }
                    row.push(cellText);
                }

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCsv(csv.join("\n"), filename);
        }

        function downloadCsv(csv, filename) {
            var csvFile;
            var downloadLink;

            csvFile = new Blob([csv], {
                type: "text/csv"
            });
            downloadLink = document.createElement("a");
            downloadLink.download = filename;
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);

            downloadLink.click();
        }
    </script>

</div>