<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kerbal Space Program - Informationssida</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Kerbal Space Program</h1>
        <p>
            Kerbal Space Program (KSP) är ett spel där du bygger raketer, planerar uppdrag
            och försöker få dina små gröna kerbals att överleva rymdäventyr.
        </p>
    </header>

    <main>
        <section>
            <button id="toggleInfoBtn">Visa/dölj extra info</button>
            <p id="extraInfo">
                Tips: Om raketen wobblar mycket kan du testa fler stabilisatorer, mindre payload,
                eller autostrut (beroende på version/moddar).
            </p>

        
            <h2>Vad gör spelet unikt?</h2>
            <p>
                KSP kombinerar kreativ byggnad med grundläggande rymdfysik. Du får testa,
                krascha, förbättra och till slut lyckas (förhoppningsvis) med uppskjutningar.
            </p>
        </section>

    <section>
        <h2>Vanliga mål i KSP</h2>
        <ul>
            <li>Bygga en stabil raket som faktiskt lyfter</li>
            <li>Sätta satelliter i omloppsbana</li>
            <li>Landning på Mun och Minmus</li>
            <li>Utforska andra planeter och månar</li>
        </ul>
        <div class="counterBox">
            <p>Antal uppskjutningsförsök: <span id="launchCount">0</span></p>
            <button id="addLaunchBtn">+1 försök</button>
        </div>
    </section>

    <section>
        <h2>Lär dig mer</h2>
        <p>
            Officiell sida:
            <a href="https://www.kerbalspaceprogram.com/">
            kerbalspaceprogram.com
            </a>
        </p>

        <figure>
            <img src="ksp.jpg" alt="En raket" />
            <figcaption>En typisk uppskjutning i Kerbal Space Program.</figcaption>
        </figure>
        <figure>
            <img src="ksp2.jpg" alt="En annan raket" />
            <figcaption>En annan typ av uppskjutning i Kerbal Space Program.</figcaption>
        </figure>
    </section>
    </main>
    <footer>
        <p>&copy; Måns Jansson</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
