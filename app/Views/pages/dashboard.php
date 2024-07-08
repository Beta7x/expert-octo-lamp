<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
  <?= $this->include('partial/preloader'); ?>
  <?= $this->include('components/header'); ?>
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

            const sidebarToggleBtn = document.getElementById('sidebarToggle');
            const darkModeCheckBox = document.getElementById('darkModeCheckBox');
            const darkModeToggler = document.getElementById('darkModeToggler');
            const toggleCircle = document.getElementById('toggleCircle');

            let sidebarToggle = false;
            let darkMode = false;
        });
    </script>
<?= $this->endSection(); ?>