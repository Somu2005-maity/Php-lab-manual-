<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device">
    <title>Document</title>
</head>
<body>
    <div class="data">
    <h2 id="h2_data">
    This is my data.
    </h2>
    <button onclick="changeData()">
    Click
    </button>
<script>
    function changeData() {
        var data = document.getElementById('h2_data').innerText;

        var element = document.getElementsByTagName('h2')[0];
        element.innerHTML = data + " = This is customised from JS";
        element.style.color = "red";
    }
</script>
</body>
</html>