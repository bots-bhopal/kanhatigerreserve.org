<style>
    .btn-wrapper .boxed-btn.reverse-color:hover {
        background-color: var(--main-color-two) !important;
    }
</style>

<div class="single-what-we-cover-item-02 margin-bottom-30">
    <div class="single-what-img-1">
        <?php if($notice->file_extension): ?>
            <?php if($notice->file_extension == 'doc' || $notice->file_extension == 'docx'): ?>
                <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>" width="150" height="150"
                    class="img-fluid rounded mt-4 mb-4" alt="doc-image">
            <?php endif; ?>

            <?php if($notice->file_extension == 'xls' || $notice->file_extension == 'xlsx'): ?>
                <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>" width="150" height="150"
                    class="img-fluid rounded mt-4 mb-4" alt="xls-image">
            <?php endif; ?>

            <?php if($notice->file_extension == 'pdf'): ?>
                <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>" width="150" height="150"
                    class="img-fluid rounded mt-4 mb-4" alt="pdf-image">
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="content border-top" style="border: 1px #solid #e5e5e5;">
        <a href="<?php echo e(route('frontend.notice.single', $notice->slug)); ?>">
            <h4 class="title"><?php echo e($notice->title); ?></h4>
        </a>
        <p><?php echo Str::limit($notice->description, 200, '...'); ?></p>
        <div class="btn-wrapper">
            <a href="<?php echo e(route('frontend.notice.single', $notice->slug)); ?>"
                class="boxed-btn reverse-color"><?php echo e(get_static_option('notice_page_' . $user_select_lang_slug . '_read_more_btn_text')); ?></a>
        </div>
    </div>
</div>
<?php /**PATH /home/kanhatig/public_html/@core/resources/views/components/frontend/notice/grid.blade.php ENDPATH**/ ?>