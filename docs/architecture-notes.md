# Fullstack Development – Architektur-Notizen

## Aktueller Stand
Ich habe lange nicht an diesem Projekt arbeitet. Jetzt habe ich noch mal mit Perplexity geredet und ich hatte zuvor mit ihm eine andere Idee ausarbeitet. Ich versuche mir Überblick zu verschaffen.

## mu-plugins

- `fsd-portfolio.php`
    - Registriert CPTs: instructor, project, source
    - Baut `fsd_portfolio_index` als site_transient
    - `fsd_get_portfolio_index()` liefert zentralen Index für Navigation + Blöcke

## fullstack-navigation (Plugin)

- `class-navigation-service.php`
    - Liest statische Links (Impressum, Datenschutz, ...) aus eigener Tabelle
    - Liest dynamische Teile (Dozenten, Quellen, Projekte) aus `fsd_get_portfolio_index()`
    - Wird für Header- und Footer-Navigation genutzt (netzwerkweit)

## fullstack-blocks

- Dynamische Blöcke:
    - `fsd/instructor-card`
    - `fsd/project-card`
    - `fsd/source-card`
- Alle Blöcke lesen Relationen aus `fsd_get_portfolio_index()`, keine eigenen Loops.