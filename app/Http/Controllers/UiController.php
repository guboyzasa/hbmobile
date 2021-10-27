<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    //

    public function appsfilemanager()
    {
        return view('apps-filemanager');
    }
    public function authconfirmmail2()
    {
        return view('auth-confirm-mail-2');
    }
    public function authconfirmmail()
    {
        return view('auth-confirm-mail');
    }
    public function authemailverification2()
    {
        return view('auth-email-verification-2');
    }
    public function authemailverification()
    {
        return view('auth-email-verification');
    }
    public function authlockscreen2()
    {
        return view('auth-lock-screen-2');
    }
    public function authlockscreen()
    {
        return view('auth-lock-screen');
    }
    public function authlogin2()
    {
        return view('auth-login-2');
    }
    public function authlogin()
    {
        return view('auth-login');
    }
    public function authrecoverpw2()
    {
        return view('auth-recoverpw-2');
    }
    public function authrecoverpw()
    {
        return view('auth-recoverpw');
    }
    public function authregister2()
    {
        return view('auth-register-2');
    }
    public function authregister()
    {
        return view('auth-register');
    }
    public function authtwostepverification2()
    {
        return view('auth-two-step-verification-2');
    }
    public function authtwostepverification()
    {
        return view('auth-two-step-verification');
    }
    public function blogdetails()
    {
        return view('blog-details');
    }
    public function bloggrid()
    {
        return view('blog-grid');
    }
    public function bloglist()
    {
        return view('blog-list');
    }
    public function calendar()
    {
        return view('calendar');
    }
    public function chartsapex()
    {
        return view('charts-apex');
    }
    public function chartschartjs()
    {
        return view('charts-chartjs');
    }
    public function chartsechart()
    {
        return view('charts-echart');
    }
    public function chartsflot()
    {
        return view('charts-flot');
    }
    public function chartsknob()
    {
        return view('charts-knob');
    }
    public function chartssparkline()
    {
        return view('charts-sparkline');
    }
    public function chartstui()
    {
        return view('charts-tui');
    }
    public function chat()
    {
        return view('chat');
    }
    public function contactsgrid()
    {
        return view('contacts-grid');
    }
    public function contactslist()
    {
        return view('contacts-list');
    }
    public function contactsprofile()
    {
        return view('contacts-profile');
    }
    public function cryptobuysell()
    {
        return view('crypto-buy-sell');
    }
    public function cryptoexchange()
    {
        return view('crypto-exchange');
    }
    public function cryptoicolanding()
    {
        return view('crypto-ico-landing');
    }
    public function cryptokycapplication()
    {
        return view('crypto-kyc-application');
    }
      public function cryptolending()
    {
        return view('crypto-lending');
    }
    public function cryptoorders()
    {
        return view('crypto-orders');
    }
    public function cryptowallet()
    {
        return view('crypto-wallet');
    }
    public function dashboardblog()
    {
        return view('dashboard-blog');
    }
    public function dashboardcrypto()
    {
        return view('dashboard-crypto');
    }
    public function dashboardsaas()
    {
        return view('dashboard-saas');
    }
    public function ecommerceaddproduct()
    {
        return view('ecommerce-add-product');
    }
    public function ecommercecart()
    {
        return view('ecommerce-cart');
    }
    public function ecommercecheckout()
    {
        return view('ecommerce-checkout');
    }
    public function ecommercecustomers()
    {
        return view('ecommerce-customers');
    }
    public function ecommerceorders()
    {
        return view('ecommerce-orders');
    }
    public function ecommerceproductdetail()
    {
        return view('ecommerce-product-detail');
    }
    public function ecommerceproducts()
    {
        return view('ecommerce-products');
    }
    public function ecommerceshops()
    {
        return view('ecommerce-shops');
    }
    public function emailinbox()
    {
        return view('email-inbox');
    }
    public function emailread()
    {
        return view('email-read');
    }
    public function emailtemplatealert()
    {
        return view('email-template-alert');
    }
    public function emailtemplatebasic()
    {
        return view('email-template-basic');
    }
    public function emailtemplatebilling()
    {
        return view('email-template-billing');
    }
    public function formadvanced()
    {
        return view('form-advanced');
    }
    public function formeditors()
    {
        return view('form-editors');
    }
    public function formelements()
    {
        return view('form-elements');
    }
    public function formlayouts()
    {
        return view('form-layouts');
    }
    public function formmask()
    {
        return view('form-mask');
    }
    public function formrepeater()
    {
        return view('form-repeater');
    }
    public function formuploads()
    {
        return view('form-uploads');
    }
    public function formvalidation()
    {
        return view('form-validation');
    }
    public function formwizard()
    {
        return view('form-wizard');
    }
    public function formxeditable()
    {
        return view('form-xeditable');
    }
    public function home()
    {
        return view('home');
    }
    public function iconsboxicons()
    {
        return view('icons-boxicons');
    }
    public function iconsdripicons()
    {
        return view('icons-dripicons');
    }
    public function iconsfontawesome()
    {
        return view('icons-fontawesome');
    }
    public function iconsmaterialdesign()
    {
        return view('icons-materialdesign');
    }
    public function index()
    {
        return view('index');
    }
    public function invoicesdetail()
    {
        return view('invoices-detail');
    }
    public function invoiceslist()
    {
        return view('invoices-list');
    }
    public function layoutsboxed()
    {
        return view('layouts-boxed');
    }
    public function layoutslightsidebar()
    {
        return view('layouts-light-sidebar');
    }
    public function layoutsiconsidebar()
    {
        return view('layouts-icon-sidebar');
    }
    public function layoutspreloader()
    {
        return view('layouts-preloader');
    }
    public function layoutshorizontal()
    {
        return view('layouts-horizontal');
    }
    public function layoutshoritopbarlight()
    {
        return view('layouts-hori-topbar-light');
    }

    public function layoutscoloredsidebar()
    {
        return view('layouts-colored-sidebar');
    }
    public function layoutscompactsidebar()
    {
        return view('layouts-compact-sidebar');
    }
    public function layoutshoriboxedwidth()
    {
        return view('layouts-hori-boxed-width');
    }
    public function layoutshoricoloredheader()
    {
        return view('layouts-hori-colored-header');
    }
    public function layoutshoripreloader()
    {
        return view('layouts-hori-preloader');
    }
    public function layoutshoriscrollable()
    {
        return view('layouts-hori-scrollable');
    }
    public function layoutsscrollable()
    {
        return view('layouts-scrollable');
    }
    public function layoutsvertical()
    {
        return view('layouts-vertical');
    }
    public function mapsgoogle()
    {
        return view('maps-google');
    }
    public function mapsleaflet()
    {
        return view('maps-leaflet');
    }
    public function mapsvector()
    {
        return view('maps-vector');
    }
    public function pages404()
    {
        return view('pages-404');
    }
    public function pages500()
    {
        return view('pages-500');
    }
    public function pagescomingsoon()
    {
        return view('pages-comingsoon');
    }
    public function pagesfaqs()
    {
        return view('pages-faqs');
    }
    public function pagesmaintenance()
    {
        return view('pages-maintenance');
    }
    public function pagespricing()
    {
        return view('pages-pricing');
    }
    public function pagesstarter()
    {
        return view('pages-starter');
    }
    public function pagestimeline()
    {
        return view('pages-timeline');
    }
    public function projectscreate()
    {
        return view('projects-create');
    }
    public function projectsgrid()
    {
        return view('projects-grid');
    }
    public function projectslist()
    {
        return view('projects-list');
    }
    public function projectsoverview()
    {
        return view('projects-overview');
    }
    public function tablesbasic()
    {
        return view('tables-basic');
    }
    public function tablesdatatable()
    {
        return view('tables-datatable');
    }
    public function tableseditable()
    {
        return view('tables-editable');
    }
    public function tablesresponsive()
    {
        return view('tables-responsive');
    }
    public function taskscreate()
    {
        return view('tasks-create');
    }
    public function taskskanban()
    {
        return view('tasks-kanban');
    }
    public function taskslist()
    {
        return view('tasks-list');
    }
    public function uialerts()
    {
        return view('ui-alerts');
    }
    public function uibuttons()
    {
        return view('ui-buttons');
    }
    public function uicards()
    {
        return view('ui-cards');
    }
    public function uicarousel()
    {
        return view('ui-carousel');
    }
    public function uicolors()
    {
        return view('ui-colors');
    }
    public function uidropdowns()
    {
        return view('ui-dropdowns');
    }
    public function uigeneral()
    {
        return view('ui-general');
    }
    public function uigrid()
    {
        return view('ui-grid');
    }
    public function uiimages()
    {
        return view('ui-images');
    }
    public function uilightbox()
    {
        return view('ui-lightbox');
    }
    public function uimodals()
    {
        return view('ui-modals');
    }
    public function uinotifications()
    {
        return view('ui-notifications');
    }
    public function uioffcanvas()
    {
        return view('ui-offcanvas');
    }
    public function uiprogressbars()
    {
        return view('ui-progressbars');
    }
    public function uirangeslider()
    {
        return view('ui-rangeslider');
    }
    public function uirating()
    {
        return view('ui-rating');
    }
    public function uisessiontimeout()
    {
        return view('ui-session-timeout');
    }
    public function uisweetalert()
    {
        return view('ui-sweet-alert');
    }
    public function uitabsaccordions()
    {
        return view('ui-tabs-accordions');
    }
    public function uitypography()
    {
        return view('ui-typography');
    }
    public function uivideo()
    {
        return view('ui-video');
    }
    public function welcome()
    {
        return view('welcome');
    }


}
