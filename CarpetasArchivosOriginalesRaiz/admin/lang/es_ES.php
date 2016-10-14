<?php
/****************************************************
*
* @File:				es_ES.php
* @Package:			GetSimple
* @Subject:			Spanish (Spain) language file
* @Date:				08 Mar 2011
* @Revision:		27 Mar 2011
* @Version:			GetSimple 3.0 Beta / bleeding edge
* @Translation Version:		1.3.2
* @Status:			Final
* @Traductors:	Isaac Robles García - David Casas Martín - José Blanco
*
* Original translation (GS2) (Spanish-Mexico): Isaac Garcia Robles
* Adaption translation into Spanish of Spain: David Martin Homes
* Extending translation for GetSimple 3.0: Jose Blanco
*
* Traducción original (GS2)(Español-Méjico): Isaac Robles García
* Adpatación traduccion al Español de España: David Casas Martín
* Ampliación para GetSimple 3.0: José Blanco
*
****************************************************/



$i18n = array(

/* 
 * For: install.php
*/
"PHPVER_ERROR"			=>	"<b>No se puede continuar:</b> Se requiere PHP 5.1.3 o superior ",
"SIMPLEXML_ERROR"		=>	"<b>No se puede continuar:</b> <em>SimpleXML</em> no est&aacute; instalado",
"CURL_WARNING"			=>	"<b>Advertencia:</b> <em>cURL</em> No est&aacute; instalado",
"TZ_WARNING"				=>	"<b>Advertencia:</b> <em>date_default_timezone_set</em> no encontrada",
"WEBSITENAME_ERROR"	=>	"<b>Error:</b> Hay un error con el t&iacute;tulo del sitio web",
"WEBSITEURL_ERROR"	=>	"<b>Error:</b> Hay un error con la url del sitio web",
"USERNAME_ERROR"		=>	"<b>Error:</b> Nombre de usuario no establecido",
"EMAIL_ERROR"				=>	"<b>Error:</b> Error en la direcci&oacute;n de correo electr&oaute;nico",
"CHMOD_ERROR"				=>	"<b>ERROR:</b> No se puede escribir el archivo de configuraci&oacute;n. Cambia los permisos a <em>CHMOD 777</em> para las carpetas /data, /respaldos y sus subcarpetas y despu&eacute;s vuelve a intentarlo.",
"EMAIL_COMPLETE"		=>	"Configuraci&oacute;n terminada.",
"EMAIL_USERNAME"		=>	"Tu nombre de usuario es",
"EMAIL_PASSWORD"		=>	"Tu contrase&ntilde;a es",
"EMAIL_LOGIN"				=>	"Inicia sesi&oacute;n aqu&iacute;",
"EMAIL_THANKYOU"		=>	"Gracias por utilizar",
"NOTE_REGISTRATION"	=>	"Se ha enviado la informaci&oacute;n de registro a",
"NOTE_REGERROR"			=>	"<b>Error:</b> Error al enviar tu informaci&oacute;n de registro por email. Toma nota de tu contrase&ntilde;a.",
"NOTE_USERNAME"			=>	"Tu nombre de usuario es",
"NOTE_PASSWORD"			=>	"y tu contrase&ntilde;a es",
"INSTALLATION"			=>	"Instalaci&oacute;n",
"LABEL_WEBSITE"			=>	"Nombre del sitio web",
"LABEL_BASEURL"			=>	"URL del sitio",
"LABEL_SUGGESTION"	=>	"Nuestra sugerencia es",
"LABEL_USERNAME"		=>	"Nombre de usuario",
"LABEL_EMAIL"				=>	"Correo electr&oacute;nico",
"LABEL_INSTALL"			=>	"&iexcl;Instalar ahora!",
"SELECT_LANGUAGE"		=> "Selecci&oacute;na tu idioma",
"CONTINUE_SETUP" 		=> "Continuar con la instalaci&oacute;n",
"DOWNLOAD_LANG" 		=> "Descargar idiomas adicionales",

/* 
 * For: pages.php
*/
"MENUITEM_SUBTITLE"	=>	"Elemento del men&uacute;",
"HOMEPAGE_SUBTITLE"	=>	"P&aacute;gina de inicio",
"PRIVATE_SUBTITLE"	=>	"privado",
"EDITPAGE_TITLE"		=>	"Editar P&aacute;gina",
"VIEWPAGE_TITLE"		=>	"Ver p&aacute;gina",
"DELETEPAGE_TITLE"	=>	"Borrar p&aacute;gina",
"PAGE_MANAGEMENT"		=>	"Administrar P&aacute;gina",
"TOGGLE_STATUS"			=>	"Mostrar etiquetas",
"TOTAL_PAGES"				=>	"P&aacute;ginas en total",
"ALL_PAGES"					=>	"Todas las p&aacute;ginas",

/* 
 * For: edit.php
*/
"PAGE_NOTEXIST"			=>	"La p&aacute;gina que solicita no existe",
"BTN_SAVEPAGE"			=>	"Guardar p&aacute;gina",
"BTN_SAVEUPDATES"		=>	"Guardar cambios",
"DEFAULT_TEMPLATE"	=>	"Plantilla por defecto",
"NONE"							=>	"Ninguno",
"PAGE"							=>	"P&aacute;gina",
"NEW_PAGE"					=>	"Nueva P&aacute;gina",
"PAGE_EDIT_MODE"		=>	"Editar P&aacute;gina",
"CREATE_NEW_PAGE"		=>	"Crear P&aacute;gina",
"VIEW"							=>	"<em>V</em>er",
"PAGE_OPTIONS"			=>	"<em>O</em>pciones de p&aacute;gina",
"SLUG_URL"					=>	"Alias/URL",
"TAG_KEYWORDS"			=>	"Etiquetas &amp; Palabras clave",
"PARENT_PAGE"				=>	"P&aacute;ginas similares",
"TEMPLATE"					=>	"Plantilla",
"KEEP_PRIVATE"			=>	"&iquest;Mantener privado?",
"ADD_TO_MENU"				=>	"Agregar al men&uacute;",
"PRIORITY"					=>	"Prioridad",
"MENU_TEXT"					=>	"Texto del men&uacute;",
"LABEL_PAGEBODY"		=>	"Cuerpo de la p&aacute;gina",
"CANCEL"						=>	"Cancelar",
"BACKUP_AVAILABLE"	=>	"Backup disponible",
"MAX_FILE_SIZE"			=>	"Tama&ntilde;o m&aacute;ximo de archivo",
"LAST_SAVED"				=>	"&Uacute;ltimos guardados",
"FILE_UPLOAD"				=>	"Subir archivo",
"OR"								=>	"o",

/* 
 * For: upload.php
*/
"ERROR_UPLOAD"			=>	"Hubo un error al subir el archivo",
"FILE_SUCCESS_MSG"	=>	"&iexcl;Archivo subido satisfactoriamente!",
"FILE_MANAGEMENT"		=>	"Administrador de archivos",
"UPLOADED_FILES"		=>	"Archivos subidos",
"SHOW_ALL"					=>	"Mostrar todos",
"VIEW_FILE"					=>	"Ver archivo",
"DELETE_FILE"				=>	"Borrar archivo",
"TOTAL_FILES"				=>	"Archivos totales",

/* 
 * For: logout.php
*/
"MSG_LOGGEDOUT"			=>	"Has cerrado la sesi&oacute;n.",

/* 
 * For: index.php
*/
"LOGIN"							=>	"Iniciar sesi&oacute;n",
"USERNAME"					=>	"Nombre de usuario",
"PASSWORD"					=>	"Contrase&ntilde;a",
"FORGOT_PWD"				=>	"&iquest;Olvidaste tu contrase&ntilde;a?",
"CONTROL_PANEL"			=>	"Panel de control",

/* 
 * For: navigation.php
*/
"CURRENT_MENU" 			=> 	"Men&uacute; actual",
"NO_MENU_PAGES" 		=> 	"No existen p&aacute;ginas en el men&uacute;",

/* 
 * For: theme-edit.php
*/
"TEMPLATE_FILE" 		=> 	"La plantilla <b>%s</b> se actualiz&oacute; correctamente.",
"THEME_MANAGEMENT" 	=> 	"Administrador de temas",
"EDIT_THEME" 				=> 	"Editar tema",
"EDITING_FILE" 			=> 	"Editando archivo",
"BTN_SAVECHANGES" 	=> 	"Guardar cambios",
"EDIT" 							=> 	"Editar",

/* 
 * For: support.php
*/
"SETTINGS_UPDATED"	=> 	"Tu configuraci&oacute;n ha sido actualizada",
"UNDO" 							=> 	"Deshacer",
"SUPPORT" 					=> 	"Soporte",
"SETTINGS" 					=> 	"Configuraci&oacute;n",
"ERROR" 						=> 	"Error",
"BTN_SAVESETTINGS" 	=> 	"Guardar configuraci&oacute;n",
"VIEW_FAILED_LOGIN"	=> 	"Ver los intentos de inicio de sesi&oacute;n fallidos",


/* 
 * For: log.php
*/
"MSG_HAS_BEEN_CLR" 	=> 	" se han borrado.",
"LOGS" 							=> 	"Registros",
"VIEWING" 					=> 	"Viendo",
"LOG_FILE" 					=> 	"Archivos de registro.",
"CLEAR_ALL_DATA" 		=> 	"Borrar todos los datos",
"CLEAR_THIS_LOG" 		=> 	"<em>B</em>orrar registros",
"LOG_FILE_ENTRY" 		=> 	"Entrada de registros",
"THIS_COMPUTER"			=>	"Este ordenador",

/* 
 * For: backup-edit.php
*/
"BAK_MANAGEMENT"		=>	"Gesti&oacute;n de Respaldos",
"ASK_CANCEL"				=>	"<em>C</em>ancelar", // 'c' is the accesskey identifier
"ASK_RESTORE"				=>	"<em>R</em>estaurar", // 'r' is the accesskey identifier
"ASK_DELETE"				=>	"<em>B</em>orrar", // 'b' is the accesskey identifier
"BACKUP_OF"					=>	"Backup de",
"PAGE_TITLE"				=>	"T&iacute;tulo de la p&aacute;gina",
"YES"								=>	"S&iacute;",
"NO"								=>	"No",
"DATE"							=>	"Fecha",
"PERMS"							=>	"PERMS",

/* 
 * For: components.php
*/
"COMPONENTS"				=>	"Componentes",
"DELETE_COMPONENT"	=>	"Borrar componente",
"EDIT"							=>	"Editar",
"ADD_COMPONENT"			=>	"<em>A</em>gregar componente", // 'a' is the accesskey identifier
"SAVE_COMPONENTS"		=>	"Guardar componentes",

/* 
 * For: sitemap.php
*/
"SITEMAP_CREATED"		=>	"&iexcl;Mapa del sitio creado! Adem&aacute;s, hemos enviado la actualizaci&oacute;n a 4 buscadores.",
"SITEMAP_ERRORPING"	=>	"Mapa del sitio creado, pero no hemos podido contactar con uno o m&aacute;s buscadores para actualizar la informaci&oacute;n",
"SITEMAP_ERROR"			=>	"No se puede generar el mapa del sitio.",
"SITEMAP_WAIT"			=>	"<b>Espere, por favor:</b> Creando mapa del sitio",

/* 
 * For: theme.php
*/
"THEME_CHANGED"			=>	"Se ha cambiado el tema satisfactoriamente",
"CHOOSE_THEME"			=>	"Selecciona tema",
"ACTIVATE_THEME"		=>	"Activar tema",
"THEME_SCREENSHOT"	=>	"Vista previa",
"THEME_PATH"				=>	"Ruta del tema actual",

/* 
 * For: resetpassword.php
*/
"RESET_PASSWORD"		=>	"Reestablecer contrase&ntilde;a",
"YOUR_NEW"					=>	"Tu ",
"PASSWORD_IS"				=>	"contrase&ntide;a nueva es",
"ATTEMPT"						=>	"Intento",
"MSG_PLEASE_EMAIL"	=>	"Por favor, escriba la direcci&oacute;n de correo con la que se registr&oacute; en el sistema, y recibir&aacute; una contrase&ntilde;a nueva.",
"SEND_NEW_PWD"			=>	"Enviar contrase&ntilde;a nueva",

/* 
 * For: settings.php
*/
"GENERAL_SETTINGS"	=>	"Configuraci&oacute;n general",
"WEBSITE_SETTINGS"	=>	"Configuraci&oacute;n del sitio web",
"LOCAL_TIMEZONE"		=>	"Uso Horario local",
"LANGUAGE"					=>	"Idioma",
"USE_FANCY_URLS"		=>	"<b>Usar URLs amigables</b> - <b style=\"font-weight:100\">Requiere soporte <code>mod_rewrite</code> activado en su servidor</b>",
"ENABLE_HTML_ED"		=>	"<b>Habilitar editor HTML</b>",
"WARN_EMAILINVALID"	=>	"Advertencia: La direcci&oacute;n de correo no es v&aacute;lida!",
"ONLY_NEW_PASSWORD"	=>	"Instroduzca su contrase&ntilde;a abajo s&oacute;lo si desea cambiar la actual",
"NEW_PASSWORD"			=>	"Nueva contrase&ntilde;a",
"CONFIRM_PASSWORD"	=>	"Confirmar contrase&ntilde;a",
"PASSWORD_NO_MATCH"	=>	"Las contrase&ntide;as no coinciden",
"PERMALINK" 				=> 	"Estructura personalizada Permalink",
"MORE" 							=> 	"Saber m&aacute;s...",
"HELP" 							=> 	"ayuda",

/* 
 * For: health-check.php
*/
"WEB_HEALTH_CHECK"	=>	"Estado del sitio web",
"VERSION"						=>	"Versi&oacute;n",
"UPG_NEEDED"				=>	"necesita actualizarse a",
"CANNOT_CHECK"			=>	"No se puede comprobar. Su versi&oacute;n es",
"LATEST_VERSION"		=>	"&Uacute;ltima versi&oacute;n instalada",
"SERVER_SETUP"			=>	"Servidor de instalaci&oacute;n",
"OR_GREATER_REQ"		=>	"o superior es requerido",
"OK"								=>	"OK",
"INSTALLED"					=>	"Instalado",
"NOT_INSTALLED"			=>	"No Instalado",
"WARNING"						=>	"Advertencia",
"DATA_FILE_CHECK"		=>	"Archivo de datos de verificaci&oacute;n de integridad",
"DIR_PERMISSIONS"		=>	"Permisos de directorio",
"EXISTANCE"					=>	"%s Existentes",
"MISSING_FILE"			=>	"Falta archivo",
"BAD_FILE"					=>	"Archivo corrupto",
"NO_FILE"						=>	"Sin archivo",
"GOOD_D_FILE"				=>	"Archivo 'Deny'",
"GOOD_A_FILE"				=>	"Archivo 'Allow'",
"CANNOT_DEL_FILE"		=>	"No se puede borrar el archivo",
"DOWNLOAD"					=>	"Descargar",
"WRITABLE"					=>	"Escribible",
"NOT_WRITABLE"			=>	"S&oacute;lo lectura",

/* 
 * For: footer.php
*/
"POWERED_BY"				=>	"Powered by",

/* 
 * For: backups.php
*/
"PAGE_BACKUPS"			=>	"Respaldos",
"ASK_DELETE_ALL"		=>	"<em>E</em>liminar todos",
"DELETE_ALL_BAK"		=>	"&iquest;Eliminar todos los respaldos?",
"TOTAL_BACKUPS"			=>	"Respaldos totales",

/* 
 * For: archive.php
*/
"SUCC_WEB_ARCHIVE"	=>	"Se ha guardado correctamente!",
"SUCC_WEB_ARC_DEL" 	=>	"Archivo web eliminado satisfactoriamente",
"WEBSITE_ARCHIVES"	=>	"Archivos del sitio web",
"ARCHIVE_DELETED"		=>	"Archivo borrado satisfactoriamente",
"CREATE_NEW_ARC"		=>	"Crear un nuevo archivo",
"ASK_CREATE_ARC"		=>	"<em>C</em>rear un nuevo archivo ahora",
"CREATE_ARC_WAIT"		=>	"<b>Espere por favor:</b> Creando archivo...",
"DOWNLOAD_ARCHIVES"	=>	"Descargar archivo",
"DELETE_ARCHIVE"		=>	"Eliminar archivo",
"TOTAL_ARCHIVES"		=>	"Archivos en total",

/* 
 * For: include-nav.php
*/
"WELCOME"						=>	"Bienvenido", // used as 'Welcome USERNAME!'
"TAB_PAGES"					=>	"<em>P</em>&aacute;ginas",
"TAB_FILES"					=>	"<em>A</em>rchivos",
"TAB_THEME"					=>	"<em>T</em>emas",
"TAB_BACKUPS"				=>	"<em>R</em>espaldos",
"PLUGINS_NAV" 			=>  "Plu<em>g</em>ins",
"TAB_SETTINGS"			=>	"<em>C</em>onfiguraci&oacute;n",
"TAB_SUPPORT"				=>	"Sop<em>o</em>rte",
"TAB_LOGOUT"				=>	"Cerrar <em>s</em>esi&oacute;n",

/* 
 * For: sidebar-files.php
*/
"BROWSE_COMPUTER"		=>	"Buscar en el equipo",
"UPLOAD"						=>	"Subir",

/* 
 * For: sidebar-support.php
*/
"SIDE_SUPPORT_LOG" => "Sop<em>o</em>rte",
"SIDE_HEALTH_CHK" => "<em>E</em>stado del sitio web",
"SIDE_DOCUMENTATION" => "Documentaci&oacute;n",
"SIDE_VIEW_LOG" => "<em>V</em>er registros",

/* 
 * For: sidebar-theme.php
*/
"SIDE_VIEW_SITEMAP"	=>	"<em>V</em>er Mapa del sitio",
"SIDE_GEN_SITEMAP"	=>	"Generar el <em>M</em>apa del sitio",
"SIDE_COMPONENTS"		=>	"<em>E</em>ditar componentes",
"SIDE_EDIT_THEME"		=>	"E<em>d</em>itar tema",
"SIDE_CHOOSE_THEME"	=>	"Selecci&oacute;n de <em>t</em>ema",

/* 
 * For: sidebar-pages.php
*/
"SIDE_CREATE_NEW"		=>	"<em>C</em>rear nueva p&aacute;gina",
"SIDE_VIEW_PAGES"		=>	"Ver todas las <em>p</em>&aacute;ginas",

/* 
 * For: sidebar-pages.php
*/
"SIDE_GEN_SETTINGS"	=>	"<em>C</em>onfiguraci&oacute;n general",
"SIDE_USER_PROFILE"	=>	"<em>P</em>erfil de usuario",

/* 
 * For: sidebar-pages.php
*/
"SIDE_VIEW_BAK"			=>	"Ver backup de p&aacute;gina",
"SIDE_WEB_ARCHIVES"	=>	"<em>A</em>rchivos del sitio web",
"SIDE_PAGE_BAK"			=>	"P&aacute;gina de <em>B</em>ackups",

/* 
 * For: error_checking.php
*/
"ER_PWD_CHANGE"			=>	"&iexcl;No olvides <a href=\"settings.php#profile\">cambiar tu contrase&ntilde;a</a> generada al azar ahora mismo!...",
"ER_BAKUP_DELETED"	=>	"Backup borrado para %s",
"ER_REQ_PROC_FAIL"	=>	"El proceso solicitado no se ha ejecutado",
"ER_YOUR_CHANGES"		=>	"Se han guardado los cambios de %s",
"ER_HASBEEN_REST"		=>	"Se ha restaurado %s",
"ER_HASBEEN_DEL"		=>	"Se ha borrado %s",
"ER_CANNOT_INDEX"		=>	"No puedes cambiar la URL de la p&aacute;gina de inicio - index",
"ER_SETTINGS_UPD"		=>	"Se han actualizado los valores personalizados",
"ER_OLD_RESTORED"		=>	"Se han restaurado los valores antiguos",
"ER_NEW_PWD_SENT"		=>	"Se ha enviado una nueva contrase&ntilde;a al correo indicado.",
"ER_SENDMAIL_ERR"		=>	"Hubo un problema al enviar el correo. Por favor, int&eacute;ntalo de nuevo.",
"ER_FILE_DEL_SUC"		=>	"Archivo borrado correctamente",
"ER_PROBLEM_DEL"		=>	"Hubo un problema al borrar el archivo.",
"ER_COMPONENT_SAVE"	=>	"Se han guardado los componentes.",
"ER_COMPONENT_REST"	=>	"Se han restaurado los componentes.",
"ER_CANCELLED_FAIL"	=>	"<b>Cancelado:</b> La actualizaci&oacute;n de este archivo se ha cancelado.",

/* 
 * For: changedata.php
*/
"CANNOT_SAVE_EMPTY"	=>	"No puedes gardar una p&aacute;gina vac&iacute;a",
"META_DESC" 				=> "Descripci&oacute;n Meta",

/* 
 * For: template_functions.php
*/
"FTYPE_COMPRESSED"	=>	"Comprimido", //a file-type
"FTYPE_VECTOR"			=>	"Vector", //a file-type
"FTYPE_FLASH"				=>	"Flash", //a file-type
"FTYPE_VIDEO"				=>	"V&iacute;deo", //a file-type
"FTYPE_AUDIO"				=>	"Audio", //a file-type
"FTYPE_WEB"					=>	"Web", //a file-type
"FTYPE_DOCUMENTS"		=>	"Documentos", //a file-type
"FTYPE_SYSTEM"			=>	"Sistema", //a file-type
"FTYPE_MISC"				=>	"Otros", //a file-type
"IMAGES"						=>	"Im&aacute;genes",

/* 
 * For: login_functions.php
*/
"FILL_IN_REQ_FIELD"	=>	"Por favor, rellene todos los campos obligatorios",
"LOGIN_FAILED"			=>	"Error. Por favor, revise su nombre de usuario y contrase&ntilde;a",

/* 
 * For: Date Format
*/
"DATE_FORMAT"									=>	"j M, Y", //please keep short
"DATE_AND_TIME_FORMAT"				=>	"jS F, Y - g:i A", //date and time

/* 
 * For: welcome.php
*/
"WELCOME_MSG"				=>	"&iexcl;Gracias por escoger GetSimple como tu CMS!",
"WELCOME_P"					=>	"GetSimple hace la gesti&oacute;n de su sitio web lo m&aacute;s simple posible, con la interfaz de usuario 'top-of-the-class' y el sistema de plantillas m&aacute;s sencillo.",
"GETTING_STARTED"		=>	"Primeros pasos",

/* 
 * For: image.php
*/

"CURRENT_THUMBNAIL" => "Miniatura actual",
"RECREATE" 					=> "volver a crear",
"CREATE_ONE" 				=> "crear una",
"IMG_CONTROl_PANEL" => "Panel de Control de im&aacute;genes",
"ORIGINAL_IMG" 			=> "Imagen original",
"CLIPBOARD_INSTR" 	=> "Seleccionar todo",
"CREATE_THUMBNAIL" 	=> "Crear miniatura",
"CROP_INSTR_NEW"		=> "<em>ctrl-B</em> o <em>cmnd-B</em> para encuadrar",
"SELECT_DIMENTIONS" => "Seleccione dimensiones",
"HTML_ORIG_IMG" 		=> "Imagen original HTML",
"LINK_ORIG_IMG" 		=> "Imagen original URL",
"HTML_THUMBNAIL" 		=> "Miniatura HTML",
"LINK_THUMBNAIL" 		=> "Miniatura URL",
"HTML_THUMB_ORIG" 	=> "Miniatura e Imagen HTML",

/* 
 * For: plugins.php
*/

"PLUGINS_MANAGEMENT"=> "Administrador de Plugins",
"PLUGINS_INSTALLED" => "plugins instalados",
"SHOW_PLUGINS"			=> "Plu<em>g</em>ins Instalados",
"PLUGIN_NAME" 			=> "Nombre",
"PLUGIN_DESC" 			=> "Descripci&oacute;n",
"PLUGIN_VER" 				=> "Versi&oacute;n",




/***********************************************************************************
 * SINCE Version 3.0
***********************************************************************************/

/* 
 * For: setup.php
 */

"ROOT_HTACCESS_ERROR" => "&iexcl;Error al crear .htaccess en el directorio ra&iacute;z! Por favor copia <b>%s</b> a <b>.htaccess</b> y cambia <code>%s</code> por <code>%s</code>",
"REMOVE_TEMPCONFIG_ERROR" => "Error al borrar <b>%s</b>! Por favor hazlo manualmente.",
"MOVE_TEMPCONFIG_ERROR" => "&iexcl;Error al renombrar <b>%s</b> a <b>%s</b>! Por favor hazlo manualmente.",
"KILL_CANT_CONTINUE" => "No se puede continuar. Por favor corrije los errores y vuelve a intentarlo.",
"REFRESH" => "Refrescar",
"BETA"=> "Beta / Bleeding Edge",

/*
 * Misc Cleanup Work
 */
 
"HOMEPAGE_DELETE_ERROR" => "No puedes eliminar tu p&oacute;gina de Inicio", //deletefile
"NO_ZIPARCHIVE" => "La extensi&oacute;n ZipArchive no est&aacute; instalada. No se puede continuar.", //zip
"REDIRECT_MSG"=> "Si tu navegador no te redirecciona, haz click <a href=\"%s\">aqu&iacute;</a>", //basic
"REDIRECT"=> "Redirigir", //basic
"DENIED"=> "Denegado", //sitemap
"DEBUG_MODE"=> "MODO DEBUG", //nav-include
"DOUBLE_CLICK_EDIT"=> "Doble click para editar", //components
"THUMB_SAVED"=> "Miniatura guardada", //image
"EDIT_COMPONENTS"		=>	"Editar componentes", //components
"REQS_MORE_INFO"=>"Para obtener m&aacute;s informaci&oacute;n sobre los m&oacute;dulos necesarios, visite la <a href=\"%s\" target=\"_blank\">p&aacute;gina de requisitos</a>
.", //install & health-check
"SYSTEM_UPDATE" => "Actualizaci&oacute;n del Sistema", // update.php
"AUTHOR" 				=> "Autor", //plugins.php
"ENABLE" 				=> "Activar", //plugins.php
"DISABLE" 				=> "Desactivar", //plugins.php
"NO_THEME_SCREENSHOT" => "La captura de pantalla del tema no est&aacute; disponible", //theme.php
"UNSAVED_INFORMATION" => "Est&aacute;s a punto de salir de esta p&aacute;gina y perder&aacute;s cualquier informaci&oacute;n no guardada.", //edit.php
"BACK_TO_WEBSITE" => "Volver al sitio web", //index & resetpassword
"SUPPORT_FORUM" => "Foro de Soporte", //support.php
"FILTER" => "Filtro", //pages.php
"UPLOADIFY_BUTTON" => "Subir archivos y/o im&aacute;genes...", //upload.php
"FILE_BROWSER" => "Explorador de archivos", //filebrowser.php
"SELECT_FILE" => "Seleccionar archivo", //filebrowser.php
"CREATE_FOLDER" => "Crear carpeta", //upload.php
"THUMBNAIL" => "Miniatura", //filebrowser.php
"ERROR_FOLDER_EXISTS" => "La carpeta que est&aacute;s intentado crear ya existe", //upload.php
"FOLDER_CREATED" => "La nueva carpeta se ha creado correctamente: <strong>%s</strong>", //upload.php
"ERROR_CREATING_FOLDER" => "Se ha producido un error al crear la nueva carpeta", //upload.php
"DELETE_FOLDER" => "Borrar carpeta", //upload.php
"FILE_NAME" => "Nombre de archivo", //multiple tr header rows
"FILE_SIZE" => "Tama&ntilde;o", //multiple tr header rows
"ARCHIVE_DATE" => "Fecha de archivo", //archive.php
"CKEDITOR_LANG" => "es", // edit.php ; set CKEditor language, don't forget to include CKEditor language file in translation zip
"MENU_MANAGER" => "Men&uacute;s",
"MENU_MANAGER_DESC" => "Administraci&oacute;n de men&uacute;s",
"SAVE_MENU_ORDER" => "Guardar",
"SAVE_AND_CLOSE" => "Guardar y cerrar",
"ADDITIONAL_ACTIONS" => "Opciones de guardado",
"CLONE" => "Clonar p&aacute;gina",
"NORMAL" => "Normal",
"SHARE" => "Compartir",
"STATUS" => "Estado",
"GET_PLUGINS_LINK" => "",


"X" => "sin traducci&oacute;n"



);

?>
