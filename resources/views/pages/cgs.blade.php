@extends('layouts.default')

@section('content')
    <div class="container mx-auto px-4 py-20">
        <div class="bg-section-background p-6 rounded-lg shadow-md">
            <h2 class="text-3xl font-semibold text-primary mb-4">Conditions Générales de Services</h2>
            <p class="text-sm text-text-gray mb-8">Date de dernière mise à jour : 25 novembre 2024</p>

            <!-- Article 1 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 1 – MENTION LÉGALES</h3>
                <p class="text-text mb-2">
                    Le présent site, accessible à l’URL <a href="{{ config('app.url') }}" class="text-primary underline"
                                                           target="_blank"
                                                           rel="noopener noreferrer">{{ config('app.url') }}</a> (le «
                    Site »), est édité par :
                    <strong>TFA THE FORGE AGENCY, SAS</strong> (Société par Actions Simplifiée) au capital de 1 000 €,
                    inscrite au R.C.S. de Paris sous le numéro 984 379 503, dont le siège social est situé au 1 Rue de
                    Stockholm, 75008 Paris, représentée par Joffroy Vassili, dûment habilité.
                </p>
                <p class="text-text mb-2"><em>(Ci-après désigné le « Vendeur »).</em></p>
                <p class="text-text mb-2">Le numéro individuel TVA de l’Exploitant est : FR02984379503.</p>
                <p class="text-text mb-2">Le Site est hébergé par la société DigitalOcean, située à Amsterdam. Les
                    coordonnées exactes et téléphoniques peuvent être obtenues auprès de DigitalOcean.</p>
                <p class="text-text mb-2">Le Service Client du Prestataire peut être contacté :</p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>au numéro suivant <strong>07 60 48 73 34</strong> aux horaires suivants <strong>24/7</strong>.
                    </li>
                    <li>par email en vous adressant à <a href="mailto:vassili@the-forge.agency"
                                                         class="text-primary underline">vassili@the-forge.agency</a>.
                    </li>
                </ul>
            </section>

            <!-- Article 2 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 2 – CHAMP D’APPLICATION</h3>
                <p class="text-text mb-2">
                    Les présentes conditions générales de services (les « Conditions Générales ») ont pour objet de
                    définir et de régir les rapports contractuels entre le Prestataire et tout professionnel (un «
                    Client ») ayant créé un compte et désirant bénéficier des services proposés sur le Site.
                </p>
                <p class="text-text mb-2">
                    La fourniture des services proposés aux Clients sur le Site est conditionnée à l’acceptation
                    préalable sans restriction ni réserve des présentes Conditions Générales.
                </p>
                <p class="text-text mb-2">
                    Les Conditions Générales sont mises à la disposition des Clients sur le Site où elles sont
                    directement consultables et peuvent également lui être communiquées sur simple demande par tout
                    moyen.
                </p>
                <p class="text-text mb-2">
                    Les Conditions Générales sont applicables nonobstant toute stipulation contraire figurant dans tous
                    documents émanant du Client, et notamment dans ses conditions générales d’achat.
                </p>
                <p class="text-text mb-2">
                    Les Conditions Générales sont applicables sous réserve de toute stipulation contraire figurant au
                    bon de commande ou à des conditions particulières le cas échéant conclues entre la Société et le
                    Client concerné.
                </p>
            </section>

            <!-- Article 3 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 3 – DESCRIPTION DES SERVICES</h3>
                <p class="text-text mb-2">
                    Le Site a pour objet la fourniture en ligne des services suivants :
                </p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>Création de sites internet sur-mesure ;</li>
                    <li>Design personnalisé ;</li>
                    <li>Programmation informatique ;</li>
                    <li>Domaine et hébergement inclus;</li>
                    <li>Support clients 24/7.</li>
                </ul>
                <p class="text-text mb-2"><em>(ci-après désignés les « Services »).</em></p>
                <p class="text-text mb-2">
                    Les Services présentés sur le Site font chacun l'objet d'un descriptif mentionnant leurs
                    caractéristiques essentielles. Cette description est susceptible de comporter des descriptions,
                    photographies et graphismes qui ne sont communiqués qu’à titre illustratif et peuvent être
                    modifiées/mises à jour sur le Site.
                </p>
            </section>

            <!-- Article 4 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 4 – CONDITIONS D’INSCRIPTION</h3>
                <p class="text-text mb-2">Tout Client désirant pleinement bénéficier du Site et des Services devra :</p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>disposer de la pleine capacité et agir à des fins strictement professionnelles ;</li>
                    <li>créer son espace personnel sur le Site en renseignant les différents champs du formulaire de
                        création d’un compte (dénomination, numéro de RCS, nom/prénom du référent, adresse électronique,
                        numéro de téléphone, etc.) ;
                    </li>
                    <li>confirmer son acceptation des Conditions Générales ;</li>
                    <li>confirmer son inscription.</li>
                </ul>
                <p class="text-text mb-2">
                    L’accès aux Services est possible à partir d’un ordinateur, d’un smartphone ou d’une tablette en se
                    connectant au Site.
                </p>
                <p class="text-text mb-2">
                    L’utilisation des Services nécessite une connexion à internet haut débit et à internet mobile le cas
                    échéant.
                </p>
                <p class="text-text mb-2">
                    Les Clients font leur affaire personnelle de la mise en place des moyens informatiques et de
                    télécommunication permettant l’accès au Site.
                </p>
                <p class="text-text mb-2">
                    Les Services ne sont accessibles qu’à partir d’une seule connexion à la fois.
                </p>
                <p class="text-text mb-2">
                    Lors de la création d’un compte avec courrier électronique, le Client est invité à choisir un mot de
                    passe, qui constitue la garantie de la confidentialité des informations qui seront contenues dans
                    son compte.
                </p>
                <p class="text-text mb-2">
                    Aux fins de validation de l’inscription, le Prestataire adresse au Client un courrier électronique
                    de confirmation à l’adresse email renseignée par ce dernier. Le Client procède alors à l’activation
                    de son compte en cliquant sur le lien hypertexte prévu à cet effet dans le courrier électronique de
                    confirmation.
                </p>
                <p class="text-text mb-2">
                    Chaque Client garantit la sincérité et l'exactitude des informations fournies pour les besoins de
                    son inscription, s'engage à lui notifier toute modification ultérieure et garantit que lesdites
                    informations ne portent pas atteinte aux droits de tiers.
                </p>
                <p class="text-text mb-2">
                    Le Client peut modifier ces informations, identifiants et mot de passe à partir de son compte sur le
                    Site.
                </p>
                <p class="text-text mb-2">
                    Le Client s’engage à ne pas divulguer ou transférer son compte, ses identifiants et mots de passe et
                    est seul responsable de leur utilisation jusqu’à leur désactivation. Il doit informer immédiatement
                    le Prestataire de toute perte ou utilisation non autorisée de son compte.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire se réserve le droit de supprimer le compte de tout Client qui aurait fourni des
                    informations erronées.
                </p>
            </section>

            <!-- Article 5 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 5 – COMMANDES</h3>
                <p class="text-text mb-2">Tout Client désirant bénéficier des Services en ligne sur le Site devra :</p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>se connecter à son compte Client ;</li>
                    <li>sélectionner les Services qu’il souhaite souscrire ;</li>
                    <li>renseigner les différents champs du bon de commande Client (nom, prénom, adresse, adresse
                        électronique, date de naissance, numéro de téléphone, etc.) ;
                    </li>
                    <li>confirmer son acceptation des Conditions Générales ;</li>
                    <li>confirmer son acceptation de la commande des Services ;</li>
                    <li>choisir son mode de paiement ;</li>
                    <li>effectuer le paiement des Services.</li>
                </ul>
                <p class="text-text mb-2">
                    Sauf disposition expresse figurant sur le Site, le Client ne pourra pas modifier sa commande après
                    l'avoir validée, laquelle sera ferme et définitive.
                </p>
                <p class="text-text mb-2">
                    Dès réception du paiement des Services compris dans la commande, le Prestataire adressera au Client
                    un courrier électronique de confirmation de sa commande à l’adresse email renseignée par ce dernier.
                </p>
                <p class="text-text mb-2">
                    Le courrier électronique de confirmation de la commande résume les caractéristiques essentielles
                    du/des Service(s) commandé(s), le prix total, et tout autre élément pertinent. Cet email indiquera
                    en outre un numéro de suivi de la commande du Client.
                </p>
                <p class="text-text mb-2">
                    En passant commande sur le Site, le Client accepte expressément que le Prestataire lui envoie une
                    facture par voie électronique. Il pourra toutefois obtenir une facture papier en adressant sa
                    demande au Service Clients.
                </p>
                <p class="text-text mb-2">
                    Pour lutter contre la fraude, le Prestataire ou ses prestataires de paiement ou de livraison peuvent
                    être amenés à demander des justificatifs supplémentaires au Client ou prendre attache avec ce
                    dernier, au moment de l'acceptation et/ou de l’expédition de la commande. En cas de refus non
                    justifié du Client de délivrer les informations et/ou justificatifs demandés, le Prestataire se
                    réserve le droit de ne pas accepter ou d’annuler la commande sans que cela ne puisse faire l’objet
                    d’une quelconque contestation.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire se réserve également le droit de ne pas accepter ou d’annuler la commande de tout
                    Client qui aurait fourni des informations erronées, qui ne procèderait pas au paiement des Services,
                    avec lequel existerait un litige relatif au paiement d’une commande antérieure ou qui présenterait
                    un niveau de commande anormalement élevé.
                </p>
            </section>

            <!-- Article 6 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 6 – CONDITIONS TARIFAIRES</h3>
                <p class="text-text mb-2">
                    Les Services sont fournis au tarif du Prestataire en vigueur figurant sur le Site au jour de la
                    commande, exprimé en euros hors taxes.
                </p>
                <p class="text-text mb-2">En cas de services spécifiques :</p>
                <p class="text-text mb-2">
                    Les Services sont facturés et le prix est exigible en totalité et payable comptant au jour de la
                    signature du bon de commande.
                </p>
                <p class="text-text mb-2">En cas de services à exécution successive :</p>
                <p class="text-text mb-2">
                    Les Services sont facturés et le prix est exigible en totalité et payable comptant au jour de la
                    commande pour la période contractuelle à venir.
                </p>
                <p class="text-text mb-2">
                    Le tarif est ferme et ne peut être révisé pendant la durée d’exécution des Services, les parties
                    renonçant expressément à se prévaloir des dispositions de l’article 1195 du Code Civil.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire se réserve toutefois le droit de modifier ses prix à tout moment pour tous Services
                    qui seraient souscrits postérieurement à cette modification.
                </p>
                <p class="text-text mb-2">
                    Des éventuelles réductions de prix, ristournes et remises pourront s’appliquer aux Services dans des
                    conditions prévues sur le Site ou dans tout autre document qui serait communiqué au Client. En cas
                    de tarif promotionnel, le Prestataire s'engage à appliquer ce tarif à toute commande passée durant
                    la période de la promotion.
                </p>
                <p class="text-text mb-2">
                    En cas de règlement anticipé par le Client, aucun escompte ne sera pratiqué. En aucun cas les
                    paiements ne peuvent être suspendus ni faire l'objet d'une quelconque compensation sans accord
                    préalable et écrit entre le Prestataire et le Client. Toute suspension, déduction ou compensation
                    opérée unilatéralement par le Client sera traitée comme un défaut de paiement et entraînera toutes
                    les conséquences d’un retard de paiement.
                </p>
                <p class="text-text mb-2">
                    Par ailleurs, il est expressément convenu que le Client est valablement mis en demeure de payer par
                    la seule exigibilité de l'obligation, conformément aux dispositions de l'article 1344 du Code civil.
                    En cas de retard de paiement de l’une quelconque des échéances, le Prestataire se réserve notamment
                    le droit, sans qu’aucune indemnité ne soit due au Client, de :
                </p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>exiger le paiement immédiat de l’ensemble des sommes à devoir au titre des Services, celles-ci
                        devenant immédiatement exigibles quelle que soit leur échéance initialement prévue ;
                    </li>
                    <li>refuser toute nouvelle commande ou exiger pour toute nouvelle commande un paiement comptant ou
                        une garantie pour la bonne exécution des engagements ;
                    </li>
                    <li>imputer tout paiement partiel en premier lieu sur la partie non privilégiée de la créance puis
                        sur les sommes dont l'exigibilité est la plus ancienne ;
                    </li>
                    <li>réduire, suspendre ou annuler l’accès aux Services, 14 jours après mise en demeure restée
                        sans effet, effectuée par le Prestataire auprès du Client ;
                    </li>
                    <li>appliquer, sans mise en demeure préalable, à toutes les sommes dues, dès le premier jour de
                        retard et jusqu'à complet paiement, des pénalités de retard calculées au taux visé à l’article
                        L.441-6 du Code de Commerce ; et/ou
                    </li>
                    <li>exiger le paiement d’une indemnité forfaitaire de 40 € pour frais de recouvrement, pour chaque
                        facture payée en retard, et le paiement d’une indemnité égale à 10% des sommes lui restant dues,
                        sans préjudice de la réparation de tout dommage effectivement subi.
                    </li>
                </ul>
                <p class="text-text mb-2">
                    Toute modification des tarifs résultant d’une augmentation de la taxe sur la valeur ajoutée ou la
                    création de toute nouvelle taxe assise sur le prix des Services sera immédiatement et
                    automatiquement appliquée.
                </p>
            </section>

            <!-- Article 7 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 7 – MODES DE PAIEMENT</h3>
                <p class="text-text mb-2">
                    Le Client reconnaît expressément que toute commande effectuée sur le Site est une commande avec
                    obligation de paiement, qui nécessite le paiement d’un prix contre la fourniture du Service
                    commandé.
                </p>
                <p class="text-text mb-2">Le Site utilise la solution de paiement en ligne Stripe</p>
                <p class="text-text mb-2">
                    Les commandes peuvent être payées en ayant recours à l’un des modes de paiement suivants :
                </p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>
                        <strong>Paiement par carte bancaire</strong>. Le paiement s'effectue directement sur les
                        serveurs bancaires sécurisés de la banque du Prestataire, les coordonnées bancaires du Client ne
                        transitent pas sur le Site. Les coordonnées bancaires communiquées lors du paiement sont
                        protégées par un procédé de cryptage SSL (Secure Socket Layer). Les cartes bancaires émises par
                        des banques domiciliées hors de France doivent obligatoirement être des cartes bancaires
                        internationales. Le paiement via ces cartes bancaires s'effectue au comptant, sans escompte
                    </li>
                    <li>
                        <strong>Paiement par portefeuille électronique (type Paypal)</strong>. Le Client possède déjà un
                        compte sur le portefeuille électronique utilisé par le Prestataire. Le Client peut utiliser ce
                        compte et régler sa commande en toute sécurité sans communiquer ses coordonnées bancaires.
                    </li>
                    <li>
                        <strong>Paiement par virement</strong>. Le Client peut régler sa commande par virement bancaire.
                        Lors de la commande, le Prestataire communiquera les coordonnées du compte sur lequel effectuer
                        le virement, ainsi que la référence de commande à indiquer dans l’ordre de virement.
                    </li>
                </ul>
                <p class="text-text mb-2">
                    Le cas échéant, la commande validée par le Client ne sera considérée comme confirmée que lorsque le
                    Prestataire aura pu s’assurer de la validité du règlement.
                </p>
            </section>

            <!-- Article 8 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 8 – OBLIGATIONS DU PRESTATAIRE</h3>
                <p class="text-text mb-2">
                    Le Prestataire s’engage à mettre en œuvre toutes les diligences requises pour l’exécution des
                    Services et de ses obligations au titre des présentes Conditions Générales et/ou de toute autre
                    documentation qui serait conclue avec les Clients, dans le respect des dispositions législatives et
                    réglementaires et des droits de tiers.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire déclare disposer des compétences, de l’expérience et des moyens nécessaires pour
                    fournir les Services, et assume la pleine responsabilité tant de l’exécution des Services que de
                    l’organisation du travail de son personnel le cas échéant.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire édite les Services disponibles sur le Site et héberge les contenus du Site mis en
                    ligne par les Clients. Le Prestataire agit en tant que prestataire technique et n’effectue aucun
                    contrôle sur la licéité, l’exactitude, la qualité ou la sincérité des contenus mis en ligne par les
                    Clients sous leur responsabilité.
                </p>
                <p class="text-text mb-2">
                    En conséquence, les Clients reconnaissent au Prestataire la qualité d’hébergeur du Site au sens de
                    l’article 6 de la loi n°2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.
                </p>
                <p class="text-text mb-2">
                    Toutefois, le Prestataire s’engage à retirer promptement tout contenu manifestement illicite qui
                    serait porté à sa connaissance, notamment lorsque l’existence d’un tel contenu lui aura été notifiée
                    par un Client dans les conditions prévues par la réglementation applicable.
                </p>
                <p class="text-text mb-2">
                    Par ailleurs, le Prestataire s’efforce d’assurer l’accès et le bon fonctionnement du Site
                    vingt-quatre heures sur vingt-quatre, sept jours sur sept.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire ne peut cependant exclure que l’accès et le fonctionnement du Site soient interrompus
                    notamment en cas de force majeure, de dysfonctionnements des équipements ou du réseau internet des
                    Clients, de défaillance des opérateurs de télécommunication, d’interruption de fourniture
                    d’électricité, d’utilisation anormale, illicite ou frauduleuse du Site par un Client ou un tiers, de
                    décision des autorités compétentes, ou pour tout autre motif.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire se réserve également le droit d'apporter au Site et aux Services toutes les
                    modifications et améliorations de son choix liées à l'évolution technique ou au bon fonctionnement.
                </p>
                <p class="text-text mb-2">
                    Les interruptions générales et temporaires du Site et des Services seront, dans la mesure du
                    possible, notifiées via le Site avant qu’elles n’interviennent, sauf lorsque ces interruptions ont
                    un caractère d’urgence.
                </p>
            </section>

            <!-- Article 9 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 9 – OBLIGATIONS DU CLIENT</h3>
                <p class="text-text mb-2">
                    Chaque Client s'engage à accéder et utiliser le Site et les Services de manière loyale et
                    conformément aux lois en vigueur et aux présentes Conditions Générales.
                </p>
                <p class="text-text mb-2">
                    Les données et informations communiquées ou mises en ligne par les Clients devront être exactes,
                    sincères et loyales et seront communiquées sous leur seule responsabilité.
                </p>
                <p class="text-text mb-2">Plus généralement, chaque Client s’engage à :</p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>s’assurer du respect, en toutes circonstances, des obligations légales, sociales,
                        administratives et fiscales applicables à son statut de professionnel ;
                    </li>
                    <li>ne pas modifier, modifier, en cours d’exécution des Services, leur nature ou leurs modalités de
                        fourniture, sauf accord préalable et écrit du Prestataire ;
                    </li>
                    <li>verser le prix des Services dans les conditions prévues aux présentes ;</li>
                    <li>ne pas diffuser de contenu illicite ou ayant pour effet de diminuer, de désorganiser, de
                        ralentir ou d’interrompre la circulation normale des données sur le Site ;
                    </li>
                    <li>signaler immédiatement au Prestataire toute difficulté, réserve ou tout litige survenu au cours
                        de l’exécution des Services ou toute utilisation anormale, abusive ou frauduleuse du Site dont
                        il aurait connaissance.
                    </li>
                </ul>
                <p class="text-text mb-2">
                    Dans l'hypothèse où un Client serait responsable d'une infraction à la législation en vigueur ou
                    d'une atteinte aux droits des tiers, le Prestataire se réserve le droit de fournir, à la demande de
                    toute autorité légitime (juridiction, autorité administrative, services de police), tous
                    renseignements permettant ou facilitant l'identification du Client contrevenant.
                </p>
            </section>

            <!-- Article 10 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 10 – RECLAMATIONS</h3>
                <p class="text-text mb-2">
                    En cas d’inexécution ou d’exécution défectueuse des Services, le Client devra notifier le
                    Prestataire et formuler ses griefs et réserves dans un délai de trente (30) jours calendaires
                    suivant la date où il en a connaissance, afin de permettre aux parties de faire leurs meilleurs
                    efforts en vue de parvenir à un règlement amiable de la situation dans un délai de trente (30) jours
                    calendaires suivant la notification initiale du Client.
                </p>
                <p class="text-text mb-2">
                    À défaut de règlement amiable dans les conditions susvisées et en cas d’inexécution suffisamment
                    grave du Prestataire, le Client pourra résilier les Conditions Générales dans les conditions prévues
                    à l’article 17 et obtenir le cas échéant des dommages et intérêts du Prestataire aux fins de réparer
                    le préjudice subi, le Client renonçant par avance à solliciter une exécution forcée en nature des
                    Services par le Prestataire ou un tiers ou une réduction proportionnelle du prix, par dérogation
                    expresse aux dispositions des articles 1221, 1222 et 1223 du Code civil.
                </p>
            </section>

            <!-- Article 11 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 11 - RESPONSABILITÉ DU PRESTATAIRE</h3>
                <p class="text-text mb-2">
                    Le Prestataire est tenu à une obligation de moyens au titre de la fourniture des Services.
                </p>
                <p class="text-text mb-2">
                    Chaque Client déclare être informé des contraintes et des limites des réseaux Internet et ne pourra
                    en aucun cas rechercher la responsabilité du Prestataire au titre de dysfonctionnements dans l'accès
                    aux Services, des vitesses d'ouverture et de consultation des pages des Services, de
                    l'inaccessibilité temporaire ou définitive des Services ou de l'utilisation frauduleuse par des
                    Clients ou des tiers du Site.
                </p>
                <p class="text-text mb-2">
                    La responsabilité du Prestataire ne saurait davantage être engagée :
                </p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>en cas de manquement à une quelconque obligation résultant d'un cas fortuit ou d’un événement de
                        force majeure au sens de l’article 1218 du Code Civil, y compris, mais sans y être limités, des
                        événements imprévisibles tels que grèves, arrêts de travail, troubles sociaux, fermetures
                        d’usines, inondations, incendies, défaut de production ou de transport non-consécutif à son fait
                        personnel, rupture d’approvisionnement, guerres, émeutes, insurrections et plus généralement
                        toute circonstance ou événement empêchant la Société d’exécuter convenablement ses obligations ;
                    </li>
                    <li>dans le cas où les informations, données, instructions, directives, matériels ou supports
                        communiqués par le Client sont erronés ou incomplets, et plus généralement dans le cas où
                        l’inexécution ou l’exécution défectueuse des Services résulte en tout ou partie du comportement,
                        d’un manquement ou d’une carence du Client ;
                    </li>
                    <li>dans le cas où certains services ou fonctionnalités ne seraient pas accessibles sur le Site en
                        raison d’une désactivation par un Client des cookies via l’interface du logiciel de navigation ;
                    </li>
                    <li>dans le cas où les fonctionnalités du Site s'avéreraient incompatibles avec certains équipements
                        et/ou fonctionnalités du matériel informatique d’un Client.
                    </li>
                </ul>
                <p class="text-text mb-2">
                    Chaque Client est par ailleurs responsable des contenus et informations importés, stockés et/ou
                    publiés sur le Site et s’engage à n’employer aucune mesure technique de nature à permettre le
                    contournement des mesures techniques de protection mises en place par le Prestataire en vue d’éviter
                    toute utilisation frauduleuse du Site et des Services.
                </p>
                <p class="text-text mb-2">
                    Chaque Client prend également sous sa seule responsabilité l’ensemble des mesures de nature à
                    assurer l’intégrité et la sauvegarde de l’ensemble de ses données, fichiers et documents et renonce
                    à rechercher la responsabilité du Prestataire en cas de dommages survenus aux données, fichiers ou à
                    tout autre document qu’il aurait pu confier au Prestataire dans le cadre de l’utilisation du Site
                    et/ou des Services.
                </p>
                <p class="text-text mb-2">
                    Plus généralement, chaque Client s’engage par ailleurs à garantir le Prestataire de toute
                    réclamation, revendication, ou opposition et plus généralement de toute procédure qui serait formée
                    à son encontre à raison de l’utilisation qui aurait été faite par le Client du Site ou des Services.
                </p>
                <p class="text-text mb-2">
                    En tout état de cause, le Prestataire n’encourt aucune responsabilité au titre de tous dommages ou
                    préjudices indirects ou immatériels tels que préjudice financier, perte de chance, perte de profit,
                    perte de contrat, perte de commande, perte de clientèle, perte d’exploitation, préjudice ou trouble
                    commercial ou préjudice d’image, qui pourraient résulter de la fourniture défectueuse ou de
                    l’absence de fourniture des Services.
                </p>
                <p class="text-text mb-2">
                    La responsabilité du Prestataire ne peut excéder un montant égal au prix hors taxes perçu auprès du
                    Client au titre de la fourniture des Services au cours des douze (12) derniers mois.
                </p>
                <p class="text-text mb-2">
                    Conformément aux dispositions de l’article 2254 du Code Civil, toute action judiciaire d’un Client à
                    l’égard du Prestataire est atteinte par la prescription à l’expiration d’une durée d’un (1) an
                    suivant la date à laquelle le Client concerné a eu connaissance ou est présumé avoir eu connaissance
                    du fait dommageable.
                </p>
            </section>

            <!-- Article 12 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 12 – SYSTÈMES D’ENREGISTREMENT</h3>
                <p class="text-text mb-2">
                    Les registres informatisés, conservés dans les systèmes informatiques du Prestataire et de ses
                    partenaires dans des conditions raisonnables de sécurité, seront considérés comme les preuves des
                    communications et actions des Clients et du Prestataire. L’archivage de ces éléments est effectué
                    sur un support fiable et durable de manière à correspondre à une copie fidèle et durable au sens de
                    la réglementation applicable.
                </p>
                <p class="text-text mb-2">
                    Chaque Client reconnaît la valeur de preuve des systèmes d’enregistrement automatiques du Site et
                    déclare renoncer à les contester en cas de litige.
                </p>
            </section>

            <!-- Article 13 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 13 – DONNÉES PERSONNELLES</h3>
                <p class="text-text mb-2">
                    Pour davantage d’informations concernant l’utilisation de données à caractère personnel par le
                    Prestataire, veuillez lire attentivement la Charte sur le respect de la vie privée (la « Charte »).
                    Vous pouvez à tout moment consulter cette Charte sur le Site.
                </p>
            </section>

            <!-- Article 14 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 14 – LIENS HYPERTEXTES</h3>
                <p class="text-text mb-2">
                    Les liens hypertextes disponibles sur le Site peuvent renvoyer vers des sites tiers ou partenaires.
                    Ils sont fournis uniquement pour la convenance du Client, afin de faciliter l’utilisation des
                    ressources disponibles sur l’Internet. Si le Client utilise ces liens, il quittera le Site et
                    acceptera alors d’utiliser les sites tiers à ses risques et périls ou le cas échéant conformément
                    aux conditions qui les régissent.
                </p>
                <p class="text-text mb-2">
                    En tout état de cause, l’existence d’un lien hypertexte vers le Site en provenance d’un site tiers
                    ou sur le Site vers un site tiers ou de partenaire ne saurait engager la responsabilité du
                    Prestataire à quelque titre que ce soit et notamment quant à la disponibilité, aux contenus et aux
                    produits et/ou services disponibles sur ou à partir de ce site tiers ou partenaire.
                </p>
                <p class="text-text mb-2">
                    Le Client n’est pas autorisé à créer sur un site tiers un ou plusieurs liens hypertextes reliant à
                    la page d’accueil du Site ou vers sa page profil, sauf autorisation préalable et écrite du
                    Prestataire.
                </p>
            </section>

            <!-- Article 15 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 15 – PROPRIÉTÉ INTELLECTUELLE</h3>
                <p class="text-text mb-2">
                    Le Prestataire est seul titulaire de tous les contenus présents sur le Site, notamment et sans
                    limitation, tous textes, fichiers, images animées ou non, photographies, vidéos, logos, dessins,
                    modèles, logiciels, marques, identité visuelle, base de données, structure du Site et tous autres
                    éléments de propriété intellectuelle et autres données ou informations qui sont protégés par les
                    lois et règlements français et internationaux relatifs notamment à la propriété intellectuelle.
                </p>
                <p class="text-text mb-2">
                    En conséquence, aucun des contenus du Site ne pourra en tout ou partie être modifié, reproduit,
                    copié, dupliqué, vendu, revendu, transmis, publié, communiqué, distribué, diffusé, représenté,
                    stocké, utilisé, loué ou exploité de toute autre manière, à titre gratuit ou onéreux, par un Client
                    ou par un tiers, quel que soient les moyens et/ou les supports utilisés, qu’ils soient connus ou
                    inconnus à ce jour, sans l’autorisation préalable et écrite du Prestataire, et le Client est seul
                    responsable de toute utilisation et/ou exploitation non autorisée.
                </p>
                <p class="text-text mb-2">
                    En outre, toute extraction, intégration, compilation, ou utilisation à des fins commerciales
                    d’informations contenues dans les bases de données accessibles sur le Site, ainsi que toute
                    utilisation de logiciels, robots, systèmes d’exploration de données et autres outils de collecte de
                    données est strictement interdite aux Clients.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire concède toutefois aux Clients, sous réserve du respect par ces derniers des présentes
                    Conditions Générales, un droit non exclusif et incessible d’accéder aux contenus présents sur le
                    Site dont il détient la pleine propriété, de les télécharger et de les imprimer dans le cadre d’une
                    utilisation personnelle et non commerciale.
                </p>
            </section>

            <!-- Article 16 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 16 – DURÉE – SUSPENSION - RÉSILIATION</h3>
                <p class="text-text mb-2">
                    En cas de vente ponctuelle ou en application de conditions particulières, les présentes Conditions
                    Générales sont conclues pour la durée de fourniture des Services, telle que mentionnée le cas
                    échéant dans des conditions particulières ou dans le bon de commande.
                </p>
                <p class="text-text mb-2">
                    En cas de vente à exécution successive, les présentes Conditions Générales sont conclues pour une
                    durée initiale de 1 an. À défaut de dénonciation des présentes Conditions Générales dans un délai de
                    12 mois précédant le terme de cette durée initiale, la fourniture des Services et les Conditions
                    Générales sont tacitement reconduits pour une nouvelle période d’une durée équivalente à la durée
                    initiale, aux conditions tarifaires en vigueur à la date de la reconduction.
                </p>
                <p class="text-text mb-2">
                    Le Prestataire se réserve le droit de suspendre l’accès d’un Client au Site et aux Services de façon
                    permanente ou de façon temporaire, en cas de manquement par ledit Client à ses obligations résultant
                    des présentes Conditions Générales.
                </p>
                <p class="text-text mb-2">
                    Par ailleurs, le Prestataire ou le Client pourra résilier les Conditions Générales de plein droit de
                    manière anticipée par l’envoi d’une notification écrite :
                </p>
                <ul class="list-disc list-inside text-text mb-2">
                    <li>en cas de survenance d’un cas de force majeure tel que visé à l’article 11 ci-avant ;</li>
                    <li>après avoir notifié l’autre partie en cas de manquement grave de celle-ci à ses obligations ou
                        au titre des lois et règlements applicables, auquel il n’aurait pas été remédié dans un délai de
                        quinze (15) jours (lorsqu’il peut être remédié à ce manquement) suivant notification écrite
                        indiquant la nature du manquement et la nécessité d’y remédier.
                    </li>
                </ul>
            </section>

            <!-- Article 17 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 17 – CONFIDENTIALITÉ</h3>
                <p class="text-text mb-2">
                    Pendant la durée des présentes, chaque partie pourra prendre connaissance ou recevoir des
                    informations, documents et/ou données confidentiels à propos de l’autre partie. De ce fait, chaque
                    partie s’engage, tant en son nom qu’au nom de ses préposés pour lesquels elle se porte fort, à
                    préserver la stricte confidentialité de toutes les informations, documents et/ou données
                    confidentiels de toute nature en rapport avec les résultats, l’activité ou la clientèle de l’autre
                    partie ou toute information reçue ou obtenue d’une partie dans le cadre des relations contractuelles
                    établies.
                </p>
                <p class="text-text mb-2">
                    Le présent engagement de confidentialité des parties est valable, tant pour la durée des présentes
                    que pendant une durée de deux (2) ans suivant leur expiration ou résiliation.
                </p>
            </section>

            <!-- Article 18 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 18 – NOTIFICATIONS</h3>
                <p class="text-text mb-2">
                    Toute notification ou convocation écrite requise ou permise en vertu des stipulations des présentes
                    sera valablement effectuée si elle est adressée par lettre remise en main propre ou par porteur
                    contre reçu de livraison, par courrier recommandé avec avis de réception, ou par courrier
                    électronique (sauf en cas de résiliation des présentes), adressé aux coordonnées de la partie
                    concernée, chaque partie élisant domicile en son siège social.
                </p>
                <p class="text-text mb-2">
                    Tout changement de coordonnées d’une partie pour les besoins des présentes devra être notifié à
                    l’autre partie selon les modalités prévues ci-dessus.
                </p>
                <p class="text-text mb-2">
                    Les notifications adressées en mains propres ou par porteur seront présumées avoir été faites à leur
                    date de remise au destinataire, telle que attestée par le reçu de livraison. Les notifications
                    faites par courrier recommandé avec avis de réception seront présumées avoir été faites à la date de
                    leur première présentation à l'adresse du destinataire. Les notifications faites par courrier
                    électronique seront présumées avoir été faites à la date d'envoi du courrier électronique.
                </p>
            </section>

            <!-- Article 19 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 19 – AUTONOMIE ET ABSENCE DE RENONCIATION</h3>
                <p class="text-text mb-2">
                    Si l'une quelconque des stipulations des présentes Conditions générales était déclarée nulle ou
                    inapplicable pour quelque cause que ce soit en application d'une loi, d'un règlement ou à la suite
                    d'une décision de justice devenue définitive, elle serait réputée non écrite et les autres
                    stipulations resteront en vigueur.
                </p>
                <p class="text-text mb-2">
                    Le fait pour le Prestataire de ne pas se prévaloir à titre temporaire ou permanent d’une ou de
                    plusieurs stipulations des Conditions Générales n’emportera en aucun cas renonciation.
                </p>
            </section>

            <!-- Article 20 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 20 – MODIFICATION</h3>
                <p class="text-text mb-2">
                    Le Prestataire se réserve le droit de modifier à tout moment et sans préavis le contenu ou la
                    localisation du Site, les Services et les présentes Conditions Générales.
                </p>
                <p class="text-text mb-2">
                    Toute utilisation du Site ou des Services consécutive à une modification apportée aux Conditions
                    Générales emportera acceptation par chaque Client desdites modifications. La version la plus récente
                    et en vigueur des Conditions Générales sera toujours disponible à l’adresse suivante : <a
                            href="{{ route('cgs') }}" class="text-primary underline" target="_blank"
                            rel="noopener noreferrer">{{ route('cgs') }}</a>.
                </p>
                <p class="text-text mb-2">
                    Lorsque les modifications apportées aux Conditions Générales seront considérées par comme
                    substantielles, celles-ci seront portées à la connaissance des Clients par courrier électronique et
                    devront faire l’objet d’une acceptation par ces derniers lors de leur prochaine connexion sur le
                    Site.
                </p>
            </section>

            <!-- Article 21 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 21 – LITIGES</h3>
                <p class="text-text mb-2">
                    Les litiges qui pourraient survenir dans le cadre des relations contractuelles établies entre le
                    Client et le Prestataire devront être résolus, dans la mesure du possible, de manière amiable.
                </p>
                <p class="text-text mb-2">
                    À défaut de règlement amiable dans un délai d’un mois à compter de la saisine de l’une des parties,
                    tous les litiges auxquels les Conditions Générales pourraient donner lieu, concernant tant leur
                    validité, interprétation, exécution, résiliation, leurs conséquences et leurs suites, seront soumis
                    au tribunal de Paris.
                </p>
            </section>

            <!-- Article 22 -->
            <section class="mb-6">
                <h3 class="text-xl font-bold text-accent mb-2">Article 22 – DROIT APPLICABLE et LANGUE DU CONTRAT</h3>
                <p class="text-text mb-2">
                    Les présentes Conditions Générales et les opérations qui en découlent sont régies et soumises au
                    droit français. Elles sont rédigées en langue française. En cas de traduction en une ou plusieurs
                    langues étrangères, seul le texte français fera foi en cas de litige.
                </p>
            </section>

        </div>
    </div>
@endsection
