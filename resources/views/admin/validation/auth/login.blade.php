<script>
    $('#loginForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                // url: "{{ route('check.password') }}",
                remote: {
                    url: "{{ route('check.password') }}",
                    type: "post",
                    data: {
                        _token: function () {
                            return "{{ csrf_token() }}";
                        }
                    },
                    dataFilter: function (response) {
                        var response = JSON.parse(response);
                        if (response.valid == true || response.valid == 'true') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            }
        },
        messages: {
            email: {
                required: "{{ __('validation.required', ['attribute' => __('app.auth.email')]) }}",
                email: "{{ __('validation.email', ['attribute' => __('app.auth.email')]) }}"
            },
            password: {
                required: "{{ __('validation.required', ['attribute' => __('app.auth.password')]) }}",
                remote: "{{ __('validation.strong_password', ['attribute' => __('app.auth.password')]) }}"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            // for password with eye icon
            if (element.attr("name") == "password") {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }

            error.addClass('text-danger');
        },
        highlight: function (element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
</script>