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

/* C:\xampp\htdocs\octobercms/themes/medico/pages/index.htm */
class __TwigTemplate_2e1a0374cad1c522f409f08ab8696430d9e756bf42ea94a3cbeaab646b22cdc3 extends \Twig\Template
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
        echo "<body>
    <!--::header part start::-->
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
    <!-- Header part end-->

    <!-- banner part start-->
    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 col-xl-5\">
                    <div class=\"banner_text\">
                        <div class=\"banner_text_iner\">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Doctor</h1>
                            <p>Kesehatan adalah harta terpenting dari kehidupan, seluruh aktivitas
                                hanya bisa dilakukan ketika kondisi badan sehat. Menjalani pola hidup
                            sehat dan olahraga teratur merupakan cara termudah untuk menjaga
                                kebugaran dan mencegah terserang penyakit. </p>
                            <a href=\"#\" class=\"btn_2\">Buat Janji</a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"banner_img\">
                        <img src=\"img/banner_img.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class=\"about_us padding_top\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"about_us_img\">
                        <img src=\"img/top_service.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-5\">
                    <div class=\"about_us_text\">
                        <h2>Tentang Kami</h2>
                        <p>Kami hadir untuk membantu mengelolah kesehatan anda dan keluarga. Perjalanan kesehatan
                            dimulai dari pencegahan, pengobatan ketika sakit dan perawatan ketika sembuh. 
                            Medico menyiapkan informasi kesehatan dengan referensi yang jelas dan kredibel. Dapat 
                            menghubungkan pasien dengan tenaga medis maupun penyedia layanan kesehatan. <br><br>
                            Gunakan Medico untuk membantu anda pada setiap tahap perjalanan kesehatan, dengan rekomendasi
                            yang spesifik sesuai kebutuhan individu.
                        </p>
                        <a class=\"btn_2 \" href=\"#\">Pelajari lebih lanjut</a>
                        <div class=\"banner_item\">
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_1.svg\" alt=\"\">
                                <h5>Darurat</h5>
                            </div>
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_2.svg\" alt=\"\">
                                <h5>Janji</h5>
                            </div>
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_3.svg\" alt=\"\">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class=\"feature_part\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2>Pelayanan Kami</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-lg-3 col-sm-12\">
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
                            <h4>Kesehatan Gigi</h4>
                            <p>Ada banyak kebiasaan harian yang dapat merugikan mulutmu. Yuk jaga kesehatan gigimu.</p>
                        </div>
                    </div>
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
                            <h4>Kesehatan Mata</h4>
                            <p>Dengan sering menatap layar ponsel dan juga layar monitor, bisa jadi
                                kamu lupa cara menjaga kesehatan mata. Padahal cara menjaga kesehatan
                                mata ini sangat mudah kamu lakukan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12\">
                        <div class=\"single_feature_img\">
                            <img src=\"img/service.png\" alt=\"\">
                        </div>
                </div>
                <div class=\"col-lg-3 col-sm-12\">
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
                            <h4>Kesehatan Gigi</h4>
                            <p>Ada banyak kebiasaan harian yang dapat merugikan mulutmu. Yuk jaga kesehatan gigimu.</p>
                        </div>
                    </div>
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
                            <h4>Kesehatan Jantung</h4>
                            <p>Menjaga kesehatan jantung dapat dilakukan dengan beberapa langkah sederhana, 
                                seperti menjalani gaya hidup dan pola makan yang sehat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class=\"our_depertment section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-xl-12\">
                    <div class=\"depertment_content\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-8\">
                                <h2>Our Depertment</h2>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class=\"doctor_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2> Experienced Doctors</h2>
                        <p>Dokter berpengalaman dan selalu siap sedia melayani pasien dengan sepenuh hati.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/ayman.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Ayman Alatas</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/aditya.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Aditya Surya</h3>
                                <p>Medicine specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/oky.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Oky Pratama</h3>
                                <p>CHeart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/danar.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Danar Wicaksono</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <section class=\"regervation_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center regervation_content\">
                <div class=\"col-lg-7\">
                    <div class=\"regervation_part_iner\">
                        <form>
                            <h2>Buat Janji</h2>
                            <div class=\"form-row\">
                                <div class=\"form-group col-md-6\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Nama\">
                                </div>
                                <div class=\"form-group col-md-6\">
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword4\"
                                        placeholder=\"Alamat Email\">
                                </div>
                                <div class=\"form-group col-md-6\">
                                    <select class=\"form-control\" id=\"Select\">
                                        <option value=\"1\" selected>Masukkan layanan</option>
                                        <option value=\"2\">Periksa Jantung</option>
                                        <option value=\"3\">Dokter Gigi</option>
                                        <option value=\"4\">Operasi</option>
                                        <option value=\"5\">Dll</option>
                                    </select>
                                </div>
                                <div class=\"form-group time_icon col-md-6\">
                                    <select class=\"form-control\" id=\"Select2\">
                                        <option value=\"\" selected>Waktu</option>
                                        <option value=\"1\">8 AM TO 10AM</option>
                                        <option value=\"1\">10 AM TO 12PM</option>
                                        <option value=\"1\">12PM TO 2PM</option>
                                        <option value=\"1\">2PM TO 4PM</option>
                                        <option value=\"1\">4PM TO 6PM</option>
                                        <option value=\"1\">6PM TO 8PM</option>
                                        <option value=\"1\">4PM TO 10PM</option>
                                        <option value=\"1\">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-12\">
                                    <textarea class=\"form-control\" id=\"Textarea\" rows=\"4\"
                                        placeholder=\"Catatan\"></textarea>
                                </div>
                            </div>
                            <div class=\"regerv_btn\">
                                <a href=\"#\" class=\"btn_2\">Buat Janji</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"reservation_img\">
                        <img src=\"img/reservation.png\" alt=\"\" class=\"reservation_img_iner\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!--::blog_part start::-->
    <section class=\"blog_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2>Blog Kami</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"single-home-blog\">
                        <div class=\"card\">
                            <img src=\"img/blog/blog_2.png\" class=\"card-img-top\" alt=\"blog\">
                            <div class=\"card-body\">
                                <a href=\"blog.html\">
                                    <h5 class=\"card-title\">Pentingnya Menjaga Kesehatan gigi dan mulut </h5>
                                </a>
                                <ul>
                                    <li> <span class=\"ti-user\"></span>Jhon mike</li>
                                    <li> <span class=\"ti-bookmark\"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"single-home-blog\">
                        <div class=\"card\">
                            <img src=\"img/blog/blog_3.png\" class=\"card-img-top\" alt=\"blog\">
                            <div class=\"card-body\">
                                <a href=\"blog.html\">
                                    <h5 class=\"card-title\">sakit gigi seperti apa yang dianggap darurat dan perlu ke dokter gigi</h5>
                                </a>
                                <ul>
                                    <li> <span class=\"ti-user\"></span>Jhon mike</li>
                                    <li> <span class=\"ti-bookmark\"></span>Clinic, doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class=\"footer-area\">
        <div class=\"footer section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-xl-2 col-md-4 col-sm-6 single-footer-widget\">
                        <a href=\"#\" class=\"footer_logo\"> <img src=\"img/logo.png\" alt=\"#\"> </a>
                        <p>Selalu dengan pelayanan yang terbaik. </p>
                        <div class=\"social_logo\">
                            <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                            <a href=\"#\"> <i class=\"ti-twitter\"></i> </a>
                            <a href=\"#\"><i class=\"ti-instagram\"></i></a>
                            <a href=\"#\"><i class=\"ti-skype\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-4 single-footer-widget\">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">Department</a></li>
                            <li><a href=\"#\"> Online payment</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Department</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-4 single-footer-widget\">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href=\"#\">In the community</a></li>
                            <li><a href=\"#\">IU health foundation</a></li>
                            <li><a href=\"#\">Family support </a></li>
                            <li><a href=\"#\">Business solution</a></li>
                            <li><a href=\"#\">Community clinic</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-6 single-footer-widget\">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href=\"#\">Lights were season</a></li>
                            <li><a href=\"#\"> Their is let wherein</a></li>
                            <li><a href=\"#\">which given over</a></li>
                            <li><a href=\"#\">Without given She</a></li>
                            <li><a href=\"#\">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-md-6 single-footer-widget\">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class=\"form-wrap\" id=\"mc_embed_signup\">
                            <form target=\"_blank\"
                                action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Your Email Address\"
                                    onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address '\"
                                    required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default text-uppercase\"> <i class=\"ti-angle-right\"></i>
                                </button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                        type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/medico/pages/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    <!--::header part start::-->
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
    <!-- Header part end-->

    <!-- banner part start-->
    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 col-xl-5\">
                    <div class=\"banner_text\">
                        <div class=\"banner_text_iner\">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Doctor</h1>
                            <p>Kesehatan adalah harta terpenting dari kehidupan, seluruh aktivitas
                                hanya bisa dilakukan ketika kondisi badan sehat. Menjalani pola hidup
                            sehat dan olahraga teratur merupakan cara termudah untuk menjaga
                                kebugaran dan mencegah terserang penyakit. </p>
                            <a href=\"#\" class=\"btn_2\">Buat Janji</a>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"banner_img\">
                        <img src=\"img/banner_img.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class=\"about_us padding_top\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-md-6 col-lg-6\">
                    <div class=\"about_us_img\">
                        <img src=\"img/top_service.png\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-5\">
                    <div class=\"about_us_text\">
                        <h2>Tentang Kami</h2>
                        <p>Kami hadir untuk membantu mengelolah kesehatan anda dan keluarga. Perjalanan kesehatan
                            dimulai dari pencegahan, pengobatan ketika sakit dan perawatan ketika sembuh. 
                            Medico menyiapkan informasi kesehatan dengan referensi yang jelas dan kredibel. Dapat 
                            menghubungkan pasien dengan tenaga medis maupun penyedia layanan kesehatan. <br><br>
                            Gunakan Medico untuk membantu anda pada setiap tahap perjalanan kesehatan, dengan rekomendasi
                            yang spesifik sesuai kebutuhan individu.
                        </p>
                        <a class=\"btn_2 \" href=\"#\">Pelajari lebih lanjut</a>
                        <div class=\"banner_item\">
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_1.svg\" alt=\"\">
                                <h5>Darurat</h5>
                            </div>
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_2.svg\" alt=\"\">
                                <h5>Janji</h5>
                            </div>
                            <div class=\"single_item\">
                                <img src=\"img/icon/banner_3.svg\" alt=\"\">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class=\"feature_part\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2>Pelayanan Kami</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-lg-3 col-sm-12\">
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
                            <h4>Kesehatan Gigi</h4>
                            <p>Ada banyak kebiasaan harian yang dapat merugikan mulutmu. Yuk jaga kesehatan gigimu.</p>
                        </div>
                    </div>
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
                            <h4>Kesehatan Mata</h4>
                            <p>Dengan sering menatap layar ponsel dan juga layar monitor, bisa jadi
                                kamu lupa cara menjaga kesehatan mata. Padahal cara menjaga kesehatan
                                mata ini sangat mudah kamu lakukan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-12\">
                        <div class=\"single_feature_img\">
                            <img src=\"img/service.png\" alt=\"\">
                        </div>
                </div>
                <div class=\"col-lg-3 col-sm-12\">
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_1.svg\" alt=\"\"></span>
                            <h4>Kesehatan Gigi</h4>
                            <p>Ada banyak kebiasaan harian yang dapat merugikan mulutmu. Yuk jaga kesehatan gigimu.</p>
                        </div>
                    </div>
                    <div class=\"single_feature\">
                        <div class=\"single_feature_part\">
                            <span class=\"single_feature_icon\"><img src=\"img/icon/feature_2.svg\" alt=\"\"></span>
                            <h4>Kesehatan Jantung</h4>
                            <p>Menjaga kesehatan jantung dapat dilakukan dengan beberapa langkah sederhana, 
                                seperti menjalani gaya hidup dan pola makan yang sehat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class=\"our_depertment section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center text-center\">
                <div class=\"col-xl-12\">
                    <div class=\"depertment_content\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-xl-8\">
                                <h2>Our Depertment</h2>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 col-sm-6\">
                                        <div class=\"single_our_depertment\">
                                            <span class=\"our_depertment_icon\"><img src=\"img/icon/feature_2.svg\"
                                                    alt=\"\"></span>
                                            <h4>Better Future</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!--::doctor_part start::-->
    <section class=\"doctor_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2> Experienced Doctors</h2>
                        <p>Dokter berpengalaman dan selalu siap sedia melayani pasien dengan sepenuh hati.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/ayman.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Ayman Alatas</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/aditya.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Aditya Surya</h3>
                                <p>Medicine specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/oky.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Oky Pratama</h3>
                                <p>CHeart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3\">
                    <div class=\"single_blog_item\">
                        <div class=\"single_blog_img\">
                            <img src=\"img/doctor/danar.jpg\" alt=\"doctor\">
                            <div class=\"social_icon\">
                                <ul>
                                    <li><a href=\"#\"> <i class=\"ti-facebook\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-twitter-alt\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-instagram\"></i> </a></li>
                                    <li><a href=\"#\"> <i class=\"ti-skype\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"single_text\">
                            <div class=\"single_blog_text\">
                                <h3>DR Danar Wicaksono</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <section class=\"regervation_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center regervation_content\">
                <div class=\"col-lg-7\">
                    <div class=\"regervation_part_iner\">
                        <form>
                            <h2>Buat Janji</h2>
                            <div class=\"form-row\">
                                <div class=\"form-group col-md-6\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Nama\">
                                </div>
                                <div class=\"form-group col-md-6\">
                                    <input type=\"password\" class=\"form-control\" id=\"inputPassword4\"
                                        placeholder=\"Alamat Email\">
                                </div>
                                <div class=\"form-group col-md-6\">
                                    <select class=\"form-control\" id=\"Select\">
                                        <option value=\"1\" selected>Masukkan layanan</option>
                                        <option value=\"2\">Periksa Jantung</option>
                                        <option value=\"3\">Dokter Gigi</option>
                                        <option value=\"4\">Operasi</option>
                                        <option value=\"5\">Dll</option>
                                    </select>
                                </div>
                                <div class=\"form-group time_icon col-md-6\">
                                    <select class=\"form-control\" id=\"Select2\">
                                        <option value=\"\" selected>Waktu</option>
                                        <option value=\"1\">8 AM TO 10AM</option>
                                        <option value=\"1\">10 AM TO 12PM</option>
                                        <option value=\"1\">12PM TO 2PM</option>
                                        <option value=\"1\">2PM TO 4PM</option>
                                        <option value=\"1\">4PM TO 6PM</option>
                                        <option value=\"1\">6PM TO 8PM</option>
                                        <option value=\"1\">4PM TO 10PM</option>
                                        <option value=\"1\">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class=\"form-group col-md-12\">
                                    <textarea class=\"form-control\" id=\"Textarea\" rows=\"4\"
                                        placeholder=\"Catatan\"></textarea>
                                </div>
                            </div>
                            <div class=\"regerv_btn\">
                                <a href=\"#\" class=\"btn_2\">Buat Janji</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"reservation_img\">
                        <img src=\"img/reservation.png\" alt=\"\" class=\"reservation_img_iner\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!--::blog_part start::-->
    <section class=\"blog_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-8\">
                    <div class=\"section_tittle text-center\">
                        <h2>Blog Kami</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"single-home-blog\">
                        <div class=\"card\">
                            <img src=\"img/blog/blog_2.png\" class=\"card-img-top\" alt=\"blog\">
                            <div class=\"card-body\">
                                <a href=\"blog.html\">
                                    <h5 class=\"card-title\">Pentingnya Menjaga Kesehatan gigi dan mulut </h5>
                                </a>
                                <ul>
                                    <li> <span class=\"ti-user\"></span>Jhon mike</li>
                                    <li> <span class=\"ti-bookmark\"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"single-home-blog\">
                        <div class=\"card\">
                            <img src=\"img/blog/blog_3.png\" class=\"card-img-top\" alt=\"blog\">
                            <div class=\"card-body\">
                                <a href=\"blog.html\">
                                    <h5 class=\"card-title\">sakit gigi seperti apa yang dianggap darurat dan perlu ke dokter gigi</h5>
                                </a>
                                <ul>
                                    <li> <span class=\"ti-user\"></span>Jhon mike</li>
                                    <li> <span class=\"ti-bookmark\"></span>Clinic, doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class=\"footer-area\">
        <div class=\"footer section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-between\">
                    <div class=\"col-xl-2 col-md-4 col-sm-6 single-footer-widget\">
                        <a href=\"#\" class=\"footer_logo\"> <img src=\"img/logo.png\" alt=\"#\"> </a>
                        <p>Selalu dengan pelayanan yang terbaik. </p>
                        <div class=\"social_logo\">
                            <a href=\"#\"><i class=\"ti-facebook\"></i></a>
                            <a href=\"#\"> <i class=\"ti-twitter\"></i> </a>
                            <a href=\"#\"><i class=\"ti-instagram\"></i></a>
                            <a href=\"#\"><i class=\"ti-skype\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-4 single-footer-widget\">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=\"#\">About us</a></li>
                            <li><a href=\"#\">Department</a></li>
                            <li><a href=\"#\"> Online payment</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Department</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-4 single-footer-widget\">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href=\"#\">In the community</a></li>
                            <li><a href=\"#\">IU health foundation</a></li>
                            <li><a href=\"#\">Family support </a></li>
                            <li><a href=\"#\">Business solution</a></li>
                            <li><a href=\"#\">Community clinic</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-2 col-sm-6 col-md-6 single-footer-widget\">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href=\"#\">Lights were season</a></li>
                            <li><a href=\"#\"> Their is let wherein</a></li>
                            <li><a href=\"#\">which given over</a></li>
                            <li><a href=\"#\">Without given She</a></li>
                            <li><a href=\"#\">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class=\"col-xl-3 col-sm-6 col-md-6 single-footer-widget\">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class=\"form-wrap\" id=\"mc_embed_signup\">
                            <form target=\"_blank\"
                                action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                method=\"get\" class=\"form-inline\">
                                <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Your Email Address\"
                                    onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address '\"
                                    required=\"\" type=\"email\">
                                <button class=\"click-btn btn btn-default text-uppercase\"> <i class=\"ti-angle-right\"></i>
                                </button>
                                <div style=\"position: absolute; left: -5000px;\">
                                    <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\"
                                        type=\"text\">
                                </div>

                                <div class=\"info\"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\octobercms/themes/medico/pages/index.htm", "");
    }
}
