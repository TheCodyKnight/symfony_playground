# Symfony Beispielprojekt

Dieses Repository enthält ein minimales Symfony-7.3-Projekt (Skeleton) mit einer Beispielroute `/hello`.

Kurzüberblick

- PHP-Version: >= 8.2
- Composer erforderlich
- Symfony CLI optional (macht das lokale Starten komfortabler)

Vorbereitung

1. Abhängigkeiten installieren

```powershell
# Im Projektverzeichnis ausführen
composer install
```

2. Umgebungsvariablen prüfen

Kopiere bei Bedarf `.env` nach `.env.local` und passe Werte an (z. B. APP_ENV, APP_SECRET).

Projekt starten

Mit der Symfony CLI (empfohlen, wenn installiert):

```powershell
symfony server:start --dir=public
```

Oder mit PHP Built-in Server:

```powershell
# Im Projektstamm ausführen
php -S localhost:8000 -t public
```

Test der Beispielroute

Öffne im Browser oder mit curl:

http://localhost:8000/hello

Dies zeigt eine einfache HTML-Antwort mit "Hello Symfony!".

Kontaktformular

Das Projekt enthält auch ein Kontaktformular unter `/contact`. Hier können Besucher:
- ihren Namen
- ihre E-Mail-Adresse
- und eine Nachricht eingeben

Die Eingaben werden validiert und bei erfolgreicher Übermittlung wird eine Bestätigungsnachricht angezeigt.

Nützliche Composer-Skripte

- `composer run-script auto-scripts` — führt die in `composer.json` definierten Auto-Scripts aus (z. B. `cache:clear`).

Hinweise

- Wenn du die Symfony CLI nicht installiert hast, funktioniert der PHP-Builtin-Server ebenfalls für Entwicklungszwecke.
- Für weitere Entwicklungsschritte kannst du Controller in `src/Controller/` anlegen und Routen per Attribut-Annotation (`#[Route('/...')]`) definieren.

Viel Erfolg beim Entwickeln!

Continuous Integration (GitHub Actions)
-------------------------------------

Eine einfache GitHub Actions CI ist im Workflow `.github/workflows/ci.yml` enthalten. Sie führt bei Pushes und Pull Requests gegen `main`/`master` die folgenden Schritte aus:

- Setzt PHP (Matrix 8.2, 8.3, 8.4)
- Installiert Composer-Abhängigkeiten
- Führt `php bin/phpunit` aus

Wenn du das Repository auf GitHub hostest, sollten die Tests bei jedem PR automatisch laufen.
