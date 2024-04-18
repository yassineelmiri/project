<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .ticket {
            width: 400px;
            margin: 0 auto;
            background: #B1946Dff;
            padding: 20px;
            border: 2px solid #333;
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
            background-color: #767171;
        }
        .ticket-header h1 {
            font-size: 24px;
            color: #333;
        }
        .ticket-info {
            margin-bottom: 20px;
        }
        .ticket-info p {
            margin: 5px 0;
            font-size: 16px;
            color: #555;
        }
        .ticket-info .title {
            font-weight: bold;
            color: #333;
        }
        .barcode {
            text-align: center;
            margin-top: 20px;
        }
        .barcode img {
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="ticket">
        <div class="ticket-header">
            <h1>Hotel Reservation Ticket</h1>
        </div>
        <div class="ticket-info">
            <p><span class="title">Reservation ID:</span> #123456</p>
            <p><span class="title">Guest Name:</span> John Doe</p>
            <p><span class="title">Check-in Date:</span> April 20, 2024</p>
            <p><span class="title">Check-out Date:</span> April 25, 2024</p>
            <p><span class="title">Room Type:</span> Deluxe Room</p>
            <p><span class="title">Total Guests:</span> 2 Adults, 1 Child</p>
        </div>
        <div class="barcode">
            <img src="https://example.com/barcode" alt="Barcode">
        </div>
    </div>

</body>
</html>
