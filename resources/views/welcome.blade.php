<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
            background-color: #f9f9f9;
            padding: 2rem;
        }

        .invoice {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2rem;
            margin-top: 0;
        }

        .billing-info,
        .payment-info {
            margin-bottom: 2rem;
        }

        .billing-info h2,
        .payment-info h2 {
            font-size: 1.5rem;
            margin-top: 0;
            margin-bottom: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.5rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

    </style>
</head>
<body>
    <a href="{{ route('pdf.generate') }}">Download PDF</a>

    <div class="invoice">
        <div class="header">
            <h1>Invoice Krusty Crabs</h1>
            <p>Date: 24/03/2022</p>
        </div>
        <div class="billing-info">
            <h2>Billing Information:</h2>
            <p>Whatzitooya</p>
            <p>Jl.Rock bottom</p>
            <p>Bikini Bottom Selatan, Bikini Bottom</p>
            <p>Email: Whatzty@bikinibotom.id</p>
            <p>Phone: 555-555-5555</p>
        </div>
        <div class="items">
            <h2>Items:</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rolade</td>
                        <td>2</td>
                        <td>$50.00</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>Ayam Suir</td>
                        <td>1</td>
                        <td>$200.00</td>
                        <td>$200.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total:</td>
                        <td>$300.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="payment-info">
            <h2>Payment Information:</h2>
            <p>Amount Due: $300.00</p>
            <p>Payment Method: Check</p>
        </div>
    </div>
</body>
</html>

