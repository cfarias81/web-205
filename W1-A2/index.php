<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

$news="I have a theory. The debate around accreditation in education often focuses on two extremes: the people who don’t believe in the necessity of a four-year degree and the people who think accreditation, and an Ivy-laden stamp of approval, is the only way to succeed. But, nearly two years into covering edtech, I’ve realized that grouping these cohorts into two very separate buckets may be an oversimplification. In fact, as I spoke about on Equity this week, there is more of an overlap than you’d imagine when it comes to how entrepreneurs are viewing the future of education.".
"\n Let me explain. When it comes to fundraising or types of capital, optionality has been the term du jour in the current tech environment. And the same goes when we’re talking about the types of education pathways that a student should have access to.";

$smarty->assign("Advantage",array("acting","facility","simplicity"));
$smarty->assign("Carlito", "text Carlito");
$smarty->assign('news', $news);
$smarty->display('index.tpl');




?>
