<!-- Toast Message -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast toast-message align-items-center text-bg-danger border-0" role="alert">
        <div class="d-flex">
            <div id="bodyMessage" class="toast-body">Dies ist eine Testmitteilung.</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

{{-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast toast-message" role="alert" aria-live="assertive" aria-atomic="true">


        <div class="d-flex">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>


        <div class="toast-header">
            <i class="bi bi-exclamation-circle"></i> &nbsp; &nbsp;
            <strong id="titleToast" class="me-auto">Info</strong>
            <small id="subtitleToast"></small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div id="bodyMessage" class="toast-body">Dies ist eine Testmitteilung.</div>
    </div>
</div> --}}

<script>
    console.log('init toast-message')
    window.addEventListener('show-message', event => {
        console.log('show-message: ' + event.detail.message);
        // if (event.detail.title) document.getElementById("titleMessage").innerHTML = event.detail.title;
        // if (event.detail.subtitle) document.getElementById("subtitleMessage").innerHTML = event.detail.subtitle;
        if (event.detail.message) document.getElementById("bodyMessage").innerHTML = event.detail.message;
        var toastElList = [].slice.call(document.querySelectorAll('.toast-message'))
        var toastList = toastElList.map(function(toastEl) {
            // Creates an array of toasts (it only initializes them)
            return new bootstrap.Toast(toastEl) // No need for options; use the default options
        });
        toastList.forEach(toast => toast.show()); // This show them
        // console.log(toastList); // Testing to see if it works
    })
</script>
