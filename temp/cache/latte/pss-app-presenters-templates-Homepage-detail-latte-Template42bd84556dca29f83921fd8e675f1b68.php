<?php
// source: C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\projects\pss\app\presenters/templates/Homepage/detail.latte

class Template42bd84556dca29f83921fd8e675f1b68 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('f7abd22a7d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb012a1297fe_content')) { function _lb012a1297fe_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="banner">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
</div>

<div id="content">
 Naozaj si želáte potvrdiť príchod na zápis?
 <br>
 <br>
 <br>
<?php $_l->tmp = $_control->getComponent("potvrdenieZapisuForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
 <br>
 <br>
 <br>
 <br>
 <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("default"), ENT_COMPAT) ?>
">Nie, návrat na výsledky</a>
	

	

	
</div>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb5c0fde6369_title')) { function _lb5c0fde6369_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Výsledky prijímacích skúšok</h1>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbda625c011f_scripts')) { function _lbda625c011f_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacrosRuntime::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
<script src="http://jush.sourceforge.net/jush.js"></script>
<script>
	jush.create_links = false;
	jush.highlight_tag('code');
	$('code.jush').each(function(){ $(this).html($(this).html().replace(/\x7B[/$\w].*?\}/g, '<span class="jush-latte">$&</span>')) });

	$('a[href^=#]').click(function(){
		$('html,body').animate({ scrollTop: $($(this).attr('href')).show().offset().top - 5 }, 'fast');
		return false;
	});
</script>
<?php
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb45f6bcc6e7_head')) { function _lb45f6bcc6e7_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><style>

</style>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start(function () {});}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars()) ; 
}}