<?php
    // Array of URLs for the cards to link to
    $galleryLinks = [
        'https://www.louvre.fr/en',
        'https://www.metmuseum.org/',
        'https://www.nationalgallery.org.uk/',
        'https://www.uffizi.it/en',
        'https://www.rijksmuseum.nl/en',
        'https://www.pradomuseum.es/en',
        'https://www.vangoghmuseum.nl/',
        'https://www.museodelnovecento.org/en/',
        'https://www.moma.org/',
        'https://www.centrepompidou.fr/en',
        'https://www.tate.org.uk/',
        'https://www.hermitagemuseum.org/',
        'https://www.museivaticani.va/',
        'https://www.guggenheim.org/',
        'https://www.getty.edu/museum/',
        'https://www.saatchigallery.com/',
    ];
?>

<!-- Gallery Grid (responsive 4-column layout) -->
<div class="w-4/5 m-auto py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Clickable gallery card linking to external website -->
            <a href="<?php echo e($galleryLinks[$loop->index] ?? '#'); ?>" target="_blank" rel="noopener noreferrer"
               class="block rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 ease-in-out bg-white">
               
               <!-- Background image of gallery -->
               <div class="h-48 bg-cover bg-center"
                    style="background-image: url('<?php echo e(asset('images/' . $gallery->image)); ?>');"></div>
                
                <!-- Gallery title and short description -->
                <div class="bg-white p-4">
                    <h3 class="text-lg font-semibold text-gray-800"><?php echo e($gallery->title); ?></h3>
                    <p class="text-sm text-gray-600"><?php echo e($gallery->description); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\fedan\Pictures\2nd Year Work\Paint Across the World\resources\views/partials/exploregalleries.blade.php ENDPATH**/ ?>