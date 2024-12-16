<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Customers</th>
            <th>Shops</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->customer }}</td>
                <td>
                    @foreach ($customer->shops as $shop)
                        {{ $shop->shop }} <br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>