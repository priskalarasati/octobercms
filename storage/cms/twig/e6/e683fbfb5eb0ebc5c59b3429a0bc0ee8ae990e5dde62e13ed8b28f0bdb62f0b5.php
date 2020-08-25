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

/* C:\xampp\htdocs\octobercms/themes/medico/partials/site/header.htm */
class __TwigTemplate_90e8d731751651e5ece6d9b588d06b139a2c68c75779feefc48a816a547dc821 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"img/logo.png\" alt=\"logo\"> </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse main-menu-item justify-content-center\"
                            id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav align-items-center\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"about.html\">about</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"Doctor.html\">Doctors</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"services.html\">services</a>
                                        <a class=\"dropdown-item\" href=\"dep.html\">depertments</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">Elements</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"blog.html\">blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a class=\"btn_2 d-none d-lg-block\" href=\"#\">HOT LINE- +62</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/medico/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--::header part start::-->
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"img/logo.png\" alt=\"logo\"> </a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>

                        <div class=\"collapse navbar-collapse main-menu-item justify-content-center\"
                            id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav align-items-center\">
                                <li class=\"nav-item active\">
                                    <a class=\"nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"about.html\">about</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"Doctor.html\">Doctors</a>
                                </li>

                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"services.html\">services</a>
                                        <a class=\"dropdown-item\" href=\"dep.html\">depertments</a>
                                        <a class=\"dropdown-item\" href=\"elements.html\">Elements</a>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown_1\"
                                        role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        blog
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_1\">
                                        <a class=\"dropdown-item\" href=\"blog.html\">blog</a>
                                        <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                    </div>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a class=\"btn_2 d-none d-lg-block\" href=\"#\">HOT LINE- +62</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->", "C:\\xampp\\htdocs\\octobercms/themes/medico/partials/site/header.htm", "");
    }
}
