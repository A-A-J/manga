        <!-- START HTML MODAL -->
        <div class="modal fade" id="Tool-TypeModal" tabindex="-1" aria-labelledby="Tool-TypeModal" aria-hidden="true">
            <div id="ch-modal-dialog" class="modal-dialog">
                <div class="modal-content modal-content-TOOLS">
                    <div class="modal-body pt-3 pb-3 ps-2 pe-2">
                        <div id="typeModal">
                            <i type="button" class="fa fa-times m-0" style="position: absolute; left: 16px; top: 4px; font-size: 17px;" data-bs-dismiss="modal" aria-label="Close"></i>
                            <div class="containerModal">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="crop">Crop</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END   HTML MODAL -->
    </div>

    <!-- JS -->
    <script src="layout/Librarys/wave/waves.js"></script>
    <script src="layout/Librarys/simplebar/simplebar.min.js"></script>
    <script src="layout/Librarys/scrollreveal/scrollreveal.js"></script>
    <script src="layout/Librarys/Notiflix-2.7.0/dist/notiflix-aio-2.7.0.min.js"></script>
    <script src="layout/js/run.js"></script>
    <script>
        Notiflix.Notify.Init({
            position:"left-bottom",
            fontSize:"12px",
            rtl:true,
        }); 
    </script>
</body>
</html>