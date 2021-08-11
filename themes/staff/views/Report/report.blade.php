<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Bauhinia</title>
</head>

<body>
    <div class="p-4">
        <div class="flex flex-col items-center" style="width: 100%;">
            <table class="w-full">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">Order Report</th>
                    </tr>
                    <tr>
                        <th>Brand Name</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Date</th>
                        <th>Placed By</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Orders as $Order)
                        <tr>
                            <td class="text-center">{{ $Order->brand_name }}</td>
                            <td class="text-center">{{ $Order->color }}</td>
                            <td class="text-center">{{ $Order->size }}</td>
                            <td class="text-center">{{ $Order->date }}</td>
                            <td class="text-center">{{ $Order->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
