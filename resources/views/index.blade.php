<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/index" method="post">
        <p>Card number<input type="number" minlength="16"  size="16" name="card_number"></p>
        <p>Owner<input type="text" name="card_holder"></p>
        <p>Expiration<input type="date" name="card_expiration"></p>
        <p>CVV<input type="number" maxlength="3" name="cvv"></p>
        <p>Order number<input type="number" maxlength="16" name="order_number"></p>
        <p>Sum<input type="text" name="sum"></p>
        <button type="submit">Send</button>

        @csrf

    </form>
</body>
</html>
