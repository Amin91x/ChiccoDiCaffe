<!-- 
Amin Ali-2035693
Ahmad Radwan - 2045887
-->
<!DOCTYPE html>

@include('includes.header')

<head>
    <title>Chicco Di Cafe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/main.css') }}">
    <link rel="stylesheet" type="text/css" media="print" href="{{ asset('CSS/print.css') }}">
</head>



<div class="specials-menu-left speicals-menu-box noPrint">
    <h2>Hot Beverages</h2>
    <dl>
        <dt>Peppermint Mocha</dt>
        <dd>A hot beverage made with espresso, steamed milk, and rich cocoa, infused with cool peppermint and topped with whipped cream.</dd>
        <dt>Chestnut Latte</dt>
        <dd>A hot beverage made with a warm latte with the rich and nutty flavor of roasted chestnuts.</dd>
        <dt>Spiced Chai Tea</dt>
        <dd>A hot beverage made with a blend of black tea, spices, and steamed milk, topped with a sprinkle of cinnamon.</dd>
    </dl>
</div>

<div class="specials-menu-right speicals-menu-box noPrint">
    <h2>Appetizers</h2>
    <dl>
        <dt>Creamy Butternut Squash Soup</dt>
        <dd>A velvety soup with the comforting taste of roasted butternut squash, finished with a touch of cream.</dd>
        <dt>Cranberry and Brie Crostini</dt>
        <dd>Toasted baguette slices topped with creamy brie cheese and a sweet-tart cranberry compote.</dd>
        <dt>Savory Stuffed Mushrooms</dt>
        <dd>Mushrooms stuffed with a blend of herbs, breadcrumbs, and cheese, baked to perfection.</dd>
    </dl>
</div>

<div class="specials-menu-left speicals-menu-box noPrint">
    <h2>Main Courses</h2>
    <dl>
        <dt class="specials-dt">Winter Vegetable Risotto</dt>
        <dd class="specials-dd">Arborio rice cooked with a medley of seasonal vegetables, Parmesan cheese, and a hint of white wine.</dd>
        <dt class="specials-dt">Roasted Herb-Crusted Turkey</dt>
        <dd class="specials-dd">Slices of succulent turkey breast with a crispy herb crust, served with cranberry sauce.</dd>
        <dt class="specials-dt">Pecan-Crusted Salmon</dt>
        <dd class="specials-dd">Salmon fillet coated with a crunchy pecan crust, served with a citrus beurre blanc sauce.</dd>
    </dl>
</div>

<div class="specials-menu-right speicals-menu-box noPrint">
    <h2>Desserts</h2>
    <dl>
        <dt class="specials-dt">Warm Apple Crisp</dt>
        <dd class="specials-dd">Baked apple slices with a cinnamon and oat crumble topping, served with vanilla ice cream.</dd>
        <dt class="specials-dt">Chocolate Peppermint Bark</dt>
        <dd class="specials-dd">Dark chocolate and white chocolate layers infused with peppermint, broken into pieces.</dd>
    </dl>
</div>

<div class="specials-menu-left events-box">
    <h2>Events</h2>

    <table class="specials-table onlyPrint">
        <thead>
            <tr>
                <th class ="specials-th">Date</th>
                <th class ="specials-th">Event</th>
                <th class ="specials-th" colspan="2">Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class = "specials-td" rowspan="2">October 15, 2023</td>
                <td class = "specials-td">Live Music Night</td>
                <td class = "specials-td">Main Stage</td>
                <td class = "specials-td">Outdoor Patio</td>
            </tr>
            <tr>
                <td class = "specials-td">Coffee Tasting</td>
                <td class = "specials-td" colspan="2">Community Room</td>

            </tr>
            <tr>
                <td class = "specials-td">December 12, 2023</td>
                <td class = "specials-td">Holiday Celebration</td>
                <td class = "specials-td" colspan="2">Indoor & Outdoor</td>
            </tr>
        </tbody>
    </table>

    <div class="noPrint">
    <h2>Music Night</h2>
    <iframe width="530" height="315" src="https://www.youtube.com/embed/v2SAmDJ_SMg?si=wJ139RhYiUvTE0GG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
</html>
@include('includes.footer')