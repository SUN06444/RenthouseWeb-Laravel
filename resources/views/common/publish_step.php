<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.step.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/js/jquery.step.min.js"></script>
    <style>
        button {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            text-align: center;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #5bc0de;
        }

        .main {
            width: 1000px;
            margin: 100px auto;
        }

        #step {
            margin-bottom: -40px;
        }

        .btns {
            float: right;
        }

        .info {
            float: left;
            height: 34px;
            line-height: 34px;
            margin-left: 40px;
            font-size: 28px;
            font-weight: bold;
            color: #928787;
        }

        .info span {
            color: red;
        }
        .form-box {
            max-width: 80em;
            background-color: rgba(255, 255, 255, 0.77);
            border-radius: 0.25em;
            overflow: hidden;
            margin: 5em auto;
            padding-bottom: 5em;
            box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
<div class="main">
    <div id="step"></div>
</div>
</body>