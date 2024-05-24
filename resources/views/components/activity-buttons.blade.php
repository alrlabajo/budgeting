<div class="flex flex-row grow justify-end gap-x-2 my-[1px]">

    <!-- Progress -->
    <select id="school-year" name="schoolYear" class="text-black text-sm font-normal font-inter leading-tight w-24 h-10 pl-2 py-1 bg-white rounded-lg border border-zinc-300 justify-start items-center gap-3 inline-flex">
        <option disabled selected>Year</option>
        <option value="progress-approved">2023</option>
        <option value="progress-pending">2022</option>
        <option value="progress-rejected">2021</option>
    </select>

    <!-- Import Modal toggle -->
    <button data-modal-target="import-modal" data-modal-toggle="import-modal" class="w-20 h-10 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex text-indigo-800 text-sm font-semibold font-['Inter'] leading-tight" type="button">Import</button>

    <!-- Import modal -->
    <div id="import-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-zinc-950 text-xl font-semibold font-['Inter'] leading-7">
                        Import data by CSV
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="import-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <span class="text-black text-base font-normal font-['Inter'] leading-tight">Click to Add file</span>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex items-center justify-between p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <a href="#" class="text-indigo-800 text-base font-normal font-inter underline leading-normal">Download sample CSV</a>
                    <div class="flex gap-x-2">
                        <button data-modal-hide="import-modal" type="button" class="w-24 h-11 px-5 py-2.5 bg-white rounded-lg shadow border border-zinc-200 justify-center items-center inline-flex">
                            <div class="text-zinc-950 text-base font-medium font-inter leading-normal">Cancel</div>
                        </button>
                        <button data-modal-hide="import-modal" class="w-24 h-11 px-5 py-2.5 bg-indigo-800 rounded-lg shadow justify-center items-center gap-2.5 inline-flex">
                            <div class="text-white text-base font-bold font-['Inter'] leading-normal">Upload</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Export Modal toggle -->
    <button data-modal-target="export-modal" data-modal-toggle="export-modal" class="w-20 h-10 px-4 bg-indigo-50 rounded-lg shadow border border-indigo-50 justify-center items-center gap-2 inline-flex text-indigo-800 text-sm font-semibold font-inter leading-tight" type="button">Export</button>

    <!-- Export modal -->
    <div id="export-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-zinc-950 text-xl font-semibold font-inter leading-7">
                        Export data as CSV
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="export-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
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
            var rows = document.querySelectorAll("#myTable tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [];
                var cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++) {
                    row.push(processCell(cols[j]));
                }

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCsv(csv.join("\n"), filename);
        }

        function processCell(cell) {
            // Check if the cell contains a nested table
            var nestedTable = cell.querySelector("table");
            if (nestedTable) {
                return exportNestedTable(nestedTable);
            } else {
                // Trim the text content and replace new lines or multiple spaces
                var cellText = cell.innerText.replace(/(\r\n|\n|\r)/gm, "").replace(/\s+/g, " ").trim();
                // Ensure that cell content with commas is enclosed in quotes
                if (cellText.indexOf(",") >= 0) {
                    cellText = '"' + cellText + '"';
                }
                return cellText;
            }
        }

        function exportNestedTable(table) {
            var nestedCsv = [];
            var rows = table.querySelectorAll("tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [];
                var cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++) {
                    row.push(processCell(cols[j]));
                }

                nestedCsv.push(row.join(","));
            }

            // Return the nested table as a single string
            return '"' + nestedCsv.join("\n").replace(/"/g, '""') + '"';
        }

        function downloadCsv(csv, filename) {
            var csvFile;
            var downloadLink;

            csvFile = new Blob([csv], { type: "text/csv" });
            downloadLink = document.createElement("a");
            downloadLink.download = filename;
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);

            downloadLink.click();
        }
    </script>

    <!-- Add Form -->
    <div class="justify-start items-start inline-flex">
        <a href="/activity-justification-form" class="w-28 h-10 px-4 bg-indigo-800 rounded-lg shadow justify-center items-center gap-2 flex">
            <span class="text-white text-base font-bold font-['Inter'] leading-tight">Add Form</span>
        </a>
    </div>

</div>
