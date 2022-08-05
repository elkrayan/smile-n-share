<?php echo $__env->make('layout.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('home'); ?>
    <header>
        <h1 class="font-sans font-semibold">
            Nous créons des experiences <span class="font-serif text-orange">mémorable</span>
        </h1>
    </header>
    <a href="" class="btn circle font-semibold">
            <span class="circle">
                <span class="material-symbols-outlined">
                    arrow_right_alt
                </span>
            </span>
    </a>
    <div class="square bg-orange"></div>
    <div class="circle bg-orange"></div>
    

    <main class="container mx-auto">
        <p class="text-justify font-sans">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
        </p>

        <article class="py-2">
            <h2 class="font-serif text-2xl py-2 text-sky_blue-2">Digital</h2>
            <a href="" class="
                bkg-color bg-sky_blue
                ">
                <img src="<?php echo e(asset('img/booth/digital.png')); ?>" alt="">
            </a>
            <a href="" class="btn text-sky_blue-2 underline underline-offset-2">En savoir plus</a>
        </article>

        <article class="py-2">
            <h2 class="font-serif text-2xl py-2 text-yellow-2">Booth</h2>
            <a href="" class="bkg-color bg-yellow">
                <img src="<?php echo e(asset('img/booth/digital.png')); ?>" alt="">
            </a>
            <a href="" class="btn text-yellow-2 underline underline-offset-2">En savoir plus</a>
        </article>

        <article class="py-2">
            <h2 class="font-serif text-2xl py-2 text-purple">Mirror</h2>
            <a href="" class="bkg-color bg-purple">
                <img src="<?php echo e(asset('img/booth/mirror.png')); ?>" alt="">
            </a>
            <a href="" class="btn text-purple underline underline-offset-2">En savoir plus</a>
        </article>
    </main>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/rayan/_code/smile-n-share/resources/views/home.blade.php ENDPATH**/ ?>