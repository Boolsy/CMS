<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__29e84f14cf8ca80b3a85ccd7d80bf565eb10815d2f95bcb7005fac8e6cd1f5bc */
class __TwigTemplate_2b70b917906d5c5dd503502b75c75946d9248cdb65591cb4febf1d537fae31fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Prestashop/img/app_icon.png\" />

<title>Modes de paiement • Magic Pebble</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPayment';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'BE';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '435fa83186ee17175e52f50b2c182b92';
    var token_admin_orders = tokenAdminOrders = '97618e301bbe88660713a2c29042b2d3';
    var token_admin_customers = '10f309b38849ef57824b2b11ef302f69';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'f14deb921dee1ea9f4666879b09253bf';
    var currentIndex = 'index.php?controller=AdminPayment';
    var employee_token = '98fcf46f47a224150913da5b35cb8d87';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/Prestashop/admin8596uwm0q/index.php/improve/modules/catalog/recommended?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU';
    var admin_notification_get_link = '/Prestashop/admin8596uwm0q/i";
        // line 42
        echo "ndex.php/common/notifications?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU';
    var admin_notification_push_link = adminNotificationPushLink = '/Prestashop/admin8596uwm0q/index.php/common/notifications/ack?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/Prestashop/admin8596uwm0q/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/admin8596uwm0q/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/ps_checkout/views/css/adminAfterHeader.css?version=2.20.2\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/Prestashop\\/admin8596uwm0q\\/\";
var baseDir = \"\\/Prestashop\\/\";
var changeFormLanguageUrl = \"\\/Prestashop\\/admin8596uwm0q\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm7";
        // line 64
        echo "7AFVLFU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/Prestashop/admin8596uwm0q/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/admin8596uwm0q/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/admin8596uwm0q/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/gamification/views/js/gamific";
        // line 83
        echo "ation_bt.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/Prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/Prestashop/admin8596uwm0q/index.php/common/notifications?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/Prestashop\\/admin8596uwm0q\\/index.php?controller=AdminGamification&token=83b336e58954e1951ff179a0a685dfda\";
            var current_id_tab = 64;
        </script>

";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminpayment\"
  data-base-url=\"/Prestashop/admin8596uwm0q/index.php\"  data-token=\"6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminDashboard&amp;token=a666996fc3a82476107359452e0d0d00\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminOrders&amp;token=97618e301bbe88660713a2c29042b2d3\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3ef65d817735fe8fa24a12d6a891caf8\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php/improve/modules/manage?token=95b1f7a359352e430520530a07c50813\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d5a68db4d9a56ada099ff2faeb8cb052\"
                 data-item=\"Nouveau bon de r�";
        // line 141
        echo "�duction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php/sell/catalog/products/new?token=95b1f7a359352e430520530a07c50813\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Prestashop/admin8596uwm0q/index.php/sell/catalog/categories/new?token=95b1f7a359352e430520530a07c50813\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"82\"
        data-icon=\"icon-AdminParentPayment\"
        data-method=\"add\"
        data-url=\"index.php/improve/payment/payment_methods?-8At7u0s4nFy8bQU561Uifmm77AFVLFU\"
        data-post-link=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminQuickAccesses&token=9b8eff8f2beb1f213349e21a48d3a8ee\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modes de paiement - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminQuickAccesses&token=9b8eff8f2beb1f213349e21a48d3a8ee\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Prestashop/admin8596uwm0q/index.php?controller=AdminSearch&amp;token=b9ef14b547905c24bc7c653d5ad041bb\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input";
        // line 180
        echo "-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#";
        // line 195
        echo "\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notific";
        // line 248
        echo "ations\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a07b94d7ac5bb874311e817016105fca\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/";
        // line 296
        echo "html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/Prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Admin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/employees/1/edit?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class";
        // line 338
        echo "=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminLogin&amp;logout=1&amp;token=4003c6497a272f86c6cb56b0f9664c3c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/employees/toggle-navigation?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data";
        // line 365
        echo "-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminDashboard&amp;token=a666996fc3a82476107359452e0d0d00\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/orders/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/orders/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Commandes
                                </a>
                              </l";
        // line 401
        echo "i>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/orders/invoices/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/orders/credit-slips/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/orders/delivery-slips/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCarts&amp;token=a07b94d7a";
        // line 431
        echo "c5bb874311e817016105fca\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/catalog/products?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/catalog/products?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                             ";
        // line 464
        echo "   <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/catalog/categories?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/catalog/monitoring/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminAttributesGroups&amp;token=8ecceff3cf7b6b86958f845ecec38ff7\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/catalog/brands/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 494
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/attachments/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCartRules&amp;token=d5a68db4d9a56ada099ff2faeb8cb052\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/stocks/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/customers/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
 ";
        // line 524
        echo "                     <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/customers/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/addresses/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentC";
        // line 555
        echo "ustomerThreads\">
                    <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCustomerThreads&amp;token=f14deb921dee1ea9f4666879b09253bf\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCustomerThreads&amp;token=f14deb921dee1ea9f4666879b09253bf\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/sell/customer-service/order-messages/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                ";
        // line 585
        echo "              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminReturn&amp;token=d1d52ca4d9393926ad06520d02e9b48d\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/metrics/legacy/stats?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/metrics/legacy/stats?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Statistiques
                                </a>
                              </li>

                           ";
        // line 615
        echo "                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/metrics?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/modules/manage?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                       ";
        // line 652
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/modules/manage?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/addons/modules/catalog?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/design/themes/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                              ";
        // line 680
        echo "              </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/design/themes/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/addons/themes/catalog?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/design/mail_theme/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            ";
        // line 709
        echo "
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/design/cms-pages/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/design/modules/positions/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminImages&amp;token=86d4b53ecb39697d27612e9f2dfa96e2\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/modules/link-widget/list?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                 ";
        // line 739
        echo "                                             </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCarriers&amp;token=e062d2525dfdbce77a7ef3d5b386b47f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminCarriers&amp;token=e062d2525dfdbce77a7ef3d5b386b47f\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/shipping/preferences/?_token=6iV70iOJ63_-8At7";
        // line 768
        echo "u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/payment/payment_methods?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/payment/payment_methods?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
        ";
        // line 800
        echo "                      <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/payment/preferences?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/international/localization/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/international/localization/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Localisation
                                </a>
                              </li>

     ";
        // line 830
        echo "                                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/international/zones/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/international/taxes/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/international/translations/settings?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
";
        // line 861
        echo "                    <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminPsfacebookModule&amp;token=90bb8023027c3d0deb01164296efb962\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminPsfacebookModule&amp;token=90bb8023027c3d0deb01164296efb962\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=1e22e70656d9fdf34f44cf428996deab\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
     ";
        // line 891
        echo "                 
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/preferences/preferences?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/preferences/preferences?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85";
        // line 925
        echo "\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/order-preferences/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/product-preferences/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/customer-preferences/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/contacts/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                 ";
        // line 954
        echo "                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/shop/seo-urls/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminSearchConf&amp;token=dd71acaa352c01919972dda71a636e3f\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminGamification&amp;token=83b336e58954e1951ff179a0a685dfda\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/Prestashop/adm";
        // line 985
        echo "in8596uwm0q/index.php/configure/advanced/system-information/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/system-information/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/performance/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cl";
        // line 1014
        echo "ass=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/administration/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/emails/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/import/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/employees/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                               ";
        // line 1043
        echo "                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/sql-requests/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/logs/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/Prestashop/admin8596uwm0q/index.php/configure/advanced/webservice-keys/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/Prestashop/admi";
        // line 1071
        echo "n8596uwm0q/index.php/configure/advanced/feature-flags/?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paiement</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/Prestashop/admin8596uwm0q/index.php/improve/payment/payment_methods?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\" aria-current=\"page\">Modes de paiement</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modes de paiement          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/Prestashop/admin8596uwm0q/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.8%2526country%253Dfr/Aide?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-tar";
        // line 1132
        echo "get=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/Prestashop/admin8596uwm0q/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPayment%253Fversion%253D1.7.8.8%2526country%253Dfr/Aide?_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/Prestashop/admin8596uwm0q/index.php/modules/addons/modules/recommended?tabClassName=AdminPayment&_token=6iV70iOJ63_-8At7u0s4nFy8bQU561Uifmm77AFVLFU',
      shouldAttachRecommendedModulesAfterContent: 1,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        <div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card\">
                <h3 class=\"card-header\">
                    <i class=\"material-icons\">extension</i> Un module, tous les moyens de paiement.
                </h3>
                <div class=\"card-block\">
                    <div class=\"module-item-list\">
                        <div class=\"row module-item-wrapper-list py-3\">
                            <div class=\"col-12 col-sm-2 col-md-2 col-lg-3\">
                                <div class=\"img m-auto\">
                                </div>
                   ";
        // line 1184
        echo "         </div>
                            <div class=\"row col-12 col-sm-6 col-md-7 col-lg-7 pl-0\">
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-8 pl-0\">
                                    <ul class=\"text-muted\">
                                        <li class=\"mb-1\">Offrez le plus grand nombre de moyens de paiement : carte, PayPal, etc.</li>
                                        <li class=\"mb-1\">Bénéficiez de l'expertise et de tous les avantages de PayPal</li>
                                        <li>Donnez accès à tous les moyens de paiement locaux préférés de vos clients à travers le monde</li>
                                    </ul>
                                </div>
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 pl-0\">
                                    <label class=\"text-muted\">
                                        Inclus : 
                                    </label>
                                    <div>
                                        <img class=\"payment-icon\" src=\"/Prestashop/modules/ps_checkout/views/img/paypal.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/Prestashop/modules/ps_checkout/views/img/visa.jpg\" alt=\"\">
                                        <img class=\"payment-icon\" src=\"/Prestashop/modules/ps_checkout/views/img/mastercard.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto\">
                                <div class=\"text-xs-center\">
                                    <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminModules&amp;configure=ps_checkout&amp;token=b485252126588448901cf4500aaae9bd\" class=\"btn btn-primary-reverse btn-outline-primary light-button\">
                                        Configurer
 ";
        // line 1208
        echo "                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1226
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/Prestashop/admin8596uwm0q/index.php?controller=AdminDashboard&amp;token=a666996fc3a82476107359452e0d0d00\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Prestashop/admin8596uwm0q/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</di";
        // line 1274
        echo "v>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=Admin&amp;website=http%3A%2F%2Flocalhost%2FPrestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_l";
        // line 1314
        echo "ogin_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1334
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1226
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1334
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__29e84f14cf8ca80b3a85ccd7d80bf565eb10815d2f95bcb7005fac8e6cd1f5bc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1496 => 1334,  1479 => 1226,  1470 => 106,  1461 => 1334,  1439 => 1314,  1397 => 1274,  1343 => 1226,  1323 => 1208,  1297 => 1184,  1243 => 1132,  1180 => 1071,  1150 => 1043,  1119 => 1014,  1088 => 985,  1055 => 954,  1024 => 925,  988 => 891,  956 => 861,  923 => 830,  891 => 800,  857 => 768,  826 => 739,  794 => 709,  763 => 680,  733 => 652,  694 => 615,  662 => 585,  630 => 555,  597 => 524,  565 => 494,  533 => 464,  498 => 431,  466 => 401,  428 => 365,  399 => 338,  355 => 296,  305 => 248,  250 => 195,  233 => 180,  192 => 141,  152 => 106,  127 => 83,  106 => 64,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__29e84f14cf8ca80b3a85ccd7d80bf565eb10815d2f95bcb7005fac8e6cd1f5bc", "");
    }
}
