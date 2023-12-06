<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chicco Di Cafe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}">
    <link rel="stylesheet" type="text/css" media="print" href="{{ asset('CSS/print.css') }}">
</head>

@include('includes.header')


    <main>

        <table class="menu-table onlyPrint">
            <caption class="caption-center menu-head">Menu Items</caption>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody class="menu-box">
                @foreach($categoriesWithMenuItems as $category)
                <tr>
                    <td rowspan="{{ count($category->menuItems) + 1 }}">{{ $category->name }}</td>
                </tr>
                @foreach($category->menuItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>${{ $item->price }}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </main>


@include('includes.footer')

</html>