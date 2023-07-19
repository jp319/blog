@if(session()->has('success'))
{{--    Success Message Without using SweetAlert2--}}
{{--    <div x-data="{show: true}"--}}
{{--         x-init="setTimeout(() => show = false, 4000)"--}}
{{--         x-show="show"--}}
{{--         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">--}}
{{--        <p>{{ session('success') }}</p>--}}
{{--    </div>--}}

{{--    Success Message using SweetAlert2--}}
    @php
        echo
        '
            <div x-data="{
                    successMessage: \' '. session("success") .' \',
                    success: function(message) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: \'top-end\',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener(\'mouseenter\', Swal.stopTimer)
                                toast.addEventListener(\'mouseleave\', Swal.resumeTimer)
                            }
                        });
                        Toast.fire({
                            icon: \'success\',
                            title: message
                        });
                    }
                }" x-init="success(successMessage)">
            </div>
        ';
    @endphp
@endif
