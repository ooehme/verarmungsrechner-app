@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Erläuterung - Wie kann das sein?</h2>
    <h3>ERNEUERBARE ENERGIEN-GESETZ (EEG)</h3>
    <p>
        Das EEG trat im Jahr 2000 in Kraft und garantiert den Produzenten sog. grüner Energie eine feste Vergütung, auch wenn der Strom nicht zu marktfähigen Preisen zur Verfügung gestellt werden kann.
        Die praktischen Mehrkosten stiegen seitdem von 0,22ct/kWh auf 11,48ct/kWh, die vor allem von privaten Verbrauchern getragen.
        Ohne die Bevorzugung erneuerbarer Energien wären die Stromkosten für Verbraucher herkömmlichen Stroms etwa ein Drittel niedriger.
    </p>

    <h3>CO2-STEUER</h3>
    <p>
        Im Rahmen des Klimaprogramm darf sich der Staat bis 2023 über Mehreinnahme von fast 19 Milliarden Euro freuen, die insbesondere von Verbrauchern von Diesel, Benzin, Heizöl und Erdgas getragen werden.
        Schrittweise wird der Preis, den Produzenten für jede Tonne Co2, die sie ausstoßen staatlich angehoben. 2026 soll dieser sich dann zwischen 55€ und 65€ stabilisieren (der Verarmungsrechner geht vom Mittelwert 60€) aus.
    </p>

    <h3>WEITERFÜHRENDE INFOS</h3>
    <ul>
        <li>Download Co2-Infos (PDF)</li>
        <li>Download EEG-Infos (PDF)</li>
        <li>Download Darmstädter Manifest (PDF)</li>
    </ul>

    <h2>QUELLEN</h2>
    <h3>STROM</h3>
    <p>
        Zusammensetzung des Strompreises:
        https://www.bdew.de/media/documents/BDEW-Strompreisanalyse_no_halbjaehrlich_Ba_online_10062021.pdf
    <br/>
        Mehrwertsteuer auf 7 Prozent für Strom (Seite 2),
        Stromsteuer auf 0,01 (Seite 8, 2c):
        https://dserver.bundestag.de/btd/19/206/1920679.pdf
    </p>
    
    </h3>HEIZUNG & AUTO</h3>
    <p>
        <b>co2-Emmissionspreis (EURO/Tonne):</b>
        https://www.bmwi.de/Redaktion/DE/Pressemitteilungen/2020/20200520-bundeskabinett-beschliesst-hoeheren-co2-preis.html
    </p>
    <p>
    <b>Grundpreise 2020 (ungefähr, haben keinen Einfluss auf die Mehrkosten):</b>
    <ul>
        <li>
            Benzin: der gemittelte Monatsdurchschnitt Dezember 2020 für Benzin der Marken: Super E10, Super plus und Super Extra für 2020 auf clever-tanken.de
        </li>
        <li>
            Diesel: gemittelter Monatsdurchschnitt Dezember 2020 auf clever-tanken.de
        </li>
        <li>
            Heizöl:Heizölchart Dezember 2020 (fastenergy)
        </li>
        <li>
            Erdgas: Vergleichsportal Verivox Erdgaspreise in 2020
        </li>
    </ul>
    </p>
    <p>
        <b>Aufpreise:</b><br/>
        Tabelle der co2 Preise bmu (Umweltministerium) 21.12.2020, für 2026 wurde mit dem Wert 60 gerechnet  
    </p>
</div>
@endsection
