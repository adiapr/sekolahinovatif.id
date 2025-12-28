@push('styles')
    <style>
        
.custom-toggle {
    position: relative;
    display: inline-block;
    width: 45px;
    height: 1.3rem;
}

.custom-toggle input {
    display: none;
}

.custom-toggle input:checked + .custom-toggle-slider {
    border: 1px solid #5e72e4;
}

.custom-toggle input:checked + .custom-toggle-slider:before {
    background: #5e72e4;
    transform: translateX(1.625rem);
}

.custom-toggle input:disabled + .custom-toggle-slider {
    border: 1px solid #e9ecef;
}

.custom-toggle input:disabled:checked + .custom-toggle-slider {
    border: 1px solid #e9ecef;
}

.custom-toggle input:disabled:checked + .custom-toggle-slider:before {
    background-color: #8a98eb;
}

.custom-toggle-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid #a5adb4;
    border-radius: 34px !important;
    background-color: transparent;
}

.custom-toggle-slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 1px;
    top: 1.9px;
    border-radius: 50% !important;
    background-color: #e9ecef;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
    </style>
    
@endpush
@push('scripts')
    <script>
        function isBoolean(id, table, field, message) {
            console.log(id, table, field, message);
            var check = $("#is-boolean-" + id + "-" + table);
            var val = check.is(":checked") ? 1 : 0;
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.isBoolean.update') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "val": val,
                    "table": table,
                    'field': field
                },
                success: function(data) {
                    if (data == 1) {
                        toastr.success('Is ' + message);
                    } else {
                        toastr.success('Is Not ' + message);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
@endpush
