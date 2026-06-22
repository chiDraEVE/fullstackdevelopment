[../README.md](../README.md)

# Fullstack Development – Architektur

## Ziel

Die Website dient nicht als klassischer Blog.

Stattdessen bildet sie ein Wissens- und Lernnetzwerk ab:

- Dozenten
- Quellen
- Projekte
- Blogartikel

Die Inhalte stehen über Relationen miteinander in Verbindung und können gegenseitig referenziert werden.

---

# Inhaltsmodell

## Instructor (Dozent)

Repräsentiert Personen, von denen Wissen stammt.

Beispiele:

- Kursleiter
- Autoren
- YouTuber
- Entwickler

Zusätzliche Metadaten:

- Homepage
- GitHub
- YouTube
- Instagram
- Facebook
- Berufsbezeichnung

---

## Source (Quelle)

Repräsentiert externe Lernressourcen.

Beispiele:

- Udemy-Kurse
- Bücher
- YouTube-Kanäle
- Dokumentationen
- Blogartikel

Relationen:

- gehört zu einem Instructor

Metadaten:

- Source URL

---

## Project (Projekt)

Repräsentiert praktische Umsetzungen.

Beispiele:

- Lernprojekte
- Experimente
- Kundenprojekte
- Portfolio-Projekte

Relationen:

- kann mehrere Sources referenzieren
- gehört indirekt zu einem Instructor über die verwendeten Sources

Metadaten:

- Projekt-Link
- Folgeprojekt

---

## Post (Blogartikel)

Normale WordPress-Beiträge.

Relationen:

- können auf Projects verweisen
- können auf Sources verweisen
- können auf Instructors verweisen

Ziel:

Dokumentation des Lernfortschritts und technischer Erkenntnisse.

---

# Taxonomien

## Technology

Beschreibt verwendete Technologien.

Beispiele:

- PHP
- WordPress
- React
- Docker
- Tailwind CSS

Verwendet von:

- Posts
- Projects
- Sources

---

## Project Type

Beschreibt die Art eines Inhalts.

Beispiele:

- Lernprojekt
- Udemy-Kurs
- Portfolio-Projekt
- Kundenprojekt
- Proof of Concept

Verwendet von:

- Projects
- Sources