<?php
session_start(); // starts the session.
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Click and Join</title>
    <!-- extra css -->
    <style>
        td a {
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
            color: red;
            transition-property: all;
            transition-duration: 1s;
        }
        .routinedate{
               font-weight: bold; 
        }
    </style>
</head>


<body>
    <?php
    // including navbar
    include 'partials/_roheader.php';
    ?>
    <!-- routine table starts from here -->
    <div class="container my-4">
        <h2>Welcome to <b>Click And Join</b> Section. Here is the Full routine. Just click and join</h2>
        <table class="table table-bordered border-danger my-3">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>10:10 - 10:50</th>
                    <th>11:00 - 11:40</th>
                    <th>11:50 - 12:30</th>
                    <th>12:40 - 1:20</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="routinedate">Saturday</td>
                    <td><a href='https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09'
                            target="_blank">Rel (MJH Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/4351375530?pwd=K2VLdVcrLzI5QmdqN1JDb2JESno0QT09'
                            target="_blank">BGS (SMS Miss)</a></td>
                    <td><a href='https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09'
                            target="_blank">B-2 (SBA Sir)</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="routinedate">Sunday</td>
                    <td><a href='https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09'
                            target="_blank">Che (MLI sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/9855801606?pwd=VTZnakxSY2xVRXgyZzQ3N2lwSkgyZz09'
                            target="_blank">BIO (AAL Miss)</a></td>
                    <td><a href='https://us04web.zoom.us/j/7338011033?pwd=RU9KMVFlTjhnUXNkUnh5T2RvRVIyQT09'
                            target="_blank">HM (AZR Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/3056994432?pwd=UW1XL2ZXblBsTUwwcFZSbHBPYkpKUT09'
                            target="_blank">GM (MFN Sir)</a></td>
                </tr>
                <tr>
                    <td class="routinedate">Monday</td>
                    <td><a href='https://us04web.zoom.us/j/7297530540?pwd=QUFUMTNvb0tiS3VGOGNOck1mMVl5dz09'
                            target="_blank">B-1 (MS Miss)</a></td>
                    <td><a href='https://us04web.zoom.us/j/9894493425?pwd=cmhRaHAxYmFONDQ4ZzE5d21vZGpPUT09'
                            target="_blank">ICT (MNA SIr)</a></td>
                    <td><a href='https://us04web.zoom.us/j/9733291074?pwd=REhEaitKcW9obE51amJmb2d2TXBuZz09'
                            target="_blank">GM (ANH Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09'
                            target="_blank">E-2 (SDI SIr)</a></td>
                </tr>
                <tr>
                    <td class="routinedate">Tuesday</td>
                    <td><a href='https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09'
                            target="_blank">PHY (MSH Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09'
                            target="_blank">B-2 (SBA Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09'
                            target="_blank">CHE (MLI SIr)</a></td>
                    <td><a href='https://us04web.zoom.us/j/4451007357?pwd=QU82TzNPMnFOUFdCODZWWnl5NFIwdz09'
                            target="_blank">E-1 (SPS Sir)</a></td>
                </tr>
                <tr>
                    <td class="routinedate">Wednesday</td>
                    <td><a href='https://us04web.zoom.us/j/6830754268?pwd=RFVJTWtVZjliOEdqblo5WUxuNEx4QT09'
                            target="_blank">BIO (MAR Miss)</a></td>
                    <td><a href='https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09'
                            target="_blank">PHY (MSH Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09'
                            target="_blank">E-2 (SDI sir)</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="routinedate">Thursday</td>
                    <td><a href='https://us04web.zoom.us/j/6022353957?pwd=V2NlbHdRcDVWRDVrY2FpSGQvRkZnUT09'
                            target="_blank">BGS (ZF Miss)</a></td>
                    <td><a href='https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09'
                            target="_blank">REL (MJH Sir)</a></td>
                    <td><a href='https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09'
                            target="_blank">HM (MMU SIr)</a></td>
                    <td><a href="https://us04web.zoom.us/j/2163696888?pwd=c21zSWhWdCtSait5V0lheW5WWUhkQT09"
                            target="_blank">Culture (NND Sir)</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>