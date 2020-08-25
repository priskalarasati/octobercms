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

/* C:\xampp\htdocs\octobercms/themes/medico/partials/site/footer.htm */
class __TwigTemplate_3e019c6fe91b76b1c9d3f73defd5814dbd3f354723aa019e92827c07a2c019d7 extends \Twig\Template
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
        echo "<div class=\"copyright_part\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <p class=\"footer-text m-0 col-lg-8 col-md-12\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            <div class=\"col-lg-4 col-md-12 text-center text-lg-right footer-social\">
                <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                <a href=\"#\"> <i class=\"ti-twitter\"></i> </a>
                <a href=\"#\"><i class=\"ti-instagram\"></i></a>
                <a href=\"#\"><i class=\"ti-skype\"></i></a>
            </div>
        </div>
    </div>
</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/medico/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"copyright_part\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <p class=\"footer-text m-0 col-lg-8 col-md-12\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            <div class=\"col-lg-4 col-md-12 text-center text-lg-right footer-social\">
                <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                <a href=\"#\"> <i class=\"ti-twitter\"></i> </a>
                <a href=\"#\"><i class=\"ti-instagram\"></i></a>
                <a href=\"#\"><i class=\"ti-skype\"></i></a>
            </div>
        </div>
    </div>
</div>
</footer>", "C:\\xampp\\htdocs\\octobercms/themes/medico/partials/site/footer.htm", "");
    }
}
