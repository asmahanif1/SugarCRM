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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'Interessentenlisten-Dashboard',
    'LBL_LEADS_RECORD_DASHBOARD' => 'Interessentenbericht-Dashboard',
    'LBL_LEADS_FOCUS_DRAWER_DASHBOARD' => 'Fokus-Drawer für Leads',

    'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Firma-Beschreibung',
    'LBL_ACCOUNT_ID'=>'Firmen-ID',
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktivitäten',
    'LBL_ADD_BUSINESSCARD' => 'Visitenkarte hinzufügen',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ALT_ADDRESS_CITY' => 'Alternative Adresse Ort',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternative Adresse Land',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternative Adresse Postleitzahl',
    'LBL_ALT_ADDRESS_STATE' => 'Alternative Adresse Bundesland',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternative Adresse Straße 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternative Adresse Straße 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternative Adresse Straße',
    'LBL_ALTERNATE_ADDRESS' => 'Alternative Adresse:',
    'LBL_ANY_ADDRESS' => 'Irgendeine Adresse:',
    'LBL_ANY_EMAIL' => 'E-Mail:',
    'LBL_ANY_PHONE' => 'Beliebige Telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
    'LBL_BACKTOLEADS' => 'Zurück zu Interessenten',
    'LBL_BUSINESSCARD' => 'Interessent konvertieren',
    'LBL_CITY' => 'Stadt:',
    'LBL_CONTACT_ID' => 'Kontakt-ID',
    'LBL_CONTACT_INFORMATION' => 'Überblick',
    'LBL_CONTACT_NAME' => 'Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Interessent:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Interessent:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Interessent konvertieren',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Speichern und konvertieren',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(Optional)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Sie besitzen keine Benutzerrechte in den Modulen {{requiredModulesMissing}}, die zum Konvertieren eines Interessenten notwendig sind',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Suche nach Duplikaten...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignorieren und neu erstellen',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Zurück zu Duplikaten',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Neu erstellen',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Suchen',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} Duplikate gefunden',
    'LBL_CONVERT_CREATE_NEW' => '{{moduleName}} neu erstellen',
    'LBL_CONVERT_SELECT_MODULE' => '{{moduleName}} wählen',
    'LBL_CONVERT_SELECTED_MODULE' => '{{moduleName}} wird ausgewählt',
    'LBL_CONVERT_CREATE_MODULE' => '{{moduleName}} erstellen',
    'LBL_CONVERT_CREATED_MODULE' => '{{moduleName}} wird erstellt',
    'LBL_CONVERT_RESET_PANEL' => 'Zurücksetzen',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Damit verbundenen Aktivitäten kopieren zu',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Damit verbundenen Aktivitäten verschieben zu',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Verbundene Aktivitäten zum Kontakt-Datensatz verschieben',
    'LBL_CONVERTED_ACCOUNT'=>'Konvertiert in Firma:',
    'LBL_CONVERTED_CONTACT' => 'Konvertiert in Kontakt:',
    'LBL_CONVERTED_OPP'=>'Konvertiert in Verkaufschance:',
    'LBL_CONVERTED'=> 'Konvertiert',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Interessent konvertieren',
    'LBL_CONVERTLEAD' => 'Interessent konvertieren',
    'LBL_CONVERTLEAD_WARNING' => 'Warnung: Der Interessent wurde bereits "konvertiert". Kontakte und/oder Firmen wurden eventuell schon erstellt. Möchten Sie den Interessenten trotzdem konvertieren, klicken Sie auf "Speichern". Klicken Sie auf "Abbrechen", um zum Datensatz zurückzukehren.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Möglicher Kontakt',
    'LBL_CONVERTLEAD_ERROR' => 'Interessent konnte nicht konvertiert werden',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Sie haben erfolgreich den Interessenten {{leadName}} konvertiert. Leider gab es Probleme beim Upload einiger Anhänge',
    'LBL_CONVERTLEAD_SUCCESS' => 'Sie haben den Interessenten {{leadName}} erfolgreich konvertiert',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Neu angelegt',
	'LBL_CREATED_ACCOUNT' => 'Neue Firma angelegt',
    'LBL_CREATED_CALL' => 'Neuer Anruf angelegt',
    'LBL_CREATED_CONTACT' => 'Neuer Kontakt angelegt',
    'LBL_CREATED_MEETING' => 'Neuen Termin angelegt',
    'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
    'LBL_DUPLICATE' => 'Ähnliche Interessenten',
    'LBL_EMAIL_ADDRESS' => 'E-Mail-Adresse:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_EXISTING_ACCOUNT' => 'Vorhandene Firma ausgewählt',
    'LBL_EXISTING_CONTACT' => 'Vorhandener Kontakt ausgewählt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestehende Verkaufschance verwendet',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_FULL_NAME' => 'Name:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Verlauf',
    'LBL_HOME_PHONE' => 'Telefon privat:',
    'LBL_IMPORT_VCARD' => 'vCard importieren',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Interessent von vCard erfolgreich erstellt',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Neuen Interessenten von vCard importieren.',
    'LBL_INVALID_EMAIL'=>'Ungültige E-Mail:',
    'LBL_INVITEE' => 'Direkt Unterstellte',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung Quelle:',
    'LBL_LEAD_SOURCE' => 'Quelle:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
    'LBL_LIST_CONTACT_NAME' => 'Name',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_DATE_ENTERED' => 'Erstellungsdatum',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_LIST_FIRST_NAME' => 'Vorname',
    'LBL_VIEW_FORM_TITLE' => 'Interessenten-Ansicht',
    'LBL_LIST_FORM_TITLE' => 'Interessenten-Liste',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Beschreibung der Quelle',
    'LBL_LIST_LEAD_SOURCE' => 'Quelle',
    'LBL_LIST_MY_LEADS' => 'Meine Interessenten',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Telefon Büro',
    'LBL_LIST_REFERED_BY' => 'Empfohlen von',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Name',
    'LBL_MARKET_INTEREST_PREDICTION' => 'Vorhersage des Marktzinses',
    'LBL_MARKET_SCORE' => 'Marktwert',
    'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
    'LBL_MODULE_NAME' => 'Interessenten',
    'LBL_MODULE_NAME_SINGULAR' => 'Interessent',
    'LBL_MODULE_TITLE' => 'Interessenten: Startseite',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Neuer Interessent',
    'LBL_NEW_PORTAL_PASSWORD' => 'Neues Portal-Passwort:',
    'LBL_OFFICE_PHONE' => 'Telefon (Büro):',
    'LBL_OPP_NAME' => 'Verkaufschance-Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Verkaufschance Betrag:',
    'LBL_OPPORTUNITY_ID'=>'Verkaufschance-ID',
    'LBL_OPPORTUNITY_NAME' => 'Verkaufschance-Name:',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => 'Konvertierter Name der Verkaufschance',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternative E-Mail:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portal aktiv:',
    'LBL_PORTAL_APP'=> 'Portal-Anwendung',
    'LBL_PORTAL_INFORMATION' => 'Portal­-Information',
    'LBL_PORTAL_NAME' => 'Portal-Name:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal-Password wurde gespeichert:',
    'LBL_POSTAL_CODE' => 'PLZ:',
    'LBL_STREET' => 'Straße',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Ort',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Hauptadresse Straße 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Hauptadresse Straße 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Der Datensatz {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a> wurde gespeichert.',
    'LBL_REFERED_BY' => 'Empfohlen von:',
    'LBL_REPORTS_TO_ID'=>'Berichtet an ID',
    'LBL_REPORTS_TO' => 'Berichtet an:',
    'LBL_REPORTS_FROM' => 'Berichtet von:',
    'LBL_SALUTATION' => 'Anrede',
    'LBL_MODIFIED'=>'Geändert von',
	'LBL_MODIFIED_ID'=>'Geändert von ID',
	'LBL_CREATED'=>'Erstellt von:',
	'LBL_CREATED_ID'=>'Ersteller',
    'LBL_SEARCH_FORM_TITLE' => 'Interessenten-Suche',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Ausgewählte Interessenten auswählen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Ausgewählte Interessenten auswählen',
    'LBL_STATE' => 'Bundesland:',
    'LBL_STATUS_DESCRIPTION' => 'Beschreibung:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Name:',
    'LBL_UNCONVERTED'=> 'Noch nicht konvertiert',
    'LNK_IMPORT_VCARD' => 'vCard importieren',
    'LNK_LEAD_LIST' => 'Interessenten',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
    'LNK_NEW_CONTACT' => 'Neuer Kontakt',
    'LNK_NEW_LEAD' => 'Neuer Interessent',
    'LNK_NEW_NOTE' => 'Neue Notiz',
    'LNK_NEW_TASK' => 'Neue Aufgabe',
    'LNK_NEW_CASE' => 'Neues Tickets',
    'LNK_NEW_CALL' => 'Neuer Anruf',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
	'LNK_SELECT_ACCOUNTS' => ' <b>ODER</b> Firma wählen',
    'LNK_SELECT_CONTACTS' => ' <b>ODER</b> Kontakt wählen',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Alternative Adresse in Hauptadresse kopieren',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Hauptadresse in alternative Adresse kopieren',
    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen möchten?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Zum Erstellen einer Verkaufschance benötigen Sie eine Firma.\n Bitte erstellen Sie eine neue Firma oder wählen Sie eine bestehende Firma aus.',
    'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diesen Interessenten wirklich von diesem Ticket entfernen?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Möchten Sie diesen Eintrag wirklich als direkten Bericht entfernen?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampagnen-Protokoll',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Erfolgreiche Kampagne:',
    'LBL_TARGET_BUTTON_LABEL'=>'Gezielt',
    'LBL_TARGET_BUTTON_TITLE'=>'Gezielt',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Kampagne:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
    'LBL_PROSPECT_LIST' => 'Zielkontaktliste',
    'LBL_PROSPECT' => 'Zielkontakt',
    'LBL_CAMPAIGN_LEAD' => 'Interessent',
	'LNK_LEAD_REPORTS' => 'Interessenten-Berichte',
    'LBL_BIRTHDATE' => 'Geburtstag',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Vielen Dank für die Eingabe.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Es tut uns leid; der Server ist im Moment nicht erreichbar. Versuchen Sie es bitte später erneut.',
    'LBL_ASSISTANT_PHONE' => 'Telefon Assistent(in)',
    'LBL_ASSISTANT' => 'Assistent(in)',
    'LBL_REGISTRATION' => 'Registrierung',
    'LBL_MESSAGE' => 'Bitte geben Sie Ihre Information unten ein. Information und/oder eine Firma wird für Sie erstellt - vorausgesetzt, Sie stimmen zu.',
    'LBL_SAVED' => 'Danke für Ihre Registrierung. Ihre Firma wird angelegt, und Sie werden in Kürze kontaktiert.',
    'LBL_CLICK_TO_RETURN' => 'Zurück zum Portal',
    'LBL_CREATED_USER' => 'Erstellt von',
    'LBL_MODIFIED_USER' => 'Geändert von',
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagnen',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Erforderlich',
    'LBL_CONVERT_SELECT' => 'Auswahl zulassen',
    'LBL_CONVERT_COPY' => 'Daten kopieren',
    'LBL_CONVERT_EDIT' => 'Bearbeiten',
    'LBL_CONVERT_DELETE' => 'Löschen',
    'LBL_CONVERT_ADD_MODULE' => 'Modul hinzufügen',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Konvertierungs-Layout bearbeiten',
    'LBL_CREATE' => 'Erstellen',
    'LBL_SELECT' => ' <b>ODER</b> auswählen',
	'LBL_WEBSITE' => 'Webseite:',
	'LNK_IMPORT_LEADS' => 'Interessenten importieren',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notiz: Die Konvertierungsmaske enthält benutzerdefinierte Felder. Wenn Sie die Maske im Studio zum ersten Mal bearbeiten, müssen Sie benutzerdefinierte Felder zum Layout hinzufügen. Ungleich früherer Personen erscheinen benutzerdefinierte Felder nicht automatisch im Layout.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Das Modul, in dem ein neuer Datensatz erstellt werden soll.',
	'LBL_REQUIRED_TIP' 	=> 'Die benötigten Module müssen erstellt oder ausgewählt werden, bevor der ausgewählte Interessent konvertiert werden kann.',
	'LBL_COPY_TIP'		=> 'Wenn ausgewählt, werden alle Felder des Interessenten in die Felder mit gleicher Bezeichnung des neuen Datensatzes kopiert.',
	'LBL_SELECTION_TIP' => 'Es ist besser, Module mit einem Bezugsfeld unter Kontakten während der Interessenten-Konvertierung auszuwählen, als diese neu zu erstellen.',
	'LBL_EDIT_TIP'		=> 'Konvertierungs-Layout für dieses Modul ändern.',
	'LBL_DELETE_TIP'	=> 'Löscht das verknüpfte Modul aus dem Konvertierungs-Layout.',

    'LBL_ACTIVITIES_MOVE'   => 'Aktivitäten verschieben nach',
    'LBL_ACTIVITIES_COPY'   => 'Aktivitäten kopieren nach',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Wählen Sie den Datensatz aus, in den die Interessenten-Aktivitäten, Aufgaben, Anrufe, Meetings, Notizen und E-Mails verschoben werden sollen.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Wählen Sie den Datensatz bzw. die Datensätze aus, in die die Interessenten-Aktivitäten, Aufgaben, Anrufe, Meetings, Notizen und E-Mails kopiert werden sollen. Die E-Mails werden mit diesen Datensätzen verknüpft.",
    //For export labels
    'LBL_PHONE_HOME' => 'Telefon privat',
    'LBL_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_PHONE_WORK' => 'Telefon Büro',
    'LBL_PHONE_OTHER' => 'Alternatives Telefon',
    'LBL_PHONE_FAX' => 'Telefon/Fax:',
    'LBL_CAMPAIGN_ID' => 'Kampagnen-ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesener Benutzer',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesene Benutzer-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
    'LBL_EXPORT_CREATED_BY' => 'Ersteller',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_EXPORT_EMAIL2'=>'Alternative E-Mail-Adresse',
	'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Datum eingeben' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Laden. Bitte warten...' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Bearbeiten' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Principal-IP',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notizen',

    'LBL_HELP_CONVERT_TITLE' => '{{module_name}} konvertieren',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Das Modul {{plural_module_name}} besteht aus einzelnen Kontakten, die möglicherweise an einem Produkt oder einer Dienstleistung interessiert sind. Wenn ein{{module_name}} als {{opportunities_singular_module}} qualifiziert wird, können {{plural_module_name}} in {{contacts_module}}, {{opportunities_module}} und {{accounts_module}} konvertiert werden. Es gibt verschiedene Arten, {{plural_module_name}} in Sugar zu erstellen, z. B. mit dem Modul {{plural_module_name}} durch Duplizieren bzw. Importieren von einem{{plural_module_name}} etc. Nach dem Erstellen von {{module_name}} können Sie Informationen über den{{module_name}} in der Datensatzansicht {{plural_module_name}} anzeigen und bearbeiten.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Das Modul {{plural_module_name}} besteht aus einzelnen Kontakten, die möglicherweise an einem Produkt oder einer Dienstleistung interessiert sind. 

- Bearbeiten Sie die einzelnen Felder, indem Sie in diese hinein klicken oder die Schaltfläche "Bearbeiten" verwenden.
- Sehen Sie sich Links zu anderen Datensätzen an oder bearbeiten Sie diese, indem Sie den linken unteren Bericht auf "Datenansicht" stellen.
- Machen Sie Benutzerkommentare oder zeigen Sie diese an bzw. zeichnen Sie die Änderungshistorie verschiedener Datensätze im Modul {{activitystream_singular_module}} an, indem Sie den linken unteren Bereich auf "Aktivitäten-Stream" stellen. 
- Folgen Sie Einträgen oder markieren Sie diese als Favoriten, indem Sie die Symbole rechts neben dem Namen verwenden. 
- Weitere Aktionen finden Sie im Dropdown-Menü auf der rechten Seite der Schaltfläche "Bearbeiten".',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Das Modul {{plural_module_name}} besteht aus einzelnen Kontakten, die möglicherweise an einem Produkt oder einer Dienstleistung interessiert sind. Wenn {{module_name}} als Verkauf {{opportunities_singular_module}} qualifiziert wird, kann es in {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}} oder einen anderen Datensatz konvertiert werden. 

So erstellen Sie ein {{module_name}}:
1. Erfassen Sie alle relevanten Informationen. 
- Felder, die als Pflichtfeld markiert sind, müssen vor dem Speichern ausgefüllt werden. 
- Klicken Sie auf "Mehr anzeigen", um weitere Felder zu erfassen. 
2. Klicken Sie auf "Speichern" um den Datensatz fertigzustellen und auf die letzte Seite zurück zu kommen.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar bietet die Möglichkeit {{plural_module_name}} in {{contacts_module}}, {{accounts_module}}, und andere Module zu konvertieren, sobald sie die notwendigen Qualifikationskriterien des {{module_name}} erfüllt haben.

Arbeiten Sie sich schrittweise durch die einzelnen Module durch, indem Sie die Felder anpassen und die neuen Datensätze dann durch die Schaltfläche "Verbinden" bestätigen.

Wenn Sugar einen bestehenden Datensatz erkennt, der mit {{module_name}} übereinstimmt, können sie ein Duplikat auswählen und die Auswahl durch die Schaltfläche "Verbinden" bestätigen oder "Ignorieren und neu erstellen" wählen und normal fortfahren.

Nach der Bestätigung der einzelnen gewünschten Module klicken Sie auf "Speichern und Konvertieren" im oberen Bereich, um die Konvertierung abzuschließen.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Mit Marketo® synchronisieren;',
    'LBL_MKTO_ID' => 'Marketo Interessenten-ID',
    'LBL_MKTO_LEAD_SCORE' => 'Interessenten-Bewertung',

    'LBL_FILTER_LEADS_REPORTS' => 'Interessenten-Berichte',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => 'Geschäftszwecke, zugestimmt für',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => 'Zustimmung zuletzt aktualisiert',

    // Leads Pipeline view
    'LBL_PIPELINE_ERR_CONVERTED' => 'Der Status {{moduleSingular}} kann nicht geändert werden. Dieses {{moduleSingular}} wurde bereits konvertiert.',

    // AI Predict
    'LBL_AI_LEADS_CONVERSION_PREDICTION_NAME' => 'Interessenten-Konvertierungsvorhersage',
    'LBL_AI_LEADS_CONVERSION_PREDICTION_DESC' => 'Vorhersagedetails für einen bestimmten Interessenten anzeigen',

    // Admin convert lead layout
    'LBL_ENABLE_RLIS' => 'Umsatzposten aktivieren',
    'LBL_REQUIRE_RLIS' => 'Beim Erstellen einer neuen Verkaufschance Umsatzposten erfordern',
    'LBL_COPY_DATA_RLIS' => 'Beim Erstellen einer neuen Verkaufschance Interessentendaten kopieren',
);
