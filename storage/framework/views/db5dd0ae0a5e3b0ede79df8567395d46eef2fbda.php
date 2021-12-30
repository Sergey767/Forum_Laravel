


<?php $__env->startSection('page-content'); ?>

    <div class="container">

    <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo e($post?->title); ?></h4>
                        <p class="text-right">By: <?php echo e($post?->user->name); ?></p>
                        <p><?php echo e($post?->body); ?></p>
                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo e($post?->created_at->diffForHumans()); ?></span></li>                           
                        </ul>
                    </div>
                </div>
            </div>

            <?php $__empty_1 = true; $__currentLoopData = $post->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="well">
                    <div class="media">
                        <div class="media-body">
                          <p class="text-right">By: <?php echo e($reply->user->name); ?></p>
                            <p><?php echo e($reply->body); ?></p>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo e($reply->created_at->diffForHumans()); ?></span></li>                           
                            </ul>
                        </div>
                    </div>

                    <?php if( $currentUser && $currentUser->id == $reply->user_id ): ?>

                        <?php echo Form::open(['route' => 'delete_reply', 'id' => 'delete-reply-form', 'method' => 'DELETE', 'class' => 'text-right']); ?>


                            <?php echo Form::hidden('reply_id', $reply->id); ?>


                            <?php echo Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']); ?>


                        <?php echo Form::close(); ?>


                    <?php endif; ?>

                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Be the first to reply</p>
        <?php endif; ?>

        <?php if( $currentUser ): ?>
        
            <?php echo Form::open(['route' => 'save_reply', 'id' => 'reply-question-form']); ?>


                <?php echo Form::hidden('slug', $post->slug); ?>


                <?php echo Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'placeholder' => 'Type your reply here', 'required']); ?>

                <br/>
                <?php echo Form::button('Ответить', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']); ?>


            <?php echo Form::close(); ?>


        <?php endif; ?>
    </div> <!-- /container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masters.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forumApple\resources\views/pages/reply.blade.php ENDPATH**/ ?>