
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageTitle::class, ['namaPageAktif' => 'Dashboard'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\PageTitle::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e)): ?>
<?php $component = $__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e; ?>
<?php unset($__componentOriginal85f966f1b5de8551aa930b6f61c6100ede97428e); ?>
<?php endif; ?>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ipsa exercitationem explicabo suscipit est obcaecati
    sed voluptate, reprehenderit consectetur nostrum amet modi commodi maxime saepe ratione velit! Consequatur cum nihil
    amet neque sapiente fugit in recusandae esse culpa cupiditate tempora, nostrum minus quo repellendus deserunt eum
    blanditiis facilis, maxime sequi provident accusantium aliquam saepe corporis facere! Itaque nam debitis ea molestias
    optio ipsum quibusdam veritatis. Nisi dolorum consequuntur illo sit maiores voluptatum laudantium fugiat vero, natus
    commodi id repellendus at eaque, architecto laborum doloribus odit fugit incidunt obcaecati. Obcaecati earum id nostrum
    maiores facere dolore ea deserunt repellat. Enim commodi exercitationem nemo? Cupiditate soluta facilis aliquam at!
    Optio autem blanditiis consequatur sunt consectetur aliquid mollitia reprehenderit facilis atque ullam modi obcaecati
    repellendus necessitatibus, id ipsa, alias praesentium harum incidunt. Ut deserunt facere eligendi. A repellat nemo
    praesentium minima eos mollitia ducimus deleniti aliquid excepturi at molestiae, quasi officiis id exercitationem quis
    pariatur, dicta facilis, repellendus cupiditate dolor in asperiores voluptate ipsam! Est blanditiis, quas optio
    voluptate accusamus dicta corrupti sint exercitationem repellat perferendis minima magni facilis. Nulla quod officia
    nisi consequatur corporis inventore perferendis dolorum voluptas omnis recusandae maxime est odit a optio natus
    distinctio aut iste tempore doloremque voluptatibus iure, sapiente reprehenderit iusto? Doloribus a accusantium illo
    dolore ut asperiores aperiam nesciunt similique quod pariatur perspiciatis repudiandae, omnis libero recusandae id qui
    vero eveniet? Ipsa repellat quasi maxime voluptatem unde facilis eligendi accusantium eaque error sed modi rem
    consectetur asperiores veniam optio in deserunt, neque, labore libero veritatis molestias! Dolores libero nisi rerum
    tempora, unde soluta temporibus quo possimus odit nemo asperiores nam consectetur sit iste reprehenderit earum obcaecati
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-nice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/dashboard.blade.php ENDPATH**/ ?>