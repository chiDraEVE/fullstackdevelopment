[../README.md](../README.md)

# Fullstack Theme – Dokumentation
[Wann theme.json und wann SASS?](#-wann-themejson-und-wann-sass) \
[Theme-Konfiguration (theme.json)](#-theme-konfiguration-themejson) 

## Überblick

Das Fullstack Theme ist ein minimalistisches, modernes WordPress-Theme, das speziell für Entwickler und Designer entwickelt wurde. Es basiert auf den neuesten WordPress-Technologien und bietet eine solide Grundlage für die Erstellung von ansprechenden und funktionalen Websites.

## Getting Started

## 💡 Wann theme.json und wann SASS?

Als Faustregel enthält die `theme.json` alles, was Teil des globalen Designsystems ist und im Block-Editor verfügbar sein soll:

- Farben und Farbpaletten
- Schriftarten und Typografie
- Abstände und Layout-Vorgaben
- Globale Styles
- Block-spezifische Standardwerte
- Template Parts und Design Tokens

SASS/CSS wird dagegen für konkrete Implementierungen und Komponenten verwendet:

- Layouts (Grid, Flexbox, Positionierung)
- Navigationen, Header und Footer
- Eigene Blöcke und Komponenten
- Animationen und Hover-Effekte
- Responsive Anpassungen
- Komplexe Selektoren und Zustände

**Merksatz:**  
`theme.json` beschreibt **was das Designsystem kann**, SASS beschreibt **wie die Website umgesetzt wird**.

## 🎨 Theme-Konfiguration (theme.json)

Die theme.json ist die zentrale Design- und Konfigurationsdatei des WordPress-Block-Themes. Sie definiert globale Designsysteme wie Farben, Typografie, Abstände sowie Block-Styles und ersetzt viele klassische PHP-/CSS-Konfigurationen.

Sie bildet damit die Single Source of Truth für das Designsystem des Themes.
___
### 🎯 Überblick

Dieses Theme definiert:

[🎨 Farbpalette (Primary, Secondary, Ternary, Greyscale)](#-farbpalette)\
[🌈 Gradient-Systeme für Hero- und Overlay-Effekte](#-gradients)\
[🔤 Mehrere Font-Familien (Body, Heading, Code, Handwritten)](#-typografie)\
[📏 Globale Spacing- und Einheitssysteme](#-layout--spacing)\
[🧱 Block-spezifische Styles (z. B. Paragraph, Code, Site Title)](#-block-styles)\
[🎛️ Custom CSS für Feinjustierungen](#-custom-css)\
[🧩 Template Parts (Header / Footer Varianten)](#-template-parts)\
[🧠 Architektur-Notizen zur Rolle der theme.json](#-architektur-notiz)


### 🎨 Farbpalette
Das Theme basiert auf einem erweiterten Farbsystem mit semantischen Farben:

    Primärfarben

    primary: #991D0F (Penn Red) 
    primary-light: #CC7265
    primary-dark: #660E08

    Sekundärfarben
    secondary: #1152B2 (Sapphire)
    secondary-light: #7FE1FF
    secondary-dark: #0A3674

    Tertiärfarbe
    ternary: #FF8432 (Pumpkin)
    inkl. Light/Dark Varianten

    Neutrale Farben
    grey Skala für UI-Elemente
    light / dark als Basis-Hintergründe

👉 Ziel: klare Trennung zwischen UI-Akzenten und Lesefarben

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🌈 Gradients

Das Theme definiert wiederverwendbare Gradient-Varianten:

    Primary Overlay
    Verlauf von Primary → Primary Dark
    für Hero-Overlays / Akzentflächen
    Hero Video Overlay
    transparenter Verlauf auf Dark
    für Lesbarkeit über Videos
    Secondary Soft
    diagonaler Farbverlauf aus Secondary-Tönen
    für Cards / Highlights


<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🔤 Typografie
Font-System

Es gibt vier definierte Schriftfamilien:

    Body: Libre Franklin (Sans-Serif)
    für Fließtext und UI
    Heading: Crimson Pro (Serif)
    für Headlines
    Code: Cousine (Monospace)
    für Code-Blöcke
    Handwritten: Dancing Script
    für Akzent-/Brand-Elemente (z. B. Logo, Site Title)

#### 👉 Jede Schrift ist mit fontFace lokal eingebunden (self-hosted WOFF2/WOFF)

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 📏 Layout & Spacing
    blockGap: aktiviert (automatischer Abstand zwischen Blöcken)
    Unterstützte Einheiten:
    px, rem, vh, vw, %
    Margin & Padding global aktiv

#### 👉 Ziel: flexible, responsive Layoutkontrolle direkt im Editor

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🧱 Block Styles (core blocks)

Das Theme überschreibt gezielt Standard-Blocks:

```json
core/site-title
Font: Handwritten
Gewicht: 700
core/code
Font: Cousine
Gewicht: 500
core/paragraph
Textfarbe: light-grey
Linkfarbe: light-grey
Font-size: 1rem
core/verse
Handwritten Font
leichtes Gewicht (500)
```

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🌍 Global Styles

##### Farben
```json
Background: dark
Text: light-grey
```
##### Typografie
```json
Default Font: Body (Libre Franklin)
Base Font Size: 1rem
```
#### 🧩 Element Styles
Headings
H1: Handwritten + Bold
generelle Headings: Crimson Pro
Buttons
Background: Primary
Text: Light Grey
Bold (700)
Links
Standardfarbe: Ternary (Akzentfarbe)

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🧾 Custom CSS
```css

Zusätzlich enthält die theme.json ein kleines Custom CSS Snippet:

hr {
border: none;
height: 1px;
background: linear-gradient(
to right,
transparent,
rgba(255, 255, 255, 0.15),
transparent
);
margin: 2.5rem 0;
}
```
👉 sorgt für dezente, moderne Trennerlinien

Habe ich nach SASS ausgelagert, um die theme.json übersichtlich zu halten.



<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🧩 Template Parts

Das Theme definiert wiederverwendbare Layout-Bausteine:

    Header
        header
        header-mit-video
    Footer
        footer

##### 👉 Diese Parts sind im Site Editor austauschbar und ermöglichen flexible Layouts ohne Codeänderung.

<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___
### 🧠 Architektur-Notiz

Die theme.json übernimmt in diesem Theme die Rolle von:
- Design Tokens (Farben, Fonts, Spacing)
- Global Styles (Defaults für UI)
- Block Overrides
- Teilweise Layout-Konfiguration

##### 👉 Sie ist bewusst so gestaltet, dass möglichst wenig zusätzliches CSS nötig ist.


<div align="right">

[theme.json](#-überblick) |
[nach oben](#-fullstack-theme--dokumentation)

</div>

___

## Templates und Parts

## Video-Header