<p>Dear {{ $payments[0]->user->name }} ,</p>

<p>Your movie booking for has been confirmed.</p>

<p>Booking Details:</p>

<ul>
    <li>Movie: {{ $payments[0]->movie->name }}</li>
    <li>Time: {{ $payments[0]->showtime->time }}</li>
    <li>Time: {{ $payments[0]->theatre->name }}</li>
    <li>Number of Tickets: {{ count($payments) }}</li>
</ul>


<p>Thank you for choosing our service.</p>
