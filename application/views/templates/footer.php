<footer class="sticky-footer bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="#">Pariwisata Jakarta</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- Modal -->
<div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pilih "Logout" di bawah jika kamu yakin sudah selesai.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><a class="text text-white" href="<?= base_url('autentifikasi/logout'); ?>"> Logout</a></button>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>js/bootstrap.js"></script>
</body>

</html>