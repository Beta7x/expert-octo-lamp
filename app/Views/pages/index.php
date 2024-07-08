<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
  <?= $this->include('partial/preloader'); ?>
  <?= $this->include('components/navbar'); ?> -z-1
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loaded = true;
            const loaderElement = document.getElementById('loader');
            if (loaded) {
                setTimeout(() => {
                    loaderElement.style.display = 'none';
                }, 500);
            }
        });
    </script>
<?= $this->endSection(); ?>