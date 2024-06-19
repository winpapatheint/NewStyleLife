<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Product Registration Successful</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            max-width: 100%;
            height: auto;
        }
        .content {
            margin: 20px 0;
        }
        .content p {
            font-size: 15px;
            line-height: 1.6;
        }
        .content h2 {
            font-size: 24px;
            margin-top: 0;
        }
        strong {
            font-size: 16px;
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
        .footer {
            text-align: right;
            margin-top: 40px;
        }
        .footer p {
            font-size: 14px;
            color: #777;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ $message->embed(public_path('images/logos/MailHeader_NSL.jpg')) }}" alt="Asian Food Museum Logo">
        </div>
        <div class="content">
            <p style="text-align: center;">
                <strong>Product code {{ $product->product_code }}</strong> has been <strong>cancelled</strong> by <strong>{{ $sellerData->shop_name }}</strong> !
            </p>
            <p style="text-align: right;">{{ \Carbon\Carbon::now()->format('F j, Y') }}</p>
            <p>Dear {{ $admin->name }},</h2>
            <p>Here are the key details regarding product:</p>
            <img src="{{ $message->embed(public_path('images/'.$product-> product_thambnail)) }}" alt=""
                style="width: 60px; height: 60px;">
            <table>
                <tbody>
                    <tr>
                        <td>Product</td>
                        <td>{{ $product->product_name }}</td>
                    </tr>
                    <tr>
                        <td>Shop</td>
                        <td>{{ $sellerData->shop_name }}</td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>{{ $product->product_qty }}</td>
                    </tr>
                    <tr>
                        <td>Price(tax inc)</td>
                        <td>¥{{ number_format($product->selling_price, 0, '', ',') }}</td>
                    </tr>
                    <tr>
                        <td>Discount(%)</td>
                        <td>{{ $product->discount_percent }}</td>
                    </tr>
                    <tr>
                        <td>Delivery Price</td>
                        <td>¥{{ number_format($product->delivery_price, 0, '', ',') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>Admin Team,</p>
            <p>Asian Food Museum</p>
            <p><a href="https://asian-food.site/">https://asian-food.site/</a></p>
        </div>
    </div>
</body>
</html>
