<style>
    .single-what-we-cover-item-02 .content {
        padding: 20px !important;
    }

    .single-what-we-cover-item-02:hover .content {
        background-color: #fff !important;
    }

    .single-what-we-cover-item-02 .content .title {
        color: var(--heading-color) !important;
    }

    .single-what-we-cover-item-02 .content p {
        color: color: var(--paragraph-color) !important;
    }

    .btn-wrapper .boxed-btn.reverse-color:hover {
        background-color: var(--main-color-two) !important;
    }
</style>


<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url" content="<?php echo e(route('frontend.tender.single', $tender->slug)); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo e($tender->title); ?>" />
    <?php echo render_og_meta_image_by_attachment_id($tender->image); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e($tender->meta_description); ?>">
    <meta name="tags" content="<?php echo e($tender->meta_tag); ?>">
    <?php echo render_og_meta_image_by_attachment_id($tender->image); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($tender->title); ?> - <?php echo e(get_static_option('tender_page_' . $user_select_lang_slug . '_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e($tender->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content service-details padding-top-120 padding-bottom-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single-what-we-cover-item-02 margin-bottom-30">
                        <div class="single-what-img-1">
                            <?php if($tender->file_extension): ?>
                                <?php if($tender->file_extension == 'doc' || $tender->file_extension == 'docx'): ?>
                                    <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>" width="150" height="150"
                                        class="img-fluid rounded mt-4 mb-4" alt="doc-image">
                                <?php endif; ?>

                                <?php if($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx'): ?>
                                    <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>" width="150" height="150"
                                        class="img-fluid rounded mt-4 mb-4" alt="xls-image">
                                <?php endif; ?>

                                <?php if($tender->file_extension == 'pdf'): ?>
                                    <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>" width="150" height="150"
                                        class="img-fluid rounded mt-4 mb-4" alt="pdf-image">
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="content border-top text-justify" style="border: 1px #solid #e5e5e5;">
                            <h4 class="title"><?php echo e($tender->title); ?></h4>
                            <p><?php echo $tender->description; ?></p>
                            <div class="btn-wrapper">
                                <a href="<?php echo e(route('user.tender.download', $tender->original_filename)); ?>" target="_blank"
                                    class="boxed-btn reverse-color"><?php echo e(__('Download File')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kanhatig/public_html/@core/resources/views/frontend/pages/tender/tender-single.blade.php ENDPATH**/ ?>