<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <title>Document</title>
</head>
<body>
    <div style="width: 500px; height: 300px; border: 1px solid grey;">
        <canvas id="myChart"></canvas>
    </div>
    <?php
    $data1 = [1, 3, 5, 6, 24, 6, 10];
    $label = ['january', 'february', 'march', 'april', 'may', 'june', 'july'];
    
    function dt($par, $par2 = false) {

        foreach($par as $dt) {
            if($output != "") {
                $output .= ",";
            }

            if($par2 == false) {
                $output .= $dt;
            }
            elseif($par2 == true) {
                $output .= "'" . $dt . "'";
            }
        }

        $output = "[" . $output . "]";

        return $output;
    }

    //echo $data;
    ?>
    <script>
    
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: <?php echo dt($label, true); ?>,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: <?php echo dt($data1); ?>
        }]
    },

    // Configuration options go here
    options: {
            animation: {
                easing: 'easeInOutBounce',
                duration: 1000
            }
        }
});
        </script>
</body>
</html>