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

/* main/index.html.twig */
class __TwigTemplate_187967cf7a4fdcd8d2f9f9f67963c0074afd5930e4578f59bff112785b3b575e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div class=\"container-fluid\">
    <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"POST\">
      <div class=\"row pb-4\">
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Wybierz kategorie</label>
              <select name=\"c_name\" class=\"form-control\" id=\"category\">
              ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 13
            echo "                <option name=\"c_name\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
          </div>
        </div>
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Wybierz magazyn</label>
              <select name=\"s_name\" class=\"form-control\" id=\"stock\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 23
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </select>
          </div>
        </div>
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Dostępność</label>
            <select name=\"av\" class=\"form-control\" id=\"available\">
              <option name=\"one\" value=\"1\">Dostępny</option>
              <option name=\"zero\" value=\"0\">Niedostępny</option>
            </select>
          </div>
        </div>
      </div>
      <button type=\"submit\" class=\"btn my-btn\">Wyszukaj</button>
    </form>
    <h1 class=\"pt-4\">Wszystkie sprzęty</h1>
    <table class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Nazwa</th>
          <th scope=\"col\">Magazyn</th>
          <th scope=\"col\">Opis</th>
          <th scope=\"col\">Dostępność</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "        <tr>
            <th scope=\"row\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</th>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getStock", [], "method", false, false, false, 56), "getName", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "state", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  162 => 58,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  143 => 53,  139 => 52,  110 => 25,  99 => 23,  95 => 22,  86 => 15,  75 => 13,  71 => 12,  62 => 6,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}


{% block body %}
  <div class=\"container-fluid\">
    <form action=\"{{ path('search') }}\" method=\"POST\">
      <div class=\"row pb-4\">
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Wybierz kategorie</label>
              <select name=\"c_name\" class=\"form-control\" id=\"category\">
              {% for cat in category %}
                <option name=\"c_name\" value=\"{{ cat.name }}\" >{{ cat.name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Wybierz magazyn</label>
              <select name=\"s_name\" class=\"form-control\" id=\"stock\">
              {% for stock in stocks %}
                <option value=\"{{ stock.name }}\">{{ stock.name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"col-sm\">
          <div class=\"form-group\">
            <label for=\"exampleFormControlSelect1\">Dostępność</label>
            <select name=\"av\" class=\"form-control\" id=\"available\">
              <option name=\"one\" value=\"1\">Dostępny</option>
              <option name=\"zero\" value=\"0\">Niedostępny</option>
            </select>
          </div>
        </div>
      </div>
      <button type=\"submit\" class=\"btn my-btn\">Wyszukaj</button>
    </form>
    <h1 class=\"pt-4\">Wszystkie sprzęty</h1>
    <table class=\"table\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">#</th>
          <th scope=\"col\">Nazwa</th>
          <th scope=\"col\">Magazyn</th>
          <th scope=\"col\">Opis</th>
          <th scope=\"col\">Dostępność</th>
        </tr>
      </thead>
      <tbody>
        {% for product in products %}
        <tr>
            <th scope=\"row\">{{ product.id }}</th>
            <td>{{ product.name }}</td>
            <td>{{ product.getStock().getName }}</td>
            <td>{{ product.description }}</td>
            <td>{{ product.state }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "main/index.html.twig", "/home/pi/rentsite/templates/main/index.html.twig");
    }
}