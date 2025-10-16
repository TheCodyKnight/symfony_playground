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

Nützliche Composer-Skripte

- `composer run-script auto-scripts` — führt die in `composer.json` definierten Auto-Scripts aus (z. B. `cache:clear`).

Hinweise

- Wenn du die Symfony CLI nicht installiert hast, funktioniert der PHP-Builtin-Server ebenfalls für Entwicklungszwecke.
- Für weitere Entwicklungsschritte kannst du Controller in `src/Controller/` anlegen und Routen per Attribut-Annotation (`#[Route('/...')]`) definieren.

Viel Erfolg beim Entwickeln!
