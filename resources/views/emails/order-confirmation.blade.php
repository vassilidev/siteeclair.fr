<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Commande</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F2F2F2;
            color: #1A1A1A;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #FFFFFF;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(to right, #E07B00, #9C6D1F);
            padding: 20px;
            text-align: center;
            color: #FFFFFF;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            color: #E07B00;
            font-weight: 600;
        }

        .content p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .content ul {
            padding: 0;
            margin: 20px 0;
            list-style: none;
        }

        .content ul li {
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
        }

        .footer {
            padding: 20px;
            background-color: #1A1A1A;
            text-align: center;
            font-size: 14px;
            color: #FFFFFF;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #E07B00;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #E07B00;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
        }

        .btn:hover {
            background-color: #9C6D1F;
        }

        @media (max-width: 600px) {
            .header h1, .content h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <h1>🎉 Commande Confirmée !</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Merci pour votre commande !</h2>
        <p>Bonjour {{ $order->user->name }},</p>
        <p>Nous avons bien reçu votre commande pour l'offre <strong>{{ $order->offer->getTitle() }}</strong> au prix de
            <strong>{{ $order->offer->price() }}</strong>.</p>
        <p>Votre numéro de commande est :
            <strong style="color: #E07B00;">{{ $order->number }}</strong>
        </p>
        <p>Voici un récapitulatif de votre offre :</p>
        <ul>
            @foreach ($order->offer->features() as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>

        <p>📅 <strong>Prochaines étapes :</strong> Vous pouvez retrouver tous les détails de votre commande ainsi que
            planifier votre rendez-vous via le lien suivant :</p>
        <a href="{{ route('order.success', $order) }}" class="btn">Voir ma commande</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p><strong>Site Éclair</strong> - La solution clé en main pour un site performant en 5 jours 🚀</p>
        <p>
            Développé par <strong>TFA - The Forge Agency</strong>, Site Éclair vous offre une solution rapide et
            sur-mesure.
        </p>
        <p>Pour toute question, contactez-nous à <a href="mailto:hello@siteeclair.fr">contact@siteeclair.fr</a>.</p>
    </div>
</div>
</body>
</html>