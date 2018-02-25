<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Polish locale 2014-11-29 18:24:32 Zespół Olympus.pl $
* @Polska wersja językowa phpbb 3.1.11 - 22.07.2017, Mateusz Dutko (vader) www.rnavspotters.pl
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Czynność',
	'ACTION_NOTE'			=> 'Czynność/Opinia',
	'ADD_FEEDBACK'			=> 'Dodaj opinię',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Jeśli chcesz dodać opinię o tym użytkowniku, wprowadź do poniższego pola treść opinii. Użyj tylko zwykłego tekstu. Znaczniki HTML i BBcode nie są dozwolone.',
	'ADD_WARNING'			=> 'Udziel ostrzeżenia',
	'ADD_WARNING_EXPLAIN'	=> 'Aby udzielić ostrzeżenie temu użytkownikowi, wprowadź do poniższego pola treść ostrzeżenia. Użyj tylko zwykłego tekstu. Znaczniki HTML i BBcode nie są dozwolone.',
	'ALL_ENTRIES'			=> 'Wszystkie wpisy',
	'ALL_NOTES_DELETED'		=> 'Usunięto wszystkie opinie o użytkowniku.',
	'ALL_REPORTS'			=> '–wszystkie–',
	'ALREADY_REPORTED'		=> 'Ten post już został zgłoszony.',
	'ALREADY_REPORTED_PM'	=> 'Ta prywatna wiadomość już została zgłoszona.',
	'ALREADY_WARNED'		=> 'Za ten post udzielono już ostrzeżenie.',
	'APPROVE'				=> 'Zaakceptuj',
	'APPROVE_POST'			=> 'Zaakceptuj post',
	'APPROVE_POST_CONFIRM'	=> 'Czy na pewno chcesz zaakceptować ten post?',
	'APPROVE_POSTS'			=> 'Zaakceptuj posty',
	'APPROVE_POSTS_CONFIRM'	=> 'Czy na pewno chcesz zaakceptować wybrane posty?',
	'APPROVE_TOPIC'			=> 'Zaakceptuj temat',
	'APPROVE_TOPIC_CONFIRM'	=> 'Czy na pewno chcesz zaakceptować ten temat?',
	'APPROVE_TOPICS'		=> 'Zaakceptuj tematy',
	'APPROVE_TOPICS_CONFIRM'=> 'Czy na pewno chcesz zaakceptować wybrane tematy?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Nie możesz przenieść tematu do forum, w którym już się on znajduje.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nie możesz udzielić ostrzeżenia niezarejestrowanym gościom.',
	'CANNOT_WARN_SELF'		=> 'Nie możesz udzielić ostrzeżenia sobie.',
	'CAN_LEAVE_BLANK'		=> 'To pole może pozostać puste.',
	'CHANGE_POSTER'			=> 'Zmień autora',
	'CLOSE_PM_REPORT'		=> 'Zamknij zgłoszenie PW',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Czy na pewno chcesz zamknąć wybrane zgłoszenie PW?',
	'CLOSE_PM_REPORTS'		=> 'Zamknij zgłoszenia PW',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Czy na pewno chcesz zamknąć wybrane zgłoszenia PW?',
	'CLOSE_REPORT'			=> 'Zamknij zgłoszenie',
	'CLOSE_REPORT_CONFIRM'	=> 'Czy na pewno chcesz zamknąć wybrane zgłoszenie?',
	'CLOSE_REPORTS'			=> 'Zamknij zgłoszenia',
	'CLOSE_REPORTS_CONFIRM'	=> 'Czy na pewno chcesz zamknąć wybrane zgłoszenia?',

	'DELETE_PM_REPORT'			=> 'Usuń zgłoszenie PW',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Czy na pewno chcesz usunąć wybrane zgłoszenie PW?',
	'DELETE_PM_REPORTS'			=> 'Usuń zgłoszenia PW',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Czy na pewno chcesz usunąć wybrane zgłoszenia PW?',
	'DELETE_POSTS'				=> 'Usuń posty',
	'DELETE_REPORT'				=> 'Usuń zgłoszenie',
	'DELETE_REPORT_CONFIRM'		=> 'Czy na pewno chcesz usunąć wybrane zgłoszenie?',
	'DELETE_REPORTS'			=> 'Usuń zgłoszenia',
	'DELETE_REPORTS_CONFIRM'	=> 'Czy na pewno chcesz usunąć wybrane zgłoszenia?',
	'DELETE_SHADOW_TOPIC'		=> 'Usuń odnośnik do przeniesionego tematu',
	'DELETE_TOPICS'			=> 'Usuń wybrane tematy',
	'DISAPPROVE'				=> 'Odrzuć',
	'DISAPPROVE_REASON'			=> 'Powód odrzucenia',
	'DISAPPROVE_POST'			=> 'Odrzuć post',
	'DISAPPROVE_POST_CONFIRM'	=> 'Czy na pewno chcesz odrzucić ten post?',
	'DISAPPROVE_POSTS'			=> 'Odrzuć posty',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Czy na pewno chcesz odrzucić wybrane posty?',
	'DISPLAY_LOG'				=> 'Wyświetl wpisy z ostatnich',
	'DISPLAY_OPTIONS'			=> 'Opcje wyświetlania',

	'EMPTY_REPORT'					=> 'Jeśli wybierasz ten powód, musisz podać opis.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Jeden lub więcej tematów zostało usuniętych z bazy danych, ponieważ były puste.',

	'FEEDBACK'				=> 'Notatki',
	'FORK'					=> 'Skopiuj',
	'FORK_TOPIC'			=> 'Skopiuj temat',
	'FORK_TOPIC_CONFIRM'	=> 'Czy na pewno chcesz skopiować ten temat?',
	'FORK_TOPICS'			=> 'Skopiuj zaznaczone tematy',
	'FORK_TOPICS_CONFIRM'	=> 'Czy na pewno chcesz skopiować zaznaczone tematy?',
	'FORUM_DESC'			=> 'Opis',
	'FORUM_NAME'			=> 'Nazwa forum',
	'FORUM_NOT_EXIST'		=> 'Wybrane forum nie istnieje.',
	'FORUM_NOT_POSTABLE'	=> 'Nie można pisać na wybranym forum.',
	'FORUM_STATUS'			=> 'Status forum',
	'FORUM_STYLE'			=> 'Styl forum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Ogłoszenie globalne',

	'IP_INFO'				=> 'Informacje o IP',
	'IPS_POSTED_FROM'		=> 'Inne adresy IP, z których pisał ten użytkownik',

	'LATEST_LOGS'				=> 'Ostatnie 5 czynności',
	'LATEST_REPORTED'			=> 'Ostatnie 5 zgłoszeń',
	'LATEST_REPORTED_PMS'		=> 'Ostatnie 5 zgłoszeń PW',
	'LATEST_UNAPPROVED'			=> 'Ostatnie 5 postów oczekujących na zaakceptowanie',
	'LATEST_WARNING_TIME'		=> 'Data ostatniego ostrzeżenia',
	'LATEST_WARNINGS'			=> 'Ostatnie 5 ostrzeżeń',
	'LEAVE_SHADOW'				=> 'Pozostaw odnośnik na starym forum',
	'LIST_REPORTS'				=> array(
		1	=> 'Zgłoszenia: %d',
		2	=> 'Zgłoszenia: %d',
		3	=> 'Zgłoszenia: %d',
	),
	'LOCK'						=> 'Zamknij',
	'LOCK_POST_POST'			=> 'Zamknij post',
	'LOCK_POST_POST_CONFIRM'	=> 'Czy na pewno chcesz zablokować możliwość edytowania tego posta?',
	'LOCK_POST_POSTS'			=> 'Zamknij zaznaczone posty',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Czy na pewno chcesz zablokować możliwość edytowania zaznaczonych postów?',
	'LOCK_TOPIC_CONFIRM'		=> 'Czy na pewno chcesz zamknąć ten temat?',
	'LOCK_TOPICS'				=> 'Zamknij zaznaczone tematy',
	'LOCK_TOPICS_CONFIRM'		=> 'Czy na pewno chcesz zamknąć zaznaczone tematy?',
	'LOGS_CURRENT_TOPIC'		=> 'Przeglądane są zapisy dziennika zdarzeń tematu:',
	'LOGIN_EXPLAIN_MCP'			=> 'Aby moderować to forum, musisz się zalogować.',
	'LOGVIEW_VIEWTOPIC'			=> 'Zobacz temat',
	'LOGVIEW_VIEWLOGS'			=> 'Zobacz dziennik tematu',
	'LOGVIEW_VIEWFORUM'			=> 'Zobacz forum',
	'LOOKUP_ALL'				=> 'Sprawdź wszystkie adresy IP',
	'LOOKUP_IP'					=> 'Sprawdź adres IP',

	'MARKED_NOTES_DELETED'		=> 'Usunięto wszystkie zaznaczone notatki o użytkowniku.',

	'MCP_ADD'						=> 'Udziel ostrzeżenia',

	'MCP_BAN'					=> 'Blokowanie',
	'MCP_BAN_EMAILS'			=> 'Blokowanie adresów e-mail',
	'MCP_BAN_IPS'				=> 'Blokowanie adresów IP',
	'MCP_BAN_USERNAMES'			=> 'Blokowanie użytkowników',

	'MCP_LOGS'						=> 'Dziennik moderacji',
	'MCP_LOGS_FRONT'				=> 'Przegląd',
	'MCP_LOGS_FORUM_VIEW'			=> 'Dziennik forum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Dziennik tematu',

	'MCP_MAIN'						=> 'Panel moderacji',
	'MCP_MAIN_FORUM_VIEW'			=> 'Zobacz forum',
	'MCP_MAIN_FRONT'				=> 'Przegląd',
	'MCP_MAIN_POST_DETAILS'			=> 'Szczegóły posta',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Zobacz temat',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Zmień na ogłoszenie',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Czy na pewno chcesz zmienić typ tego tematu na „ogłoszenie”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Zmień na ogłoszenia',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Czy na pewno chcesz zmienić typ tych tematów na „ogłoszenie”?',
	'MCP_MAKE_GLOBAL'				=> 'Zmień na ogłoszenie globalne',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ tego tematu na „ogłoszenie globalne”?',
	'MCP_MAKE_GLOBALS'				=> 'Zmień na ogłoszenia globalne',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ tych tematów na „ogłoszenie globalne”?',
	'MCP_MAKE_STICKY'				=> 'Zmień na przyklejony',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ tego tematu na „przyklejony”?',
	'MCP_MAKE_STICKIES'				=> 'Zmień na przyklejone',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ wybranych tematów na „przyklejony”?',
	'MCP_MAKE_NORMAL'				=> 'Zmień na zwykły temat',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ tego tematu na „zwykły temat”?',
	'MCP_MAKE_NORMALS'				=> 'Zmień na zwykłe tematy',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Czy na pewno chcesz zmienić typ tych tematów na „zwykły temat”?',

	'MCP_NOTES'						=> 'Opinie o użytkownikach',
	'MCP_NOTES_FRONT'				=> 'Przegląd',
	'MCP_NOTES_USER'				=> 'Opinie o użytkowniku',

	'MCP_POST_REPORTS'				=> 'Zgłoszenia wystawione dla tego posta',

	'MCP_PM_REPORTS'				=> 'Zgłoszone PW',
	'MCP_PM_REPORT_DETAILS'			=> 'Szczegóły zgłoszenia prywatnych wiadomości',
	'MCP_PM_REPORTS_CLOSED'			=> 'Sprawdzone PW',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Wykaz sprawdzonych prywatnych wiadomości.',
	'MCP_PM_REPORTS_OPEN'			=> 'Zgłoszone PW',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Wykaz prywatnych wiadomości zgłoszonych do sprawdzenia.',

	'MCP_REPORTS'					=> 'Zgłoszenia',
	'MCP_REPORT_DETAILS'			=> 'Szczegóły zgłoszeń',
	'MCP_REPORTS_CLOSED'			=> 'Sprawdzone posty',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Wykaz sprawdzonych postów.',
	'MCP_REPORTS_OPEN'				=> 'Zgłoszone posty',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Wykaz postów zgłoszonych do sprawdzenia.',

	'MCP_QUEUE'								=> 'Kolejka',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Zaakceptuj szczegóły',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Posty oczekujące na akceptację',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Wykaz postów, które muszą zostać zaakceptowane zanim będą widoczne dla użytkowników.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Tematy oczekujące na akceptację',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Wykaz tematów, które muszą zostać zaakceptowane zanim będą widoczne dla użytkowników.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Ukryte posty',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Wykaz ukrytych postów. Z tego miejsca można je przywrócić lub trwale usunąć.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Ukryte tematy',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Wykaz ukrytych tematów. Z tego miejsca można je przywrócić lub trwale usunąć.',

	'MCP_VIEW_USER'			=> 'Pokaż ostrzeżenia użytkownika',

	'MCP_WARN'				=> 'Ostrzeżenia',
	'MCP_WARN_FRONT'		=> 'Przegląd',
	'MCP_WARN_LIST'			=> 'Wykaz ostrzeżeń',
	'MCP_WARN_POST'			=> 'Udziel ostrzeżenia za ten post',
	'MCP_WARN_USER'			=> 'Udziel ostrzeżenia',

	'MERGE_POSTS_CONFIRM'	=> 'Czy na pewno chcesz przenieść wybrane posty?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Używając tego formularza można przenieść zaznaczone posty do innego tematu. Posty zostaną wydzielone z tego tematu i dołączone do innego tematu. Nie zostanie zmieniona ich kolejność i będą wyglądały tak, jakby użytkownicy napisali je w docelowym temacie.<br />Wprowadź numer ID docelowego tematu lub kliknąć „Wybierz temat”.',
	'MERGE_TOPIC_ID'		=> 'Numer ID docelowego tematu',
	'MERGE_TOPICS'			=> 'Połącz tematy',
	'MERGE_TOPICS_CONFIRM'	=> 'Czy na pewno chcesz połączyć wybrane tematy?',
	'MODERATE_FORUM'		=> 'Moderuj forum',
	'MODERATE_TOPIC'		=> 'Moderuj temat',
	'MODERATE_POST'			=> 'Moderuj post',
	'MOD_OPTIONS'			=> 'Opcje moderacji',
	'MORE_INFO'				=> 'Dalsze informacje',
	'MOST_WARNINGS'			=> 'Użytkownicy z największą liczbą ostrzeżeń',
	'MOVE_TOPIC_CONFIRM'	=> 'Czy na pewno chcesz przenieść ten temat do nowego forum?',
	'MOVE_TOPICS'			=> 'Przenieś zaznaczone tematy',
	'MOVE_TOPICS_CONFIRM'	=> 'Czy na pewno chcesz przenieść zaznaczone tematy do nowego forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Powiadom autora o zaakceptowaniu',
	'NOTIFY_POSTER_DISAPPROVAL' 		=> 'Powiadom autora o odrzuceniu',
	'NOTIFY_USER_WARN'				=> 'Powiadom użytkownika o ostrzeżeniu',
	'NOT_MODERATOR'					=> 'Nie jesteś moderatorem tego forum.',
	'NO_DESTINATION_FORUM'			=> 'Wybierz docelowe forum.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Żadne docelowe forum nie jest dostępne.',
	'NO_ENTRIES'					=> 'Brak wpisów w dzienniku zdarzeń.',
	'NO_FEEDBACK'					=> 'Nie ma żadnych opinii o tym użytkowniku.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Aby połączyć posty, należy wybrać docelowy temat.',
	'NO_MATCHES_FOUND'				=> 'Nic nie znaleziono.',
	'NO_POST'						=> 'Aby udzielić użytkownikowi ostrzeżenia za post, należy zaznaczyć ten post.',
	'NO_POST_REPORT'				=> 'Ten post nie został zgłoszony.',
	'NO_POST_SELECTED'				=> 'Aby wykonać tę czynność, należy zaznaczyć co najmniej jeden post.',
	'NO_POSTS_DELETED'				=> 'Nie ma usuniętych postów.',
	'NO_POSTS_QUEUE'				=> 'Nie ma postów oczekujących na zaakceptowanie.',
	'NO_REASON_DISAPPROVAL'			=> 'Podaj powód odrzucenia posta.',
	'NO_REPORT'						=> 'Nie znaleziono żadnego zgłoszenia.',
	'NO_REPORTS'					=> 'Nie znaleziono żadnych zgłoszeń.',
	'NO_REPORT_SELECTED'			=> 'Aby wykonać tę czynność, należy zaznaczyć co najmniej jedno zgłoszenie.',
	'NO_TOPIC_ICON'					=> 'Brak',
	'NO_TOPIC_SELECTED'				=> 'Należy zaznaczyć co najmniej jeden temat.',
	'NO_TOPICS_DELETED'				=> 'Nie ma usuniętych tematów.',
	'NO_TOPICS_QUEUE'				=> 'Żaden temat nie oczekuje na zaakceptowanie.',

	'ONLY_TOPIC'			=> 'Tylko temat „%s”',
	'OTHER_USERS'			=> 'Inni użytkownicy, którzy pisali z tego IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s jest nie dozwolone do moderacji",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Wybrane zgłoszenie PW zostało zamknięte.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Wybrane zgłoszenie PW zostało usunięte.',
	'PM_REPORTED_SUCCESS'		=> 'Ta prywatna wiadomość została zgłoszona.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Wybrane zgłoszenia PW zostały zamknięte.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Wybrane zgłoszenia PW zostały usunięte.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Nie ma zgłoszeń PW do przejrzenia.',
		1	=> 'Jest <strong>1</strong> zgłoszenie PW do przejrzenia.',
		2	=> 'Są <strong>%d</strong> zgłoszenia PW do przejrzenia.',
		3	=> 'Jest <strong>%d</strong> zgłoszeń PW do przejrzenia.',
	),
	'PM_REPORT_DETAILS'			=> 'Szczegóły zgłoszenia prywatnej wiadomości',
	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	=> 'Wybrane posty zostały zaakceptowane.',
	'POSTS_DELETED_SUCCESS'		=> 'Wybrane posty zostały usunięte z bazy danych.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Wybrane posty zostały odrzucone.',
	'POSTS_LOCKED_SUCCESS'		=> 'Wybrane posty zostały zablokowane.',
	'POSTS_MERGED_SUCCESS'		=> 'Wybrane posty zostały połączone.',
	'POSTS_PER_PAGE'			=> 'Liczba postów na stronie',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(0 - wszystkie posty)',
	'POSTS_RESTORED_SUCCESS'	=> 'Wybrane posty zostały przywrócone.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Wybrane posty zostały odblokowane.',
	'POST_APPROVED_SUCCESS'		=> 'Wybrany post został zaakceptowany.',
	'POST_DELETED_SUCCESS'		=> 'Wybrany post został usunięty z bazy danych.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Wybrany post został odrzucony.',
	'POST_LOCKED_SUCCESS'		=> 'Post został zablokowany.',
	'POST_NOT_EXIST'			=> 'Żądany post nie istnieje.',
	'POST_REPORTED_SUCCESS'		=> 'Post został zgłoszony.',
	'POST_RESTORED_SUCCESS'		=> 'Ten post został przywrócony.',
	'POST_UNLOCKED_SUCCESS'		=> 'Post został odblokowany.',

	'READ_USERNOTES'			=> 'Opinie o użytkowniku',
	'READ_WARNINGS'				=> 'Ostrzeżenia użytkownika',
	'REPORTER'					=> 'Zgłaszający',
	'REPORTED'					=> 'Zgłoszenie -',
	'REPORTED_BY'				=> 'Zgłoszony przez',
	'REPORTED_ON_DATE'			=> 'dodano:',
	'REPORTS_CLOSED_SUCCESS'	=> 'Wybrane zgłoszenia zostały zamknięte.',
	'REPORTS_DELETED_SUCCESS'	=> 'Wybrane zgłoszenia zostały usunięte.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Nie ma zgłoszeń do przejrzenia.',
		1	=> 'Jest <strong>1.</strong> zgłoszenie do przejrzenia.',
		2	=> 'Są <strong>%d</strong> zgłoszenia do przejrzenia.',
		3	=> 'Jest <strong>%d</strong> zgłoszeń do przejrzenia.',
	),
	'REPORT_CLOSED'				=> 'To zgłoszenie zostało już zamknięte.',
	'REPORT_CLOSED_SUCCESS'		=> 'Wybrane zgłoszenie zostało zamknięte.',
	'REPORT_DELETED_SUCCESS'	=> 'Wybrane zgłoszenie zostało usunięte.',
	'REPORT_DETAILS'			=> 'Szczegóły zgłoszenia',
	'REPORT_MESSAGE'			=> 'Zgłaszanie wiadomości',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Użyj tego formularza, aby zgłosić wybraną prywatną wiadomość do przejrzenia. Zgłoszenia należy dokonać tylko jeśli wiadomość nie dochowuje postanowień regulaminu forum. <strong>Zgłoszenie prywatnej wiadomości spowoduje, że będzie ona widoczna dla wszystkich moderatorów.</strong>',
	'REPORT_NOTIFY'				=> 'Powiadom mnie',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Po sprawdzeniu zgłoszenia zostanie wysłane powiadomienie.',
	'REPORT_POST_EXPLAIN'		=> 'Użyj tego formularza, aby zgłosić wybrany post do moderatorów forum i administratorów witryny. Zgłoszenia należy dokonać tylko jeśli post nie dochowuje postanowień regulaminu forum.',
	'REPORT_REASON'				=> 'Powód zgłoszenia',
	'REPORT_TIME'				=> 'Data zgłoszenia',
	'RESTORE'					=> 'Przywracanie',
	'RESTORE_POST'				=> 'Przywróć post',
	'RESTORE_POST_CONFIRM'		=> 'Czy na pewno chcesz przywrócić ten post?',
	'RESTORE_POSTS'				=> 'Przywróć posty',
	'RESTORE_POSTS_CONFIRM'		=> 'Czy na pewno chcesz przywrócić wybrane posty?',
	'RESTORE_TOPIC'				=> 'Przywróć temat',
	'RESTORE_TOPIC_CONFIRM'		=> 'Czy na pewno chcesz przywrócić ten temat?',
	'RESTORE_TOPICS'			=> 'Przywróć tematy',
	'RESTORE_TOPICS_CONFIRM'	=> 'Czy na pewno chcesz przywrócić wybrane tematy?',
	'RESYNC'					=> 'Synchronizuj ponownie',
	'RETURN_MESSAGE'			=> '%sWróć do wiadomości%s',
	'RETURN_NEW_FORUM'			=> '%sPrzejdź do nowego forum%s',
	'RETURN_NEW_TOPIC'			=> '%sPrzejdź do nowego tematu%s',
	'RETURN_PM'					=> '%sWróć do prywatnej wiadomości%s',
	'RETURN_POST'				=> '%sWróć do posta%s',
	'RETURN_QUEUE'				=> '%sWróć do kolejki%s',
	'RETURN_REPORTS'			=> '%sWróć do zgłoszeń%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sWróć do tematu%s',

	'SEARCH_POSTS_BY_USER'				=> 'Szukaj postów wg',
	'SELECT_ACTION'						=> 'Wybierz pożądane działanie',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Wybierz forum, na którym to globalne ogłoszenie będzie wyświetlane.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jeden lub więcej z wybranych tematów to ogłoszenia globalne. Wybierz forum, na którym będą one wyświetlane.',
	'SELECT_MERGE'						=> 'Wybierz do połączenia',
	'SELECT_TOPICS_FROM'				=> 'Wybierz tematy z',
	'SELECT_TOPIC'						=> 'Wybierz temat',
	'SELECT_USER'						=> 'Wybierz użytkownika',
	'SORT_ACTION'						=> 'Dziennik zdarzeń',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Adres IP',
	'SORT_WARNINGS'						=> 'Ostrzeżenia',
	'SPLIT_AFTER'						=> 'Utwórz osobny temat z zaznaczonego posta i następnych',
	'SPLIT_FORUM'						=> 'Forum dla nowego tematu',
	'SPLIT_POSTS'						=> 'Wydziel zaznaczone posty',
	'SPLIT_SUBJECT'						=> 'Tytuł nowego tematu',
	'SPLIT_TOPIC_ALL'					=> 'Utwórz osobny temat z zaznaczonych postów',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Czy na pewno chcesz podzielić ten temat?',
	'SPLIT_TOPIC_BEYOND'				=> 'Utwórz osobny temat z zaznaczonego posta i poprzedzających',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Czy na pewno chcesz podzielić ten temat na wybranym poście?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Używając tego formularza można podzielić temat na dwa tematy poprzez zaznaczenie każdego posta osobno lub jednego posta, na którym nastąpi rozdzielenie tematu.',

	'THIS_PM_IP'				=> 'IP dla tej prywatnej wiadomości',
	'THIS_POST_IP'				=> 'Adres IP autora tego posta',
	'TOPICS_APPROVED_SUCCESS'	=> 'Wybrane tematy zostały zaakceptowane.',
	'TOPICS_DELETED_SUCCESS'	=> 'Wybrane tematy zostały usunięte z bazy danych.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Wybrane tematy zostały odrzucone.',
	'TOPICS_FORKED_SUCCESS'		=> 'Wybrane tematy zostały skopiowane.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Wybrane tematy zostały zamknięte.',
	'TOPICS_MOVED_SUCCESS'		=> 'Wybrane tematy zostały przeniesione.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Wybrane tematy zostały przywrócone.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Wybrane tematy zostały ponownie zsynchronizowane.',
	'TOPICS_TYPE_CHANGED'		=> 'Typy tematów zostały zmienione.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Wybrane tematy zostały odblokowane.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Wybrany temat został zaakceptowany.',
	'TOPIC_DELETED_SUCCESS'		=> 'Wybrany temat został usunięty z bazy danych.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Wybrany temat został odrzucony.',
	'TOPIC_FORKED_SUCCESS'		=> 'Wybrany temat został skopiowany.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Wybrany temat został zamknięty.',
	'TOPIC_MOVED_SUCCESS'		=> 'Wybrany temat został przeniesiony.',
	'TOPIC_NOT_EXIST'			=> 'Wybrany temat nie istnieje.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Wybrane tematy zostały przywrócone.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Wybrany temat został ponownie zsynchronizowany.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Wybrany temat został podzielony.',
	'TOPIC_TIME'				=> 'Data publikacji',
	'TOPIC_TYPE_CHANGED'		=> 'Typ tematu został zmieniony.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Wybrany temat został odblokowany.',
	'TOTAL_WARNINGS'			=> 'Liczba ostrzeżeń',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Żaden post nie oczekuje na zaakceptowanie.',
		1	=> 'Jeden post oczekuje na zaakceptowanie.',
		2	=> 'Są <strong>%d</strong> posty oczekujące na zaakceptowanie.',
		3	=> 'Jest <strong>%d</strong> postów oczekujących na zaakceptowanie.',
	),
	'UNLOCK'						=> 'Odblokuj',
	'UNLOCK_POST'					=> 'Odblokuj post',
	'UNLOCK_POST_EXPLAIN'			=> 'Pozwól na jego edytowanie',
	'UNLOCK_POST_POST'				=> 'Odblokuj post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Czy na pewno chcesz pozwolić na edytowanie tego posta?',
	'UNLOCK_POST_POSTS'				=> 'Odblokuj wybrane posty',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Czy na pewno chcesz pozwolić na edytowanie wybranych postów?',
	'UNLOCK_TOPIC'					=> 'Odblokuj temat',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Czy na pewno chcesz odblokować ten temat?',
	'UNLOCK_TOPICS'					=> 'Odblokuj wybrane tematy',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Czy na pewno chcesz odblokować wybrane tematy?',
	'USER_CANNOT_POST'				=> 'Nie możesz pisać na tym forum.',
	'USER_CANNOT_REPORT'			=> 'Nie możesz zgłaszać postów na tym forum.',
	'USER_FEEDBACK_ADDED'			=> 'Opinia o użytkowniku została dodana.',
	'USER_WARNING_ADDED'			=> 'Ostrzeżenie zostało udzielone.',

	'VIEW_DETAILS'			=> 'Pokaż szczegóły',
	'VIEW_PM'				=> 'Pokaż prywatną wiadomość',
	'VIEW_POST'				=> 'Pokaż post',

	'WARNED_USERS'			=> 'Użytkownicy z ostrzeżeniami',
	'WARNED_USERS_EXPLAIN'	=> 'Lista użytkowników mających na swoim koncie niewygasłe ostrzeżenia.',
	'WARNING_PM_BODY'		=> 'To jest ostrzeżenie udzielone przez moderatora lub administratora forum: [quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Udzielone ostrzeżenia',
	'WARNING_POST_DEFAULT'	=> 'To jest ostrzeżenie mające związek z twoim postem: %s.',
	'NO_WARNINGS'	=> 'Brak ostrzeżeń.',

	'YOU_SELECTED_TOPIC'	=> 'Wybrano temat numer %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Poza tematem',
			'OTHER'		=> 'Inne',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Post zawiera odnośniki do nielegalnego oprogramowania.',
			'SPAM'		=> 'Post zawiera reklamy strony internetowej lub innych produktów.',
			'OFF_TOPIC'	=> 'Treść posta nie dotyczy tematu dyskusji.',
			'OTHER'		=> 'Powód zgłoszenia nie pasuje do powyższych kategorii. Podaj powód w polu opisu.',
		),
	),
));
