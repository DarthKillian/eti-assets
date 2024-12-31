<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Dominio do Active Directory',
    'ad_domain_help'			=> 'Em alguns casos isto e o mesmo que o dominio de email, mas nem sempre.',
    'ad_append_domain_label'    => 'Acrescentar nome de domínio',
    'ad_append_domain'          => 'Acrescentar nome de domínio ao campo de usuário',
    'ad_append_domain_help'     => 'O utilizador não tem que escrever "username@domain.local", pode apenas digitar "username".',
    'admin_cc_email'            => 'E-mail em CC',
    'admin_cc_email_help'       => 'Se prefere que seja enviada uma cópia do e-mail de checkin/checktout que é enviado aos utilizadores para uma conta de e-mail adicional, introduza o endereço de e-mail aqui. Caso contrário, deixe este campo em branco.',
    'admin_settings'            => 'Configurações de administrador',
    'is_ad'				        => 'Isto é um servidor do Active Directoriy',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Atualizar configurações de notificação',
    'alert_email'				=> 'Enviar alertas para',
    'alert_email_help'    => 'Endereços de e-mail ou listas de distribuição para onde deseja que os alertas sejam enviados, separados por vírgula',
    'alerts_enabled'			=> 'Alertas ativos',
    'alert_interval'			=> 'Alertas expiram (em dias)',
    'alert_inv_threshold'		=> 'Alerta limite do inventário',
    'allow_user_skin'           => 'Permitir Skin de Utilizador',
    'allow_user_skin_help_text' => 'Marcar esta caixa permitirá que o utilizador substitua a interface por uma diferente.',
    'asset_ids'					=> 'IDs dos Artigos',
    'audit_interval'            => 'Intervalo de auditoria',
    'audit_interval_help'       => 'Se for obrigado a fiscalizar fisicamente os seus ativos, insira o intervalo em meses que usa. Se você atualizar este valor, todas as "próximas datas de auditoria" para os artigos com uma data de auditoria futura serão atualizadas.',
    'audit_warning_days'        => 'Limiar de aviso de auditoria',
    'audit_warning_days_help'   => 'Quantos dias de antecedência devemos avisar quando os ativos são devidos para a auditoria?',
    'auto_increment_assets'		=> 'Gerar etiquetas de artigos com incremento automático',
    'auto_increment_prefix'		=> 'Prefixo (opcional)',
    'auto_incrementing_help'    => 'Permitir o incremento automático de etiquetas de artigos antes de configurar isto',
    'backups'					=> 'Cópias de segurança',
    'backups_help'              => 'Criar, baixar e restaurar cópias de segurança ',
    'backups_restoring'         => 'Restaurar da cópia de segurança',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Carregar cópia de segurança',
    'backups_path'              => 'As cópia de segurança no servidor são guardadas em <code>:path</code>',
    'backups_restore_warning'   => 'Use o botão de restaurar <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> para restaurar de uma cópia de segurança anterior. (Isto não funciona actualmente com armazenamento de ficheiro S3 ou Docker)<br><br>A sua <strong>inteira :app_name base de dados e algum ficheiro enviado irá ser apagado</strong> pelo que está no ficheiro da cópia de segurança.  ',
    'backups_logged_out'         => 'Todos os utilizadores existentes, incluindo você, serão desconectados assim que o seu restauro for concluído.',
    'backups_large'             => 'Cópias de segurança muito grandes podem expirar na tentativa de restauro e ainda precisam ser executadas via linha de comando. ',
    'barcode_settings'			=> 'Definições de Código de Barras',
    'confirm_purge'			    => 'Confirmar remoção',
    'confirm_purge_help'		=> 'Digite o texto "DELETE" na caixa abaixo para limpar seus registros excluídos. Essa ação não pode ser desfeita e irá excluir todos os itens e usuários excluídos por soft-delete. (Você deve fazer um backup primeiro, apenas para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Insira o CSS personalizado que deseja utilizar. Não use as tags <style></style>.',
    'custom_forgot_pass_url'	=> 'Endereço de redefinição de palavra-passe personalizado',
    'custom_forgot_pass_url_help'	=> 'Isto substitui o endereço de recuperação de palavra-passe que vem configurado por defeito na página de login, útil para direcionar utilizadores para o serviço de recuperação de palavras-passe da LDAP interna ou alojada. Vai efetivamente desabilitar a funcionalidade de "palavra-passe esquecida" do utilizador local.',
    'dashboard_message'			=> 'Mensagem do painel de controle',
    'dashboard_message_help'	=> 'Este texto aparecerá no painel de controle, para qualquer utilizador que tenha permissões para ver o painel de controle.',
    'default_currency'  		=> 'Moeda padrão',
    'default_eula_text'			=> 'EULA padrão',
    'default_language'			=> 'Idioma predefinido',
    'default_eula_help_text'	=> 'Também pode associar EULAs personalizados para categorias de artigos especificas.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Mostrar Nome do Artigo',
    'display_checkout_date'     => 'Mostrar Data de Alocação',
    'display_eol'               => 'Mostrar EOL na tabela',
    'display_qr'                => 'Mostrar códigos Qr',
    'display_alt_barcode'		=> 'Mostrar codigos de barra 1D',
    'email_logo'                => 'Logotipo do e-mail',
    'barcode_type'				=> 'Tipo de código de barras 2D',
    'alt_barcode_type'			=> 'Tipo de código de barras 1D',
    'email_logo_size'       => 'Logos quadrados no e-mail são os melhores. ',
    'enabled'                   => 'Ativado',
    'eula_settings'				=> 'Definições de EULA',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Ícone de Favoritos',
    'favicon_format'            => 'Os tipos de arquivos aceites são ico, png e gif. Outros formatos de imagem podem não funcionar em todos os navegadores.',
    'favicon_size'          => 'Favicons devem ser imagens quadradas, 16x16 pixels.',
    'footer_text'               => 'Texto de rodapé adicional',
    'footer_text_help'          => 'Este texto aparecerá no lado direito do rodapé. São permitidos o uso de hiperligações, utilizando <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. O uso de quebras de linha, cabeçalhos, imagens, etc... podem ter resultados imprevisíveis. ',
    'general_settings'			=> 'Configurações Gerais',
    'general_settings_keywords' => 'suporte à empresa, assinatura, aceitação, formato de e-mail, formato de nome de usuário, imagens, por página, miniatura, gravatar, por, painel, privacidade',
    'general_settings_help'     => 'EULA padrão e mais',
    'generate_backup'			=> 'Gerar Backup',
    'google_workspaces'         => 'Espaços do Google',
    'header_color'              => 'Cor do cabeçalho',
    'info'                      => 'Estas configurações permitem costumizar certos aspetos desta instalação.',
    'label_logo'                => 'Logotipo da etiqueta',
    'label_logo_size'           => 'Logos quadrados ficam melhor - serão exibidos no topo à direita de cada rótulo de artigo. ',
    'laravel'                   => 'Versão do Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupo de Permissões Padrão',
    'ldap_default_group_info'   => 'Selecione um grupo para atribuir aos utilizadores recém-sincronizados. Lembre-se de que um utilizador tem as permissões do grupo que ele está atribuído.',
    'no_default_group'          => 'Nenhum grupo padrão',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Chave TLS do cliente LDAP',
    'ldap_client_tls_cert'      => 'Certificado TLS do cliente LDAP',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_client_tls_cert_help' => 'Certificado e chave TLS do cliente para conexões LDAP geralmente são úteis apenas em configurações do Google Workspace com LDAP seguro. Ambos são necessários.',
    'ldap_location'             => 'Localização LDAP',
'ldap_location_help'             => 'O campo Ldap de localização deverá ser usado se <strong>uma OU não estiver a ser usada na "Base Bind DN".</strong> Deixe em branco se uma pesquisa por OU estiver a ser usada.',
    'ldap_login_test_help'      => 'Introduza um utilizador e palavra-passe da LDAP válido pertencente ao DN que especificou acima +ara testar se a sua autenticação da LDAP foi configurada corretamente, PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_login_sync_help'      => 'Isto apenas testa que a LDAP consegue sincronizar corretamente. Se a sua consulta de autenticação LDAP não estiver correta, os utilizadores poderão ainda não conseguir fazer a autenticação. PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_manager'              => 'Gestor LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Validação certificado SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Seleccione esta opção se está a usar um certificado SSL auto-assinado e desejar aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Isto só deve ser escolhido se estiver a correr STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Utilizador bind LDAP',
    'ldap_dept'                 => 'Departamento LDAP',
    'ldap_phone'                => 'Número de telefone LDAP',
    'ldap_jobtitle'             => 'Título do Trabalho LDAP',
    'ldap_country'              => 'País LDAP',
    'ldap_pword'                => 'Password bind LDAP',
    'ldap_basedn'               => 'Base bind DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronização de password LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta caixa se não deseja guardar as passwords LDAP com passwords locais. Ao desativar esta opção quer dizer que os utilizadores poderão não conseguir fazer login se o seu servidor LDAP não estiver disponível por alguma rasão.',
    'ldap_username_field'       => 'Campo nome de utilizador',
    'ldap_lname_field'          => 'Campo Último nome',
    'ldap_fname_field'          => 'Campo Primeiro nome',
    'ldap_auth_filter_query'    => 'Query de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Opção LDAP Activo',
    'ldap_activated_flag_help'  => 'Este valor é usado para determinar se um utilizador sincronizado pode fazer login no Snipe-IT. <strong>Não afeta a capacidade de receber ou enregar itens para eles</strong> e deve ser o <strong>nome do atributo</strong> no AD/LDAP, <strong>não o valor</strong >. <br><br>Se este campo for definido como um nome de campo que não existe em seu AD/LDAP, ou o valor no campo AD/LDAP for definido como <code>0</code> ou <code>false </code>, <strong>o login do utilizador será desativado</strong>. Se o valor no campo AD/LDAP for definido como <code>1</code> ou <code>true</code> ou <em>qualquer outro texto</em> significa que o utilizador pode efetuar login. Quando o campo está em branco no seu AD, respeitamos o atributo <code>userAccountControl</code>, que geralmente permite que utilizadores não suspensos façam login.',
    'ldap_emp_num'              => 'Número funcionário LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Testar LDAP',
    'ldap_test_sync'            => 'Testar Sincronização LDAP',
    'license'                   => 'Licença de software',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Tentativas de login',
    'login_attempt'             => 'Tentativa de login',
    'login_ip'                  => 'Endereço IP',
    'login_success'             => 'Sucesso?',
    'login_user_agent'          => 'User-Agent',
    'login_help'                => 'Lista de tentativas de login',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Opcionalmente, inclua algumas frases na tela de login, por exemplo, para ajudar as pessoas que encontraram um dispositivo perdido ou roubado. Este campo aceita <a href="https://help.github.com/articles/github-flavored-markdown/">Gitão com sabor marcado</a>',
    'login_remote_user_text'    => 'Opções de login remoto de utilizadores',
    'login_remote_user_enabled_text' => 'Ativar login com cabeçalho de utilizador remoto',
    'login_remote_user_enabled_help' => 'Esta opção habilita a Autenticação via cabeçalho REMOTE_USER de acordo com a "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Desabilitar outros mecanismos de autenticação',
    'login_common_disabled_help' => 'Esta opção desativa outros mecanismos de autenticação. Ative apenas esta opção caso tenha a certeza de que seu REMOTE_USER já se encontra a funcionar',
    'login_remote_user_custom_logout_url_text' => 'URL de logout personalizado',
    'login_remote_user_custom_logout_url_help' => 'Se preenchido, os utilizadores serão redirecionados para este URL depois de fecharem a sessão no SnipeIT. É particularmente útil para fechar corretamente a sessão do utilizador do fornecedor de autenticação.',
    'login_remote_user_header_name_text' => 'Cabeçalho personalizado do utilizador',
    'login_remote_user_header_name_help' => 'Use o cabeçalho especificado em vez de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar na impressão',
    'logo_print_assets_help'    => 'Usar a marca na impressão de lista de ativos ',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'show_in_model_list'   => 'Mostrar modelos em menu de cascata',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versão do PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, informações',
    'php_overview_help'         => 'Informação do sistema PHP',
    'php_gd_info'               => 'Deve instalar a extensão php-gd para mostrar códigos QR, veja as instruções de instalação.',
    'php_gd_warning'            => 'O Processamento de Imagem PHP e o plugin GD não estão instalados.',
    'pwd_secure_complexity'     => 'Complexidade de senha',
    'pwd_secure_complexity_help' => 'Selecione as regras de complexidade de senha que você deseja aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'A senha não pode ser igual ao nome, sobrenome, endereço eletrónico ou nome de utilizador',
    'pwd_secure_complexity_letters' => 'Exigir pelo menos uma letra',
    'pwd_secure_complexity_numbers' => 'Exigir pelo menos um número',
    'pwd_secure_complexity_symbols' => 'Exigir pelo menos um símbolo',
    'pwd_secure_complexity_case_diff' => 'Exigir pelo menos uma maiúscula e uma minúscula',
    'pwd_secure_min'            => 'Senha mínima',
    'pwd_secure_min_help'       => 'Valor mínimo permitido é 8',
    'pwd_secure_uncommon'       => 'Prevenir senhas comuns',
    'pwd_secure_uncommon_help'  => 'Isso impedirá os usuários de usar senhas comuns das 10 senhas superiores registradas em brechas.',
    'qr_help'                   => 'Ative os códigos QR antes da configuração',
    'qr_text'                   => 'Texto do Código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Atualizar configurações de SAML',
    'saml_help'                 => 'Configurações de SAML',
    'saml_enabled'              => 'SAML ativado',
    'saml_integration'          => 'Integração SAML',
    'saml_sp_entityid'          => 'ID da entidade',
    'saml_sp_acs_url'           => 'URL do Assertion Consumer Service (ACS)',
    'saml_sp_sls_url'           => 'URL do Single Logout Service (SLS)',
    'saml_sp_x509cert'          => 'Certificado Público',
    'saml_sp_metadata_url'      => 'URL dos metadados',
    'saml_idp_metadata'         => 'Metadados SAML IdP',
    'saml_idp_metadata_help'    => 'Pode especificar os metadados do IdP usando um URL ou ficheiro XML.',
    'saml_attr_mapping_username' => 'Mapeamento de Atributo - Nome de Utilizador',
    'saml_attr_mapping_username_help' => 'NameID será usado se o mapeamento de atributo não for especificado ou ser inválido.',
    'saml_forcelogin_label'     => 'Forçar login SAML',
    'saml_forcelogin'           => 'Fazer o SAML o login principal',
    'saml_forcelogin_help'      => 'Pode usar \'/login?nosaml\' para abrir a página de autenticação normal.',
    'saml_slo_label'            => 'Logout Único do SAML',
    'saml_slo'                  => 'Enviar LogoutRequest para IdP no Logout',
    'saml_slo_help'             => 'Isto fará com que o utilizador seja redirecionado primeiro para o IdP no logout. Deixe desmarcado se o IdP não suporta corretamente SP - iniciado pelo SAML SLO.',
    'saml_custom_settings'      => 'Configurações personalizadas do SAML',
    'saml_custom_settings_help' => 'Pode especificar configurações adicionais para a biblioteca one/php-saml. Use por sua conta e risco.',
    'saml_download'             => 'Baixar Metadados',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'show_alerts_in_menu'       => 'Mostrar alertas no topo do menu',
    'show_archived_in_list'     => 'Artigos arquivados',
    'show_archived_in_list_text'     => 'Mostrar artigos arquivados na lista "todos os artigos"',
    'show_assigned_assets'      => 'Mostrar artigos atribuídos a artigos',
    'show_assigned_assets_help' => 'Mostrar artigos atribuídos a outros artigos em Ver Utilizador -> Artigos, Mostrar Utilizador -> Informação -> Imprimir Todos Atribuídos e em Conta -> Ver Artigos Atribuídos.',
    'show_images_in_email'     => 'Mostrar imagens em e-mails',
    'show_images_in_email_help'   => 'Desmarque esta caixa se a sua instalação do Snipe-IT estiver a correr através de uma VPN ou rede fechada e utilizadores fora da rede não conseguirem carregar as imagens desta instalação nos seus e-mails.',
    'site_name'                 => 'Nome do site',
    'integrations'               => 'Integrações',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook geral',
    'ms_teams'                  => 'Equipes da Microsoft',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Teste para salvar',
    'webhook_title'               => 'Atualizar configurações de Webhook',
    'webhook_help'                => 'Configurações de integração',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Canal',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Configurações',
    'webhook_test'                 =>'Teste :app de integração',
    'webhook_integration_help'    => ':A integração com Slack é opcional. Contudo, se quiser usá-la, o endpoint e o canal são obrigatórios. Para configurar a integração com Slack, deve previamente <a href=":webhook_link" target="_new" rel="noopener">criar um webhook de receção</a> na sua conta Slack. Clique no botão <strong>Teste :app Integração</strong> para confirmar que as suas configurações estão corretas antes de salvar. ',
    'webhook_integration_help_button'    => 'Após salvar as suas informações do :app, será exibido um botão de teste.',
    'webhook_test_help'           => 'Teste se a sua integração :app está configurada corretamente. VOCÊ DEVE SALVAR AS CONFIGURAÇÕES DE :app PRIMEIRO.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Versão Snipe-IT',
    'support_footer'            => 'Links de rodapé de suporte',
    'support_footer_help'       => 'Especifica quem vê os links de Suporte e Manual de utilizador do Snipe-IT',
    'version_footer'            => 'Versão no Rodapé ',
    'version_footer_help'       => 'Especifica quem vê o número de versão e compilação do Snipe-lT.',
    'system'                    => 'Informação de Sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'rodapé, logo, imprimir, tema, skin, cabeçalho, cores, cor, css',
    'brand_help'                => 'Logótipo, Nome do Site',
    'web_brand'                 => 'Tipo de Marca na web',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem-lhe customizar determinados aspetos da sua instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (inches)',
    'next_auto_tag_base'        => 'Próximo incremento automático',
    'page_padding'              => 'Margens da pagina (inches)',
    'privacy_policy_link'       => 'Link para a Política de Privacidade',
    'privacy_policy'            => 'Política de Privacidade',
    'privacy_policy_link_help'  => 'Se um URL for incluído aqui, um link para as suas políticas de privacidade será incluído no rodapé da aplicação e em todos os emails que o sistema enviar, em conformidade com o GDPR. ',
    'purge'                     => 'Remover registos apagados',
    'purge_deleted'             => 'Limpar Apagados ',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da Etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (inches)',
    'page_dimensions'        => 'Dimensões da pagina (inches)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link para Snipe-IT em E-mails',
    'show_url_in_emails_help_text'      => 'Desmarque esta caixa se não deseja vincular novamente a sua instalação Snipe-IT em seus rodapés de e-mail. Útil se a maioria de seus usuários nunca logar.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima da miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima em pixels que as miniaturas podem exibir na visualização de listagem. Min 25, max 500.',
    'two_factor'        => 'Autenticação em dois passos',
    'two_factor_secret'        => 'Código de autenticação em dois passos',
    'two_factor_enrollment'        => 'Ativação de autenticação em dois passos',
    'two_factor_enabled_text'        => 'Ativar autenticação em dois passos',
    'two_factor_reset'        => 'Redefinir password autenticação de pois passos',
    'two_factor_reset_help'        => 'Isso forçará o usuário a registar o dispositivo com seu aplicativo de autenticação novamente. Isso pode ser útil se seu dispositivo de matrícula for perdido ou roubado. ',
    'two_factor_reset_success'          => 'Dispositivo de autenticação de dois passos foi redefinido com sucesso',
    'two_factor_reset_error'          => 'Reset do dispositivo de autenticação de dois passos falhou',
    'two_factor_enabled_warning'        => 'Ao activar a autenticação de dois passos se não estiver já ativado, irá forçar-te a autenticar com o Google Auth com um dispositivo registado.',
    'two_factor_enabled_help'        => 'Isso irá activar a autenticação de dois passos usando Google Authenticator.',
    'two_factor_optional'        => 'Selectivo (os usuários podem activar ou desactivar se permitido)',
    'two_factor_required'        => 'Obrigatório para todos os utilizadores',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Digite o código de autenticação de pois passos',
    'two_factor_config_complete'	=> 'Enviar codigo',
    'two_factor_enabled_edit_not_allowed' => 'O teu administrador não permite editar esta opção.',
    'two_factor_enrollment_text'	=> "A autenticação de dois passos é obrigatória, mas se o teu dispositivo ainda não foi registado, abre o Google Authenticator e lê o QR Code para registar o teu dispositivo. Uma vez registado, introduz o código abaixo",
    'require_accept_signature'      => 'Requer assinatura',
    'require_accept_signature_help_text'      => 'Habilitar este recurso vai exigir que os utilizadores assinar fisicamente aceitando o artigo.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'fundo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de série únicos',
    'unique_serial_help_text'                => 'Marcar esta caixa para garantir que os números de série são únicos',
    'zerofill_count'        => 'Comprimento de tags de artigos, incluindo zerofill',
    'username_format_help'   => 'Esta configuração será usada apenas pelo processo de importação se um nome de utilizador não for fornecido e tivermos de gerar um nome de utilizador para si.',
    'oauth_title' => 'Configurações da API OAuth',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Configurações de Endpoint Oauth',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Atualizar configurações de Etiquetas de Artigo',
    'barcode_title' => 'Atualizar Configurações de Código de Barras',
    'barcodes' => 'Código de barras',
    'barcodes_help_overview' => 'Código de barras &amp; configurações QR',
    'barcodes_help' => 'Isto irá apagar códigos de barras em cache. Isto normalmente só deveria ser usado se as configurações do código de barras tivessem sido alteradas, ou se a URL do Snipe-IT tivesse sido alterada. Códigos de barras serão novamente gerados quando forem acedidos.',
    'barcodes_spinner' => 'A tentar apagar ficheiros...',
    'barcode_delete_cache' => 'Apagar Cache de Código de Barras',
    'branding_title' => 'Atualizar configurações da marca',
    'general_title' => 'Atualizar configurações gerais',
    'mail_test' => 'Teste de Envio',
    'mail_test_help' => 'Irá ser enviado um e-mail de teste para :replyto.',
    'filter_by_keyword' => 'Filtrar pela palavra-chave',
    'security' => 'Segurança',
    'security_title' => 'Atualizar Configurações de Segurança',
    'security_keywords' => 'senha, senhas, requisitos, dois fatores, senha comum, login remoto, login, autenticação',
    'security_help' => 'Dois Fatores, Restrições de palavra-passe',
    'groups_keywords' => 'permissões, grupos de permissão, autorização',
    'groups_help' => 'Grupos de permissão de conta',
    'localization' => 'Localização',
    'localization_title' => 'Atualizar configurações de localização',
    'localization_keywords' => 'localização, moeda, local, localidade, fuso horário, fuso horário, internacional, internacionalização, idioma, tradução',
    'localization_help' => 'Idioma, exibição de data',
    'notifications' => 'Notificações',
    'notifications_help' => 'Alertas de e-mail e configurações de auditoria',
    'asset_tags_help' => 'Incrementando e prefixos',
    'labels' => 'Etiquetas',
    'labels_title' => 'Atualizar Configurações de Etiquetas',
    'labels_help' => 'Tamanho da etiqueta &amp; configurações',
    'purge_keywords' => 'apagar permanentemente',
    'purge_help' => 'Remover registos apagados',
    'ldap_extension_warning' => 'Não parece que a extensão LDAP esteja instalada ou ativada neste servidor. Ainda pode salvar as suas configurações, mas precisará de ativar a extensão LDAP para PHP antes de a sincronização LDAP ou login funcionar.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Número de Funcionário',
    'create_admin_user' => 'Criar um utilizador ::',
    'create_admin_success' => 'Sucesso! O seu administrador foi adicionado!',
    'create_admin_redirect' => 'Clique aqui para aceder à sua aplicação!',
    'setup_migrations' => 'Migrações de bases de dados ::',
    'setup_no_migrations' => 'Não havia nada para migrar. As tabelas da base de dados já foram configuradas!',
    'setup_successful_migrations' => 'A suas tabelas de base de dados foram criadas',
    'setup_migration_output' => 'Saída de migração:',
    'setup_migration_create_user' => 'Próximo: Criar Utilizador',
    'ldap_settings_link' => 'Página de configurações LDAP',
    'slack_test' => 'Teste <i class="fab fa-slack"></i> Integração',
    'label2_enable'           => 'Novo Motor de Etiqueta',
    'label2_enable_help'      => 'Mude para o novo motor de etiqueta. <b>Nota: Irá precisar salvar esta configuração antes de a poder usar.</b>',
    'label2_template'         => 'Modelo',
    'label2_template_help'    => 'Selecione qual modelo a usar para a geração de etiquetas',
    'label2_title'            => 'Título',
    'label2_title_help'       => 'O título a mostrar nas etiquetas que o suportam',
    'label2_title_help_phold' => 'O espaço <code>{COMPANY}</code> será substituído pelo nome do ativo&apos;s da empresa',
    'label2_asset_logo'       => 'Usar Logo do Artigo',
    'label2_asset_logo_help'  => 'Use o logotipo do equipamento atribuído à empresa, em vez do valor em <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipo de código de barras 1D',
    'label2_1d_type_help'     => 'Formato para códigos de barras 1D',
    'label2_2d_type'          => 'Tipo de código de barras 2D',
    'label2_2d_type_help'     => 'Formato para códigos de barras 2D',
    'label2_2d_target'        => 'Alvo de Código de Barras 2D',
    'label2_2d_target_help'   => 'A URL que o código de barras 2D apresenta quando digitalizado',
    'label2_fields'           => 'Definições de Campos',
    'label2_fields_help'      => 'Os campos podem ser adicionados, removidos, e reordenados na coluna da esquerda. Para cada campo, várias opções para Rótulo e Fonte de Dados podem ser adicionadas, removidas e reordenadas na coluna da direita.',
    'help_asterisk_bold'    => 'Texto digitado como <code>**texto**</code> será exibido como negrito',
    'help_blank_to_use'     => 'Deixe em branco para usar o valor de <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> usará o valor de <code>:setting_name</code>. <br>Note que o valor dos códigos de barras deve estar em conformidade com a respectiva especificação do código de barras para ser gerado com sucesso. Por favor, consulte <a href="https://snipe-it.readme.io/docs/barcodes">a documentação <i class="fa fa-external-link"></i></a> para mais detalhes. ',
    'default'               => 'Padrão',
    'none'                  => 'Nenhum',
    'google_callback_help' => 'Isto deve ser inserido como a URL de retorno de chamada nas configurações de aplicação do Google OAuth na sua organização&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">consola de desenvolvedor do Google <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Configurações de login do Google Workspace',
    'enable_google_login'  => 'Permitir que os utilizadores façam login com o Google Workspace',
    'enable_google_login_help'  => 'Os utilizadores não serão criados automaticamente. Eles devem ter uma conta existente aqui E no Google Workspace e o seu nome de utilizador deve corresponder ao endereço de endereço eletrónico do Google Workspace. ',
    'mail_reply_to' => 'Enviar para Endereço de Resposta',
    'mail_from' => 'E-mail do endereço',
    'database_driver' => 'Driver Base de Dados',
    'bs_table_storage' => 'Armazenamento de mesa',
    'timezone' => 'Fuso horário',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'Quantos dias antes do esperado check-in de um ativo deve ser listado na página "Due for checkin"?',
    'no_groups' => 'No groups have been created yet. Visit <code>Admin Settings > Permission Groups</code> to add one.',

];
