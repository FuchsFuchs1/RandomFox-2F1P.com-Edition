<?php
$files = glob('images/*');
if ($files) {
    $FOX_NUM = count($files);

    if (!isset($_GET['i'])) {
        $random_fox_index = rand(1, $FOX_NUM);
    } else if (ctype_digit($_GET['i'])) {
        $random_fox_index = $_GET['i'];
    }
} else {
    $FOX_NUM = 0;
    $random_fox_index = 0;
}

?>

<html>
<head>
    <title>RandomFox</title>
    <meta charset="utf-8">
    <meta type="author" content="xinitrc" />
    <meta type="description" content="Displaying pictures of random foxes with every click!" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FF6600" />
	<meta http-equiv="Cache-Control" content="max-age=1" />

    <meta property="og:image" content="https://randomfox.ca/images/<?= $random_fox_index ?>.jpg" />
    <meta property="og:title" content="randomfox.ca" />
    <meta property="og:description" content="Random fox on every click!" />
    <meta property="og:url" content="https://randomfox.ca" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>
        $(document).ready(function () {
            var panel_width = document.getElementById('sidebar').offsetWidth;
            var image_width = document.getElementById('fox_full_link').offsetWidth;
            document.getElementById('footer').style.width = panel_width + image_width;
        });
    </script>

    <style type="text/css">
        body {
	margin: 0;
	padding: 5px;
	font-family: arial, verdana, tahoma, sans-serif;
	font-size: 14px;
	background-color: #0F0;
	background-image: url(../../cdn/emerald_block.png);
        }
        #footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 75%;
            text-align: center;
        }
		#panel {
			display: flex;
			align-items: center;
			max-height: 100%;
		}
        #sidebar {
            float: left;
            width: 200px;
            padding: 5px;
        }
		#fox_full_link {
			max-width: calc(100% - 240px);
			max-height: 100%;
            background: transparent url('https://www.hostnetwork.xyz/randomfox/images/<?= $random_fox_index ?>.jpg') 0 0/contain no-repeat;
			margin: 10px;
		}
        #fox_img_link {
            float: left;
            margin: 10px;
			max-width: 100%;
            border: 2px solid #ccc;
        }
    a:link {
	color: #F63;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id="panel">
<div id="sidebar"><label for="shareButton"><strong>RandomFox.ca </strong><span style="color: #00ff00; background-color: #999999;">Hostnetwork.xyz</span> Edition<strong><br />Share this fox!</strong></label> <input id="shareButton" type="text" value="https://www.hostnetwork.xyz/randomfox/?i=&lt;?= $random_fox_index ?&gt;" /><br />
<p id="fox_count">Fox Count: <!--?= $FOX_NUM ?--><br /><a href="https://github.com/xinitrc-ls/randomfox.ca">Add more floof!</a></p>
<p>Submit more foxes?<br />Here: <a href="https://github.com/xinitrc-ls/randomfox.ca" target="_blank">GitHub</a> or <a href="mailto:x-bot@x-hub.co?subject=Fox Pictures Upload Request">Email</a><br />or Here: GitHub or <a href="mailto:fox@2f1p.hostnetwork.xyz?subject=Fox Pictures Upload Request">Email</a></p>
<p>API is Available: <a href="https://www.hostnetwork.xyz/randomfox/fox-api">https://www.hostnetwork.xyz/randomfox/fox-api</a></p>
</div>
<a id="fox_full_link" href="https://randomfox.ca/?i=&lt;?= $random_fox_index ?&gt;"> <img id="fox_img_link" style="visibility: hidden;" title="" src="https://randomfox.ca/images/&lt;?= $random_fox_index ?&gt;.jpg" alt="" /> </a>
<div id="footer">
<p>Original made by: <a href="https://x-bot.app/discord">xinitrc</a></p>
<p>Original web: <a href="https://randomfox.ca">https://randomfox.ca</a></p>
<p>LICENSE</p>
<p>Edit by: <a href="https://www.hostnetwork.xyz">Hostnetwork.xyz</a></p>
</div>
</div>
</body>
</html>