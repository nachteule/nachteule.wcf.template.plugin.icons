icons-TemplatePlugin
===================

Dieses Paket installiert ein weiteres TemplatePlugin namens {icons},
welches es erlaubt mehrere Icons anzugeben. Die Icons werden mit
Komma voneinander getrennt und das erste, vorhandene wird angezeigt.

Verwendungszweck
----------------

Durch dieses Plugin kann man "allgemeine" Icons wie messageM.png nutzen,
aber es den Endanwender dennoch durch ein eigenes Iconset ersetzen lassen,
ohne dass Templates gepatcht werden müssen.

### Beispiel

```
{icons}newsL.png,messageL.png{/icons}
```

Ist eine newsL.png in einem Icon-Verzeichnis vorhanden, wird sie angezeigt,
ansonsten messageL.png.
