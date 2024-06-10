<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Cancelled</title>
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
        <h2>Order Cancelled</h2>
        <p>Dear Admin,</p>
        <p>Order code {{ $order->order->order_code }} has been cancelled by {{ $order->seller->shop_name }}. </p>
        <p>Cancelled Reason : {{ $order->cancelled_reason }}</p>
        <p>Here are the details:</p>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price(tax inc)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->product->product_name }}</td>
                    <td>{{ $order->qty }}</td>
                    <td>{{ $order->price }}</td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td class="subtotal">Amount :</td>
                    <td>¥{{ number_format($order->amount , 0, '.', ',') }}</td>
                </tr>
            </tbody>
        </table>
        <p>Prepare to notify the refund process soon.</p>
        
        <p>New Style Life</p>
        <div class="footer">
            <p>This mail was sent to all admins - Admin Team</p>
        </div>
    </div>
</body>
</html>
