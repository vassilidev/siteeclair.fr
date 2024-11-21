<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Confirmation de Commande - Site Éclair</title>
    <style>
        /* Importation de la police Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* Styles généraux */
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
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #E0E0E0;
        }
        /* En-tête */
        .header {
            background-color: #E07B00;
            padding: 20px;
            text-align: center;
            color: #FFFFFF;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
        }
        /* Contenu principal */
        .content {
            padding: 30px 20px;
        }
        .content h2 {
            color: #E07B00;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 22px;
        }
        .content p {
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .content ul {
            padding: 0;
            margin: 20px 0;
            list-style: none;
        }
        .content ul li {
            padding: 10px 0;
            border-bottom: 1px solid #E0E0E0;
            font-size: 16px;
        }
        .content ul li:last-child {
            border-bottom: none;
        }
        /* Pied de page */
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
        /* Bouton principal */
        .btn {
            display: inline-block;
            margin: 30px 0;
            padding: 12px 25px;
            background-color: #E07B00;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #C86B00;
        }
        /* Responsive */
        @media (max-width: 600px) {
            .header h1, .content h2 {
                font-size: 24px;
            }
            .content p, .content ul li {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- En-tête -->
    <div class="header">
        <h1>🎉 Commande Confirmée !</h1>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <h2>Merci pour votre confiance, {{ $order->user->name }} !</h2>
        <p>Nous sommes ravis de vous compter parmi nos clients. Votre commande pour la <strong>{{ $order->offer->getTitle() }}</strong> au prix de <strong>{{ $order->offer->price() }}</strong> a été confirmée avec succès.</p>
        <p>Votre numéro de commande est : <strong style="color: #E07B00;">{{ $order->number }}</strong></p>
        <p>Voici un récapitulatif de votre offre :</p>
        <ul>
            @foreach ($order->offer->features() as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>
        <p>📅 <strong>Prochaines étapes :</strong></p>
        <p>Planifiez dès maintenant votre rendez-vous pour discuter des détails de votre projet et lancer la création de votre site web.</p>
        <a href="{{ route('order.success', $order) }}" class="btn">Planifier mon rendez-vous</a>
        <p>Vous pouvez également consulter les détails de votre commande en cliquant sur le bouton ci-dessus.</p>
    </div>

    <!-- Pied de page -->
    <div class="footer">
        <p><strong>Site Éclair</strong> - Votre site web performant en 5 jours 🚀</p>
        <p>Développé avec passion par <strong>TFA - The Forge Agency</strong></p>
        <p>Pour toute question, n'hésitez pas à nous contacter à <a href="mailto:contact@siteeclair.fr">contact@siteeclair.fr</a></p>
    </div>
</div>
</body>
</html>