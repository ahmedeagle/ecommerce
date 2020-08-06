<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Language::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.languages')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.languages.create')}}" data-i18n="nav.dash.crypto">أضافة
                            لغة جديده </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاقسام الرئيسيه </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\MainCategory::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.maincategories')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">أضافة
                             قسم جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المتاجر  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Vendor::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.vendors')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.vendors.create')}}" data-i18n="nav.dash.crypto">أضافة
                            متجر  </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الطلاب  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                            طالب </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">تذاكر المراسلات   </span>
                    <span
                        class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href=""
                                          data-i18n="nav.dash.ecommerce"> تذاكر الطلاب </a>
                    </li>
                </ul>
            </li>


            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
                                                                                    data-i18n="nav.templates.main">Templates</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">Vertical</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../vertical-menu-template"
                                   data-i18n="nav.templates.vert.classic_menu">Classic Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-modern-menu-template">Modern Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-compact-menu-template"
                                   data-i18n="nav.templates.vert.compact_menu">Compact Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-content-menu-template"
                                   data-i18n="nav.templates.vert.content_menu">Content Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-overlay-menu-template"
                                   data-i18n="nav.templates.vert.overlay_menu">Overlay Menu</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../horizontal-menu-template"
                                   data-i18n="nav.templates.horz.classic">Classic</a>
                            </li>
                            <li><a class="menu-item" href="../horizontal-menu-template-nav"
                                   data-i18n="nav.templates.horz.top_icon">Full Width</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">Layouts</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-columns"></i><span class="menu-title"
                                                                                 data-i18n="nav.page_layouts.main">Page layouts</span><span
                        class="badge badge badge-pill badge-danger float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1
                            column</a>
                    </li>
                    <li><a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2
                            columns</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Content Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-left-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.left_sidebar">Left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Left sticky sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.right_sidebar">Right sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar">Right sticky sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns_detached.main">Content Det.
                            Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="layout-content-detached-left-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar">Detached left
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-left-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar">Detached
                                    sticky left sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar">Detached right
                                    sidebar</a>
                            </li>
                            <li><a class="menu-item" href="layout-content-detached-right-sticky-sidebar.html"
                                   data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar">Detached
                                    sticky right sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar">Fixed
                            navbar</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navigation.html"
                           data-i18n="nav.page_layouts.fixed_navigation">Fixed navigation</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navbar-navigation.html"
                           data-i18n="nav.page_layouts.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
                    </li>
                    <li><a class="menu-item" href="layout-fixed-navbar-footer.html"
                           data-i18n="nav.page_layouts.fixed_navbar_footer">Fixed navbar &amp; footer</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout">Fixed
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout">Boxed
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-static.html" data-i18n="nav.page_layouts.static_layout">Static
                            layout</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="layout-light.html" data-i18n="nav.page_layouts.light_layout">Light
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout">Dark
                            layout</a>
                    </li>
                    <li><a class="menu-item" href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout">Semi
                            dark layout</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title"
                                                                                 data-i18n="nav.navbars.main">Navbars</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="navbar-light.html" data-i18n="nav.navbars.nav_light">Navbar Light</a>
                    </li>
                    <li><a class="menu-item" href="navbar-dark.html" data-i18n="nav.navbars.nav_dark">Navbar Dark</a>
                    </li>
                    <li><a class="menu-item" href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi">Navbar Semi
                            Dark</a>
                    </li>
                    <li><a class="menu-item" href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center">Brand
                            Center</a>
                    </li>
                    <li><a class="menu-item" href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top">Fixed
                            Top</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.navbars.nav_hide_on_scroll.main">Hide on Scroll</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="navbar-hide-on-scroll-top.html"
                                   data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top">Hide on Scroll
                                    Top</a>
                            </li>
                            <li><a class="menu-item" href="navbar-hide-on-scroll-bottom.html"
                                   data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom">Hide on Scroll
                                    Bottom</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Navbar
                            Components</a>
                    </li>
                    <li><a class="menu-item" href="navbar-styling.html" data-i18n="nav.navbars.nav_styling">Navbar
                            Styling</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-arrows-v"></i><span class="menu-title"
                                                                                  data-i18n="nav.vertical_nav.main">Vertical Nav</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main">Navigation
                            Types</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../vertical-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_menu">Vertical
                                    Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-modern-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_modern-menu">Vertical
                                    Modern Menu</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-overlay-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_overlay">Vertical
                                    Overlay</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-compact-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_compact">Vertical
                                    Compact</a>
                            </li>
                            <li><a class="menu-item" href="../vertical-content-menu-template"
                                   data-i18n="nav.vertical_nav.vertical_navigation_types.vertical_content">Vertical
                                    Content</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-fixed.html"
                           data-i18n="nav.vertical_nav.vertical_nav_fixed">Fixed Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-static.html"
                           data-i18n="nav.vertical_nav.vertical_nav_static">Static Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-light.html"
                           data-i18n="nav.vertical_nav.vertical_nav_light">Navigation Light</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-dark.html"
                           data-i18n="nav.vertical_nav.vertical_nav_dark">Navigation Dark</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-accordion.html"
                           data-i18n="nav.vertical_nav.vertical_nav_accordion">Accordion Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-collapsible.html"
                           data-i18n="nav.vertical_nav.vertical_nav_collapsible">Collapsible Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-flipped.html"
                           data-i18n="nav.vertical_nav.vertical_nav_flipped">Flipped Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-native-scroll.html"
                           data-i18n="nav.vertical_nav.vertical_nav_native_scroll">Native scroll</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-right-side-icon.html"
                           data-i18n="nav.vertical_nav.vertical_nav_right_side_icon">Right side icons</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-bordered.html"
                           data-i18n="nav.vertical_nav.vertical_nav_bordered">Bordered Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-disabled-link.html"
                           data-i18n="nav.vertical_nav.vertical_nav_disabled_link">Disabled Navigation</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-styling.html"
                           data-i18n="nav.vertical_nav.vertical_nav_styling">Navigation Styling</a>
                    </li>
                    <li><a class="menu-item" href="vertical-nav-tags-pills.html"
                           data-i18n="nav.vertical_nav.vertical_nav_tags_pills">Tags &amp; Pills</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
                                                                                  data-i18n="nav.horz_nav.main">Horizontal Nav</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main">Navigation
                            Types</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="../horizontal-menu-template"
                                   data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation">Left
                                    Icon Navigation</a>
                            </li>
                            <li><a class="menu-item" href="../horizontal-menu-template-nav"
                                   data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_menu_template_nav">Top
                                    Icon Navigation</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                                                                                data-i18n="nav.page_headers.main">Page Headers</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="headers-breadcrumbs-basic.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_basic">Breadcrumbs basic</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-top.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_top">Breadcrumbs top</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-bottom.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_bottom">Breadcrumbs bottom</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-top-with-description.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description">Breadcrumbs top with
                            desc</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-button.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_button">Breadcrumbs with button</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-round-button.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button">Breadcrumbs with button
                            2</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-button-group.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group">Breadcrumbs with
                            buttons</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-description.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description">Breadcrumbs
                            with desc</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-search.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search">Breadcrumbs with
                            search</a>
                    </li>
                    <li><a class="menu-item" href="headers-breadcrumbs-with-stats.html"
                           data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats">Breadcrumbs with
                            stats</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title"
                                                                                  data-i18n="nav.footers.main">Footers</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="footer-light.html" data-i18n="nav.footers.footer_light">Footer
                            Light</a>
                    </li>
                    <li><a class="menu-item" href="footer-dark.html" data-i18n="nav.footers.footer_dark">Footer Dark</a>
                    </li>
                    <li><a class="menu-item" href="footer-transparent.html" data-i18n="nav.footers.footer_transparent">Footer
                            Transparent</a>
                    </li>
                    <li><a class="menu-item" href="footer-fixed.html" data-i18n="nav.footers.footer_fixed">Footer
                            Fixed</a>
                    </li>
                    <li><a class="menu-item" href="footer-components.html" data-i18n="nav.footers.footer_components">Footer
                            Components</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.general">General</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="General"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-paint-brush"></i><span class="menu-title"
                                                                                     data-i18n="nav.color_palette.main">Color Palette</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="color-palette-primary.html"
                           data-i18n="nav.color_palette.color_palette_primary">Primary palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-danger.html"
                           data-i18n="nav.color_palette.color_palette_danger">Danger palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-success.html"
                           data-i18n="nav.color_palette.color_palette_success">Success palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-warning.html"
                           data-i18n="nav.color_palette.color_palette_warning">Warning palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-info.html"
                           data-i18n="nav.color_palette.color_palette_info">Info palette</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="color-palette-red.html"
                           data-i18n="nav.color_palette.color_palette_red">Red palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-pink.html"
                           data-i18n="nav.color_palette.color_palette_pink">Pink palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-purple.html"
                           data-i18n="nav.color_palette.color_palette_purple">Purple palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-blue.html"
                           data-i18n="nav.color_palette.color_palette_blue">Blue palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-cyan.html"
                           data-i18n="nav.color_palette.color_palette_cyan">Cyan palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-teal.html"
                           data-i18n="nav.color_palette.color_palette_teal">Teal palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-yellow.html"
                           data-i18n="nav.color_palette.color_palette_yellow">Yellow palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-amber.html"
                           data-i18n="nav.color_palette.color_palette_amber">Amber palette</a>
                    </li>
                    <li><a class="menu-item" href="color-palette-blue-grey.html"
                           data-i18n="nav.color_palette.color_palette_blue_grey">Blue Grey palette</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-puzzle-piece"></i><span class="menu-title"
                                                                                      data-i18n="nav.starter_kit.main">Starter kit</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-1-column.html"
                           data-i18n="nav.starter_kit.1_column">1 column</a>
                    </li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-2-columns.html"
                           data-i18n="nav.starter_kit.2_columns">2 columns</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.starter_kit.3_columns_detached.main">Content Det.
                            Sidebar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item"
                                   href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sidebar.html"
                                   data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_left_sidebar">Detached
                                    left sidebar</a>
                            </li>
                            <li><a class="menu-item"
                                   href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-left-sticky-sidebar.html"
                                   data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_left_sidebar">Detached
                                    sticky left sidebar</a>
                            </li>
                            <li><a class="menu-item"
                                   href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sidebar.html"
                                   data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_right_sidebar">Detached
                                    right sidebar</a>
                            </li>
                            <li><a class="menu-item"
                                   href="../../../starter-kit/rtl/vertical-menu-template/layout-content-detached-right-sticky-sidebar.html"
                                   data-i18n="nav.starter_kit.3_columns_detached.3_columns_detached_sticky_right_sidebar">Detached
                                    sticky right sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar.html"
                           data-i18n="nav.starter_kit.fixed_navbar">Fixed navbar</a>
                    </li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navigation.html"
                           data-i18n="nav.starter_kit.fixed_navigation">Fixed navigation</a>
                    </li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-navigation.html"
                           data-i18n="nav.starter_kit.fixed_navbar_navigation">Fixed navbar &amp; navigation</a>
                    </li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed-navbar-footer.html"
                           data-i18n="nav.starter_kit.fixed_navbar_footer">Fixed navbar &amp; footer</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-fixed.html"
                           data-i18n="nav.starter_kit.fixed_layout">Fixed layout</a>
                    </li>
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-boxed.html"
                           data-i18n="nav.starter_kit.boxed_layout">Boxed layout</a>
                    </li>
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-static.html"
                           data-i18n="nav.starter_kit.static_layout">Static layout</a>
                    </li>
                    <li class="navigation-divider"></li>
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-light.html"
                           data-i18n="nav.starter_kit.light_layout">Light layout</a>
                    </li>
                    <li><a class="menu-item" href="../../../starter-kit/rtl/vertical-menu-template/layout-dark.html"
                           data-i18n="nav.starter_kit.dark_layout">Dark layout</a>
                    </li>
                    <li><a class="menu-item"
                           href="../../../starter-kit/rtl/vertical-menu-template/layout-semi-dark.html"
                           data-i18n="nav.starter_kit.semi_dark_layout">Semi dark layout</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="changelog.html"><i class="la la-copy"></i><span class="menu-title"
                                                                                           data-i18n="nav.changelog.main">Changelog</span><span
                        class="badge badge badge-pill badge-warning float-right">1.0</span></a>
            </li>
            <li class="disabled nav-item"><a href="#"><i class="la la-eye-slash"></i><span class="menu-title"
                                                                                           data-i18n="nav.disabled_menu.main">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-android"></i><span class="menu-title"
                                                                                 data-i18n="nav.menu_levels.main">Menu levels</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level">Second level</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.main">Second level
                            child</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.menu_levels.second_level_child.third_level">Third level</a>
                            </li>
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.menu_levels.second_level_child.third_level_child.main">Third level
                                    child</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="#"
                                           data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1">Fourth
                                            level</a>
                                    </li>
                                    <li><a class="menu-item" href="#"
                                           data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2">Fourth
                                            level</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.pages">Pages</span><i class="la la-ellipsis-h ft-minus"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    data-original-title="Pages"></i>
            </li>
            <li class=" nav-item"><a href="email-application.html"><i class="la la-envelope"></i><span
                        class="menu-title" data-i18n="">Email Application</span></a>
            </li>
            <li class=" nav-item"><a href="chat-application.html"><i class="la la-comments"></i><span class="menu-title"
                                                                                                      data-i18n="">Chat Application</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title"
                                                                                   data-i18n="nav.project.main">Project</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="project-summary.html" data-i18n="nav.project.project_summary">Project
                            Summary</a>
                    </li>
                    <li><a class="menu-item" href="project-tasks.html" data-i18n="nav.project.project_tasks">Project
                            Task</a>
                    </li>
                    <li><a class="menu-item" href="project-bugs.html" data-i18n="nav.project.project_bugs">Project
                            Bugs</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="scrumboard.html"><i class="la la-check-square"></i><span class="menu-title"
                                                                                                    data-i18n="nav.scrumboard.main">Scrumboard</span><span
                        class="badge badge badge-info float-right">Update</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title"
                                                                                   data-i18n="nav.invoice.main">Invoice</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="invoice-summary.html" data-i18n="nav.invoice.invoice_summary">Invoice
                            Summary</a>
                    </li>
                    <li><a class="menu-item" href="invoice-template.html" data-i18n="nav.invoice.invoice_template">Invoice
                            Template</a>
                    </li>
                    <li><a class="menu-item" href="invoice-list.html" data-i18n="nav.invoice.invoice_list">Invoice
                            List</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-film"></i><span class="menu-title"
                                                                              data-i18n="nav.timelines.main">Timelines</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="timeline-center.html" data-i18n="nav.timelines.timeline_center">Timelines
                            Center</a>
                    </li>
                    <li><a class="menu-item" href="timeline-left.html" data-i18n="nav.timelines.timeline_left">Timelines
                            Left</a>
                    </li>
                    <li><a class="menu-item" href="timeline-right.html" data-i18n="nav.timelines.timeline_right">Timelines
                            Right</a>
                    </li>
                    <li><a class="menu-item" href="timeline-horizontal.html"
                           data-i18n="nav.timelines.timeline_horizontal">Timelines Horizontal</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title"
                                                                              data-i18n="nav.users.main">Users</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="user-profile.html" data-i18n="nav.users.user_profile">Users
                            Profile</a>
                    </li>
                    <li><a class="menu-item" href="user-cards.html" data-i18n="nav.users.user_cards">Users Cards</a>
                    </li>
                    <li><a class="menu-item" href="users-contacts.html" data-i18n="nav.users.users_contacts">Users
                            List</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-image"></i><span class="menu-title"
                                                                               data-i18n="nav.gallery_pages.main">Gallery</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid">Gallery
                            Grid</a>
                    </li>
                    <li><a class="menu-item" href="gallery-grid-with-desc.html"
                           data-i18n="nav.gallery_pages.gallery_grid_with_desc">Gallery Grid with Desc</a>
                    </li>
                    <li><a class="menu-item" href="gallery-masonry.html" data-i18n="nav.gallery_pages.gallery_masonry">Masonry
                            Gallery</a>
                    </li>
                    <li><a class="menu-item" href="gallery-masonry-with-desc.html"
                           data-i18n="nav.gallery_pages.gallery_masonry_with_desc">Masonry Gallery with Desc</a>
                    </li>
                    <li><a class="menu-item" href="gallery-hover-effects.html"
                           data-i18n="nav.gallery_pages.gallery_hover_effects">Hover Effects</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-search"></i><span class="menu-title"
                                                                                data-i18n="nav.search_pages.main">Search</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="search-page.html" data-i18n="nav.search_pages.search_page">Search
                            Page</a>
                    </li>
                    <li><a class="menu-item" href="search-website.html" data-i18n="nav.search_pages.search_website">Search
                            Website</a>
                    </li>
                    <li><a class="menu-item" href="search-images.html" data-i18n="nav.search_pages.search_images">Search
                            Images</a>
                    </li>
                    <li><a class="menu-item" href="search-videos.html" data-i18n="nav.search_pages.search_videos">Search
                            Videos</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title"
                                                                                data-i18n="nav.login_register_pages.main">Authentication</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="login-simple.html" data-i18n="nav.login_register_pages.login_simple">Login
                            Simple</a>
                    </li>
                    <li><a class="menu-item" href="login-with-bg.html"
                           data-i18n="nav.login_register_pages.login_with_bg">Login with Bg</a>
                    </li>
                    <li><a class="menu-item" href="login-with-bg-image.html"
                           data-i18n="nav.login_register_pages.login_with_bg_image">Login with Bg Image</a>
                    </li>
                    <li><a class="menu-item" href="login-with-navbar.html"
                           data-i18n="nav.login_register_pages.login_with_navbar">Login with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="login-advanced.html"
                           data-i18n="nav.login_register_pages.login_advanced">Login Advanced</a>
                    </li>
                    <li><a class="menu-item" href="register-simple.html"
                           data-i18n="nav.login_register_pages.register_simple">Register Simple</a>
                    </li>
                    <li><a class="menu-item" href="register-with-bg.html"
                           data-i18n="nav.login_register_pages.register_with_bg">Register with Bg</a>
                    </li>
                    <li><a class="menu-item" href="register-with-bg-image.html"
                           data-i18n="nav.login_register_pages.register_with_bg_image">Register with Bg Image</a>
                    </li>
                    <li><a class="menu-item" href="register-with-navbar.html"
                           data-i18n="nav.login_register_pages.register_with_navbar">Register with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="register-advanced.html"
                           data-i18n="nav.login_register_pages.register_advanced">Register Advanced</a>
                    </li>
                    <li><a class="menu-item" href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user">Unlock
                            User</a>
                    </li>
                    <li><a class="menu-item" href="recover-password.html"
                           data-i18n="nav.login_register_pages.recover_password">recover-password</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-warning"></i><span class="menu-title"
                                                                                 data-i18n="nav.error_pages.main">Error</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="error-400.html" data-i18n="nav.error_pages.error_400">Error 400</a>
                    </li>
                    <li><a class="menu-item" href="error-400-with-navbar.html"
                           data-i18n="nav.error_pages.error_400_with_navbar">Error 400 with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="error-401.html" data-i18n="nav.error_pages.error_401">Error 401</a>
                    </li>
                    <li><a class="menu-item" href="error-401-with-navbar.html"
                           data-i18n="nav.error_pages.error_401_with_navbar">Error 401 with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="error-403.html" data-i18n="nav.error_pages.error_403">Error 403</a>
                    </li>
                    <li><a class="menu-item" href="error-403-with-navbar.html"
                           data-i18n="nav.error_pages.error_403_with_navbar">Error 403 with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="error-404.html" data-i18n="nav.error_pages.error_404">Error 404</a>
                    </li>
                    <li><a class="menu-item" href="error-404-with-navbar.html"
                           data-i18n="nav.error_pages.error_404_with_navbar">Error 404 with Navbar</a>
                    </li>
                    <li><a class="menu-item" href="error-500.html" data-i18n="nav.error_pages.error_500">Error 500</a>
                    </li>
                    <li><a class="menu-item" href="error-500-with-navbar.html"
                           data-i18n="nav.error_pages.error_500_with_navbar">Error 500 with Navbar</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title"
                                                                                   data-i18n="nav.other_pages.main">Others</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.other_pages.coming_soon.main">Coming Soon</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="coming-soon-flat.html"
                                   data-i18n="nav.other_pages.coming_soon.coming_soon_flat">Flat</a>
                            </li>
                            <li><a class="menu-item" href="coming-soon-bg-image.html"
                                   data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image">Bg image</a>
                            </li>
                            <li><a class="menu-item" href="coming-soon-bg-video.html"
                                   data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video">Bg video</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="under-maintenance.html"
                           data-i18n="nav.other_pages.under_maintenance">Maintenance</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.ui">User Interface</span><i class="la la-ellipsis-h ft-minus"
                                                                          data-toggle="tooltip"
                                                                          data-placement="right"
                                                                          data-original-title="User Interface"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-tablet"></i><span class="menu-title"
                                                                                data-i18n="nav.cards.main">Cards</span><span
                        class="badge badge badge-success float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="card-bootstrap.html"
                           data-i18n="nav.cards.card_bootstrap">Bootstrap</a>
                    </li>
                    <li><a class="menu-item" href="card-headings.html" data-i18n="nav.cards.card_headings">Headings</a>
                    </li>
                    <li><a class="menu-item" href="card-options.html" data-i18n="nav.cards.card_options">Options</a>
                    </li>
                    <li><a class="menu-item" href="card-actions.html" data-i18n="nav.cards.card_actions">Action</a>
                    </li>
                    <li><a class="menu-item" href="card-draggable.html"
                           data-i18n="nav.cards.card_draggable">Draggable</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-fire"></i><span class="menu-title"
                                                                              data-i18n="nav.advance_cards.main">Advance Cards</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="card-statistics.html" data-i18n="nav.cards.card_statistics">Statistics</a>
                    </li>
                    <li><a class="menu-item" href="card-weather.html" data-i18n="nav.cards.card_weather">Weather</a>
                    </li>
                    <li><a class="menu-item" href="card-charts.html" data-i18n="nav.cards.card_charts">Charts</a>
                    </li>
                    <li><a class="menu-item" href="card-interactive.html" data-i18n="nav.cards.card_interactive">Interactive</a>
                    </li>
                    <li><a class="menu-item" href="card-maps.html" data-i18n="nav.cards.card_maps">Maps</a>
                    </li>
                    <li><a class="menu-item" href="card-social.html" data-i18n="nav.cards.card_social">Social</a>
                    </li>
                    <li><a class="menu-item" href="card-ecommerce.html"
                           data-i18n="nav.cards.card_ecommerce">E-Commerce</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-compass"></i><span class="menu-title"
                                                                                 data-i18n="nav.content.main">Content</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="content-grid.html" data-i18n="nav.content.content_grid">Grid</a>
                    </li>
                    <li><a class="menu-item" href="content-typography.html" data-i18n="nav.content.content_typography">Typography</a>
                    </li>
                    <li><a class="menu-item" href="content-text-utilities.html"
                           data-i18n="nav.content.content_text_utilities">Text utilities</a>
                    </li>
                    <li><a class="menu-item" href="content-syntax-highlighter.html"
                           data-i18n="nav.content.content_syntax_highlighter">Syntax highlighter</a>
                    </li>
                    <li><a class="menu-item" href="content-helper-classes.html"
                           data-i18n="nav.content.content_helper_classes">Helper classes</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title"
                                                                                data-i18n="nav.components.main">Components</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="component-alerts.html" data-i18n="nav.components.component_alerts">Alerts</a>
                    </li>
                    <li><a class="menu-item" href="component-callout.html" data-i18n="nav.components.component_callout">Callout</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.components.components_buttons.main">Buttons</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="component-buttons-basic.html"
                                   data-i18n="nav.components.components_buttons.component_buttons_basic">Basic
                                    Buttons</a>
                            </li>
                            <li><a class="menu-item" href="component-buttons-extended.html"
                                   data-i18n="nav.components.components_buttons.component_buttons_extended">Extended
                                    Buttons</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="component-carousel.html"
                           data-i18n="nav.components.component_carousel">Carousel</a>
                    </li>
                    <li><a class="menu-item" href="component-collapse.html"
                           data-i18n="nav.components.component_collapse">Collapse</a>
                    </li>
                    <li><a class="menu-item" href="component-dropdowns.html"
                           data-i18n="nav.components.component_dropdowns">Dropdowns</a>
                    </li>
                    <li><a class="menu-item" href="component-list-group.html"
                           data-i18n="nav.components.component_list_group">List Group</a>
                    </li>
                    <li><a class="menu-item" href="component-modals.html" data-i18n="nav.components.component_modals">Modals</a>
                    </li>
                    <li><a class="menu-item" href="component-pagination.html"
                           data-i18n="nav.components.component_pagination">Pagination</a>
                    </li>
                    <li><a class="menu-item" href="component-navs-component.html"
                           data-i18n="nav.components.component_navs_component">Navs Component</a>
                    </li>
                    <li><a class="menu-item" href="component-tabs-component.html"
                           data-i18n="nav.components.component_tabs_component">Tabs Component</a>
                    </li>
                    <li><a class="menu-item" href="component-pills-component.html"
                           data-i18n="nav.components.component_pills_component">Pills Component</a>
                    </li>
                    <li><a class="menu-item" href="component-tooltips.html"
                           data-i18n="nav.components.component_tooltips">Tooltips</a>
                    </li>
                    <li><a class="menu-item" href="component-popovers.html"
                           data-i18n="nav.components.component_popovers">Popovers</a>
                    </li>
                    <li><a class="menu-item" href="component-badges.html" data-i18n="nav.components.component_badges">Badges</a>
                    </li>
                    <li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>
                    </li>
                    <li><a class="menu-item" href="component-progress.html"
                           data-i18n="nav.components.component_progress">Progress</a>
                    </li>
                    <li><a class="menu-item" href="component-media-objects.html"
                           data-i18n="nav.components.component_media_objects">Media Objects</a>
                    </li>
                    <li><a class="menu-item" href="component-scrollable.html"
                           data-i18n="nav.components.component_scrollable">Scrollable</a>
                    </li>
                    <li><a class="menu-item" href="component-spinners.html"
                           data-i18n="nav.components.component_spinners">Spinners</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-diamond"></i><span class="menu-title"
                                                                                 data-i18n="nav.extra_components.main">Extra Components</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="ex-component-sweet-alerts.html"
                           data-i18n="nav.extra_components.ex_component_sweet_alerts">Sweet Alerts</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-tree-views.html"
                           data-i18n="nav.extra_components.ex_component_tree_views">Tree Views</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-toastr.html"
                           data-i18n="nav.extra_components.ex_component_toastr">Toastr</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-ratings.html"
                           data-i18n="nav.extra_components.ex_component_ratings">Ratings</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-noui-slider.html"
                           data-i18n="nav.extra_components.ex_component_noui_slider">NoUI Slider</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-date-time-dropper.html"
                           data-i18n="nav.extra_components.ex_component_date_time_dropper">Date Time Dropper</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-lists.html"
                           data-i18n="nav.extra_components.ex_component_lists">Lists</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-toolbar.html"
                           data-i18n="nav.extra_components.ex_component_toolbar">Toolbar</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-knob.html"
                           data-i18n="nav.extra_components.ex_component_knob">Knob</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-long-press.html"
                           data-i18n="nav.extra_components.ex_component_long_press">Long Press</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-offline.html"
                           data-i18n="nav.extra_components.ex_component_offline">Offline</a>
                    </li>
                    <li><a class="menu-item" href="ex-component-zoom.html"
                           data-i18n="nav.extra_components.ex_component_zoom">Zoom</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-eye"></i><span class="menu-title"
                                                                             data-i18n="nav.icons.main">Icons</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="icons-feather.html" data-i18n="nav.icons.icons_feather">Feather</a>
                    </li>
                    <li><a class="menu-item" href="icons-line-awesome.html" data-i18n="nav.icons.icons_line_awesome">Line
                            Awesome</a>
                    </li>
                    <li><a class="menu-item" href="icons-meteocons.html"
                           data-i18n="nav.icons.icons_meteocons">Meteocons</a>
                    </li>
                    <li><a class="menu-item" href="icons-simple-line-icons.html" data-i18n="nav.icons.icons_linecons">Simple
                            Line Icons</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="animation.html"><i class="la la-spinner spinner"></i><span class="menu-title"
                                                                                                      data-i18n="nav.animation.main">Animation</span></a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.forms">Forms</span><i class="la la-ellipsis-h ft-minus"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    data-original-title="Forms"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-terminal"></i><span class="menu-title"
                                                                                  data-i18n="nav.form_elements.main">Form Elements</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="form-inputs.html" data-i18n="nav.form_elements.form_inputs">Form
                            Inputs</a>
                    </li>
                    <li><a class="menu-item" href="form-input-groups.html"
                           data-i18n="nav.form_elements.form_input_groups">Input Groups</a>
                    </li>
                    <li><a class="menu-item" href="form-input-grid.html" data-i18n="nav.form_elements.form_input_grid">Input
                            Grid</a>
                    </li>
                    <li><a class="menu-item" href="form-extended-inputs.html"
                           data-i18n="nav.form_elements.form_extended_inputs">Extended Inputs</a>
                    </li>
                    <li><a class="menu-item" href="form-checkboxes-radios.html"
                           data-i18n="nav.form_elements.form_checkboxes_radios">Checkboxes &amp; Radios</a>
                    </li>
                    <li><a class="menu-item" href="form-switch.html"
                           data-i18n="nav.form_elements.form_switch">Switch</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.form_elements.form_select.main">Select</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="form-select2.html"
                                   data-i18n="nav.form_elements.form_select.form_select2">Select2</a>
                            </li>
                            <li><a class="menu-item" href="form-selectize.html"
                                   data-i18n="nav.form_elements.form_select.form_selectize">Selectize</a>
                            </li>
                            <li><a class="menu-item" href="form-selectivity.html"
                                   data-i18n="nav.form_elements.form_select.form_selectivity">Selectivity</a>
                            </li>
                            <li><a class="menu-item" href="form-select-box-it.html"
                                   data-i18n="nav.form_elements.form_select.form_select_box_it">Select Box It</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="form-dual-listbox.html"
                           data-i18n="nav.form_elements.form_dual_listbox">Dual Listbox</a>
                    </li>
                    <li><a class="menu-item" href="form-tags-input.html" data-i18n="nav.form_elements.form_tags_input">Tags
                            Input</a>
                    </li>
                    <li><a class="menu-item" href="form-validation.html" data-i18n="nav.form_elements.form_validation">Validation</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title"
                                                                                   data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="form-layout-basic.html"
                           data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-horizontal.html"
                           data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-hidden-labels.html"
                           data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-form-actions.html"
                           data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-row-separator.html"
                           data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-bordered.html"
                           data-i18n="nav.form_layouts.form_layout_bordered">Bordered</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-striped-rows.html"
                           data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</a>
                    </li>
                    <li><a class="menu-item" href="form-layout-striped-labels.html"
                           data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title"
                                                                               data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="form-wizard-circle-style.html"
                           data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</a>
                    </li>
                    <li><a class="menu-item" href="form-wizard-notification-style.html"
                           data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="form-repeater.html"><i class="la la-repeat"></i><span class="menu-title"
                                                                                                 data-i18n="nav.form_repeater.main">Form Repeater</span></a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.tables">Tables</span><i class="la la-ellipsis-h ft-minus"
                                                                      data-toggle="tooltip"
                                                                      data-placement="right"
                                                                      data-original-title="Tables"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title"
                                                                               data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic">Basic
                            Tables</a>
                    </li>
                    <li><a class="menu-item" href="table-border.html" data-i18n="nav.bootstrap_tables.table_border">Table
                            Border</a>
                    </li>
                    <li><a class="menu-item" href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing">Table
                            Sizing</a>
                    </li>
                    <li><a class="menu-item" href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling">Table
                            Styling</a>
                    </li>
                    <li><a class="menu-item" href="table-components.html"
                           data-i18n="nav.bootstrap_tables.table_components">Table Components</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-th"></i><span class="menu-title"
                                                                            data-i18n="nav.data_tables.main">DataTables</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="dt-basic-initialization.html"
                           data-i18n="nav.data_tables.dt_basic_initialization">Basic Initialisation</a>
                    </li>
                    <li><a class="menu-item" href="dt-advanced-initialization.html"
                           data-i18n="nav.data_tables.dt_advanced_initialization">Advanced initialisation</a>
                    </li>
                    <li><a class="menu-item" href="dt-styling.html" data-i18n="nav.data_tables.dt_styling">Styling</a>
                    </li>
                    <li><a class="menu-item" href="dt-data-sources.html" data-i18n="nav.data_tables.dt_data_sources">Data
                            Sources</a>
                    </li>
                    <li><a class="menu-item" href="dt-api.html" data-i18n="nav.data_tables.dt_api">API</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-th-large"></i><span class="menu-title"
                                                                                  data-i18n="nav.datatable_extensions.main">DataTables Ext.</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="dt-extensions-autofill.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_autofill">AutoFill</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main">Buttons</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="dt-extensions-buttons-basic.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic">Basic
                                    Buttons</a>
                            </li>
                            <li><a class="menu-item" href="dt-extensions-buttons-html-5-data-export.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export">HTML
                                    5 Data Export</a>
                            </li>
                            <li><a class="menu-item" href="dt-extensions-buttons-flash-data-export.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export">Flash
                                    Data Export</a>
                            </li>
                            <li><a class="menu-item" href="dt-extensions-buttons-column-visibility.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility">Column
                                    Visibility</a>
                            </li>
                            <li><a class="menu-item" href="dt-extensions-buttons-print.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print">Print</a>
                            </li>
                            <li><a class="menu-item" href="dt-extensions-buttons-api.html"
                                   data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api">API</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-column-reorder.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_column_reorder">Column Reorder</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-fixed-columns.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns">Fixed Columns</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-key-table.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_key_table">Key Table</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-row-reorder.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_row_reorder">Row Reorder</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-select.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_select">Select</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-fix-header.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_fix_header">Fix Header</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-responsive.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_responsive">Responsive</a>
                    </li>
                    <li><a class="menu-item" href="dt-extensions-column-visibility.html"
                           data-i18n="nav.datatable_extensions.dt_extensions_column_visibility">Column Visibility</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-th-list"></i><span class="menu-title"
                                                                                 data-i18n="nav.handson_table.main">Handson Table</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="handson-table-appearance.html"
                           data-i18n="nav.handson_table.handson_table_appearance">Appearance</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-rows-columns.html"
                           data-i18n="nav.handson_table.handson_table_rows_columns">Rows Columns</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-rows-only.html"
                           data-i18n="nav.handson_table.handson_table_rows_only">Rows Only</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-columns-only.html"
                           data-i18n="nav.handson_table.handson_table_columns_only">Columns Only</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-data-operations.html"
                           data-i18n="nav.handson_table.handson_table_data_operations">Data Operations</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-cell-features.html"
                           data-i18n="nav.handson_table.handson_table_cell_features">Cell Features</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-cell-types.html"
                           data-i18n="nav.handson_table.handson_table_cell_types">Cell Types</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-integrations.html"
                           data-i18n="nav.handson_table.handson_table_integrations">Integrations</a>
                    </li>
                    <li><a class="menu-item" href="handson-table-utilities.html"
                           data-i18n="nav.handson_table.handson_table_utilities">Utilities</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="table-jsgrid.html"><i class="la la-table"></i><span class="menu-title"
                                                                                               data-i18n="nav.table_jsgrid.main">jsGrid</span></a>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.addons">Add Ons</span><i class="la la-ellipsis-h ft-minus"
                                                                       data-toggle="tooltip"
                                                                       data-placement="right"
                                                                       data-original-title="Add Ons"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title"
                                                                              data-i18n="nav.editors.main">Editors</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="editor-quill.html" data-i18n="nav.editors.editor_quill">Quill</a>
                    </li>
                    <li><a class="menu-item" href="editor-ckeditor.html" data-i18n="nav.editors.editor_ckeditor">CKEditor</a>
                    </li>
                    <li><a class="menu-item" href="editor-summernote.html" data-i18n="nav.editors.editor_summernote">Summernote</a>
                    </li>
                    <li><a class="menu-item" href="editor-tinymce.html"
                           data-i18n="nav.editors.editor_tinymce">TinyMCE</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.editors.code_editor_codemirror.main">Code
                            Editor</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="code-editor-codemirror.html"
                                   data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror">CodeMirror</a>
                            </li>
                            <li><a class="menu-item" href="code-editor-ace.html"
                                   data-i18n="nav.editors.code_editor_codemirror.code_editor_ace">Ace</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title"
                                                                                  data-i18n="nav.pickers.main">Pickers</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="pickers-date-&amp;-time-picker.html"
                           data-i18n="nav.pickers.pickers_date_time_picker">Date &amp; Time Picker</a>
                    </li>
                    <li><a class="menu-item" href="pickers-color-picker.html"
                           data-i18n="nav.pickers.pickers_color_picker">Color Picker</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-code-fork"></i><span class="menu-title"
                                                                                   data-i18n="nav.jquery_ui.main">jQuery UI</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="jquery-ui-interactions.html"
                           data-i18n="nav.jquery_ui.jquery_ui_interactions">Interactions</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-navigations.html"
                           data-i18n="nav.jquery_ui.jquery_ui_navigations">Navigations</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-date-pickers.html"
                           data-i18n="nav.jquery_ui.jquery_ui_date_pickers">Date Pickers</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-autocomplete.html"
                           data-i18n="nav.jquery_ui.jquery_ui_autocomplete">Autocomplete</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-buttons-select.html"
                           data-i18n="nav.jquery_ui.jquery_ui_buttons_select">Buttons &amp; Select</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-slider-spinner.html"
                           data-i18n="nav.jquery_ui.jquery_ui_slider_spinner">Slider &amp; Spinner</a>
                    </li>
                    <li><a class="menu-item" href="jquery-ui-dialog-tooltip.html"
                           data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip">Dialog &amp; Tooltip</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="add-on-block-ui.html"><i class="la la-terminal"></i><span class="menu-title"
                                                                                                     data-i18n="nav.add_on_block_ui.main">Block UI</span></a>
            </li>
            <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="la la-crop"></i><span class="menu-title"
                                                                                                      data-i18n="nav.add_on_image_cropper.main">Image Cropper</span></a>
            </li>
            <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Drag &amp; Drop</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-cloud-upload"></i><span class="menu-title"
                                                                                      data-i18n="nav.file_uploaders.main">File Uploader</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="file-uploader-dropzone.html"
                           data-i18n="nav.file_uploaders.file_uploader_dropzone">Dropzone</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-calendar"></i><span class="menu-title"
                                                                                  data-i18n="nav.event_calendars.main">Event Calendars</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.event_calendars.full_calender.main">Full
                            Calendar</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="full-calender-basic.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_basic">Basic</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-events.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_events">Events</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-advance.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_advance">Advance</a>
                            </li>
                            <li><a class="menu-item" href="full-calender-extra.html"
                                   data-i18n="nav.event_calendars.full_calender.full_calender_extra">Extra</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="calendars-clndr.html"
                           data-i18n="nav.event_calendars.calendars_clndr">CLNDR</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-flag-o"></i><span class="menu-title"
                                                                                data-i18n="nav.internationalization.main">Internationalization</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="i18n-resources.html"
                           data-i18n="nav.internationalization.i18n_resources">Resources</a>
                    </li>
                    <li><a class="menu-item" href="i18n-xhr-backend.html"
                           data-i18n="nav.internationalization.i18n_xhr_backend">XHR Backend</a>
                    </li>
                    <li><a class="menu-item" href="i18n-query-string.html?lng=en"
                           data-i18n="nav.internationalization.i18n_query_string">Query String</a>
                    </li>
                    <li><a class="menu-item" href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init">On
                            Init</a>
                    </li>
                    <li><a class="menu-item" href="i18n-after-init.html"
                           data-i18n="nav.internationalization.i18n_after_init">After Init</a>
                    </li>
                    <li><a class="menu-item" href="i18n-fallback.html"
                           data-i18n="nav.internationalization.i18n_fallback">Fallback</a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i class="la la-ellipsis-h ft-minus"
                                                                                      data-toggle="tooltip"
                                                                                      data-placement="right"
                                                                                      data-original-title="Charts &amp; Maps"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bar-chart"></i><span class="menu-title"
                                                                                   data-i18n="nav.google_charts.main">google Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="google-bar-charts.html"
                           data-i18n="nav.google_charts.google_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="google-line-charts.html"
                           data-i18n="nav.google_charts.google_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="google-pie-charts.html"
                           data-i18n="nav.google_charts.google_pie_charts">Pie charts</a>
                    </li>
                    <li><a class="menu-item" href="google-scatter-charts.html"
                           data-i18n="nav.google_charts.google_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="google-bubble-charts.html"
                           data-i18n="nav.google_charts.google_bubble_charts">Bubble charts</a>
                    </li>
                    <li><a class="menu-item" href="google-other-charts.html"
                           data-i18n="nav.google_charts.google_other_charts">Other charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-file-photo-o"></i><span class="menu-title"
                                                                                      data-i18n="nav.echarts.main">Echarts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="echarts-line-area-charts.html"
                           data-i18n="nav.echarts.echarts_line_area_charts">Line &amp; Area charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-bar-column-charts.html"
                           data-i18n="nav.echarts.echarts_bar_column_charts">Bar &amp; Column charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-pie-doughnut-charts.html"
                           data-i18n="nav.echarts.echarts_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-scatter-charts.html"
                           data-i18n="nav.echarts.echarts_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-radar-chord-charts.html"
                           data-i18n="nav.echarts.echarts_radar_chord_charts">Radar &amp; Chord charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-funnel-gauges-charts.html"
                           data-i18n="nav.echarts.echarts_funnel_gauges_charts">Funnel &amp; Gauges charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-combination-charts.html"
                           data-i18n="nav.echarts.echarts_combination_charts">Combination charts</a>
                    </li>
                    <li><a class="menu-item" href="echarts-advance-charts.html"
                           data-i18n="nav.echarts.echarts_advance_charts">Advance charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title"
                                                                                    data-i18n="nav.chartjs.main">Chartjs</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="chartjs-line-charts.html"
                           data-i18n="nav.chartjs.chartjs_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts">Bar
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"
                           data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-scatter-charts.html"
                           data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-polar-radar-charts.html"
                           data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</a>
                    </li>
                    <li><a class="menu-item" href="chartjs-advance-charts.html"
                           data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-line-chart"></i><span class="menu-title"
                                                                                    data-i18n="nav.d3_charts.main">D3 Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart">Line
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart">Bar
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart">Pie
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-circle-diagrams.html"
                           data-i18n="nav.d3_charts.d3_circle_diagrams">Circle Diagrams</a>
                    </li>
                    <li><a class="menu-item" href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart">Tree
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts">Other
                            Charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-indent"></i><span class="menu-title"
                                                                                data-i18n="nav.c3_charts.main">C3 Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart">Line
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart">Bar
                            &amp; Pie Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart">Axis
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart">Data
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart">Grid
                            Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-transform-chart.html"
                           data-i18n="nav.c3_charts.c3_transform_chart">Transform Chart</a>
                    </li>
                    <li><a class="menu-item" href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts">Other
                            Charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-pie-chart"></i><span class="menu-title"
                                                                                   data-i18n="nav.chartist.main">Chartist</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="chartist-line-charts.html"
                           data-i18n="nav.chartist.chartist_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-bar-charts.html"
                           data-i18n="nav.chartist.chartist_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="chartist-pie-charts.html"
                           data-i18n="nav.chartist.chartist_pie_charts">Pie charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="morris-charts.html"><i class="la la-share-alt"></i><span class="menu-title"
                                                                                                    data-i18n="nav.morris_charts.main">Morris Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title"
                                                                              data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts">Line
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts">Bar
                            charts</a>
                    </li>
                    <li><a class="menu-item" href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts">Pie
                            charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="rickshaw-charts.html"><i class="la la-bullseye"></i><span class="menu-title"
                                                                                                     data-i18n="nav.rickshaw_charts.main">Rickshaw Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title"
                                                                             data-i18n="nav.maps.main">Maps</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="gmaps-basic-maps.html"
                                   data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-services.html"
                                   data-i18n="nav.maps.google_maps.gmaps_services">Services</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-overlays.html"
                                   data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-routes.html"
                                   data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>
                            </li>
                            <li><a class="menu-item" href="gmaps-utils.html"
                                   data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.main">Vector Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main">jQuery
                                    Mapael</a>
                                <ul class="menu-content">
                                    <li><a class="menu-item" href="vector-maps-mapael-basic.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic">Basic
                                            Maps</a>
                                    </li>
                                    <li><a class="menu-item" href="vector-maps-mapael-advance.html"
                                           data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance">Advance
                                            Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvector.html"
                                   data-i18n="nav.maps.vector_maps.jvector_maps">jVector Map</a>
                            </li>
                            <li><a class="menu-item" href="vector-maps-jvq.html"
                                   data-i18n="nav.maps.vector_maps.vector_maps_jvq">JQV Map</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header">
                <span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h ft-minus"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span
                        class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
            </li>
            <li class=" nav-item">
                <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i
                        class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
