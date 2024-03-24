<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <?php use Barryvdh\DomPDF\Facade\Pdf;?>
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
        <a href="{{ route('pdf.generate') }}">Download PDF</a>
    </body>
</html>
