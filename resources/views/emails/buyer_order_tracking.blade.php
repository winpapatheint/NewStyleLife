<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order {{ $orderItems->first()->status }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .subtotal {
            font-weight: bold;
        }

        p {
            margin-bottom: 10px;
        }

        .footer {
            margin-top: 20px;
            border-top: 2px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Order {{ $orderItems->first()->status }}</h2>
        <p>Dear {{ $orderItems->first()->buyer->name }},</p>
        <p>Your order has been {{ $orderItems->first()->status }} by {{ $orderItems->first()->seller->shop_name }}. 
            Here are the details:</p>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price(tax inc)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderItems as $detail)
                <tr>
                    <td>{{ $detail->product->product_name }}</td>
                    <td>{{ $detail->qty }}</td>
                    <td>{{ $detail->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td class="subtotal">Subtotal :</td>
                    <td>¥{{ number_format($orderItems->first()->order->sub_total_amount , 0, '.', ',') }}</td>
                </tr>
                <tr>
                    <td class="subtotal">Shipping Fee :</td>
                    <td>¥{{ number_format($orderItems->first()->order->shipping_fee , 0, '.', ',') }}</td>
                </tr>
                <tr>
                    <td class="subtotal">Coupon Discounted :</td>
                    <td>¥{{ number_format($orderItems->first()->order->coupon_discount_amount , 0, '.', ',') }}</td>
                </tr>
                <tr>
                    <td class="subtotal">Total Price :</td>
                    <td>¥{{ number_format($orderItems->first()->order->total_amount , 0, '.', ',') }}</td>
                </tr>
            </tbody>
        </table>
        
        <p>Thank you for shopping with us.</p>
        <div class="footer">
            <p>If you have any questions, please contact us at info@new-style.life.</p>
        </div>
    </div>
</body>
</html>
