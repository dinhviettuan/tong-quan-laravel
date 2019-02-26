<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>{{ $productDescription }}</span><br/>
    <label>Price: </label>
    <span>{{ $productPrice }}$</span><br/>
    <label>Discount Percent: </label>
    <span>{{ $discountPercent }}%</span><br/>
    <label>Discount Amount: </label>
    <span>{{ $discountAmount }}$</span><br/>
    <label>Discount Price: </label>
    <span>{{ $discountPrice }}$</span><br/>
</div>
</body>
</html>