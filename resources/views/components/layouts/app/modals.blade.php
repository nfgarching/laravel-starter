<!-- Modals -->

@stack('modals')

{{-- <livewire:akv.dok.calendar /> --}}
<livewire:akv.dok.modal.create />
{{-- <livewire:akv.dok.modal.update /> --}}
{{-- <livewire:akv.dok.modal.upsert /> --}}
<livewire:akv.nam.modal.upsert />
<livewire:akv.reg.modal.upsert />

{{-- <livewire:modal.main /> --}}

<livewire:modal.compose />
<livewire:modal.disk />
<livewire:modal.envelope />
{{-- <livewire:modal.file /> --}}
<livewire:modal.files />
<livewire:modal.mailbox />
<livewire:modal.raw />
<livewire:modal.search />
<livewire:modal.sipcall />
<livewire:modal.test />
<livewire:modal.upload />

<script>
    console.log('init modal');

    window.addEventListener('hide-modal', event => {
        console.log('hide-modal: ' + event.detail.modalName);
        var myModal = bootstrap.Modal.getOrCreateInstance(
            document.getElementById(event.detail.modalName));
        myModal.hide();
    })

    window.addEventListener('show-modal', event => {
        console.log('show-modal: ' + event.detail.modalName);
        var myModal = bootstrap.Modal.getOrCreateInstance(
            document.getElementById(event.detail.modalName));
        myModal.show();
    })

    function closeAllModals() {

        // get modals
        const modals = document.getElementsByClassName('modal');

        // on every modal change state like in hidden modal
        for (let i = 0; i < modals.length; i++) {
            modals[i].classList.remove('show');
            modals[i].setAttribute('aria-hidden', 'true');
            modals[i].setAttribute('style', 'display: none');
        }

        // get modal backdrops
        const modalsBackdrops = document.getElementsByClassName('modal-backdrop');

        // remove every modal backdrop
        for (let i = 0; i < modalsBackdrops.length; i++) {
            document.body.removeChild(modalsBackdrops[i]);
        }
    }
</script>

<script>
    console.log('init btnModalFile');

    function btnModalFile(event) {
        // Now you can access the event object (e) directly
        console.log('init components.button.file.modal: btnModalFile');
        // console.log(event);
        // console.log(event.target);
        // console.log(event.target.dataset);
        // console.log(event.target.dataset.keyid); // Muss angezeigt werden!!!
        var host = window.location.host;
        var pathtodisk = 'http://' + host + '/files/' + event.target.dataset.keyid;
        var pathtofile = 'http://' + host + '/files/' + event.target.dataset.keyid + '/edit';
        // console.log(host); console.log(pathtofile);

        if (event.ctrlKey) {
            console.log('ctrl-key');
            window.open(pathtodisk, '_blank');
        } else if (event.shiftKey) {
            console.log('shift-key');
            window.open(pathtodisk, 'Attachment','popup').focus();
            // window.open(pathtodisk, 'Attachment','height=1280,width=800,location=false,menubar=false,status=false,toolbar=false').focus();
        } else if (event.metaKey) {
            console.log('meta-key');
            window.open(pathtofile, '_blank');
        } else {
            console.log('show modal - keyid:', event.target.dataset.keyid);
            window.Livewire.dispatch('modalFile', {
                id: event.target.dataset.keyid
            });
        }
    }
</script>

<script>
    // console.log('init check');

    // function docheck() {
    //     console.log('docheck');
    //     let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    //     checkboxes.forEach(box => {
    //         box.checked = true;
    //     });
    // }

    // function toggle() {
    //     console.log('toggle');
    //     let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    //     checkboxes.forEach(box => {
    //         box.checked = box.checked ? false : true;
    //     });


    //     var toggle = document.getElementById("toggle");
    //     var toggleClass = toggle.className;
    //     console.log(toggleClass);
    //     if (toggleClass == "bi bi-toggle-off") {
    //         console.log('1');
    //         toggle.className = "bi bi-toggle-on";
    //     } else {
    //         console.log('2');
    //         toggle.className = "bi bi-toggle-off";
    //     }

    // }

    // function uncheck() {
    //     console.log('uncheck');
    //     let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    //     checkboxes.forEach(box => {
    //         box.checked = false;
    //     });
    // }

</script>
