<?php

/* core/modules/system/templates/block--system-messages-block.html.twig */
class __TwigTemplate_5288db8c293e29de2aeb092edd6fd91064e4d16c6e13bc40fc5db6090cade7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the messages block.*/
/*  **/
/*  * Removes wrapper elements from block so that empty block does not appear when*/
/*  * there are no messages.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content of this block.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ content }}*/
/* */
