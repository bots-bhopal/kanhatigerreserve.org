<?php $home_page_variant = get_static_option('home_page_variant');?>
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo" style="max-height: 50px;">
            <a href="<?php echo e(route('admin.home')); ?>">
                <?php
                    $logo_type = 'site_logo';
                    if (!empty(get_static_option('site_admin_dark_mode'))) {
                        $logo_type = 'site_white_logo';
                    }
                ?>
                <?php echo render_image_markup_by_attachment_id(get_static_option($logo_type)); ?>

            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav id="main_menu_wrap">
                <ul class="metismenu" id="menu">
                    <li class="<?php echo e(active_menu('admin-home')); ?>">
                        <a href="<?php echo e(route('admin.home')); ?>" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span><?php echo app('translator')->get('dashboard'); ?></span>
                        </a>
                    </li>
                    <?php if(check_page_permission('admin_manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/admin/*'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i>
                                <span><?php echo e(__('Admin Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/admin/all')); ?>"><a
                                        href="<?php echo e(route('admin.all.user')); ?>"><?php echo e(__('All Admin')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/admin/new')); ?>"><a
                                        href="<?php echo e(route('admin.new.user')); ?>"><?php echo e(__('Add New Admin')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/admin/all/role')); ?>"><a
                                        href="<?php echo e(route('admin.all.user.role')); ?>"><?php echo e(__('All Admin Role')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission_by_string('Users Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/frontend/user/*'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i>
                                <span><?php echo e(__('Users Manage')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/frontend/user/all')); ?>"><a
                                        href="<?php echo e(route('admin.all.frontend.user')); ?>"><?php echo e(__('All Users')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/frontend/user/new')); ?>"><a
                                        href="<?php echo e(route('admin.frontend.new.user')); ?>"><?php echo e(__('Add New User')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    

                    <?php if(check_page_permission_by_string('Pages Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/page/*', 'admin-home/page'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Pages')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/page')); ?>"><a
                                        href="<?php echo e(route('admin.page')); ?>"><?php echo e(__('All Pages')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/page/new')); ?>"><a
                                        href="<?php echo e(route('admin.page.new')); ?>"><?php echo e(__('Add New Page')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Blogs Manage')): ?>
                        <li
                         class="main_dropdown
                        <?php if(request()->is(['admin-home/blog/*', 'admin-home/blog'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Blogs')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/blog')); ?>"><a
                                            href="<?php echo e(route('admin.blog')); ?>"><?php echo e(__('All Blog')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog/category')); ?>"><a
                                            href="<?php echo e(route('admin.blog.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog/new')); ?>"><a
                                            href="<?php echo e(route('admin.blog.new')); ?>"><?php echo e(__('Add New Post')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.blog.page.settings')); ?>"><?php echo e(__('Blog Page Settings')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/blog/single-settings')); ?>"><a
                                        href="<?php echo e(route('admin.blog.single.settings')); ?>"><?php echo e(__('Blog Single Settings')); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('News Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/news/*', 'admin-home/news'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('News')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/news')); ?>"><a
                                        href="<?php echo e(route('admin.news')); ?>"><?php echo e(__('All News')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/news/new')); ?>"><a
                                        href="<?php echo e(route('admin.news.new')); ?>"><?php echo e(__('Add New News')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/news/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.news.page.settings')); ?>"><?php echo e(__('News Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Tender Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/tender/*', 'admin-home/tender'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Tenders')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/tender')); ?>"><a
                                        href="<?php echo e(route('admin.tender')); ?>"><?php echo e(__('All Tenders')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/tender/new')); ?>"><a
                                        href="<?php echo e(route('admin.tender.new')); ?>"><?php echo e(__('Add New Tender')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/tender/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.tender.page.settings')); ?>"><?php echo e(__('Tender Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Document Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/document/*', 'admin-home/document'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Documents')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/document')); ?>"><a
                                        href="<?php echo e(route('admin.document')); ?>"><?php echo e(__('All Documents')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/document/new')); ?>"><a
                                        href="<?php echo e(route('admin.document.new')); ?>"><?php echo e(__('Add New Document')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/document/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.document.page.settings')); ?>"><?php echo e(__('Document Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Notice Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/notice/*', 'admin-home/notice'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Notices & Orders')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/notice')); ?>"><a
                                        href="<?php echo e(route('admin.notice')); ?>"><?php echo e(__('All Notices & Orders')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/notice/new')); ?>"><a
                                        href="<?php echo e(route('admin.notice.new')); ?>"><?php echo e(__('Add New Notice or Order')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/notice/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.notice.page.settings')); ?>"><?php echo e(__('Notice or Order Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Link Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/link/*', 'admin-home/link'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Important Notifications')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/link')); ?>"><a
                                        href="<?php echo e(route('admin.links')); ?>"><?php echo e(__('All Important Notifications')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/link/new-category')); ?>"><a
                                        href="<?php echo e(route('admin.category.new')); ?>"><?php echo e(__('Add New Category')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/link/new')); ?>"><a
                                        href="<?php echo e(route('admin.link.new')); ?>"><?php echo e(__('Add Important Notifications')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Visitor Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php if(request()->is(['admin-home/visitor/*', 'admin-home/visitor'])): ?> active <?php endif; ?>
                        ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Visitor Counter')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/visitor')); ?>"><a
                                        href="<?php echo e(route('admin.visitor')); ?>"><?php echo e(__('All Visitors')); ?></a>
                                </li>
                                
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Photo Manage')): ?>
                        <li
                            class="main_dropdown
                        <?php echo e(active_menu('admin-home/photo-page')); ?>

                        <?php if(request()->is('admin-home/photo-page/*')): ?> active <?php endif; ?>
                                ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Visitor Month Pic')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/photo-page')); ?>">
                                    <a href="<?php echo e(route('admin.photo.all')); ?>"><?php echo e(__('Pic of the Month')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if(check_page_permission_by_string('Services')): ?>
                        <li
                            class="main_dropdown
                    <?php if(request()->is(['admin-home/services/*', 'admin-home/services'])): ?> active <?php endif; ?>
                    ">
                            <a href="javascript:void(0)" aria-expanded="true">
                                <i class="ti-layout"></i>
                                <span><?php echo e(__('Services')); ?></span>
                            </a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/services')); ?>"><a
                                        href="<?php echo e(route('admin.services')); ?>"><?php echo e(__('All Services')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/services/new')); ?>"><a
                                        href="<?php echo e(route('admin.services.new')); ?>"><?php echo e(__('New Service')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/services/category')); ?>"><a
                                        href="<?php echo e(route('admin.service.category')); ?>"><?php echo e(__('Category')); ?></a></li>
                                <li class="<?php echo e(active_menu('admin-home/services/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.services.page.settings')); ?>"><?php echo e(__('Service Page')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    

                    <?php if(check_page_permission_by_string('Gallery Page')): ?>
                        <li
                            class="main_dropdown
                        <?php echo e(active_menu('admin-home/gallery-page')); ?>

                        <?php if(request()->is('admin-home/gallery-page/*')): ?> active <?php endif; ?>
                                ">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-write"></i>
                                <span><?php echo e(__('Image Gallery')); ?></span></a>
                            <ul class="collapse">
                                <li class="<?php echo e(active_menu('admin-home/gallery-page')); ?>">
                                    <a href="<?php echo e(route('admin.gallery.all')); ?>"><?php echo e(__('Image Gallery')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/gallery-page/category')); ?>">
                                    <a href="<?php echo e(route('admin.gallery.category')); ?>"><?php echo e(__('Category')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/gallery-page/page-settings')); ?>">
                                    <a
                                        href="<?php echo e(route('admin.gallery.page.settings')); ?>"><?php echo e(__('Page Settings')); ?></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>



                    

                    

                    

                    

                    

                    

                    

                    

                    <li class="main_dropdown <?php if(request()->is(['admin-home/home-page-01/*', 'admin-home/home-' . $home_page_variant . '/*', 'admin-home/header', 'admin-home/keyfeatures', 'admin-home/about-page/*', 'admin-home/contact-page/*', 'admin-home/feedback-page/*', 'admin-home/404-page-manage', 'admin-home/maintains-page/settings', 'admin-home/page-builder/*'])): ?> active <?php endif; ?>
                        ">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i>
                            <span><?php echo e(__('All Page Settings')); ?></span></a>
                        <ul class="collapse ">
                            <?php if(check_page_permission_by_string('Home Page Manage')): ?>
                                <li class="main_dropdown <?php if(request()->is(['admin-home/home-' . $home_page_variant . '/*', 'admin-home/home-page-01/*', 'admin-home/header', 'admin-home/keyfeatures', 'admin-home/page-builder/home-page'])): ?> active <?php endif; ?>">
                                    <a href="javascript:void(0)" aria-expanded="true">
                                        <?php echo e(__('Home Page Manage')); ?>

                                    </a>
                                    <ul class="collapse">
                                        <!-- page builder check -->
                                        <?php if(empty(get_static_option('home_page_page_builder_status'))): ?>
                                            

                                            <?php if($home_page_variant == '09'): ?>
                                                
                                                <li class="<?php echo e(active_menu('admin-home/header')); ?>">
                                                    <a href="<?php echo e(route('admin.header')); ?>">
                                                        <?php echo e(__('Header Area')); ?>

                                                    </a>
                                                </li>
                                                <li class="<?php echo e(active_menu('admin-home/home-09/video-area')); ?>">
                                                    <a href="<?php echo e(route('admin.home09.video.area')); ?>">
                                                        <?php echo e(__('Video area')); ?>

                                                    </a>
                                                </li>
                                                <li class="<?php echo e(active_menu('admin-home/home-09/announcement-area')); ?>">
                                                    <a href="<?php echo e(route('admin.home09.announcement.area')); ?>">
                                                        <?php echo e(__('Announcement Area')); ?>

                                                    </a>
                                                </li>
                                                <li class="<?php echo e(active_menu('admin-home/home-09/notice-area')); ?>">
                                                    <a href="<?php echo e(route('admin.home09.notice.area')); ?>">
                                                        <?php echo e(__('Notice Area')); ?>

                                                    </a>
                                                </li>
                                                <li class="<?php echo e(active_menu('admin-home/home-09/gallery-area')); ?>">
                                                    <a href="<?php echo e(route('admin.home09.gallery.area')); ?>">
                                                        <?php echo e(__('Gallery Area')); ?>

                                                    </a>
                                                </li>
                                                
                                                <li
                                                    class="<?php echo e(active_menu('admin-home/home-09/what-we-offer-area')); ?>">
                                                    <a href="<?php echo e(route('admin.home09.what.we.offer')); ?>">
                                                        <?php echo e(__('What We Offer Area')); ?>

                                                    </a>
                                                </li>
                                                
                                            <?php endif; ?>

                                            

                                            <li
                                                class="<?php echo e(active_menu('admin-home/home-page-01/section-manage')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.homeone.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a>
                                            </li>
                                            
                                        <?php endif; ?>
                                        

                                    </ul>
                                </li>
                            <?php endif; ?>

                            

                            <?php if(check_page_permission_by_string('Contact Page Manage')): ?>
                                <li class="main_dropdown <?php if(request()->is(['admin-home/contact-page/*', 'admin-home/page-builder/contact-page'])): ?> active <?php endif; ?>">
                                    <a href="javascript:void(0)" aria-expanded="true">
                                        <?php echo e(__('Contact Page Manage')); ?>

                                    </a>
                                    <ul class="collapse">
                                        <?php if(empty(get_static_option('contact_page_page_builder_status'))): ?>
                                            <li class="<?php echo e(active_menu('admin-home/contact-page/contact-info')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.contact.info')); ?>"><?php echo e(__('Contact Info')); ?></a>
                                            </li>
                                            <li class="<?php echo e(active_menu('admin-home/contact-page/form-area')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.contact.page.form.area')); ?>"><?php echo e(__('Form Area')); ?></a>
                                            </li>
                                            <li class="<?php echo e(active_menu('admin-home/contact-page/map')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.contact.page.map')); ?>"><?php echo e(__('Google Map Area')); ?></a>
                                            </li>
                                            <li
                                                class="<?php echo e(active_menu('admin-home/contact-page/section-manage')); ?>">
                                                <a
                                                    href="<?php echo e(route('admin.contact.page.section.manage')); ?>"><?php echo e(__('Section Manage')); ?></a>
                                            </li>
                                        <?php endif; ?>
                                        
                                    </ul>
                                </li>
                            <?php endif; ?>

                            

                            <?php if(check_page_permission_by_string('404 Page Manage')): ?>
                                <li class="main_dropdown <?php echo e(active_menu('admin-home/404-page-manage')); ?>">
                                    <a href="<?php echo e(route('admin.404.page.settings')); ?>" aria-expanded="true">
                                        <?php echo e(__('404 Page Manage')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(!empty(get_static_option('site_maintenance_mode'))): ?>
                                <li class="main_dropdown <?php echo e(active_menu('admin-home/maintains-page/settings')); ?>">
                                    <a href="<?php echo e(route('admin.maintains.page.settings')); ?>" aria-expanded="true">
                                        <?php echo e(__('Maintain Page Manage')); ?>

                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <li class="main_dropdown <?php if(request()->is(['admin-home/form-builder/*', 'admin-home/email-template/*', 'admin-home/popup-builder/*', 'admin-home/widgets/*', 'admin-home/widgets', 'admin-home/menu-edit/*', 'admin-home/media-upload/page', 'admin-home/menu', 'admin-home/appearance-setting/*'])): ?> active <?php endif; ?>">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i>
                            <span><?php echo e(__('Appearance Settings')); ?></span></a>
                        <ul class="collapse ">
                            

                            <?php if(check_page_permission_by_string('Home Variant')): ?>
                                
                                <li class="<?php echo e(active_menu('admin-home/appearance-setting/breadcrumb-settings')); ?>">
                                    <a href="<?php echo e(route('admin.breadcrumb.settings')); ?>" aria-expanded="true">
                                        <?php echo e(__('Breadcrumb Settings')); ?>

                                    </a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/appearance-setting/footer-settings')); ?>">
                                    <a href="<?php echo e(route('admin.footer.settings')); ?>" aria-expanded="true">
                                        <?php echo e(__('Footer Color Settings')); ?>

                                    </a>
                                </li>
                            <?php endif; ?> 

                            <?php if(check_page_permission_by_string('Menus Manage')): ?>
                                <li
                                    class="main_dropdown
                                        <?php echo e(active_menu('admin-home/menu')); ?>

                                        <?php if(request()->is('admin-home/menu-edit/*')): ?> active <?php endif; ?>
                                        ">
                                    <a href="javascript:void(0)" aria-expanded="true">
                                        <?php echo e(__('Menus Manage')); ?></a>
                                    <ul class="collapse">
                                        <li class="<?php echo e(active_menu('admin-home/menu')); ?>"><a
                                                href="<?php echo e(route('admin.menu')); ?>"><?php echo e(__('All Menus')); ?></a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if(check_page_permission_by_string('Widgets Manage')): ?>
                                <li
                                    class="main_dropdown
                                            <?php echo e(active_menu('admin-home/widgets')); ?>

                                            <?php if(request()->is('admin-home/widgets/*')): ?> active <?php endif; ?>
                                                    ">
                                    <a href="javascript:void(0)" aria-expanded="true">
                                        <?php echo e(__('Widgets Manage')); ?></a>
                                    <ul class="collapse">
                                        <li class="<?php echo e(active_menu('admin-home/widgets')); ?>"><a
                                                href="<?php echo e(route('admin.widgets')); ?>"><?php echo e(__('All Widgets')); ?></a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            

                            

                            

                            <li class="main_dropdown <?php echo e(active_menu('admin-home/media-upload/page')); ?>">
                                <a href="<?php echo e(route('admin.upload.media.images.page')); ?>" aria-expanded="true">
                                    <?php echo e(__('Media Images Manage')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if(check_page_permission_by_string('General Settings')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/general-settings/*')): ?> active <?php endif; ?>">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i>
                                <span><?php echo e(__('General Settings')); ?></span></a>
                            <ul class="collapse ">
                                <li class="<?php echo e(active_menu('admin-home/general-settings/site-identity')); ?>"><a
                                        href="<?php echo e(route('admin.general.site.identity')); ?>"><?php echo e(__('Site Identity')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/basic-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.basic.settings')); ?>"><?php echo e(__('Basic Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/color-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.color.settings')); ?>"><?php echo e(__('Color Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/typography-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.typography.settings')); ?>"><?php echo e(__('Typography Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/seo-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.seo.settings')); ?>"><?php echo e(__('SEO Settings')); ?></a>
                                </li>
                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/email-template')); ?>"><a
                                        href="<?php echo e(route('admin.general.email.template')); ?>"><?php echo e(__('Email Template')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/email-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.email.settings')); ?>"><?php echo e(__('Email Messages Settings')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/smtp-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.smtp.settings')); ?>"><?php echo e(__('SMTP Settings')); ?></a>
                                </li>
                                
                                
                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/page-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.page.settings')); ?>"><?php echo e(__('Page Settings')); ?></a>
                                </li>
                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/custom-css')); ?>"><a
                                        href="<?php echo e(route('admin.general.custom.css')); ?>"><?php echo e(__('Custom CSS')); ?></a>
                                </li>
                                <li class="<?php echo e(active_menu('admin-home/general-settings/custom-js')); ?>"><a
                                        href="<?php echo e(route('admin.general.custom.js')); ?>"><?php echo e(__('Custom JS')); ?></a>
                                </li>

                                <li class="<?php echo e(active_menu('admin-home/general-settings/cache-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.cache.settings')); ?>"><?php echo e(__('Cache Settings')); ?></a>
                                </li>
                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/preloader-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.preloader.settings')); ?>"><?php echo e(__('Preloader Settings')); ?></a>
                                </li>
                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/sitemap-settings')); ?>"><a
                                        href="<?php echo e(route('admin.general.sitemap.settings')); ?>"><?php echo e(__('Sitemap Settings')); ?></a>
                                </li>
                                

                                
                                <li class="<?php echo e(active_menu('admin-home/general-settings/database-upgrade')); ?>"><a
                                        href="<?php echo e(route('admin.general.database.upgrade')); ?>"><?php echo e(__('Database Upgrade')); ?></a>
                                </li>
                                
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(check_page_permission('languages')): ?>
                        <li class="main_dropdown <?php if(request()->is('admin-home/languages/*') || request()->is('admin-home/languages')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.languages')); ?>" aria-expanded="true"><i
                                    class="ti-signal"></i>
                                <span><?php echo e(__('Languages')); ?></span></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH /home/kanhatig/public_html/@core/resources/views/backend/partials/sidebar.blade.php ENDPATH**/ ?>