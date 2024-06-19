<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Order</title>
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
        .subtotal {
            font-weight: bold;
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
                Your <strong>Cash Order</strong> have been successfully placed with order code
                <strong>{{ $orderDetails->first()->order->order_code }}</strong>!
            </p>
            <p style="text-align: right;">{{ \Carbon\Carbon::now()->format('F j, Y') }}</p>
            <p>Dear {{ $orderDetails->first()->buyer->name }},</h2>
            <p>Here are the key details regarding order:</p>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Shop</th>
                        <th>Quantity</th>
                        <th>Price(tax inc)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderDetails as $detail)
                    <tr>
                        <td>{{ $detail->product->product_name }}</td>
                        <td>{{ $detail->seller->shop_name }}</td>
                        <td>{{ $detail->qty }}</td>
                        <td>¥{{ number_format($detail->price, 0, '', ',') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td class="subtotal">Subtotal :</td>
                        <td>¥{{ number_format($orderDetails->first()->order->sub_total_amount , 0, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <td class="subtotal">Shipping Fee :</td>
                        <td>¥{{ number_format($orderDetails->first()->order->shipping_fee , 0, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <td class="subtotal">Coupon Discounted :</td>
                        <td>¥{{ number_format($orderDetails->first()->order->coupon_discount_amount , 0, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <td class="subtotal">Total Price :</td>
                        <td>¥{{ number_format($orderDetails->first()->order->total_amount , 0, '.', ',') }}</td>
                    </tr>
                </tbody>
            </table>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please transfer the total amount of ¥{{ number_format($totalAmount, 0, '', ',') }} to the following bank account:</p>
            <p>Bank Name: {{ $bankInfo->bank_name }}</p>
            <p>Branch Name: {{ $bankInfo->branch_name }}</p>
            <p>Account Type: {{ $bankInfo->account_type }}</p>
            <p>Account Number: {{ $bankInfo->account_number }}</p>
            <p>Account Name: {{ $bankInfo->account_name }}</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you don't transfer the amount at {{ $transferDate }}, your order will be cancelled.</p>
            <p>Please make sure the transfer person name to be the following name for the transfer process:</p>
            <p>Transfer Person Name: {{ $transferPersonName }}</p>
            <p>Thank you for shopping with us.</p>
        </div>
        <div class="footer">
            <p>Thank You,</p>
            <p>Asian Food Museum</p>
            <p>Email: info@asian-food.site</p>
            <p>Phone: (+81) 03-3981-5090</p>
            <p><a href="https://asian-food.site/">https://asian-food.site/</a></p>
            <p>〒171-0014<br>
                Room 502, Wada Building<br>
               4-27-5 Ikebukuro, Toshima-ku<br>
               Tokyo, Japan.
            </p>
        </div>
    </div>
</body>
</html>
