<link rel="stylesheet" href="{{ asset('/assets/css/errors.css') }}">

<body class="loading">
    <h1>500</h1>
    <h2>Unexpected Error</h2>
    <div class="gears">
        <div class="gear one">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="gear two">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="gear three">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</body>


<script>
    $(function() {
        setTimeout(function() {
            $('body').removeClass('loading');
        }, 1000);
    });
</script>