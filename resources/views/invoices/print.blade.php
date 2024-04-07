<!-- resources/views/invoices/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        /* Vos styles CSS pour la facture */
    </style>
</head>
<body>
    <div class="container">
        <h1>Facture</h1>
        <p>Numéro de facture : {{ $invoice->id}}</p>
    </div>
</body>
</html>
