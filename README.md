# Come preparare il tuo tema all'avvento di Gutenberg

![Prepara il tuo tema a Gutenberg](img/repo-image.jpg)

Questo repository è stato creato come base di partenza per il workshop al [WordCamp Torino 2018](https://2018.torino.wordcamp.org/) e si basa sulla struttura del tema di partenza [_s](http://underscores.me/).

A differenza dell'archivio `.zip` condiviso durante il workshop questo tema è stato integrato con [WPGulp](https://github.com/ahmadawais/WPGulp) che permette di compilare il codice Sass automaticamente, di aggiornare il browser al salvataggio di un file e altre interessanti caratteristiche che ti invito a scoprire sulla pagina del progetto.

Puoi trovare le slide e altre informazioni a questo link: [skillsandmore.org/gutenberg-theme](https://skillsandmore.org/gutenberg-theme).

## Come preparare il tema
Una volta scaricato il repository è necessario installare tutte le dipendenze di Node.js necessarie al corretto funzionamento di Gulp.

Per fare questo aprire la cartella del tema all'interno del proprio terminale e lanciare

```
$ npm install
```

Una volta che il processo di installazione verrà completato sarà possibile avviare Gulp con il seguente comando:

```
$ gulp
```

**Nota bene:** lo script è configurato per aprire automaticamente il browser [Firefox Developer Edition](https://www.mozilla.org/en-US/firefox/developer/) ma se non lo vuoi usare l'unica cosa da fare è modificare il file `gulpfile.js` al rigo `151` rimuovendo la seguente stringa.

```javascript
browser: 'FirefoxDeveloperEdition'
```

Per qualsiasi problema o dubbio non esitate a pubblicare una issue e ricorda che se il repo o il workshop ti sono stati utili puoi mostrare il tuo apprezzamento (e seguire gli aggiornamenti) aggiungendo la tua stella!