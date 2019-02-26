<html>
<head>
    <title>Translate</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content">
    <h1>Translate</h1>
    <form method="POST" action="/translate">
        @csrf
        <div id="data">
            <label>English:</label>
            <input type="text" name="english"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Dịch"/>
        </div>
    </form>
</div>
</body>
</html>