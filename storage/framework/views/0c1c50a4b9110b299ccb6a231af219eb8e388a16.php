


<?php $__env->startSection('page-content'); ?>

    <div class="container">

    <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><a href="http://localhost/forumApple/public/question/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h4>
                        <p class="text-right">By: <?php echo e($post->user->name ?? 'None'); ?></p>
                        <p><?php echo e($post->body); ?></p>
                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo e($post->created_at->diffForHumans()); ?></span></li>
                            <li>|</li>

                            <?php if( $post->replies->count() > 0): ?>

                                <li> <?php echo e($post->replies->count()); ?> Коментария</li>
                            
                            <?php else: ?>

                                <li>Будьте первым кто ответит</li>
                                
                            <?php endif; ?>

                            <li>|</li>

                            <?php if( $currentUser && $currentUser->id == $post->user_id ): ?>

                                <li><span><i class="glyphicon glyphicon-pencil"></i> <a href="<?php echo e(URL::route('get_edit_post', ['id' => $post->id])); ?>">Редактировать</a></span></li>

                            <?php endif; ?>

                        </ul>
                    </div>

                    <?php if( $currentUser && $currentUser->id == $post->user_id ): ?>

                        <?php echo Form::open(['route' => 'delete_question', 'id' => 'delete-question-form', 'method' => 'DELETE', 'class' => 'text-right']); ?>


                            <?php echo Form::hidden('post_id', $post->id); ?>


                            <?php echo Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']); ?>


                        <?php echo Form::close(); ?>


                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Вопросы не найдены</p>
        <?php endif; ?>

        <?php echo $posts->appends(Request::all())->render(); ?>


    </div> <!-- /container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masters.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\forumApple\resources\views/pages/home.blade.php ENDPATH**/ ?>