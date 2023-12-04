<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Stato Applicazione',
    'LBL_MODULE_NAME_SINGULAR' => 'Stato Applicazione',
    'LBL_MODULE_TITLE' => 'Stato Applicazione',
    'LBL_LOGFILE' => 'File di log',
    'LBL_BUCKET' => 'Secchio',
    'LBL_FLAG' => 'Flag',
    'LBL_LOGMETA' => 'Accedi a meta',
    'LBL_ERROR' => 'Errore:',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'I dati serializzati non potevano essere deserializzati.',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'I dati serializzati non potevano essere deserializzati perché contenenti riferimenti a oggetti o classi.',

    'LBL_SCAN_101_LOG' => '%s ha studio history',
    'LBL_SCAN_102_LOG' => '%s ha estensioni: %s',
    'LBL_SCAN_103_LOG' => '%s ha vardefs personalizzati',
    'LBL_SCAN_104_LOG' => '%s ha layoutdefs personalizzati',
    'LBL_SCAN_105_LOG' => '%s ha viewdefs personalizzati',

    'LBL_SCAN_201_LOG' => '%s non è un modulo stock',

    'LBL_SCAN_301_LOG' => '%s da eseguire come BWC',
    'LBL_SCAN_302_LOG' => 'Viste file sconosciute presenti - %s non è un modulo MB',
    'LBL_SCAN_303_LOG' => 'File modulo non vuoto %s - %s non è un modulo MB',
    'LBL_SCAN_304_LOG' => 'Unknown file %s - %s is not MB module',
    'LBL_SCAN_305_LOG' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_306_LOG' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_307_LOG' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_308_LOG' => 'Funzione HTML Vardef in %s',
    'LBL_SCAN_309_LOG' => 'Md5 errato per %s',
    'LBL_SCAN_310_LOG' => 'File Sconosciuto %s/%s',
    'LBL_SCAN_311_LOG' => 'Funzione HTML Vardef %s in modulo $module per il campo %s',
    'LBL_SCAN_312_LOG' => 'Vardef sbagliati - il tipo di campo "nome" è "%s" non valido, modulo - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'Estensione dir %s rilevata - %s non è modulo MB',
    'LBL_SCAN_314_LOG' => "Vardef errati - campo multienum '%s' con elenco opzioni chiavi '%s' contiene caratteri incompatibili - '{%s}' nel modulo %s",

    'LBL_SCAN_401_LOG' => 'Trovata inclusione file fornitore, per i file spostati al fornitore:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Modulo errato %s - non in beanList e non nel filesystem',
    'LBL_SCAN_403_LOG' => 'Inclusione di file specifici Sugar trovata per:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame detected',
    'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer detected',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s has custom views',
    'LBL_SCAN_407_LOG' => '%s has custom views',
    'LBL_SCAN_408_LOG' => 'Componenti azioni-creazione personalizzata trovati in %s. Questi componenti saranno copiati e modificati per estendere, invece, il componente crea durante l&#39;aggiornamento',
    'LBL_SCAN_409_LOG' => 'Vardefs non valida - "link_file" è stato disapprovato. La classe di collegamento specificata in "link_class" deve essere caricabile automaticamente',
    'LBL_SCAN_519_LOG' => 'Estensione dir %s trovata',
    'LBL_SCAN_518_LOG' => 'Incompatible module %s',
    'LBL_SCAN_410_LOG' => 'Campi Max - Trovati più di %s campi (%s) in %s',
    'LBL_SCAN_522_LOG' => 'Trovato &#39;get_subpanel_data&#39; con &#39;function:&#39; valore in %s',
    'LBL_SCAN_412_LOG' => 'Collegamento errato sotto-pannello %s in %s',
    'LBL_SCAN_413_LOG' => 'Unknown widget class detected: %s for %s',
    'LBL_SCAN_414_LOG' => 'Campi sconosciuti gestiti da CRYS-36, quindi qui non vengono effettuati ulteriori controlli',
    'LBL_SCAN_415_LOG' => 'File gancio errato in %s: %s',
    'LBL_SCAN_523_LOG' => 'Parametro By-ref nel file gancio %s funzione %s',
    'LBL_SCAN_417_LOG' => 'Modulo incompatibile %s',
    'LBL_SCAN_418_LOG' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_LOG' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_420_LOG' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_421_LOG' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_422_LOG' => 'Il modulo %s ha la definizione di un altro modulo %s nel file %s',
    'LBL_SCAN_525_LOG' => 'Funzione HTML Vardef in %s',
    'LBL_SCAN_423_LOG' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_424_LOG' => 'HTML inline trovato in %s on-line %s',
    'LBL_SCAN_425_LOG' => 'Trovato "echo" in %s on-line %s',
    'LBL_SCAN_426_LOG' => 'Trovato "print" in %s on-line %s',
    'LBL_SCAN_427_LOG' => 'Trovato "die/exit" in %s on-line %s',
    'LBL_SCAN_428_LOG' => 'Trovato "print_r" in %s on-line %s',
    'LBL_SCAN_429_LOG' => 'Trovato "var_dump" in %s on-line %s',
    'LBL_SCAN_430_LOG' => 'Trovato buffering di uscita (%s) in %s on-line %s',
    'LBL_SCAN_431_LOG' => 'Trovato modello Smarty personalizzato: "%s"',
    'LBL_SCAN_436_LOG' => 'Trovato modello PDF personalizzato: "%s"',
    'LBL_SCAN_437_LOG' => 'Modello Smarty incompatibile con la sintassi Smarty3: "%s"',
    'LBL_SCAN_438_LOG' => 'Trovato modello PDF personalizzato che non può essere convertito automaticamente nella sintassi Smarty3: "%s"',
    'LBL_SCAN_439_LOG' => 'Modello incompatibile con la sintassi di Smarty3, ignorato: "%s".',
    'LBL_SCAN_451_LOG' => 'Il codice AuthN è stato eliminato. Al suo posto, utilizzare \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. File che utilizzando codice eliminato: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Funzione Vardef HTML %s nel modulo %s per il campo %s',
    'LBL_SCAN_432_LOG' => 'Vardef sbagliati - il tipo di campo "nome" è "%s" non valido, modulo - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "Vardef errati - campo multienum '%s' con elenco opzioni chiavi '%s' contiene caratteri incompatibili - '{%s}' nel modulo %s",
    'LBL_SCAN_527_LOG' => "Il nome della tabella in bean %s non corrisponde all'attributo tabella in %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Il campo %s del modulo %s ha un valore display_default errato',
    'LBL_SCAN_529_LOG' => '%s: %s nel file %s on-line %s',
    'LBL_SCAN_530_LOG' => 'File personalizzato mancante: %s',
    'LBL_SCAN_531_LOG' => 'Driver di database obsoleto: %s',
    'LBL_SCAN_532_LOG' => 'A class in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_LOG' => 'A class in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_LOG' => 'Driver del database non supoportato: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Trovati file di ricerca Elastic personalizzati %s',
    'LBL_SCAN_434_LOG' => 'Si è riscontrato l&#39;uso delle funzioni array su $_SESSION nei file: %s',
    'LBL_SCAN_435_LOG' => 'La classe SugarSession è stata rimossa da API, utilizzare al suo posto Sugarcrm\Sugarcrm\Session\SessionStorage. File con codice obsoleto: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js POTREBBE contenere personalizzazioni che non sono compatibili con le nuove Offerte.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js POTREBBE contenere personalizzazioni che non sono compatibili con le nuove Offerte.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_563_LOG' => 'Uso di una personalizzazione di Monolog incompatibile: %s',
    'LBL_SCAN_564_LOG' => 'Uso di una funzionalità di DBAL obsoleta: %s',
    'LBL_SCAN_565_LOG' => 'Uso della proprietà di configurazione obsoleta $sugar_config[&#39;passwordHash&#39;]. A partire dalla versione 13.3 non sarà supportata: %s',
    'LBL_SCAN_566_LOG' => 'Uso della proprietà di configurazione non supportata $sugar_config[&#39;passwordHash&#39;]: %s',
    'LBL_SCAN_570_LOG' => 'Stato e tipo per e-mail non validi: stato=%s, tipo=%s',
    'LBL_SCAN_571_LOG' => 'Il file obsoleto ha delle personalizzazioni: %s',
    'LBL_SCAN_572_LOG' => 'Il file personalizzato ha un conflitto di nomi: %s',
    'LBL_SCAN_573_LOG' => 'Il file personalizzato della guida ha un conflitto di nomi: %s',
    'LBL_SCAN_574_LOG' => 'Sottopannello messaggi di posta elettronica esistente Directory personalizzata: %s',
    'LBL_SCAN_575_LOG' => 'Il sottopannello contatti per messaggi di posta elettronica deve essere modificato per utilizzare il sottopannello-per-email-archiviati-contatti: %s',
    'LBL_SCAN_576_LOG' => 'Rilevate personalizzazioni d&#39;interfaccia in: `%s`. Il risultato d&#39;interfaccia finale potrebbe non funzionare come atteso. Controllare le personalizzazioni d&#39;interfaccia.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Rilevata istruzione vietata in `%s`: %s',
    'LBL_SCAN_586_LOG' => 'FontAwesome è deprecato a partire dalla 11.2 e non sarà supportato nella 12.0. Utilizzo di FontAwesome rilevato in: %s',

    'LBL_SCAN_501_LOG' => 'File mancante: %s',
    'LBL_SCAN_502_LOG' => 'abbinamento errato md5 per %s, previsto %s',
    'LBL_SCAN_503_LOG' => 'Modulo personalizzato con lo stesso nome del nuovo modulo Sugar7: %s',
    'LBL_SCAN_504_LOG' => 'Tipo di campo mancante nel modulo %s: %s',
    'LBL_SCAN_505_LOG' => 'Cambiamento tipo in %s per il campo %s: da %s a %s',
    'LBL_SCAN_506_LOG' => '$this uso in %s',
    'LBL_SCAN_507_LOG' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_508_LOG' => 'HTML inline trovato in %s on-line %s',
    'LBL_SCAN_509_LOG' => 'Trovato "echo" in %s on-line %s',
    'LBL_SCAN_510_LOG' => 'Trovato "print" in %s on-line %s',
    'LBL_SCAN_511_LOG' => 'Trovato "die/exit" in %s on-line %s',
    'LBL_SCAN_512_LOG' => 'Trovato "print_r" in %s on-line %s',
    'LBL_SCAN_513_LOG' => 'Trovato "var_dump" in %s on-line %s',
    'LBL_SCAN_514_LOG' => 'Trovato buffering di uscita (%s) in %s on-line %s',
    'LBL_SCAN_515_LOG' => 'Errore script: %s',
    'LBL_SCAN_516_LOG' => 'File precedentemente rimossi trovati con riferimento in: %s',
    'LBL_SCAN_517_LOG' => 'Integrazione incompatibile - %s %s',
    'LBL_SCAN_540_LOG' => 'Reset dati integrazione incompatibile - %s %s',
    'LBL_SCAN_541_LOG' => 'Serializzazione SugarBPM non valida - %s serializzazioni non valide nella colonna %s della tabella %s:  %s.',
    'LBL_SCAN_542_LOG' => 'Utilizzo del campo SugarBPM non valido - %s campi non validi utilizzati in %s.',
    'LBL_SCAN_545_LOG' => 'SugarBPM ha parzialmente bloccato il gruppo campi - Campo %4$s bloccato nel gruppo %s nella definizione dei flussi %s per il modulo %s.',
    'LBL_SCAN_546_LOG' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_LOG' => 'Uso della firma rimossa &#39;resetLoadFlag&#39; in %s',
    'LBL_SCAN_548_LOG' => 'Uso del metodo sostituito &#39;initButtons&#39; in %s',
    'LBL_SCAN_549_LOG' => 'Uso della firma rimossa &#39;getField&#39; in %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'Istanza già aggiornata a Sugar 7',
    'LBL_SCAN_903_LOG' => 'Versione Upgrader non supportata. Installare il pacchetto SugarUpgradeWizardPrereq adeguato',
    'LBL_SCAN_904_LOG' => 'Sono stati valori NULL nelle stringhe moduleList. File: %s, Moduli: %s',
    'LBL_SCAN_999_LOG' => 'Errore sconosciuto, si prega di consultare il centro supporto',

    'LBL_SCAN_101_TITLE' => '%s ha studio history',
    'LBL_SCAN_102_TITLE' => '%s ha estensioni: %s',
    'LBL_SCAN_103_TITLE' => '%s ha vardefs personalizzati',
    'LBL_SCAN_104_TITLE' => '%s ha layoutdefs personalizzati',
    'LBL_SCAN_105_TITLE' => '%s ha viewdefs personalizzati',

    'LBL_SCAN_201_TITLE' => '%s non è un modulo stock',

    'LBL_SCAN_301_TITLE' => '%s da eseguire come BWC',
    'LBL_SCAN_302_TITLE' => 'Viste file sconosciute presenti - %s non è un modulo MB',
    'LBL_SCAN_303_TITLE' => 'File modulo non vuoto %s - %s non è un modulo MB',
    'LBL_SCAN_304_TITLE' => 'Unknown file %s - %s is not MB module',
    'LBL_SCAN_305_TITLE' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_306_TITLE' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_307_TITLE' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_308_TITLE' => 'Funzione HTML Vardef in %s',
    'LBL_SCAN_309_TITLE' => 'Md5 errato per %s',
    'LBL_SCAN_310_TITLE' => 'File Sconosciuto %s/%s',
    'LBL_SCAN_311_TITLE' => 'Funzione HTML Vardef %s in modulo $module per il campo %s',
    'LBL_SCAN_312_TITLE' => 'Vardef sbagliati - il tipo di campo "nome" è "%s" non valido, modulo - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'Estensione dir %s rilevata - %s non è modulo MB',

    'LBL_SCAN_401_TITLE' => 'Trovata inclusione file fornitore, per i file spostati al fornitore:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Modulo errato %s - non in beanList e non nel filesystem',
    'LBL_SCAN_403_TITLE' => 'Inclusione di file specifici Sugar trovata per:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame detected',
    'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer detected',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s has custom views',
    'LBL_SCAN_407_TITLE' => '%s has custom views',
    'LBL_SCAN_408_TITLE' => 'Sono stati trovati componenti azioni-creazione personalizzata che non sono più supportati.',
    'LBL_SCAN_409_TITLE' => 'Vardefs non valida - Il %s modulo presente una vardefs non valida per il campo %s.',
    'LBL_SCAN_519_TITLE' => 'Estensione dir %s trovata',
    'LBL_SCAN_518_TITLE' => 'Incompatible module %s',
    'LBL_SCAN_410_TITLE' => 'Campi Max - Trovati più di %s campi (%s) in %s',
    'LBL_SCAN_522_TITLE' => 'Trovato &#39;get_subpanel_data&#39; con &#39;function:&#39; valore in %s',
    'LBL_SCAN_412_TITLE' => 'Collegamento errato sotto-pannello %s in %s',
    'LBL_SCAN_413_TITLE' => 'Unknown widget class detected: %s for %s',
    'LBL_SCAN_414_TITLE' => 'Campi sconosciuti gestiti da CRYS-36, quindi qui non vengono effettuati ulteriori controlli',
    'LBL_SCAN_415_TITLE' => 'File gancio errato in %s: %s',
    'LBL_SCAN_523_TITLE' => 'Parametro By-ref nel file gancio %s funzione %s',
    'LBL_SCAN_417_TITLE' => 'Modulo incompatibile %s',
    'LBL_SCAN_418_TITLE' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_TITLE' => 'Bad vardefs - key %s, name %s',
    'LBL_SCAN_420_TITLE' => 'Bad vardefs - relate field %s has empty `module`',
    'LBL_SCAN_421_TITLE' => 'Bad vardefs - link %s refers to invalid relationship',
    'LBL_SCAN_422_TITLE' => 'Il modulo %s ha la definzione di un altro modulo',
    'LBL_SCAN_525_TITLE' => 'Funzione HTML Vardef in %s',
    'LBL_SCAN_423_TITLE' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_424_TITLE' => 'HTML inline trovato in %s on-line %s',
    'LBL_SCAN_425_TITLE' => 'Trovato "echo" in %s on-line %s',
    'LBL_SCAN_426_TITLE' => 'Trovato "print" in %s on-line %s',
    'LBL_SCAN_427_TITLE' => 'Trovato "die/exit" in %s on-line %s',
    'LBL_SCAN_428_TITLE' => 'Trovato "print_r" in %s on-line %s',
    'LBL_SCAN_429_TITLE' => 'Trovato "var_dump" in %s on-line %s',
    'LBL_SCAN_430_TITLE' => 'Trovato buffering di uscita (%s) in %s on-line %s',
    'LBL_SCAN_431_TITLE' => 'Trovato modello Smarty personalizzato: "%s"',
    'LBL_SCAN_436_TITLE' => 'Trovato modello PDF personalizzato: "%s"',
    'LBL_SCAN_437_TITLE' => 'Modello Smarty incompatibile con la sintassi Smarty3: "%s"',
    'LBL_SCAN_438_TITLE' => 'Trovato modello PDF personalizzato che non può essere convertito automaticamente nella sintassi Smarty3: "%s"',
    'LBL_SCAN_439_TITLE' => 'Modello incompatibile con la sintassi di Smarty3, ignorato: "%s"',
    'LBL_SCAN_451_TITLE' => 'Il codice AuthN è stato eliminato. Al suo posto, utilizzare \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. File che utilizzando codice eliminato: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Funzione Vardef HTML %s nel modulo %s per il campo %s',
    'LBL_SCAN_432_TITLE' => 'Vardef sbagliati - il tipo di campo "nome" è "%s" non valido, modulo - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'Trovati file di ricerca Elastic personalizzati %s',
    'LBL_SCAN_434_TITLE' => 'Si è riscontrato l&#39;uso delle funzioni array su $_SESSION nei file: %s',
    'LBL_SCAN_435_TITLE' => 'Trovato l&#39;utilizzo della classe SugarSession rimossa',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'File mancante: %s',
    'LBL_SCAN_502_TITLE' => 'abbinamento errato md5 per %s, previsto %s',
    'LBL_SCAN_503_TITLE' => 'Modulo personalizzato con lo stesso nome del nuovo modulo Sugar7: %s',
    'LBL_SCAN_504_TITLE' => 'Tipo di campo mancante nel modulo %s: %s',
    'LBL_SCAN_505_TITLE' => 'Cambiamento tipo in %s per il campo %s: da %s a %s',
    'LBL_SCAN_506_TITLE' => '$this uso in %s',
    'LBL_SCAN_507_TITLE' => 'Bad vardefs - %s refers to bad subfield %s',
    'LBL_SCAN_508_TITLE' => 'HTML inline trovato in %s on-line %s',
    'LBL_SCAN_509_TITLE' => 'Trovato "echo" in %s on-line %s',
    'LBL_SCAN_510_TITLE' => 'Trovato "print" in %s on-line %s',
    'LBL_SCAN_511_TITLE' => 'Trovato "die/exit" in %s on-line %s',
    'LBL_SCAN_512_TITLE' => 'Trovato "print_r" in %s on-line %s',
    'LBL_SCAN_513_TITLE' => 'Trovato "var_dump" in %s on-line %s',
    'LBL_SCAN_514_TITLE' => 'Trovato buffering di uscita (%s) in %s on-line %s',
    'LBL_SCAN_515_TITLE' => 'Errore script: %s',
    'LBL_SCAN_517_TITLE' => 'Integrazione incompatibile - %s %s',
    'LBL_SCAN_526_TITLE' => "Vardef errati - campo multienum '%s' con elenco opzioni chiavi '%s' contiene caratteri incompatibili - '{%s}' nel modulo %s",
    'LBL_SCAN_528_TITLE' => 'Il campo %s del modulo %s ha un valore display_default errato',
    'LBL_SCAN_529_TITLE' => '%s: %s nel file %s on-line %s',
    'LBL_SCAN_530_TITLE' => 'File personalizzato mancante: %s',
    'LBL_SCAN_531_TITLE' => 'Driver di database obsoleto: %s',
    'LBL_SCAN_532_TITLE' => 'Stock parent PHP4 constructor call in %s',
    'LBL_SCAN_533_TITLE' => 'Custom parent PHP4 constructor call in %s',
    'LBL_SCAN_534_TITLE' => 'Driver del database non supoportato: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Reset dati integrazione incompatibile - %s %s',
    'LBL_SCAN_541_TITLE' => 'Serializzazione SugarBPM non valida - %s serializzazioni non valide nella colonna %s della tabella %s: %s',
    'LBL_SCAN_542_TITLE' => 'Uso del campo SugarBPM non valido - %s campi non validi utilizzati in %s.',
    'LBL_SCAN_545_TITLE' => 'SugarBPM ha parzialmente bloccato il gruppo campi - Modulo %3$s: il gruppo %s è parzialmente bloccato nella definizione dei flussi %s.',
    'LBL_SCAN_546_TITLE' => 'Custom Knowledge Base TinyMCE config',
    'LBL_SCAN_547_TITLE' => 'Uso della firma rimossa &#39;resetLoadFlag&#39; in %s',
    'LBL_SCAN_548_TITLE' => 'Uso del metodo sostituito &#39;initButtons&#39; in %s',
    'LBL_SCAN_549_TITLE' => 'Uso della firma rimossa &#39;getField&#39; in %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'Valori inattesi trovati nelle e-mail',
    'LBL_SCAN_571_TITLE' => 'Il file personalizzato contiene un codice obsoleto',
    'LBL_SCAN_572_TITLE' => 'Conflitto di nomi con un file personalizzato',
    'LBL_SCAN_573_TITLE' => 'Conflitto di nomi con un file personalizzato della guida',
    'LBL_SCAN_574_TITLE' => 'Sono presenti personalizzazioni nel sottopannello messaggi di posta elettronica',
    'LBL_SCAN_575_TITLE' => 'Sono presenti personalizzazioni nel sottopannello contatti per messaggi di posta elettronica',
    'LBL_SCAN_576_TITLE' => 'Sono state rilevate delle personalizzazioni d&#39;interfaccia',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Rilevate istruzioni vietate',
    'LBL_SCAN_586_TITLE' => 'Rilevato utilizzo obsoleto di FontAwesome',

    'LBL_SCAN_901_TITLE' => 'Istanza già aggiornata a Sugar 7',
    'LBL_SCAN_903_TITLE' => 'Versione Upgrader non supportata',
    'LBL_SCAN_904_TITLE' => 'Trovati valori NULL nelle stringhe moduleList',
    'LBL_SCAN_999_TITLE' => 'Errore sconosciuto, si prega di consultare il centro supporto',

    'LBL_SCAN_101_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',
    'LBL_SCAN_102_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',
    'LBL_SCAN_103_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',
    'LBL_SCAN_104_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',
    'LBL_SCAN_105_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',

    'LBL_SCAN_201_DESCR' => 'Sono state rilevate personalizzazioni via Studio sulla tua istanza. Non prevediamo alcun problema con queste personalizzazioni che sono state aggiornate a Sugar 7.',

    'LBL_SCAN_301_DESCR' => 'Sono state rilevate alcune personalizzazioni che non sono state migrate in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_302_DESCR' => 'Sono state rilevate viste di file sconosciuti che non sono state migrate in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_303_DESCR' => 'Sono stati rilevati file form non vuoti che non sono stati migrati in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_304_DESCR' => 'Sono stati rilevati file sconosciuti (%s) che non sono stati migrati in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_305_DESCR' => 'Sono stati rilevati Bad vardefs(%s: %s) che non sono stati migrati in Sugar 7. Questa personalizzazione continuerà ad essere disponibile, ma ma verrà eseguita in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_306_DESCR' => 'Sono stati rilevati Bad vardefs che non sono stati migrati in Sugar 7. Il campo Relate (%s) ha un `module`) vuoto. Questa personalizzazione continuerà ad essere disponibile, ma ma verrà eseguita in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_307_DESCR' => 'Sono stati rilevati Bad vardefs che non sono stati migrati in Sugar 7. Il link (%s) è associato ad una relazione non valida. Questa personalizzazione continuerà ad essere disponibile, ma ma verrà eseguita in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_308_DESCR' => 'Sono state rilevate alcune personalizzazioni che non sono state migrate in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_309_DESCR' => 'Un hash md5 per %s non corrisponde in modo immediato al file.  Il file potrebbe essere stato modificato e non verrà aggiornato su Sugar7',
    'LBL_SCAN_310_DESCR' => 'Sono state rilevate viste di file sconosciuti che non sono stati migrati in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile ma sarà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_311_DESCR' => 'Sono state rilevate alcune personalizzazioni che non sono state migrate in Sugar 7. Questo modulo (%s) continuerà ad essere disponibile, ma verrà eseguito in Sugar 7 nella modalità compatibile con la versione precedente.',
    'LBL_SCAN_312_DESCR' => 'Sono stati rilevati dei vardef errati e non sono stati migrati in Sugar7. Vardefs errati: il tipo di campo &#39;nome&#39; non è valido &#39;%s&#39; per il modulo &#39;%s&#39;.  Questa personalizzazione continuerà a essere disponibile ma verrà eseguita nella Modalità Compatibilità all&#39;indietro in Sugar7. ',
    'LBL_SCAN_313_DESCR' => 'È stata rilevata una directory Extensions - %s non è un modulo Module Builder. Questo modulo continuerà a essere disponibile, ma unicamente nella modalità compatibile con la versione precedente (bwc).',

    'LBL_SCAN_401_DESCR' => 'Il File personalizzato include un file che è stato spostato nella directory vendor. Abbiamo cercato di adottare misure correttive e non è necessaria alcuna ulteriore azione.',
    'LBL_SCAN_402_DESCR' => 'Modulo errato %s - non in beanList e non nel filesystem',
    'LBL_SCAN_403_DESCR' => 'Alcuni dei File Sugar hanno cambiato posizione in Sugar 7. Dobbiamo correggere i loro percorsi di inclusione.',
    'LBL_SCAN_520_DESCR' => 'Questi logic hook non è più supportato da Sugar 7',
    'LBL_SCAN_521_DESCR' => 'Questi logic hook non è più supportato da Sugar 7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Il modulo Stock Sugar ha viste personalizzate in custom/modules/%s/views',
    'LBL_SCAN_407_DESCR' => 'Il modulo Stock Sugar ha viste personalizzate in modules/%s/views',
    'LBL_SCAN_408_DESCR' => 'Componenti azioni-creazione personalizzata trovati in %s. Questi componenti saranno copiati e modificati per estendere, invece, il componente crea durante l&#39;aggiornamento',
    'LBL_SCAN_409_DESCR' => 'L&#39;attributo "link_file" in vardefs è stato disapprovato. La classe di collegamento deve essere caricabile automaticamente',
    'LBL_SCAN_519_DESCR' => 'Il modulo Stock Sugar ha una delle estensioni che non supportiamo per l&#39;aggiornamento, ad esempio routing personalizzato, controllo accessi, Javascript, ecc.',
    'LBL_SCAN_518_DESCR' => 'I vardef comprendono definizioni utente customCode che non sappiamo come convertire',
    'LBL_SCAN_410_DESCR' => 'Troppi campi nella vista',
    'LBL_SCAN_522_DESCR' => 'I dati del sotto-pannello vengono recuperati da una funzione, non supportiamo ancora questo aggiornamento.',
    'LBL_SCAN_412_DESCR' => 'Il sottopannello è collegato ad un link che non esiste o non è definito correttamente',
    'LBL_SCAN_413_DESCR' => 'Il campo è collegato a un nome widget class che non ha alcuna corrispondenza con il widget class del file.',
    'LBL_SCAN_414_DESCR' => 'Campi sconosciuti gestiti da CRYS-36, quindi qui non vengono effettuati ulteriori controlli',
    'LBL_SCAN_415_DESCR' => 'Logic hook fa riferimento ad un file che non esiste',
    'LBL_SCAN_523_DESCR' => 'Il vecchio file gancio logico usa il superamento dei parametri per-riferimento, che potrebbe portare alla visualizzazione di messaggi di errore (andando quindi a creare confusione in REST)',
    'LBL_SCAN_417_DESCR' => 'Feed modulo o iFrame rilevati, che non dovrebbero più esistere',
    'LBL_SCAN_418_DESCR' => 'Il sottopannello è collegato ad un modulo che non esiste',
    'LBL_SCAN_419_DESCR' => 'Vardef key non corrisponde al vardef name',
    'LBL_SCAN_420_DESCR' => 'Vardef contiene campi relativi che si riferiscono a una relazione che non è possibile caricare in modo corretto',
    'LBL_SCAN_421_DESCR' => 'Vardef contiene un campo di collegamento che non può essere caricato in modo corretto',
    'LBL_SCAN_422_DESCR' => 'Il modulo %s ha la definizione di un altro modulo %s nel file %s',
    'LBL_SCAN_525_DESCR' => 'Vardef definisce enum che è un risultato della funzione HTML, che non è supportato da Sugar7',
    'LBL_SCAN_423_DESCR' => 'Vardef è definito come campi composti contenenti sotto-campi, e uno di questi sotto-campi non esiste in reltà',
    'LBL_SCAN_424_DESCR' => 'Il file contiene HTML inline',
    'LBL_SCAN_425_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_426_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_427_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_428_DESCR' => 'Il codice contiene questa funzione di produzione output. Si prega di notare che print_r(..., true) è consentito.',
    'LBL_SCAN_429_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_430_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_431_DESCR' => 'Verrà convertito per conformarsi alla sintassi Smarty3',
    'LBL_SCAN_436_DESCR' => 'Verrà convertito per conformarsi alla sintassi Smarty3',
    'LBL_SCAN_437_DESCR' => 'È presente una sintassi nel file .tpl che non può essere convertita per essere compatibile con Smarty3. Correggila manualmente per aggiornare l&#39;istanza.',
    'LBL_SCAN_438_DESCR' => 'Impossibile convertire il modello PDF personalizzato per conformarsi alla sintassi di Smarty 3. Correggilo manualmente per aggiornare l&#39;istanza.',
    'LBL_SCAN_439_DESCR' => 'È presente una sintassi nel file .tpl che non può essere convertita per essere compatibile con Smarty3. È stata ignorata. Se si tratta di un modello Smarty valido, correggilo manualmente.',
    'LBL_SCAN_451_DESCR' => 'Il codice AuthN è stato eliminato. Al suo posto, utilizzare \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate',
    'LBL_SCAN_524_DESCR' => 'Il campo è definito come funzione che produce HTML e non può essere convertito automaticamente (sappiamo come convertire alcuni campi stock, quali ad esempio e-mail e valuta)',
    'LBL_SCAN_432_DESCR' => 'Il campo "nome" ha un tipo diverso rispetto a nome, nome completo, varchar o id',
    'LBL_SCAN_433_DESCR' => 'Trovati file di ricerca Elastic personalizzati %s',
    'LBL_SCAN_434_DESCR' => 'Si è riscontrato l&#39;uso delle funzioni array su $_SESSION nei file: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'Uno dei file core non è presente nell&#39;istanza',
    'LBL_SCAN_502_DESCR' => 'Uno dei file core è stato modificato in questa installazione',
    'LBL_SCAN_503_DESCR' => 'Il modulo personalizzato ha lo stesso nome di uno dei nuovi moduli Sugar',
    'LBL_SCAN_504_DESCR' => 'La definizione del campo Vardef omette il tipo',
    'LBL_SCAN_505_DESCR' => 'Il tipo di campo non-blob viene modificato sul tipo di campo blob. Ciò non è consentito perché i tipi blob non possono essere indicizzati e potrebbero avere filtri basati sull&#39;indicizzazione di questo campo.',
    'LBL_SCAN_506_DESCR' => '$this viene usato nel file metadata. Dato che il file metadata si trova in un contesto diverso in Sugar7, non andrebbe a buon fine.',
    'LBL_SCAN_507_DESCR' => 'Vardef è definito come campi composti contenenti sotto-campi, e uno di questi sotto-campi non esiste in reltà',
    'LBL_SCAN_508_DESCR' => 'Il file contiene HTML inline',
    'LBL_SCAN_509_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_510_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_511_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_512_DESCR' => 'Il codice contiene questa funzione di produzione output. Si prega di notare che print_r(..., true) è consentito.',
    'LBL_SCAN_513_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_514_DESCR' => 'Il codice contiene questa funzione di produzione output',
    'LBL_SCAN_515_DESCR' => 'Lo script di controllo non è andato a buon fine, il che significa che instaScannerMeta.phpnce forse contiene un codice PHP errato che lo script ha cercato di caricare.',
    'LBL_SCAN_517_DESCR' => 'Pacchetto rilevato che è stato inserito nella denylist come non supportato in Sugar 7',
    'LBL_SCAN_526_DESCR' => "Questo Elenco contiene dei valori Nome Articolo che impediscono l'aggiornamento.",
    'LBL_SCAN_528_DESCR' => 'Campo Data/Dataora/Campo tempo con valore display_default errato come -nessuno-',
    'LBL_SCAN_529_DESCR' => 'Gli errori PHP potrebbero essere disattivati dall&#39;interprete quando viene riscontrata una sintassi-php errata oppure alcuni problemi-codice run-time.',
    'LBL_SCAN_530_DESCR' => 'Uno dei file personalizzati non è presente nell&#39;istanza ma viene usato dal codice personalizzato.',
    'LBL_SCAN_531_DESCR' => 'Il driver di database %s è obsoleto. Utilizzare invece %s.',
    'LBL_SCAN_532_DESCR' => 'A class declared in %s calls its stock parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_533_DESCR' => 'A class declared in %s calls its custom parent&#39;s constructor as %s::%s()',
    'LBL_SCAN_534_DESCR' => 'Il driver di database %s non è più supportato. Provare ad utilizzare invece %s.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'Rilevato pacchetto inserito in denylist come non supportato nella versione target di Sugar. Questi pacchetti devono essere disinstallati ED eliminati prima dell&#39;aggiornamento. Si prega di notare che la disinstallazione dei pacchetti rimuoverà le tabelle e i dati generati dal pacchetto e dall&#39;uso dei moduli del pacchetto.',
    'LBL_SCAN_541_DESCR' => 'Sono stati rilevati dati nelle tabelle di gestione del processo che non possono essere deserializzati né convertiti',
    'LBL_SCAN_542_DESCR' => 'Invalid fields have been found in your Process Management Business Rules and/or Actions. These fields must be removed from Business Rules and/or Actions in order to upgrade.',
    'LBL_SCAN_545_DESCR' => 'Un campo di gruppi è parzialmente bloccato nella definizione dei flussi. Per continuare l&#39;aggiornamento, questi campi devono essere sbloccati nella definizione dei flussi.',
    'LBL_SCAN_546_DESCR' => 'Cannot migrate custom TinyMCE config in Knowledge Base module. '
        . 'The "tinyConfig" parameter in %s file will be emptied. '
        . 'If you have any TinyMCE customizations there you should save them before upgrade '
        . 'and add after upgrade manually.',
    'LBL_SCAN_547_DESCR' => 'Uso della firma rimossa &#39;resetLoadFlag&#39; in %s',
    'LBL_SCAN_548_DESCR' => 'Uso del metodo sostituito &#39;initButtons&#39; in %s',
    'LBL_SCAN_549_DESCR' => 'Uso della firma rimossa &#39;getField&#39; in %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'Istanza già aggiornata a Sugar 7',
    'LBL_SCAN_903_DESCR' => 'Versione Upgrader non supportata. Installare il pacchetto SugarUpgradeWizardPrereq adeguato',
    'LBL_SCAN_904_DESCR' => 'File: %s, Moduli: %s',
    'LBL_SCAN_999_DESCR' => 'Errore sconosciuto, si prega di consultare il centro supporto',

    'LBL_SCAN_577_TITLE' => 'Riepilogo database incompatibile',
    'LBL_SCAN_577_LOG' => "Il riepilogo '%s' è incompatibile con il set di caratteri '%s'",
    'LBL_SCAN_577_DESCR' => "Scegliere un diverso riepilogo nelle impostazioni internazionali o rimuovere la configurazione 'dbconfigoption.collation' in modo da utilizzare il riepilogo predefinito.",

    'LBL_SCAN_578_TITLE' => 'Impossibile rimuovere la tabella di database temporanea: %s',
    'LBL_SCAN_578_LOG' => 'Impossibile rimuovere la tabella di database temporanea: %s',
    'LBL_SCAN_578_DESCR' => 'Durante l&#39;aggiornamento, non è stato possibile eliminare una tabella temporanea creata per effettuare il controllo della conversione del set di caratteri. È necessario eliminare la tabella manualmente',

    'LBL_SCAN_579_TITLE' => 'Impossibile eseguire la conversione set di caratteri/riepilogo: (%s) sulla tabella: %s',
    'LBL_SCAN_579_LOG' => 'Impossibile eseguire la conversione set di caratteri/riepilogo: (%s) sulla tabella: %s',
);