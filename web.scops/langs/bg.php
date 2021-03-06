<?php 

  include_once '../php_main/lock.php';

  $langs = array(
    'verified' => 'проверена',
    'views' => 'Прегледи',
    'calling' => 'Моля изчакай. Повикване..',
    'change_url' => 'Промяна на URL',
    'choose_url' => 'Промяна на URL',
    'url_pattern' => 'Букви, цифри и долна черта, дължина 2 - 25',
    'url_error1' => 'Вече зает',
    'url_error2' => 'Напишете правилния URL',
    'url_error3' => 'Изберете друга URL',
    'theme' => 'Тема',
    'chat_main' => 'Избери диалог',
    'my_account' => 'Моя профил',
    'suggested_fr' => 'Хора който може би познавате',
    'suggested_cl' => 'Клубове, които искали',
    'attach_audios' => 'Прикрепи аудио',
    'attach_videos' => 'Прикрепи видео',
    'attach_images' => 'Прикрепи изображение',
    'media' => 'Медиа',
    'about' => 'Инфо',
    'load_more_fr' => 'Покажи още приятели',
    'gifts' => 'Подаръци',
    'empty' => 'Празно',
    'send' => 'Изпрати',
    'gf_header' => 'Магазин за подаръци',
    'gf_all_gfs' => 'Всички подаръци',
    'not_available_mob' => 'Тази страница не е налична в тази версия',
    'close' => 'Затвори',
    'photo_gal_title' => 'Снимка',
    'photo_gal_of' => 'от',
    'content_author' => 'Автор',
    'content_cont' => 'Съдържание',
    'success' => 'Успешно',
    'loading' => 'Зареждане',
    'loading_pls' => 'Зареждане.Моля изчакайте..',
    'error' => 'Грешка',
    'error_try' => 'Грешка. Опитайте отново.',
    'man' => 'Мъж',
    'woman' => 'Жена',
    'male_suf' => '',
    'female_suf' => '',
    'all' => 'Всичко',
    'everybody' => 'Всички',
    'only_me' => 'Само аз',
    'only_friends' => 'Само приятели',
    'tag' => 'Таг',
    'add' => 'Добави',
    'ask' => 'Попитай',
    'refresh' => 'Обнови',
    'answer' => 'Отговор',
    'accept' => 'Приеми',
    'invite' => 'Покани',
    'attach' => 'Приеми',
    'create' => 'Създай',
    'submit' => 'Добави',
    'remove' => 'Премахни',
    'delete' => 'Изтрии',
    'save' => 'Запази',
    'save_ch' => 'Запази промените',
    'enabled' => 'Включено',
    'disabled' => 'Изключено',
    'added' => 'Добавено',
    'removed' => 'Премахнато',
    'yes' => 'Да',
    'no' => 'Не',
    'months' => ['Jan.','Feb.','Mar.','Apr.','May','June','July','Aug.','Sept.','Oct.','Nov.','Dec.'],
    'days' => ['Mo','Tu','We','Th','Fr','Sa','Su'],
    'now' => 'Сега',
    'sing_year' => 'Година',
    'month' => 'Месец',
    'sing_day' => 'Ден',
    'day' => 'дни',
    'hour' => 'часа',
    'min' => 'минути',
    'sec' => 'секунди',
    'posts' => 'Публикации',
    'post' => 'Публикация',
    'find' => 'Търси',
    'search' => 'Търсене',
    'playlist' => 'Плейлист',
    'audioplayer' => 'Музика',
    'dialogues' => 'Чат',
    'news' => 'Новини',
    'datings' => 'Запознанства',
    'top' => 'Топ',
    'events' => 'Събития',
    'online' => 'Онлайн',
    'online_people' => 'Онлайн в момента',
    'games' => 'Игри',
    'messages' => 'Съобщения',
    'notifications' => 'Известия',
    'requests' => 'Заявки',
    'visitors' => 'Гости',
    'my_friends' => 'Моите приятели',
    'my_photos' => 'Моите снимки',
    'my_clubs' => 'Моите клубове',
    'my_audios' => 'Моята музика',
    'settings' => 'Настройки',
    'year' => 'Години',
    'photo' => 'Снимка',
    'wall' => 'Стена',
    'photos' => 'Снимки',
    'friends' => 'Приятели',
    'clubs' => 'Клубове',
    'video' => 'Видео',
    'audio' => 'Музика',
    'privacy' => 'За съжаление няма съдържание.',
    'name' => 'Име',
    'descr' => 'Описание',
    'gender' => 'Пол',
    'city' => 'Град',
    'country' => 'Държава',
    'link' => 'Линк',
    'rat' => 'Рейтинг',
    'last_visit' => 'Последно онлайн',
    'guests' => 'Гости',
    'mutual_friends' => 'Общи приятели',
    'followers' => 'Последователи',
    'hashtag' => 'Хаштаг',
    'audio_once' => 'Само веднъж',
    'audio_repeat' => 'Повтаряне',
    'audio_all' => 'Пусни всички',
    'dbl_like' => 'Двойно кликване за да видите всички хора които харесват това.',
    'dbl_unlike' => 'Двойно кликване за да видите всички хора които не харесват това.',
    'to_comment' => 'Коментирай',
    'to_share' => 'Сподели',
    'with' => 'В компанията на',
    'to_prof_pic' => 'Задай като профилна снимка',
    'to_cover_pic' => 'Задай като снимка на корицата',
    'to_gr_prof_pic' => 'Задай като профилна снимка на клуб',
    'to_gr_cover_pic' => 'Задай като снимка на корицата за клуб',
    'write_comm' => 'Напиши коментар',
    'empty_chat' => 'Нямате диалози',
    'write_msg' => 'Напиши съобщение',
    'invite_fr' => 'Покани приятели',
    'accept_inv' => 'Приеми поканата',
    'remove_inv' => 'Премахни поканата',
    'will_go' => 'Да аз ще присъствам',
    'wont_go' => 'Не , няма да присъствам',
    'feed_status' => 'Текст',
    'people' => 'Хора',
    'top_header' => 'Топ 50 потребителя',
    'events_header' => 'Присъствайте на събития, или да създавайте свой собствени',
    'prev_month' => 'Пред. месец',
    'next_month' => 'След. месец',
    'photo_from' => 'Снимка от',
    'im_count' => 'Брой снимки',
    'curr_photo' => 'Текуща снимка',
    'curr_link' => 'Линк на снимката',
    'im_host' => 'Хост на изображението',
    'vid_name' => 'Име на видеото',
    'vid_length' => 'Продължителност на видеото',
    'vid_from' => 'Видео от',
    'vid_host' => 'Хост на видеото',
    'sticker' => 'Стикер',
    'accept_fr' => 'Приеми заявката',
    'attach_aud' => 'Избор на музика : Плейлист',
    'attach_aud_empty' => 'Вие нямате никакви аудиозаписи. За да прикрепите аудио запис моля качете.',
    'attach_vid' => 'Избор на видео : Качени',
    'attach_vid_empty' => 'Виде нямате видеозаписи. За да прикрепите видеозапис моля качете.',
    'attach_people' => 'Избор на хора',
    'attach_people_empty' => 'Виде нямате никакви приятели/последователи за тагване.',
    'inv_people' => 'Покани приятели',
    'inv_people_empty' => 'Вие нямате приятели който да поканите.',
    'people_who_likes' => 'Хора които харесват това',
    'people_who_unlikes' => 'Хора които не харесват това',
    'box_people_empy' => 'Няма хора за показване',
    'to' => 'До',
    'ask_header' => 'Задай анонимен въпрос',
    'st_header' => 'Магазин за стикери',
    'st_my_st' => 'Моите стикери',
    'st_empty' => 'Все още нямате стикери',
    'all_st' => 'Всички стикери',
    'event_form' => 'Създаване на ново събитие',
    'ev_title' => 'Име на събитието',
    'ev_about' => 'Информация за събитието',
    'ev_place' => 'Къде ще се състои?',
    'ev_start' => 'Къде ще стартира събитието?',
    'private_ev' => 'Лично събитие (Достъп до събитието ще имат само поканени хора. )',
    'ev_cover' => 'Избор на корица',
    'ev_date' => 'Изберете дата',
    'send_inv' => 'Изпрати покана',
    'set_account' => 'Настройки на профила',
    'set_privacy' => 'Конфиденциалност',
    'show_date' => 'Покажи ме в блока за запознанства',
    'curr_pass' => 'Сегашна парола',
    'gen_set' => 'Основни настройки',
    'change_pass' => 'Смяна на паролата',
    're_enter_new_pass' => 'Въведете още веднъж новата парола',
    'new_pass' => 'Нова парола ( [ 6 - 25 ] , най-малко 1 главна , 1 малка буква , 1 число ) ',
    'del_prof' => 'Изтриване на профила',
    'admins' => 'Администратори',
    'set_gr_ban' => 'Баннати потребители',
    'set_del_gr' => 'Изтриване на клуба',
    'private_club' => 'Частен клуб (Само потребители който следват клуба могат да виждат публикациите. )',
    'gr_set_admin' => 'Администратори. Най-малко един администратор би трябвало да съществува.',
    'add_admin' => 'Добавяне на администратор',
    'search_for_admin' => 'Търсене по ID около членовете на клуба',
    'gr_requests' => 'Абонаментни заявки',
    'requests_empty' => 'Към момента няма заявки',
    'set_ban_empty' => 'Към момента няма баннати потребители',
    'set_gr_set_ban' => 'Блокирай потребители',
    'search_by_id' => 'Търсене по ID',
    'del_gr_head' => 'Сигурни ли сте че искате да изтриете този Клуб?',
    'notif_others' => 'и други',
    'notif_like_plural' => 'Хареса ваша публикация.',
    'notif_like_man' => 'Хареса ваша публикация',
    'notif_like_woman' => 'Хареса ваша публикация',
    'notif_gift_man' => 'Ви изпрати подарък',
    'notif_gift_woman' => 'Ви изпрати подарък',
    'notif_unlike_plural' => 'Не харесва ваша публикация.',
    'notif_unlike_man' => 'Не харесва ваша публикация',
    'notif_unlike_woman' => 'Не харесва ваша публикация',
    'notif_share_man' => 'Сподели ваша публикация.',
    'notif_share_woman' => 'Сподели ваша публикация.',
    'notif_comm_man' => 'Коментира ваша публикация.',
    'notif_comm_woman' => 'Коментира ваша публикация.',
    'notif_answer_man' => 'Отговори на вашия въпрос.',
    'notif_answer_woman' => 'Отговори на вашия въпрос.',
    'notif_answer' => 'Отговор',
    'notif_question' => 'Вие получихте въпрос',
    'notif_date_man' => 'Ви сръчка',
    'notif_date_woman' => 'Ви сръчка',
    'datings_app' => 'Запознанства',
    'notif_tag_man' => 'Ви тагна в своя публикация.',
    'notif_tag_woman' => 'Ви тагна в своя публикация',
    'notif_inv_ev_woman' => 'Ви изпрати покана за събитие.',
    'notif_inv_ev_man' => 'Ви изпрати покана за събитие',
    'notif_inv_cl_woman' => 'Ви изпрати покана за присъединяване към клуб',
    'notif_inv_cl_man' => 'Ви изпрати покана за присъединяване към клуб',
    'notif_frreq_woman' => 'Прие вашата заявка за приятелство',
    'notif_frreq_man' => 'Прие вашата заявка за приятелство',
    'notif_type_an' => 'Напишете отговор',
    'events_app' => 'Събития',
    'events_more' => 'Още..',
    'sticker_empty' => 'Вие нямате нито един стикер пакет, добавете стикери от Магазина за Стикери.',
    'sticker_empty_store' => 'Вие нямате нито един стикер пакет',
    'sticker_added' => 'Беше добавен нов стикер пакет',
    'sticker_removed' => 'Стикер пакет беше премахнат от вашите стикери.',
    'thumb' => 'Миниатюра',
    'thumb_descr' => 'Избраната от вас фото миниатюра ще се използва в новинарския поток, лични съобщения, коментари и  т.н',
    'empty_dating' => 'Няма открити потребители.',
    'events_my' => 'Моите събития',
    'events_top' => 'Топ 10 събития',
    'nocont_cont' => 'Няма съдържание з апоказване',
    'nocont_post' => 'Няма публикации за показване',
    'nocont_aud' => 'Няма музика за показване',
    'nocont_notif' => 'Няма известия за показване',
    'nocont_photo' => 'Няма изображения за показавне',
    'nocont_fr' => 'Няма приятели за показване',
    'nocont_cl' => 'Няма клубове за показване',
    'nocont_vid' => 'Няма видео за показване',
    'nocont_follow' => 'Няма последователи за показване',
    'nocont_news' => 'Няма новини за показване',
    'nocont_event' => 'Няма събития за показване',
    'nocont_sms' => 'Няма дискусии за показване',
    'nocont_dialogue' => 'Няма диалози за показване',
    'new_msg' => 'Ново съобщение',
    'post_metetions' => 'Тагове',
    'post_images' => 'Снимки',
    'post_link' => 'Линк',
    'post_audio' => 'Музика',
    'post_video' => 'Видео',
    'ajax_upl' => 'Качване..',
    'ajax_success' => 'Успешно',
    'ajax_inv_format' => 'Невалиден формат',
    'ajax_big_size' => 'Прекалено голям файл',
    'ajax_select' => 'Избери медиафайл',
    'ajax_aborted' => 'Качването беше прекратено',
    'post_text' => 'Какво ново около вас?',
    'post_sb' => 'Публикувай',
    'post_upl' => 'Качване',
    'post_descr' => 'Напишете описание..',
    'post_choose_vid' => 'Изберете видео',
    'post_aud_name' => 'Напишете името на песента..',
    'post_choose_aud' => 'Изберете музика',
    'post_gr_name' => 'Напишете името на клуба..',
    'search_gender' => 'Пол',
    'search_from' => 'От',
    'search_to' => 'До',
    'search_open' => 'Публичен профил',
    'search_gr_descr' => 'Ключова дума от описание',
    'alert_event' => 'Зареждане.. Създаване на събитие',
    'alert_gr_del' => 'Групата беше изтрита',
    'alert_changes_saved' => 'Промените бяха запазени',
    'alert_inv_rem' => 'Поканата беше премахната',
    'alert_inv_acc' => 'Поканата беше приета',
    'alert_inv_sent' => 'Поканата беше изпратена',
    'alert_ev_del' => 'Събитието беше изтрито',
    'alert_answer_sent' => 'Отговора беше изпратен',
    'alert_share' => 'Публикацията беше споделена',
    'alert_follow' => 'Вие вече следвате този потребител',
    'alert_follow_not' => 'Вие вече не следвате този потребител',
    'alert_blocked' => 'Потребителя беше блокиран',
    'alert_unblocked' => 'Потребителя беше отблокиран',
    'alert_date_like' => 'Потребителя беше сръчкан',
    'alert_deleting' => 'Изтриване',
    'error_404' => 'The page has not been found.',
    'home' => 'Начало ',
    'mus_header' => 'Слушам музика',
    'a_player_empty' => 'Плейлиста е празен',
    'nocont_games' => 'Няма игри за показване',
    'nocont_user_games' => 'Вие все още нямате игри.',
    'games_header' => 'Играй игри',
    'my_games_header' => 'Моите игри',
    'games_title' => 'Тук можете да намерите всяка игра, която искате',
    'games_genres' => [ '1' => 'Всички' , '2' => 'Екшън', '3' => 'Състезания', '4' => 'Стрелба', '5' => 'Стратегия' ],
    'unseen' => 'Ново съобщение',
    'announcement' => 'Новини от Администрацията',
    'voice_control' => 'Voice Control',
    'voice_tap' => 'Натисни за старт. Език:Английски ',
    'voice_connected' => 'Здравей. Кажи какво да направя..',
    'voice_hello' => 'Кажи hello!',
    'voice_listen' => 'Здравей слушам те..',
    'voice_next' => 'Докоснете, за да се каже, следващата команда.',
    'voice_success' => 'Чудесно. Открих командата.',
    'voice_again' => 'Няма открити команди.. Опитай отново.',
    'exit' => 'Изход'
  );
  
  if( isset( $_POST['get_langs'] ) ) echo json_encode( $langs );
?>