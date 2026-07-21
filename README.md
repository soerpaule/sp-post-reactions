# SP Post Reactions

SP Post Reactions erweitert phpBB 3.3 um moderne Reaktionen auf Beiträge.
Reaktionen werden per AJAX gesetzt, geändert oder entfernt, ohne die Seite neu zu laden.

## Funktionen

- Acht Reaktionen auf Beiträge
- AJAX-Aktualisierung ohne Seitenneuladen
- Benachrichtigungen für Beitragsautoren
- Anzeige der reagierenden Benutzer
- Vier integrierte Symbolsets
- Verwaltung eigener Symbolsets im ACP
- Persönliche Symbolset-Auswahl im UCP
- Responsive Darstellung für Desktop und Mobilgeräte
- Deutsche und englische Sprachdateien

## Voraussetzungen

- phpBB 3.3.x
- PHP 7.2 oder neuer

## Neuinstallation

1. Den Ordner `soerpaule/sppostreaction` nach `ext/soerpaule/sppostreaction` kopieren.
2. Im ACP unter **Anpassen → Erweiterungen verwalten** die Erweiterung aktivieren.
3. Unter **Erweiterungen → SP Post Reactions** die Symbolsets und Einstellungen prüfen.
4. Bei Darstellungsproblemen den phpBB-Cache leeren.

## Wechsel von TF Post Reactions

Für bestehende Installationen von `soerpaule/tfpostreactions` kann die vorhandene
Reaktionstabelle weiterverwendet werden. Reaktionen, Einstellungen und persönliche
Symbolset-Auswahlen bleiben dabei erhalten.

Die alte Erweiterung darf vor dem Wechsel nur **deaktiviert** werden. Ihre Daten dürfen
nicht gelöscht werden. Der vollständige Ablauf steht in
`UPGRADE_FROM_TFPOSTREACTIONS.txt`.

## Support

- Website: https://ext.soerpaule.de
- GitHub: https://github.com/soerpaule/sp-post-reactions

## Lizenz

GPL-2.0-only
