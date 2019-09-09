<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SORTEIO</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
        }
        
        .flex-container {
            height: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rebeccapurple;            
        }
        
        .row {
            width: auto;
        }
        .flex-item {
            border-radius: 25px;
            padding: 70px;
            height: 50%;
            margin: 22px;
        }
        .winner {
            line-height: 20px;
            color: white;
            font-weight: bold;
            font-size: 7em;
            text-align: center;
            box-shadow: 0 5px 80px -5px rgba(0,0,0,0.5);
            opacity: 1;
            animation-name: fadeInOpacity;
            animation-iteration-count: 1;
            animation-timing-function: ease-in;
            animation-duration: 2s;
        }
        @keyframes fadeInOpacity {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        h1 {
            margin: -20px auto;
            color: #fff;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php 
        $sorteio = [
            '01', '02', '03', '04', '05'			
			];

         $resultao = array_rand($sorteio);
         echo '<div class="flex-container">
                <div class="row"> 
                    <div class="flex-item"><h1>Winner</h1></div>       
                    <div class="flex-item winner"> '. $sorteio[$resultao] .'</div>
                </div>
            </div>';
    ?>
</body>

</html>