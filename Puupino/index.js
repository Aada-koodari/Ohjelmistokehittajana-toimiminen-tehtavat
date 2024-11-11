function laskeTilavuus() {
    // Haetaan käyttäjän syöttämät arvot
    let pituus = parseFloat(document.getElementById('pituus').value);
    let korkeus = parseFloat(document.getElementById('korkeus').value);
    let syvyys = parseFloat(document.getElementById('syvyys').value);
    
    // Oletetaan, että puita on paljon pinossa
    let puidenMaara = Math.floor(pituus * korkeus * 10); // Arvio puiden määrästä

    // Lasketaan puiden tilavuus satunnaisilla halkaisijoilla
    let puidenTilavuus = 0;

    for (let i = 0; i < puidenMaara; i++) {
        // Satunnaislukugeneraattori puun paksummalle päälle (11-25 cm)
        let halkPaksumpi = getRandom(11, 25);
        // Satunnaislukugeneraattori puun ohuemmalle päälle (5-10 cm)
        let halkOhuempi = getRandom(5, 10);

        // Lasketaan puun tilavuus, käyttäen kartion tilavuuskaavaa (V = 1/3 * π * r^2 * korkeus)
        let puunKorkeus = syvyys;
        let tilavuus = (1/3) * Math.PI * puunKorkeus * ((halkPaksumpi / 2)**2 + (halkPaksumpi / 2) * (halkOhuempi / 2) + (halkOhuempi / 2)**2);
        puidenTilavuus += tilavuus;
    }

    // Lasketaan yksinkertainen tilavuus vain pituuden ja korkeuden perusteella
    let yksinkertainenTilavuus = pituus * korkeus * syvyys;

    // Lasketaan ero
    let ero = puidenTilavuus - yksinkertainenTilavuus;

    // Näytetään tulos
    document.getElementById('tulos').innerHTML = `
        <p>Puut ovat lieriötä: ${puidenTilavuus.toFixed(2)} m³</p>
        <p>Puut ovat kuutioita: ${yksinkertainenTilavuus.toFixed(2)} m³</p>
        <p>Ero: ${ero.toFixed(2)} m³</p>
    `;
}

// Funktio satunnaislukujen generointiin
function getRandom(min, max) {
    return Math.random() * (max - min) + min;
}
