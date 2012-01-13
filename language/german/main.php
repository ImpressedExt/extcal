<?php
include_once ICMS_ROOT_PATH.'/language/'.$icmsConfig['language'].'/calendar.php';

define('_MD_EXTCAL_NAV_CALMONTH', 'Kalender Monat');
define('_MD_EXTCAL_NAV_CALWEEK', 'Kalender Woche');
define('_MD_EXTCAL_NAV_YEAR', 'Jahr');
define('_MD_EXTCAL_NAV_MONTH', 'Monat');
define('_MD_EXTCAL_NAV_WEEK', 'Woche');
define('_MD_EXTCAL_NAV_DAY', 'Tag');

define("_MD_EXTCAL_START","Start");
define("_MD_EXTCAL_END","Ende");
define('_MD_EXTCAL_RECCUR_RULE', 'Wiederholregel');
define("_MD_EXTCAL_CONTACT_INFO","Kontaktinfo");
define("_MD_EXTCAL_EMAIL","Email");
define("_MD_EXTCAL_URL","URL");
define("_MD_EXTCAL_WHOS_GOING","Wer ist dabei?");
define("_MD_EXTCAL_WHOSNOT_GOING","Wer ist nicht dabei?");
define("_MD_EXTCAL_ADD_ME","In diese Liste eintragen");
define("_MD_EXTCAL_REMOVE_ME","Aus dieser Liste entfernen");
define("_MD_EXTCAL_POSTED_BY","Erstellt von");

define('_MD_EXTCAL_SUBMITED_EVENT', 'Eingesendeter Termin');
define('_MD_EXTCAL_SUBMIT_EVENT', 'Termin einsenden');
define('_MD_EXTCAL_EDIT_EVENT', 'Termin bearbeiten');
define('_MD_EXTCAL_TITLE','Bezeichnung');
define('_MD_EXTCAL_CATEGORY','Kategorie');
define('_MD_EXTCAL_DESCRIPTION','Beschreibung');
define('_MD_EXTCAL_NBMEMBER','Maximale Teilnehmeranzahl');
define('_MD_EXTCAL_NBMEMBER_DESC','Setzen Sie diesen Wert auf 0 für unbegrenzte Teilnehmeranzahl');
define('_MD_EXTCAL_CONTACT','Kontakt');
define('_MD_EXTCAL_ADDRESS','Adresse');
define('_MD_EXTCAL_START_DATE','Startdatum');
define('_MD_EXTCAL_END_DATE','Enddatum');
define('_MD_EXTCAL_EVENT_END','Terminende?');
define('_MD_EXTCAL_FILE_ATTACHEMENT', 'Datei anhängen');
define('_MD_EXTCAL_PREVIEW', 'Vorschau');
define('_MD_EXTCAL_EVENT_ADDED','Termin hinzugefügt');
define('_MD_EXTCAL_MAX_MEMBER_REACHED', 'Maximale Teilnehmerzahl für diesen Termin erreicht');
define('_MD_EXTCAL_WHOS_GOING_ADDED_TO_EVENT', 'Zur Teilnehmerliste hinzugefügt');
define('_MD_EXTCAL_WHOS_GOING_REMOVED_TO_EVENT', 'Von der Teilnehmerliste entfernt');
define('_MD_EXTCAL_WHOSNOT_GOING_ADDED_TO_EVENT', 'Zur Liste der Nicht-Teilnehmer hinzugefügt');
define('_MD_EXTCAL_WHOSNOT_GOING_REMOVED_TO_EVENT', 'Von der Liste der Nicht-Teilnehmer entfernt');

define('_MD_EXTCAL_WRONG_DATE_FORMAT', 'Falsches Datumsformat');
define('_MD_EXTCAL_NO_RECCUR_EVENT', 'Kein wiederholender Termin');
define('_MD_EXTCAL_RECCUR_POLICY', 'Wiederholregel');
define('_MD_EXTCAL_DAILY', 'Tag(e)');
define('_MD_EXTCAL_WEEKLY', 'Woche(n)');
define('_MD_EXTCAL_MONTHLY', 'Monat(e)');
define('_MD_EXTCAL_YEARLY', 'Jahr(e)');
define('_MD_EXTCAL_DURING', 'Dauer:');
define('_MD_EXTCAL_DAYS', 'Tag(e)');
define('_MD_EXTCAL_WEEKS', 'Woche(n)');
define('_MD_EXTCAL_MONTH', 'Monat');
define('_MD_EXTCAL_ON', 'am');
define('_MD_EXTCAL_OR_THE', 'oder');
define('_MD_EXTCAL_DAY_NUM_MONTH', '(Tag im Monat)');
define('_MD_EXTCAL_YEARS', 'Jahr(e)');
define('_MD_EXTCAL_SAME_ST_DATE', 'Gleich wie Startzeitpunkt');

define('_MD_EXTCAL_1_MO', '1. '._CAL_MONDAY);
define('_MD_EXTCAL_1_TU', '1. '._CAL_TUESDAY);
define('_MD_EXTCAL_1_WE', '1. '._CAL_WEDNESDAY);
define('_MD_EXTCAL_1_TH', '1. '._CAL_THURSDAY);
define('_MD_EXTCAL_1_FR', '1. '._CAL_FRIDAY);
define('_MD_EXTCAL_1_SA', '1. '._CAL_SATURDAY);
define('_MD_EXTCAL_1_SU', '1. '._CAL_SUNDAY);
define('_MD_EXTCAL_2_MO', '2. '._CAL_MONDAY);
define('_MD_EXTCAL_2_TU', '2. '._CAL_TUESDAY);
define('_MD_EXTCAL_2_WE', '2. '._CAL_WEDNESDAY);
define('_MD_EXTCAL_2_TH', '2. '._CAL_THURSDAY);
define('_MD_EXTCAL_2_FR', '2. '._CAL_FRIDAY);
define('_MD_EXTCAL_2_SA', '2. '._CAL_SATURDAY);
define('_MD_EXTCAL_2_SU', '2. '._CAL_SUNDAY);
define('_MD_EXTCAL_3_MO', '3. '._CAL_MONDAY);
define('_MD_EXTCAL_3_TU', '3. '._CAL_TUESDAY);
define('_MD_EXTCAL_3_WE', '3. '._CAL_WEDNESDAY);
define('_MD_EXTCAL_3_TH', '3. '._CAL_THURSDAY);
define('_MD_EXTCAL_3_FR', '3. '._CAL_FRIDAY);
define('_MD_EXTCAL_3_SA', '3. '._CAL_SATURDAY);
define('_MD_EXTCAL_3_SU', '3. '._CAL_SUNDAY);
define('_MD_EXTCAL_4_MO', '4. '._CAL_MONDAY);
define('_MD_EXTCAL_4_TU', '4. '._CAL_TUESDAY);
define('_MD_EXTCAL_4_WE', '4. '._CAL_WEDNESDAY);
define('_MD_EXTCAL_4_TH', '4. '._CAL_THURSDAY);
define('_MD_EXTCAL_4_FR', '4. '._CAL_FRIDAY);
define('_MD_EXTCAL_4_SA', '4. '._CAL_SATURDAY);
define('_MD_EXTCAL_4_SU', '4. '._CAL_SUNDAY);
define('_MD_EXTCAL_LAST_MO', 'Letzter '._CAL_MONDAY);
define('_MD_EXTCAL_LAST_TU', 'Letzter '._CAL_TUESDAY);
define('_MD_EXTCAL_LAST_WE', 'Letzter '._CAL_WEDNESDAY);
define('_MD_EXTCAL_LAST_TH', 'Letzter '._CAL_THURSDAY);
define('_MD_EXTCAL_LAST_FR', 'Letzter '._CAL_FRIDAY);
define('_MD_EXTCAL_LAST_SA', 'Letzter '._CAL_SATURDAY);
define('_MD_EXTCAL_LAST_SU', 'Letzter '._CAL_SUNDAY);
define('_MD_EXTCAL_MO2', 'Mo');
define('_MD_EXTCAL_TU2', 'Di');
define('_MD_EXTCAL_WE2', 'Mi');
define('_MD_EXTCAL_TH2', 'Do');
define('_MD_EXTCAL_FR2', 'Fr');
define('_MD_EXTCAL_SA2', 'Sa');
define('_MD_EXTCAL_SU2', 'So');
define('_MD_EXTCAL_JAN', 'Jan');
define('_MD_EXTCAL_FEB', 'Feb');
define('_MD_EXTCAL_MAR', 'Mär');
define('_MD_EXTCAL_APR', 'Apr');
define('_MD_EXTCAL_MAY', 'Mai');
define('_MD_EXTCAL_JUN', 'Jun');
define('_MD_EXTCAL_JUL', 'Jul');
define('_MD_EXTCAL_AUG', 'Aug');
define('_MD_EXTCAL_SEP', 'Sep');
define('_MD_EXTCAL_OCT', 'Okt');
define('_MD_EXTCAL_NOV', 'Nov');
define('_MD_EXTCAL_DEC', 'Dez');

define('_MD_EXTCAL_RR_DAILY', 'Jeden Tag für %u Tage');
define('_MD_EXTCAL_RR_WEEKLY', 'Jede Woche, am %s für %u Wochen');
define('_MD_EXTCAL_RR_MONTHLY', 'Jeden Monat, am %s für %u Monate');
define('_MD_EXTCAL_RR_YEARLY', 'Jedes Jahr, am %s the %s, für %u Jahre');
define('_MD_EXTCAL_EVENT_CREATED', 'Event erfolgreich erstellt');

define('_MD_EXTCAL_FEED', 'RSS Feed');
?>