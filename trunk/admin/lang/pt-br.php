<?php
if (!defined('DIRECT_ACCESS')) { header( 'Location: ../../' ); exit(); }
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Language File (Portuguese Brazilian PT-BR).              //          
// Author: Gustavo Jordan (gustavojcbrasil@gmail.com)              //
//*****************************************************************//
if (!isset($delete)) { $delete = NULL; }
if (!isset($username)) { $username = NULL; }
$lang = array(
	// system
	'skip_to' => 'Pular para conteúdo',
	'view_site' => 'Visualizar site',
	'logout' => 'Sair',
	'license' => 'Distribuída na licença',
	'tag_line' => 'O Pequeno, Simples, Construtor de Sites',
	'latest_referrals' => 'Últimas Referências',
	'latest_activity' => 'Últimas Atividades',
	'feed_subscribe' => 'Assinar',
	'rss_feed' => 'RSS Feed',
	'when' => 'Quando?',
	'who' => 'Quem?',
	'what' => 'O Quê?',
	'from' => 'De?',
	'switch_to' => 'Trocar para',
	'a_few_seconds' => 'Alguns segundos',
	'a_minute' => '1 minuto',
	'minutes' => 'minutos',
	'a_hour' => '1 hora',
	'hours' => 'horas',
	'a_day' => '1 dia',
	'days' => 'dias',
	'ago' => 'atrás.',
	'user' => 'Usuário',
	'to' => 'para',
	'database_backup' => 'Fazer backup da Base de Dados',
	'database_info' => 'Certifique-se de fazer backups da base de dados frequentemente. Use o botão direito para fazer backup manualmente da base de dados. Os backups são armazenados na pasta files/sqlbackups/ e podem ser feito o download a partir da listagem abaixo. O backup mais recente está em destaque.',
	'database_backups' => 'Backups',
	'download' => 'Download',
	'delete' => 'Apagar',
	'delete_file' => 'Apagar Arquivo?',
	'theme_info' => 'Os temas instalados estão listados abaixo. Para instalar mais temas você pode fazer o upload dos mesmos para à pasta admin/themes. Pode ser feito mais downloads de temas no site <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a> ou pode facilmente criar o seu próprio tema usando CSS. O atual tema do site está em destaque.',
	'theme_pick' => 'Escolha um tema para o seu site',
	'theme_apply' => 'Aplicar este tema',
	'sure_delete_page' => 'Tem certeza de que deseja apagar o',
	'sure_empty_page' => 'Tem certeza de que deseja esvaziar o',
	'settings_page' => 'página',
	'settings_plugin' => 'plugin',
	'plugins' => 'Plugins',
	'plugins_info' => 'Plugins trazem funcionalidades extra para algumas páginas do seu site.',
	'empty' => 'Vazio',
	'oops' => 'Ooops!',
	'feature_disabled' => 'Este recurso está atualmente inativo. A próxima versão do Pixie terá este recurso ativo!',
	'pages_in_navigation' => 'Páginas na navegação',
	'pages_in_navigation_info' => 'As páginas abaixo aparecem na navegação dos seus sites, para alterar a ordem das páginas arraste para cima ou para baixo usando as setas. A página no topo da lista irá aparecer primeiro na sua navegação.', 
	'pages_outside_navigation' => 'Páginas fora da navegação',
	'pages_outside_navigation_info' => 'Essas páginas são visíveis ao público, mas não aparecem na navegação dos seus sites.',
	'pages_disabled' => 'Desativar páginas',
	'pages_disabled_info' => 'Essas páginas não são visualizáveis.',
	'edit_user' => 'Editar Usuário',
	'create_user' => 'Criar novo usuário',
	'create_user_info' => 'Um e-mail será enviado para o novo usuário com detalhes de como fazer a autenticação e uma senha gerada aleatoriamente.',
	'user_info' => 'Abaixo está uma lista de usuários que têm acesso à administração do Pixie. Você pode adicionar mais usuários para ajudar a administrar o seu site, utilizando o formulário à direita. A conta de super usuário fica em destaque.',
	'user_delete_confirm' => 'Você tem certeza que deseja apagar o usuário:',
	'tags' => 'Tags',
	'upload' => 'Enviar',
	'file_manager_info' => 'O tamanho máximo do arquivo está configurado para 100MB. Por favor seja paciente quando enviar arquivos grandes.',
	'file_manager_latest' => 'Últimos envios',
	'file_manager_tagged' => 'Todos os arquivos (tagged):',
	'filename' => 'Nome do arquivo',
	'filedate' => 'Data da última atualização',
	'results_from' => 'Resultados de',
	'sure_delete_entry' => 'Apagar item',
	'from_the' => 'a partir do',
	'page_settings' => 'configurações Páginas',
	'advanced' => 'Avançado',
	'your_site_has' => 'Seu site tem',
	'visitors_online' => 'visitante(s) online.',	
	'in_the_last' => 'Nos últimos',
	'site_visitors' => 'Visitantes ao site.',
	'page_views' => 'Visualizações de páginas.',
	'spam_attacks' => 'Ataques de Spam',
	'last_login_on' => 'Último login em:',
	'quick' => 'Atalhos',
	'links' => 'Links',
	'new_entry' => 'Adicionar ',
	'entry' => 'item.',
	'edit' => 'Editar ',
	'page' => 'página.',
	'blog' => 'Blog.',
	'search' => 'Procurar',
	'forums' => 'Forums.',
	'downloads' => 'Downloads.',
	'create_backup' => 'Criar Backup',
	'button_backup' => 'Gerar Backup',
	'page_type' => 'Tipo de Página',
	'settings_page_new' => 'Criar nova',
	'total_records' => 'Total de registros',
	'showing_from_record' => 'mostrando registro de',
	'page(s)' => 'página(s)',
	'help' => 'Ajuda',
	'statistics' => 'Estatísticas',
	'help_settings_page_type' => 'Ao adicionar uma nova página pode escolher entre três tipos:',
	'help_settings_page_dynamic' => 'Exemplos de páginas dinâmicas são blogs e notícias. Essas páginas suportam RSS feeds e comentários.',
	'help_settings_page_static' => 'Uma página estática é simplesmente um bloco de HTML ou (PHP se desejar). Essas páginas são usadas com conteúdo estático ou raramente actualizado.',
	'help_settings_page_module' => 'Um página módulo adiciona conteúdo específico ao seu site. Módulos adicionais podem ser retirados de <a href="http://www.getpixie.co.uk">www.getpixie.co.uk</a>, um exemplo de um módulo é o módulo eventos. Os módulos são por vezes disponibilizados com plug-ins.',
	'help_settings_user_type' => 'Ao adicionar um novo usuário pode escolher entre três tipos:',
	'help_settings_user_admin' => '<b>Administrador</b> - Administradores têm acesso a toda a Administração do Pixie, eles podem editar as configurações, escrever o conteúdo e fazer tudo o que quiserem.',
	'help_settings_user_client' => '<b>Clientes</b> - Um cliente só pode adicionar conteúdo ao sistema Pixie, eles não são capazes de editar as configurações de um site.',
	'help_settings_user_user' => '<b>Usuários</b> - Um usuário Pixie só tem acesso ao painel Visualizar, eles têm um perfil Pixie e pode ver estatísticas do site.',
	'install_module' => 'Instalar um novo módulo ou plugin',
	'select_module' => 'Selecione o módulo ou plugin que deseja ativar',
	'all_installed' => 'Todos os módulos e plugins disponíveis estão atualmente ativos e instalados.',

	// system messages
	'error_save_settings' => 'Erro ao salvar as configurações.',
	'ok_save_settings' => 'As novas configurações foram salvas e aplicadas.',
	'comment_spam' => 'Comentários spam bloqueados.',
	'failed_login' => 'Falha na tentativa de login.',
	'login_exceeded' => 'Excedeu o número máximo de tentativas (3) de logins, por favor, tente de novo em 24 horas.',
	'logins_exceeded' => 'Foram detectadas 3 tentativas de login sem sucesso. Pixie bloqueou este endereço IP por 24 horas.',
	'ok_login' => 'Usuário ' . $username . ' logado em.',
	'failed_protected_page' => 'Não é possível apagar a página 404, possível tentativa de hacker.',
	'ok_delete_page' => 'Apagado com sucesso a',
	'ok_delete_entry' => 'Item apagado com sucesso (#' . $delete . ') a partir do',
	'failed_delete' => 'Não foi possível apagar item (#' . $delete . ').',
	'login_missing' => 'Por favor forneça as informações necessárias de login.',
	'login_incorrect' => 'Dados de login incorretos.',
	'forgotten_missing' => 'Digite nome de usuário ou endereço de e-mail válido.',
	'forgotten_ok' => 'Uma nova senha foi enviada para o seu endereço de e-mail.',
	'forgotten_log_error' => 'Falha na tentativa de redefinição de senha.',
	'forgotten_log_ok' => 'Uma nova senha foi enviada para ',
	'rss_access_attempt' => 'Tentativa de acesso não autorizado a um feed RSS privado. Pode ter necessidade de voltar a inscrever-se ao feed a partir da administração do Pixie.',
	'unknown_error' => 'Algo deu errado. É possível (mas não provável) que a base de dados esteja em baixo ou você saiu do lado errado da cama?',
	'unknown_edit_url' => 'O URL fornecido para editar esta página não é válido.',
	'unknown_referrer' => 'Referência Desconhecida.',
	'profile_name_error' => 'Digite o seu nome completo.', 
	'profile_email_error' => 'Por favor forneça um endereço de email válido.', 
	'profile_web_error' => 'Forneça um endereço da Web válido.', 
	'profile_ok' => 'O seu perfil foi atualizado.',
	'profile_password_error' => 'Pixie não pode guardar a sua nova senha. Porque não tenta novamente?',
	'profile_password_ok' => 'A sua senha foi atualizada. Você utilizará na próxima vez que se logar no sistema..',
	'profile_password_invalid' => 'Não forneceu uma senha válida.',
	'profile_password_invalid_length' => 'Senhas devem ter pelo menos 6 caracteres.',
	'profile_password_match_error' => 'As senhas que forneceu não correspondem.',
	'profile_password_missing' => 'Por favor forneça todas as informações necessárias.',
	'site_name_error' => 'Seu site precisa de um nome.',
	'site_url_error' =>  'Por favor, forneça um URL válido.',
	'backup_ok' => 'Foi criado com sucesso um novo backup da base de dados.',
	'backup_delete_ok' => 'Backup apagado com sucesso:',
	'backup_delete_no' => 'Não pode apagar o backup mais recente.',
	'backup_delete_error' => 'Pixie não foi capaz de apagar o backup de segurança.',
	'theme_ok' => 'O tema foi aplicado com sucesso ao seu site.',
	'theme_error' => 'Pixie não foi capaz de alterar o seu tema.',
	'all_content_deleted' => 'Todo o conteúdo foi apagado do',
	'user_delete_ok' => 'foi apagada a partir de Pixie.',
	'user_delete_error' => 'Não é possível apagar usuário',
	'user_name_missing' => 'Por favor forneça um nome de usuário.',
	'user_realname_missing' => 'Por favor forneça um nome.',
	'user_password_missing' => 'Por favor forneça uma senha.',
	'user_email_error' => 'Por favor forneça um endereço de email válido.',
	'user_update_ok' => 'Forma salvadas as novas configurações para',
	'user_duplicate' => 'Um usuário com esse nome já existe, tente outro.',
	'user_new_ok' => 'Novo usuário criado:',
	'saved_new_settings_for' => 'Foram salvas as novas configurações para o',
	'file_upload_error' => 'Ocorreu um problema ao adicionar a informação do arquivo na base dados, o arquivo pode não ter sido enviado.',
	'file_upload_tag_error' => 'Por favor, certifique-se de marcar(tag) os seus uploads.',
	'file_delete_ok' => 'Arquivo apagado com sucesso:',
	'file_delete_fail' => 'Pixie foi incapaz de apagar o arquivo:',
	'form_build_fail' => 'Não foi possível construir um formumlário editável...forneceu os detalhes necessários no seu módulo?',
	'date_error' => 'Inserido uma data inválida.',
	'email_error' => 'Verifique se digitou um endereço de email válido.',
	'url_error' => 'Por favor, certifique-se de ter inserido um URL válido.',
	'is_required' => 'é um campo obrigatório.',
	'saved_new' => 'Novo entrada salva',
	'in_the' => 'no',
	'on_the' => 'na',
	'saved_new_page' => 'Página nova criada',
	'save_update_entry' => 'Foram salvas as atualizações para o item',
	'bad_cookie' => 'O seu cookie foi apagado, você precisa logar novamente.',
	'no_module_selected' => 'Você não selecionou um módulo ou plugin para instalar, tente novamente.',
	'install_module_ok' => 'foi instalado com sucesso.',

	// helper
	'helper_plugin' => 'Você não pode modificar as configurações de plugins, mas pode esvaziar um plugin ou removê-lo usando os botões acima. Se você excluir um plugin, como por exemplo o plugin de comentários, os visitantes não poderam deixar comentários nas suas páginas dinâmicas.',
	'helper_nocontent' => 'Essa página não possui conteúdo, use o botão verde acima para adicionar o primeiro item (o botão verde não está disponível no plugin dos comentários).',
	'helper_nopages' => 'Um homem sábio disse uma vez que um site sem páginas é como um pássaro sem asas ... não vai a lugar nenhum. Utilize o formulário à direita para adicionar a primeira página ao seu site. Depois de ter feito isso esta mensagem desaparecerá.',
	'helper_nopages404' => 'O seu site tem apenas uma página, essa página é a de erro 404 que pode ser alterada abaixo.',
	'helper_nopagesadmin' => 'Pode <a href="?s=settings">adicionar mais páginas na seção \'Publicar\'</a> no Sistema do Pixie.',
	'helper_nopagesuser' => 'Entre em contato com o administrador e peça para adicionar algumas páginas ao seu site.',
	'helper_search' => 'Nenhum item foi encontrado. Tente pesquisar novamente.',
	
	// navigation
	'nav1_settings' => 'Configurar',
	'nav1_publish' => 'Publicar',
	'nav1_home' => 'Visualizar',
	'nav2_home' => 'Home',
	'nav2_profile' => 'Perfil',
	'nav2_security' => 'Senha',
	'nav2_logs' => 'Logs',
	'nav2_delete' => 'Apagar Conta',
	'nav2_pages' => 'Páginas',
	'nav2_files' => 'Arquivos',
	'nav2_backup' => 'Backups',
	'nav2_users' => 'Usuários',
	'nav2_blocks' => 'Blocos',
	'nav2_theme' => 'Tema',
	'nav2_site' => 'Site',
	'nav2_settings' => 'Configurar',

	// forms
	'form_login' => 'Logar-se',
	'form_username' => 'Usuário',
	'form_password' => 'Senha',
	'form_rememberme' => 'Permanecer logado(a)?',
	'form_forgotten' => 'Esqueceu a sua senha?',
	'form_returnto' => 'Voltar a ',
	'form_help_forgotten' => 'Digite seu e-mail ou nome de usuário da sua conta Pixie. Sua senha será reajustada e enviada por e-mail.',
	'form_resetpassword' => 'Redefinir senha',
	'form_name' => 'Nome Completo',
	'form_usernameoremail' => 'Nome de usuário ou e-mail',
	'form_telephone' => 'Telefone',
	'form_email' => 'Email',
	'form_website' => 'Website',
	'form_occupation' => 'Profissão',
	'form_address_street' => 'Endereço',
	'form_address_town' => 'Cidade',
	'form_address_county' => 'Região/Bairro',
	'form_address_pcode' => 'Código Postal',
	'form_address_country' => 'País',
	'form_address_biography' => 'Biografia',
	'form_fl1' => 'Links Favoritos',
	'form_button_save' => 'Salvar',
	'form_button_update' => 'Atualizar',
	'form_button_cancel' => 'Cancelar',
	'form_button_install' => 'Instalar',
	'form_button_create_page' => 'Criar página',
	'form_current_password' => 'Senha atual',
	'form_new_password' => 'Nova senha',
	'form_confirm_password' => 'Confirmar Senha',
	'form_tags' => 'Tags',
	'form_content' => 'Conteúdo',
	'form_comments' => 'Comentários',
	'form_public' => 'Público',
	'form_optional'=> '(opcional)',
	'form_required'=> '*',
	'form_title'=> 'Título',
	'form_posted'=> 'Data &amp; Hora',
	'form_date' => 'Data &amp; Hora',
	'form_help_comments' => 'Deseja que as pessoas possam comentem neste item?',
	'form_help_public' => 'Deseja que este item/página seja visto pelo público? (selecionar não(no) para salvar como um rascunho).',
	'form_help_tags' => 'Tags funcionam como categorias e tornam o conteúdo mais fácil de encontrar. Digite palavras-chave separadas com espaços.',
	'form_help_current_tags' => 'Sugestões:',
	'form_help_current_blocks' => 'Blocos Disponível:',
	'form_php_warning' => '(Essa página contém PHP. O editor de texto foi desativado para permitir a edição segura deste código avançado)',
	'form_legend_site_settings' => 'Ajuste as configurações do seu site',
	'form_site_name' => 'Nome do site',
	'form_help_site_name' => 'O que gostaria de chamar o seu site?',
	'form_page_name' => 'Slug/URL',
	'form_help_page_name' => 'Este será utilizado para criar o URL da sua página (por exemplo, http://www.exemplo.com/<b>item</b>/).',
	'form_page_display_name' => 'Nome de exibição da página',
	'form_help_page_display_name' => 'Como gostaria que a sua página fosse chamada?',
	'form_page_description' => 'Descrição da página',
	'form_help_page_description' => 'Escreva uma descrição da sua página.',
	'form_page_blocks' => 'Blocos da página',
	'form_help_page_blocks' => 'Os blocos são conteúdos extra que são usados com a sua página. Nomes de Blocos devem ser separados com espaços. (o manuseamento de blocos vai ser melhorado em futuras versões do Pixie).',
	'form_searchable' => 'Buscado',
	'form_help_searchable' => 'Deixar que essa página aparecesse em buscas públicas?',
	'form_posts_per_page' => 'Itens nesta página',
	'form_help_posts_per_page' => 'Quantos itens gostaria de mostrar nesta página?',
	'form_rss' => 'RSS',
	'form_help_rss' => 'Deixar que essa página gerasse um feed RSS do seu conteúdo?',
	'form_in_navigation' => 'Na Navegação',
	'form_help_in_navigation' => 'Deixar que essa página fosse exibida na navegação do site?',
	'form_site_url' => 'Site URL',
	'form_help_site_url' => 'Qual é o URL do seu site? (ex: http://www.exemplo.com/pasta/).',
	'form_site_homepage' => 'Homepage',
	'form_help_homepage' => 'Que página do site gostaria que os visitantes vissem em primeiro?',
	'form_site_keywords' => 'Palavras-chave do site',
	'form_help_site_keywords' => 'Escreva uma lista de palavras-chave separadas por vírgulas. (ex: este, site, regra).',
	'form_site_author' => 'Autor do Site',
	'form_site_copyright' => 'Site Copyright',
	'form_site_curl' => 'URLs limpas?',
	'form_help_site_curl' => 'Deixar que o seu site use URLs Limpas? Como por exemplo URL www.exemplo.com/limpo/ diferente de www.exemplo.com?s=limpo? URLs limpas trabalham em hosts Linux',
	'form_legend_pixie_settings' => 'Configurações de modo do Pixie',
	'form_pixie_language' => 'Idioma',
	'form_help_pixie_language' => 'Escolha o idioma que deseja usar.',
	'form_pixie_timezone' => 'Fuso horário',
	'form_help_pixie_timezone' => 'Escolha o seu atual fuso horário para que Pixie possa exibir as horas corretas.',
	'form_pixie_dst' => 'Horário de Verão',
	'form_help_pixie_dst' => 'Deseja que Pixie o ajuste automaticamente as horas de acordo com o horário de verão?',
	'form_pixie_date' => 'Data &amp; Hora',
	'form_help_pixie_date' => 'Escolha o seu formato de data e hora preferido.',
	'form_pixie_rte' => 'Editor Texto',
	'form_help_pixie_rte' => 'Deseja usar o editor de texto TinyMCE? (Torna a edição dos conteúdos mais fáceis, mas não é totalmente suportado por todos os navegadores).',
	'form_pixie_logs' => 'Expirar Logs',
	'form_help_pixie_logs' => 'Depois de quantos dias gostaria de limpar os logs de arquivos?',
	'form_pixie_sysmess' => 'Sistema de Mensagem',
	'form_help_pixie_sysmess' => 'Essa mensagem será mostrada a cada usuário quando eles se logarem no Sistema Pixie.',
	'form_help_settings_page_type' => 'Que tipo de página gostaria de criar?',
	'form_legend_user_settings' => 'Definições de usuário',
	'form_user_username' => 'Usuário',
	'form_help_user_username' => 'Nome de Usuário não podem conter espaços.',
	'form_user_realname' => 'Nome Completo',
	'form_help_user_realname' => 'Digite o nome completo do usuário.',
	'form_user_permissions' => 'Permissões',
	'form_help_user_permissions' => 'Que permissões gostaria de dar para este usuário?',
	'form_help_user_permissions_block' => 'Que tipo de usuário vai criar?',
	'form_button_create_user' => 'Criar usuário',
	'form_upload_file' => 'Arquivo',
	'form_help_upload_file' => 'Selecione um arquivo do seu computador para fazer o upload.',
	'form_help_upload_tags' => 'Palavras-chave separadas com espaços.',
	'form_upload_replace_files' => 'Substituir arquivos?', 
	'form_help_upload_replace_files' => 'Você esta tentando substituir um arquivo que já existe?',
	'form_search_words' => 'Palavras-chave',
	'form_privs' => 'Permissões da página',
	'form_help_privs' => 'Quem você gostaria que fosse capaz de editar esta página?',
	
	//email
	'email_newpassword_subject' => 'PixieSite (' . str_replace('http://', "", $site_url) . ') - Nova senha',
	'email_changepassword_subject' => 'PixieSite (' . str_replace('http://', "", $site_url) . ') - Senha alterada',
	'email_newpassword_message' => 'A sua senha foi definida para: ',
	'email_account_close_message' => 'A sua conta PixieSite foi encerrada @ ' . $site_url . '. Entre em contato com o administrador do seu site para mais informações.',
	'email_account_close_subject' => 'PixieSite (' . str_replace('http://', "", $site_url) . ') - Conta encerrada',
	'email_account_edit_subject' =>	'PixieSite (' . str_replace('http://', "", $site_url) . ') - Informações importantes sobre sua conta',
	'email_account_new_subject' => 'PixieSite (' . str_replace('http://', "", $site_url) . ') - Nova conta',
	
	//front end
	'continue_reading' => 'Continuar a ler...',
	'permalink' => 'Link Permanente',
	'theme' => 'Tema',
	'navigation' => 'Navegação',
	'skip_to_content' => 'Pular conteúdo &raquo;',
	'skip_to_nav' => 'Pular para a navegação &raquo;',
	'by' => 'Por',
	'on' => 'em',
	'view' => 'Ver',
	'profile' => 'perfil',
	'all_posts_tagged' => 'todos os posts marcados',
	'permalink_to' => 'Link permanente para',
	'comments' => 'Comentários',
	'comment' => 'Comentário',
	'no_comments' => 'Ainda não existem Comentários...',
	'comment_closed' => 'Comentários Fechados.',
	'comment_thanks' => 'Obrigado pelo seu Comentário.',
	'comment_leave' => 'Deixe um comentário',
	'comment_form_info' => 'O formulário de comentários tem <a href="http://gravatar.com" title="Get a Gravatar">Gravatar</a> e <a href="http://www.cocomment.com" title="Siga e compartilhe seus comentários">coComment</a> ativo.',
	'comment_name' => 'Nome',
	'comment_email' => 'Email',
	'comment_web' => 'Website',
	'comment_button_leave' => 'Enviar seu comentário',
	'comment_name_error' => 'Por favor digite o seu nome.',
	'comment_email_error' => 'Por favor digite um endereço de email válido.',
	'comment_web_error' => 'Digite um endereço da Web válido.',
	'comment_throttle_error' => 'Você está postando comentários muito depressa, mais devagar.',
	'comment_comment_error' => 'Digite um comentário.',	
	'comment_save_log' => 'Comentado em: ',
	'tagged' => 'Tags',
	'tag' => 'Tag',
	'popular' => 'Mais Populares',
	'archives' => 'Arquivos',
	'posts' => 'posts',
	'last_updated' => 'Última Atualização',
	'edit_post' => 'Editar post',
	'edit_page' => 'Editar Página',
	'popular_posts' => 'Posts Populares',
	'next_post' => 'Próximo post',
	'next_page' => 'Próxima página',
	'previous_post' => 'Post anterior',
	'previous_page' => 'Página anterior',
	'dynamic_page' => 'Página',
	'user_name_dup' => 'Erro ao salvar novo ' . $table_name . ' entrada. Nome de usuário possível duplicar.',
	'user_name_save_ok' => 'Saved novo usuário ' . $uname . ', uma senha temporária foi criada (<b>' . $password . '</b>).',
	'file_del_filemanager_fail' => 'File delete failed. Por favor, apague o arquivo manualmente.',
	'upload_filemanager_fail' => 'Falha no upload. Por favor, verifique que a pasta é gravável e tem as permissões correctas definidas.',
	'filemanager_max_upload' => 'Seu servidor de acolhimento aceitará uploads para o tamanho máximo de arquivo : ',
	'ck_select_file' => 'Clique em um arquivo de nome para criar um link.',
	'ck_toggle_advanced' => 'Toggle advanced Mode'
);
?>