<x-backpage>
    <div class="w-full mt-5">
        <p class="text-xl pb-4 flex items-center">
            Dashboard
        </p>
        {{-- <div class="bg-white overflow-auto">
            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    <div class="flex flex-wrap mt-6">
                        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-plus mr-3"></i> Monthly Reports
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartOne" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-check mr-3"></i> Resolved Reports
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartTwo" width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div> --}}

        <div class="mx-auto m-8 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
            <!--  Monthly card start  -->
            <div class="pl-1 w-96 h-20 bg-yellow-400 rounded-lg shadow-md">
                <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                    <div class="my-auto">
                        <p class="uppercase font-bold">Current Time</p>
                        <div class="clock">
                            <div id="Date"></div>
                            <ul>
                                <li class="inline" id="hours"></li>
                                <li class="inline" id="point">:</li>
                                <li class="inline" id="min"></li>
                                <li class="inline" id="point">:</li>
                                <li class="inline" id="sec"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="my-auto">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
            <div class="pl-1 w-96 h-20 bg-green-400 rounded-lg shadow-md">
                <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                    <div class="my-auto">
                        <p class="font-bold">DOCTOR LIST</p>
                        <p class="text-lg">{{ $doctor }} Doctor</p>
                    </div>
                    <div class="my-auto">
                        <div class="my-auto">
                            <i class="fas fa-user-md"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Monthly card end  -->
            <!--  Annual card start -->
            <div class="pl-1 w-96 h-20 bg-blue-500 rounded-lg shadow-md">
                <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                    <div class="my-auto">
                        <p class="uppercase font-bold">Specialization</p>
                        <p class="text-lg"> {{ $sp }} Specialization</p>
                    </div>
                    <div class="my-auto">
                        <div class="my-auto">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Annual card end  -->
            <!--  Tasks card start  -->
            <div class="pl-1 w-96 h-20 bg-purple-500 rounded-lg shadow-md">
                <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                    <div class="my-auto">
                        <p class=" uppercase font-bold">Medicine</p>
                        <p class="text-lg">{{ $med }} Medicine</p>
                    </div>
                    <div class="my-auto">
                        <div class="my-auto">
                            <i class="fas fa-pills"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Tasks card end  -->
            <!--  Pending requests card start  -->
            <div class="pl-1 w-96 h-20 bg-yellow-400 rounded-lg shadow-md">
                <div class="flex w-full h-full py-2 px-4 bg-white rounded-lg justify-between">
                    <div class="my-auto">
                        <p class="uppercase font-bold">Form</p>
                        <p class="text-lg">{{ $form }} Form</p>
                    </div>
                    <div class="my-auto">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>
            <!--  Pending requests card end  -->
        </div>
        <script>
            $(document).ready(function() {
                var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                    "October", "November", "December"
                ];
                var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

                var newDate = new Date();
                newDate.setDate(newDate.getDate());  
                $('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate
                    .getMonth()] + ' ' + newDate.getFullYear());

                setInterval(function() {
                    var seconds = new Date().getSeconds();
                    $("#sec").html((seconds < 10 ? "0" : "") + seconds);
                }, 1000);

                setInterval(function() {
                    var minutes = new Date().getMinutes();
                    $("#min").html((minutes < 10 ? "0" : "") + minutes);
                }, 1000);

                setInterval(function() {
                    var hours = new Date().getHours();
                    $("#hours").html((hours < 10 ? "0" : "") + hours);
                }, 1000);

            });
        </script>


        {{-- <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script> --}}
</x-backpage>
