<?php
// source: /var/www/users/archeryarena/newpage/brandnewpage/sandbox/app/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1662689078', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbcdb5d95971_content')) { function _lbcdb5d95971_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
 ?>
<div id="<?php echo $_control->getSnippetId('sendForm') ?>"><?php call_user_func(reset($_b->blocks['_sendForm']), $_b, $template->getParameters()) ?>
</div><div>
<?php $_l->tmp = $_control->getComponent("logInForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
</div>

<script>
	$("form.ajax").live("submit", function () {
		$(this).ajaxSubmit();
		return false;
	});

	$("form.ajax :submit").live("click", function () {
		$(this).ajaxSubmit();
		return false;
	});
</script>
<?php
}}

//
// block _sendForm
//
if (!function_exists($_b->blocks['_sendForm'][] = '_lbea5b5357d5__sendForm')) { function _lbea5b5357d5__sendForm($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('sendForm', FALSE)
?><h1><?php echo Latte\Runtime\Filters::escapeHtml($welcome, ENT_NOQUOTES) ?></h1>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 