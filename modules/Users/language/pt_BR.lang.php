<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'LBL_DELETE_USER_CONFIRM'           => 'Quando um Usuário é excluído, seu registro correspondente de Funcionário é excluído também. Após a exclusão, talvez seja necessário atualizar os workflows ou relatórios relacionados ao usuário.<br/><br/>A exclusão do Usuário não pode ser desfeita.',

	'LBL_DELETE_GROUP_CONFIRM'          => 'Tem certeza que deseja excluir este Usuário de Grupo? Clique em OK para excluir o registro do Usuário. <br/> Após clicar em OK, será possível reatribuir os registros atribuídos ao Usuário de Grupo para outro usuário.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'Tem certeza que quer eliminar este API do usuário do Portal? Clique em OK para excluir o registros do usuário.',


    'LNK_IMPORT_USERS' => 'Importar Usuários',
    'ERR_DELETE_RECORD' => 'Um número de registros deverá ser especificado para eliminar a conta.',
    'ERR_EMAIL_INCORRECT' => 'Forneça um endereço de e-mail válido de modo a criar e enviar a senha.',
    'ERR_EMAIL_NO_OPTS' => 'A configuração ideal de e-mail recebido não foi encontrada.',
    'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Por favor confirme a sua nova senha.',
    'ERR_ENTER_NEW_PASSWORD' => 'Por favor introduza a sua nova senha.',
    'ERR_ENTER_OLD_PASSWORD' => 'Por favor introduza a sua antiga senha.',
    'ERR_IE_FAILURE1' => '[Clique aqui para voltar]',
    'ERR_IE_FAILURE2' => 'Houve uma falha na conexão com a conta de e-mail. Verifique a configuração.',
    'ERR_IE_MISSING_REQUIRED' => "Informações de configurações do E-mail de Entrada em falta. Por favor verifique as suas configurações e tente novamente. Sê não está a configurar o E-mail de Entrada por favor apague todos os campos desta seção.",
    'ERR_INVALID_PASSWORD' => 'Você deve especificar um nome de usuário e senha válidos.',
    'ERR_NO_LOGIN_MOBILE' => 'A sua primeira autenticação nesta aplicação deve ser feita num browser não-móvel ou em modo normal. Por favor tente de novo com um browser total ou clique no link normal abaixo. Pedimos desculpa pela inconveniência.',
    'ERR_LAST_ADMIN_1' => 'O nome do usuário',
    'ERR_LAST_ADMIN_2' => 'É o último usuário Administrador.  No mínimo um usuário deve ser Administrador.<br>Marque a opção de usuário Admin.',
    'ERR_PASSWORD_CHANGE_FAILED_1' => 'Alteração da senha do usuário falhou para',
    'ERR_PASSWORD_CHANGE_FAILED_2' => 'Falhou.  A nova senha deverá ser introduzida.',
    'ERR_PASSWORD_CHANGE_FAILED_3' => 'Nova senha não é valida',
    'ERR_PASSWORD_INCORRECT_OLD_1' => 'Senha antiga incorreta para',
    'ERR_PASSWORD_INCORRECT_OLD_2' => 'Re-introduzir senha',
    'ERR_PASSWORD_MISMATCH' => 'As senhas não confere.',
    'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Você deve especificar um nome de usuário e endereço de e-mail válidos.',
    'ERR_PASSWORD_LINK_EXPIRED' => 'O seu link expirou, por favor crie um novo',
    'ERR_REENTER_PASSWORDS' => 'Por favor introduza novamente as senhas.  A senha nova e a sua confirmação não são compatíveis.',
    'ERR_REPORT_LOOP' => 'O sistema detectou um erro. Um usuário não pode reportar a si mesmo e nenhum dos seus superiores podem reportar a ele.',
    'ERR_RULES_NOT_MET' => 'A senha inserida não cumpria os requisitos. Por favor, tente novamente.',
    'ERR_USER_INFO_NOT_FOUND' => 'Informação de usuário não encontrada',
    'ERR_USER_NAME_EXISTS_1' => 'O nome do usuário',
    'ERR_USER_NAME_EXISTS_2' => 'já existe. Nomes de usuários duplicados não são permitidos.<br>Altere o nome do usuário para ser único.',
    'ERR_USER_IS_LOCKED_OUT' => 'Este usuário está bloqueado na aplicação LíderCRM e não pode efetuar login usando sua senha existente.',

    'LBL_PASSWORD_SENT' => 'Senha Atualizada!',
    'LBL_CANNOT_SEND_PASSWORD' => 'Não é possível enviar senha',
    'ERR_EMAIL_NOT_SENT_ADMIN' => 'O sistema foi incapaz de processar o seu pedido. Por favor verifique:',
    'ERR_SMTP_URL_SMTP_PORT' => 'URL e Porta do Servidor SMTP',
    'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'Nome do usuário SMTP e senha SMTP',
    'ERR_RECIPIENT_EMAIL' => 'Endereço de E-mail do Destinatário',
    'ERR_SERVER_STATUS' => 'O estado do seu servidor',
    'ERR_SERVER_SMTP_EMPTY' => 'Não é possível enviar um e-mail para o usuário. Por favor, verifique o Mail Transfer Agent nas Definições de E-mail.',

    'LBL_ADDRESS_CITY' => 'Cidade',
    'LBL_ADDRESS_COUNTRY' => 'País',
    'LBL_ADDRESS_INFORMATION' => 'Endereço',
    'LBL_ADDRESS_POSTALCODE' => 'Cep',
    'LBL_ADDRESS_STATE' => 'Estado:',
    'LBL_ADDRESS_STREET' => 'Rua:',
    'LBL_ADDRESS' => 'Endereço:',
    'LBL_ADMIN_USER' => 'Usuário Administrador de Sistema',


    'LBL_ADMIN_DESC' => 'O usuário pode acessar a todos os registros da página de Administração, independentemente da segurança de equipe.',
    'LBL_REGULAR_DESC' => 'O usuário pode acessar a módulos e registros com base nas funções e segurança de equipe.',

    'LBL_PHOTO' => 'Foto',

    'LBL_ADMIN' => 'Administrador:',
    'LBL_ADVANCED' => 'Avançada',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_EMAIL' => 'Outro E-mail:',
    'LBL_ANY_PHONE' => 'Qualquer Telefone',
    'LBL_BUTTON_CREATE' => 'Criar',
    'LBL_BUTTON_EDIT' => 'Editar',
    'LBL_CALENDAR_OPTIONS' => 'Opções de Calendário',
    'LBL_CHANGE_PASSWORD' => 'Alterar senha',
    'LBL_CHANGE_SYSTEM_PASSWORD' => 'Por favor forneça uma nova senha.',
    'LBL_CHANGE_PASSWORD_TITLE' => 'Alterar senha',
    'LBL_CHOOSE_A_KEY' => 'Escolha uma chave para evitar a publicação não autorizada do seu calendário',
    'LBL_NO_KEY' => 'Chave não é definida. Por favor, defina a chave para permitir a publicação.',
    'LBL_CHOOSE_WHICH' => 'Escolha quais os módulos que deseja visualizar',
    'LBL_CITY' => 'Cidade',

    'LBL_CLEAR_BUTTON_TITLE' => 'Apagar',


    'LBL_CONFIRM_PASSWORD' => 'Confirmar Senha',
    'LBL_CONFIRM_REGULAR_USER' => 'Alterou o tipo de usuário de Administrador de Sistema para usuário Comum. Depois de gravar essa alteração, o usuário não tem privilégios de administrador do sistema. \n\nClique em OK? para prosseguir.\nClique Cancelar? para voltar ao registros.',
    'LBL_COUNTRY' => 'País',
    'LBL_CURRENCY_TEXT' => 'selecione a moeda padrão',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_CURRENCY_EXAMPLE' => 'Mostrar Exemplo de Moeda',
    'LBL_CURRENCY_SIG_DIGITS' => 'Número de dígitos da Moeda',
    'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Número de casas decimais a mostrar para a moeda corrente',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador dos milhares (1000)',
    'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Caractere usado para separador de milhares',
    'LBL_DECIMAL_SEP' => 'Símbolo do décimo',
    'LBL_DECIMAL_SEP_TEXT' => 'Carácter usado para separador dos decimais',
    'LBL_FDOW' => '1o Dia da semana',
    'LBL_FDOW_TEXT' => 'Primeiro dia exibido nas visualizações de semana, mês e ano',
    'LBL_DATE_FORMAT_TEXT' => 'Configure o formato para apresentação de data (date stamps)',
    'LBL_DATE_FORMAT' => 'Formato da Data',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'usuários',
    'LBL_DEPARTMENT' => 'Departamento',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DISPLAY_TABS' => 'Exibir Módulos',
    'LBL_DOWNLOADS' => 'Downloads',
    'LBL_DST_INSTRUCTIONS' => '(+DST) indica que o Horário de Verão será observado',
    'LBL_EDIT_TABS' => 'Selecionar módulos para barra de navegação',
    'LBL_EDIT' => 'Editar',
    'LBL_USER_HASH' => 'Senha',
    'LBL_AUTHENTICATE_ID' => 'ID Autenticação',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_USER_PREFERENCES' => 'Preferências de usuário',
    'LBL_EXT_AUTHENTICATE' => 'Autenticação Externa',
    'LBL_EMAIL_OTHER' => 'E-mail 2',
    'LBL_EMAIL' => 'E-mail',
    'LBL_EMAIL_CHARSET' => 'Configuração de Caracteres das Respostas Enviadas',
    'LBL_EMAIL_EDITOR_OPTION' => 'Criar formato',
    'LBL_EMAIL_GMAIL_DEFAULTS' => 'Preencher Padrões de Gmail',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de Email',

    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Cliente de e-mail do LíderCRM:</b> Envie e-mails utilizando o cliente de e-mail dentro do LíderCRM. <br><b>Cliente de e-mail Externo:</b> Envie e-mails utilizando um cliente de e-mail fora do LíderCRM, como o Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT' => 'Não foi possível processar o seu pedido. Por favor contacte o administrador do sistema.',
    'LBL_EMAIL_PROVIDER' => 'Fornecedor de E-mail',
    'LBL_EMAIL_SHOW_COUNTS' => 'Mostrar contas de e-mail?',
    'LBL_EMAIL_SIGNATURE_ERROR1' => 'A assinatura deverá ter um nome.',
    'LBL_EMAIL_SMTP_SSL' => 'Permitir SMTP sobre SSL',
    'LBL_EMAIL_TEMPLATE_MISSING' => 'Nenhum modelo de e-mail está selecionado para o e-mail que será enviado para o usuário, contendo sua senha. Por favor, selecione um modelo de e-mail na página de Gestão de Senhas.',
    'LBL_EMPLOYEE_STATUS' => 'Estado do funcionário',
    'LBL_EMPLOYEE_INFORMATION' => 'Dados do Funcionário',
    'LBL_ERROR' => 'Erro:',
    'LBL_EXPORT_CHARSET' => 'Importar/Exportar Configuração de Caracteres',
    'LBL_EXPORT_CHARSET_DESC' => 'Escolha a configuração de caracteres utilizada na sua zona. Esta propriedade será utilizada para importação de dados, e-mails enviados, .exportações para arquivos csv, geração de PDF, e para geração de vCard.',
    'LBL_EXPORT_DELIMITER' => 'Delimitador de campos na Exportação de dados',
    'LBL_EXPORT_DELIMITER_DESC' => 'Especifique o(s) caractere(s) utilizado(s) para delimitar os dados exportados.',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_FAX' => 'Fax',
    'LBL_FIRST_NAME' => 'Nome',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'senha Gerada pelo Sistema',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Redefinir senha',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Redefinir senha',
    'LBL_GENERATE_PASSWORD' => 'Redefinir senha',
    'LBL_GROUP_DESC' => 'Utilize para atribuir itens a um grupo (exemplo: para o Caixa de Entrada).  Este tipo não pode efetuar login através da interface web do LíderCRM.',
    'LBL_GROUP_USER_STATUS' => 'Usuário de Grupo',
    'LBL_GROUP_USER' => 'Usuário de Grupo',
    'LBL_HIDE_TABS' => 'Ocultar Módulos',
    'LBL_HOME_PHONE' => 'Telefone de Casa:',
    'LBL_INBOUND_TITLE' => 'Informações da Conta',
    'LBL_IS_ADMIN' => 'É Administrador',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_LAST_NAME_SLASH_NAME' => 'Sobrenome/Nome',
    'LBL_LAYOUT_OPTIONS' => 'Opção de Layout',
    'LBL_LDAP' => 'LDAP',
    'LBL_LDAP_AUTHENTICATION' => 'Autenticação LDAP',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceitar estado',
    'LBL_LIST_ADMIN' => 'Administrador',
    'LBL_LIST_DEPARTMENT' => 'Departamento',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_FORM_TITLE' => 'Lista de Usuários',
    'LBL_LIST_GROUP' => 'Grupo',
    'LBL_LIST_LAST_NAME' => 'Último Nome',
    'LBL_LIST_MEMBERSHIP' => 'Relacionamento',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PRIMARY_PHONE' => 'Telefone Principal',
    'LBL_LIST_PASSWORD' => 'senha',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_LIST_USER_NAME' => 'Nome',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato padrão de nome',
    'LBL_LOCALE_DESC_FIRST' => '[Nome]',
    'LBL_LOCALE_DESC_LAST' => '[Último Nome]',
    'LBL_LOCALE_DESC_SALUTATION' => '[Tratamento]',
    'LBL_LOCALE_DESC_TITLE' => '[Título]',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => 'Ajustar como os nomes serão mostrados.',
    'LBL_LOCALE_NAME_FORMAT_DESC_2' => '"s" Tratamento<BR>"f" Primeiro Nome<BR>"l" Último Nome',
    'LBL_SAVED_SEARCH' => 'Pesquisa Gravada & Layout',
    // LOGIN PAGE STRINGS
    'LBL_LOGIN_BUTTON_KEY' => 'L',
    'LBL_LOGIN_BUTTON_LABEL' => 'Entrar',
    'LBL_LOGIN_BUTTON_TITLE' => 'Entrar',
    'LBL_LOGIN_WELCOME_TO' => 'Bem-vindo',
    'LBL_LOGIN_OPTIONS' => 'Opções',
    'LBL_LOGIN_FORGOT_PASSWORD' => 'Recuperar Senha',
    'LBL_LOGIN_SUBMIT' => 'Submeter',
    'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Demasiadas tentativas de login falhadas.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Pode tentar fazer o login de novo',
    'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dias.',
    'LBL_LOGIN_LOGIN_TIME_HOURS' => 'Horas - Login',
    'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'Minutos-  login',
    'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'seg.',
    'LBL_LOGIN_ADMIN_CALL' => 'Por favor contate o administrador de sistema.',
    // END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'Você foi desconectado. Para acessar novamente favor clicar aqui.',
    'LBL_LOGGED_OUT_2' => 'Aqui',
    'LBL_LOGGED_OUT_3' => '.',
    'LBL_MAIL_FROMADDRESS' => 'Endereço "De":',
    'LBL_MAIL_FROMNAME' => 'Nome "De":',
    'LBL_MAIL_OPTIONS_TITLE' => 'Opção de E-mail',
    'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAILMERGE_TEXT' => 'Ativar Mail Merge (o Mail Merge também deve ser ativado pelo administrador de sistema em Configurar Definições)',
    'LBL_MAILMERGE' => 'Mesclar e-mail',
    'LBL_MAX_TAB' => 'Número de módulos a exibir:',
    'LBL_MAX_TAB_DESCRIPTION' => 'Selecione o número máximo de módulos que podem ser exibidos na barra de navegação. O número de módulos que serão exibidos depende da largura do navegador. Os módulos que não são exibidos aparecerão no menu Mais.',
    'LBL_MAX_SUBTAB' => 'Número de Subguias',
    'LBL_MAX_SUBTAB_DESCRIPTION' => 'Número de subguias mostradas por guia sem que entre no menu de sobreposição.',
    'LBL_MESSENGER_ID' => 'Identificação no IM',
    'LBL_MESSENGER_TYPE' => 'Tipo IM',
    'LBL_MOBILE_PHONE' => 'Celular',
    'LBL_MODIFIED_BY' => 'Modificado Por',
    'LBL_CREATED_BY_NAME' => 'Criado por', //bug 48978
    'LBL_MODIFIED_BY_ID' => 'Modificado Por ID',
    'LBL_MODULE_NAME' => 'Usuários',
    'LBL_MODULE_TITLE' => 'Usuários: Tela Principal',
    'LBL_NAME' => 'Nome:',
    'LBL_SIGNATURE_NAME' => 'Nome',
    'LBL_NAVIGATION_PARADIGM' => 'Paradigma de Navegação',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Selecione para poder ver os módulos na barra de navegação com base em grupos predefinidos. Quando selecionado, o recurso de "Filtrar Menu Por" aparecerá no menu "Mais".',
    'LBL_USE_GROUP_TABS' => 'Filtros do Menu de Módulos',
    'LBL_NEW_FORM_TITLE' => 'Novo usuário',
    'LBL_NEW_PASSWORD' => 'Nova Senha',
    'LBL_NEW_PASSWORD1' => 'senha',
    'LBL_NEW_PASSWORD2' => 'Confirmar Senha',
    'LBL_NEW_USER_PASSWORD_1' => 'Senha alterada com sucesso.',
    'LBL_NEW_USER_PASSWORD_2' => 'Um email foi enviado ao usuário contendo uma senha gerada pelo sistema.',
    'LBL_NEW_USER_PASSWORD_3' => 'Senha criada com sucesso!',
    'LBL_NEW_USER_BUTTON_KEY' => 'N',
    'LBL_NEW_USER_BUTTON_LABEL' => 'Novo Usuário',
    'LBL_NEW_USER_BUTTON_TITLE' => 'Novo Usuário',
    'LBL_NORMAL_LOGIN' => 'Trocar para Vista Normal',
    'LBL_NOTES' => 'Notas ou Anexos',
    'LBL_OFFICE_PHONE' => 'Telefone do Escritório',
    'LBL_OLD_PASSWORD' => 'Senha Antiga',
    'LBL_OTHER_EMAIL' => 'Outro E-mail',
    'LBL_OTHER_PHONE' => 'Outro Telefone',
    'LBL_OTHER' => 'Outro:',
    'LBL_PASSWORD' => 'Senha',
    'LBL_PASSWORD_GENERATED' => 'Nova Senha Gerada',
    'LBL_PASSWORD_EXPIRATION_LOGIN' => 'A sua senha expirou. Por favor forneça uma nova senha.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'A sua senha é gerada pelo sistema.',
    'LBL_PASSWORD_EXPIRATION_TIME' => 'A sua senha expirou. Por favor forneça uma nova senha.',

    'LBL_PSW_MODIFIED' => 'Última senha alterada.',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PICK_TZ_WELCOME' => 'Bem-vindo ao LíderCRM.',
    'LBL_PICK_TZ_DESCRIPTION' => 'Antes de continuar, verifique o seu fuso horário, que pode ser modificado de futuro na página A Minha Conta.',
    'LBL_PORTAL_ONLY_DESC' => 'Utilize para o Portal de API. Este tipo não pode efetuar login através da interface web do LíderCRM.',
    'LBL_PORTAL_ONLY_USER' => 'Usuário do Portal API',
    'LBL_POSTAL_CODE' => 'Cep',
    'LBL_PRIMARY_ADDRESS' => 'Endereço',
    'LBL_PROMPT_TIMEZONE_TEXT' => 'Marcar para solicitar ao usuário a confirmação do seu fuso horário no momento da autenticação no sistema.',
    'LBL_PROMPT_TIMEZONE' => 'Solicitação de fuso horário',
    'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Atenção! O campo "Nome do Usuário" ou "E-mail" está incorreto. Por favor, forneça informações válidas ou entre em contato com o Administrador.',
    'LBL_PUBLISH_KEY' => 'Chave de Publicação',

    'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Obter outro CAPTCHA',
    'LBL_RECAPTCHA_SOUND' => 'Trocar para Som',
    'LBL_RECAPTCHA_IMAGE' => 'Trocar para Imagem',
    'LBL_RECAPTCHA_INSTRUCTION' => 'Insira as Duas Palavras Abaixo',
    'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Insira as Duas Palavras à Direita',
    'LBL_RECAPTCHA_FILL_FIELD' => 'Insira o texto que aparece na imagem.',
    'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Chave Privada Recaptcha Inválida',
    'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'O parâmetro do script de verificação de Recaptcha estava incorreto.',
    'LBL_RECAPTCHA_UNKNOWN' => 'Erro Recaptcha Desconhecido',

    'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Recebe uma notificação via e-mail quando um registros lhe for atribuído.',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notificação na Atribuição:',
    'LBL_REGISTER' => 'Novo Usuário? Por favor registe-se',
    'LBL_REGULAR_USER' => 'Usuário Regular',
    'LBL_REMINDER_TEXT' => 'Defina um padrão para os lembretes de ligações e reuniões. Notificações pop-up aparecem para todos os convidados que utilizam o LíderCRM. Lembretes por email são enviados para todos os convidados.',
    'LBL_REMINDER' => 'Avisos padrão:',
    'LBL_REMINDER_POPUP' => 'Pop-up',
    'LBL_REMINDER_EMAIL' => 'E-mail',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar e-mail para todos os convidados',

    // new reminders

    'LBL_REMINDERS' => 'Avisos padrão:',
    'LBL_REMINDERS_ACTIONS' => 'Ações:',
    'LBL_REMINDERS_POPUP' => 'Pop-up',
    'LBL_REMINDERS_EMAIL' => 'Email aos Convidados',
    'LBL_REMINDERS_WHEN' => 'Quando',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remover lembrete',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adicionar Todos Convidados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adicionar lembrete',

    'LBL_REMOVED_TABS' => 'Guias Removidas pelo Administrador',
    'LBL_REPORTS_TO_NAME' => 'Reporta a:',
    'LBL_REPORTS_TO' => 'Reporta a:',
    'LBL_REPORTS_TO_ID' => 'Reporta a ID:',
    'LBL_REQUEST_SUBMIT' => 'Link de recuperação enviado. Verifique agora seu e-mail.',
    'LBL_RESET_TO_DEFAULT' => 'Retornar para Padrão',
    'LBL_RESET_PREFERENCES' => 'Retornar para as Preferências Padrão (Default)',
    'LBL_RESET_PREFERENCES_WARNING' => 'Tem a certeza de que deseja restaurar todas as suas preferências?',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Tem certeza que quer repor todas as preferências para este usuário?',
    'LBL_RESET_HOMEPAGE' => 'Restaurar para Página Principal Padrão',
    'LBL_RESET_DASHBOARD' => 'Restaurar para Painel Gráfico Padrão',
    'LBL_RESET_HOMEPAGE_WARNING' => 'Tem a certeza de que deseja restaurar a sua Página Principal?',
    'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Tem certeza que quer restaurar a Página Inicial padrão para este usuário?',
    'LBL_SALUTATION' => 'Saudação',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Funções',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Usuários',
    'LBL_SEARCH_URL' => 'Pesquisar localização:',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Usuários Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Usuários Marcados',
    'LBL_SETTINGS_URL_DESC' => 'Utilize esta URL ao estabelecer configurações de login para o Plug-in do LíderCRM para o Microsoft&reg; Outlook&reg; e o Plug-in do LíderCRM plug-in para o Microsoft&reg; Word&reg;',
    'LBL_SETTINGS_URL' => 'URL:',
    'LBL_SIGNATURE' => 'Assinatura',
    'LBL_SIGNATURE_HTML' => 'Assinatura HTML',
    'LBL_SIGNATURE_DEFAULT' => 'Utilizar assinatura?',
    'LBL_SIGNATURE_PREPEND' => 'Mostrar a assinatura acima da resposta?',
    'LBL_SIGNATURES' => 'Assinaturas:',
    'LBL_STATE' => 'Estado',
    'LBL_STATUS' => 'Estado',
    'LBL_SUBPANEL_LINKS' => 'Links dos Subpainéis',
    'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Na tela de Detalhes, exibir uma linha de links de atalhos do Subpainel.',
    'LBL_SUBPANEL_TABS' => 'Guias do Subpainel',
    'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Nas telas de Detalhes, agrupar Subpainéis em guias e exibir uma guia de cada vez.',
    'LBL_SUGAR_LOGIN' => 'É Usuário do LíderCRM',
    'LBL_SUPPORTED_THEME_ONLY' => 'Apenas afecta temas que suportam esta opção.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Mostra a última barra visualizada ao lado se selecionada. Senão vai para o topo.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Mostra as barras de atalhos no topo caso selecionadas. Senão irá para o lado.',
    'LBL_SWAP_LAST_VIEWED_POSITION' => 'Última visualização ao lado',
    'LBL_SWAP_SHORTCUT_POSITION' => 'Atalhos no topo.',
    'LBL_TAB_TITLE_EMAIL' => 'Configuração de E-mail',
    'LBL_TAB_TITLE_USER' => 'Configuração do Usuário',
    'LBL_THEME' => 'Tema',
    'LBL_THEME_COLOR' => 'Cor',
    'LBL_THEME_FONT' => 'Fonte',
    'LBL_TIME_FORMAT_TEXT' => 'Configure o formato para apresentação da hora (time stamps)',
    'LBL_TIME_FORMAT' => 'Formato da Hora',
    'LBL_TIMEZONE_DST_TEXT' => 'Observar Fuso Horário (DST)',
    'LBL_TIMEZONE_DST' => 'Fuso Horário',
    'LBL_TIMEZONE_TEXT' => 'Configura o fuso horário atual',
    'LBL_TIMEZONE' => 'Hora atual',
    'LBL_TITLE' => 'Cargo',
    'LBL_USE_REAL_NAMES' => 'Mostrar Nome Completo (não o login)',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo do usuário ao invés do nome de autenticação',
    'LBL_USER_INFORMATION' => 'Informação do usuário',
    'LBL_USER_LOCALE' => 'Configurações de localização',
    'LBL_USER_NAME' => 'Nome do Usuário',
    'LBL_USER_SETTINGS' => 'Parâmetros do usuário',
    'LBL_USER_TYPE' => 'Tipo de Usuário',
    'LBL_USER_ACCESS' => 'Acesso',
    'LBL_USER' => 'Usuários',
    'LBL_WORK_PHONE' => 'Telefone de trabalho',
    'LBL_YOUR_PUBLISH_URL' => 'Publicar na minha localização',
    'LBL_ICAL_PUB_URL' => 'URL de integração iCal',
    'LBL_ICAL_PUB_URL_HELP' => 'Utilize esta URL para subscrever ao calendário do LíderCRM com iCal.',
    'LBL_YOUR_QUERY_URL' => 'O seu Query URL',
    'LNK_NEW_USER' => 'Novo Usuário',
    'LNK_NEW_PORTAL_USER' => 'Criar Usuário do Portal API',
    'LNK_NEW_GROUP_USER' => 'Criar Usuário de Grupo',
    'LNK_USER_LIST' => 'Usuários',
    'LNK_REASSIGN_RECORDS' => 'Transferir registros',
    'LBL_PROSPECT_LIST' => 'Lista de Prospects',
    'LBL_EMAILS' => 'E-mails',
    'LBL_PROCESSING' => 'Processando',
    'LBL_UPDATE_FINISH' => 'Atualização Completa',
    'LBL_AFFECTED' => 'Afetou',

    'LBL_USER_NAME_FOR_ROLE' => 'Usuários/Equipes/Funções',
    'LBL_SESSION_EXPIRED' => 'A sua sessão expirou.',

// INBOUND EMAIL STRINGS
    'LBL_APPLY_OPTIMUMS' => 'Aplicar Ideais',
    'LBL_ASSIGN_TO_USER' => 'Atribuir ao Usuário',
    'LBL_BASIC' => 'Configuração de E-mail de Entrada',
    'LBL_CERT_DESC' => 'Forçar validação do Certificado de Segurança do mail server - não utilizar se for auto-assinado.',
    'LBL_CERT' => 'Validar Certificado',
    'LBL_FIND_OPTIMUM_KEY' => 'Buscar Chave',
    'LBL_FIND_OPTIMUM_MSG' => 'A procurar as variáveis ideais da conexão.',
    'LBL_FIND_OPTIMUM_TITLE' => 'Procurar a Configuração Ideal',
    'LBL_FORCE' => 'Forçar a Negativo',
    'LBL_FORCE_DESC' => 'Alguns servidores IMAP e POP3 exigem switches especiais. Tenta forçar o switch negativo para conectar (ou seja, /notls)',
    'LBL_FOUND_OPTIMUM_MSG' => 'Encontrei a configuração ideal. Clique no botão para a aplicar na sua Caixa de Correio.',
    'LBL_EMAIL_INBOUND_TITLE' => 'Configuração de E-mail de Entrada',
    'LBL_EMAIL_OUTBOUND_TITLE' => 'Configuração de E-mail Enviado',
    'LBL_LOGIN' => 'Login',
    'LBL_MAILBOX_DEFAULT' => 'Caixa de Entrada',
    'LBL_MAILBOX_SSL_DESC' => 'Usar SSL na conexão. Se isto não funcionar, verifique se a sua instalação PHP incluiu "--with-imap-ssl" na configuração.',
    'LBL_MAILBOX' => 'Pasta Monitorizada',
    'LBL_MAILBOX_TYPE' => 'Ações Possíveis',
    'LBL_MARK_READ_NO' => 'Email marcado para exclusão após importação',
    'LBL_MARK_READ_YES' => 'E-mail deixado no servidor após importação',
    'LBL_MARK_READ_DESC' => 'Importar e marcar as mensagens lidas no servidor, sem apagar.',
    'LBL_MARK_READ' => 'Deixar mensagens no servidor',
    'LBL_ONLY_SINCE_NO' => 'Não. Verificar todos os e-mails no mail server.',
    'LBL_ONLY_SINCE_YES' => 'Sim.',
    'LBL_ONLY_SINCE_DESC' => 'Não foi possível separar as mensagens novas e lidas pela configuração POP3. Marque esta opção para rever as mensagens mais recentes, o que melhora o desempenho com servidores que não suportam IMAP.',
    'LBL_ONLY_SINCE' => 'Importar apenas a partir da última revisão:',
    'LBL_PORT' => 'Porta do Mail Server',
    'LBL_SERVER_OPTIONS' => 'Configuração Avançada',
    'LBL_SERVER_TYPE' => 'Protocolo do Mail Server',
    'LBL_SERVER_URL' => 'Endereço do Mail Server',
    'LBL_SSL' => 'Utilize SSL',
    'LBL_SSL_DESC' => 'Utilize SSL para se conectar ao servidor de e-mail.',
    'LBL_TEST_BUTTON_KEY' => 't',
    'LBL_TEST_BUTTON_TITLE' => 'Testar',
    'LBL_TEST_SETTINGS' => 'Testar Configurações',
    'LBL_TEST_SUCCESSFUL' => 'Conexão concluída com sucesso!',
    'LBL_TLS_DESC' => 'Usar o Transport Layer Security na conexão com o mail server - apenas utilize esta opção se o seu mail server suportar este protocolo.',
    'LBL_TLS' => 'Usar TLS',
    'LBL_TOGGLE_ADV' => 'Mostrar Avançado',
    'LBL_OWN_OPPS' => 'Nenhuma Oportunidade',
    'LBL_EXTERNAL_AUTH_ONLY' => 'Autenticar este usuário apenas através de',
    'LBL_ONLY' => 'Apenas',
    'LBL_OWN_OPPS_DESC' => 'Aplique Verdadeiro se o usuário não tiver oportunidades atribuídas. Você deve ignorar esta opção para usuários que não são gerentes, e, não estão envolvidos em atividades de venda. Utilizado pelo módulo de Previsões.',
// END INBOUND EMAIL STRINGS
    'LBL_LDAP_ERROR' => 'Erro de LDAP: Por favor contate o administrador do sistema',
    'LBL_LDAP_EXTENSION_ERROR' => 'Erro LDAP: Extensões não carregadas',

// PROJECT RESOURCES STRINGS
    'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Férias do Usuário',
    'LBL_RESOURCE_NAME' => 'Nome',
    'LBL_RESOURCE_TYPE' => 'Tipo',

    'LBL_PDF_SETTINGS' => 'Definições PDF',
    'LBL_PDF_PAGE_FORMAT' => 'Formato da Página',
    'LBL_PDF_PAGE_FORMAT_TEXT' => 'O formato utilizado para páginas',
    'LBL_PDF_PAGE_ORIENTATION' => 'Orientação da Página',
    'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
    'LBL_PDF_PAGE_ORIENTATION_P' => 'Retrato',
    'LBL_PDF_PAGE_ORIENTATION_L' => 'Paisagem',
    'LBL_PDF_MARGIN_HEADER' => 'Margem do Cabeçalho',
    'LBL_PDF_MARGIN_HEADER_TEXT' => '',
    'LBL_PDF_MARGIN_FOOTER' => 'Margem do Rodapé',
    'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
    'LBL_PDF_MARGIN_TOP' => 'Margem Superior',
    'LBL_PDF_MARGIN_TOP_TEXT' => '',
    'LBL_PDF_MARGIN_BOTTOM' => 'Margem Inferior',
    'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
    'LBL_PDF_MARGIN_LEFT' => 'Margem Esquerda',
    'LBL_PDF_MARGIN_LEFT_TEXT' => '',
    'LBL_PDF_MARGIN_RIGHT' => 'Margem Direita',
    'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
    'LBL_PDF_FONT_NAME_MAIN' => 'Fonte para Cabeçalho e Corpo',
    'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'A fonte selecionada será aplicada ao texto do cabeçalho e do corpo do Documento PDF',
    'LBL_PDF_FONT_SIZE_MAIN' => 'Tamanho de Fonte Principal',
    'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
    'LBL_PDF_FONT_NAME_DATA' => 'Fonte no Rodapé',
    'LBL_PDF_FONT_NAME_DATA_TEXT' => 'A fonte selecionada será aplicada ao texto do rodapé do Documento PDF',
    'LBL_PDF_FONT_SIZE_DATA' => 'Tamanho de Fonte de Dados',
    'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
    'LBL_LAST_ADMIN_NOTICE' => 'selecionou-se a si próprio. Não pode alterar o seu Tipo de usuário ou status.',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_SMTP_SERVER_HELP' => 'Este servidor SMTP pode ser usado para mensagens de saída. Forneça um nome do usuário e senha da sua conta de e-mail para usar o servidor.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'O administrador ainda não configurou a conta padrão de saída. Não é possível enviar e-mail de teste.',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
    'LBL_MAIL_SMTPTYPE' => 'Tipo de servidor SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Usuário Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_OK' => 'OK',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_DELETE_USER' => 'Eliminar Usuário',
    // Wizard
    'LBL_WIZARD_TITLE' => 'Assistente de Configuração do LíderCRM:',
    'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao LíderCRM!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para configurar algumas configurações básicas para o uso do LíderCRM.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Clique em <b>Próximo</b> para configurar algumas configurações básicas para o uso do LíderCRM.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
    'LBL_WIZARD_FINISH_BUTTON' => 'Concluir',
    'LBL_WIZARD_FINISH_TAB' => 'Concluir',
    'LBL_WIZARD_FINISH_TITLE' => 'Parabéns! Agora você está pronto para usar o LíderCRM.',

    'LBL_WIZARD_FINISH' => 'Clique abaixo em <b>Terminar</b> para salvar as configurações e começar a usar o LíderCRM. Para obter mais informações sobre como usar o LíderCRM: <br /><br />

<table cellpadding=0 cellspacing=0>

<tr><td><!--not_in_theme!-->Visite www.suitecrm.com <img src=include/images/suitecrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>LíderCRM</b></a></td></tr>

</table>',

    'LBL_WIZARD_FINISH1' => 'O que gostaria de fazer agora?',
    'LBL_WIZARD_FINISH2' => 'Comece a utilizar o LíderCRM',
    'LBL_WIZARD_FINISH3' => 'Importar dados',
    'LBL_WIZARD_FINISH4' => 'Importar dados de recursos externos ao da aplicação',
    'LBL_WIZARD_FINISH5' => 'Criar Usuários',
    'LBL_WIZARD_FINISH6' => 'Criar novas contas de usuário para que as pessoas possam acessar o aplicativo',
    'LBL_WIZARD_FINISH7' => 'Veja e gerencie configurações da aplicação',
    'LBL_WIZARD_FINISH8' => 'Gerencie configurações avançadas, inclusive configurações padrão da aplicação',
    'LBL_WIZARD_FINISH9' => 'Configurar aplicação',
    'LBL_WIZARD_FINISH10' => 'Utilize o Studio para criar e gerenciar campos e layouts na aplicação',
    'LBL_WIZARD_FINISH11' => 'Visite o site LíderCRM',
    'LBL_WIZARD_FINISH12' => 'Encontre material de treinamento e classes que irnao ajudá-lo a iniciar como administrador do sistema ou usuário final',
    'LBL_WIZARD_FINISH14' => 'Documentação',
    'LBL_WIZARD_FINISH15' => 'Guia do Produto e Notas',
    'LBL_WIZARD_FINISH16' => 'Base de Conhecimento',
    'LBL_WIZARD_FINISH17' => 'Dicas do Suporte LíderCRM para execução de tarefas e processos no LíderCRM',
    'LBL_WIZARD_FINISH18' => 'Fóruns',
    'LBL_WIZARD_FINISH19' => 'Fóruns dedicados à Comunidade SuiteCRM para discutir temas de interesse uns com os outros e com os desenvolvedores do SuiteCRM ',
    'LBL_WIZARD_FINISH2DESC' => 'Vá para página Principal',
    'LBL_WIZARD_PERSONALINFO' => 'Suas Informações',
    'LBL_WIZARD_LOCALE' => 'Seu Local',

	//Wizard Scenarios
	'LBL_WIZARD_SCENARIOS' => 'Seus Cenários',
	'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nenhum cenário foi configurado',
	'LBL_WIZARD_SCENARIOS_DESC' => 'Escolha quais cenários são adequados à sua instalação.  Essas opções podem ser alteradas após a instalação.',

    'LBL_WIZARD_SMTP' => 'Sua conta de e-mail',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Suas informações também serão visíveis para outros usuários do LíderCRM. Campos com <span class="required">*</span> são obrigatórios.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique seu fuso horário e como você gostaria que datas, moedas e nomes sejam exibidos no LíderCRM.',
    'LBL_WIZARD_SMTP_DESC' => '(Opcional) Configure sua conta de e-mail no LíderCRM.',
    'LBL_EAPM_SUBPANEL_TITLE' => 'Contas Externas',

    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_CHECKMARK' => 'Checar' /*for 508 compliance fix*/,
    'LBL_THEMEPREVIEW' => 'Pré-Visualização' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'Tokens OAuth',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "Acesso OAuth Tokens",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'ID de usuário modificada',
    'LBL_PHONE_HOME' => 'Telefone Residencial',
    'LBL_PHONE_MOBILE' => 'Celular',
    'LBL_PHONE_WORK' => 'Telefone de trabalho',
    'LBL_PHONE_OTHER' => 'Outro Telefone',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PORTAL_ONLY' => 'Portal',
    'LBL_SHOW_ON_EMPLOYEES' => 'Mostrar Funcionários',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',

    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_DATE_ENTERED' => 'Data da Criação',
    'LBL_DELETED' => 'Excluído',
    'LBL_HIDEOPTIONS' => 'Esconder opções',
    'LBL_SHOWOPTIONS' => 'Mostrar Opções',

    'LBL_SUITE_SUPERCHARGED' => "Supercharged por SuiteCRM",
    'LBL_SUITE_POWERED_BY' => "Distribuído por SuiteCRM",
    'LBL_SUITE_TOP' => "Voltar ao topo",
    'LBL_SUITE_PRINT' => "Imprimir esta página",
    'LBL_SUITE_DESC1' => 'SuiteCRM tem sido escrito e montado por SalesAgility, uma das consultorias mais conhecedoras de SuiteCRM do mundo.',
    'LBL_SUITE_DESC2' => 'SuiteCRM destina-se a cumprir a promessa de SuiteCRM - um projeto CRM de código aberto disponível gratuitamente que combina grande funcionalidade, com a Comunidade e compromisso.',
    'LBL_SUITE_DESC3' => 'Não haverá nenhum software licenciado como parte do projeto gerenciado pela SalesAgility. Todo o código é livre. Todo o código está disponível para download gratuito. Não há nada escondido que cobrar por acesso ao código. É e sempre será livre e open source. Não haverá nenhuma versão paga.',
    'LBL_QUICK_ACCOUNT' => 'Criar Nova Conta',
    'LBL_QUICK_CONTACT' => 'Criar Novo Contato',
    'LBL_QUICK_OPPORTUNITY' => 'Criar Nova Oportunidade',
    'LBL_QUICK_LEAD' => 'Criar Novo Cliente Potencial',
    'LBL_QUICK_DOCUMENT' => 'Novo Documento',
    'LBL_QUICK_CALL' => 'Registrar Ligação',
    'LBL_QUICK_TASK' => 'Criar Nova Tarefa',

    'LBL_ENABLE_NOTIFICATIONS' => 'Ativar Notificações na Área de Trabalho',
    'LBL_LIST_NONINHERITABLE' => "Não herdável.",
    'LBL_PRIMARY_GROUP' => "Grupo Principal",
	'LBL_PASSWORD_MIS_MATCH' => 'Senhas diferentes',
); // END STRINGS DEFS

?>
