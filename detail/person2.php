<!DOCTYPE html>

<head>
    <title>Crime Detector</title>
    <link href="person.css" rel="stylesheet" type="text/css" />



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Place', 'Crime frequency'],
                ['Triveni Sangam', 4],
                ['Anand Bhavan', 8],
                ['Hanuman Mandir', 9],
                ['Chandrashekhar Azad Park', 7],
                ['Khusro Bagh', 7]
            ]);

            var options = {
                title: 'Active regions of crime'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</head>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>


<div class="student-profile py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="../image/2.jpeg" alt="student dp">
                        <h3>John Eric</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0"><strong class="pr-1">Identification Number:</strong>321365001</p>
                        <p class="mb-0"><strong class="pr-1">Crime:</strong>Thief</p>
                        <p class="mb-0"><strong class="pr-1">Place:</strong>Allahabad</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Last Crime Date</th>
                                <td width="2%">:</td>
                                <td>12 Augest 2016</td>
                            </tr>
                            <tr>
                                <th width="30%">Duration of Imprisoned </th>
                                <td width="2%">:</td>
                                <td>5 Years</td>
                            </tr>
                            <tr>
                                <th width="30%">Gender</th>
                                <td width="2%">:</td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <th width="30%">Jail Name</th>
                                <td width="2%">:</td>
                                <td>Allahabad Jail</td>
                            </tr>
                            <tr>
                                <th width="30%">Blood Group</th>
                                <td width="2%">:</td>
                                <td>AB+</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <p>John was a resident of the Bikroo village near Bilhaur in Kanpur Nagar district, Uttar Pradesh.[7] From a young age, he formed a local gang and was responsible for criminal activities, including "land grabbing" and murder. He often targeted Brahmins for land grabbing as he perceived them to be easy targets. John soon became one of the most wanted criminals in Kanpur.</p>
                    </div>
                </div>

                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Frequency Table</h3>
                    </div>
                    <div id="piechart" style="width: 900px; height: 500px;padding-right:400px"></div>
                    <div class="card-body pt-0">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>