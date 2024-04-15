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
	'DESC_MODULES_INSTALLED'					=> 'Följande moduler har installerats:',
	'DESC_MODULES_QUEUED'						=> 'Följande moduler är redo att installeras:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Kan inte bestämma grupp',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Kan inte bestämma ägare',
	'ERR_UW_CONFIG_WRITE'						=> 'Fel vid uppdatering av config.php med ny versionsinformation.',
	'ERR_UW_CONFIG'								=> 'Var god gör config.php skrivbar och ladda om denna sida.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Katalogen ej skrivbar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Filen är inte kopierad',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem med att ta bort paketet',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Filen kunde inte läsas.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Filen kan inte flyttas eller skrivas till',
	'ERR_UW_FLAVOR_2'							=> 'Sätt att uppgradera:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM Egenskaper:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log kunde inte skapas/skrivas till.  Var god kontrollera rättigheterna i SugarCRM katalogen.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload sätt till ett värde högre än 1.  Var god ändra detta i php.ini och starta om webbservern.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM kräver MySQL verion 4.1.2 eller nyare.  Hittade:',
	'ERR_UW_OCI8_VERSION'				        => 'Din version av Oracle stöds ej av Sugar. Du behöver installera en ny version som stöds av Sugar applikationen. Vänligen se the Compatibility Matrix i Release Notes för att hitta stödda Oracle Versioner. Nuvarande version:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Var god specifisera en fil och försök igen!',
	'ERR_UW_NO_FILES'							=> 'Ett fel uppstod, inga filer hittades för att kontolleras.',
	'ERR_UW_NO_MANIFEST'						=> 'Zip-filen saknar en manifest.php fil. Kan inte fortsätta.',
	'ERR_UW_NO_VIEW'							=> 'Ogiltig vy vald.',
	'ERR_UW_NO_VIEW2'							=> 'Vyn ej definierad. Var god gå till Administrationens hemsida för att navigera till denna sida.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Ej giltig uppladdning.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Kunde inte skapa temp katalogen. Kontrollera filrättigheterna.',
	'ERR_UW_ONLY_PATCHES'						=> 'Du kan endast ladda upp patchar på denna sida.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fel hittades vid körning av förtest',
	'ERR_UW_UPLOAD_ERR'							=> 'Ett fel uppstod vid uppladdningen av filen, var god försök igen!<br>\n',
	'ERR_UW_VERSION'							=> 'SugarCRM systemversion:',
    'ERR_UW_WRONG_TYPE'							=> 'Denna sida är ej för körningar',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Den uppladdade filen överstiger upload_max_filesize direktiven i php.ini',
													2 => 'Den uppladdade filen överstiger MAX_FILE_SIZE direktiven som specifiserats i HTML formuläret.',
													3 => 'Den uppladdade filen laddades endast delvis upp.',
													4 => 'Ingen fil laddades upp.',
													5 => 'Okänt fel.',
													6 => 'Saknar temporär katalog.',
													7 => 'Misslyckades med att skriva till disken.',
													8 => 'Uppladdningen avslutades på grund av ändelsen.',
),

    'ERROR_HT_NO_WRITE'                         => 'Kan inte skriva till filen:%s',
    'ERROR_MANIFEST_TYPE'                       => 'Manifestfilen måste specificera pakettypen.',
    'ERROR_PACKAGE_TYPE'                        => 'Manifestfilen specificerar en okänd pakettyp: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Den uppladdade filen är inte kompatibel med denna version av Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Den uppladdade filen är inte kompatibel med den här sorten (professionell, företag eller senaste utgåvan) av Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Fel vid sparande %s config var till db (nyckel %s, värde %s).',
    'ERR_NOT_ADMIN'                             => "Obehörig åtkomst till administrationen.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Du har inte behörighet till den här sidan.',

    'LBL_BUTTON_BACK'							=> 'Tillbaka',
	'LBL_BUTTON_CANCEL'							=> 'Avbryt',
	'LBL_BUTTON_DELETE'							=> 'Radera paket',
	'LBL_BUTTON_DONE'							=> 'Klar',
	'LBL_BUTTON_EXIT'							=> 'Avsluta',
	'LBL_BUTTON_INSTALL'						=> 'Förtest inför Uppgradering',
	'LBL_BUTTON_NEXT'							=> 'Nästa',
	'LBL_BUTTON_RECHECK'						=> 'Kontrollera igen',
	'LBL_BUTTON_RESTART'						=> 'Starta om',

	'LBL_UPLOAD_UPGRADE'						=> 'Ladda upp en uppgradering:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Den uppladdade filen hittades inte',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Fil backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Backup filer från denna uppgradering kan hittas i',
	'LBL_UW_BACKUP'								=> 'Fil BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'Uppgraderingen har avbrutits. Alla temporära filer som har kopierats och alla uppgraderingsfiler som har hämtats har raderats.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Ändringar av scheman för teckenuppsättning',
	'LBL_UW_CHECK_ALL'							=> 'Kryssa i alla',
	'LBL_UW_CHECKLIST'							=> 'Uppgraderingssteg',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Säkerhetskopiorna för överskrivna filer finns i följande mapp:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Foga samman följande filer manuellt:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Uppgraderingsprocess: Foga samman filer manuellt',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Använd den diff-metod är mest bekant för dig att sammanfoga dessa filer.  Tills detta är klart, är din SugarCRM-installation i ett osäkert tillstånd och uppgraderingen är ofullständig.',
	'LBL_UW_COMPLETE'							=> 'Slutför',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Denna nya Sugar-version innehåller nya licensavtal. Vill du fortsätta?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Alla systeminställningskrav är uppfyllda',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Inställning: Samtalstid passerar genom referens',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP-inställning: Minnesgräns',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP-inställning: strömning',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimum MySQL-version',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Databas-version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Läge för php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'PHP-version',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP-inställning: Felsäkert läge',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Kontroll av serverinställningar',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Upptäckta inställningar',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Support för zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Filer kopieras framgångsrikt',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Anpassade tabellschemaändringar',

	'LBL_UW_DB_CHOICE1'							=> 'Uppgraderingsguiden kör SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Manuella SQL-frågor',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INFOGA misslyckades - jämförda resultat skiljer sig',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Databasbehörighet',
	'LBL_UW_DB_ISSUES'							=> 'Databasproblem',
	'LBL_UW_DB_METHOD'							=> 'Databas uppdateringsmetod',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'BYT TABELL [table] LÄGG TILL KOLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'BYT TABELL [table] ÄNDRA KOLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'SKAPA TABELL [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'TA BORT FRÅN [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'BYT TABELL [table] SLÄPP KOLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'SLÄPP TABELL [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alla behörigheter tillgängliga',
	'LBL_UW_DB_NO_INSERT'						=> 'INFOGA I [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'VÄLJ [x] FRÅN [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPPDATERA [table]',
	'LBL_UW_DB_PERMS'							=> 'Nödvändig behörighet',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Följande uppgraderingspaket har installerats:',
	'LBL_UW_END_DESC'							=> 'Systemet har uppgraderats.',
	'LBL_UW_END_DESC2'							=> 'Om du har valt att köra manuellt några åtgärder såsom filsammanslagningar eller SQL-frågor, vänligen gör detta nu.  Ditt system kommer att vara instabilt tills dessa steg har slutförts.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Uppgraderingen är klar.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Klicka på klar för att avsluta guiden Uppgradera.',
	'LBL_UW_END_LOGOUT'							=> 'Om du planerar att tillämpa ett annan uppgraderingspaket med guiden Uppgradera, logga ut och logga in igen innan du gör det.',
	'LBL_UW_END_LOGOUT2'						=> 'Logga ut',
	'LBL_UW_REPAIR_INDEX'						=> 'För förbättring av databasens prestanda, var god kör <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> skript.',

	'LBL_UW_FILE_DELETED'						=> "har tagits bort. <br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupp',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Filrättigheter',
	'LBL_UW_FILE_ISSUES'						=> 'Filproblem',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Filen kräver manuell diff',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alla filer är skrivbara</b>',
	'LBL_UW_FILE_OWNER'							=> 'Ägare',
	'LBL_UW_FILE_PERMS'							=> 'Rättigheter',
	'LBL_UW_FILE_UPLOADED'						=> 'har laddats upp',
	'LBL_UW_FILE'								=> 'Filnamn',
	'LBL_UW_FILES_QUEUED'						=> 'Följande uppdateringspaket är redo att installeras:',
	'LBL_UW_FILES_REMOVED'						=> "Följande filer kommer raderas från systemet:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Klicka på Nästa för att ladda upp uppgraderingspaket:</b>",
	'LBL_UW_FROZEN'								=> 'Ladda upp ett paket innan du fortsätter.',
	'LBL_UW_HIDE_DETAILS'						=> 'Dölj detaljer',
	'LBL_UW_IN_PROGRESS'						=> 'Pågår',
	'LBL_UW_INCLUDING'							=> 'Inkluderar',
	'LBL_UW_INCOMPLETE'							=> 'Ofullständig',
	'LBL_UW_INSTALL'							=> 'Filen INSTALLERA',
	'LBL_UW_MANUAL_MERGE'						=> 'Filen sammanfoga',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modulen är redo att avinstalleras. Klicka på \"Verkställ\" för att fortsätta med avinstalleringen.<br>",
	'LBL_UW_MODULE_READY'						=> "Modulen är redo att installeras. Klicka på \"Verkställ\" för att fortsätta med installationen.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Inga registrerade uppgraderingar upptäcktes.',
	'LBL_UW_NONE'								=> 'Ingen',
	'LBL_UW_NOT_AVAILABLE'						=> 'Inte tillgänglig',
	'LBL_UW_OVERWRITE_DESC'						=> "Alla ändrade filer kommer att skrivas över, inklusive alla kodanpassningar och malländringar du har gjort. Är du säker på att du vill fortsätta?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Skriv över alla filer',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuell sammanslagning - behåll alla',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metod för sammanslagning',
	'LBL_UW_PATCH_READY'						=> 'Patchen är redo att fortsätta. Klicka på "Verkställ"-knappen nedanför för att avsluta uppgraderingsprocessen.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Märk: Anpassade layouter hittade</h2><br />Följande filer har nya fält eller modifierade skärmlayouter applicerade via Studio. Patchen du installerar nu innehåller också filändringarna. För <u>varje fil</u> kan du:<br><ul><li>[<b>Standard</b>] Behåll din version genom att låta kryssrutan vara tom. Patchändringarna kommer att ignoreras.</li>eller<li>Acceptera de uppdaterade filerna genom att välja kryssrutan. Dina layouter kommer att behöva tillämpas på nytt via Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Skapa uppgiftsobjekt för manuell sammanslagning?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Kontrollera före start',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differentierad',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'E-posta en påminnelse om manuell sammanslagning till dig själv?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Filerna som listas nedanför har ändrats. Avkryssa objekt som kräver en manuell sammanslagning. <i>Alla layoutändringar som upptäcks blir automatiskt avkryssade, kryssa för de som ska skrivas över.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Ingen manuell filsammanslagning krävs.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Behövs inte.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-bevarade filer:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Alla förtest är godkända.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klicka på Nästa för att uppgradera filerna till systemet.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Obs: </b> Resten av uppgraderingsprocessen är obligatorisk och om du klickar på Nästa måste du fullfölja processen. Om du inte vill fortsätta klickar du på knappen Avbryt.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Växla alla filer',

	'LBL_UW_REBUILD_TITLE'						=> 'Återuppbyggnadsresultat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schemaändringar',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Visa upptäckta inställningar',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Visa saknade databasbehörigheter',
	'LBL_UW_SHOW_DETAILS'						=> 'Visa detaljer',
	'LBL_UW_SHOW_DIFFS'							=> 'Visa filer som kräver manuell sammanfogning',
	'LBL_UW_SHOW_NW_FILES'						=> 'Visa filer med ogiltiga behörigheter',
	'LBL_UW_SHOW_SCHEMA'						=> 'Visa schemaändringsskript',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Visa ogiltiga förfrågningar',
	'LBL_UW_SHOW'								=> 'Visa',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Överhoppade filer',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Hoppar över överskrivning av fil - manuell sammanslagning vald.',
	'LBL_UW_SQL_RUN'							=> 'Kontrollera när SQL har körts manuellt',
	'LBL_UW_START_DESC'							=> 'Den här guiden hjälper dig uppgradera den här Sugar-instansen.',
	'LBL_UW_START_DESC2'						=> 'Obs: Vi rekommenderar att du säkerhetskopierar Sugardatabasen och systemfilerna (alla filer i SgarCRM-mappen) innan du uppgraderar ditt produktionssystem. Vi rekommenderar starkt att du utför en testuppgradering på en klonad instans av ditt produktionssystem först.',
	'LBL_UW_START_DESC3'						=> 'Klicka på nästa för att utföra en kontroll på ditt system för att säkerställa att ditt system är redo för uppgraderingen. Kontrollen inkluderar filrättigheter, databasbehörigheter och serverinställningar.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Den nya uppgraderingsguiden kommer nu att återuppta uppgraderingsprocessen. Var god fortsätt din uppgradering.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Välkommen till den nya uppgraderingsguiden',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Utför kontroll, var god vänta. Detta kan ta upp till 30 sekunder.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Hitta alla relevanta filer som ska kontrolleras.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Filer',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Hittade',

	'LBL_UW_TITLE_CANCEL'						=> 'Avbryt',
	'LBL_UW_TITLE_COMMIT'						=> 'Utför uppgradering',
	'LBL_UW_TITLE_END'							=> 'Rapportera',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Kontrollera före start',
	'LBL_UW_TITLE_START'						=> 'Välkommen',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Systemkontroll',
	'LBL_UW_TITLE_UPLOAD'						=> 'Ladda upp paket',
	'LBL_UW_TITLE'								=> 'Uppgraderingsguide',
	'LBL_UW_UNINSTALL'							=> 'Avinstallera',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Acceptera licens',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Konvertera licens',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Uppgraderade/anpassade moduler',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Följande moduler har funnits vara anpassade och bevarade',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Följande moduler har detekterats som Studio-anpassade och har uppgraderats',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Start pågår',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Systemkontroll pågår',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Licenskontroll pågår',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Kontroll före start pågår',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Filkopiering pågår',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Utför uppgradering pågår',
    'LBL_UW_COMMIT_DESC'						=> 'Klicka på Nästa för att köra ytterligare uppgraderingsskript.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Uppgraderingsskript pågår',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Uppgraderingssammanfattning pågår',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'pågår     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tid som förflutit',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Avbrytande av uppgradering och rengöring pågår',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Uppgraderingen kan ta lite tid',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Ladda upp kontrollerna pågår',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Ladda upp uppgraderingspaket',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Vill du att Sugar slutar använda det föråldrade schemat 451?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Uppgraderingsguiden ignorerar gammalt 451-schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Uppgradering av manuellt schema för att överge poster',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Metod för att överge gammalt schema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Visa gammalt schema som kan släppas',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Överhoppade förfrågningar',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Din version av PHP stöds inte av Sugar. Du måste installera en version som är kompatibel med Sugar applikationen. Var god se kompatibilitets matrisen i "Release Notes" för att hitta de PHP versioner som stöds. Din version är',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php bakåtkompatibilitet läget är aktiverat. Ställ in zend.ze1_compatibility_mode på Off för går vidare',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Åtgärd',
    'LBL_ML_CANCEL'             => 'Avbryt',
    'LBL_ML_COMMIT'=>'Verkställ',
    'LBL_ML_DESCRIPTION' => 'Beskrivning',
    'LBL_ML_INSTALLED' => 'Installationsdatum',
    'LBL_ML_NAME' => 'Namn',
    'LBL_ML_PUBLISHED' => 'Publiceringsdatum',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Ej möjlig att installera',
    'LBL_ML_VERSION' => 'Version',
	'LBL_ML_INSTALL'=>'Installera',
	'LBL_MODULE_NAME' => 'Uppgraderingsguide',
	'LBL_MODULE_NAME_SINGULAR' => 'Uppgraderingsguide',
	'LBL_UPLOAD_SUCCESS' => 'Uppgraderingspaketet har framgångsrikt laddats upp. Klicka på Nästa för att utföra slutkontroll.',
	'LBL_UW_TITLE_LAYOUTS' => 'Bekräfta layouter',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouter',
	'LBL_LAYOUT_MERGE_DESC' => 'Det finns nya fält tillgängliga som har lagts till som del av denna uppgradering och kan automatiskt läggas till dina existerande modullayouter. För mer information om de nya fälten, se utgivningsanmärkningarna för den version du uppgraderar.<br><br>Om du inte vill lägga till nya fält, var god avkryssa modulen och då kommer dina anpassade layouter inte att förändras. Fälten kommer att vara tillgängliga i Studio efter uppgraderingen. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klicka på nästa för att bekräfta ändringar och fullfölja uppgraderingen.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klicka på nästa för att slutföra uppgraderingen.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Bekräfta layouter',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bekräfta layoutresultat',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Följande layouter har framgångsrikt sammanfogats:',
	'LBL_SELECT_FILE' => 'Välj fil:',
	'LBL_LANGPACKS' => 'Språkpaket' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Modulladdare' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Patch Uppgraderingar' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Teman' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Arbetsflöde' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Uppgradera' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Utför' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globalt synlig',
);
