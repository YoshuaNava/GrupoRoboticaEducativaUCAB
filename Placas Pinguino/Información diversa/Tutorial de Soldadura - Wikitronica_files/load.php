var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1392161304",[],"site"],["noscript","1392161304",[],"noscript"],["startup","1401862035",[],"startup"],["user","1392161304",[],"user"],["user.groups","1392161304",[],"user"],["user.options","1401862035",[],"private"],["user.cssprefs","1401862035",["mediawiki.user"],"private"],["user.tokens","1392161304",[],"private"],["filepage","1392161304",[]],["skins.chick","1392161304",[]],["skins.cologneblue","1392161304",[]],["skins.modern","1392161304",[]],["skins.monobook","1392161304",[]],["skins.nostalgia","1392161304",[]],["skins.simple","1392161304",[]],["skins.standard","1392161304",[]],["skins.vector","1392161304",[]],["jquery","1392161304",[]],["jquery.appear","1392161304",[]],[
"jquery.arrowSteps","1392161304",[]],["jquery.async","1392161304",[]],["jquery.autoEllipsis","1392161304",["jquery.highlightText"]],["jquery.byteLength","1392161304",[]],["jquery.byteLimit","1392161304",["jquery.byteLength"]],["jquery.checkboxShiftClick","1392161304",[]],["jquery.client","1392161304",[]],["jquery.collapsibleTabs","1392161304",[]],["jquery.color","1392161304",["jquery.colorUtil"]],["jquery.colorUtil","1392161304",[]],["jquery.cookie","1392161304",[]],["jquery.delayedBind","1392161304",[]],["jquery.expandableField","1392161304",["jquery.delayedBind"]],["jquery.farbtastic","1392161304",["jquery.colorUtil"]],["jquery.footHovzer","1392161304",[]],["jquery.form","1392161304",[]],["jquery.getAttrs","1392161304",[]],["jquery.highlightText","1392161304",[]],["jquery.hoverIntent","1392161304",[]],["jquery.json","1392161304",[]],["jquery.localize","1392161304",[]],["jquery.makeCollapsible","1392161842",[]],["jquery.messageBox","1392161304",[]],["jquery.mockjax","1392161304",[]],[
"jquery.mw-jump","1392161304",[]],["jquery.mwExtension","1392161304",[]],["jquery.placeholder","1392161304",[]],["jquery.qunit","1392161304",[]],["jquery.qunit.completenessTest","1392161304",["jquery.qunit"]],["jquery.spinner","1392161304",[]],["jquery.suggestions","1392161304",["jquery.autoEllipsis"]],["jquery.tabIndex","1392161304",[]],["jquery.tablesorter","1392161304",[]],["jquery.textSelection","1392161304",[]],["jquery.validate","1392161304",[]],["jquery.xmldom","1392161304",[]],["jquery.tipsy","1392161304",[]],["jquery.ui.core","1392161304",["jquery"],"jquery.ui"],["jquery.ui.widget","1392161304",[],"jquery.ui"],["jquery.ui.mouse","1392161304",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1392161304",[],"jquery.ui"],["jquery.ui.draggable","1392161304",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1392161304",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable",
"1392161304",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1392161304",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1392161304",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1392161304",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1392161304",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1392161304",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1392161304",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1392161304",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1392161304",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider","1392161304",["jquery.ui.core","jquery.ui.widget",
"jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1392161304",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1392161304",["jquery"],"jquery.ui"],["jquery.effects.blind","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1392161304",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.slide","1392161304",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1392161304",["jquery.effects.core"],"jquery.ui"],["mediawiki","1392161304",[]],["mediawiki.api","1392161304",["mediawiki.util"]],["mediawiki.api.category","1392161304",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1392161304",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1392161304",["mediawiki.api"]],["mediawiki.api.titleblacklist","1392161304",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1392161304",["mediawiki.api","mediawiki.user"]],["mediawiki.debug","1392161304",["jquery.footHovzer"]],["mediawiki.debug.init","1392161304",["mediawiki.debug"]],["mediawiki.feedback","1392161304",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1392161304",[]],["mediawiki.Title","1392161304",["mediawiki.util"]],["mediawiki.Uri","1392161304",[]],["mediawiki.user","1392161304",["jquery.cookie"]],[
"mediawiki.util","1392161842",["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"]],["mediawiki.action.edit","1392161304",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.history","1392161304",["jquery.ui.button"],"mediawiki.action.history"],["mediawiki.action.history.diff","1392161304",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1392161304",["mediawiki.util"]],["mediawiki.action.view.metadata","1392169300",[]],["mediawiki.action.view.rightClickEdit","1392161304",[]],["mediawiki.action.watch.ajax","1392168552",["mediawiki.api.watch","mediawiki.util"]],["mediawiki.language","1392161304",[]],["mediawiki.jqueryMsg","1392161304",["mediawiki.language","mediawiki.util"]],["mediawiki.libs.jpegmeta","1392161304",[]],["mediawiki.page.ready","1392161304",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1392161304",["jquery.client",
"mediawiki.util"]],["mediawiki.special","1392161304",[]],["mediawiki.special.block","1392161304",["mediawiki.util"]],["mediawiki.special.changeemail","1392161304",["mediawiki.util"]],["mediawiki.special.changeslist","1392161304",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1392161304",["jquery.byteLimit"]],["mediawiki.special.preferences","1392161304",[]],["mediawiki.special.recentchanges","1392161304",["mediawiki.special"]],["mediawiki.special.search","1392161304",[]],["mediawiki.special.undelete","1392161304",[]],["mediawiki.special.upload","1392161304",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1392161304",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1392161304",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1392161304",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1392161304",[]],["mediawiki.legacy.config",
"1392161304",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1392161304",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1392161304",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.preview","1392161304",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1392161304",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1392161304",[]],["mediawiki.legacy.oldshared","1392161304",[]],["mediawiki.legacy.upload","1392161304",["mediawiki.legacy.wikibits","mediawiki.util"]],["mediawiki.legacy.wikibits","1392161304",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1392161304",[]],["ext.geshi.local","1392161304",[]],["ext.cite","1392161304",["jquery.tooltip"]],["jquery.tooltip","1392161304",[]],["ext.confirmAccount","1392161304",[]]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://wikitronica.labc.usb.ve","wgUserLanguage":"es","wgContentLanguage":"es","wgVersion":"1.19.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgDefaultDateFormat":"dmy","wgMonthNames":["","enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"],"wgMonthNamesShort":["","ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"],"wgMainPageTitle":"Página principal","wgFormattedNamespaces":{"-2":"Medio","-1":"Especial","0":"","1":"Discusión","2":"Usuario","3":"Usuario discusión","4":"Wikitronica","5":"Wikitronica discusión","6":"Archivo","7":
"Archivo discusión","8":"MediaWiki","9":"MediaWiki discusión","10":"Plantilla","11":"Plantilla discusión","12":"Ayuda","13":"Ayuda discusión","14":"Categoría","15":"Categoría discusión"},"wgNamespaceIds":{"medio":-2,"especial":-1,"":0,"discusión":1,"usuario":2,"usuario_discusión":3,"wikitronica":4,"wikitronica_discusión":5,"archivo":6,"archivo_discusión":7,"mediawiki":8,"mediawiki_discusión":9,"plantilla":10,"plantilla_discusión":11,"ayuda":12,"ayuda_discusión":13,"categoría":14,"categoría_discusión":15,"imagen":6,"imagen_discusión":7,"usuaria":2,"usuaria_discusión":3,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgSiteName":"Wikitronica","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","mpp","pdf","ppt","tiff","bmp","docx","xlsx","pptx","ps","odt","ods","odp",
"odg"],"wgDBname":"wikidb","wgFileCanRotate":true,"wgAvailableSkins":{"cologneblue":"CologneBlue","vector":"Vector","nostalgia":"Nostalgia","myskin":"MySkin","modern":"Modern","simple":"Simple","monobook":"MonoBook","chick":"Chick","standard":"Standard"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikidb_wiki_","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[]});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=es\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20121002T194747Z\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: wikidb-wiki_:resourceloader:filter:minify-js:7:5bed56524d074ec871081fb87efdfb8c */
