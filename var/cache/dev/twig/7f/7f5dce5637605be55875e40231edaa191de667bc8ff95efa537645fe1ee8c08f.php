<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_28c39bc81fefe1976331fbd0d264de820d77bfd97a231ec23963d5adce3d5689 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  <title>RENT.ME</title>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
</head>
<body>

<nav class=\"navbar navbar-light cl-light\">
  <div class=\"container-fluid\">
    <span class=\"navbar-brand mb-0 h1 breeze\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"logo\"></></span>
    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 18
            echo "          <span class=\"navbar-brand mb-0 h1\"> <a class=\"logout\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">WYLOGUJ</a> </span>
    ";
        }
        // line 20
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "          <span class=\"navbar-brand mb-0 h1\"> <a class=\"logout\" href=\"/\">PANEL ADMINISTRATORA</a> </span>
    ";
        }
        // line 23
        echo "
  </div>
</nav>

<section class=\"text-center pt-5\">
  <div class=\"signin\">
  ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "  </div>
</section>

<footer class=\"footer mt-auto py-3 cl-light\">RENT.ME &copy;2021</footer>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  87 => 30,  85 => 29,  77 => 23,  73 => 21,  70 => 20,  64 => 18,  62 => 17,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  {{ encore_entry_link_tags('app') }}
  <title>RENT.ME</title>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\">
</head>
<body>

<nav class=\"navbar navbar-light cl-light\">
  <div class=\"container-fluid\">
    <span class=\"navbar-brand mb-0 h1 breeze\"><img class=\"logo\" src=\"/images/logo.png\" alt=\"logo\"></></span>
    {% if is_granted('ROLE_USER') %}
          <span class=\"navbar-brand mb-0 h1\"> <a class=\"logout\" href=\"{{ path('logout')}}\">WYLOGUJ</a> </span>
    {% endif %}
    {% if is_granted('ROLE_ADMIN') %}
          <span class=\"navbar-brand mb-0 h1\"> <a class=\"logout\" href=\"/\">PANEL ADMINISTRATORA</a> </span>
    {% endif %}

  </div>
</nav>

<section class=\"text-center pt-5\">
  <div class=\"signin\">
  {% block body %}{% endblock %}
  </div>
</section>

<footer class=\"footer mt-auto py-3 cl-light\">RENT.ME &copy;2021</footer>
</div>
</body>
</html>
", "layout.html.twig", "/home/pi/rentsite/templates/layout.html.twig");
    }
}
