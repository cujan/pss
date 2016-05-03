<?php
// source: C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\projects\pss\app\presenters/templates/Homepage/default.latte

class Templatec2a7ab6bdbe737febb8d34b3b9826356 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('a9e0b5e6bf', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb613f99b545_content')) { function _lb613f99b545_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="banner">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
</div>

<div id="content">
	<h2>Zadajte prosím svoj kód žiaka:</h2>

	
<?php $_l->tmp = $_control->getComponent("vysledokForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>

	
<?php if ($vysledky <> NULL) { ?>
<div id="tableVysledok">
<table border="1" cellpadding="5">
	
    <tbody>
	<tr id="tableHlavicka" >
	    
	    <td>Kód žiaka</td>
	    <td>Body ZŠ</td>
	    <td>Body T9</td>
	    <td>Body PS SJL</td>
	    <td>Body PS PRI</td>
	    <td>Body PS spolu</td>
	    <td>Body spolu</td>
	    <td>Umiestnenie</td>
	    <td>Priebežné rozhodnutie</td>
	    <td>Konečné Rozhodnutie</td>
	    <td>Elektronické Potvrdenie zápisu</td>
	    
	</tr>  
    
<?php $iterations = 0; foreach ($vysledky  as $vysledok) { ?>
	<tr>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->kodZiaka, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodyZs, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodyT9, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodyPsSjl, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodyPsPri, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodPs, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->bodySpolu, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->umiestnenie, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->rozhodnutie, ENT_NOQUOTES) ?></td>
	    <td><?php echo Latte\Runtime\Filters::escapeHtml($vysledok->rozhodnutieKonecne, ENT_NOQUOTES) ?></td>
	    <td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("detail", array($vysledok->id)), ENT_COMPAT) ?>
">Potvrdenie zápisu</a></td>
	</tr>
<?php $iterations++; } ?>
    </tbody>
</table>
</div>

<?php } ?>
* - prijatý za predpokladu, že sa posunie na voľné miesto po zápise v dňoch 21. - 22.5.2015<br> 	
* - prijatý za predpokladu, že si podá prihlášku na nenaplnený počet žiakov v zameraní lesníctvo - krajinná ekológia<br>
* - prijatý za predpokladu, že si podá prihlášku na učebný odbor rybár, mechanizátor lesnej výroby<br>


	
</div>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb1e6d3c2e7d_title')) { function _lb1e6d3c2e7d_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Konečné výsledky prijímacích skúšok</h1>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb7599a49941_scripts')) { function _lb7599a49941_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
if (!function_exists($_b->blocks['head'][] = '_lb0433b6ca3d_head')) { function _lb0433b6ca3d_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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