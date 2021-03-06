<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/coaching')) {
            // coaching
            if (rtrim($pathinfo, '/') === '/admin/coaching') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'coaching');
                }

                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::indexAction',  '_route' => 'coaching',);
            }

            // coaching_show
            if (preg_match('#^/admin/coaching/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coaching_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::showAction',));
            }

            // coaching_new
            if ($pathinfo === '/admin/coaching/new') {
                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::newAction',  '_route' => 'coaching_new',);
            }

            // coaching_create
            if ($pathinfo === '/admin/coaching/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_coaching_create;
                }

                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::createAction',  '_route' => 'coaching_create',);
            }
            not_coaching_create:

            // coaching_edit
            if (preg_match('#^/admin/coaching/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coaching_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::editAction',));
            }

            // coaching_update
            if (preg_match('#^/admin/coaching/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_coaching_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coaching_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::updateAction',));
            }
            not_coaching_update:

            // coaching_delete
            if (preg_match('#^/admin/coaching/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_coaching_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coaching_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::deleteAction',));
            }
            not_coaching_delete:

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contact');
                }

                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

            // contact_show
            if (preg_match('#^/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::showAction',));
            }

            // contact_new
            if ($pathinfo === '/contact/new') {
                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::newAction',  '_route' => 'contact_new',);
            }

            // contact_create
            if ($pathinfo === '/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contact_create;
                }

                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::createAction',  '_route' => 'contact_create',);
            }
            not_contact_create:

            // contact_edit
            if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::editAction',));
            }

            // contact_update
            if (preg_match('#^/contact/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_contact_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::updateAction',));
            }
            not_contact_update:

            // contact_delete
            if (preg_match('#^/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ContactController::deleteAction',));
            }
            not_contact_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/introduction')) {
                // introduction
                if (rtrim($pathinfo, '/') === '/admin/introduction') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'introduction');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::indexAction',  '_route' => 'introduction',);
                }

                // introduction_show
                if (preg_match('#^/admin/introduction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'introduction_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::showAction',));
                }

                // introduction_new
                if ($pathinfo === '/admin/introduction/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::newAction',  '_route' => 'introduction_new',);
                }

                // introduction_create
                if ($pathinfo === '/admin/introduction/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_introduction_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::createAction',  '_route' => 'introduction_create',);
                }
                not_introduction_create:

                // introduction_edit
                if (preg_match('#^/admin/introduction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'introduction_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::editAction',));
                }

                // introduction_update
                if (preg_match('#^/admin/introduction/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_introduction_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'introduction_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::updateAction',));
                }
                not_introduction_update:

                // introduction_delete
                if (preg_match('#^/admin/introduction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_introduction_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'introduction_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::deleteAction',));
                }
                not_introduction_delete:

            }

            if (0 === strpos($pathinfo, '/admin/media')) {
                // media
                if (rtrim($pathinfo, '/') === '/admin/media') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'media');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::indexAction',  '_route' => 'media',);
                }

                // media_show
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::showAction',));
                }

                // media_new
                if ($pathinfo === '/admin/media/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
                }

                // media_create
                if ($pathinfo === '/admin/media/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_media_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::createAction',  '_route' => 'media_create',);
                }
                not_media_create:

                // media_edit
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::editAction',));
                }

                // media_update
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_media_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::updateAction',));
                }
                not_media_update:

                // media_delete
                if (preg_match('#^/admin/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_media_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::deleteAction',));
                }
                not_media_delete:

            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // news
                if (rtrim($pathinfo, '/') === '/admin/news') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'news');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
                }

                // news_show
                if (preg_match('#^/admin/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::showAction',));
                }

                // news_new
                if ($pathinfo === '/admin/news/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::newAction',  '_route' => 'news_new',);
                }

                // news_create
                if ($pathinfo === '/admin/news/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_news_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::createAction',  '_route' => 'news_create',);
                }
                not_news_create:

                // news_edit
                if (preg_match('#^/admin/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::editAction',));
                }

                // news_update
                if (preg_match('#^/admin/news/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_news_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::updateAction',));
                }
                not_news_update:

                // news_delete
                if (preg_match('#^/admin/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_news_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::deleteAction',));
                }
                not_news_delete:

            }

            if (0 === strpos($pathinfo, '/admin/programme')) {
                // programme
                if (rtrim($pathinfo, '/') === '/admin/programme') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'programme');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::indexAction',  '_route' => 'programme',);
                }

                // programme_show
                if (preg_match('#^/admin/programme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::showAction',));
                }

                // programme_new
                if ($pathinfo === '/admin/programme/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::newAction',  '_route' => 'programme_new',);
                }

                // programme_create
                if ($pathinfo === '/admin/programme/create') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_programme_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::createAction',  '_route' => 'programme_create',);
                }
                not_programme_create:

                // programme_edit
                if (preg_match('#^/admin/programme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::editAction',));
                }

                // programme_update
                if (preg_match('#^/admin/programme/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_programme_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::updateAction',));
                }
                not_programme_update:

                // programme_delete
                if (preg_match('#^/admin/programme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_programme_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::deleteAction',));
                }
                not_programme_delete:

            }

            if (0 === strpos($pathinfo, '/admin/services')) {
                // services
                if (rtrim($pathinfo, '/') === '/admin/services') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'services');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::indexAction',  '_route' => 'services',);
                }

                // services_show
                if (preg_match('#^/admin/services/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::showAction',));
                }

                // services_new
                if ($pathinfo === '/admin/services/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::newAction',  '_route' => 'services_new',);
                }

                // services_create
                if ($pathinfo === '/admin/services/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_services_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::createAction',  '_route' => 'services_create',);
                }
                not_services_create:

                // services_edit
                if (preg_match('#^/admin/services/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::editAction',));
                }

                // services_update
                if (preg_match('#^/admin/services/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_services_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::updateAction',));
                }
                not_services_update:

                // services_delete
                if (preg_match('#^/admin/services/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_services_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::deleteAction',));
                }
                not_services_delete:

            }

            if (0 === strpos($pathinfo, '/admin/temoignages')) {
                // temoignages
                if (rtrim($pathinfo, '/') === '/admin/temoignages') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'temoignages');
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::indexAction',  '_route' => 'temoignages',);
                }

                // temoignages_show
                if (preg_match('#^/admin/temoignages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'temoignages_show')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::showAction',));
                }

                // temoignages_new
                if ($pathinfo === '/admin/temoignages/new') {
                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::newAction',  '_route' => 'temoignages_new',);
                }

                // temoignages_create
                if ($pathinfo === '/admin/temoignages/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_temoignages_create;
                    }

                    return array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::createAction',  '_route' => 'temoignages_create',);
                }
                not_temoignages_create:

                // temoignages_edit
                if (preg_match('#^/admin/temoignages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'temoignages_edit')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::editAction',));
                }

                // temoignages_update
                if (preg_match('#^/admin/temoignages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_temoignages_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'temoignages_update')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::updateAction',));
                }
                not_temoignages_update:

                // temoignages_delete
                if (preg_match('#^/admin/temoignages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_temoignages_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'temoignages_delete')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::deleteAction',));
                }
                not_temoignages_delete:

            }

        }

        // programme_email
        if ($pathinfo === '/sendemail') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::sendemailAction',  '_route' => 'programme_email',);
        }

        // programme_index_front
        if ($pathinfo === '/programme') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::indexfrontAction',  '_route' => 'programme_index_front',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // introduction_index_front
            if ($pathinfo === '/apropos') {
                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\IntroductionController::indexfrontAction',  '_route' => 'introduction_index_front',);
            }

            // news_index_front
            if ($pathinfo === '/actualite') {
                return array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::indexfrontAction',  '_route' => 'news_index_front',);
            }

        }

        // formation_index_front
        if ($pathinfo === '/formation') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::indexfrontAction',  '_route' => 'formation_index_front',);
        }

        // services_index_front
        if ($pathinfo === '/coaching') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\CoachingController::indexfrontAction',  '_route' => 'services_index_front',);
        }

        // temoignages_index_front
        if ($pathinfo === '/temoignages') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\TemoignagesController::indexfrontAction',  '_route' => 'temoignages_index_front',);
        }

        // media_index_front
        if ($pathinfo === '/portfolio') {
            return array (  '_controller' => 'Site\\NedraBundle\\Controller\\MediaController::indexfrontAction',  '_route' => 'media_index_front',);
        }

        // news_show_front
        if (preg_match('#^/(?P<id>[^/]++)/showNews$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show_front')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\NewsController::showNewsAction',));
        }

        // programme_show_front
        if (preg_match('#^/(?P<id>[^/]++)/showProgramme$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'programme_show_front')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ProgrammeController::showProgrammeAction',));
        }

        // formation_show_front
        if (preg_match('#^/(?P<id>[^/]++)/showFormation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show_front')), array (  '_controller' => 'Site\\NedraBundle\\Controller\\ServicesController::showFormationAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
